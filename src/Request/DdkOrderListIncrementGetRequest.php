<?php
namespace pinduoduo\Request;


use pinduoduo\AbstractInterface\Request;

class DdkOrderListIncrementGetRequest extends Request
{
    /**
     * 按照时间段获取授权多多客下面所有多多客的推广订单信息
     * @var string
     */
    private $type = 'pdd.ddk.order.list.increment.get';

    /**
     * 最近90天内多多进宝商品订单更新时间--查询时间开始。note：此时间为时间戳，指格林威治时间 1970 年01 月 01 日 00 时 00 分 00 秒(北京时间 1970 年 01 月 01 日 08 时 00 分 00 秒)起至现在的总秒数
     * @var
     */
    private $startUpdateTime;

    /**
     * 查询结束时间，和开始时间相差不能超过24小时。note：此时间为时间戳，指格林威治时间 1970 年01 月 01 日 00 时 00 分 00 秒(北京时间 1970 年 01 月 01 日 08 时 00 分 00 秒)起至现在的总秒数
     * @var
     */
    private $endUpdateTime;

    /**
     * 返回的每页结果订单数，默认为100，范围为10到100，建议使用40~50，可以提高成功率，减少超时数量。
     * @var
     */
    private $pageSize;

    /**
     * 第几页，从1到10000，默认1，注：使用最后更新时间范围增量同步时，必须采用倒序的分页方式（从最后一页往回取）才能避免漏单问题。
     * @var
     */
    private $page;

    /**
     * 是否返回总数，默认为true，如果指定false, 则返回的结果中不包含总记录数，通过此种方式获取增量数据，效率在原有的基础上有80%的提升。
     * @var
     */
    private $returnCount;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setStartUpdateTime($startUpdateTime)
    {
        $this->startUpdateTime = $startUpdateTime;
    }

    public function getStartUpdateTime()
    {
        return $this->startUpdateTime;
    }

    public function setEndUpdateTime($endUpdateTime)
    {
        $this->endUpdateTime = $endUpdateTime;
    }

    public function getEndUpdateTime()
    {
        return $this->endUpdateTime;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setReturnCount($returnCount)
    {
        $this->returnCount = $returnCount;
    }

    public function getReturnCount()
    {
        return $this->returnCount;
    }

    public function getParams()
    {
        $params = [
            'type'              => $this->type,
            'start_update_time' => $this->startUpdateTime,
            'end_update_time'   => $this->endUpdateTime,
            'page_size'         => $this->pageSize,
            'page'              => $this->page,
            'return_count'      => $this->returnCount
        ];
        return array_filter($params);
    }
}