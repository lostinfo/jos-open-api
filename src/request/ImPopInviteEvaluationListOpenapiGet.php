<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取邀评接口
 * 咚咚API-京东咚咚系统API，包含：查询信息、客服日评价、客服登陆日志、时长等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=53&apiId=3408&apiName=jingdong.im.pop.inviteEvaluationList.openapi.get
 * Class ImPopInviteEvaluationListOpenapiGet
 * @package Jd\request
 */
class ImPopInviteEvaluationListOpenapiGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.im.pop.inviteEvaluationList.openapi.get";
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
     * @param string[] $waiter
     * 参数描述需要查询的客服账号列表，为空默认查询的是商家主账户
     * Required: true
     * Example Value: 张三
     */
    private $waiter;

    /**
     * @param string[] $waiter
     * 参数描述需要查询的客服账号列表，为空默认查询的是商家主账户
     * Example Value: 张三
     */
    public function setWaiter($waiter)
    {
        $this->waiter             = $waiter;
        $this->apiParas["waiter"]  = $waiter;
    }

    public function getWaiter()
    {
        return $this->waiter;
    }

    /**
     * @param string $startTime
     * 需要查询数据的开始日期（取Date的年月日部分）
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param string $startTime
     * 需要查询数据的开始日期（取Date的年月日部分）
     * Example Value: 
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
     * 需要查询数据的截止日期（取Date的年月日部分），查询起止日期相差不能大于7天，查询的日期距现在不能大于3个月
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param string $endTime
     * 需要查询数据的截止日期（取Date的年月日部分），查询起止日期相差不能大于7天，查询的日期距现在不能大于3个月
     * Example Value: 
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

    /**
     * @param int $page
     * 查询页数
     * Required: true
     * Example Value: 1
     */
    private $page;

    /**
     * @param int $page
     * 查询页数
     * Example Value: 1
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $pageSize
     * 每页记录数
     * Required: true
     * Example Value: 50
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页记录数
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
     * @param int $dataType
     * 是否实时,如果是实时，则startTime和endTime
     * Required: true
     * Example Value: 1
     */
    private $dataType;

    /**
     * @param int $dataType
     * 是否实时,如果是实时，则startTime和endTime
     * Example Value: 1
     */
    public function setDataType($dataType)
    {
        $this->dataType             = $dataType;
        $this->apiParas["dataType"]  = $dataType;
    }

    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @param string $timeNo
     * 实时时间序号,如果是20:25分，则传20,5
     * Required: true
     * Example Value: 12,5
     */
    private $timeNo;

    /**
     * @param string $timeNo
     * 实时时间序号,如果是20:25分，则传20,5
     * Example Value: 12,5
     */
    public function setTimeNo($timeNo)
    {
        $this->timeNo             = $timeNo;
        $this->apiParas["timeNo"]  = $timeNo;
    }

    public function getTimeNo()
    {
        return $this->timeNo;
    }

}