<?php
namespace pinduoduo\Request;

use pinduoduo\AbstractInterface\Request;

class DdkGoodsDetailRequest extends Request
{
    /**
     * 查询多多进宝商品详情
     * @var string
     */
    private $type = 'pdd.ddk.goods.detail';

    /**
     * 商品ID，仅支持单个查询。例如：[123456]
     * @var
     */
    private $goodsIdList;

    /**
     * 推广位id
     * @var
     */
    private $pId;

    /**
     * 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。
     * @var
     */
    private $customParameters;

    /**
     * 招商多多客ID
     * @var
     */
    private $zsduoId;

    /**
     * 佣金优惠券对应推广类型，3：专属 4：招商
     * @var
     */
    private $planType;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getGoodsIdList()
    {
        return $this->goodsIdList;
    }

    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    public function setPId($pId)
    {
        $this->pId = $pId;
    }

    public function getPId()
    {
        return $this->pId;
    }

    public function setZsduoId($zsduoId)
    {
        $this->zsduoId = $zsduoId;
    }

    public function getZsduoId()
    {
        return $this->zsduoId;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    public function setPlanType($planType)
    {
        $this->planType = $planType;
    }

    public function getPlanType()
    {
        return $this->planType;
    }

    public function getParams()
    {
        return [
            'type'              => $this->type,
            'goods_id_list'     => $this->goodsIdList,
            'p_id'              => $this->pId,
            'custom_parameters' => $this->customParameters,
            'zs_duo_id'         => $this->zsduoId,
            'plan_type'         => $this->planType,
        ];
    }
}