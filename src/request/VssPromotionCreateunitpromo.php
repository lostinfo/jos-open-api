<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 创建单品促销
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1795&apiName=jingdong.vss.promotion.createunitpromo
 * Class VssPromotionCreateunitpromo
 * @package Jd\request
 */
class VssPromotionCreateunitpromo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vss.promotion.createunitpromo";
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
     * @param int $wareId
     * 商品编号
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品编号
     * Example Value: 
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["ware_id"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param string $channels
     * 促销渠道,用,号分隔(1全渠道4手Q5微信6移动端)
     * Required: true
     * Example Value: 1|4,5,6
     */
    private $channels;

    /**
     * @param string $channels
     * 促销渠道,用,号分隔(1全渠道4手Q5微信6移动端)
     * Example Value: 1|4,5,6
     */
    public function setChannels($channels)
    {
        $this->channels             = $channels;
        $this->apiParas["channels"]  = $channels;
    }

    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * @param string $promoName
     * 促销名称
     * Required: true
     * Example Value: 
     */
    private $promoName;

    /**
     * @param string $promoName
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
     * @param string $promoAdviceWord
     * 促销广告词
     * Required: false
     * Example Value: 
     */
    private $promoAdviceWord;

    /**
     * @param string $promoAdviceWord
     * 促销广告词
     * Example Value: 
     */
    public function setPromoAdviceWord($promoAdviceWord)
    {
        $this->promoAdviceWord             = $promoAdviceWord;
        $this->apiParas["promo_advice_word"]  = $promoAdviceWord;
    }

    public function getPromoAdviceWord()
    {
        return $this->promoAdviceWord;
    }

    /**
     * @param string $actLinkName
     * 活动名称
     * Required: false
     * Example Value: 
     */
    private $actLinkName;

    /**
     * @param string $actLinkName
     * 活动名称
     * Example Value: 
     */
    public function setActLinkName($actLinkName)
    {
        $this->actLinkName             = $actLinkName;
        $this->apiParas["act_link_name"]  = $actLinkName;
    }

    public function getActLinkName()
    {
        return $this->actLinkName;
    }

    /**
     * @param string $actLinkUrl
     * 活动链接地址
     * Required: false
     * Example Value: 
     */
    private $actLinkUrl;

    /**
     * @param string $actLinkUrl
     * 活动链接地址
     * Example Value: 
     */
    public function setActLinkUrl($actLinkUrl)
    {
        $this->actLinkUrl             = $actLinkUrl;
        $this->apiParas["act_link_url"]  = $actLinkUrl;
    }

    public function getActLinkUrl()
    {
        return $this->actLinkUrl;
    }

    /**
     * @param string $startTime
     * 促销开始时间
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param string $startTime
     * 促销开始时间
     * Example Value: 
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["start_time"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string $endTime
     * 促销结束时间
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param string $endTime
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
     * @param int $numAvailable
     * 促销商品最大可售数量
     * Required: true
     * Example Value: 
     */
    private $numAvailable;

    /**
     * @param int $numAvailable
     * 促销商品最大可售数量
     * Example Value: 
     */
    public function setNumAvailable($numAvailable)
    {
        $this->numAvailable             = $numAvailable;
        $this->apiParas["num_available"]  = $numAvailable;
    }

    public function getNumAvailable()
    {
        return $this->numAvailable;
    }

    /**
     * @param bool $phoneLogo
     * 是否显示京东网站前端展示掌上专享标识
     * Required: false
     * Example Value: 
     */
    private $phoneLogo;

    /**
     * @param bool $phoneLogo
     * 是否显示京东网站前端展示掌上专享标识
     * Example Value: 
     */
    public function setPhoneLogo($phoneLogo)
    {
        $this->phoneLogo             = $phoneLogo;
        $this->apiParas["phone_logo"]  = $phoneLogo;
    }

    public function getPhoneLogo()
    {
        return $this->phoneLogo;
    }

    /**
     * @param int $discountAmount
     * 补差金额
     * Required: false
     * Example Value: 
     */
    private $discountAmount;

    /**
     * @param int $discountAmount
     * 补差金额
     * Example Value: 
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount             = $discountAmount;
        $this->apiParas["discount_amount"]  = $discountAmount;
    }

    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * @param int $discountPrice
     * 直降金额或者一口价
     * Required: true
     * Example Value: 
     */
    private $discountPrice;

    /**
     * @param int $discountPrice
     * 直降金额或者一口价
     * Example Value: 
     */
    public function setDiscountPrice($discountPrice)
    {
        $this->discountPrice             = $discountPrice;
        $this->apiParas["discount_price"]  = $discountPrice;
    }

    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }

    /**
     * @param int $discountType
     * 售价模式(1为直降2为一口价)
     * Required: true
     * Example Value: 
     */
    private $discountType;

    /**
     * @param int $discountType
     * 售价模式(1为直降2为一口价)
     * Example Value: 
     */
    public function setDiscountType($discountType)
    {
        $this->discountType             = $discountType;
        $this->apiParas["discount_type"]  = $discountType;
    }

    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * @param string $rebateFile
     * 返利文件名
     * Required: false
     * Example Value: 
     */
    private $rebateFile;

    /**
     * @param string $rebateFile
     * 返利文件名
     * Example Value: 
     */
    public function setRebateFile($rebateFile)
    {
        $this->rebateFile             = $rebateFile;
        $this->apiParas["rebate_file"]  = $rebateFile;
    }

    public function getRebateFile()
    {
        return $this->rebateFile;
    }

    /**
     * @param string $rebateName
     * 返利文件名称
     * Required: false
     * Example Value: 
     */
    private $rebateName;

    /**
     * @param string $rebateName
     * 返利文件名称
     * Example Value: 
     */
    public function setRebateName($rebateName)
    {
        $this->rebateName             = $rebateName;
        $this->apiParas["rebate_name"]  = $rebateName;
    }

    public function getRebateName()
    {
        return $this->rebateName;
    }

    /**
     * @param int $overlyingSuit
     * 是否叠加套装
     * Required: true
     * Example Value: 
     */
    private $overlyingSuit;

    /**
     * @param int $overlyingSuit
     * 是否叠加套装
     * Example Value: 
     */
    public function setOverlyingSuit($overlyingSuit)
    {
        $this->overlyingSuit             = $overlyingSuit;
        $this->apiParas["overlying_suit"]  = $overlyingSuit;
    }

    public function getOverlyingSuit()
    {
        return $this->overlyingSuit;
    }

}