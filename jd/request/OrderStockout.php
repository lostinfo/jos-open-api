<?php

namespace JD\request;

/**
 * jd_ofw_pfm
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=1643&apiName=jingdong.orderStockout
 * Class OrderStockout
 * @package Jd\request
 */
class OrderStockout
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.orderStockout";
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
     * @param Number $venderId
     * jd_ofw_pfm
     * Required: true
     * Example Value: 
     */
    private $venderId;

    /**
     * @param Number $venderId
     * jd_ofw_pfm
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    /**
     * @param Number $orderId
     * jd_ofw_pfm
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param Number $orderId
     * jd_ofw_pfm
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
     * @param Date $completeDate
     * jd_ofw_pfm
     * Required: true
     * Example Value: 
     */
    private $completeDate;

    /**
     * @param Date $completeDate
     * jd_ofw_pfm
     * Example Value: 
     */
    public function setCompleteDate($completeDate)
    {
        $this->completeDate             = $completeDate;
        $this->apiParas["completeDate"]  = $completeDate;
    }

    public function getCompleteDate()
    {
        return $this->completeDate;
    }

    /**
     * @param String $operName
     * jd_ofw_pfm
     * Required: true
     * Example Value: 
     */
    private $operName;

    /**
     * @param String $operName
     * jd_ofw_pfm
     * Example Value: 
     */
    public function setOperName($operName)
    {
        $this->operName             = $operName;
        $this->apiParas["operName"]  = $operName;
    }

    public function getOperName()
    {
        return $this->operName;
    }

}