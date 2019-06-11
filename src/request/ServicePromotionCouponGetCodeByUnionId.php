<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 优惠券,商品二合一转接API-通过unionId获取推广链接【申请】
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1878&apiName=jingdong.service.promotion.coupon.getCodeByUnionId
 * Class ServicePromotionCouponGetCodeByUnionId
 * @package Jd\request
 */
class ServicePromotionCouponGetCodeByUnionId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.promotion.coupon.getCodeByUnionId";
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
     * @param string[] $couponUrl
     * 优惠券领取链接
     * Required: true
     * Example Value: URLEncoder.encode(url)
     */
    private $couponUrl;

    /**
     * @param string[] $couponUrl
     * 优惠券领取链接
     * Example Value: URLEncoder.encode(url)
     */
    public function setCouponUrl($couponUrl)
    {
        $this->couponUrl             = $couponUrl;
        $this->apiParas["couponUrl"]  = $couponUrl;
    }

    public function getCouponUrl()
    {
        return $this->couponUrl;
    }

    /**
     * @param string[] $materialIds
     * 推广物料：单品skuId
     * Required: true
     * Example Value: skuId，skuId...
     */
    private $materialIds;

    /**
     * @param string[] $materialIds
     * 推广物料：单品skuId
     * Example Value: skuId，skuId...
     */
    public function setMaterialIds($materialIds)
    {
        $this->materialIds             = $materialIds;
        $this->apiParas["materialIds"]  = $materialIds;
    }

    public function getMaterialIds()
    {
        return $this->materialIds;
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
     * @param int $positionId
     * 推广位ID
     * Required: false
     * Example Value: 
     */
    private $positionId;

    /**
     * @param int $positionId
     * 推广位ID
     * Example Value: 
     */
    public function setPositionId($positionId)
    {
        $this->positionId             = $positionId;
        $this->apiParas["positionId"]  = $positionId;
    }

    public function getPositionId()
    {
        return $this->positionId;
    }

    /**
     * @param string $pid
     * 子帐号身份标识
     * Required: false
     * Example Value: 
     */
    private $pid;

    /**
     * @param string $pid
     * 子帐号身份标识
     * Example Value: 
     */
    public function setPid($pid)
    {
        $this->pid             = $pid;
        $this->apiParas["pid"]  = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

}