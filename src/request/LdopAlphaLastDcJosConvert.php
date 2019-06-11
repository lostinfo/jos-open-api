<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 网点末端分拨中心对应关系维护接口内部转换实现
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=1707&apiName=jingdong.ldop.alpha.lastDc.jos.Convert
 * Class LdopAlphaLastDcJosConvert
 * @package Jd\request
 */
class LdopAlphaLastDcJosConvert
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.lastDc.jos.Convert";
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
     * @param string $lastDcListXml
     * 网点末端分拨中心对应关系列表XML
     * Required: true
     * Example Value: 
     */
    private $lastDcListXml;

    /**
     * @param string $lastDcListXml
     * 网点末端分拨中心对应关系列表XML
     * Example Value: 
     */
    public function setLastDcListXml($lastDcListXml)
    {
        $this->lastDcListXml             = $lastDcListXml;
        $this->apiParas["lastDcListXml"]  = $lastDcListXml;
    }

    public function getLastDcListXml()
    {
        return $this->lastDcListXml;
    }

}