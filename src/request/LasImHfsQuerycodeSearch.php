<?php

namespace JD\request;

/**
 * 按时间获取所有查询码
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=2165&apiName=jingdong.las.im.hfs.querycode.search
 * Class LasImHfsQuerycodeSearch
 * @package Jd\request
 */
class LasImHfsQuerycodeSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.im.hfs.querycode.search";
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
     * @param String $outletsId
     * 服务商编码
     * Required: true
     * Example Value: 
     */
    private $outletsId;

    /**
     * @param String $outletsId
     * 服务商编码
     * Example Value: 
     */
    public function setOutletsId($outletsId)
    {
        $this->outletsId             = $outletsId;
        $this->apiParas["no"]  = $outletsId;
    }

    public function getOutletsId()
    {
        return $this->outletsId;
    }

    /**
     * @param String $token
     * 校验码
     * Required: true
     * Example Value: 
     */
    private $token;

    /**
     * @param String $token
     * 校验码
     * Example Value: 
     */
    public function setToken($token)
    {
        $this->token             = $token;
        $this->apiParas["token"]  = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param String $strDate
     * 查询日期
     * Required: false
     * Example Value: yyyy-MM-dd格式（非必填。不填则默认为当天）
     */
    private $strDate;

    /**
     * @param String $strDate
     * 查询日期
     * Example Value: yyyy-MM-dd格式（非必填。不填则默认为当天）
     */
    public function setStrDate($strDate)
    {
        $this->strDate             = $strDate;
        $this->apiParas["date"]  = $strDate;
    }

    public function getStrDate()
    {
        return $this->strDate;
    }

}