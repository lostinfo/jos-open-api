<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 订单号获取开放全程跟踪接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2707&apiName=jingdong.eclp.trace.service.jos.OrderTraceByOrderService
 * Class EclpTraceServiceJosOrderTraceByOrderService
 * @package Jd\request
 */
class EclpTraceServiceJosOrderTraceByOrderService
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.trace.service.jos.OrderTraceByOrderService";
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
     * @param string $orderId
     * 订单号 开放平台订单号（ELS单号）
     * Required: true
     * Example Value: ESL57194882539272
     */
    private $orderId;

    /**
     * @param string $orderId
     * 订单号 开放平台订单号（ELS单号）
     * Example Value: ESL57194882539272
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $role
     * 角色（目前包含商家/事业部/管理三种角色）。
     * Required: true
     * Example Value: seller
     */
    private $role;

    /**
     * @param string $role
     * 角色（目前包含商家/事业部/管理三种角色）。
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