<?php

namespca Lostinfo\JosOpenApi;

/**
 * 更新商品信息
 * 景点门票API-POP虚拟业务,开放景点门票业务API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=131&apiId=782&apiName=jingdong.pop.lvyou.jingdian.product.update
 * Class PopLvyouJingdianProductUpdate
 * @package Jd\request
 */
class PopLvyouJingdianProductUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.lvyou.jingdian.product.update";
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
     * @param string $supplierProductId
     * 供应商商品ID
     * Required: true
     * Example Value: 
     */
    private $supplierProductId;

    /**
     * @param string $supplierProductId
     * 供应商商品ID
     * Example Value: 
     */
    public function setSupplierProductId($supplierProductId)
    {
        $this->supplierProductId             = $supplierProductId;
        $this->apiParas["supplierProductId"]  = $supplierProductId;
    }

    public function getSupplierProductId()
    {
        return $this->supplierProductId;
    }

    /**
     * @param string $productName
     * 商品名称
     * Required: false
     * Example Value: 
     */
    private $productName;

    /**
     * @param string $productName
     * 商品名称
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
     * @param int $stockCountType
     * 库存计数类型，1:拍下减库存，2:付款减库存
     * Required: false
     * Example Value: 
     */
    private $stockCountType;

    /**
     * @param int $stockCountType
     * 库存计数类型，1:拍下减库存，2:付款减库存
     * Example Value: 
     */
    public function setStockCountType($stockCountType)
    {
        $this->stockCountType             = $stockCountType;
        $this->apiParas["stockCountType"]  = $stockCountType;
    }

    public function getStockCountType()
    {
        return $this->stockCountType;
    }

    /**
     * @param string $productPriceListJson
     * 商品价格日期列表，现有京东景点系统数据库价格日历直接删除，将该列表价格日期列表新建，以JSON串形式传入
     * Required: false
     * Example Value: 
     */
    private $productPriceListJson;

    /**
     * @param string $productPriceListJson
     * 商品价格日期列表，现有京东景点系统数据库价格日历直接删除，将该列表价格日期列表新建，以JSON串形式传入
     * Example Value: 
     */
    public function setProductPriceListJson($productPriceListJson)
    {
        $this->productPriceListJson             = $productPriceListJson;
        $this->apiParas["productPriceListJson"]  = $productPriceListJson;
    }

    public function getProductPriceListJson()
    {
        return $this->productPriceListJson;
    }

    /**
     * @param string $productDesc
     * 商品描述富文本
     * Required: false
     * Example Value: 
     */
    private $productDesc;

    /**
     * @param string $productDesc
     * 商品描述富文本
     * Example Value: 
     */
    public function setProductDesc($productDesc)
    {
        $this->productDesc             = $productDesc;
        $this->apiParas["productDesc"]  = $productDesc;
    }

    public function getProductDesc()
    {
        return $this->productDesc;
    }

    /**
     * @param int $beforeReserveMinutes
     * 提前预定分钟数 0:随时可以下单
     * Required: false
     * Example Value: 
     */
    private $beforeReserveMinutes;

    /**
     * @param int $beforeReserveMinutes
     * 提前预定分钟数 0:随时可以下单
     * Example Value: 
     */
    public function setBeforeReserveMinutes($beforeReserveMinutes)
    {
        $this->beforeReserveMinutes             = $beforeReserveMinutes;
        $this->apiParas["beforeReserveMinutes"]  = $beforeReserveMinutes;
    }

    public function getBeforeReserveMinutes()
    {
        return $this->beforeReserveMinutes;
    }

    /**
     * @param int $refundRuleType
     * 退票规则 1:不能退票 2:无条件退票 3:有条件退票
     * Required: false
     * Example Value: 
     */
    private $refundRuleType;

    /**
     * @param int $refundRuleType
     * 退票规则 1:不能退票 2:无条件退票 3:有条件退票
     * Example Value: 
     */
    public function setRefundRuleType($refundRuleType)
    {
        $this->refundRuleType             = $refundRuleType;
        $this->apiParas["refundRuleType"]  = $refundRuleType;
    }

    public function getRefundRuleType()
    {
        return $this->refundRuleType;
    }

    /**
     * @param int $changeRuleType
     * 改期规则 1:不能改期 2:无条件改期 3:有条件改期
     * Required: false
     * Example Value: 
     */
    private $changeRuleType;

    /**
     * @param int $changeRuleType
     * 改期规则 1:不能改期 2:无条件改期 3:有条件改期
     * Example Value: 
     */
    public function setChangeRuleType($changeRuleType)
    {
        $this->changeRuleType             = $changeRuleType;
        $this->apiParas["changeRuleType"]  = $changeRuleType;
    }

    public function getChangeRuleType()
    {
        return $this->changeRuleType;
    }

    /**
     * @param string $refundRuleDesc
     * 有条件退票描述
     * Required: false
     * Example Value: 
     */
    private $refundRuleDesc;

    /**
     * @param string $refundRuleDesc
     * 有条件退票描述
     * Example Value: 
     */
    public function setRefundRuleDesc($refundRuleDesc)
    {
        $this->refundRuleDesc             = $refundRuleDesc;
        $this->apiParas["refundRuleDesc"]  = $refundRuleDesc;
    }

    public function getRefundRuleDesc()
    {
        return $this->refundRuleDesc;
    }

    /**
     * @param string $changeRuleDesc
     * 有条件改期描述
     * Required: false
     * Example Value: 
     */
    private $changeRuleDesc;

    /**
     * @param string $changeRuleDesc
     * 有条件改期描述
     * Example Value: 
     */
    public function setChangeRuleDesc($changeRuleDesc)
    {
        $this->changeRuleDesc             = $changeRuleDesc;
        $this->apiParas["changeRuleDesc"]  = $changeRuleDesc;
    }

    public function getChangeRuleDesc()
    {
        return $this->changeRuleDesc;
    }

    /**
     * @param string $bookingInfo
     * 预定须知
     * Required: false
     * Example Value: 
     */
    private $bookingInfo;

    /**
     * @param string $bookingInfo
     * 预定须知
     * Example Value: 
     */
    public function setBookingInfo($bookingInfo)
    {
        $this->bookingInfo             = $bookingInfo;
        $this->apiParas["bookingInfo"]  = $bookingInfo;
    }

    public function getBookingInfo()
    {
        return $this->bookingInfo;
    }

}