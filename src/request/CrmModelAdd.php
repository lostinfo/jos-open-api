<?php

namespca Lostinfo\JosOpenApi;

/**
 * 添加会员模型
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=338&apiName=jingdong.crm.model.add
 * Class CrmModelAdd
 * @package Jd\request
 */
class CrmModelAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.model.add";
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
     * @param string $modelName
     * 动态查询模型名称。如果只输入名称，默认查询所有会员。最大长度50个英文字符
     * Required: true
     * Example Value: 十一促销组
     */
    private $modelName;

    /**
     * @param string $modelName
     * 动态查询模型名称。如果只输入名称，默认查询所有会员。最大长度50个英文字符
     * Example Value: 十一促销组
     */
    public function setModelName($modelName)
    {
        $this->modelName             = $modelName;
        $this->apiParas["model_name"]  = $modelName;
    }

    public function getModelName()
    {
        return $this->modelName;
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
     * Example Value: 2013-01-01 00:00:00
     */
    private $minLastTradeTime;

    /**
     * @param string $minLastTradeTime
     * 最早上次交易时间，精确至年月日
     * Example Value: 2013-01-01 00:00:00
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
     * Example Value: 2013-10-01 00:00:00
     */
    private $maxLastTradeTime;

    /**
     * @param string $maxLastTradeTime
     * 最迟上次交易时间，精确至年月日
     * Example Value: 2013-10-01 00:00:00
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
     * Example Value: 24
     */
    private $minTradeCount;

    /**
     * @param int $minTradeCount
     * 最小交易量
     * Example Value: 24
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
     * Example Value: 56
     */
    private $maxTradeCount;

    /**
     * @param int $maxTradeCount
     * 最大交易量 
     * Example Value: 56
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
     * 最小平均客单价，整数，单位为元，如值为小数则系统舍去小数部分
     * Required: false
     * Example Value: 52
     */
    private $avgPrice;

    /**
     * @param int $avgPrice
     * 最小平均客单价，整数，单位为元，如值为小数则系统舍去小数部分
     * Example Value: 52
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
     * 最小交易额,整数，单位为元，如值为小数则系统舍去小数部分
     * Required: false
     * Example Value: 6210
     */
    private $minTradeAmount;

    /**
     * @param int $minTradeAmount
     * 最小交易额,整数，单位为元，如值为小数则系统舍去小数部分
     * Example Value: 6210
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

}