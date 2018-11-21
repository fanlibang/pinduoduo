<?php
namespace pinduoduo\Request;

use pinduoduo\AbstractInterface\Request;

class DdkGoodsSearchRequest extends Request
{
    /**
     * 多多进宝商品查询
     * @var string
     */
    private $type = 'pdd.ddk.goods.search';

    /**
     * 商品关键词，与opt_id字段选填一个或全部填写
     * @var
     */
    private $keyword;

    /**
     * 商品标签类目ID，使用pdd.goods.opt.get获取
     * @var
     */
    private $optId;

    /**
     * 默认值1，商品分页数
     * @var
     */
    private $page;

    /**
     * 默认100，每页商品数量
     * @var
     */
    private $pageSize;

    /**
     * 排序方式:0-综合排序;1-按佣金比率升序;2-按佣金比例降序;3-按价格升序;4-按价格降序;5-按销量升序;6-按销量降序;7-优惠券金额排序升序;8-优惠券金额排序降序;9-券后价升序排序;10-券后价降序排序;11-按照加入多多进宝时间升序;12-按照加入多多进宝时间降序;13-按佣金金额升序排序;14-按佣金金额降序排序;15-店铺描述评分升序;16-店铺描述评分降序;17-店铺物流评分升序;18-店铺物流评分降序;19-店铺服务评分升序;20-店铺服务评分降序;27-描述评分击败同类店铺百分比升序，28-描述评分击败同类店铺百分比降序，29-物流评分击败同类店铺百分比升序，30-物流评分击败同类店铺百分比降序，31-服务评分击败同类店铺百分比升序，32-服务评分击败同类店铺百分比降序
     * @var
     */
    private $sortType;

    /**
     * 是否只返回优惠券的商品，false返回所有商品，true只返回有优惠券的商品
     * @var
     */
    private $withCoupon;

    /**
     * 范围列表，可选值：[{"range_id":0,"range_from":1,"range_to":1500},{"range_id":1,"range_from":1,"range_to":1500}]
     * @var
     */
    private $rangeList;

    /**
     * 商品ID列表。例如：[123456,123]，当入参带有goods_id_list字段，将不会以opt_id、 cat_id、keyword维度筛选商品
     * @var
     */
    private $goodsIdList;

    /**
     * 招商多多客ID
     * @var
     */
    private $zsduoId;

    /**
     * 店铺类型，1-个人，2-企业，3-旗舰店，4-专卖店，5-专营店，6-普通店（未传为全部）
     * @var
     */
    private $merchantType;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setKeyWord($keyword)
    {
        $this->keyword = $keyword;
    }

    public function getKeyWord()
    {
        return $this->keyword;
    }

    public function setOptId($optId)
    {
        $this->optId = $optId;
    }

    public function getOptId()
    {
        return $this->optId;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
    }

    public function getSortType()
    {
        return $this->sortType;
    }

    public function setWithCoupon($withCoupon)
    {
        $this->withCoupon = $withCoupon;
    }

    public function getWithCoupon()
    {
        return $this->withCoupon;
    }

    public function setRangeList($rangeList)
    {
        $this->rangeList = $rangeList;
    }

    public function getRangeList()
    {
        return $this->rangeList;
    }

    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    public function getGoodsIdList()
    {
        return $this->goodsIdList;
    }

    public function setZsduoId($zsduoId)
    {
        $this->zsduoId = $zsduoId;
    }

    public function getZsduoId()
    {
        return $this->zsduoId;
    }

    public function setMerchantType($merchantType)
    {
        $this->merchantType = $merchantType;
    }

    public function getMerchantType()
    {
        return $this->merchantType;
    }

    public function getParams()
    {
        $params = [
            'type'          => $this->type,
            'keyword'       => $this->keyword,
            'opt_id'        => $this->optId,
            'page'          => $this->page,
            'page_size'     => $this->pageSize,
            'sort_type'     => $this->sortType,
            'with_coupon'   => $this->withCoupon,
            'range_list'    => $this->rangeList,
            'goods_id_list' => $this->goodsIdList,
            'zs_duo_id'     => $this->zsduoId,
            'merchant_type' => $this->merchantType,
        ];

        return array_filter($params);
    }
}