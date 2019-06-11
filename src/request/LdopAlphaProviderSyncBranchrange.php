<?php

namespace JD\request;

/**
 * 承运商网点配送范围维护接口
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=1509&apiName=jingdong.ldop.alpha.provider.sync.branchrange
 * Class LdopAlphaProviderSyncBranchrange
 * @package Jd\request
 */
class LdopAlphaProviderSyncBranchrange
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.sync.branchrange";
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