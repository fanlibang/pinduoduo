<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/4/27
 * Time: 上午10:23
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkGoodsSearchRequest extends Request
{
    private $type = 'pdd.ddk.goods.search';

    private $keyword;

    private $categoryId;

    private $page;

    private $pageSize;

    private $sortType;

    private $withCoupon;

    private $rangeList;

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

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
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

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'keyword' => $this->keyword,
            'category_id' => $this->categoryId,
            'page' => $this->page,
            'page_size' => $this->pageSize,
            'sort_type' => $this->sortType,
            'with_coupon' => $this->withCoupon,
            'range_list' => $this->rangeList
        ];

        return array_filter($params);
    }
}