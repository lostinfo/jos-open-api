<?php

namespace Lostinfo\JosOpenApi;

/**
 * 新建等级逻辑调整单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2862&apiName=jingdong.eclp.inside.addLcOrder
 * Class EclpInsideAddLcOrder
 * @package Jd\request
 */
class EclpInsideAddLcOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.inside.addLcOrder";
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
     * @param string $sellerLcNo
     * 商家等级调整单号,唯一，必填项
     * Required: true
     * Example Value: 
     */
    private $sellerLcNo;

    /**
     * @param string $sellerLcNo
     * 商家等级调整单号,唯一，必填项
     * Example Value: 
     */
    public function setSellerLcNo($sellerLcNo)
    {
        $this->sellerLcNo             = $sellerLcNo;
        $this->apiParas["sellerLcNo"]  = $sellerLcNo;
    }

    public function getSellerLcNo()
    {
        return $this->sellerLcNo;
    }

    /**
     * @param string $sellerNo
     * 开放平台商家编码,必填项
     * Required: true
     * Example Value: 
     */
    private $sellerNo;

    /**
     * @param string $sellerNo
     * 开放平台商家编码,必填项
     * Example Value: 
     */
    public function setSellerNo($sellerNo)
    {
        $this->sellerNo             = $sellerNo;
        $this->apiParas["sellerNo"]  = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    /**
     * @param string $wareHouseNo
     * 开放平台入库库房编号,必填项
     * Required: true
     * Example Value: 
     */
    private $wareHouseNo;

    /**
     * @param string $wareHouseNo
     * 开放平台入库库房编号,必填项
     * Example Value: 
     */
    public function setWareHouseNo($wareHouseNo)
    {
        $this->wareHouseNo             = $wareHouseNo;
        $this->apiParas["wareHouseNo"]  = $wareHouseNo;
    }

    public function getWareHouseNo()
    {
        return $this->wareHouseNo;
    }

    /**
     * @param string $deptNo
     * 开放平台事业部编码
     * Required: true
     * Example Value: 
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 开放平台事业部编码
     * Example Value: 
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
     * @param string $outsideLogicStock
     * 调出逻辑库位
     * Required: true
     * Example Value: 
     */
    private $outsideLogicStock;

    /**
     * @param string $outsideLogicStock
     * 调出逻辑库位
     * Example Value: 
     */
    public function setOutsideLogicStock($outsideLogicStock)
    {
        $this->outsideLogicStock             = $outsideLogicStock;
        $this->apiParas["outsideLogicStock"]  = $outsideLogicStock;
    }

    public function getOutsideLogicStock()
    {
        return $this->outsideLogicStock;
    }

    /**
     * @param string $insideLogicStock
     * 调入逻辑库位
     * Required: true
     * Example Value: 
     */
    private $insideLogicStock;

    /**
     * @param string $insideLogicStock
     * 调入逻辑库位
     * Example Value: 
     */
    public function setInsideLogicStock($insideLogicStock)
    {
        $this->insideLogicStock             = $insideLogicStock;
        $this->apiParas["insideLogicStock"]  = $insideLogicStock;
    }

    public function getInsideLogicStock()
    {
        return $this->insideLogicStock;
    }

    /**
     * @param  $lack
     * 是否允许缺量（1、是；0、否）
     * Required: true
     * Example Value: 
     */
    private $lack;

    /**
     * @param  $lack
     * 是否允许缺量（1、是；0、否）
     * Example Value: 
     */
    public function setLack($lack)
    {
        $this->lack             = $lack;
        $this->apiParas["lack"]  = $lack;
    }

    public function getLack()
    {
        return $this->lack;
    }

    /**
     * @param string[] $orderLine
     * 行号
     * Required: false
     * Example Value: 
     */
    private $orderLine;

    /**
     * @param string[] $orderLine
     * 行号
     * Example Value: 
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
     * @param string[] $sellerGoodsSign
     * 商家商品编码, 该字段为必填项
     * Required: true
     * Example Value: 
     */
    private $sellerGoodsSign;

    /**
     * @param string[] $sellerGoodsSign
     * 商家商品编码, 该字段为必填项
     * Example Value: 
     */
    public function setSellerGoodsSign($sellerGoodsSign)
    {
        $this->sellerGoodsSign             = $sellerGoodsSign;
        $this->apiParas["isvGoodsNo"]  = $sellerGoodsSign;
    }

    public function getSellerGoodsSign()
    {
        return $this->sellerGoodsSign;
    }

    /**
     * @param string[] $outGoodsLevel
     * 调出原商品等级, 该字段为必填项
     * Required: true
     * Example Value: 
     */
    private $outGoodsLevel;

    /**
     * @param string[] $outGoodsLevel
     * 调出原商品等级, 该字段为必填项
     * Example Value: 
     */
    public function setOutGoodsLevel($outGoodsLevel)
    {
        $this->outGoodsLevel             = $outGoodsLevel;
        $this->apiParas["outGoodsLevel"]  = $outGoodsLevel;
    }

    public function getOutGoodsLevel()
    {
        return $this->outGoodsLevel;
    }

    /**
     * @param string[] $inGoodsLevel
     * 调入目标商品等级, 该字段为必填项
     * Required: true
     * Example Value: 
     */
    private $inGoodsLevel;

    /**
     * @param string[] $inGoodsLevel
     * 调入目标商品等级, 该字段为必填项
     * Example Value: 
     */
    public function setInGoodsLevel($inGoodsLevel)
    {
        $this->inGoodsLevel             = $inGoodsLevel;
        $this->apiParas["inGoodsLevel"]  = $inGoodsLevel;
    }

    public function getInGoodsLevel()
    {
        return $this->inGoodsLevel;
    }

    /**
     * @param int[] $planQty
     * 计划调整数量，该字段为必填项
     * Required: true
     * Example Value: 
     */
    private $planQty;

    /**
     * @param int[] $planQty
     * 计划调整数量，该字段为必填项
     * Example Value: 
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

}