<?php

namespca Lostinfo\JosOpenApi;

/**
 * 促销sku列表查询
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=2301&apiName=jingdong.seller.promotion.sku.list
 * Class SellerPromotionSkuList
 * @package Jd\request
 */
class SellerPromotionSkuList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.sku.list";
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
     * @param int $wareId
     * 商品ID(可选)
     * Required: false
     * Example Value: 321321
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品ID(可选)
     * Example Value: 321321
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["ware_id"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param int $skuId
     * skuId(可选)
     * Required: false
     * Example Value: 123123
     */
    private $skuId;

    /**
     * @param int $skuId
     * skuId(可选)
     * Example Value: 123123
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_id"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param int $promoId
     * 促销编号
     * Required: true
     * Example Value: 654321
     */
    private $promoId;

    /**
     * @param int $promoId
     * 促销编号
     * Example Value: 654321
     */
    public function setPromoId($promoId)
    {
        $this->promoId             = $promoId;
        $this->apiParas["promo_id"]  = $promoId;
    }

    public function getPromoId()
    {
        return $this->promoId;
    }

    /**
     * @param int $bindType
     * 绑定类型, 可选值：主商品（1），赠品（2）。(赠品促销、满减送促销中的赠品需要设置为2，其余均设置为1)
     * Required: false
     * Example Value: 1
     */
    private $bindType;

    /**
     * @param int $bindType
     * 绑定类型, 可选值：主商品（1），赠品（2）。(赠品促销、满减送促销中的赠品需要设置为2，其余均设置为1)
     * Example Value: 1
     */
    public function setBindType($bindType)
    {
        $this->bindType             = $bindType;
        $this->apiParas["bind_type"]  = $bindType;
    }

    public function getBindType()
    {
        return $this->bindType;
    }

    /**
     * @param int $page
     * 页码（必须为正整数）
     * Required: false
     * Example Value: 1
     */
    private $page;

    /**
     * @param int $page
     * 页码（必须为正整数）
     * Example Value: 1
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $size
     * 每页记录个数（每页最少1个，最多10个）
     * Required: false
     * Example Value: 10
     */
    private $size;

    /**
     * @param int $size
     * 每页记录个数（每页最少1个，最多10个）
     * Example Value: 10
     */
    public function setSize($size)
    {
        $this->size             = $size;
        $this->apiParas["size"]  = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

}