<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/4/27
 * Time: 下午4:28
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkCateListRequest extends Request
{
    private $type = 'pdd.goods.opt.get';
    private $parent_opt_id ='0';

    public function setParentOptId($parent_opt_id){
        $this->parent_opt_id=$parent_opt_id;
    }
    public function getParentOptId(){
        return $this->parent_opt_id;
    }
    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'parent_opt_id'=>$this->parent_opt_id
        ];
        return $params;
    }
}