<?php
/**
 * @package   ImpressPages
 */



namespace Plugin\SubscriptionExample;


class Event
{


    public static function ipSubscriptionSignup($info)
    {
        //mark somehow in the database that this user has subscribed to this service
        //$info['item'] - subscription plan
        //$info['userId'] - user that has purchased the subscription


    }

    public static function ipSubscriptionExpired($info)
    {
        //deny services to the user
        //$info['item'] - subscription plan
        //$info['userId'] - user that has purchased the subscription

    }


}
