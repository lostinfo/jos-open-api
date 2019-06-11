<?php

namespace JD\request;

/**
 * 网点末端分拨中心对应关系维护接口
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=1510&apiName=jingdong.ldop.alpha.provider.sync.lastdc
 * Class LdopAlphaProviderSyncLastdc
 * @package Jd\request
 */
class LdopAlphaProviderSyncLastdc
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.sync.lastdc";
    }

    public function getApiParas()
    {
        return json_encode($this->apiParas, JSON_FORCE_OBJECT);
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }

    /**
     * @param String $content
     * 报文内容
     * Required: true
     * Example Value: 
     */
    private $content;

    /**
     * @param String $content
     * 报文内容
     * Example Value: 
     */
    public function setContent($content)
    {
        $this->content             = $content;
        $this->apiParas["content"]  = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

}