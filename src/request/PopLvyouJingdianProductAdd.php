<?php

namespace JD\request;

/**
 * 添加景点商品
 * 景点门票API-POP虚拟业务,开放景点门票业务API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=131&apiId=783&apiName=jingdong.pop.lvyou.jingdian.product.add
 * Class PopLvyouJingdianProductAdd
 * @package Jd\request
 */
class PopLvyouJingdianProductAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.lvyou.jingdian.product.add";
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
     * @param Number $jingdianId
     * 景点ID
     * Required: true
     * Example Value: 
     */
    private $jingdianId;

    /**
     * @param Number $jingdianId
     * 景点ID
     * Example Value: 
     */
    public function setJingdianId($jingdianId)
    {
        $this->jingdianId             = $jingdianId;
        $this->apiParas["jingdianId"]  = $jingdianId;
    }

    public function getJingdianId()
    {
        return $this->jingdianId;
    }

    /**
     * @param Number $chargeItemId
     * 景点收费套装ID
     * Required: true
     * Example Value: 
     */
    private $chargeItemId;

    /**
     * @param Number $chargeItemId
     * 景点收费套装ID
     * Example Value: 
     */
    public function setChargeItemId($chargeItemId)
    {
        $this->chargeItemId             = $chargeItemId;
        $this->apiParas["chargeItemId"]  = $chargeItemId;
    }

    public function getChargeItemId()
    {
        return $this->chargeItemId;
    }

    /**
     * @param Number $chargeItemType
     * 景点收费套装类型，1:兑换码，2:二维码，3:身份证
     * Required: true
     * Example Value: 
     */
    private $chargeItemType;

    /**
     * @param Number $chargeItemType
     * 景点收费套装类型，1:兑换码，2:二维码，3:身份证
     * Example Value: 
     */
    public function setChargeItemType($chargeItemType)
    {
        $this->chargeItemType             = $chargeItemType;
        $this->apiParas["chargeItemType"]  = $chargeItemType;
    }

    public function getChargeItemType()
    {
        return $this->chargeItemType;
    }

    /**
     * @param String $supplierProductId
     * 供应商商品ID
     * Required: true
     * Example Value: 
     */
    private $supplierProductId;

    /**
     * @param String $supplierProductId
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
     * @param String $productName
     * 商品名称
     * Required: true
     * Example Value: 
     */
    private $productName;

    /**
     * @param String $productName
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
     * @param Number $stockCountType
     * 库存计数类型，1:拍下减库存，2:付款减库存
     * Required: true
     * Example Value: 
     */
    private $stockCountType;

    /**
     * @param Number $stockCountType
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
     * @param Number $beforeReserveMinutes
     * 提前预定分钟数，0:随时可以下单
     * Required: true
     * Example Value: 
     */
    private $beforeReserveMinutes;

    /**
     * @param Number $beforeReserveMinutes
     * 提前预定分钟数，0:随时可以下单
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
     * @param String $pictureListJson
     * 商品图片列表
     * Required: true
     * Example Value: 
     */
    private $pictureListJson;

    /**
     * @param String $pictureListJson
     * 商品图片列表
     * Example Value: 
     */
    public function setPictureListJson($pictureListJson)
    {
        $this->pictureListJson             = $pictureListJson;
        $this->apiParas["pictureListJson"]  = $pictureListJson;
    }

    public function getPictureListJson()
    {
        return $this->pictureListJson;
    }

    /**
     * @param String $productPriceListJson
     * 商品价格日期列表
     * Required: true
     * Example Value: 
     */
    private $productPriceListJson;

    /**
     * @param String $productPriceListJson
     * 商品价格日期列表
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
     * @param String $productDesc
     * 商品描述富文本
     * Required: true
     * Example Value: 
     */
    private $productDesc;

    /**
     * @param String $productDesc
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
     * @param Number $refundRuleType
     * 退票规则 1:不能退票 2:无条件退票 3:有条件退票
     * Required: true
     * Example Value: 
     */
    private $refundRuleType;

    /**
     * @param Number $refundRuleType
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
     * @param Number $changeRuleType
     * 改期规则 1:不能改期 2:无条件改期 3:有条件改期
     * Required: true
     * Example Value: 
     */
    private $changeRuleType;

    /**
     * @param Number $changeRuleType
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
     * @param String $refundRuleDesc
     * 有条件退票描述
     * Required: false
     * Example Value: 
     */
    private $refundRuleDesc;

    /**
     * @param String $refundRuleDesc
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
     * @param String $changeRuleDesc
     * 有条件改期描述
     * Required: false
     * Example Value: 
     */
    private $changeRuleDesc;

    /**
     * @param String $changeRuleDesc
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
     * @param String $bookingInfo
     * 预定须知
     * Required: true
     * Example Value: 
     */
    private $bookingInfo;

    /**
     * @param String $bookingInfo
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