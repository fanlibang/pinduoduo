<?php
namespace pinduoduo\Request;

use pinduoduo\AbstractInterface\Request;

class PddDdkGoodsUnitQuery extends Request
{

    /**
     * 查询商品的推广计划
     * @var string
     */
    private $type = 'pdd.ddk.goods.unit.query';

    /**
     * 商品id
     * @var
     */
    private $goodsId;

    /**
     * 招商duoId
     * @var
     */
    private $zsduoId;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setGoodsId($goodsId)
    {
        $this->goodsId = $goodsId;
    }

    public function getGoodsId()
    {
        return $this->goodsId;
    }

    public function setZsduoId($zsduoId)
    {
        $this->zsduoId = $zsduoId;
    }

    public function getZsduoId()
    {
        return $this->zsduoId;
    }

    public function getParams()
    {
        $params = [
            'type'      => $this->type,
            'goods_id'  => $this->goodsId,
            'zs_duo_id' => $this->zsduoId,
        ];
        return array_filter($params);
    }
}