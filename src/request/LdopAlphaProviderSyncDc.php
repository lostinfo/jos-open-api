<?php

namespca Lostinfo\JosOpenApi;

/**
 * 分拨中心集包地信息同步接口
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=1511&apiName=jingdong.ldop.alpha.provider.sync.dc
 * Class LdopAlphaProviderSyncDc
 * @package Jd\request
 */
class LdopAlphaProviderSyncDc
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.sync.dc";
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
     * @param string $content
     * 报文内容
     * Required: true
     * Example Value: 
     */
    private $content;

    /**
     * @param string $content
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