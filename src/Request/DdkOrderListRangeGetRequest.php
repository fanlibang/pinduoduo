<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/4/27
 * Time: 下午12:32
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkOrderListRangeGetRequest extends Request
{
    private $type = 'pdd.ddk.order.list.range.get';

    private $startTime;

    private $endTime;

    private $pid;

    private $pageSize;

    private $page;

    private $timeType;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function getPid()
    {
        return $this->pid;
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

    public function setTimeType($timeType)
    {
        $this->timeType = $timeType;
    }

    public function getTimeType()
    {
        return $this->timeType;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'start_time' => $this->startTime,
            'end_time' => $this->endTime,
            'p_id' => $this->pid,
            'page_size' => $this->pageSize,
            'page' => $this->page,
            'time_type' => $this->timeType
        ];
        return array_filter($params);
    }
}