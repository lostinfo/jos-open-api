<?php

namespace JD\request;

/**
 * 分页查询计费明细
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2093&apiName=jingdong.eclp.fee.queryFeeDetailWithPage
 * Class EclpFeeQueryFeeDetailWithPage
 * @package Jd\request
 */
class EclpFeeQueryFeeDetailWithPage
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.fee.queryFeeDetailWithPage";
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
     * Required: true
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
     * @param Date $billDay
     * 计费日期
     * Required: true
     * Example Value: 
     */
    private $billDay;

    /**
     * @param Date $billDay
     * 计费日期
     * Example Value: 
     */
    public function setBillDay($billDay)
    {
        $this->billDay             = $billDay;
        $this->apiParas["billDay"]  = $billDay;
    }

    public function getBillDay()
    {
        return $this->billDay;
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