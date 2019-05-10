<?php
/**
 * Created by PhpStorm.
 * User: MuBeiChen
 * Date: 2019-05-10
 * Time: 11:34
 */
namespace pinduoduo\Request;

use pinduoduo\AbstractInterface\Request;

class PddDdkGoodsBasicInfoGet extends Request
{

    /**
     * 获取商品基本信息接口
     * @var string
     */
    private $type = 'pdd.ddk.goods.basic.info.get';

    /**
     * 商品id
     * @var
     */
    private $goodsIdList;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    public function getGoodsIdList()
    {
        return $this->goodsIdList;
    }

    public function getParams()
    {
        $params = [
            'type'          => $this->type,
            'goods_id_list' => $this->goodsIdList,
        ];
        return array_filter($params);
    }
}