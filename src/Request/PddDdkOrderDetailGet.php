<?php
/**
 * Created by PhpStorm.
 * User: MuBeiChen
 * Date: 2019-05-10
 * Time: 11:32
 */
namespace pinduoduo\Request;

use pinduoduo\AbstractInterface\Request;

class PddDdkOrderDetailGet extends Request
{

    /**
     * 查询订单详情
     * @var string
     */
    private $type = 'pdd.ddk.order.detail.get';

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