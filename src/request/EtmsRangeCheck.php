<?php

namespca Lostinfo\JosOpenApi;

/**
 * 是否可以京配
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=1023&apiName=jingdong.etms.range.check
 * Class EtmsRangeCheck
 * @package Jd\request
 */
class EtmsRangeCheck
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.etms.range.check";
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
     * @param string $salePlat
     * 销售平台
     * Required: false
     * Example Value: 
     */
    private $salePlat;

    /**
     * @param string $salePlat
     * 销售平台
     * Example Value: 
     */
    public function setSalePlat($salePlat)
    {
        $this->salePlat             = $salePlat;
        $this->apiParas["salePlat"]  = $salePlat;
    }

    public function getSalePlat()
    {
        return $this->salePlat;
    }

    /**
     * @param string $customerCode
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $customerCode;

    /**
     * @param string $customerCode
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
     * @param string $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param string $orderId
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
     * @param int $goodsType
     * 配送业务类型（ 1:普通，3:填仓，4:特配，5:鲜活，6:控温，7:冷藏，8:冷冻，9:深冷）默认是1
     * Required: true
     * Example Value: 
     */
    private $goodsType;

    /**
     * @param int $goodsType
     * 配送业务类型（ 1:普通，3:填仓，4:特配，5:鲜活，6:控温，7:冷藏，8:冷冻，9:深冷）默认是1
     * Example Value: 
     */
    public function setGoodsType($goodsType)
    {
        $this->goodsType             = $goodsType;
        $this->apiParas["goodsType"]  = $goodsType;
    }

    public function getGoodsType()
    {
        return $this->goodsType;
    }

    /**
     * @param string $wareHouseCode
     * 发货仓
     * Required: false
     * Example Value: 
     */
    private $wareHouseCode;

    /**
     * @param string $wareHouseCode
     * 发货仓
     * Example Value: 
     */
    public function setWareHouseCode($wareHouseCode)
    {
        $this->wareHouseCode             = $wareHouseCode;
        $this->apiParas["wareHouseCode"]  = $wareHouseCode;
    }

    public function getWareHouseCode()
    {
        return $this->wareHouseCode;
    }

    /**
     * @param string $receiveAddress
     * 收件人地址
     * Required: true
     * Example Value: 
     */
    private $receiveAddress;

    /**
     * @param string $receiveAddress
     * 收件人地址
     * Example Value: 
     */
    public function setReceiveAddress($receiveAddress)
    {
        $this->receiveAddress             = $receiveAddress;
        $this->apiParas["receiveAddress"]  = $receiveAddress;
    }

    public function getReceiveAddress()
    {
        return $this->receiveAddress;
    }

    /**
     * @param int $transType
     * 运输类型（2：航空，1：陆运）
     * Required: false
     * Example Value: 
     */
    private $transType;

    /**
     * @param int $transType
     * 运输类型（2：航空，1：陆运）
     * Example Value: 
     */
    public function setTransType($transType)
    {
        $this->transType             = $transType;
        $this->apiParas["transType"]  = $transType;
    }

    public function getTransType()
    {
        return $this->transType;
    }

    /**
     * @param int $senderProvinceId
     * 寄件人省编码
     * Required: false
     * Example Value: 
     */
    private $senderProvinceId;

    /**
     * @param int $senderProvinceId
     * 寄件人省编码
     * Example Value: 
     */
    public function setSenderProvinceId($senderProvinceId)
    {
        $this->senderProvinceId             = $senderProvinceId;
        $this->apiParas["senderProvinceId"]  = $senderProvinceId;
    }

    public function getSenderProvinceId()
    {
        return $this->senderProvinceId;
    }

    /**
     * @param int $senderCityId
     * 寄件人市编码
     * Required: false
     * Example Value: 
     */
    private $senderCityId;

    /**
     * @param int $senderCityId
     * 寄件人市编码
     * Example Value: 
     */
    public function setSenderCityId($senderCityId)
    {
        $this->senderCityId             = $senderCityId;
        $this->apiParas["senderCityId"]  = $senderCityId;
    }

    public function getSenderCityId()
    {
        return $this->senderCityId;
    }

    /**
     * @param int $senderCountyId
     * 寄件人县编码
     * Required: false
     * Example Value: 
     */
    private $senderCountyId;

    /**
     * @param int $senderCountyId
     * 寄件人县编码
     * Example Value: 
     */
    public function setSenderCountyId($senderCountyId)
    {
        $this->senderCountyId             = $senderCountyId;
        $this->apiParas["senderCountyId"]  = $senderCountyId;
    }

    public function getSenderCountyId()
    {
        return $this->senderCountyId;
    }

    /**
     * @param int $senderTownId
     * 寄件人镇编码
     * Required: false
     * Example Value: 
     */
    private $senderTownId;

    /**
     * @param int $senderTownId
     * 寄件人镇编码
     * Example Value: 
     */
    public function setSenderTownId($senderTownId)
    {
        $this->senderTownId             = $senderTownId;
        $this->apiParas["senderTownId"]  = $senderTownId;
    }

    public function getSenderTownId()
    {
        return $this->senderTownId;
    }

    /**
     * @param int $receiverProvinceId
     * 收件人省编码
     * Required: false
     * Example Value: 
     */
    private $receiverProvinceId;

    /**
     * @param int $receiverProvinceId
     * 收件人省编码
     * Example Value: 
     */
    public function setReceiverProvinceId($receiverProvinceId)
    {
        $this->receiverProvinceId             = $receiverProvinceId;
        $this->apiParas["receiverProvinceId"]  = $receiverProvinceId;
    }

    public function getReceiverProvinceId()
    {
        return $this->receiverProvinceId;
    }

    /**
     * @param int $receiverCityId
     * 收件人市编码
     * Required: false
     * Example Value: 
     */
    private $receiverCityId;

    /**
     * @param int $receiverCityId
     * 收件人市编码
     * Example Value: 
     */
    public function setReceiverCityId($receiverCityId)
    {
        $this->receiverCityId             = $receiverCityId;
        $this->apiParas["receiverCityId"]  = $receiverCityId;
    }

    public function getReceiverCityId()
    {
        return $this->receiverCityId;
    }

    /**
     * @param int $receiverCountyId
     * 收件人县编码
     * Required: false
     * Example Value: 
     */
    private $receiverCountyId;

    /**
     * @param int $receiverCountyId
     * 收件人县编码
     * Example Value: 
     */
    public function setReceiverCountyId($receiverCountyId)
    {
        $this->receiverCountyId             = $receiverCountyId;
        $this->apiParas["receiverCountyId"]  = $receiverCountyId;
    }

    public function getReceiverCountyId()
    {
        return $this->receiverCountyId;
    }

    /**
     * @param int $receiverTownId
     * 收件人镇编码
     * Required: false
     * Example Value: 
     */
    private $receiverTownId;

    /**
     * @param int $receiverTownId
     * 收件人镇编码
     * Example Value: 
     */
    public function setReceiverTownId($receiverTownId)
    {
        $this->receiverTownId             = $receiverTownId;
        $this->apiParas["receiverTownId"]  = $receiverTownId;
    }

    public function getReceiverTownId()
    {
        return $this->receiverTownId;
    }

    /**
     * @param string $sendTime
     * 发货时间
     * Required: false
     * Example Value: 
     */
    private $sendTime;

    /**
     * @param string $sendTime
     * 发货时间
     * Example Value: 
     */
    public function setSendTime($sendTime)
    {
        $this->sendTime             = $sendTime;
        $this->apiParas["sendTime"]  = $sendTime;
    }

    public function getSendTime()
    {
        return $this->sendTime;
    }

    /**
     * @param int $isCode
     * 是否货到付款1：货到付款，0：在线支付，默认为1）
     * Required: false
     * Example Value: 
     */
    private $isCode;

    /**
     * @param int $isCode
     * 是否货到付款1：货到付款，0：在线支付，默认为1）
     * Example Value: 
     */
    public function setIsCode($isCode)
    {
        $this->isCode             = $isCode;
        $this->apiParas["isCod"]  = $isCode;
    }

    public function getIsCode()
    {
        return $this->isCode;
    }

    /**
     * @param int $siteId
     * 站点ID
     * Required: false
     * Example Value: 
     */
    private $siteId;

    /**
     * @param int $siteId
     * 站点ID
     * Example Value: 
     */
    public function setSiteId($siteId)
    {
        $this->siteId             = $siteId;
        $this->apiParas["siteId"]  = $siteId;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * @param string $siteName
     * 站点名称
     * Required: false
     * Example Value: 
     */
    private $siteName;

    /**
     * @param string $siteName
     * 站点名称
     * Example Value: 
     */
    public function setSiteName($siteName)
    {
        $this->siteName             = $siteName;
        $this->apiParas["siteName"]  = $siteName;
    }

    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * @param string $addedService
     * 增值服务信息
     * Required: false
     * Example Value: 
     */
    private $addedService;

    /**
     * @param string $addedService
     * 增值服务信息
     * Example Value: 
     */
    public function setAddedService($addedService)
    {
        $this->addedService             = $addedService;
        $this->apiParas["addedService"]  = $addedService;
    }

    public function getAddedService()
    {
        return $this->addedService;
    }

}