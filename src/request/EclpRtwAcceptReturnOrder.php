<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 物流云下发半退退货入库单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1803&apiName=jingdong.eclp.rtw.acceptReturnOrder
 * Class EclpRtwAcceptReturnOrder
 * @package Jd\request
 */
class EclpRtwAcceptReturnOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.rtw.acceptReturnOrder";
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
     * @param string $deliveryNo
     * 发货单号
     * Required: false
     * Example Value: 
     */
    private $deliveryNo;

    /**
     * @param string $deliveryNo
     * 发货单号
     * Example Value: 
     */
    public function setDeliveryNo($deliveryNo)
    {
        $this->deliveryNo             = $deliveryNo;
        $this->apiParas["deliveryNo"]  = $deliveryNo;
    }

    public function getDeliveryNo()
    {
        return $this->deliveryNo;
    }

    /**
     * @param string $receiptNo
     * 入库单号
     * Required: true
     * Example Value: 
     */
    private $receiptNo;

    /**
     * @param string $receiptNo
     * 入库单号
     * Example Value: 
     */
    public function setReceiptNo($receiptNo)
    {
        $this->receiptNo             = $receiptNo;
        $this->apiParas["receiptNo"]  = $receiptNo;
    }

    public function getReceiptNo()
    {
        return $this->receiptNo;
    }

    /**
     * @param string $packageCodes
     * 包裹号
     * Required: false
     * Example Value: 
     */
    private $packageCodes;

    /**
     * @param string $packageCodes
     * 包裹号
     * Example Value: 
     */
    public function setPackageCodes($packageCodes)
    {
        $this->packageCodes             = $packageCodes;
        $this->apiParas["packageCodes"]  = $packageCodes;
    }

    public function getPackageCodes()
    {
        return $this->packageCodes;
    }

    /**
     * @param string $sourceNo
     * 原订单号
     * Required: true
     * Example Value: 
     */
    private $sourceNo;

    /**
     * @param string $sourceNo
     * 原订单号
     * Example Value: 
     */
    public function setSourceNo($sourceNo)
    {
        $this->sourceNo             = $sourceNo;
        $this->apiParas["sourceNo"]  = $sourceNo;
    }

    public function getSourceNo()
    {
        return $this->sourceNo;
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
     * 单据类型
     * Required: true
     * Example Value: 
     */
    private $billType;

    /**
     * @param string $billType
     * 单据类型
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
     * @param string $warehouseNo
     * 库房编号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 库房编号
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
     * 商家编号
     * Required: false
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param string $tenantId
     * 商家编号
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
     * @param string[] $skuNo
     * 商品编码
     * Required: true
     * Example Value: 
     */
    private $skuNo;

    /**
     * @param string[] $skuNo
     * 商品编码
     * Example Value: 
     */
    public function setSkuNo($skuNo)
    {
        $this->skuNo             = $skuNo;
        $this->apiParas["skuNo"]  = $skuNo;
    }

    public function getSkuNo()
    {
        return $this->skuNo;
    }

    /**
     * @param string[] $skuName
     * 商品名称
     * Required: true
     * Example Value: 
     */
    private $skuName;

    /**
     * @param string[] $skuName
     * 商品名称
     * Example Value: 
     */
    public function setSkuName($skuName)
    {
        $this->skuName             = $skuName;
        $this->apiParas["skuName"]  = $skuName;
    }

    public function getSkuName()
    {
        return $this->skuName;
    }

    /**
     * @param int[] $expectedQty
     * 采购数量
     * Required: true
     * Example Value: 
     */
    private $expectedQty;

    /**
     * @param int[] $expectedQty
     * 采购数量
     * Example Value: 
     */
    public function setExpectedQty($expectedQty)
    {
        $this->expectedQty             = $expectedQty;
        $this->apiParas["expectedQty"]  = $expectedQty;
    }

    public function getExpectedQty()
    {
        return $this->expectedQty;
    }

    /**
     * @param string[] $isvLotattrs
     * 批属性(物流云专用)   批属性串格式定义：支持批次属性串的交互，按照一定格式组建属性串，并按此格式解析 格式为：“属性编码1=值1；属性编码2=值2”属性编码为ISV属性编码，属性间用英文分号分隔（;），末尾属性不需要英文分号分隔。
     * Required: false
     * Example Value: colour=红色;serialno=1;size=2;madedate=2017-06-13;expiredate=2018-06-13
     */
    private $isvLotattrs;

    /**
     * @param string[] $isvLotattrs
     * 批属性(物流云专用)   批属性串格式定义：支持批次属性串的交互，按照一定格式组建属性串，并按此格式解析 格式为：“属性编码1=值1；属性编码2=值2”属性编码为ISV属性编码，属性间用英文分号分隔（;），末尾属性不需要英文分号分隔。
     * Example Value: colour=红色;serialno=1;size=2;madedate=2017-06-13;expiredate=2018-06-13
     */
    public function setIsvLotattrs($isvLotattrs)
    {
        $this->isvLotattrs             = $isvLotattrs;
        $this->apiParas["isvLotattrs"]  = $isvLotattrs;
    }

    public function getIsvLotattrs()
    {
        return $this->isvLotattrs;
    }

    /**
     * @param string[] $checkLotattrs
     * 是否验证验收采集   ，枚举值(Y ,N)  为“Y”则验证验收采集的批次属性与采购单中下传一致，为“N”或为空则不验证； 注意：如果采购单中未下传批次属性串，则即时为“Y”也不验证； 如果checkLotattrs=Y接单验证： 1、 如果为批次属性商品，如果下传批次属性则所有该SKU的明细都应传批次属性串或都不传批次属性串； 2、 如果为批次属性商品，该SKU明细行都下传了批次属性串，则每行明细都应该包含相同的属性；
     * Required: false
     * Example Value: 
     */
    private $checkLotattrs;

    /**
     * @param string[] $checkLotattrs
     * 是否验证验收采集   ，枚举值(Y ,N)  为“Y”则验证验收采集的批次属性与采购单中下传一致，为“N”或为空则不验证； 注意：如果采购单中未下传批次属性串，则即时为“Y”也不验证； 如果checkLotattrs=Y接单验证： 1、 如果为批次属性商品，如果下传批次属性则所有该SKU的明细都应传批次属性串或都不传批次属性串； 2、 如果为批次属性商品，该SKU明细行都下传了批次属性串，则每行明细都应该包含相同的属性；
     * Example Value: 
     */
    public function setCheckLotattrs($checkLotattrs)
    {
        $this->checkLotattrs             = $checkLotattrs;
        $this->apiParas["checkLotattrs"]  = $checkLotattrs;
    }

    public function getCheckLotattrs()
    {
        return $this->checkLotattrs;
    }

}