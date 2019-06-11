<?php

namespca Lostinfo\JosOpenApi;

/**
 * 通过订单号查询开放全程跟踪信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2701&apiName=jingdong.eclp.trace.service.jos.CommonTraceService.queryTraceByOrderId
 * Class EclpTraceServiceJosCommonTraceServiceQueryTraceByOrderId
 * @package Jd\request
 */
class EclpTraceServiceJosCommonTraceServiceQueryTraceByOrderId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.trace.service.jos.CommonTraceService.queryTraceByOrderId";
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
     * @param string $orderId
     * 开放平台订单号（ELS单号）
     * Required: true
     * Example Value: ESL57194882539272
     */
    private $orderId;

    /**
     * @param string $orderId
     * 开放平台订单号（ELS单号）
     * Example Value: ESL57194882539272
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $source
     * 来源系统source 需要联系管理员分配。
     * Required: true
     * Example Value: ABC
     */
    private $source;

    /**
     * @param string $source
     * 来源系统source 需要联系管理员分配。
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
     * @param string $sign
     * 签名 签名方法：用订单号+秘钥（接口提供方分配）+时间戳 做MD5，注意签名有效期5分钟
     * Required: true
     * Example Value: EE9A1B8E6BD5C408C8ED2DB842B9CF2E
     */
    private $sign;

    /**
     * @param string $sign
     * 签名 签名方法：用订单号+秘钥（接口提供方分配）+时间戳 做MD5，注意签名有效期5分钟
     * Example Value: EE9A1B8E6BD5C408C8ED2DB842B9CF2E
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
     * 时间戳 当前时间的时间戳
     * Required: true
     * Example Value: 1546583787041
     */
    private $t;

    /**
     * @param int $t
     * 时间戳 当前时间的时间戳
     * Example Value: 1546583787041
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