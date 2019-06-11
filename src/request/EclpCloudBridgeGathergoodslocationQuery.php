<?php

namespace JD\request;

/**
 * 集货位信息查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2027&apiName=jingdong.eclp.cloud.bridge.gathergoodslocation.query
 * Class EclpCloudBridgeGathergoodslocationQuery
 * @package Jd\request
 */
class EclpCloudBridgeGathergoodslocationQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.cloud.bridge.gathergoodslocation.query";
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
     * @param String $orderNo
     * 订单号
     * Required: false
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param String $orderNo
     * 订单号
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
     * @param String $waybillNo
     * 运单号
     * Required: false
     * Example Value: 
     */
    private $waybillNo;

    /**
     * @param String $waybillNo
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
     * @param String $carNumber
     * 车次号
     * Required: false
     * Example Value: 
     */
    private $carNumber;

    /**
     * @param String $carNumber
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
     * @param String $orderStatus
     * 订单状态
     * Required: true
     * Example Value: 
     */
    private $orderStatus;

    /**
     * @param String $orderStatus
     * 订单状态
     * Example Value: 
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus             = $orderStatus;
        $this->apiParas["orderStatus"]  = $orderStatus;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param String $startTime
     * 开始时间
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param String $startTime
     * 开始时间
     * Example Value: 
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param String $endTime
     * 结束时间
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param String $endTime
     * 结束时间
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param String $warehouseNo
     * 仓库ID
     * Required: false
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
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
     * @param String $ownerNo
     * 货主ID
     * Required: false
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param String $ownerNo
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
     * @param String $driverPhone
     * 司机电话
     * Required: false
     * Example Value: 
     */
    private $driverPhone;

    /**
     * @param String $driverPhone
     * 司机电话
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
     * @param String $driverName
     * 司机姓名
     * Required: false
     * Example Value: 
     */
    private $driverName;

    /**
     * @param String $driverName
     * 司机姓名
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
     * @param Number $currentPage
     * 当前页
     * Required: true
     * Example Value: 
     */
    private $currentPage;

    /**
     * @param Number $currentPage
     * 当前页
     * Example Value: 
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["currentPage"]  = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param Number $pageSize
     * 每页记录数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页记录数
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}