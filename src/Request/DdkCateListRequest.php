<?php
namespace fanlibang\pinduoduo\Request;

use fanlibang\pinduoduo\AbstractInterface\Request;

class DdkCateListRequest extends Request
{
    private $type = 'pdd.goods.opt.get';
    private $parent_opt_id = '0';

    public function setParentOptId($parent_opt_id)
    {
        $this->parent_opt_id = $parent_opt_id;
    }

    public function getParentOptId()
    {
        return $this->parent_opt_id;
    }

    public function getParams()
    {
        $params = [
            'type'          => $this->type,
            'parent_opt_id' => $this->parent_opt_id
        ];
        return $params;
    }
}