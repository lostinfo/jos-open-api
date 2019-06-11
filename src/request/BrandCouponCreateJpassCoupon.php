<?php

namespca Lostinfo\JosOpenApi;

/**
 * 创建优惠券活动
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=3508&apiName=jingdong.brand.coupon.createJpassCoupon
 * Class BrandCouponCreateJpassCoupon
 * @package Jd\request
 */
class BrandCouponCreateJpassCoupon
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.brand.coupon.createJpassCoupon";
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
     * @param int $couponNum
     * 优惠券发放总量
     * Required: true
     * Example Value: 88
     */
    private $couponNum;

    /**
     * @param int $couponNum
     * 优惠券发放总量
     * Example Value: 88
     */
    public function setCouponNum($couponNum)
    {
        $this->couponNum             = $couponNum;
        $this->apiParas["couponNum"]  = $couponNum;
    }

    public function getCouponNum()
    {
        return $this->couponNum;
    }

    /**
     * @param string $couponName
     * 优惠券名称
     * Required: true
     * Example Value: 测试名称
     */
    private $couponName;

    /**
     * @param string $couponName
     * 优惠券名称
     * Example Value: 测试名称
     */
    public function setCouponName($couponName)
    {
        $this->couponName             = $couponName;
        $this->apiParas["couponName"]  = $couponName;
    }

    public function getCouponName()
    {
        return $this->couponName;
    }

    /**
     * @param byte[] $coverImg
     * 缩略图（建议缩略图大小不超过30k，尺寸为330*330）
     * Required: true
     * Example Value: 
     */
    private $coverImg;

    /**
     * @param byte[] $coverImg
     * 缩略图（建议缩略图大小不超过30k，尺寸为330*330）
     * Example Value: 
     */
    public function setCoverImg($coverImg)
    {
        $this->coverImg             = $coverImg;
        $this->apiParas["coverImg"]  = $coverImg;
    }

    public function getCoverImg()
    {
        return $this->coverImg;
    }

    /**
     * @param string $endDate
     * 优惠券到期时间
     * Required: true
     * Example Value: 
     */
    private $endDate;

    /**
     * @param string $endDate
     * 优惠券到期时间
     * Example Value: 
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["endDate"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param int $sellType
     * 发行数量类型(0 按总量  1按门店)
     * Required: true
     * Example Value: 0
     */
    private $sellType;

    /**
     * @param int $sellType
     * 发行数量类型(0 按总量  1按门店)
     * Example Value: 0
     */
    public function setSellType($sellType)
    {
        $this->sellType             = $sellType;
        $this->apiParas["sellType"]  = $sellType;
    }

    public function getSellType()
    {
        return $this->sellType;
    }

    /**
     * @param int $couponAmount
     * 单张优惠券面值(分）
     * Required: true
     * Example Value: 8800
     */
    private $couponAmount;

    /**
     * @param int $couponAmount
     * 单张优惠券面值(分）
     * Example Value: 8800
     */
    public function setCouponAmount($couponAmount)
    {
        $this->couponAmount             = $couponAmount;
        $this->apiParas["couponAmount"]  = $couponAmount;
    }

    public function getCouponAmount()
    {
        return $this->couponAmount;
    }

    /**
     * @param int $effectiveType
     * 有效期类型(0固定期限)
     * Required: true
     * Example Value: 0
     */
    private $effectiveType;

    /**
     * @param int $effectiveType
     * 有效期类型(0固定期限)
     * Example Value: 0
     */
    public function setEffectiveType($effectiveType)
    {
        $this->effectiveType             = $effectiveType;
        $this->apiParas["effectiveType"]  = $effectiveType;
    }

    public function getEffectiveType()
    {
        return $this->effectiveType;
    }

    /**
     * @param int $couponType
     * 优惠券类型(1 门店券 2sku单品券 3sku满减券)
     * Required: true
     * Example Value: 1
     */
    private $couponType;

    /**
     * @param int $couponType
     * 优惠券类型(1 门店券 2sku单品券 3sku满减券)
     * Example Value: 1
     */
    public function setCouponType($couponType)
    {
        $this->couponType             = $couponType;
        $this->apiParas["couponType"]  = $couponType;
    }

    public function getCouponType()
    {
        return $this->couponType;
    }

    /**
     * @param int $perCoupon
     * 每人领取数量
     * Required: true
     * Example Value: 2
     */
    private $perCoupon;

    /**
     * @param int $perCoupon
     * 每人领取数量
     * Example Value: 2
     */
    public function setPerCoupon($perCoupon)
    {
        $this->perCoupon             = $perCoupon;
        $this->apiParas["perCoupon"]  = $perCoupon;
    }

    public function getPerCoupon()
    {
        return $this->perCoupon;
    }

    /**
     * @param int $quota
     * 使用条件(满多少使用)（单位分）
     * Required: true
     * Example Value: 500
     */
    private $quota;

    /**
     * @param int $quota
     * 使用条件(满多少使用)（单位分）
     * Example Value: 500
     */
    public function setQuota($quota)
    {
        $this->quota             = $quota;
        $this->apiParas["quota"]  = $quota;
    }

    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * @param string $coverIntroduce
     * 封面介绍--16个字以内
     * Required: true
     * Example Value: 介绍
     */
    private $coverIntroduce;

    /**
     * @param string $coverIntroduce
     * 封面介绍--16个字以内
     * Example Value: 介绍
     */
    public function setCoverIntroduce($coverIntroduce)
    {
        $this->coverIntroduce             = $coverIntroduce;
        $this->apiParas["coverIntroduce"]  = $coverIntroduce;
    }

    public function getCoverIntroduce()
    {
        return $this->coverIntroduce;
    }

    /**
     * @param string $rfId
     * 优惠券防重字段（UUID随机数）
     * Required: true
     * Example Value: 3213fdsf435
     */
    private $rfId;

    /**
     * @param string $rfId
     * 优惠券防重字段（UUID随机数）
     * Example Value: 3213fdsf435
     */
    public function setRfId($rfId)
    {
        $this->rfId             = $rfId;
        $this->apiParas["rfId"]  = $rfId;
    }

    public function getRfId()
    {
        return $this->rfId;
    }

    /**
     * @param string $startDate
     * 优惠券开始日期
     * Required: true
     * Example Value: 
     */
    private $startDate;

    /**
     * @param string $startDate
     * 优惠券开始日期
     * Example Value: 
     */
    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["startDate"]  = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $notice
     * 使用须知--300个字以内
     * Required: true
     * Example Value: 使用须知
     */
    private $notice;

    /**
     * @param string $notice
     * 使用须知--300个字以内
     * Example Value: 使用须知
     */
    public function setNotice($notice)
    {
        $this->notice             = $notice;
        $this->apiParas["notice"]  = $notice;
    }

    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * @param int[] $storeId
     * 门店ID
     * Required: true
     * Example Value: 123456
     */
    private $storeId;

    /**
     * @param int[] $storeId
     * 门店ID
     * Example Value: 123456
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param string[] $skuId
     * 京东商品ID（couponType 为2 和3时 必填）
     * Required: false
     * Example Value: 123456
     */
    private $skuId;

    /**
     * @param string[] $skuId
     * 京东商品ID（couponType 为2 和3时 必填）
     * Example Value: 123456
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

}