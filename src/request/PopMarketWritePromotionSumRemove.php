<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 删除总价促销
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=2557&apiName=jingdong.pop.market.write.promotion.sum.remove
 * Class PopMarketWritePromotionSumRemove
 * @package Jd\request
 */
class PopMarketWritePromotionSumRemove
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.market.write.promotion.sum.remove";
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
     * @param string $ip
     * 调用方IP
     * Required: true
     * Example Value: 
     */
    private $ip;

    /**
     * @param string $ip
     * 调用方IP
     * Example Value: 
     */
    public function setIp($ip)
    {
        $this->ip             = $ip;
        $this->apiParas["ip"]  = $ip;
    }

    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $port
     * 调用方端口
     * Required: true
     * Example Value: 
     */
    private $port;

    /**
     * @param string $port
     * 调用方端口
     * Example Value: 
     */
    public function setPort($port)
    {
        $this->port             = $port;
        $this->apiParas["port"]  = $port;
    }

    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param string $requestId
     * 防重码
     * Required: false
     * Example Value: 
     */
    private $requestId;

    /**
     * @param string $requestId
     * 防重码
     * Example Value: 
     */
    public function setRequestId($requestId)
    {
        $this->requestId             = $requestId;
        $this->apiParas["request_id"]  = $requestId;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param int $promoId
     * 促销编号
     * Required: true
     * Example Value: 
     */
    private $promoId;

    /**
     * @param int $promoId
     * 促销编号
     * Example Value: 
     */
    public function setPromoId($promoId)
    {
        $this->promoId             = $promoId;
        $this->apiParas["promoId"]  = $promoId;
    }

    public function getPromoId()
    {
        return $this->promoId;
    }

}