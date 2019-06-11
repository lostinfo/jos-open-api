<?php

namespace JD\request;

/**
 * 批量查询商家的码信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2347&apiName=jingdong.pop.oto.locorderinfos.enget
 * Class PopOtoLocorderinfosEnget
 * @package Jd\request
 */
class PopOtoLocorderinfosEnget
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.oto.locorderinfos.enget";
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
     * @param Number $timeType
     * 查询时间的类型，1表示码状态的修改时间，2表示订单创建时间
     * Required: true
     * Example Value: 
     */
    private $timeType;

    /**
     * @param Number $timeType
     * 查询时间的类型，1表示码状态的修改时间，2表示订单创建时间
     * Example Value: 
     */
    public function setTimeType($timeType)
    {
        $this->timeType             = $timeType;
        $this->apiParas["time_type"]  = $timeType;
    }

    public function getTimeType()
    {
        return $this->timeType;
    }

    /**
     * @param String $startDate
     * 开始时间(格式如：2014-07-21 13:50:00)
     * Required: true
     * Example Value: 
     */
    private $startDate;

    /**
     * @param String $startDate
     * 开始时间(格式如：2014-07-21 13:50:00)
     * Example Value: 
     */
    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["start_date"]  = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param String $endDate
     * 结束时间(格式如：2014-07-21 13:50:00,开始时间和结束时间相差不能超过30天)
     * Required: true
     * Example Value: 
     */
    private $endDate;

    /**
     * @param String $endDate
     * 结束时间(格式如：2014-07-21 13:50:00,开始时间和结束时间相差不能超过30天)
     * Example Value: 
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["end_date"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param Number $codeStatus
     * 码状态(-1：已退款，0：等待发码，1：未消费，2：已消费，3：已过期，101：退款锁定，103：过期锁定)
     * Required: true
     * Example Value: 
     */
    private $codeStatus;

    /**
     * @param Number $codeStatus
     * 码状态(-1：已退款，0：等待发码，1：未消费，2：已消费，3：已过期，101：退款锁定，103：过期锁定)
     * Example Value: 
     */
    public function setCodeStatus($codeStatus)
    {
        $this->codeStatus             = $codeStatus;
        $this->apiParas["code_status"]  = $codeStatus;
    }

    public function getCodeStatus()
    {
        return $this->codeStatus;
    }

    /**
     * @param Number $codeType
     * 码类型(0代表码是京东生成，1代表商家生成码)
     * Required: true
     * Example Value: 
     */
    private $codeType;

    /**
     * @param Number $codeType
     * 码类型(0代表码是京东生成，1代表商家生成码)
     * Example Value: 
     */
    public function setCodeType($codeType)
    {
        $this->codeType             = $codeType;
        $this->apiParas["code_type"]  = $codeType;
    }

    public function getCodeType()
    {
        return $this->codeType;
    }

    /**
     * @param Number $pageIndex
     * 页码,起始页码是1
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 页码,起始页码是1
     * Example Value: 
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["page_index"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param Number $pageSize
     * 每页返回多少记录，最多不能超过1000条
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页返回多少记录，最多不能超过1000条
     * Example Value: 
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