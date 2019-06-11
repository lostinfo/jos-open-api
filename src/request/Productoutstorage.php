<?php

namespca Lostinfo\JosOpenApi;

/**
 * 二段订单出库上报
 * 集运商API-集运商对集运订单查询，集运商上报订单数据等业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=263&apiId=2452&apiName=jingdong.productoutstorage
 * Class Productoutstorage
 * @package Jd\request
 */
class Productoutstorage
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.productoutstorage";
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
     * @param int $twoOrderId
     * twoOrderId
     * Required: true
     * Example Value: 
     */
    private $twoOrderId;

    /**
     * @param int $twoOrderId
     * twoOrderId
     * Example Value: 
     */
    public function setTwoOrderId($twoOrderId)
    {
        $this->twoOrderId             = $twoOrderId;
        $this->apiParas["twoOrderId"]  = $twoOrderId;
    }

    public function getTwoOrderId()
    {
        return $this->twoOrderId;
    }

    /**
     * @param string $waybillNumber
     * waybillNumber
     * Required: true
     * Example Value: 
     */
    private $waybillNumber;

    /**
     * @param string $waybillNumber
     * waybillNumber
     * Example Value: 
     */
    public function setWaybillNumber($waybillNumber)
    {
        $this->waybillNumber             = $waybillNumber;
        $this->apiParas["waybillNumber"]  = $waybillNumber;
    }

    public function getWaybillNumber()
    {
        return $this->waybillNumber;
    }

    /**
     * @param string $logisticsCompanies
     * logisticsCompanies
     * Required: true
     * Example Value: 
     */
    private $logisticsCompanies;

    /**
     * @param string $logisticsCompanies
     * logisticsCompanies
     * Example Value: 
     */
    public function setLogisticsCompanies($logisticsCompanies)
    {
        $this->logisticsCompanies             = $logisticsCompanies;
        $this->apiParas["logisticsCompanies"]  = $logisticsCompanies;
    }

    public function getLogisticsCompanies()
    {
        return $this->logisticsCompanies;
    }

    /**
     * @param string $bagCount
     * bagCount
     * Required: false
     * Example Value: 
     */
    private $bagCount;

    /**
     * @param string $bagCount
     * bagCount
     * Example Value: 
     */
    public function setBagCount($bagCount)
    {
        $this->bagCount             = $bagCount;
        $this->apiParas["bagCount"]  = $bagCount;
    }

    public function getBagCount()
    {
        return $this->bagCount;
    }

    /**
     * @param string $extStr
     * extStr
     * Required: false
     * Example Value: 
     */
    private $extStr;

    /**
     * @param string $extStr
     * extStr
     * Example Value: 
     */
    public function setExtStr($extStr)
    {
        $this->extStr             = $extStr;
        $this->apiParas["extStr"]  = $extStr;
    }

    public function getExtStr()
    {
        return $this->extStr;
    }

}