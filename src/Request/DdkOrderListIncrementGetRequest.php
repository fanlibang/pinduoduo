<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/4/27
 * Time: 下午4:16
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkOrderListIncrementGetRequest extends Request
{
    private $type = 'pdd.ddk.order.list.increment.get';

    private $startUpdateTime;

    private $endUpdateTime;

    private $pid;

    private $pageSize;

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

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'start_update_time' => $this->startUpdateTime,
            'end_update_time' => $this->endUpdateTime,
            'p_id' => $this->pid,
            'page_size' => $this->pageSize,
            'page' => $this->page
        ];
        return array_filter($params);
    }
}