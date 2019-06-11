<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 设置门店库存
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2980&apiName=jingdong.stock.write.updateSkuSiteStock
 * Class StockWriteUpdateSkuSiteStock
 * @package Jd\request
 */
class StockWriteUpdateSkuSiteStock
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.stock.write.updateSkuSiteStock";
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
     * @param int $skuId
     * sku编号
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * sku编号
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
     * @param int $siteId
     * 门店Id
     * Required: true
     * Example Value: 
     */
    private $siteId;

    /**
     * @param int $siteId
     * 门店Id
     * Example Value: 
     */
    public function setSiteId($siteId)
    {
        $this->siteId             = $siteId;
        $this->apiParas["siteId"]  = $siteId;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * @param string $venderSource
     * 门店来源，固定传4(门店帮)
     * Required: true
     * Example Value: 
     */
    private $venderSource;

    /**
     * @param string $venderSource
     * 门店来源，固定传4(门店帮)
     * Example Value: 
     */
    public function setVenderSource($venderSource)
    {
        $this->venderSource             = $venderSource;
        $this->apiParas["venderSource"]  = $venderSource;
    }

    public function getVenderSource()
    {
        return $this->venderSource;
    }

    /**
     * @param int $stockNum
     * 现货库存
     * Required: false
     * Example Value: 
     */
    private $stockNum;

    /**
     * @param int $stockNum
     * 现货库存
     * Example Value: 
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
     * @param int $orderBookingNum
     * 订单预订数量,只读属性
     * Required: false
     * Example Value: 
     */
    private $orderBookingNum;

    /**
     * @param int $orderBookingNum
     * 订单预订数量,只读属性
     * Example Value: 
     */
    public function setOrderBookingNum($orderBookingNum)
    {
        $this->orderBookingNum             = $orderBookingNum;
        $this->apiParas["orderBookingNum"]  = $orderBookingNum;
    }

    public function getOrderBookingNum()
    {
        return $this->orderBookingNum;
    }

    /**
     * @param int $appBookingNum
     * 锁定库存数量,只读属性
     * Required: false
     * Example Value: 
     */
    private $appBookingNum;

    /**
     * @param int $appBookingNum
     * 锁定库存数量,只读属性
     * Example Value: 
     */
    public function setAppBookingNum($appBookingNum)
    {
        $this->appBookingNum             = $appBookingNum;
        $this->apiParas["appBookingNum"]  = $appBookingNum;
    }

    public function getAppBookingNum()
    {
        return $this->appBookingNum;
    }

    /**
     * @param int $canUsedNum
     * 可用库存=现货-订单预订-锁定库存,只读属性
     * Required: false
     * Example Value: 
     */
    private $canUsedNum;

    /**
     * @param int $canUsedNum
     * 可用库存=现货-订单预订-锁定库存,只读属性
     * Example Value: 
     */
    public function setCanUsedNum($canUsedNum)
    {
        $this->canUsedNum             = $canUsedNum;
        $this->apiParas["canUsedNum"]  = $canUsedNum;
    }

    public function getCanUsedNum()
    {
        return $this->canUsedNum;
    }

}