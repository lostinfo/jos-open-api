<?php

namespace JD\request;

/**
 * 分页查询账单接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2091&apiName=jingdong.eclp.fee.queryFeeAccountWithPage
 * Class EclpFeeQueryFeeAccountWithPage
 * @package Jd\request
 */
class EclpFeeQueryFeeAccountWithPage
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.fee.queryFeeAccountWithPage";
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
     * @param String $deptNo
     * 事业部编号
     * Required: false
     * Example Value: 
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编号
     * Example Value: 
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
     * @param String $accountNo
     * 账单号
     * Required: false
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
     * @param Date $accountDayStart
     * 账单日开始日期
     * Required: true
     * Example Value: 
     */
    private $accountDayStart;

    /**
     * @param Date $accountDayStart
     * 账单日开始日期
     * Example Value: 
     */
    public function setAccountDayStart($accountDayStart)
    {
        $this->accountDayStart             = $accountDayStart;
        $this->apiParas["accountDayStart"]  = $accountDayStart;
    }

    public function getAccountDayStart()
    {
        return $this->accountDayStart;
    }

    /**
     * @param Date $accountDayEnd
     * 账单日结束日期
     * Required: true
     * Example Value: 
     */
    private $accountDayEnd;

    /**
     * @param Date $accountDayEnd
     * 账单日结束日期
     * Example Value: 
     */
    public function setAccountDayEnd($accountDayEnd)
    {
        $this->accountDayEnd             = $accountDayEnd;
        $this->apiParas["accountDayEnd"]  = $accountDayEnd;
    }

    public function getAccountDayEnd()
    {
        return $this->accountDayEnd;
    }

    /**
     * @param Number $status
     * 状态: 0-待对账 1-已对账
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param Number $status
     * 状态: 0-待对账 1-已对账
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
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