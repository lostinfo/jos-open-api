<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 取件单取件状态回传
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=2133&apiName=jingdong.las.im.hfs.reverseorderpickup.push
 * Class LasImHfsReverseorderpickupPush
 * @package Jd\request
 */
class LasImHfsReverseorderpickupPush
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.im.hfs.reverseorderpickup.push";
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
     * 取件单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param string $orderId
     * 取件单号
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
     * @param int $logisticsStatus
     * 物流状态
     * Required: true
     * Example Value: 
     */
    private $logisticsStatus;

    /**
     * @param int $logisticsStatus
     * 物流状态
     * Example Value: 
     */
    public function setLogisticsStatus($logisticsStatus)
    {
        $this->logisticsStatus             = $logisticsStatus;
        $this->apiParas["logisticsStatus"]  = $logisticsStatus;
    }

    public function getLogisticsStatus()
    {
        return $this->logisticsStatus;
    }

    /**
     * @param string $operatorPin
     * 操作人(取件人)
     * Required: true
     * Example Value: 
     */
    private $operatorPin;

    /**
     * @param string $operatorPin
     * 操作人(取件人)
     * Example Value: 
     */
    public function setOperatorPin($operatorPin)
    {
        $this->operatorPin             = $operatorPin;
        $this->apiParas["operatorPin"]  = $operatorPin;
    }

    public function getOperatorPin()
    {
        return $this->operatorPin;
    }

    /**
     * @param string $operatorTime
     * 操作时间(取件时间)
     * Required: true
     * Example Value: 
     */
    private $operatorTime;

    /**
     * @param string $operatorTime
     * 操作时间(取件时间)
     * Example Value: 
     */
    public function setOperatorTime($operatorTime)
    {
        $this->operatorTime             = $operatorTime;
        $this->apiParas["operatorTime"]  = $operatorTime;
    }

    public function getOperatorTime()
    {
        return $this->operatorTime;
    }

    /**
     * @param string $remark
     * 备注
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param string $remark
     * 备注
     * Example Value: 
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

}