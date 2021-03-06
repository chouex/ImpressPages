<?php


namespace Ip\Internal\Languages;


class Job
{
    public static function ipRouteLanguage_70($info)
    {
        if (!ipGetOption('Config.multilingual')) {
            return null;
        }

        /** @var \Ip\Request $request */
        $request = $info['request'];

        $result = array(
            'language' => null,
            'relativeUri' => $info['relativeUri']
        );

        $languages = ipContent()->getLanguages();

        if (empty($info['relativeUri'])) {

            if ($request->getRequest('aa') || $request->getRequest('pa') || $request->getRequest('sa')) {
                return null;
            }

            $languages = ipContent()->getLanguages();
            if ($languages[0]->getUrlPath() === '') {
                $result['language'] = $languages[0];
                return $result;
            } else {
                return null;
            }
        }

        $urlParts = explode('/', rtrim(parse_url($info['relativeUri'], PHP_URL_PATH), '/'), 2);
        if (empty($urlParts[0])) {
            return null;
        }

        $languageUrl = $urlParts[0] . '/';

        foreach ($languages as $language) {
            if ($language->getUrlPath() == $languageUrl) {
                $result['language'] = $language;
                break;
            }
        }

        if ($result['language']) {
            $result['relativeUri'] = isset($urlParts[1]) ? $urlParts[1] : '';
            return $result;
        }

        if ($languages[0]->getUrlPath() === '') {
            $result['language'] = $languages[0];
            return $result;
        }
        return null;
    }

    public static function ipRequestLanguage_70($info)
    {
        if (!empty($_SESSION['ipLastLanguageId'])) {
            return ipContent()->getLanguage($_SESSION['ipLastLanguageId']);
        }
        return null;
    }

    public static function ipRequestLanguage_80($info)
    {
        $languages = ipContent()->getLanguages();
        return $languages[0];
    }

}
