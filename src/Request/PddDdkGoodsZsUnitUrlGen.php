<?php
/**
 * Created by PhpStorm.
 * User: MuBeiChen
 * Date: 2019-05-10
 * Time: 11:38
 */
namespace pinduoduo\Request;

use pinduoduo\AbstractInterface\Request;

class PddDdkGoodsZsUnitUrlGen extends Request
{

    /**
     * 多多进宝转链接口
     * @var string
     */
    private $type = 'pdd.ddk.goods.zs.unit.url.gen';

    /**
     * 商品id
     * @var
     */
    private $sourceUrl;

    /**
     * 推广位id
     * @var
     */
    private $pId;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setSourceUrl($sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;
    }

    public function getSourceUrl()
    {
        return $this->sourceUrl;
    }

    public function setPId($pId)
    {
        $this->pId = $pId;
    }

    public function getPId()
    {
        return $this->pId;
    }

    public function getParams()
    {
        $params = [
            'type'       => $this->type,
            'source_url' => $this->sourceUrl,
            'p_id'       => $this->pId,
        ];
        return array_filter($params);
    }
}