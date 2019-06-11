<?php

namespca Lostinfo\JosOpenApi;

/**
 * 下传排线信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2026&apiName=jingdong.eclp.cloud.bridge.driver.update
 * Class EclpCloudBridgeDriverUpdate
 * @package Jd\request
 */
class EclpCloudBridgeDriverUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.cloud.bridge.driver.update";
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
     * @param string $orderNo
     * 单据编号
     * Required: true
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 单据编号
     * Example Value: 
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["orderNo"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param string $waybillNo
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $waybillNo;

    /**
     * @param string $waybillNo
     * 运单号
     * Example Value: 
     */
    public function setWaybillNo($waybillNo)
    {
        $this->waybillNo             = $waybillNo;
        $this->apiParas["waybillNo"]  = $waybillNo;
    }

    public function getWaybillNo()
    {
        return $this->waybillNo;
    }

    /**
     * @param string $carNumber
     * 车次号
     * Required: true
     * Example Value: 
     */
    private $carNumber;

    /**
     * @param string $carNumber
     * 车次号
     * Example Value: 
     */
    public function setCarNumber($carNumber)
    {
        $this->carNumber             = $carNumber;
        $this->apiParas["carNumber"]  = $carNumber;
    }

    public function getCarNumber()
    {
        return $this->carNumber;
    }

    /**
     * @param string $getTime
     * 排线确认时间
     * Required: true
     * Example Value: 
     */
    private $getTime;

    /**
     * @param string $getTime
     * 排线确认时间
     * Example Value: 
     */
    public function setGetTime($getTime)
    {
        $this->getTime             = $getTime;
        $this->apiParas["getTime"]  = $getTime;
    }

    public function getGetTime()
    {
        return $this->getTime;
    }

    /**
     * @param string $warehouseNo
     * 仓库ID
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 仓库ID
     * Example Value: 
     */
    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo             = $warehouseNo;
        $this->apiParas["warehouseNo"]  = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    /**
     * @param string $ownerNo
     * 货主ID
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param string $ownerNo
     * 货主ID
     * Example Value: 
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["ownerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    /**
     * @param string $driverCarNo
     * 司机车牌号
     * Required: false
     * Example Value: 
     */
    private $driverCarNo;

    /**
     * @param string $driverCarNo
     * 司机车牌号
     * Example Value: 
     */
    public function setDriverCarNo($driverCarNo)
    {
        $this->driverCarNo             = $driverCarNo;
        $this->apiParas["driverCarNo"]  = $driverCarNo;
    }

    public function getDriverCarNo()
    {
        return $this->driverCarNo;
    }

    /**
     * @param string $driverPhone
     * 司机手机号
     * Required: true
     * Example Value: 
     */
    private $driverPhone;

    /**
     * @param string $driverPhone
     * 司机手机号
     * Example Value: 
     */
    public function setDriverPhone($driverPhone)
    {
        $this->driverPhone             = $driverPhone;
        $this->apiParas["driverPhone"]  = $driverPhone;
    }

    public function getDriverPhone()
    {
        return $this->driverPhone;
    }

    /**
     * @param string $driverName
     * 司机名称
     * Required: false
     * Example Value: 
     */
    private $driverName;

    /**
     * @param string $driverName
     * 司机名称
     * Example Value: 
     */
    public function setDriverName($driverName)
    {
        $this->driverName             = $driverName;
        $this->apiParas["driverName"]  = $driverName;
    }

    public function getDriverName()
    {
        return $this->driverName;
    }

    /**
     * @param int $deliverySeqNo
     * 配送顺序
     * Required: false
     * Example Value: 
     */
    private $deliverySeqNo;

    /**
     * @param int $deliverySeqNo
     * 配送顺序
     * Example Value: 
     */
    public function setDeliverySeqNo($deliverySeqNo)
    {
        $this->deliverySeqNo             = $deliverySeqNo;
        $this->apiParas["deliverySeqNo"]  = $deliverySeqNo;
    }

    public function getDeliverySeqNo()
    {
        return $this->deliverySeqNo;
    }

}