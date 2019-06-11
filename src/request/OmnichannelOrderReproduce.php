<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 重新生产
 * 全渠道开放平台API-全渠道开放平台API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=244&apiId=2906&apiName=jingdong.omnichannel.order.reproduce
 * Class OmnichannelOrderReproduce
 * @package Jd\request
 */
class OmnichannelOrderReproduce
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.omnichannel.order.reproduce";
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
     * @param int $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单号
     * Example Value: 
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
     * @param int $storeId
     * 门店编号
     * Required: true
     * Example Value: 
     */
    private $storeId;

    /**
     * @param int $storeId
     * 门店编号
     * Example Value: 
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param string $remark
     * 重新生产原因
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param string $remark
     * 重新生产原因
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

    /**
     * @param string $operateName
     * 操作人名
     * Required: false
     * Example Value: 
     */
    private $operateName;

    /**
     * @param string $operateName
     * 操作人名
     * Example Value: 
     */
    public function setOperateName($operateName)
    {
        $this->operateName             = $operateName;
        $this->apiParas["operateName"]  = $operateName;
    }

    public function getOperateName()
    {
        return $this->operateName;
    }

    /**
     * @param string $operateTime
     * 操作时间
     * Required: true
     * Example Value: 
     */
    private $operateTime;

    /**
     * @param string $operateTime
     * 操作时间
     * Example Value: 
     */
    public function setOperateTime($operateTime)
    {
        $this->operateTime             = $operateTime;
        $this->apiParas["operateTime"]  = $operateTime;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

}