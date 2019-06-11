<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 优惠券导入
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=2582&apiName=jingdong.service.coupon.importCoupon
 * Class ServiceCouponImportCoupon
 * @package Jd\request
 */
class ServiceCouponImportCoupon
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.coupon.importCoupon";
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
     * @param int $unionId
     * 联盟ID
     * Required: true
     * Example Value: 
     */
    private $unionId;

    /**
     * @param int $unionId
     * 联盟ID
     * Example Value: 
     */
    public function setUnionId($unionId)
    {
        $this->unionId             = $unionId;
        $this->apiParas["unionId"]  = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
    }

    /**
     * @param int $skuId
     * skuId
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * skuId
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param string $couponLink
     * 优惠券链接 必需URLencode处理
     * Required: true
     * Example Value: 
     */
    private $couponLink;

    /**
     * @param string $couponLink
     * 优惠券链接 必需URLencode处理
     * Example Value: 
     */
    public function setCouponLink($couponLink)
    {
        $this->couponLink             = $couponLink;
        $this->apiParas["couponLink"]  = $couponLink;
    }

    public function getCouponLink()
    {
        return $this->couponLink;
    }

}