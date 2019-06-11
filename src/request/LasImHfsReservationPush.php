<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 服务商支线预约接口
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=2135&apiName=jingdong.las.im.hfs.reservation.push
 * Class LasImHfsReservationPush
 * @package Jd\request
 */
class LasImHfsReservationPush
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.im.hfs.reservation.push";
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
     * 订单号/取件单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param string $orderId
     * 订单号/取件单号
     * Example Value: 
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderid"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $appointmentStatus
     * 操作类型：100 预约，110 改约（该字段为枚举类型，必须为这两个值之一）
     * Required: true
     * Example Value: 
     */
    private $appointmentStatus;

    /**
     * @param string $appointmentStatus
     * 操作类型：100 预约，110 改约（该字段为枚举类型，必须为这两个值之一）
     * Example Value: 
     */
    public function setAppointmentStatus($appointmentStatus)
    {
        $this->appointmentStatus             = $appointmentStatus;
        $this->apiParas["appointmentstatus"]  = $appointmentStatus;
    }

    public function getAppointmentStatus()
    {
        return $this->appointmentStatus;
    }

    /**
     * @param string $appointmentTimeBegin
     * 预约送货时间段开始
     * Required: true
     * Example Value: 
     */
    private $appointmentTimeBegin;

    /**
     * @param string $appointmentTimeBegin
     * 预约送货时间段开始
     * Example Value: 
     */
    public function setAppointmentTimeBegin($appointmentTimeBegin)
    {
        $this->appointmentTimeBegin             = $appointmentTimeBegin;
        $this->apiParas["appointmenttimebegin"]  = $appointmentTimeBegin;
    }

    public function getAppointmentTimeBegin()
    {
        return $this->appointmentTimeBegin;
    }

    /**
     * @param string $appointmentTimeEnd
     * 预约时间段结束（结束时间必须大于开始时间，且在同一天）
     * Required: true
     * Example Value: 
     */
    private $appointmentTimeEnd;

    /**
     * @param string $appointmentTimeEnd
     * 预约时间段结束（结束时间必须大于开始时间，且在同一天）
     * Example Value: 
     */
    public function setAppointmentTimeEnd($appointmentTimeEnd)
    {
        $this->appointmentTimeEnd             = $appointmentTimeEnd;
        $this->apiParas["appointmenttimeend"]  = $appointmentTimeEnd;
    }

    public function getAppointmentTimeEnd()
    {
        return $this->appointmentTimeEnd;
    }

    /**
     * @param string $serviceProviderNo
     * 平台服务商编号
     * Required: true
     * Example Value: 
     */
    private $serviceProviderNo;

    /**
     * @param string $serviceProviderNo
     * 平台服务商编号
     * Example Value: 
     */
    public function setServiceProviderNo($serviceProviderNo)
    {
        $this->serviceProviderNo             = $serviceProviderNo;
        $this->apiParas["serviceproviderno"]  = $serviceProviderNo;
    }

    public function getServiceProviderNo()
    {
        return $this->serviceProviderNo;
    }

    /**
     * @param string $operator
     * 操作人
     * Required: true
     * Example Value: 
     */
    private $operator;

    /**
     * @param string $operator
     * 操作人
     * Example Value: 
     */
    public function setOperator($operator)
    {
        $this->operator             = $operator;
        $this->apiParas["operator"]  = $operator;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param string $operateTime
     * 操作预约时间
     * Required: true
     * Example Value: 
     */
    private $operateTime;

    /**
     * @param string $operateTime
     * 操作预约时间
     * Example Value: 
     */
    public function setOperateTime($operateTime)
    {
        $this->operateTime             = $operateTime;
        $this->apiParas["operatetime"]  = $operateTime;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

    /**
     * @param string $orderType
     * 订单类型：100 京东正常订单 200 取件单
     * Required: true
     * Example Value: 
     */
    private $orderType;

    /**
     * @param string $orderType
     * 订单类型：100 京东正常订单 200 取件单
     * Example Value: 
     */
    public function setOrderType($orderType)
    {
        $this->orderType             = $orderType;
        $this->apiParas["ordertype"]  = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

}