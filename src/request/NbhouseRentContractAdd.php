<?php

namespace JD\request;

/**
 * 添加合同
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2283&apiName=jingdong.nbhouse.rent.contract.add
 * Class NbhouseRentContractAdd
 * @package Jd\request
 */
class NbhouseRentContractAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.nbhouse.rent.contract.add";
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
     * @param String $secondName
     * 乙方姓名
     * Required: true
     * Example Value: 
     */
    private $secondName;

    /**
     * @param String $secondName
     * 乙方姓名
     * Example Value: 
     */
    public function setSecondName($secondName)
    {
        $this->secondName             = $secondName;
        $this->apiParas["secondName"]  = $secondName;
    }

    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * @param String $secondCode
     * 乙方证件号
     * Required: true
     * Example Value: 
     */
    private $secondCode;

    /**
     * @param String $secondCode
     * 乙方证件号
     * Example Value: 
     */
    public function setSecondCode($secondCode)
    {
        $this->secondCode             = $secondCode;
        $this->apiParas["secondCode"]  = $secondCode;
    }

    public function getSecondCode()
    {
        return $this->secondCode;
    }

    /**
     * @param String $secondPhone
     * 乙方电话
     * Required: true
     * Example Value: 
     */
    private $secondPhone;

    /**
     * @param String $secondPhone
     * 乙方电话
     * Example Value: 
     */
    public function setSecondPhone($secondPhone)
    {
        $this->secondPhone             = $secondPhone;
        $this->apiParas["secondPhone"]  = $secondPhone;
    }

    public function getSecondPhone()
    {
        return $this->secondPhone;
    }

    /**
     * @param Number $skuId
     * skuId
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param Number $skuId
     * skuId
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param Number $spuId
     * spuId
     * Required: true
     * Example Value: 
     */
    private $spuId;

    /**
     * @param Number $spuId
     * spuId
     * Example Value: 
     */
    public function setSpuId($spuId)
    {
        $this->spuId             = $spuId;
        $this->apiParas["spuId"]  = $spuId;
    }

    public function getSpuId()
    {
        return $this->spuId;
    }

    /**
     * @param Number $brokerStaffId
     * 经济人id
     * Required: true
     * Example Value: 
     */
    private $brokerStaffId;

    /**
     * @param Number $brokerStaffId
     * 经济人id
     * Example Value: 
     */
    public function setBrokerStaffId($brokerStaffId)
    {
        $this->brokerStaffId             = $brokerStaffId;
        $this->apiParas["brokerStaffId"]  = $brokerStaffId;
    }

    public function getBrokerStaffId()
    {
        return $this->brokerStaffId;
    }

    /**
     * @param Date $contractStartTime
     * 合同开始时间
     * Required: true
     * Example Value: 
     */
    private $contractStartTime;

    /**
     * @param Date $contractStartTime
     * 合同开始时间
     * Example Value: 
     */
    public function setContractStartTime($contractStartTime)
    {
        $this->contractStartTime             = $contractStartTime;
        $this->apiParas["contractStartTime"]  = $contractStartTime;
    }

    public function getContractStartTime()
    {
        return $this->contractStartTime;
    }

    /**
     * @param Date $contractEndTime
     * 合同结束时间
     * Required: true
     * Example Value: 
     */
    private $contractEndTime;

    /**
     * @param Date $contractEndTime
     * 合同结束时间
     * Example Value: 
     */
    public function setContractEndTime($contractEndTime)
    {
        $this->contractEndTime             = $contractEndTime;
        $this->apiParas["contractEndTime"]  = $contractEndTime;
    }

    public function getContractEndTime()
    {
        return $this->contractEndTime;
    }

    /**
     * @param Number $depositType
     * 押金方式(压N)
     * Required: true
     * Example Value: 
     */
    private $depositType;

    /**
     * @param Number $depositType
     * 押金方式(压N)
     * Example Value: 
     */
    public function setDepositType($depositType)
    {
        $this->depositType             = $depositType;
        $this->apiParas["depositType"]  = $depositType;
    }

    public function getDepositType()
    {
        return $this->depositType;
    }

    /**
     * @param Date $payRentTime
     * 交租日期
     * Required: true
     * Example Value: 
     */
    private $payRentTime;

    /**
     * @param Date $payRentTime
     * 交租日期
     * Example Value: 
     */
    public function setPayRentTime($payRentTime)
    {
        $this->payRentTime             = $payRentTime;
        $this->apiParas["payRentTime"]  = $payRentTime;
    }

    public function getPayRentTime()
    {
        return $this->payRentTime;
    }

    /**
     * @param Number $rentAmt
     * 月租金金额
     * Required: true
     * Example Value: 
     */
    private $rentAmt;

    /**
     * @param Number $rentAmt
     * 月租金金额
     * Example Value: 
     */
    public function setRentAmt($rentAmt)
    {
        $this->rentAmt             = $rentAmt;
        $this->apiParas["rentAmt"]  = $rentAmt;
    }

    public function getRentAmt()
    {
        return $this->rentAmt;
    }

    /**
     * @param Number $payType
     * 付款方式(付N)
     * Required: true
     * Example Value: 
     */
    private $payType;

    /**
     * @param Number $payType
     * 付款方式(付N)
     * Example Value: 
     */
    public function setPayType($payType)
    {
        $this->payType             = $payType;
        $this->apiParas["payType"]  = $payType;
    }

    public function getPayType()
    {
        return $this->payType;
    }

}