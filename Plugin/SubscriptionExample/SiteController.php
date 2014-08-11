<?php
/**
 * @package   ImpressPages
 */


namespace Plugin\SubscriptionExample;


class SiteController extends \Ip\Controller
{

    public function subscribe ()
    {

        $options = array(
            'item' => 'Plan A',
            'period' => 1,
            'periodType' => 'day', //day, week, month, year
            'amount' => 9900,
            'currency' => 'USD'
        );
        $subscriptionUrl = ipEcommerce()->subscriptionPaymentUrl($options);

        if (!ipUser()->loggedIn()) {
            $_SESSION['User_redirectAfterLogin'] = ipRouteUrl('SubscriptionExample');
            $loginUrl = ipRouteUrl('User_login');
            return new \Ip\Response\Redirect($loginUrl);
        }

        return '<a class="button" href="' . escAttr($subscriptionUrl) . '" >Subscribe</a>';

    }
}
