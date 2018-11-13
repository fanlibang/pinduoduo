<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/4/27
 * Time: 下午12:15
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkGoodsPidGenerateRequest extends Request
{
    private $type = 'pdd.ddk.goods.pid.generate';

    private $number;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'number' => $this->number
        ];

        return array_filter($params);
    }
}