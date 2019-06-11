<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 支线派工/改派接口
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=2134&apiName=jingdong.las.im.hfs.assignengineer.push
 * Class LasImHfsAssignengineerPush
 * @package Jd\request
 */
class LasImHfsAssignengineerPush
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.im.hfs.assignengineer.push";
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
     * @param int $assignStatus
     * 操作类型：100 派工，200 改派（该字段未枚举类型，必须为这两个值之一）
     * Required: true
     * Example Value: 
     */
    private $assignStatus;

    /**
     * @param int $assignStatus
     * 操作类型：100 派工，200 改派（该字段未枚举类型，必须为这两个值之一）
     * Example Value: 
     */
    public function setAssignStatus($assignStatus)
    {
        $this->assignStatus             = $assignStatus;
        $this->apiParas["assignstatus"]  = $assignStatus;
    }

    public function getAssignStatus()
    {
        return $this->assignStatus;
    }

    /**
     * @param string $engineerPin
     * 工程师代码
     * Required: true
     * Example Value: 
     */
    private $engineerPin;

    /**
     * @param string $engineerPin
     * 工程师代码
     * Example Value: 
     */
    public function setEngineerPin($engineerPin)
    {
        $this->engineerPin             = $engineerPin;
        $this->apiParas["engineerpin"]  = $engineerPin;
    }

    public function getEngineerPin()
    {
        return $this->engineerPin;
    }

    /**
     * @param string $engineerName
     * 工程师姓名
     * Required: true
     * Example Value: 
     */
    private $engineerName;

    /**
     * @param string $engineerName
     * 工程师姓名
     * Example Value: 
     */
    public function setEngineerName($engineerName)
    {
        $this->engineerName             = $engineerName;
        $this->apiParas["engineername"]  = $engineerName;
    }

    public function getEngineerName()
    {
        return $this->engineerName;
    }

    /**
     * @param string $engineerPhone
     * 工程师电话
     * Required: true
     * Example Value: 
     */
    private $engineerPhone;

    /**
     * @param string $engineerPhone
     * 工程师电话
     * Example Value: 
     */
    public function setEngineerPhone($engineerPhone)
    {
        $this->engineerPhone             = $engineerPhone;
        $this->apiParas["engineerphone"]  = $engineerPhone;
    }

    public function getEngineerPhone()
    {
        return $this->engineerPhone;
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
     * @param string $operatorPin
     * 操作人
     * Required: true
     * Example Value: 
     */
    private $operatorPin;

    /**
     * @param string $operatorPin
     * 操作人
     * Example Value: 
     */
    public function setOperatorPin($operatorPin)
    {
        $this->operatorPin             = $operatorPin;
        $this->apiParas["operatorpin"]  = $operatorPin;
    }

    public function getOperatorPin()
    {
        return $this->operatorPin;
    }

    /**
     * @param string $operatorTime
     * 操作预约时间
     * Required: true
     * Example Value: 
     */
    private $operatorTime;

    /**
     * @param string $operatorTime
     * 操作预约时间
     * Example Value: 
     */
    public function setOperatorTime($operatorTime)
    {
        $this->operatorTime             = $operatorTime;
        $this->apiParas["operatetime"]  = $operatorTime;
    }

    public function getOperatorTime()
    {
        return $this->operatorTime;
    }

    /**
     * @param string $ordertype
     * 订单类型：100 京东正常订单 200 取件单
     * Required: true
     * Example Value: 
     */
    private $ordertype;

    /**
     * @param string $ordertype
     * 订单类型：100 京东正常订单 200 取件单
     * Example Value: 
     */
    public function setOrdertype($ordertype)
    {
        $this->ordertype             = $ordertype;
        $this->apiParas["ordertype"]  = $ordertype;
    }

    public function getOrdertype()
    {
        return $this->ordertype;
    }

}