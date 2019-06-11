<?php

namespace JD\request;

/**
 * 分页查询账单明细
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2092&apiName=jingdong.eclp.fee.queryFeeAccountDetailWithPage
 * Class EclpFeeQueryFeeAccountDetailWithPage
 * @package Jd\request
 */
class EclpFeeQueryFeeAccountDetailWithPage
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.fee.queryFeeAccountDetailWithPage";
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
     * @param String $accountNo
     * 账单号
     * Required: true
     * Example Value: 
     */
    private $accountNo;

    /**
     * @param String $accountNo
     * 账单号
     * Example Value: 
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo             = $accountNo;
        $this->apiParas["accountNo"]  = $accountNo;
    }

    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * @param Date $billDayStart
     * 计费开始日期
     * Required: false
     * Example Value: 
     */
    private $billDayStart;

    /**
     * @param Date $billDayStart
     * 计费开始日期
     * Example Value: 
     */
    public function setBillDayStart($billDayStart)
    {
        $this->billDayStart             = $billDayStart;
        $this->apiParas["billDayStart"]  = $billDayStart;
    }

    public function getBillDayStart()
    {
        return $this->billDayStart;
    }

    /**
     * @param Date $billDayEnd
     * 计费结束日期
     * Required: false
     * Example Value: 
     */
    private $billDayEnd;

    /**
     * @param Date $billDayEnd
     * 计费结束日期
     * Example Value: 
     */
    public function setBillDayEnd($billDayEnd)
    {
        $this->billDayEnd             = $billDayEnd;
        $this->apiParas["billDayEnd"]  = $billDayEnd;
    }

    public function getBillDayEnd()
    {
        return $this->billDayEnd;
    }

    /**
     * @param Number $currentPage
     * 页码
     * Required: true
     * Example Value: 
     */
    private $currentPage;

    /**
     * @param Number $currentPage
     * 页码
     * Example Value: 
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["currentPage"]  = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param Number $pageSize
     * 每页记录数,最大100
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页记录数,最大100
     * Example Value: 
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

}