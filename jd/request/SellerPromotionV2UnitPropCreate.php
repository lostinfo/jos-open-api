<?php

namespace JD\request;

/**
 * 创建送道具促销
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=1836&apiName=jingdong.seller.promotion.v2.unit.prop.create
 * Class SellerPromotionV2UnitPropCreate
 * @package Jd\request
 */
class SellerPromotionV2UnitPropCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.v2.unit.prop.create";
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
     * @param String $requestId
     * 防重码
     * Required: false
     * Example Value: 
     */
    private $requestId;

    /**
     * @param String $requestId
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
     * @param String $promoName
     * 促销名称
     * Required: true
     * Example Value: 
     */
    private $promoName;

    /**
     * @param String $promoName
     * 促销名称
     * Example Value: 
     */
    public function setPromoName($promoName)
    {
        $this->promoName             = $promoName;
        $this->apiParas["promo_name"]  = $promoName;
    }

    public function getPromoName()
    {
        return $this->promoName;
    }

    /**
     * @param String $beginTime
     * 促销开始时间
     * Required: true
     * Example Value: 
     */
    private $beginTime;

    /**
     * @param String $beginTime
     * 促销开始时间
     * Example Value: 
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime             = $beginTime;
        $this->apiParas["begin_time"]  = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
    }

    /**
     * @param String $endTime
     * 促销结束时间
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param String $endTime
     * 促销结束时间
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["end_time"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param String $slogan
     * 促销宣传语
     * Required: false
     * Example Value: 
     */
    private $slogan;

    /**
     * @param String $slogan
     * 促销宣传语
     * Example Value: 
     */
    public function setSlogan($slogan)
    {
        $this->slogan             = $slogan;
        $this->apiParas["slogan"]  = $slogan;
    }

    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * @param String $comment
     * 促销备注信息
     * Required: false
     * Example Value: 
     */
    private $comment;

    /**
     * @param String $comment
     * 促销备注信息
     * Example Value: 
     */
    public function setComment($comment)
    {
        $this->comment             = $comment;
        $this->apiParas["comment"]  = $comment;
    }

    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param String $link
     * 活动链接
     * Required: false
     * Example Value: 
     */
    private $link;

    /**
     * @param String $link
     * 活动链接
     * Example Value: 
     */
    public function setLink($link)
    {
        $this->link             = $link;
        $this->apiParas["link"]  = $link;
    }

    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param Boolean $allowOthersOperate
     * 是否允许其他来源操作该促销
     * Required: true
     * Example Value: 
     */
    private $allowOthersOperate;

    /**
     * @param Boolean $allowOthersOperate
     * 是否允许其他来源操作该促销
     * Example Value: 
     */
    public function setAllowOthersOperate($allowOthersOperate)
    {
        $this->allowOthersOperate             = $allowOthersOperate;
        $this->apiParas["allow_others_operate"]  = $allowOthersOperate;
    }

    public function getAllowOthersOperate()
    {
        return $this->allowOthersOperate;
    }

    /**
     * @param Boolean $allowOthersCheck
     * 是否允许其他来源审核该促销
     * Required: true
     * Example Value: 
     */
    private $allowOthersCheck;

    /**
     * @param Boolean $allowOthersCheck
     * 是否允许其他来源审核该促销
     * Example Value: 
     */
    public function setAllowOthersCheck($allowOthersCheck)
    {
        $this->allowOthersCheck             = $allowOthersCheck;
        $this->apiParas["allow_others_check"]  = $allowOthersCheck;
    }

    public function getAllowOthersCheck()
    {
        return $this->allowOthersCheck;
    }

    /**
     * @param Boolean $allowOtherUserOperate
     * 是否允许其他人操作该促销
     * Required: true
     * Example Value: 
     */
    private $allowOtherUserOperate;

    /**
     * @param Boolean $allowOtherUserOperate
     * 是否允许其他人操作该促销
     * Example Value: 
     */
    public function setAllowOtherUserOperate($allowOtherUserOperate)
    {
        $this->allowOtherUserOperate             = $allowOtherUserOperate;
        $this->apiParas["allow_other_user_operate"]  = $allowOtherUserOperate;
    }

    public function getAllowOtherUserOperate()
    {
        return $this->allowOtherUserOperate;
    }

    /**
     * @param Boolean $allowOtherUserCheck
     * 是否允许其他人审核该促销
     * Required: true
     * Example Value: 
     */
    private $allowOtherUserCheck;

    /**
     * @param Boolean $allowOtherUserCheck
     * 是否允许其他人审核该促销
     * Example Value: 
     */
    public function setAllowOtherUserCheck($allowOtherUserCheck)
    {
        $this->allowOtherUserCheck             = $allowOtherUserCheck;
        $this->apiParas["allow_other_user_check"]  = $allowOtherUserCheck;
    }

    public function getAllowOtherUserCheck()
    {
        return $this->allowOtherUserCheck;
    }

    /**
     * @param Boolean $needManualCheck
     * 促销是否需要人工审核
     * Required: true
     * Example Value: 
     */
    private $needManualCheck;

    /**
     * @param Boolean $needManualCheck
     * 促销是否需要人工审核
     * Example Value: 
     */
    public function setNeedManualCheck($needManualCheck)
    {
        $this->needManualCheck             = $needManualCheck;
        $this->apiParas["need_manual_check"]  = $needManualCheck;
    }

    public function getNeedManualCheck()
    {
        return $this->needManualCheck;
    }

    /**
     * @param Number $propType
     * 道具类型：2、京豆，10 、店铺京券
     * Required: true
     * Example Value: 
     */
    private $propType;

    /**
     * @param Number $propType
     * 道具类型：2、京豆，10 、店铺京券
     * Example Value: 
     */
    public function setPropType($propType)
    {
        $this->propType             = $propType;
        $this->apiParas["prop_type"]  = $propType;
    }

    public function getPropType()
    {
        return $this->propType;
    }

    /**
     * @param Number $propNum
     * 道具数值
     * Required: true
     * Example Value: 
     */
    private $propNum;

    /**
     * @param Number $propNum
     * 道具数值
     * Example Value: 
     */
    public function setPropNum($propNum)
    {
        $this->propNum             = $propNum;
        $this->apiParas["prop_num"]  = $propNum;
    }

    public function getPropNum()
    {
        return $this->propNum;
    }

    /**
     * @param Number $couponValidDays
     * 优惠券的有效天数
     * Required: false
     * Example Value: 
     */
    private $couponValidDays;

    /**
     * @param Number $couponValidDays
     * 优惠券的有效天数
     * Example Value: 
     */
    public function setCouponValidDays($couponValidDays)
    {
        $this->couponValidDays             = $couponValidDays;
        $this->apiParas["coupon_valid_days"]  = $couponValidDays;
    }

    public function getCouponValidDays()
    {
        return $this->couponValidDays;
    }

    /**
     * @param Number $promoAreaType
     * 促销区域类型： 2 白名单  3 黑名单
     * Required: false
     * Example Value: 
     */
    private $promoAreaType;

    /**
     * @param Number $promoAreaType
     * 促销区域类型： 2 白名单  3 黑名单
     * Example Value: 
     */
    public function setPromoAreaType($promoAreaType)
    {
        $this->promoAreaType             = $promoAreaType;
        $this->apiParas["promo_area_type"]  = $promoAreaType;
    }

    public function getPromoAreaType()
    {
        return $this->promoAreaType;
    }

    /**
     * @param String $promoAreas
     * 促销区域列表（英文分号分隔）
     * Required: false
     * Example Value: 
     */
    private $promoAreas;

    /**
     * @param String $promoAreas
     * 促销区域列表（英文分号分隔）
     * Example Value: 
     */
    public function setPromoAreas($promoAreas)
    {
        $this->promoAreas             = $promoAreas;
        $this->apiParas["promo_areas"]  = $promoAreas;
    }

    public function getPromoAreas()
    {
        return $this->promoAreas;
    }

    /**
     * @param Number[] $skuId
     * sku ID
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param Number[] $skuId
     * sku ID
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_id"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param String[] $promoPrice
     * 促销价
     * Required: true
     * Example Value: 
     */
    private $promoPrice;

    /**
     * @param String[] $promoPrice
     * 促销价
     * Example Value: 
     */
    public function setPromoPrice($promoPrice)
    {
        $this->promoPrice             = $promoPrice;
        $this->apiParas["promo_price"]  = $promoPrice;
    }

    public function getPromoPrice()
    {
        return $this->promoPrice;
    }

}