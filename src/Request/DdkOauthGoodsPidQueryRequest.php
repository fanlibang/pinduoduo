<?php
/**
 * 多多客：已生成推广位信息查询
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkOauthGoodsPidQueryRequest extends Request
{
    private $type = 'pdd.ddk.oauth.goods.pid.query';


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
            'type' => $this->type,
            'page_size' => $this->pageSize,
            'page' => $this->page,
        ];
        return array_filter($params);
    }
}