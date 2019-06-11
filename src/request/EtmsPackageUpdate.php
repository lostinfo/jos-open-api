<?php

namespca Lostinfo\JosOpenApi;

/**
 * 修改包裹数接口
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=712&apiName=jingdong.etms.package.update
 * Class EtmsPackageUpdate
 * @package Jd\request
 */
class EtmsPackageUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.etms.package.update";
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
     * @param string $vendorCode
     * 商家编号
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
     * 商家编号
     * Example Value: 
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode             = $vendorCode;
        $this->apiParas["customerCode"]  = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * @param string $deliveryId
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $deliveryId;

    /**
     * @param string $deliveryId
     * 运单号
     * Example Value: 
     */
    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId             = $deliveryId;
        $this->apiParas["deliveryId"]  = $deliveryId;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @param int $packageNum
     * 包裹数(大于0，小于1000)
     * Required: true
     * Example Value: 
     */
    private $packageNum;

    /**
     * @param int $packageNum
     * 包裹数(大于0，小于1000)
     * Example Value: 
     */
    public function setPackageNum($packageNum)
    {
        $this->packageNum             = $packageNum;
        $this->apiParas["packageCount"]  = $packageNum;
    }

    public function getPackageNum()
    {
        return $this->packageNum;
    }

}