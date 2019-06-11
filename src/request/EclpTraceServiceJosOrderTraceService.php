<?php

namespace JD\request;

/**
 * （废弃）开放按运单查询全程跟踪信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2522&apiName=jingdong.eclp.trace.service.josOrderTraceService
 * Class EclpTraceServiceJosOrderTraceService
 * @package Jd\request
 */
class EclpTraceServiceJosOrderTraceService
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.trace.service.josOrderTraceService";
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
     * @param String $waybillId
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $waybillId;

    /**
     * @param String $waybillId
     * 运单号
     * Example Value: 
     */
    public function setWaybillId($waybillId)
    {
        $this->waybillId             = $waybillId;
        $this->apiParas["waybillId"]  = $waybillId;
    }

    public function getWaybillId()
    {
        return $this->waybillId;
    }

    /**
     * @param String $carrierCode
     * 承运商编码
     * Required: true
     * Example Value: 
     */
    private $carrierCode;

    /**
     * @param String $carrierCode
     * 承运商编码
     * Example Value: 
     */
    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode             = $carrierCode;
        $this->apiParas["carrierCode"]  = $carrierCode;
    }

    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

    /**
     * @param String $role
     * 角色
     * Required: true
     * Example Value: 
     */
    private $role;

    /**
     * @param String $role
     * 角色
     * Example Value: 
     */
    public function setRole($role)
    {
        $this->role             = $role;
        $this->apiParas["role"]  = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param String $userId
     * 用户ID
     * Required: true
     * Example Value: 
     */
    private $userId;

    /**
     * @param String $userId
     * 用户ID
     * Example Value: 
     */
    public function setUserId($userId)
    {
        $this->userId             = $userId;
        $this->apiParas["userId"]  = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

}