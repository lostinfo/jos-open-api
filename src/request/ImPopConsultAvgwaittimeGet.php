<?php

namespca Lostinfo\JosOpenApi;

/**
 * 咨询指定日期的平均等待时长
 * 咚咚API-京东咚咚系统API，包含：查询信息、客服日评价、客服登陆日志、时长等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=53&apiId=358&apiName=jingdong.im.pop.consult.avgwaittime.get
 * Class ImPopConsultAvgwaittimeGet
 * @package Jd\request
 */
class ImPopConsultAvgwaittimeGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.im.pop.consult.avgwaittime.get";
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
     * @param string $waiter
     * 需要查询的客服账号（当该字段不输入时，默认查询授权账号 。只有在授权账号为主账号，且该字段为授权账号的子账号时，才会产生查询结果）
     * Required: false
     * Example Value: 
     */
    private $waiter;

    /**
     * @param string $waiter
     * 需要查询的客服账号（当该字段不输入时，默认查询授权账号 。只有在授权账号为主账号，且该字段为授权账号的子账号时，才会产生查询结果）
     * Example Value: 
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
     * @param string $date
     * 需要查询数据的日期（取Date的年月日部分），查询的日期距现在不能大于3个月
     * Required: true
     * Example Value: 
     */
    private $date;

    /**
     * @param string $date
     * 需要查询数据的日期（取Date的年月日部分），查询的日期距现在不能大于3个月
     * Example Value: 
     */
    public function setDate($date)
    {
        $this->date             = $date;
        $this->apiParas["date"]  = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

}