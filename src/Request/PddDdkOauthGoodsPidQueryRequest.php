<?php
namespace pinduoduo\Request;

use pinduoduo\AbstractInterface\Request;

class PddDdkOauthGoodsPidQueryRequest extends Request
{
    /**
     * 多多客已生成推广位信息查询
     * @var string
     */
    private $type = 'pdd.ddk.oauth.goods.pid.query';

    /**
     * 返回的页数
     * @var
     */
    private $page;

    /**
     * 返回的每页推广位数量
     * @var
     */
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
            'page_size' => $this->pageSize,
            'page'      => $this->page,
        ];
        return array_filter($params);
    }
}