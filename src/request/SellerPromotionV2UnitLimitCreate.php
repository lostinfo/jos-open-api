<?php

namespca Lostinfo\JosOpenApi;

/**
 * 创建限购促销
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=1839&apiName=jingdong.seller.promotion.v2.unit.limit.create
 * Class SellerPromotionV2UnitLimitCreate
 * @package Jd\request
 */
class SellerPromotionV2UnitLimitCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.v2.unit.limit.create";
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
     * Example Value: 127.0.0.1
     */
    private $ip;

    /**
     * @param string $ip
     * 调用方IP
     * Example Value: 127.0.0.1
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
     * Example Value: 80
     */
    private $port;

    /**
     * @param string $port
     * 调用方端口
     * Example Value: 80
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
     * Example Value: xxxxxx
     */
    private $requestId;

    /**
     * @param string $requestId
     * 防重码
     * Example Value: xxxxxx
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
     * @param string $promoName
     * 促销名称。最大长度20个字符
     * Required: true
     * Example Value: xxx促销
     */
    private $promoName;

    /**
     * @param string $promoName
     * 促销名称。最大长度20个字符
     * Example Value: xxx促销
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
     * @param string $beginTime
     * 促销开始时间。格式：yyyy-MM-dd HH:mm:ss
     * Required: true
     * Example Value: 2018-01-01 00:00:00
     */
    private $beginTime;

    /**
     * @param string $beginTime
     * 促销开始时间。格式：yyyy-MM-dd HH:mm:ss
     * Example Value: 2018-01-01 00:00:00
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
     * @param string $endTime
     * 促销结束时间。格式：yyyy-MM-dd HH:mm:ss
     * Required: true
     * Example Value: 2018-01-02 00:00:00
     */
    private $endTime;

    /**
     * @param string $endTime
     * 促销结束时间。格式：yyyy-MM-dd HH:mm:ss
     * Example Value: 2018-01-02 00:00:00
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
     * @param string $slogan
     * 促销宣传语。最大长度70个字符
     * Required: false
     * Example Value: null
     */
    private $slogan;

    /**
     * @param string $slogan
     * 促销宣传语。最大长度70个字符
     * Example Value: null
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
     * @param string $comment
     * 促销备注信息。最大长度100个字符
     * Required: false
     * Example Value: null
     */
    private $comment;

    /**
     * @param string $comment
     * 促销备注信息。最大长度100个字符
     * Example Value: null
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
     * @param string $link
     * 活动链接
     * Required: false
     * Example Value: null
     */
    private $link;

    /**
     * @param string $link
     * 活动链接
     * Example Value: null
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
     * @param bool $allowOthersOperate
     * 是否允许其他来源操作该促销
     * Required: true
     * Example Value: true
     */
    private $allowOthersOperate;

    /**
     * @param bool $allowOthersOperate
     * 是否允许其他来源操作该促销
     * Example Value: true
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
     * @param bool $allowOthersCheck
     * 是否允许其他来源审核该促销
     * Required: true
     * Example Value: true
     */
    private $allowOthersCheck;

    /**
     * @param bool $allowOthersCheck
     * 是否允许其他来源审核该促销
     * Example Value: true
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
     * @param bool $allowOtherUserOperate
     * 是否允许其他人操作该促销
     * Required: true
     * Example Value: true
     */
    private $allowOtherUserOperate;

    /**
     * @param bool $allowOtherUserOperate
     * 是否允许其他人操作该促销
     * Example Value: true
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
     * @param bool $allowOtherUserCheck
     * 是否允许其他人审核该促销
     * Required: true
     * Example Value: true
     */
    private $allowOtherUserCheck;

    /**
     * @param bool $allowOtherUserCheck
     * 是否允许其他人审核该促销
     * Example Value: true
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
     * @param bool $needManualCheck
     * 促销是否需要人工审核
     * Required: true
     * Example Value: true
     */
    private $needManualCheck;

    /**
     * @param bool $needManualCheck
     * 促销是否需要人工审核
     * Example Value: true
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
     * @param int $freqBound
     * 促销限购一次形式：（1、限ip、账号 2、限ip 3、限账号）
     * Required: true
     * Example Value: 1
     */
    private $freqBound;

    /**
     * @param int $freqBound
     * 促销限购一次形式：（1、限ip、账号 2、限ip 3、限账号）
     * Example Value: 1
     */
    public function setFreqBound($freqBound)
    {
        $this->freqBound             = $freqBound;
        $this->apiParas["freq_bound"]  = $freqBound;
    }

    public function getFreqBound()
    {
        return $this->freqBound;
    }

    /**
     * @param int $perMaxNum
     * 单次最大购买数量：0、不限
     * Required: false
     * Example Value: 1
     */
    private $perMaxNum;

    /**
     * @param int $perMaxNum
     * 单次最大购买数量：0、不限
     * Example Value: 1
     */
    public function setPerMaxNum($perMaxNum)
    {
        $this->perMaxNum             = $perMaxNum;
        $this->apiParas["per_max_num"]  = $perMaxNum;
    }

    public function getPerMaxNum()
    {
        return $this->perMaxNum;
    }

    /**
     * @param int $perMinNum
     * 单次最小购买数量：0、不限
     * Required: false
     * Example Value: 2
     */
    private $perMinNum;

    /**
     * @param int $perMinNum
     * 单次最小购买数量：0、不限
     * Example Value: 2
     */
    public function setPerMinNum($perMinNum)
    {
        $this->perMinNum             = $perMinNum;
        $this->apiParas["per_min_num"]  = $perMinNum;
    }

    public function getPerMinNum()
    {
        return $this->perMinNum;
    }

    /**
     * @param int $promoAreaType
     * 促销区域类型： 2 白名单  3 黑名单
     * Required: false
     * Example Value: null
     */
    private $promoAreaType;

    /**
     * @param int $promoAreaType
     * 促销区域类型： 2 白名单  3 黑名单
     * Example Value: null
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
     * @param string $promoAreas
     * 促销区域列表（英文分号分隔）
     * Required: false
     * Example Value: null
     */
    private $promoAreas;

    /**
     * @param string $promoAreas
     * 促销区域列表（英文分号分隔）
     * Example Value: null
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
     * @param int[] $skuId
     * sku ID
     * Required: true
     * Example Value: 112233
     */
    private $skuId;

    /**
     * @param int[] $skuId
     * sku ID
     * Example Value: 112233
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
     * @param string[] $promoPrice
     * 促销价
     * Required: true
     * Example Value: 89.00
     */
    private $promoPrice;

    /**
     * @param string[] $promoPrice
     * 促销价
     * Example Value: 89.00
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

    /**
     * @param int[] $limitNum
     * 限购数量
     * Required: true
     * Example Value: 2
     */
    private $limitNum;

    /**
     * @param int[] $limitNum
     * 限购数量
     * Example Value: 2
     */
    public function setLimitNum($limitNum)
    {
        $this->limitNum             = $limitNum;
        $this->apiParas["limit_num"]  = $limitNum;
    }

    public function getLimitNum()
    {
        return $this->limitNum;
    }

}