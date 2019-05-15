<?php
/**
 * Created by PhpStorm.
 * User: MuBeiChen
 * Date: 2019-05-15
 * Time: 10:39
 */
namespace pinduoduo\Request;

use pinduoduo\AbstractInterface\Request;

class PddDdkOauthOrderDetailGetRequest extends Request
{

    /**
     * 查询订单详情
     * @var string
     */
    private $type = 'pdd.ddk.oauth.order.detail.get';

    /**
     * 订单号
     * @var
     */
    private $orderSn;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setOrderSn($orderSn)
    {
        $this->orderSn = $orderSn;
    }

    public function getOrderSn()
    {
        return $this->orderSn;
    }

    public function getParams()
    {
        $params = [
            'type'     => $this->type,
            'order_sn' => $this->orderSn,
        ];
        return array_filter($params);
    }
}