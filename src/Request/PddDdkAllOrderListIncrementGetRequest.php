<?php
/**
 * Created by PhpStorm.
 * User: MuBeiChen
 * Date: 2019-05-15
 * Time: 10:30
 */
namespace pinduoduo\Request;

use pinduoduo\AbstractInterface\Request;

class PddDdkAllOrderListIncrementGetRequest extends Request
{
    /**
     * 查询所有授权的多多客订单
     * @var string
     */
    private $type = 'pdd.ddk.all.order.list.increment.get';

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

    public function getParams()
    {
        $params = [
            'type'              => $this->type,
            'start_update_time' => $this->startUpdateTime,
            'end_update_time'   => $this->endUpdateTime,
            'page_size'         => $this->pageSize,
            'page'              => $this->page,
        ];
        return array_filter($params);
    }
}