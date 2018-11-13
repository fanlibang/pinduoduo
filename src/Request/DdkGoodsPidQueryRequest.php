<?php
namespace fanlibang\pinduoduo\Request;

use fanlibang\pinduoduo\AbstractInterface\Request;

class DdkGoodsPidQueryRequest extends Request
{
    private $type = 'pdd.ddk.goods.pid.query';

    private $page;

    private $pageSize;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
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

    public function getParams()
    {
        $params = [
            'type'      => $this->type,
            'page'      => $this->page,
            'page_size' => $this->pageSize
        ];

        return array_filter($params);
    }
}