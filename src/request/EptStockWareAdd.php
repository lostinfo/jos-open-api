<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 添加库存信息接口
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=1436&apiName=jingdong.ept.stock.ware.add
 * Class EptStockWareAdd
 * @package Jd\request
 */
class EptStockWareAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.stock.ware.add";
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
     * @param int $spuId
     * 商品编码(EPT系统商品编码)
     * Required: true
     * Example Value: 
     */
    private $spuId;

    /**
     * @param int $spuId
     * 商品编码(EPT系统商品编码)
     * Example Value: 
     */
    public function setSpuId($spuId)
    {
        $this->spuId             = $spuId;
        $this->apiParas["spuId"]  = $spuId;
    }

    public function getSpuId()
    {
        return $this->spuId;
    }

    /**
     * @param int $skuId
     * SKU编码(EPT系统SKU编码)
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * SKU编码(EPT系统SKU编码)
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param string $rfId
     * 商家SKU编码
     * Required: false
     * Example Value: 
     */
    private $rfId;

    /**
     * @param string $rfId
     * 商家SKU编码
     * Example Value: 
     */
    public function setRfId($rfId)
    {
        $this->rfId             = $rfId;
        $this->apiParas["rfId"]  = $rfId;
    }

    public function getRfId()
    {
        return $this->rfId;
    }

    /**
     * @param int $inStockAmount
     * 库存总数
     * Required: false
     * Example Value: 
     */
    private $inStockAmount;

    /**
     * @param int $inStockAmount
     * 库存总数
     * Example Value: 
     */
    public function setInStockAmount($inStockAmount)
    {
        $this->inStockAmount             = $inStockAmount;
        $this->apiParas["amountCount"]  = $inStockAmount;
    }

    public function getInStockAmount()
    {
        return $this->inStockAmount;
    }

}