<?php

namespace JD\request;

/**
 * 逐页查询会员接口
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=1476&apiName=jingdong.crm.member.scan
 * Class CrmMemberScan
 * @package Jd\request
 */
class CrmMemberScan
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.member.scan";
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
     * @param String $customerPin
     * 会员名称,用户在京东的唯一标识
     * Required: false
     * Example Value: jerge_oceans
     */
    private $customerPin;

    /**
     * @param String $customerPin
     * 会员名称,用户在京东的唯一标识
     * Example Value: jerge_oceans
     */
    public function setCustomerPin($customerPin)
    {
        $this->customerPin             = $customerPin;
        $this->apiParas["pin"]  = $customerPin;
    }

    public function getCustomerPin()
    {
        return $this->customerPin;
    }

    /**
     * @param String $grade
     * 会员等级(可支持多个，用逗号分隔，如：1,2,3)
     * Required: false
     * Example Value: 2
     */
    private $grade;

    /**
     * @param String $grade
     * 会员等级(可支持多个，用逗号分隔，如：1,2,3)
     * Example Value: 2
     */
    public function setGrade($grade)
    {
        $this->grade             = $grade;
        $this->apiParas["grade"]  = $grade;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param Date $minLastTradeTime
     * 最早上次交易时间，精确至年月日
     * Required: false
     * Example Value: 2013-01-01
     */
    private $minLastTradeTime;

    /**
     * @param Date $minLastTradeTime
     * 最早上次交易时间，精确至年月日
     * Example Value: 2013-01-01
     */
    public function setMinLastTradeTime($minLastTradeTime)
    {
        $this->minLastTradeTime             = $minLastTradeTime;
        $this->apiParas["min_last_trade_time"]  = $minLastTradeTime;
    }

    public function getMinLastTradeTime()
    {
        return $this->minLastTradeTime;
    }

    /**
     * @param Date $maxLastTradeTime
     * 最迟上次交易时间，精确至年月日
     * Required: false
     * Example Value: 2013-10-01
     */
    private $maxLastTradeTime;

    /**
     * @param Date $maxLastTradeTime
     * 最迟上次交易时间，精确至年月日
     * Example Value: 2013-10-01
     */
    public function setMaxLastTradeTime($maxLastTradeTime)
    {
        $this->maxLastTradeTime             = $maxLastTradeTime;
        $this->apiParas["max_last_trade_time"]  = $maxLastTradeTime;
    }

    public function getMaxLastTradeTime()
    {
        return $this->maxLastTradeTime;
    }

    /**
     * @param Number $minTradeCount
     * 最小交易量
     * Required: false
     * Example Value: 15
     */
    private $minTradeCount;

    /**
     * @param Number $minTradeCount
     * 最小交易量
     * Example Value: 15
     */
    public function setMinTradeCount($minTradeCount)
    {
        $this->minTradeCount             = $minTradeCount;
        $this->apiParas["min_trade_count"]  = $minTradeCount;
    }

    public function getMinTradeCount()
    {
        return $this->minTradeCount;
    }

    /**
     * @param Number $maxTradeCount
     * 最大交易量
     * Required: false
     * Example Value: 50
     */
    private $maxTradeCount;

    /**
     * @param Number $maxTradeCount
     * 最大交易量
     * Example Value: 50
     */
    public function setMaxTradeCount($maxTradeCount)
    {
        $this->maxTradeCount             = $maxTradeCount;
        $this->apiParas["max_trade_count"]  = $maxTradeCount;
    }

    public function getMaxTradeCount()
    {
        return $this->maxTradeCount;
    }

    /**
     * @param Number $avgPrice
     * 最小平均客单价，单位为元
     * Required: false
     * Example Value: 50
     */
    private $avgPrice;

    /**
     * @param Number $avgPrice
     * 最小平均客单价，单位为元
     * Example Value: 50
     */
    public function setAvgPrice($avgPrice)
    {
        $this->avgPrice             = $avgPrice;
        $this->apiParas["avg_price"]  = $avgPrice;
    }

    public function getAvgPrice()
    {
        return $this->avgPrice;
    }

    /**
     * @param Number $minTradeAmount
     * 最小交易额,单位为元 
     * Required: false
     * Example Value: 
     */
    private $minTradeAmount;

    /**
     * @param Number $minTradeAmount
     * 最小交易额,单位为元 
     * Example Value: 
     */
    public function setMinTradeAmount($minTradeAmount)
    {
        $this->minTradeAmount             = $minTradeAmount;
        $this->apiParas["min_trade_amount"]  = $minTradeAmount;
    }

    public function getMinTradeAmount()
    {
        return $this->minTradeAmount;
    }

    /**
     * @param Number $pageSize
     * 页大小，查询第一页时必填
     * Required: false
     * Example Value: 100
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 页大小，查询第一页时必填
     * Example Value: 100
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param String $scrollId
     * 上一次查询的游标，查询第一页时不填。第二页及以后scrollID为必填项，其他参数均可不填，scrollID为唯一有效参数。
     * Required: false
     * Example Value: 
     */
    private $scrollId;

    /**
     * @param String $scrollId
     * 上一次查询的游标，查询第一页时不填。第二页及以后scrollID为必填项，其他参数均可不填，scrollID为唯一有效参数。
     * Example Value: 
     */
    public function setScrollId($scrollId)
    {
        $this->scrollId             = $scrollId;
        $this->apiParas["scroll_id"]  = $scrollId;
    }

    public function getScrollId()
    {
        return $this->scrollId;
    }

}