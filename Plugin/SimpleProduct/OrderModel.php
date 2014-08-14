<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: mangirdas
 * Date: 7/22/14
 * Time: 11:14 AM
 */

namespace Plugin\SimpleProduct;


class OrderModel
{
    public static function create($data)
    {


        $tableFields = array(
            /*'title' => 1,
            'alias' => 1,
            'type' => 1,
            'description' => 1,
            'price' => 1,
            'currency' => 1,
            */'userId' => 1,
            'name' => 1,
            'telephone' => 1,
            'email' => 1,
            'address' => 1,
            'deliveryCost' => 1,
            'country' => 1,
            //'widgetId' => 1,
            'other' => 1
        );

        $params = array_intersect_key($data, $tableFields);

        if (!isset($params['userId']) && ipUser()->loggedIn()) {
            $params['userId'] = ipUser()->userId();
        }

        $otherParams = array_diff_key($data, $tableFields);

        if (!isset($params['other']) && !empty($otherParams)) {
            $params['other'] = json_encode(self::utf8Encode($otherParams));
        }

        if (empty($params['price'])) {
           $params['price'] = 0;
        }
        $params['price'] = $params['price'] * 100;


        $orderId = ipDb()->insert('simple_product_order', $params);

        foreach ($data['items'] as $item) {
            $item['order_id']=$orderId;
            $itemId = ipDb()->insert('simple_product_order_item', $item); 
        }
        return $orderId;
    }

    /**
     * Returns $dat encoded to UTF8
     * @param mixed $dat array or string
     * @return string
     */
    protected static function utf8Encode($dat)
    {
        if (is_string($dat)) {
            if (mb_check_encoding($dat, 'UTF-8')) {
                return $dat;
            } else {
                return utf8_encode($dat);
            }
        }
        if (is_array($dat)) {
            $answer = array();
            foreach ($dat as $i => $d) {
                $answer[$i] = self::utf8Encode($d);
            }
            return $answer;
        }
        return $dat;
    }

}
