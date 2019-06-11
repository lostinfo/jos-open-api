<?php

namespace JD\request;

/**
 * Jos接口内部转换-下单接口
 * 无界电子面单-电子面单商家及ISV使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=356&apiId=1700&apiName=jingdong.ldop.alpha.waybill.jos.Convert
 * Class LdopAlphaWaybillJosConvert
 * @package Jd\request
 */
class LdopAlphaWaybillJosConvert
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.waybill.jos.Convert";
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
     * @param String $waybillDTOXml
     * 报文内容
     * Required: true
     * Example Value: 
     */
    private $waybillDTOXml;

    /**
     * @param String $waybillDTOXml
     * 报文内容
     * Example Value: 
     */
    public function setWaybillDTOXml($waybillDTOXml)
    {
        $this->waybillDTOXml             = $waybillDTOXml;
        $this->apiParas["waybillDTOXml"]  = $waybillDTOXml;
    }

    public function getWaybillDTOXml()
    {
        return $this->waybillDTOXml;
    }

}