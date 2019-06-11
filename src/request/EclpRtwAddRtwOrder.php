<?php

namespca Lostinfo\JosOpenApi;

/**
 * 新建退货入库单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2386&apiName=jingdong.eclp.rtw.addRtwOrder
 * Class EclpRtwAddRtwOrder
 * @package Jd\request
 */
class EclpRtwAddRtwOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.rtw.addRtwOrder";
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
     * @param string $orderNum
     * 开放平台出库订单号（限1个）b2c时使用,若eclpSoNo未填入时,ownerNo,warehouseNo,isvSoNo为必填项，以ESL打头，最大长度：50
     * Required: false
     * Example Value: ESL000000888899
     */
    private $orderNum;

    /**
     * @param string $orderNum
     * 开放平台出库订单号（限1个）b2c时使用,若eclpSoNo未填入时,ownerNo,warehouseNo,isvSoNo为必填项，以ESL打头，最大长度：50
     * Example Value: ESL000000888899
     */
    public function setOrderNum($orderNum)
    {
        $this->orderNum             = $orderNum;
        $this->apiParas["eclpSoNo"]  = $orderNum;
    }

    public function getOrderNum()
    {
        return $this->orderNum;
    }

    /**
     * @param string $rtwNum
     * 开放平台退货入库单号，b2c以ESR开头，b2b以EBR开头，最大长度：50
     * Required: false
     * Example Value: ESR000000888899
     */
    private $rtwNum;

    /**
     * @param string $rtwNum
     * 开放平台退货入库单号，b2c以ESR开头，b2b以EBR开头，最大长度：50
     * Example Value: ESR000000888899
     */
    public function setRtwNum($rtwNum)
    {
        $this->rtwNum             = $rtwNum;
        $this->apiParas["eclpRtwNo"]  = $rtwNum;
    }

    public function getRtwNum()
    {
        return $this->rtwNum;
    }

    /**
     * @param string $isvRtwNum
     * isv商家退货入库单号，b2b退货时必填，最大长度：100
     * Required: false
     * Example Value: 56516838332
     */
    private $isvRtwNum;

    /**
     * @param string $isvRtwNum
     * isv商家退货入库单号，b2b退货时必填，最大长度：100
     * Example Value: 56516838332
     */
    public function setIsvRtwNum($isvRtwNum)
    {
        $this->isvRtwNum             = $isvRtwNum;
        $this->apiParas["isvRtwNum"]  = $isvRtwNum;
    }

    public function getIsvRtwNum()
    {
        return $this->isvRtwNum;
    }

    /**
     * @param string $warehouseNo
     * 入库库房编号,当eclpSoNo为空时或b2b退货时必传，最大长度：50
     * Required: false
     * Example Value: 1100005424
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 入库库房编号,当eclpSoNo为空时或b2b退货时必传，最大长度：50
     * Example Value: 1100005424
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
     * @param string $logicParam
     * 逻辑库位,若事业部【逻辑库存管理】=是，则校验JOS【逻辑库位】字段不允许为空
     * Required: false
     * Example Value: 326,658
     */
    private $logicParam;

    /**
     * @param string $logicParam
     * 逻辑库位,若事业部【逻辑库存管理】=是，则校验JOS【逻辑库位】字段不允许为空
     * Example Value: 326,658
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
     * @param string $reson
     * 退货入库原因，最大长度：400
     * Required: false
     * Example Value: 客户下错单
     */
    private $reson;

    /**
     * @param string $reson
     * 退货入库原因，最大长度：400
     * Example Value: 客户下错单
     */
    public function setReson($reson)
    {
        $this->reson             = $reson;
        $this->apiParas["reson"]  = $reson;
    }

    public function getReson()
    {
        return $this->reson;
    }

    /**
     * @param  $orderType
     * 退货类型，1:售后退货；2:售后换货；3: 拒收退货；4: 缺量退货，默认为拒收退货 3，最大长度：1
     * Required: false
     * Example Value: 3
     */
    private $orderType;

    /**
     * @param  $orderType
     * 退货类型，1:售后退货；2:售后换货；3: 拒收退货；4: 缺量退货，默认为拒收退货 3，最大长度：1
     * Example Value: 3
     */
    public function setOrderType($orderType)
    {
        $this->orderType             = $orderType;
        $this->apiParas["orderType"]  = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * @param string $packageNo
     * 退货包裹物流单号（暂未用到）
     * Required: false
     * Example Value: 无
     */
    private $packageNo;

    /**
     * @param string $packageNo
     * 退货包裹物流单号（暂未用到）
     * Example Value: 无
     */
    public function setPackageNo($packageNo)
    {
        $this->packageNo             = $packageNo;
        $this->apiParas["packageNo"]  = $packageNo;
    }

    public function getPackageNo()
    {
        return $this->packageNo;
    }

    /**
     * @param string $isvSoNo
     * Isv出库单号(当eclpSoNo为空时必传)，最大长度:50
     * Required: false
     * Example Value: 893513543
     */
    private $isvSoNo;

    /**
     * @param string $isvSoNo
     * Isv出库单号(当eclpSoNo为空时必传)，最大长度:50
     * Example Value: 893513543
     */
    public function setIsvSoNo($isvSoNo)
    {
        $this->isvSoNo             = $isvSoNo;
        $this->apiParas["isvSoNo"]  = $isvSoNo;
    }

    public function getIsvSoNo()
    {
        return $this->isvSoNo;
    }

    /**
     * @param string $orderMark
     * 默认允许缺量，现第一位为1标识允许缺量，不可误传，最大长度 ：50
     * Required: false
     * Example Value: 10000000000000000000000000000000000000000000000000
     */
    private $orderMark;

    /**
     * @param string $orderMark
     * 默认允许缺量，现第一位为1标识允许缺量，不可误传，最大长度 ：50
     * Example Value: 10000000000000000000000000000000000000000000000000
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
     * @param string $shipperName
     * 承运商名称，最大长度：100
     * Required: false
     * Example Value: XXX物流公司
     */
    private $shipperName;

    /**
     * @param string $shipperName
     * 承运商名称，最大长度：100
     * Example Value: XXX物流公司
     */
    public function setShipperName($shipperName)
    {
        $this->shipperName             = $shipperName;
        $this->apiParas["shipperName"]  = $shipperName;
    }

    public function getShipperName()
    {
        return $this->shipperName;
    }

    /**
     * @param string $ownerNo
     * 事业部编码,当eclpSoNo为空时必传,b2b退货业务必传，以EBU开头，最大长度：50
     * Required: false
     * Example Value: EBU000000025
     */
    private $ownerNo;

    /**
     * @param string $ownerNo
     * 事业部编码,当eclpSoNo为空时必传,b2b退货业务必传，以EBU开头，最大长度：50
     * Example Value: EBU000000025
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
     * @param  $orderInType
     * 业务类型，1:b2c业务;2:b2b业务，默认是1，最大长度：1
     * Required: false
     * Example Value: 1
     */
    private $orderInType;

    /**
     * @param  $orderInType
     * 业务类型，1:b2c业务;2:b2b业务，默认是1，最大长度：1
     * Example Value: 1
     */
    public function setOrderInType($orderInType)
    {
        $this->orderInType             = $orderInType;
        $this->apiParas["orderInType"]  = $orderInType;
    }

    public function getOrderInType()
    {
        return $this->orderInType;
    }

    /**
     * @param  $receiveLevel
     * b2b退货业务必填，1:按单据等级入库；2:按实物等级入库，最大长度1
     * Required: false
     * Example Value: 1
     */
    private $receiveLevel;

    /**
     * @param  $receiveLevel
     * b2b退货业务必填，1:按单据等级入库；2:按实物等级入库，最大长度1
     * Example Value: 1
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
     * @param string $sellerRemark
     * 商家备注，最大长度：100
     * Required: false
     * Example Value: XXXX
     */
    private $sellerRemark;

    /**
     * @param string $sellerRemark
     * 商家备注，最大长度：100
     * Example Value: XXXX
     */
    public function setSellerRemark($sellerRemark)
    {
        $this->sellerRemark             = $sellerRemark;
        $this->apiParas["sellerRemark"]  = $sellerRemark;
    }

    public function getSellerRemark()
    {
        return $this->sellerRemark;
    }

    /**
     * @param string $salesMan
     * 业务员，医药专用），最大长度：50
     * Required: false
     * Example Value: 张三
     */
    private $salesMan;

    /**
     * @param string $salesMan
     * 业务员，医药专用），最大长度：50
     * Example Value: 张三
     */
    public function setSalesMan($salesMan)
    {
        $this->salesMan             = $salesMan;
        $this->apiParas["salesMan"]  = $salesMan;
    }

    public function getSalesMan()
    {
        return $this->salesMan;
    }

    /**
     * @param string $salesBillingStaff
     * 销售开票员，（医药专用），最大长度：50
     * Required: false
     * Example Value: 李四
     */
    private $salesBillingStaff;

    /**
     * @param string $salesBillingStaff
     * 销售开票员，（医药专用），最大长度：50
     * Example Value: 李四
     */
    public function setSalesBillingStaff($salesBillingStaff)
    {
        $this->salesBillingStaff             = $salesBillingStaff;
        $this->apiParas["salesBillingStaff"]  = $salesBillingStaff;
    }

    public function getSalesBillingStaff()
    {
        return $this->salesBillingStaff;
    }

    /**
     * @param string $drugElectronicSupervisionCode
     * 流通监管码，（医药专用），最大长度：50
     * Required: false
     * Example Value: S0225641425
     */
    private $drugElectronicSupervisionCode;

    /**
     * @param string $drugElectronicSupervisionCode
     * 流通监管码，（医药专用），最大长度：50
     * Example Value: S0225641425
     */
    public function setDrugElectronicSupervisionCode($drugElectronicSupervisionCode)
    {
        $this->drugElectronicSupervisionCode             = $drugElectronicSupervisionCode;
        $this->apiParas["drugElectronicSupervisionCode"]  = $drugElectronicSupervisionCode;
    }

    public function getDrugElectronicSupervisionCode()
    {
        return $this->drugElectronicSupervisionCode;
    }

    /**
     * @param string $registerOrgNo
     * 退货单位编码，（注册单位编码），最大长度：50
     * Required: false
     * Example Value: 00021548654
     */
    private $registerOrgNo;

    /**
     * @param string $registerOrgNo
     * 退货单位编码，（注册单位编码），最大长度：50
     * Example Value: 00021548654
     */
    public function setRegisterOrgNo($registerOrgNo)
    {
        $this->registerOrgNo             = $registerOrgNo;
        $this->apiParas["registerOrgNo"]  = $registerOrgNo;
    }

    public function getRegisterOrgNo()
    {
        return $this->registerOrgNo;
    }

    /**
     * @param string $registerOrgName
     * 退货单位名称，（注册单位名称），最大长度：100
     * Required: false
     * Example Value: XXX有限公司
     */
    private $registerOrgName;

    /**
     * @param string $registerOrgName
     * 退货单位名称，（注册单位名称），最大长度：100
     * Example Value: XXX有限公司
     */
    public function setRegisterOrgName($registerOrgName)
    {
        $this->registerOrgName             = $registerOrgName;
        $this->apiParas["registerOrgName"]  = $registerOrgName;
    }

    public function getRegisterOrgName()
    {
        return $this->registerOrgName;
    }

    /**
     * @param string $customerName
     * 门店名称(B2B使用，长度50)
     * Required: false
     * Example Value: 京东旗舰店
     */
    private $customerName;

    /**
     * @param string $customerName
     * 门店名称(B2B使用，长度50)
     * Example Value: 京东旗舰店
     */
    public function setCustomerName($customerName)
    {
        $this->customerName             = $customerName;
        $this->apiParas["customerName"]  = $customerName;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param string $receivePriority
     * 收货优先级(B2B使用，长度30)
     * Required: false
     * Example Value: 0
     */
    private $receivePriority;

    /**
     * @param string $receivePriority
     * 收货优先级(B2B使用，长度30)
     * Example Value: 0
     */
    public function setReceivePriority($receivePriority)
    {
        $this->receivePriority             = $receivePriority;
        $this->apiParas["receivePriority"]  = $receivePriority;
    }

    public function getReceivePriority()
    {
        return $this->receivePriority;
    }

    /**
     * @param string[] $isvGoodsNo
     * ISV商品编码注，当orderType为4或者为b2b业务时 该字段为必填项，最大长度：50
     * Required: false
     * Example Value: 23564521
     */
    private $isvGoodsNo;

    /**
     * @param string[] $isvGoodsNo
     * ISV商品编码注，当orderType为4或者为b2b业务时 该字段为必填项，最大长度：50
     * Example Value: 23564521
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
     * @param int[] $planQty
     * 数量 注，当orderType为4或者为b2b业务时 该字段为必填项，值必须是整型数字，最大长度：11
     * Required: false
     * Example Value: 23
     */
    private $planQty;

    /**
     * @param int[] $planQty
     * 数量 注，当orderType为4或者为b2b业务时 该字段为必填项，值必须是整型数字，最大长度：11
     * Example Value: 23
     */
    public function setPlanQty($planQty)
    {
        $this->planQty             = $planQty;
        $this->apiParas["planQty"]  = $planQty;
    }

    public function getPlanQty()
    {
        return $this->planQty;
    }

    /**
     * @param string[] $goodsLevel
     * 商品等级，b2b业务默认为良品,商品等级分为100:良品;200:残品;400脏品，最大长度：10
     * Required: false
     * Example Value: 100
     */
    private $goodsLevel;

    /**
     * @param string[] $goodsLevel
     * 商品等级，b2b业务默认为良品,商品等级分为100:良品;200:残品;400脏品，最大长度：10
     * Example Value: 100
     */
    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel             = $goodsLevel;
        $this->apiParas["goodsLevel"]  = $goodsLevel;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    /**
     * @param string[] $productionDate
     * 生产日期(批属性专用)b2c支持批属性/b2b支持批属性，格式：”yyyy-MM-dd“，最大长度：10
     * Required: false
     * Example Value: 2014-07-24
     */
    private $productionDate;

    /**
     * @param string[] $productionDate
     * 生产日期(批属性专用)b2c支持批属性/b2b支持批属性，格式：”yyyy-MM-dd“，最大长度：10
     * Example Value: 2014-07-24
     */
    public function setProductionDate($productionDate)
    {
        $this->productionDate             = $productionDate;
        $this->apiParas["productionDate"]  = $productionDate;
    }

    public function getProductionDate()
    {
        return $this->productionDate;
    }

    /**
     * @param string[] $packageBatchNo
     * 包装批号(批属性专用)b2c支持批属性，最大长度：200
     * Required: false
     * Example Value: feghdgdsggolwgg
     */
    private $packageBatchNo;

    /**
     * @param string[] $packageBatchNo
     * 包装批号(批属性专用)b2c支持批属性，最大长度：200
     * Example Value: feghdgdsggolwgg
     */
    public function setPackageBatchNo($packageBatchNo)
    {
        $this->packageBatchNo             = $packageBatchNo;
        $this->apiParas["packageBatchNo"]  = $packageBatchNo;
    }

    public function getPackageBatchNo()
    {
        return $this->packageBatchNo;
    }

    /**
     * @param string[] $eclpOutOrderNo
     * 开放平台出库订单号2B ，只对B2B业务有效（在商品明细上），最大长度：50
     * Required: false
     * Example Value: 2589654752
     */
    private $eclpOutOrderNo;

    /**
     * @param string[] $eclpOutOrderNo
     * 开放平台出库订单号2B ，只对B2B业务有效（在商品明细上），最大长度：50
     * Example Value: 2589654752
     */
    public function setEclpOutOrderNo($eclpOutOrderNo)
    {
        $this->eclpOutOrderNo             = $eclpOutOrderNo;
        $this->apiParas["eclpOutOrderNo"]  = $eclpOutOrderNo;
    }

    public function getEclpOutOrderNo()
    {
        return $this->eclpOutOrderNo;
    }

    /**
     * @param string[] $sellerOutOrderNo
     * ISV销售出库单号2B，只对B2B业务有效（在商品明细上），最大长度：50
     * Required: false
     * Example Value: 3652145965
     */
    private $sellerOutOrderNo;

    /**
     * @param string[] $sellerOutOrderNo
     * ISV销售出库单号2B，只对B2B业务有效（在商品明细上），最大长度：50
     * Example Value: 3652145965
     */
    public function setSellerOutOrderNo($sellerOutOrderNo)
    {
        $this->sellerOutOrderNo             = $sellerOutOrderNo;
        $this->apiParas["sellerOutOrderNo"]  = $sellerOutOrderNo;
    }

    public function getSellerOutOrderNo()
    {
        return $this->sellerOutOrderNo;
    }

    /**
     * @param string[] $unitPrice
     * 单价（医药专用）
     * Required: false
     * Example Value: 130
     */
    private $unitPrice;

    /**
     * @param string[] $unitPrice
     * 单价（医药专用）
     * Example Value: 130
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
     * @param string[] $money
     * 金额（医药专用）
     * Required: false
     * Example Value: 120
     */
    private $money;

    /**
     * @param string[] $money
     * 金额（医药专用）
     * Example Value: 120
     */
    public function setMoney($money)
    {
        $this->money             = $money;
        $this->apiParas["money"]  = $money;
    }

    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param string[] $mediumPackage
     * 中包装（医药专用）
     * Required: false
     * Example Value: 77578
     */
    private $mediumPackage;

    /**
     * @param string[] $mediumPackage
     * 中包装（医药专用）
     * Example Value: 77578
     */
    public function setMediumPackage($mediumPackage)
    {
        $this->mediumPackage             = $mediumPackage;
        $this->apiParas["mediumPackage"]  = $mediumPackage;
    }

    public function getMediumPackage()
    {
        return $this->mediumPackage;
    }

    /**
     * @param string[] $bigPackage
     * 大包装（医药专用）
     * Required: false
     * Example Value: 78900
     */
    private $bigPackage;

    /**
     * @param string[] $bigPackage
     * 大包装（医药专用）
     * Example Value: 78900
     */
    public function setBigPackage($bigPackage)
    {
        $this->bigPackage             = $bigPackage;
        $this->apiParas["bigPackage"]  = $bigPackage;
    }

    public function getBigPackage()
    {
        return $this->bigPackage;
    }

    /**
     * @param string[] $orderLine
     * 行号，最大长度：50
     * Required: false
     * Example Value: 10002
     */
    private $orderLine;

    /**
     * @param string[] $orderLine
     * 行号，最大长度：50
     * Example Value: 10002
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
     * @param string[] $batAttrListJson
     * 批属性列表JSON格式的字符串(生产日期productionDate;到期日期expirationDate;生产批号lot;供应商supplier;收货日期receiveDate;采购单号poNo;包装批号packageBatchNo;制造商manufacturer;)
     * Required: false
     * Example Value: [{'batchKey':'packageBatchNo'_$_'batchValue':'2018050702'}_$_{'batchKey':'poNo'_$_'batchValue':'epl001'}]
     */
    private $batAttrListJson;

    /**
     * @param string[] $batAttrListJson
     * 批属性列表JSON格式的字符串(生产日期productionDate;到期日期expirationDate;生产批号lot;供应商supplier;收货日期receiveDate;采购单号poNo;包装批号packageBatchNo;制造商manufacturer;)
     * Example Value: [{'batchKey':'packageBatchNo'_$_'batchValue':'2018050702'}_$_{'batchKey':'poNo'_$_'batchValue':'epl001'}]
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

}