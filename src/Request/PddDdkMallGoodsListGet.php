<?php
/**
 * Created by PhpStorm.
 * User: MuBeiChen
 * Date: 2019-05-10
 * Time: 11:29
 */

namespace pinduoduo\Request;

use pinduoduo\AbstractInterface\Request;

class PddDdkMallGoodsListGet extends Request
{

    /**
     * 查询店铺商品
     * @var string
     */
    private $type = 'pdd.ddk.mall.goods.list.get';

    /**
     * 店铺id
     * @var
     */
    private $mallId;

    /**
     * 每页数量
     * @var
     */
    private $pageNumber;

    /**
     * 每页商品数量
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

    public function setMallId($mallId)
    {
        $this->mallId = $mallId;
    }

    public function getMallId()
    {
        return $this->mallId;
    }

    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
    }

    public function getPageNumber()
    {
        return $this->pageNumber;
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
            'type'        => $this->type,
            'mall_id'     => $this->mallId,
            'page_number' => $this->pageNumber,
            'page_size'   => $this->pageSize,
        ];
        return array_filter($params);
    }
}