<?php
namespace pinduoduo\Request;


use pinduoduo\AbstractInterface\Request;

class DdkActPromUrlGenerateRequest extends Request
{
    private $type = 'pdd.ddk.act.prom.url.generate';

    private $urlType;

    private $generateShortUrl;

    private $generateMobileShortUrl;

    private $pIdList;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setUrlType($urlType)
    {
        $this->urlType = $urlType;
    }

    public function getUrlType()
    {
        return $this->urlType;
    }

    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    public function getGenerateShortUrl()
    {
        return $this->generateShortUrl;
    }

    public function setGenerateMobileShortUrl($generateMobileShortUrl)
    {
        $this->generateMobileShortUrl = $generateMobileShortUrl;
    }

    public function getGenerateMobileShortUrl()
    {
        return $this->generateMobileShortUrl;
    }

    public function setPidList($pidList)
    {
        $this->pIdList = $pidList;
    }

    public function getPidList()
    {
        return $this->pIdList;
    }

    public function getParams()
    {
        $params = [
            'type'                      => $this->type,
            'url_type'                  => $this->urlType,
            'generate_short_url'        => $this->generateShortUrl,
            'generate_mobile_short_url' => $this->generateMobileShortUrl,
            'p_id_list'                 => $this->pIdList
        ];
        return array_filter($params);
    }
}