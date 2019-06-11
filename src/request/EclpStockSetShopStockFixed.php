<?php

namespace JD\request;

/**
 * 店铺库存固定值初始化修改
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3391&apiName=jingdong.eclp.stock.setShopStockFixed
 * Class EclpStockSetShopStockFixed
 * @package Jd\request
 */
class EclpStockSetShopStockFixed
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.setShopStockFixed";
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
     * @param String $requestId
     * 请求编号；唯一确定本次请求; 长度50
     * Required: true
     * Example Value: abc
     */
    private $requestId;

    /**
     * @param String $requestId
     * 请求编号；唯一确定本次请求; 长度50
     * Example Value: abc
     */
    public function setRequestId($requestId)
    {
        $this->requestId             = $requestId;
        $this->apiParas["requestId"]  = $requestId;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param String $deptNo
     * 事业部编码；长度50
     * Required: true
     * Example Value: abc
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编码；长度50
     * Example Value: abc
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
     * @param String $shopNo
     * 店铺编码；长度50
     * Required: true
     * Example Value: abc
     */
    private $shopNo;

    /**
     * @param String $shopNo
     * 店铺编码；长度50
     * Example Value: abc
     */
    public function setShopNo($shopNo)
    {
        $this->shopNo             = $shopNo;
        $this->apiParas["shopNo"]  = $shopNo;
    }

    public function getShopNo()
    {
        return $this->shopNo;
    }

    /**
     * @param String $warehouseNo
     * 库房编码；长度50
     * Required: true
     * Example Value: abc
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 库房编码；长度50
     * Example Value: abc
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
     * @param Number $stockNum
     * 数量
     * Required: true
     * Example Value: 1
     */
    private $stockNum;

    /**
     * @param Number $stockNum
     * 数量
     * Example Value: 1
     */
    public function setStockNum($stockNum)
    {
        $this->stockNum             = $stockNum;
        $this->apiParas["stockNum"]  = $stockNum;
    }

    public function getStockNum()
    {
        return $this->stockNum;
    }

    /**
     * @param String $goodsNo
     * 商品编码；长度50
     * Required: true
     * Example Value: abc
     */
    private $goodsNo;

    /**
     * @param String $goodsNo
     * 商品编码；长度50
     * Example Value: abc
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goodsNo"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param Number $shopType
     * 店铺类型；默认：5（vmi店铺）
     * Required: false
     * Example Value: 5
     */
    private $shopType;

    /**
     * @param Number $shopType
     * 店铺类型；默认：5（vmi店铺）
     * Example Value: 5
     */
    public function setShopType($shopType)
    {
        $this->shopType             = $shopType;
        $this->apiParas["shopType"]  = $shopType;
    }

    public function getShopType()
    {
        return $this->shopType;
    }

    /**
     * @param String $opUser
     * 操作人；长度50
     * Required: true
     * Example Value: abc
     */
    private $opUser;

    /**
     * @param String $opUser
     * 操作人；长度50
     * Example Value: abc
     */
    public function setOpUser($opUser)
    {
        $this->opUser             = $opUser;
        $this->apiParas["opUser"]  = $opUser;
    }

    public function getOpUser()
    {
        return $this->opUser;
    }

}