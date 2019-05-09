<?php

namespace pinduoduo\Request;

use pinduoduo\AbstractInterface\Request;

class PddDdkMerchantListGetRequest extends Request
{

    /**
     * 多多客查店铺列表接口
     * @var string
     */
    private $type = 'pdd.ddk.merchant.list.get';

    /**
     * 店铺id
     * @var
     */
    private $mallIdList;

    /**
     * 店铺类型
     * @var
     */
    private $merchantTypeList;

    /**
     * 查询范围0----商品拼团价格区间；1----商品券后价价格区间；2----佣金比例区间；3----优惠券金额区间；4----加入多多进宝时间区间；5----销量区间；6----佣金金额区间
     * @var
     */
    private $queryRangeStr;

    /**
     * 商品类目ID，使用pdd.goods.cats.get接口获取
     * @var
     */
    private $catId;

    /**
     * 是否有优惠券 （0 所有；1 必须有券。）
     * @var
     */
    private $hasCoupon;

    /**
     * 每页数量
     * @var
     */
    private $pageNumber;

    /**
     * 分页数
     * @var
     */
    private $pageSize;

    /**
     * 筛选范围
     * @var
     */
    private $rangeVoList;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setMallIdList($mallIdList)
    {
        $this->mallIdList = $mallIdList;
    }

    public function getMallIdList()
    {
        return $this->mallIdList;
    }

    public function setMerchantTypeList($merchantTypeList)
    {
        $this->merchantTypeList = $merchantTypeList;
    }

    public function getMerchantTypeList()
    {
        return $this->merchantTypeList;
    }

    public function setQueryRangeStr($queryRangeStr)
    {
        $this->queryRangeStr = $queryRangeStr;
    }

    public function getQueryRangeStr()
    {
        return $this->queryRangeStr;
    }

    public function setCatId($catId)
    {
        $this->catId = $catId;
    }

    public function getCatId()
    {
        return $this->catId;
    }

    public function setHasCoupon($hasCoupon)
    {
        $this->hasCoupon = $hasCoupon;
    }

    public function getHasCoupon()
    {
        return $this->hasCoupon;
    }

    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
    }

    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setRangeVoList($rangeVoList)
    {
        $this->rangeVoList = $rangeVoList;
    }

    public function getRangeVoList()
    {
        return $this->rangeVoList;
    }

    public function getParams()
    {
        $params = [
            'type'               => $this->type,
            'mall_id_list'       => $this->mallIdList,
            'merchant_type_list' => $this->merchantTypeList,
            'query_range_str'    => $this->queryRangeStr,
            'cat_id'             => $this->catId,
            'has_coupon'         => $this->hasCoupon,
            'page_number'        => $this->pageNumber,
            'page_size'          => $this->pageSize,
            'range_vo_list'      => $this->rangeVoList,
        ];
        return array_filter($params);
    }
}