<?php

namespace JD\request;

/**
 * 获取青龙运单号接口
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=2311&apiName=jingdong.etms.waybillcode.get
 * Class EtmsWaybillcodeGet
 * @package Jd\request
 */
class EtmsWaybillcodeGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.etms.waybillcode.get";
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
     * @param String $preNum
     * 获取运单号数量（需要填写正整数，最大100）
     * Required: true
     * Example Value: 
     */
    private $preNum;

    /**
     * @param String $preNum
     * 获取运单号数量（需要填写正整数，最大100）
     * Example Value: 
     */
    public function setPreNum($preNum)
    {
        $this->preNum             = $preNum;
        $this->apiParas["preNum"]  = $preNum;
    }

    public function getPreNum()
    {
        return $this->preNum;
    }

    /**
     * @param String $customerCode
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $customerCode;

    /**
     * @param String $customerCode
     * 商家编码
     * Example Value: 
     */
    public function setCustomerCode($customerCode)
    {
        $this->customerCode             = $customerCode;
        $this->apiParas["customerCode"]  = $customerCode;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    /**
     * @param Number $orderType
     * 运单类型。(普通外单：0，O2O外单：1)默认为0
     * Required: false
     * Example Value: 
     */
    private $orderType;

    /**
     * @param Number $orderType
     * 运单类型。(普通外单：0，O2O外单：1)默认为0
     * Example Value: 
     */
    public function setOrderType($orderType)
    {
        $this->orderType             = $orderType;
        $this->apiParas["orderType"]  = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

}