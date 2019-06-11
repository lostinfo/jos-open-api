<?php

namespca Lostinfo\JosOpenApi;

/**
 * 通过运单号获取订阅开放全程跟踪信息接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2678&apiName=jingdong.eclp.trace.service.jos.SubscribeWaybillTraceService
 * Class EclpTraceServiceJosSubscribeWaybillTraceService
 * @package Jd\request
 */
class EclpTraceServiceJosSubscribeWaybillTraceService
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.trace.service.jos.SubscribeWaybillTraceService";
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
     * @param string $source
     * 来源系统 （接口提供方分配）
     * Required: true
     * Example Value: ABC
     */
    private $source;

    /**
     * @param string $source
     * 来源系统 （接口提供方分配）
     * Example Value: ABC
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $waybillId
     * 运单号（承运商配送运单的单号）
     * Required: true
     * Example Value: VB42164864976
     */
    private $waybillId;

    /**
     * @param string $waybillId
     * 运单号（承运商配送运单的单号）
     * Example Value: VB42164864976
     */
    public function setWaybillId($waybillId)
    {
        $this->waybillId             = $waybillId;
        $this->apiParas["waybillId"]  = $waybillId;
    }

    public function getWaybillId()
    {
        return $this->waybillId;
    }

    /**
     * @param string $carrierCode
     * 承运商编码 （申请接口时，由接口提供方提供）
     * Required: true
     * Example Value: BDB
     */
    private $carrierCode;

    /**
     * @param string $carrierCode
     * 承运商编码 （申请接口时，由接口提供方提供）
     * Example Value: BDB
     */
    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode             = $carrierCode;
        $this->apiParas["carrierCode"]  = $carrierCode;
    }

    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

    /**
     * @param string $sign
     * 签名 (签名方法：用运单号+秘钥（接口提供方分配）+时间戳 做MD5) 每次签名有效期5分钟
     * Required: true
     * Example Value: 9B98C48BFB264734C49807971AFD357F
     */
    private $sign;

    /**
     * @param string $sign
     * 签名 (签名方法：用运单号+秘钥（接口提供方分配）+时间戳 做MD5) 每次签名有效期5分钟
     * Example Value: 9B98C48BFB264734C49807971AFD357F
     */
    public function setSign($sign)
    {
        $this->sign             = $sign;
        $this->apiParas["sign"]  = $sign;
    }

    public function getSign()
    {
        return $this->sign;
    }

    /**
     * @param int $t
     * 时间戳（当前时间的时间戳）
     * Required: true
     * Example Value: 1546585619757
     */
    private $t;

    /**
     * @param int $t
     * 时间戳（当前时间的时间戳）
     * Example Value: 1546585619757
     */
    public function setT($t)
    {
        $this->t             = $t;
        $this->apiParas["t"]  = $t;
    }

    public function getT()
    {
        return $this->t;
    }

}