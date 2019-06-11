<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询店铺会员列表及信息
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=335&apiName=jingdong.crm.member.search
 * Class CrmMemberSearch
 * @package Jd\request
 */
class CrmMemberSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.member.search";
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
     * @param string $customerPin
     * 会员名称（明文pin）,用户在京东的唯一标识。查询匹配以输入值开头的所有会员
     * Required: false
     * Example Value: jerge_oceans
     */
    private $customerPin;

    /**
     * @param string $customerPin
     * 会员名称（明文pin）,用户在京东的唯一标识。查询匹配以输入值开头的所有会员
     * Example Value: jerge_oceans
     */
    public function setCustomerPin($customerPin)
    {
        $this->customerPin             = $customerPin;
        $this->apiParas["customer_pin"]  = $customerPin;
    }

    public function getCustomerPin()
    {
        return $this->customerPin;
    }

    /**
     * @param string $grade
     * 会员等级(可支持多个，用逗号分隔，如：1,2,3)
     * Required: false
     * Example Value: 2
     */
    private $grade;

    /**
     * @param string $grade
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
     * @param string $minLastTradeTime
     * 最早上次交易时间，精确至年月日
     * Required: false
     * Example Value: 2013-01-01
     */
    private $minLastTradeTime;

    /**
     * @param string $minLastTradeTime
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
     * @param string $maxLastTradeTime
     * 最迟上次交易时间，精确至年月日
     * Required: false
     * Example Value: 2013-10-01
     */
    private $maxLastTradeTime;

    /**
     * @param string $maxLastTradeTime
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
     * @param int $minTradeCount
     * 最小交易量
     * Required: false
     * Example Value: 15
     */
    private $minTradeCount;

    /**
     * @param int $minTradeCount
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
     * @param int $maxTradeCount
     * 最大交易量 
     * Required: false
     * Example Value: 620
     */
    private $maxTradeCount;

    /**
     * @param int $maxTradeCount
     * 最大交易量 
     * Example Value: 620
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
     * @param int $avgPrice
     * 最小平均客单价，单位为元 
     * Required: false
     * Example Value: 52.10
     */
    private $avgPrice;

    /**
     * @param int $avgPrice
     * 最小平均客单价，单位为元 
     * Example Value: 52.10
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
     * @param int $minTradeAmount
     * 最小交易额,单位为元
     * Required: false
     * Example Value: 6210.10
     */
    private $minTradeAmount;

    /**
     * @param int $minTradeAmount
     * 最小交易额,单位为元
     * Example Value: 6210.10
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
     * @param int $currentPage
     * 显示第几页的会员，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页数为1，最大页数为100
     * Required: true
     * Example Value: 45
     */
    private $currentPage;

    /**
     * @param int $currentPage
     * 显示第几页的会员，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页数为1，最大页数为100
     * Example Value: 45
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["current_page"]  = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param int $pageSize
     * 表示每页显示的会员数量,page_size的最大值不能超过100条,最小值不能低于1
     * Required: true
     * Example Value: 20
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 表示每页显示的会员数量,page_size的最大值不能超过100条,最小值不能低于1
     * Example Value: 20
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

}