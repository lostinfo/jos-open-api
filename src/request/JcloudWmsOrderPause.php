<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 出库单截停/取消截停下传
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1625&apiName=jingdong.jcloud.wms.order.pause
 * Class JcloudWmsOrderPause
 * @package Jd\request
 */
class JcloudWmsOrderPause
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.order.pause";
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
     * 出库单号
     * Required: true
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 出库单号
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
     * @param string $warehouseNo
     * 库房号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 库房号
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
     * @param string $tenantId
     * 租户ID
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param string $tenantId
     * 租户ID
     * Example Value: 
     */
    public function setTenantId($tenantId)
    {
        $this->tenantId             = $tenantId;
        $this->apiParas["tenantId"]  = $tenantId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    /**
     * @param string $ownerNo
     * 货主编号
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param string $ownerNo
     * 货主编号
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
     * @param string $billType
     * 订单类型
     * Required: false
     * Example Value: 
     */
    private $billType;

    /**
     * @param string $billType
     * 订单类型
     * Example Value: 
     */
    public function setBillType($billType)
    {
        $this->billType             = $billType;
        $this->apiParas["billType"]  = $billType;
    }

    public function getBillType()
    {
        return $this->billType;
    }

    /**
     * @param string $operator
     * 操作人
     * Required: false
     * Example Value: 
     */
    private $operator;

    /**
     * @param string $operator
     * 操作人
     * Example Value: 
     */
    public function setOperator($operator)
    {
        $this->operator             = $operator;
        $this->apiParas["operator"]  = $operator;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param string $operateTime
     * 操作时间（格式：2016-12-09 10：17:10）
     * Required: true
     * Example Value: 
     */
    private $operateTime;

    /**
     * @param string $operateTime
     * 操作时间（格式：2016-12-09 10：17:10）
     * Example Value: 
     */
    public function setOperateTime($operateTime)
    {
        $this->operateTime             = $operateTime;
        $this->apiParas["operateTime"]  = $operateTime;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

    /**
     * @param int $IsInterception
     * 截停标识(1:截停；2：取消截停)
     * Required: true
     * Example Value: 
     */
    private $IsInterception;

    /**
     * @param int $IsInterception
     * 截停标识(1:截停；2：取消截停)
     * Example Value: 
     */
    public function setIsInterception($IsInterception)
    {
        $this->IsInterception             = $IsInterception;
        $this->apiParas["IsInterception"]  = $IsInterception;
    }

    public function getIsInterception()
    {
        return $this->IsInterception;
    }

}