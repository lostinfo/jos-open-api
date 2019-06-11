<?php

namespca Lostinfo\JosOpenApi;

/**
 * 通过运单号订阅开放全程跟踪接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2679&apiName=jingdong.eclp.trace.service.jos.SubscribeTraceByWaybillService
 * Class EclpTraceServiceJosSubscribeTraceByWaybillService
 * @package Jd\request
 */
class EclpTraceServiceJosSubscribeTraceByWaybillService
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.trace.service.jos.SubscribeTraceByWaybillService";
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
     * 来源系统
     * Required: true
     * Example Value: ABC
     */
    private $source;

    /**
     * @param string $source
     * 来源系统
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
     * 运单号
     * Required: true
     * Example Value: VB42164864976
     */
    private $waybillId;

    /**
     * @param string $waybillId
     * 运单号
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
     * 承运商编码
     * Required: true
     * Example Value: BDB
     */
    private $carrierCode;

    /**
     * @param string $carrierCode
     * 承运商编码
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
     * 签名
     * Required: true
     * Example Value: 9B98C48BFB264734C49807971AFD357F
     */
    private $sign;

    /**
     * @param string $sign
     * 签名
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
     * 时间戳
     * Required: true
     * Example Value: 1546585619757
     */
    private $t;

    /**
     * @param int $t
     * 时间戳
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