<?php

namespca Lostinfo\JosOpenApi;

/**
 * 分拨中心集包地信息同步接口内部转换实现
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=1706&apiName=jingdong.ldop.alpha.distributeCenter.jos.Convert
 * Class LdopAlphaDistributeCenterJosConvert
 * @package Jd\request
 */
class LdopAlphaDistributeCenterJosConvert
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.distributeCenter.jos.Convert";
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
     * @param string $distributeCenterListXml
     * 分拨中心集包地列表XML
     * Required: true
     * Example Value: 
     */
    private $distributeCenterListXml;

    /**
     * @param string $distributeCenterListXml
     * 分拨中心集包地列表XML
     * Example Value: 
     */
    public function setDistributeCenterListXml($distributeCenterListXml)
    {
        $this->distributeCenterListXml             = $distributeCenterListXml;
        $this->apiParas["distributeCenterListXml"]  = $distributeCenterListXml;
    }

    public function getDistributeCenterListXml()
    {
        return $this->distributeCenterListXml;
    }

}