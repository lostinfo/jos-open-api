<?php

namespca Lostinfo\JosOpenApi;

/**
 * 单号规则同步接口
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=1710&apiName=jingdong.ldop.alpha.waybillRule.jos.Convert
 * Class LdopAlphaWaybillRuleJosConvert
 * @package Jd\request
 */
class LdopAlphaWaybillRuleJosConvert
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.waybillRule.jos.Convert";
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
     * @param string $waybillCodeRuleListXml
     * 单号规则列表XML
     * Required: true
     * Example Value: 
     */
    private $waybillCodeRuleListXml;

    /**
     * @param string $waybillCodeRuleListXml
     * 单号规则列表XML
     * Example Value: 
     */
    public function setWaybillCodeRuleListXml($waybillCodeRuleListXml)
    {
        $this->waybillCodeRuleListXml             = $waybillCodeRuleListXml;
        $this->apiParas["waybillCodeRuleListXml"]  = $waybillCodeRuleListXml;
    }

    public function getWaybillCodeRuleListXml()
    {
        return $this->waybillCodeRuleListXml;
    }

}