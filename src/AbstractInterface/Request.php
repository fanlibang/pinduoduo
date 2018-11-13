<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/4/26
 * Time: 下午3:40
 */

namespace Xidiankeji\Pinduoduo\AbstractInterface;


class Request
{
    private $type;

    private $client_id;

    private $access_token;

//    private $timestamp;

    private $data_type;

    private $version;

    private $sign;
}