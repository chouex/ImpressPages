<?php
/**
 * @package   ImpressPages
 */


namespace Plugin\User;


class SiteController extends \Ip\Controller
{
    public function login()
    {
        return ipSlot('User_login');
    }

    public function registration()
    {
        if (ipUser()->loggedIn()) {
            return new \Ip\Response\Redirect(ipRouteUrl('User_profile'));
        }
        return ipSlot('User_registration');
    }

    public function passwordReset()
    {
        return ipSlot('User_passwordReset');
    }

    public function profile()
    {
        if (!ipUser()->loggedIn()) {
            return new \Ip\Response\Redirect(ipRouteUrl('User_login'));
        }
        return ipSlot('User_profile');
    }

    public function updatePassword()
    {
        if (!ipUser()->loggedIn()) {
            return new \Ip\Response\Redirect(ipRouteUrl('User_login'));
        }
        return ipSlot('User_updatePassword');
    }

    public function register()
    {
        ipRequest()->mustBePost();
        $post = ipRequest()->getPost();

        $form = FormModel::registrationForm();

        $errors = $form->validate($post);

        if (ipRequest()->getPost('username') && Model::getByUsername(ipRequest()->getPost('username'))) {
            $errors['username'] = __("This username is already taken", 'User', false);
        }
        if (Model::getByEmail(ipRequest()->getPost('email'))) {
            $errors['email'] = __("This email is already registered", 'User', false);
        }


        $errors = ipFilter('User_registerFormValidate', $errors, array('post' => $post));

        if (!empty($errors)) {
            $data = array (
                'status' => 'error',
                'errors' => $errors
            );
            return new \Ip\Response\Json($data);
        }


        $data = $form->filterValues($post);

        $username = isset($data['username']) ? $data['username'] : null;
        $email = $data['email'];
        $password = $data['password'];

        $userId = Service::add($username, $email, $password);
        ipUser()->login($userId);

        $eventData = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'postData' => $post
        );
        ipEvent('User_register', $eventData);

        $redirect = ipConfig()->baseUrl();

        if (ipGetOption('User.urlAfterRegistration')) {
            $redirect = ipGetOption('User.urlAfterRegistration');
        }


        ipFilter('User_registrationRedirectUrl', $redirect, $eventData);


        $data = array (
            'status' => 'ok',
            'redirectUrl' => $redirect,
            'id' => $userId
        );
        return new \Ip\Response\Json($data);
    }

    public function delete()
    {
        ipRequest()->mustBePost();

        if (!ipUser()->loggedIn()) {
            //redirect to login page
            if (!empty($_SERVER['HTTP_REFERER'])) {
                Model::setRedirectAfterLogin($_SERVER['HTTP_REFERER']);
            }
            $data = array (
                'status' => 'error',
                'redirectUrl' => Model::loginUrl()
            );
            return new \Ip\Response\Json($data);
        }



        $userId = ipUser()->userId();

        $post = ipRequest()->getPost();

        $form = FormModel::deleteForm();

        $errors = $form->validate($post);

        $errors = ipFilter('User_deleteFormValidate', $errors, array('post' => $post));

        if (!empty($errors)) {
            $data = array (
                'status' => 'error',
                'errors' => $errors
            );
            return new \Ip\Response\Json($data);
        }


        $eventData = array (
            'userId' => ipUser()->userId()
        );

        ipEvent('User_delete', $eventData);


        ipUser()->logout();
        Service::delete($userId);

        $redirect = ipConfig()->baseUrl();
        ipFilter('User_deleteRedirectUrl', $redirect, $eventData);


        $data = array (
            'status' => 'ok',
            'redirectUrl' => $redirect
        );

        return new \Ip\Response\Json($data);

    }

    public function update()
    {
        ipRequest()->mustBePost();

        if (!ipUser()->loggedIn()) {
            //redirect to login page
            if (!empty($_SERVER['HTTP_REFERER'])) {
                Model::setRedirectAfterLogin($_SERVER['HTTP_REFERER']);
            }
            $data = array (
                'status' => 'error',
                'redirectUrl' => Model::loginUrl()
            );
            return new \Ip\Response\Json($data);
        }

        $post = ipRequest()->getPost();

        $form = FormModel::profileForm();

        $errors = $form->validate($post);

        if (!empty($post['id'])) {
            $user = Service::get($post['id']);
            if (!$user) {
                $errors['id'] = "User doesn't exist"; // should never happen
            }
        }

        $errors = ipFilter('User_profileFormValidate', $errors, array('post' => $post));

        if (!empty($errors)) {
            $data = array (
                'status' => 'error',
                'errors' => $errors
            );
            return new \Ip\Response\Json($data);
        }



        $data = $form->filterValues($post);

        Service::update($user['id'], $data);

        $eventData = array(
            'postData' => $data
        );
        ipEvent('User_profileUpdate', $eventData);

        $_SESSION['user']['profileUpdated'] = 1;

        $data = array (
            'status' => 'ok',
            'id' => $user['id']
        );
        return new \Ip\Response\Json($data);


    }

    public function updatePasswordAjax()
    {
        ipRequest()->mustBePost();

        if (!ipUser()->loggedIn()) {
            //redirect to login page
            if (!empty($_SERVER['HTTP_REFERER'])) {
                Model::setRedirectAfterLogin($_SERVER['HTTP_REFERER']);
            }
            $data = array (
                'status' => 'error',
                'redirectUrl' => Model::loginUrl()
            );
            return new \Ip\Response\Json($data);
        }

        $post = ipRequest()->getPost();

        $form = FormModel::passwordUpdateForm();

        $errors = $form->validate($post);

        //if password not empty
        if (!Service::checkPassword(ipUser()->userId(), $post['currentPassword'])) {
            //if provided current password is incorrect
            $errors['currentPassword'] = __('Incorrect password', 'User', false);
        }

        $errors = ipFilter('User_updatePasswordFormValidate', $errors, array('post' => $post));

        if (!empty($errors)) {
            $data = array (
                'status' => 'error',
                'errors' => $errors
            );
            return new \Ip\Response\Json($data);
        }



        $updateData = array (
            'password' => $post['newPassword']
        );
        Service::update(ipUser()->userId(), $updateData);

        $eventData = array(
            'postData' => $post
        );
        ipEvent('User_passwordUpdate', $eventData);

        $_SESSION['user']['passwordUpdated'] = 1;

        $data = array (
            'status' => 'ok',
            'id' => ipUser()->userId()
        );
        return new \Ip\Response\Json($data);
    }


    public function logout()
    {
        ipRequest()->mustBePost();
        $userId = ipUser()->userId();
        ipUser()->logout();


        $redirect = ipConfig()->baseUrl();

        if (ipGetOption('User.urlAfterLogout')) {
            $redirect = ipGetOption('User.urlAfterLogout');
        }

        $data = array(
            'userId' => $userId
        );
        ipFilter('User_logoutRedirectUrl', $redirect, $data);


        $data = array (
            'status' => 'ok',
            'redirectUrl' => $redirect,
            'id' => $userId
        );
        return new \Ip\Response\Json($data);
    }

    public function loginAjax()
    {
        ipRequest()->mustBePost();
        $user = null;
        if (ipRequest()->getPost('username')){
            $user = Service::getByEmail(ipRequest()->getPost('username'));
            if (!$user) {
                $user = Service::getByUsername(ipRequest()->getPost('username'));
                if (!$user) {
                    $errors['username'] = __('Following user doesn\'t exist', 'User', false);
                }
            }
        }

        $post = ipRequest()->getPost();
        $form = FormModel::loginForm();
        $errors = $form->validate($post);

        if (empty($errors) && !Service::checkPassword($user['id'], ipRequest()->getPost('password'))) {
            $errors['password'] = __('Incorrect password', 'User', false);
        }

        if (!empty($errors)) {
            $data = array (
                'status' => 'error',
                'errors' => $errors
            );
            return new \Ip\Response\Json($data);
        }


        ipUser()->login($user['id']);

        $redirect = ipConfig()->baseUrl();

        if (ipGetOption('User.urlAfterLogin')) {
            $redirect = ipGetOption('User.urlAfterLogin');
        }



        if (isset($_SESSION['User_redirectAfterLogin'])) {
            $redirect = $_SESSION['User_redirectAfterLogin'];
            unset($_SESSION['User_redirectAfterLogin']);
        }
        $data = array(
            'userId' => $user['id']
        );
        ipFilter('User_loginRedirectUrl', $redirect, $data);


        $data = array (
            'status' => 'ok',
            'redirectUrl' => $redirect,
            'id' => $user['id']
        );
        return new \Ip\Response\Json($data);



    }

    public function passwordReset1()
    {
        ipRequest()->mustBePost();
        $user = null;
        $post = ipRequest()->getPost();
        $form = FormModel::passwordResetForm1();
        $errors = $form->validate($post);

        if (ipRequest()->getPost('username')){
            $user = Service::getByEmail(ipRequest()->getPost('username'));
            if (!$user) {
                $user = Service::getByUsername(ipRequest()->getPost('username'));
                if (!$user) {
                    $errors['username'] = __('Following user doesn\'t exist', 'User', false);
                }
            }
        }



        $errors = ipFilter('User_passwordResetFormValidate', $errors, array('post' => $post));

        if (!empty($errors)) {
            $data = array (
                'status' => 'error',
                'errors' => $errors
            );
            return new \Ip\Response\Json($data);
        }


        Model::sendResetPasswordLink($user['id']);

        $redirect = '';
        $eventData = array(
            'postData' => $post
        );
        ipFilter('User_passwordResetRedirectUrl', $redirect, $eventData);


        $instructions = ipView('view/passwordReset1Instructions.php')->render();
        $data = array (
            'status' => 'ok',
            'replaceHtml' => $instructions,
            'id' => $user['id']
        );

        if ($redirect) {
            $data['redirectUrl'] = $redirect;
        }

        return new \Ip\Response\Json($data);
    }



    public function passwordReset2($userId, $secret)
    {
        $passwordResetForm = FormModel::passwordResetForm2($userId, $secret);

        $data = array (
            'userId' => $userId,
            'secret' => $secret,
            'form' => $passwordResetForm
        );

        $response = ipView('view/passwordReset2.php', $data);

        $response = ipFilter('User_passwordReset2', $response, array('userId' => $userId));
        return $response;
    }



    public function passwordReset3()
    {

        ipRequest()->mustBePost();

        $validateForm = FormModel::passwordResetForm2(null, null);
        $post = ipRequest()->getPost();
        $errors = $validateForm->validate($post);

        $password = ipRequest()->getPost('password');
        if (!Model::validPasswordResetSecret($post['userId'], $post['secret'])) {
            $errors['globalError'] = Model::getError();
        }

        $errors = ipFilter('User_passwordResetValidate', $errors, array('post' => $post));

        if (!empty($errors)) {
            $data = array (
                'status' => 'error',
                'errors' => $errors
            );
            return new \Ip\Response\Json($data);
        }


        Model::setUserPassword($post['userId'], $post['password']);
        Model::removePasswordResetSecret($post['userId']);

        $data = array (
            'userId' => $post['userId']
        );
        $replaceHtml = ipView('view/passwordResetSuccess.php', $data)->render();

        $data = array (
            'status' => 'ok',
            'replaceHtml' => $replaceHtml
        );
        return new \Ip\Response\Json($data);

    }

}
