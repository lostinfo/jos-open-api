<?php

namespace JD\request;

/**
 * 供应商返回密钥接口
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1159&apiName=jingdong.virtualkey.nolocalstock.obtain
 * Class VirtualkeyNolocalstockObtain
 * @package Jd\request
 */
class VirtualkeyNolocalstockObtain
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.virtualkey.nolocalstock.obtain";
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
     * @param String $resultCode
     * 返回码
     * Required: true
     * Example Value: 
     */
    private $resultCode;

    /**
     * @param String $resultCode
     * 返回码
     * Example Value: 
     */
    public function setResultCode($resultCode)
    {
        $this->resultCode             = $resultCode;
        $this->apiParas["resultCode"]  = $resultCode;
    }

    public function getResultCode()
    {
        return $this->resultCode;
    }

    /**
     * @param String $resultMsg
     * 未返回码对应的消息
     * Required: true
     * Example Value: 
     */
    private $resultMsg;

    /**
     * @param String $resultMsg
     * 未返回码对应的消息
     * Example Value: 
     */
    public function setResultMsg($resultMsg)
    {
        $this->resultMsg             = $resultMsg;
        $this->apiParas["resultMsg"]  = $resultMsg;
    }

    public function getResultMsg()
    {
        return $this->resultMsg;
    }

    /**
     * @param Date $returnTime
     * 返回时间
     * Required: true
     * Example Value: 
     */
    private $returnTime;

    /**
     * @param Date $returnTime
     * 返回时间
     * Example Value: 
     */
    public function setReturnTime($returnTime)
    {
        $this->returnTime             = $returnTime;
        $this->apiParas["returnTime"]  = $returnTime;
    }

    public function getReturnTime()
    {
        return $this->returnTime;
    }

    /**
     * @param String $hostTxId
     * 返回信息信令 每条通信信息的唯一标识
     * Required: true
     * Example Value: 
     */
    private $hostTxId;

    /**
     * @param String $hostTxId
     * 返回信息信令 每条通信信息的唯一标识
     * Example Value: 
     */
    public function setHostTxId($hostTxId)
    {
        $this->hostTxId             = $hostTxId;
        $this->apiParas["hostTxId"]  = $hostTxId;
    }

    public function getHostTxId()
    {
        return $this->hostTxId;
    }

    /**
     * @param Number $id
     * 订单记录id
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number $id
     * 订单记录id
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Number $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param Number $orderId
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
     * @param String $facilitatorCode
     * 供应商简码
     * Required: true
     * Example Value: 
     */
    private $facilitatorCode;

    /**
     * @param String $facilitatorCode
     * 供应商简码
     * Example Value: 
     */
    public function setFacilitatorCode($facilitatorCode)
    {
        $this->facilitatorCode             = $facilitatorCode;
        $this->apiParas["facilitatorCode"]  = $facilitatorCode;
    }

    public function getFacilitatorCode()
    {
        return $this->facilitatorCode;
    }

    /**
     * @param Number[] $uniqueId
     * 数据唯一记录 (回传参数)
     * Required: true
     * Example Value: 
     */
    private $uniqueId;

    /**
     * @param Number[] $uniqueId
     * 数据唯一记录 (回传参数)
     * Example Value: 
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId             = $uniqueId;
        $this->apiParas["uniqueId"]  = $uniqueId;
    }

    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param Number[] $platformId
     * jd延保服务商品id
     * Required: true
     * Example Value: 
     */
    private $platformId;

    /**
     * @param Number[] $platformId
     * jd延保服务商品id
     * Example Value: 
     */
    public function setPlatformId($platformId)
    {
        $this->platformId             = $platformId;
        $this->apiParas["platformId"]  = $platformId;
    }

    public function getPlatformId()
    {
        return $this->platformId;
    }

    /**
     * @param String[] $facilitatorSkuId
     * 供应商对应的sku商品id
     * Required: true
     * Example Value: 
     */
    private $facilitatorSkuId;

    /**
     * @param String[] $facilitatorSkuId
     * 供应商对应的sku商品id
     * Example Value: 
     */
    public function setFacilitatorSkuId($facilitatorSkuId)
    {
        $this->facilitatorSkuId             = $facilitatorSkuId;
        $this->apiParas["facilitatorSkuId"]  = $facilitatorSkuId;
    }

    public function getFacilitatorSkuId()
    {
        return $this->facilitatorSkuId;
    }

    /**
     * @param String[] $keySerialNum
     * 虚拟密钥-序列号(key)
     * Required: true
     * Example Value: 
     */
    private $keySerialNum;

    /**
     * @param String[] $keySerialNum
     * 虚拟密钥-序列号(key)
     * Example Value: 
     */
    public function setKeySerialNum($keySerialNum)
    {
        $this->keySerialNum             = $keySerialNum;
        $this->apiParas["keySerialNum"]  = $keySerialNum;
    }

    public function getKeySerialNum()
    {
        return $this->keySerialNum;
    }

    /**
     * @param String[] $keySerialPass
     * 虚拟密钥-密码(password)
     * Required: true
     * Example Value: 
     */
    private $keySerialPass;

    /**
     * @param String[] $keySerialPass
     * 虚拟密钥-密码(password)
     * Example Value: 
     */
    public function setKeySerialPass($keySerialPass)
    {
        $this->keySerialPass             = $keySerialPass;
        $this->apiParas["keySerialPass"]  = $keySerialPass;
    }

    public function getKeySerialPass()
    {
        return $this->keySerialPass;
    }

    /**
     * @param Date[] $expiryDate
     * 虚拟密钥过期时间
     * Required: false
     * Example Value: 
     */
    private $expiryDate;

    /**
     * @param Date[] $expiryDate
     * 虚拟密钥过期时间
     * Example Value: 
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate             = $expiryDate;
        $this->apiParas["expiryDate"]  = $expiryDate;
    }

    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param String[] $softWareDownloadUrl
     * 商品软件下载连接
     * Required: false
     * Example Value: 
     */
    private $softWareDownloadUrl;

    /**
     * @param String[] $softWareDownloadUrl
     * 商品软件下载连接
     * Example Value: 
     */
    public function setSoftWareDownloadUrl($softWareDownloadUrl)
    {
        $this->softWareDownloadUrl             = $softWareDownloadUrl;
        $this->apiParas["softWareDownloadUrl"]  = $softWareDownloadUrl;
    }

    public function getSoftWareDownloadUrl()
    {
        return $this->softWareDownloadUrl;
    }

}