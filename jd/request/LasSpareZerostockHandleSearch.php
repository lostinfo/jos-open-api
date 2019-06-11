<?php

namespace JD\request;

/**
 * 获取最终处理结果
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1897&apiName=jingdong.las.spare.zerostock.handle.search
 * Class LasSpareZerostockHandleSearch
 * @package Jd\request
 */
class LasSpareZerostockHandleSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.spare.zerostock.handle.search";
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
     * @param String $beginTime
     * 开始时间
     * Required: true
     * Example Value: 
     */
    private $beginTime;

    /**
     * @param String $beginTime
     * 开始时间
     * Example Value: 
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime             = $beginTime;
        $this->apiParas["begin"]  = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
    }

    /**
     * @param String $endTime
     * 结束时间
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param String $endTime
     * 结束时间
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["end"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param Number $pageIndex
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 页码
     * Example Value: 
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["index"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param String $vendorCode
     * 厂家编码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param String $vendorCode
     * 厂家编码
     * Example Value: 
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode             = $vendorCode;
        $this->apiParas["vc"]  = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
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

}