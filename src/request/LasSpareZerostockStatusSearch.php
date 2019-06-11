<?php

namespace JD\request;

/**
 * 查询服务单状态
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=2326&apiName=jingdong.las.spare.zerostock.status.search
 * Class LasSpareZerostockStatusSearch
 * @package Jd\request
 */
class LasSpareZerostockStatusSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.spare.zerostock.status.search";
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
     * @param String $vendorCode
     * 供应商编码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param String $vendorCode
     * 供应商编码
     * Example Value: 
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode             = $vendorCode;
        $this->apiParas["vendorCode"]  = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * @param String $token
     * token
     * Required: true
     * Example Value: 
     */
    private $token;

    /**
     * @param String $token
     * token
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
     * @param String $serviceNo
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $serviceNo;

    /**
     * @param String $serviceNo
     * 服务单号
     * Example Value: 
     */
    public function setServiceNo($serviceNo)
    {
        $this->serviceNo             = $serviceNo;
        $this->apiParas["serviceNo"]  = $serviceNo;
    }

    public function getServiceNo()
    {
        return $this->serviceNo;
    }

    /**
     * @param String $afsServiceTaskNo
     * 服务单任务编号
     * Required: true
     * Example Value: 
     */
    private $afsServiceTaskNo;

    /**
     * @param String $afsServiceTaskNo
     * 服务单任务编号
     * Example Value: 
     */
    public function setAfsServiceTaskNo($afsServiceTaskNo)
    {
        $this->afsServiceTaskNo             = $afsServiceTaskNo;
        $this->apiParas["afsServiceTaskNo"]  = $afsServiceTaskNo;
    }

    public function getAfsServiceTaskNo()
    {
        return $this->afsServiceTaskNo;
    }

    /**
     * @param String $orderNo
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param String $orderNo
     * 订单号
     * Example Value: 
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
     * @param String $requestTime
     * 查询请求时间
     * Required: false
     * Example Value: 
     */
    private $requestTime;

    /**
     * @param String $requestTime
     * 查询请求时间
     * Example Value: 
     */
    public function setRequestTime($requestTime)
    {
        $this->requestTime             = $requestTime;
        $this->apiParas["requestTime"]  = $requestTime;
    }

    public function getRequestTime()
    {
        return $this->requestTime;
    }

}