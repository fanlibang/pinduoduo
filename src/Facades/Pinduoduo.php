<?php
namespace pinduoduo\Facades;


use Illuminate\Support\Facades\Facade;

class Pinduoduo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pinduoduo';
    }
}