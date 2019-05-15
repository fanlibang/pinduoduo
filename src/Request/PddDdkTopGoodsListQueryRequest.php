<?php
/**
 * Created by PhpStorm.
 * User: MuBeiChen
 * Date: 2019-05-10
 * Time: 10:48
 */
namespace pinduoduo\Request;

use pinduoduo\AbstractInterface\Request;

class PddDdkTopGoodsListQueryRequest extends Request
{
    /**
     * 多多客获取爆款排行商品接口
     * @var string
     */
    private $type = 'pdd.ddk.top.goods.list.query';

    /**
     * 推广位id
     * @var
     */
    private $pId;

    /**
     * 从多少位置开始请求；默认值 ： 0
     * @var
     */
    private $offset;

    /**
     * 1-实时热销榜；2-实时收益榜
     * @var
     */
    private $sortType;

    /**
     * 默认值1，商品分页数
     * @var
     */
    private $limit;


    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setPId($pId)
    {
        $this->pId = $pId;
    }

    public function getPId()
    {
        return $this->pId;
    }

    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
    }

    public function getSortType()
    {
        return $this->sortType;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function getParams()
    {
        $params = [
            'type'      => $this->type,
            'p_id'      => $this->pId,
            'offset'    => $this->offset,
            'sort_type' => $this->sortType,
            'limit'     => $this->limit,
        ];
        return array_filter($params);
    }
}