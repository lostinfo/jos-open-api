<?php

namespace JD\request;

/**
 * 获取京准取日历
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=3415&apiName=jingdong.ldop.jos.center.getPickupIntimeList
 * Class LdopJosCenterGetPickupIntimeList
 * @package Jd\request
 */
class LdopJosCenterGetPickupIntimeList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.jos.center.getPickupIntimeList";
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
     * @param String $customerCode
     * 商家编码
     * Required: true
     * Example Value: 010K10004
     */
    private $customerCode;

    /**
     * @param String $customerCode
     * 商家编码
     * Example Value: 010K10004
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
     * @param String $detailAddress
     * 详细地址
     * Required: true
     * Example Value: 浙江杭州市余杭区崇贤街道佳源名城10-1-2102
     */
    private $detailAddress;

    /**
     * @param String $detailAddress
     * 详细地址
     * Example Value: 浙江杭州市余杭区崇贤街道佳源名城10-1-2102
     */
    public function setDetailAddress($detailAddress)
    {
        $this->detailAddress             = $detailAddress;
        $this->apiParas["detailAddress"]  = $detailAddress;
    }

    public function getDetailAddress()
    {
        return $this->detailAddress;
    }

}