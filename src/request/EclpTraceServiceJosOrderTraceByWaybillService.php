<?php

namespca Lostinfo\JosOpenApi;

/**
 * 运单号获取开放全程跟踪接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2711&apiName=jingdong.eclp.trace.service.jos.OrderTraceByWaybillService
 * Class EclpTraceServiceJosOrderTraceByWaybillService
 * @package Jd\request
 */
class EclpTraceServiceJosOrderTraceByWaybillService
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.trace.service.jos.OrderTraceByWaybillService";
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
     * @param string $waybillId
     * 运单号（承运商配送运单的单号）
     * Required: true
     * Example Value: VB42164864976
     */
    private $waybillId;

    /**
     * @param string $waybillId
     * 运单号（承运商配送运单的单号）
     * Example Value: VB42164864976
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
     * @param string $carrierCode
     * 承运商编码（申请接口时，由接口提供方提供）
     * Required: true
     * Example Value: BDB
     */
    private $carrierCode;

    /**
     * @param string $carrierCode
     * 承运商编码（申请接口时，由接口提供方提供）
     * Example Value: BDB
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
     * @param string $role
     * 角色（目前包含商家/事业部/管理三种角色）
     * Required: true
     * Example Value: seller
     */
    private $role;

    /**
     * @param string $role
     * 角色（目前包含商家/事业部/管理三种角色）
     * Example Value: seller
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
     * @param string $userId
     * 用户ID（例如：商家编号，事业部编号）
     * Required: true
     * Example Value: EBU0000000000124
     */
    private $userId;

    /**
     * @param string $userId
     * 用户ID（例如：商家编号，事业部编号）
     * Example Value: EBU0000000000124
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