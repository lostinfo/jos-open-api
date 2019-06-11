<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询订单详情
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3077&apiName=jingdong.b2b.gxpt.purchaseOrderErpService.findErpOrder
 * Class B2bGxptPurchaseOrderErpServiceFindErpOrder
 * @package Jd\request
 */
class B2bGxptPurchaseOrderErpServiceFindErpOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.gxpt.purchaseOrderErpService.findErpOrder";
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
     * @param int $venderId
     * 供应商id
     * Required: false
     * Example Value: 
     */
    private $venderId;

    /**
     * @param int $venderId
     * 供应商id
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    /**
     * @param int $purchaseOrderId
     * 采购单id
     * Required: false
     * Example Value: 
     */
    private $purchaseOrderId;

    /**
     * @param int $purchaseOrderId
     * 采购单id
     * Example Value: 
     */
    public function setPurchaseOrderId($purchaseOrderId)
    {
        $this->purchaseOrderId             = $purchaseOrderId;
        $this->apiParas["purchaseOrderId"]  = $purchaseOrderId;
    }

    public function getPurchaseOrderId()
    {
        return $this->purchaseOrderId;
    }

    /**
     * @param int $jdOrderId
     * 京东订单id
     * Required: false
     * Example Value: 
     */
    private $jdOrderId;

    /**
     * @param int $jdOrderId
     * 京东订单id
     * Example Value: 
     */
    public function setJdOrderId($jdOrderId)
    {
        $this->jdOrderId             = $jdOrderId;
        $this->apiParas["jdOrderId"]  = $jdOrderId;
    }

    public function getJdOrderId()
    {
        return $this->jdOrderId;
    }

}