<?php

namespace JD\request;

/**
 * 采购入库单下发
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=935&apiName=jingdong.eclp.po.addPoOrder
 * Class EclpPoAddPoOrder
 * @package Jd\request
 */
class EclpPoAddPoOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.po.addPoOrder";
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
     * @param String $spPoOrderNo
     * 外部采购订单号，最大长度：50
     * Required: true
     * Example Value: 2019010400001
     */
    private $spPoOrderNo;

    /**
     * @param String $spPoOrderNo
     * 外部采购订单号，最大长度：50
     * Example Value: 2019010400001
     */
    public function setSpPoOrderNo($spPoOrderNo)
    {
        $this->spPoOrderNo             = $spPoOrderNo;
        $this->apiParas["spPoOrderNo"]  = $spPoOrderNo;
    }

    public function getSpPoOrderNo()
    {
        return $this->spPoOrderNo;
    }

    /**
     * @param String $deptNo
     * 事业部编号，格式：EBU开头，最大长度：50
     * Required: true
     * Example Value: EBU0000000000124
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编号，格式：EBU开头，最大长度：50
     * Example Value: EBU0000000000124
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"]  = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    /**
     * @param String $referenceOrder
     * 手工单号，最大长度：500
     * Required: false
     * Example Value: 手工单号
     */
    private $referenceOrder;

    /**
     * @param String $referenceOrder
     * 手工单号，最大长度：500
     * Example Value: 手工单号
     */
    public function setReferenceOrder($referenceOrder)
    {
        $this->referenceOrder             = $referenceOrder;
        $this->apiParas["referenceOrder"]  = $referenceOrder;
    }

    public function getReferenceOrder()
    {
        return $this->referenceOrder;
    }

    /**
     * @param String $inboundRemark
     * 采购单备注，最大长度：200
     * Required: false
     * Example Value: 备注信息
     */
    private $inboundRemark;

    /**
     * @param String $inboundRemark
     * 采购单备注，最大长度：200
     * Example Value: 备注信息
     */
    public function setInboundRemark($inboundRemark)
    {
        $this->inboundRemark             = $inboundRemark;
        $this->apiParas["inboundRemark"]  = $inboundRemark;
    }

    public function getInboundRemark()
    {
        return $this->inboundRemark;
    }

    /**
     * @param String $logicParam
     * 逻辑库位，最大长度：500
     * Required: false
     * Example Value: 111,114,333,3
     */
    private $logicParam;

    /**
     * @param String $logicParam
     * 逻辑库位，最大长度：500
     * Example Value: 111,114,333,3
     */
    public function setLogicParam($logicParam)
    {
        $this->logicParam             = $logicParam;
        $this->apiParas["logicParam"]  = $logicParam;
    }

    public function getLogicParam()
    {
        return $this->logicParam;
    }

    /**
     * @param String $whNo
     * 入库库房编号，格式：11开头，最大长度：100
     * Required: true
     * Example Value: 110000008
     */
    private $whNo;

    /**
     * @param String $whNo
     * 入库库房编号，格式：11开头，最大长度：100
     * Example Value: 110000008
     */
    public function setWhNo($whNo)
    {
        $this->whNo             = $whNo;
        $this->apiParas["whNo"]  = $whNo;
    }

    public function getWhNo()
    {
        return $this->whNo;
    }

    /**
     * @param String $supplierNo
     * 供应商编号，格式：EMS开头，最大长度：50
     * Required: true
     * Example Value: EMS0000000000001
     */
    private $supplierNo;

    /**
     * @param String $supplierNo
     * 供应商编号，格式：EMS开头，最大长度：50
     * Example Value: EMS0000000000001
     */
    public function setSupplierNo($supplierNo)
    {
        $this->supplierNo             = $supplierNo;
        $this->apiParas["supplierNo"]  = $supplierNo;
    }

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

    /**
     * @param String $sellerSaleOrder
     * 商家越库销售订单(多个以英文逗号隔开)，最大长度：500
     * Required: false
     * Example Value: 20180923992,22912843233
     */
    private $sellerSaleOrder;

    /**
     * @param String $sellerSaleOrder
     * 商家越库销售订单(多个以英文逗号隔开)，最大长度：500
     * Example Value: 20180923992,22912843233
     */
    public function setSellerSaleOrder($sellerSaleOrder)
    {
        $this->sellerSaleOrder             = $sellerSaleOrder;
        $this->apiParas["sellerSaleOrder"]  = $sellerSaleOrder;
    }

    public function getSellerSaleOrder()
    {
        return $this->sellerSaleOrder;
    }

    /**
     * @param String $saleOrder
     * eclp越库销售订单(多个以英文逗号隔开)，最大长度：500
     * Required: false
     * Example Value: ESL999923992,ESL99992843233
     */
    private $saleOrder;

    /**
     * @param String $saleOrder
     * eclp越库销售订单(多个以英文逗号隔开)，最大长度：500
     * Example Value: ESL999923992,ESL99992843233
     */
    public function setSaleOrder($saleOrder)
    {
        $this->saleOrder             = $saleOrder;
        $this->apiParas["saleOrder"]  = $saleOrder;
    }

    public function getSaleOrder()
    {
        return $this->saleOrder;
    }

    /**
     * @param String $orderMark
     * 订单标记位。个性化业务线下沟通后打标使用。最大长度：50
     * Required: false
     * Example Value: 00000000000000000000000000000000000000000000000000
     */
    private $orderMark;

    /**
     * @param String $orderMark
     * 订单标记位。个性化业务线下沟通后打标使用。最大长度：50
     * Example Value: 00000000000000000000000000000000000000000000000000
     */
    public function setOrderMark($orderMark)
    {
        $this->orderMark             = $orderMark;
        $this->apiParas["orderMark"]  = $orderMark;
    }

    public function getOrderMark()
    {
        return $this->orderMark;
    }

    /**
     * @param String $billType
     * 单据类型（物流云专用）
     * Required: false
     * Example Value: 无
     */
    private $billType;

    /**
     * @param String $billType
     * 单据类型（物流云专用）
     * Example Value: 无
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
     * @param String $acceptUnQcFlag
     * 是否支持不合格验收，0:不支持 1：支持，最大长度：4
     * Required: false
     * Example Value: 0
     */
    private $acceptUnQcFlag;

    /**
     * @param String $acceptUnQcFlag
     * 是否支持不合格验收，0:不支持 1：支持，最大长度：4
     * Example Value: 0
     */
    public function setAcceptUnQcFlag($acceptUnQcFlag)
    {
        $this->acceptUnQcFlag             = $acceptUnQcFlag;
        $this->apiParas["acceptUnQcFlag"]  = $acceptUnQcFlag;
    }

    public function getAcceptUnQcFlag()
    {
        return $this->acceptUnQcFlag;
    }

    /**
     * @param String $boxFlag
     * 是否按箱收货，0：否 1：是，最大长度：4
     * Required: false
     * Example Value: 0
     */
    private $boxFlag;

    /**
     * @param String $boxFlag
     * 是否按箱收货，0：否 1：是，最大长度：4
     * Example Value: 0
     */
    public function setBoxFlag($boxFlag)
    {
        $this->boxFlag             = $boxFlag;
        $this->apiParas["boxFlag"]  = $boxFlag;
    }

    public function getBoxFlag()
    {
        return $this->boxFlag;
    }

    /**
     * @param String $entirePrice
     * 整单价格，包含小数点不超过20位，最大长度：20
     * Required: false
     * Example Value: 1.2
     */
    private $entirePrice;

    /**
     * @param String $entirePrice
     * 整单价格，包含小数点不超过20位，最大长度：20
     * Example Value: 1.2
     */
    public function setEntirePrice($entirePrice)
    {
        $this->entirePrice             = $entirePrice;
        $this->apiParas["entirePrice"]  = $entirePrice;
    }

    public function getEntirePrice()
    {
        return $this->entirePrice;
    }

    /**
     * @param String[] $boxNo
     * 箱号，最大长度：100
     * Required: false
     * Example Value: abc0001
     */
    private $boxNo;

    /**
     * @param String[] $boxNo
     * 箱号，最大长度：100
     * Example Value: abc0001
     */
    public function setBoxNo($boxNo)
    {
        $this->boxNo             = $boxNo;
        $this->apiParas["boxNo"]  = $boxNo;
    }

    public function getBoxNo()
    {
        return $this->boxNo;
    }

    /**
     * @param String[] $deptGoodsNo
     * 箱明细事业部商品编号，最大长度：50
     * Required: false
     * Example Value: EMG4398046512281
     */
    private $deptGoodsNo;

    /**
     * @param String[] $deptGoodsNo
     * 箱明细事业部商品编号，最大长度：50
     * Example Value: EMG4398046512281
     */
    public function setDeptGoodsNo($deptGoodsNo)
    {
        $this->deptGoodsNo             = $deptGoodsNo;
        $this->apiParas["boxGoodsNo"]  = $deptGoodsNo;
    }

    public function getDeptGoodsNo()
    {
        return $this->deptGoodsNo;
    }

    /**
     * @param Number[] $numApplication
     * 箱商品申请入库数量，最大长度：11
     * Required: false
     * Example Value: 1
     */
    private $numApplication;

    /**
     * @param Number[] $numApplication
     * 箱商品申请入库数量，最大长度：11
     * Example Value: 1
     */
    public function setNumApplication($numApplication)
    {
        $this->numApplication             = $numApplication;
        $this->apiParas["boxGoodsQty"]  = $numApplication;
    }

    public function getNumApplication()
    {
        return $this->numApplication;
    }

    /**
     * @param String[] $serialNo
     * 序列号段，最大长度：200
     * Required: false
     * Example Value: 201801001-201801100
     */
    private $serialNo;

    /**
     * @param String[] $serialNo
     * 序列号段，最大长度：200
     * Example Value: 201801001-201801100
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo             = $serialNo;
        $this->apiParas["boxSerialNo"]  = $serialNo;
    }

    public function getSerialNo()
    {
        return $this->serialNo;
    }

    /**
     * @param Number $poReturnMode
     * 回传方式，1：按单回传，2：按板回传，最大长度：4
     * Required: false
     * Example Value: 1
     */
    private $poReturnMode;

    /**
     * @param Number $poReturnMode
     * 回传方式，1：按单回传，2：按板回传，最大长度：4
     * Example Value: 1
     */
    public function setPoReturnMode($poReturnMode)
    {
        $this->poReturnMode             = $poReturnMode;
        $this->apiParas["poReturnMode"]  = $poReturnMode;
    }

    public function getPoReturnMode()
    {
        return $this->poReturnMode;
    }

    /**
     * @param String $customsInfo
     * 大字段(物流云专用)
     * Required: false
     * Example Value: 无
     */
    private $customsInfo;

    /**
     * @param String $customsInfo
     * 大字段(物流云专用)
     * Example Value: 无
     */
    public function setCustomsInfo($customsInfo)
    {
        $this->customsInfo             = $customsInfo;
        $this->apiParas["customsInfo"]  = $customsInfo;
    }

    public function getCustomsInfo()
    {
        return $this->customsInfo;
    }

    /**
     * @param String $poType
     * 采购单类型，1 普通采购单 3：全球购采购单 4：直邮采购单，最大长度：4
     * Required: false
     * Example Value: 1
     */
    private $poType;

    /**
     * @param String $poType
     * 采购单类型，1 普通采购单 3：全球购采购单 4：直邮采购单，最大长度：4
     * Example Value: 1
     */
    public function setPoType($poType)
    {
        $this->poType             = $poType;
        $this->apiParas["poType"]  = $poType;
    }

    public function getPoType()
    {
        return $this->poType;
    }

    /**
     * @param String $billOfLading
     * 提货单号，全球购专用，最大长度：100
     * Required: false
     * Example Value: bill0001111
     */
    private $billOfLading;

    /**
     * @param String $billOfLading
     * 提货单号，全球购专用，最大长度：100
     * Example Value: bill0001111
     */
    public function setBillOfLading($billOfLading)
    {
        $this->billOfLading             = $billOfLading;
        $this->apiParas["billOfLading"]  = $billOfLading;
    }

    public function getBillOfLading()
    {
        return $this->billOfLading;
    }

    /**
     * @param  $receiveLevel
     * 收货等级,1 按单据等级收货 2 按实物等级收货
     * Required: false
     * Example Value: 2
     */
    private $receiveLevel;

    /**
     * @param  $receiveLevel
     * 收货等级,1 按单据等级收货 2 按实物等级收货
     * Example Value: 2
     */
    public function setReceiveLevel($receiveLevel)
    {
        $this->receiveLevel             = $receiveLevel;
        $this->apiParas["receiveLevel"]  = $receiveLevel;
    }

    public function getReceiveLevel()
    {
        return $this->receiveLevel;
    }

    /**
     * @param  $multiReceivingFlag
     * 分批次收货标志，0 否 1是，默认为空（特殊项目专用，使用前请务必事先沟通），最大长度：4
     * Required: false
     * Example Value: 1
     */
    private $multiReceivingFlag;

    /**
     * @param  $multiReceivingFlag
     * 分批次收货标志，0 否 1是，默认为空（特殊项目专用，使用前请务必事先沟通），最大长度：4
     * Example Value: 1
     */
    public function setMultiReceivingFlag($multiReceivingFlag)
    {
        $this->multiReceivingFlag             = $multiReceivingFlag;
        $this->apiParas["multiReceivingFlag"]  = $multiReceivingFlag;
    }

    public function getMultiReceivingFlag()
    {
        return $this->multiReceivingFlag;
    }

    /**
     * @param String $waybillNo
     * 运单号，最大长度：500
     * Required: false
     * Example Value: WAY0000001
     */
    private $waybillNo;

    /**
     * @param String $waybillNo
     * 运单号，最大长度：500
     * Example Value: WAY0000001
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
     * @param String $isvOutWarehouse
     * 商家出库库房信息，最大长度：100
     * Required: false
     * Example Value: warehouse123
     */
    private $isvOutWarehouse;

    /**
     * @param String $isvOutWarehouse
     * 商家出库库房信息，最大长度：100
     * Example Value: warehouse123
     */
    public function setIsvOutWarehouse($isvOutWarehouse)
    {
        $this->isvOutWarehouse             = $isvOutWarehouse;
        $this->apiParas["isvOutWarehouse"]  = $isvOutWarehouse;
    }

    public function getIsvOutWarehouse()
    {
        return $this->isvOutWarehouse;
    }

    /**
     * @param  $bizType
     * 业务类型,1-采购;12-普通调拨入，最大长度：4
     * Required: false
     * Example Value: 1
     */
    private $bizType;

    /**
     * @param  $bizType
     * 业务类型,1-采购;12-普通调拨入，最大长度：4
     * Example Value: 1
     */
    public function setBizType($bizType)
    {
        $this->bizType             = $bizType;
        $this->apiParas["bizType"]  = $bizType;
    }

    public function getBizType()
    {
        return $this->bizType;
    }

    /**
     * @param String[] $deptGoodsNo
     * 事业部商品编码，格式：EMG开头，最大长度：50
     * Required: false
     * Example Value: EMG4398046512281
     */
    private $deptGoodsNo;

    /**
     * @param String[] $deptGoodsNo
     * 事业部商品编码，格式：EMG开头，最大长度：50
     * Example Value: EMG4398046512281
     */
    public function setDeptGoodsNo($deptGoodsNo)
    {
        $this->deptGoodsNo             = $deptGoodsNo;
        $this->apiParas["deptGoodsNo"]  = $deptGoodsNo;
    }

    public function getDeptGoodsNo()
    {
        return $this->deptGoodsNo;
    }

    /**
     * @param String $isvGoodsNo
     * 商家商品编码，与事业部商品编码二选一即可
     * Required: false
     * Example Value: goods00003
     */
    private $isvGoodsNo;

    /**
     * @param String $isvGoodsNo
     * 商家商品编码，与事业部商品编码二选一即可
     * Example Value: goods00003
     */
    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo             = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"]  = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    /**
     * @param Number[] $numApplication
     * 申请入库数量，最大长度：11
     * Required: true
     * Example Value: 1
     */
    private $numApplication;

    /**
     * @param Number[] $numApplication
     * 申请入库数量，最大长度：11
     * Example Value: 1
     */
    public function setNumApplication($numApplication)
    {
        $this->numApplication             = $numApplication;
        $this->apiParas["numApplication"]  = $numApplication;
    }

    public function getNumApplication()
    {
        return $this->numApplication;
    }

    /**
     * @param String[] $goodsStatus
     * 商品状态，1 良品 2 残品 3 样品，或赋值商品等级，按单据等级收货时必填，最大长度：4
     * Required: true
     * Example Value: 1
     */
    private $goodsStatus;

    /**
     * @param String[] $goodsStatus
     * 商品状态，1 良品 2 残品 3 样品，或赋值商品等级，按单据等级收货时必填，最大长度：4
     * Example Value: 1
     */
    public function setGoodsStatus($goodsStatus)
    {
        $this->goodsStatus             = $goodsStatus;
        $this->apiParas["goodsStatus"]  = $goodsStatus;
    }

    public function getGoodsStatus()
    {
        return $this->goodsStatus;
    }

    /**
     * @param String[] $barCodeType
     * 代贴条码，1申请贴码 2商家自贴，最大长度：4
     * Required: false
     * Example Value: 2
     */
    private $barCodeType;

    /**
     * @param String[] $barCodeType
     * 代贴条码，1申请贴码 2商家自贴，最大长度：4
     * Example Value: 2
     */
    public function setBarCodeType($barCodeType)
    {
        $this->barCodeType             = $barCodeType;
        $this->apiParas["barCodeType"]  = $barCodeType;
    }

    public function getBarCodeType()
    {
        return $this->barCodeType;
    }

    /**
     * @param Number[] $sidCheckout
     * 是否按照序列号校验入库，0否 1是，最大长度：4
     * Required: false
     * Example Value: 
     */
    private $sidCheckout;

    /**
     * @param Number[] $sidCheckout
     * 是否按照序列号校验入库，0否 1是，最大长度：4
     * Example Value: 
     */
    public function setSidCheckout($sidCheckout)
    {
        $this->sidCheckout             = $sidCheckout;
        $this->apiParas["sidCheckout"]  = $sidCheckout;
    }

    public function getSidCheckout()
    {
        return $this->sidCheckout;
    }

    /**
     * @param String[] $unitPrice
     * 商品单价,包含小数点不超过20位，最大长度：20
     * Required: false
     * Example Value: 0.1
     */
    private $unitPrice;

    /**
     * @param String[] $unitPrice
     * 商品单价,包含小数点不超过20位，最大长度：20
     * Example Value: 0.1
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice             = $unitPrice;
        $this->apiParas["unitPrice"]  = $unitPrice;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param String[] $totalPrice
     * 商品总价,包含小数点不超过20位，最大长度：20
     * Required: false
     * Example Value: 1.1
     */
    private $totalPrice;

    /**
     * @param String[] $totalPrice
     * 商品总价,包含小数点不超过20位，最大长度：20
     * Example Value: 1.1
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice             = $totalPrice;
        $this->apiParas["totalPrice"]  = $totalPrice;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param String $qualityCheckRate
     * 质检比例，大件专用，0-100整数。最大长度：4
     * Required: false
     * Example Value: 99
     */
    private $qualityCheckRate;

    /**
     * @param String $qualityCheckRate
     * 质检比例，大件专用，0-100整数。最大长度：4
     * Example Value: 99
     */
    public function setQualityCheckRate($qualityCheckRate)
    {
        $this->qualityCheckRate             = $qualityCheckRate;
        $this->apiParas["qualityCheckRate"]  = $qualityCheckRate;
    }

    public function getQualityCheckRate()
    {
        return $this->qualityCheckRate;
    }

    /**
     * @param String[] $batAttrListJson
     * 商品批属性信息，枚举:packageBatchNo(包装批号) productionDate(生产日期) expirationDate(到期日期) lot(批次号)，注意：在正式调用的时，把 单引号 改为 反斜杠+双引号。无长度限制
     * Required: false
     * Example Value: [{'batchKey':'packageBatchNo'_$_'batchValue':'20161010'}_$_{'batchKey':'productionDate'_$_'batchValue':'2016-10-10'}]
     */
    private $batAttrListJson;

    /**
     * @param String[] $batAttrListJson
     * 商品批属性信息，枚举:packageBatchNo(包装批号) productionDate(生产日期) expirationDate(到期日期) lot(批次号)，注意：在正式调用的时，把 单引号 改为 反斜杠+双引号。无长度限制
     * Example Value: [{'batchKey':'packageBatchNo'_$_'batchValue':'20161010'}_$_{'batchKey':'productionDate'_$_'batchValue':'2016-10-10'}]
     */
    public function setBatAttrListJson($batAttrListJson)
    {
        $this->batAttrListJson             = $batAttrListJson;
        $this->apiParas["batAttrListJson"]  = $batAttrListJson;
    }

    public function getBatAttrListJson()
    {
        return $this->batAttrListJson;
    }

    /**
     * @param String[] $orderLine
     * 行号，最大长度：50
     * Required: false
     * Example Value: 00000001
     */
    private $orderLine;

    /**
     * @param String[] $orderLine
     * 行号，最大长度：50
     * Example Value: 00000001
     */
    public function setOrderLine($orderLine)
    {
        $this->orderLine             = $orderLine;
        $this->apiParas["orderLine"]  = $orderLine;
    }

    public function getOrderLine()
    {
        return $this->orderLine;
    }

    /**
     * @param String[] $isvLotattrs
     * 批属性(物流云专用)
     * Required: false
     * Example Value: 无
     */
    private $isvLotattrs;

    /**
     * @param String[] $isvLotattrs
     * 批属性(物流云专用)
     * Example Value: 无
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
     * @param String[] $checkLotattrs
     * 是否验证验收采集
     * Required: false
     * Example Value: 无
     */
    private $checkLotattrs;

    /**
     * @param String[] $checkLotattrs
     * 是否验证验收采集
     * Example Value: 无
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