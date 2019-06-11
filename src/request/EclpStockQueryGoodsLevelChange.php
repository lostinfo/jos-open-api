<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取商品等级变更记录
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1927&apiName=jingdong.eclp.stock.queryGoodsLevelChange
 * Class EclpStockQueryGoodsLevelChange
 * @package Jd\request
 */
class EclpStockQueryGoodsLevelChange
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryGoodsLevelChange";
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
     * @param string $deptNo
     * 事业部编码；最大长度50
     * Required: true
     * Example Value: EBU000000000000X
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编码；最大长度50
     * Example Value: EBU000000000000X
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"]  = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    /**
     * @param string $orderNo
     * 调整单号,多个单号用英文逗号(,)分割，最多不能超过50个
     * Required: false
     * Example Value: order1,order2
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 调整单号,多个单号用英文逗号(,)分割，最多不能超过50个
     * Example Value: order1,order2
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["orderNo"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param string $outLevel
     * 变更前等级值；最大长度100
     * Required: false
     * Example Value: 100
     */
    private $outLevel;

    /**
     * @param string $outLevel
     * 变更前等级值；最大长度100
     * Example Value: 100
     */
    public function setOutLevel($outLevel)
    {
        $this->outLevel             = $outLevel;
        $this->apiParas["outLevel"]  = $outLevel;
    }

    public function getOutLevel()
    {
        return $this->outLevel;
    }

    /**
     * @param string $intoLevel
     * 变更后等级值；最大长度100
     * Required: false
     * Example Value: 200
     */
    private $intoLevel;

    /**
     * @param string $intoLevel
     * 变更后等级值；最大长度100
     * Example Value: 200
     */
    public function setIntoLevel($intoLevel)
    {
        $this->intoLevel             = $intoLevel;
        $this->apiParas["intoLevel"]  = $intoLevel;
    }

    public function getIntoLevel()
    {
        return $this->intoLevel;
    }

    /**
     * @param int $pageNo
     * 当前页数,需从1开始
     * Required: true
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 当前页数,需从1开始
     * Example Value: 1
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param int $pageSize
     * 当前页数量，范围为1到50
     * Required: true
     * Example Value: 50
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 当前页数量，范围为1到50
     * Example Value: 50
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param string $startTime
     * 开始日期
     * Required: false
     * Example Value: 2018-12-01 00:00:00
     */
    private $startTime;

    /**
     * @param string $startTime
     * 开始日期
     * Example Value: 2018-12-01 00:00:00
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string $endTime
     * 结束日期
     * Required: false
     * Example Value: 2018-12-02 00:00:00
     */
    private $endTime;

    /**
     * @param string $endTime
     * 结束日期
     * Example Value: 2018-12-02 00:00:00
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

}