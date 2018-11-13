<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/4/26
 * Time: 下午2:42
 */

namespace Xidiankeji\Pinduoduo\Facades;


use Illuminate\Support\Facades\Facade;

class Pinduoduo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pinduoduo';
    }
}