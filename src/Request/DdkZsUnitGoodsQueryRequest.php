<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 2019-04-10
 * Time: 14:20
 */
namespace pinduoduo\Request;

use pinduoduo\AbstractInterface\Request;

class DdkZsUnitGoodsQueryRequest extends Request
{

    /**
     * 查询招商推广计划商品
     * @var string
     */
    private $type = 'pdd.ddk.zs.unit.goods.query';

    /**
     * 招商多多客ID
     * @var
     */
    private $zsduoId;

    /**
     * 页码，默认为1
     * @var
     */
    private $page;

    /**
     * 每页个数，默认100
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

    public function setZsduoId($zsduoId)
    {
        $this->zsduoId = $zsduoId;
    }

    public function getZsduoId()
    {
        return $this->zsduoId;
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
            'zs_duo_id' => $this->zsduoId,
            'page'      => $this->page,
            'page_size' => $this->pageSize,
        ];
        return array_filter($params);
    }
}