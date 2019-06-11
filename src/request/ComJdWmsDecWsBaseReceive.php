<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 接收海尔回传报文
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1893&apiName=jingdong.com.jd.wms.dec.ws.base.receive
 * Class ComJdWmsDecWsBaseReceive
 * @package Jd\request
 */
class ComJdWmsDecWsBaseReceive
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.com.jd.wms.dec.ws.base.receive";
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
     * @param string $bizToken
     * String类型xml格式token
     * Required: true
     * Example Value: 
     */
    private $bizToken;

    /**
     * @param string $bizToken
     * String类型xml格式token
     * Example Value: 
     */
    public function setBizToken($bizToken)
    {
        $this->bizToken             = $bizToken;
        $this->apiParas["bizToken"]  = $bizToken;
    }

    public function getBizToken()
    {
        return $this->bizToken;
    }

    /**
     * @param string $bizXml
     * String类型报文
     * Required: true
     * Example Value: 
     */
    private $bizXml;

    /**
     * @param string $bizXml
     * String类型报文
     * Example Value: 
     */
    public function setBizXml($bizXml)
    {
        $this->bizXml             = $bizXml;
        $this->apiParas["bizXml"]  = $bizXml;
    }

    public function getBizXml()
    {
        return $this->bizXml;
    }

}