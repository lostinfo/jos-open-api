<?php

namespace JD\request;

/**
 * 关闭优惠券
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=1806&apiName=jingdong.seller.coupon.write.close
 * Class SellerCouponWriteClose
 * @package Jd\request
 */
class SellerCouponWriteClose
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.coupon.write.close";
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
     * @param String $ip
     * 调用方IP
     * Required: true
     * Example Value: 
     */
    private $ip;

    /**
     * @param String $ip
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
     * @param String $port
     * 调用方端口
     * Required: true
     * Example Value: 
     */
    private $port;

    /**
     * @param String $port
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
     * @param Number $couponId
     * 优惠券编号
     * Required: true
     * Example Value: 
     */
    private $couponId;

    /**
     * @param Number $couponId
     * 优惠券编号
     * Example Value: 
     */
    public function setCouponId($couponId)
    {
        $this->couponId             = $couponId;
        $this->apiParas["couponId"]  = $couponId;
    }

    public function getCouponId()
    {
        return $this->couponId;
    }

}