<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 发送发货通知单
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1715&apiName=jingdong.edi.sn.send
 * Class EdiSnSend
 * @package Jd\request
 */
class EdiSnSend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.sn.send";
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
     * @param string $purchaseOrderCode
     * 采购单号(总目)
     * Required: false
     * Example Value: 
     */
    private $purchaseOrderCode;

    /**
     * @param string $purchaseOrderCode
     * 采购单号(总目)
     * Example Value: 
     */
    public function setPurchaseOrderCode($purchaseOrderCode)
    {
        $this->purchaseOrderCode             = $purchaseOrderCode;
        $this->apiParas["purchaseOrderCode"]  = $purchaseOrderCode;
    }

    public function getPurchaseOrderCode()
    {
        return $this->purchaseOrderCode;
    }

    /**
     * @param string $orderCode
     * 发货单号(总目)
     * Required: false
     * Example Value: 
     */
    private $orderCode;

    /**
     * @param string $orderCode
     * 发货单号(总目)
     * Example Value: 
     */
    public function setOrderCode($orderCode)
    {
        $this->orderCode             = $orderCode;
        $this->apiParas["orderCode"]  = $orderCode;
    }

    public function getOrderCode()
    {
        return $this->orderCode;
    }

    /**
     * @param string $vendorCode
     * 供货商ID(总目)
     * Required: false
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
     * 供货商ID(总目)
     * Example Value: 
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode             = $vendorCode;
        $this->apiParas["vendorCode"]  = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * @param string $vendorName
     * 供货商名称(总目)
     * Required: false
     * Example Value: 
     */
    private $vendorName;

    /**
     * @param string $vendorName
     * 供货商名称(总目)
     * Example Value: 
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName             = $vendorName;
        $this->apiParas["vendorName"]  = $vendorName;
    }

    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * @param int $recordCount
     * 发货单细目数量(总目)
     * Required: false
     * Example Value: 
     */
    private $recordCount;

    /**
     * @param int $recordCount
     * 发货单细目数量(总目)
     * Example Value: 
     */
    public function setRecordCount($recordCount)
    {
        $this->recordCount             = $recordCount;
        $this->apiParas["recordCount"]  = $recordCount;
    }

    public function getRecordCount()
    {
        return $this->recordCount;
    }

    /**
     * @param int $categoryNumber
     * 合计品种(总目)
     * Required: false
     * Example Value: 
     */
    private $categoryNumber;

    /**
     * @param int $categoryNumber
     * 合计品种(总目)
     * Example Value: 
     */
    public function setCategoryNumber($categoryNumber)
    {
        $this->categoryNumber             = $categoryNumber;
        $this->apiParas["categoryNumber"]  = $categoryNumber;
    }

    public function getCategoryNumber()
    {
        return $this->categoryNumber;
    }

    /**
     * @param int $totalNubmer
     * 合计数量(总目)
     * Required: false
     * Example Value: 
     */
    private $totalNubmer;

    /**
     * @param int $totalNubmer
     * 合计数量(总目)
     * Example Value: 
     */
    public function setTotalNubmer($totalNubmer)
    {
        $this->totalNubmer             = $totalNubmer;
        $this->apiParas["totalNubmer"]  = $totalNubmer;
    }

    public function getTotalNubmer()
    {
        return $this->totalNubmer;
    }

    /**
     * @param int $totalAmount
     * 总金额(总目)
     * Required: false
     * Example Value: 
     */
    private $totalAmount;

    /**
     * @param int $totalAmount
     * 总金额(总目)
     * Example Value: 
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount             = $totalAmount;
        $this->apiParas["totalAmount"]  = $totalAmount;
    }

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param int $actualTotalAmount
     * 总实际金额(总目)
     * Required: false
     * Example Value: 
     */
    private $actualTotalAmount;

    /**
     * @param int $actualTotalAmount
     * 总实际金额(总目)
     * Example Value: 
     */
    public function setActualTotalAmount($actualTotalAmount)
    {
        $this->actualTotalAmount             = $actualTotalAmount;
        $this->apiParas["actualTotalAmount"]  = $actualTotalAmount;
    }

    public function getActualTotalAmount()
    {
        return $this->actualTotalAmount;
    }

    /**
     * @param string $dispatchDate
     * 发货日期(总目)
     * Required: false
     * Example Value: 
     */
    private $dispatchDate;

    /**
     * @param string $dispatchDate
     * 发货日期(总目)
     * Example Value: 
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->dispatchDate             = $dispatchDate;
        $this->apiParas["dispatchDate"]  = $dispatchDate;
    }

    public function getDispatchDate()
    {
        return $this->dispatchDate;
    }

    /**
     * @param string $receivingAddress
     * 收货地址及单位(总目)
     * Required: false
     * Example Value: 
     */
    private $receivingAddress;

    /**
     * @param string $receivingAddress
     * 收货地址及单位(总目)
     * Example Value: 
     */
    public function setReceivingAddress($receivingAddress)
    {
        $this->receivingAddress             = $receivingAddress;
        $this->apiParas["receivingAddress"]  = $receivingAddress;
    }

    public function getReceivingAddress()
    {
        return $this->receivingAddress;
    }

    /**
     * @param string $transportationMode
     * 运输方式(总目)
     * Required: false
     * Example Value: 
     */
    private $transportationMode;

    /**
     * @param string $transportationMode
     * 运输方式(总目)
     * Example Value: 
     */
    public function setTransportationMode($transportationMode)
    {
        $this->transportationMode             = $transportationMode;
        $this->apiParas["transportationMode"]  = $transportationMode;
    }

    public function getTransportationMode()
    {
        return $this->transportationMode;
    }

    /**
     * @param string $station
     * 到站 货物最终到达的城市或省(总目)
     * Required: false
     * Example Value: 
     */
    private $station;

    /**
     * @param string $station
     * 到站 货物最终到达的城市或省(总目)
     * Example Value: 
     */
    public function setStation($station)
    {
        $this->station             = $station;
        $this->apiParas["station"]  = $station;
    }

    public function getStation()
    {
        return $this->station;
    }

    /**
     * @param string $purchaseContact
     * 采购联系人(总目)
     * Required: false
     * Example Value: 
     */
    private $purchaseContact;

    /**
     * @param string $purchaseContact
     * 采购联系人(总目)
     * Example Value: 
     */
    public function setPurchaseContact($purchaseContact)
    {
        $this->purchaseContact             = $purchaseContact;
        $this->apiParas["purchaseContact"]  = $purchaseContact;
    }

    public function getPurchaseContact()
    {
        return $this->purchaseContact;
    }

    /**
     * @param string $shipmentNumber
     * 运单号(总目)
     * Required: false
     * Example Value: 
     */
    private $shipmentNumber;

    /**
     * @param string $shipmentNumber
     * 运单号(总目)
     * Example Value: 
     */
    public function setShipmentNumber($shipmentNumber)
    {
        $this->shipmentNumber             = $shipmentNumber;
        $this->apiParas["shipmentNumber"]  = $shipmentNumber;
    }

    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }

    /**
     * @param int $shipmentPackageNumber
     * 发货单中的件数(总目)
     * Required: false
     * Example Value: 
     */
    private $shipmentPackageNumber;

    /**
     * @param int $shipmentPackageNumber
     * 发货单中的件数(总目)
     * Example Value: 
     */
    public function setShipmentPackageNumber($shipmentPackageNumber)
    {
        $this->shipmentPackageNumber             = $shipmentPackageNumber;
        $this->apiParas["shipmentPackageNumber"]  = $shipmentPackageNumber;
    }

    public function getShipmentPackageNumber()
    {
        return $this->shipmentPackageNumber;
    }

    /**
     * @param string $paymentMode
     * 付款方式(总目)
     * Required: false
     * Example Value: 
     */
    private $paymentMode;

    /**
     * @param string $paymentMode
     * 付款方式(总目)
     * Example Value: 
     */
    public function setPaymentMode($paymentMode)
    {
        $this->paymentMode             = $paymentMode;
        $this->apiParas["paymentMode"]  = $paymentMode;
    }

    public function getPaymentMode()
    {
        return $this->paymentMode;
    }

    /**
     * @param string $ransportationCostsPerson
     * 运输费用支付方(总目)
     * Required: false
     * Example Value: 
     */
    private $ransportationCostsPerson;

    /**
     * @param string $ransportationCostsPerson
     * 运输费用支付方(总目)
     * Example Value: 
     */
    public function setRansportationCostsPerson($ransportationCostsPerson)
    {
        $this->ransportationCostsPerson             = $ransportationCostsPerson;
        $this->apiParas["ransportationCostsPerson"]  = $ransportationCostsPerson;
    }

    public function getRansportationCostsPerson()
    {
        return $this->ransportationCostsPerson;
    }

    /**
     * @param string $returnPeriod
     * 退货期限(总目)
     * Required: false
     * Example Value: 
     */
    private $returnPeriod;

    /**
     * @param string $returnPeriod
     * 退货期限(总目)
     * Example Value: 
     */
    public function setReturnPeriod($returnPeriod)
    {
        $this->returnPeriod             = $returnPeriod;
        $this->apiParas["returnPeriod"]  = $returnPeriod;
    }

    public function getReturnPeriod()
    {
        return $this->returnPeriod;
    }

    /**
     * @param string $comments
     * 备注(总目)
     * Required: false
     * Example Value: 
     */
    private $comments;

    /**
     * @param string $comments
     * 备注(总目)
     * Example Value: 
     */
    public function setComments($comments)
    {
        $this->comments             = $comments;
        $this->apiParas["comments"]  = $comments;
    }

    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param int[] $currentRecordCount
     * 当前记录数(细目)
     * Required: false
     * Example Value: 
     */
    private $currentRecordCount;

    /**
     * @param int[] $currentRecordCount
     * 当前记录数(细目)
     * Example Value: 
     */
    public function setCurrentRecordCount($currentRecordCount)
    {
        $this->currentRecordCount             = $currentRecordCount;
        $this->apiParas["currentRecordCount"]  = $currentRecordCount;
    }

    public function getCurrentRecordCount()
    {
        return $this->currentRecordCount;
    }

    /**
     * @param string[] $vendorSku
     * 供货商商品ID(细目)
     * Required: false
     * Example Value: 
     */
    private $vendorSku;

    /**
     * @param string[] $vendorSku
     * 供货商商品ID(细目)
     * Example Value: 
     */
    public function setVendorSku($vendorSku)
    {
        $this->vendorSku             = $vendorSku;
        $this->apiParas["vendorSku"]  = $vendorSku;
    }

    public function getVendorSku()
    {
        return $this->vendorSku;
    }

    /**
     * @param string[] $buyerProductId
     * 采购商商品ID(细目)
     * Required: false
     * Example Value: 
     */
    private $buyerProductId;

    /**
     * @param string[] $buyerProductId
     * 采购商商品ID(细目)
     * Example Value: 
     */
    public function setBuyerProductId($buyerProductId)
    {
        $this->buyerProductId             = $buyerProductId;
        $this->apiParas["buyerProductId"]  = $buyerProductId;
    }

    public function getBuyerProductId()
    {
        return $this->buyerProductId;
    }

    /**
     * @param string[] $productCode
     * 商品代码(细目)
     * Required: false
     * Example Value: 
     */
    private $productCode;

    /**
     * @param string[] $productCode
     * 商品代码(细目)
     * Example Value: 
     */
    public function setProductCode($productCode)
    {
        $this->productCode             = $productCode;
        $this->apiParas["productCode"]  = $productCode;
    }

    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param string[] $productName
     * 商品名称(细目)
     * Required: false
     * Example Value: 
     */
    private $productName;

    /**
     * @param string[] $productName
     * 商品名称(细目)
     * Example Value: 
     */
    public function setProductName($productName)
    {
        $this->productName             = $productName;
        $this->apiParas["productName"]  = $productName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param int[] $quantity
     * 数量(细目)
     * Required: false
     * Example Value: 
     */
    private $quantity;

    /**
     * @param int[] $quantity
     * 数量(细目)
     * Example Value: 
     */
    public function setQuantity($quantity)
    {
        $this->quantity             = $quantity;
        $this->apiParas["quantity"]  = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int[] $salePrice
     * 销售单价(进价)(细目)
     * Required: false
     * Example Value: 
     */
    private $salePrice;

    /**
     * @param int[] $salePrice
     * 销售单价(进价)(细目)
     * Example Value: 
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice             = $salePrice;
        $this->apiParas["salePrice"]  = $salePrice;
    }

    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * @param int[] $listPrice
     * 市场价(定价)(细目)
     * Required: false
     * Example Value: 
     */
    private $listPrice;

    /**
     * @param int[] $listPrice
     * 市场价(定价)(细目)
     * Example Value: 
     */
    public function setListPrice($listPrice)
    {
        $this->listPrice             = $listPrice;
        $this->apiParas["listPrice"]  = $listPrice;
    }

    public function getListPrice()
    {
        return $this->listPrice;
    }

    /**
     * @param int[] $discountRate
     * 折扣率(细目)
     * Required: false
     * Example Value: 
     */
    private $discountRate;

    /**
     * @param int[] $discountRate
     * 折扣率(细目)
     * Example Value: 
     */
    public function setDiscountRate($discountRate)
    {
        $this->discountRate             = $discountRate;
        $this->apiParas["discountRate"]  = $discountRate;
    }

    public function getDiscountRate()
    {
        return $this->discountRate;
    }

    /**
     * @param string[] $backOrderProcessing
     * 缺货状态时的处理方式(细目)
     * Required: false
     * Example Value: 
     */
    private $backOrderProcessing;

    /**
     * @param string[] $backOrderProcessing
     * 缺货状态时的处理方式(细目)
     * Example Value: 
     */
    public function setBackOrderProcessing($backOrderProcessing)
    {
        $this->backOrderProcessing             = $backOrderProcessing;
        $this->apiParas["backOrderProcessing"]  = $backOrderProcessing;
    }

    public function getBackOrderProcessing()
    {
        return $this->backOrderProcessing;
    }

    /**
     * @param string[] $packageNumber
     * 包号(细目)
     * Required: false
     * Example Value: 
     */
    private $packageNumber;

    /**
     * @param string[] $packageNumber
     * 包号(细目)
     * Example Value: 
     */
    public function setPackageNumber($packageNumber)
    {
        $this->packageNumber             = $packageNumber;
        $this->apiParas["packageNumber"]  = $packageNumber;
    }

    public function getPackageNumber()
    {
        return $this->packageNumber;
    }

    /**
     * @param string[] $comments
     * 备注(细目)
     * Required: false
     * Example Value: 
     */
    private $comments;

    /**
     * @param string[] $comments
     * 备注(细目)
     * Example Value: 
     */
    public function setComments($comments)
    {
        $this->comments             = $comments;
        $this->apiParas["lineComments"]  = $comments;
    }

    public function getComments()
    {
        return $this->comments;
    }

}