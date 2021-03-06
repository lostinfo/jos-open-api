<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 拆包登记
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2117&apiName=jingdong.asc.receive.register
 * Class AscReceiveRegister
 * @package Jd\request
 */
class AscReceiveRegister
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.receive.register";
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
     * @param string $buId
     * 商家ID（最长50）
     * Required: true
     * Example Value: 
     */
    private $buId;

    /**
     * @param string $buId
     * 商家ID（最长50）
     * Example Value: 
     */
    public function setBuId($buId)
    {
        $this->buId             = $buId;
        $this->apiParas["buId"]  = $buId;
    }

    public function getBuId()
    {
        return $this->buId;
    }

    /**
     * @param string $operatePin
     * 操作人账号（最长50）
     * Required: true
     * Example Value: 
     */
    private $operatePin;

    /**
     * @param string $operatePin
     * 操作人账号（最长50）
     * Example Value: 
     */
    public function setOperatePin($operatePin)
    {
        $this->operatePin             = $operatePin;
        $this->apiParas["operatePin"]  = $operatePin;
    }

    public function getOperatePin()
    {
        return $this->operatePin;
    }

    /**
     * @param string $operateNick
     * 操作人姓名（最长50）
     * Required: true
     * Example Value: 
     */
    private $operateNick;

    /**
     * @param string $operateNick
     * 操作人姓名（最长50）
     * Example Value: 
     */
    public function setOperateNick($operateNick)
    {
        $this->operateNick             = $operateNick;
        $this->apiParas["operateNick"]  = $operateNick;
    }

    public function getOperateNick()
    {
        return $this->operateNick;
    }

    /**
     * @param int $serviceId
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $serviceId;

    /**
     * @param int $serviceId
     * 服务单号
     * Example Value: 
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId             = $serviceId;
        $this->apiParas["serviceId"]  = $serviceId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
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
     * @param string $receivePin
     * 收货人账号
     * Required: true
     * Example Value: 
     */
    private $receivePin;

    /**
     * @param string $receivePin
     * 收货人账号
     * Example Value: 
     */
    public function setReceivePin($receivePin)
    {
        $this->receivePin             = $receivePin;
        $this->apiParas["receivePin"]  = $receivePin;
    }

    public function getReceivePin()
    {
        return $this->receivePin;
    }

    /**
     * @param string $receiveName
     * 收货人姓名
     * Required: true
     * Example Value: 
     */
    private $receiveName;

    /**
     * @param string $receiveName
     * 收货人姓名
     * Example Value: 
     */
    public function setReceiveName($receiveName)
    {
        $this->receiveName             = $receiveName;
        $this->apiParas["receiveName"]  = $receiveName;
    }

    public function getReceiveName()
    {
        return $this->receiveName;
    }

    /**
     * @param int $packingState
     * 产品包装状况
     * Required: true
     * Example Value: 
     */
    private $packingState;

    /**
     * @param int $packingState
     * 产品包装状况
     * Example Value: 
     */
    public function setPackingState($packingState)
    {
        $this->packingState             = $packingState;
        $this->apiParas["packingState"]  = $packingState;
    }

    public function getPackingState()
    {
        return $this->packingState;
    }

    /**
     * @param int $qualityState
     * 主商品功能状况
     * Required: true
     * Example Value: 
     */
    private $qualityState;

    /**
     * @param int $qualityState
     * 主商品功能状况
     * Example Value: 
     */
    public function setQualityState($qualityState)
    {
        $this->qualityState             = $qualityState;
        $this->apiParas["qualityState"]  = $qualityState;
    }

    public function getQualityState()
    {
        return $this->qualityState;
    }

    /**
     * @param int $invoiceRecord
     * 发票登记状况
     * Required: true
     * Example Value: 
     */
    private $invoiceRecord;

    /**
     * @param int $invoiceRecord
     * 发票登记状况
     * Example Value: 
     */
    public function setInvoiceRecord($invoiceRecord)
    {
        $this->invoiceRecord             = $invoiceRecord;
        $this->apiParas["invoiceRecord"]  = $invoiceRecord;
    }

    public function getInvoiceRecord()
    {
        return $this->invoiceRecord;
    }

    /**
     * @param int $judgmentReason
     * 收货登记原因
     * Required: true
     * Example Value: 
     */
    private $judgmentReason;

    /**
     * @param int $judgmentReason
     * 收货登记原因
     * Example Value: 
     */
    public function setJudgmentReason($judgmentReason)
    {
        $this->judgmentReason             = $judgmentReason;
        $this->apiParas["judgmentReason"]  = $judgmentReason;
    }

    public function getJudgmentReason()
    {
        return $this->judgmentReason;
    }

    /**
     * @param int $accessoryOrGift
     * 附件/赠品
     * Required: true
     * Example Value: 
     */
    private $accessoryOrGift;

    /**
     * @param int $accessoryOrGift
     * 附件/赠品
     * Example Value: 
     */
    public function setAccessoryOrGift($accessoryOrGift)
    {
        $this->accessoryOrGift             = $accessoryOrGift;
        $this->apiParas["accessoryOrGift"]  = $accessoryOrGift;
    }

    public function getAccessoryOrGift()
    {
        return $this->accessoryOrGift;
    }

    /**
     * @param int $appearanceState
     * 主商品外观
     * Required: true
     * Example Value: 
     */
    private $appearanceState;

    /**
     * @param int $appearanceState
     * 主商品外观
     * Example Value: 
     */
    public function setAppearanceState($appearanceState)
    {
        $this->appearanceState             = $appearanceState;
        $this->apiParas["appearanceState"]  = $appearanceState;
    }

    public function getAppearanceState()
    {
        return $this->appearanceState;
    }

    /**
     * @param string $receiveRemark
     * 收货备注
     * Required: true
     * Example Value: 
     */
    private $receiveRemark;

    /**
     * @param string $receiveRemark
     * 收货备注
     * Example Value: 
     */
    public function setReceiveRemark($receiveRemark)
    {
        $this->receiveRemark             = $receiveRemark;
        $this->apiParas["receiveRemark"]  = $receiveRemark;
    }

    public function getReceiveRemark()
    {
        return $this->receiveRemark;
    }

}