<?php

namespca Lostinfo\JosOpenApi;

/**
 * 厂商直送发货
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=476&apiName=jingdong.dropship.dps.delivery
 * Class DropshipDpsDelivery
 * @package Jd\request
 */
class DropshipDpsDelivery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.delivery";
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
     * @param int $customOrderId
     * 客单编号
     * Required: true
     * Example Value: 170439197
     */
    private $customOrderId;

    /**
     * @param int $customOrderId
     * 客单编号
     * Example Value: 170439197
     */
    public function setCustomOrderId($customOrderId)
    {
        $this->customOrderId             = $customOrderId;
        $this->apiParas["customOrderId"]  = $customOrderId;
    }

    public function getCustomOrderId()
    {
        return $this->customOrderId;
    }

    /**
     * @param int $carrierId
     * 承运商Id
     * Required: true
     * Example Value: 2100
     */
    private $carrierId;

    /**
     * @param int $carrierId
     * 承运商Id
     * Example Value: 2100
     */
    public function setCarrierId($carrierId)
    {
        $this->carrierId             = $carrierId;
        $this->apiParas["carrierId"]  = $carrierId;
    }

    public function getCarrierId()
    {
        return $this->carrierId;
    }

    /**
     * @param string $carrierBusinessName
     * 承运商名称
     * Required: true
     * Example Value: 国通快递
     */
    private $carrierBusinessName;

    /**
     * @param string $carrierBusinessName
     * 承运商名称
     * Example Value: 国通快递
     */
    public function setCarrierBusinessName($carrierBusinessName)
    {
        $this->carrierBusinessName             = $carrierBusinessName;
        $this->apiParas["carrierBusinessName"]  = $carrierBusinessName;
    }

    public function getCarrierBusinessName()
    {
        return $this->carrierBusinessName;
    }

    /**
     * @param string $shipNo
     * 运单号
     * Required: true
     * Example Value: 2304891274
     */
    private $shipNo;

    /**
     * @param string $shipNo
     * 运单号
     * Example Value: 2304891274
     */
    public function setShipNo($shipNo)
    {
        $this->shipNo             = $shipNo;
        $this->apiParas["shipNo"]  = $shipNo;
    }

    public function getShipNo()
    {
        return $this->shipNo;
    }

    /**
     * @param string $estimateDate
     * 预计到货时间
     * Required: true
     * Example Value: 2013-09-29
     */
    private $estimateDate;

    /**
     * @param string $estimateDate
     * 预计到货时间
     * Example Value: 2013-09-29
     */
    public function setEstimateDate($estimateDate)
    {
        $this->estimateDate             = $estimateDate;
        $this->apiParas["estimateDate"]  = $estimateDate;
    }

    public function getEstimateDate()
    {
        return $this->estimateDate;
    }

    /**
     * @param string $carrierPhone
     * 厂家自送联系电话
     * Required: false
     * Example Value: 13811111111
     */
    private $carrierPhone;

    /**
     * @param string $carrierPhone
     * 厂家自送联系电话
     * Example Value: 13811111111
     */
    public function setCarrierPhone($carrierPhone)
    {
        $this->carrierPhone             = $carrierPhone;
        $this->apiParas["carrierPhone"]  = $carrierPhone;
    }

    public function getCarrierPhone()
    {
        return $this->carrierPhone;
    }

}