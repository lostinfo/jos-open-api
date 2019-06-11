<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据skuId 集合查询关联关系
 * 视频服务API-视频的添加 更新 删除 查询 搜索 功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=67&apiId=2486&apiName=jingdong.pop.video.sku.relative.by.sku.ids.query
 * Class PopVideoSkuRelativeBySkuIdsQuery
 * @package Jd\request
 */
class PopVideoSkuRelativeBySkuIdsQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.video.sku.relative.by.sku.ids.query";
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
     * @param int $productId
     * 商品id
     * Required: true
     * Example Value: 
     */
    private $productId;

    /**
     * @param int $productId
     * 商品id
     * Example Value: 
     */
    public function setProductId($productId)
    {
        $this->productId             = $productId;
        $this->apiParas["productId"]  = $productId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int[] $skuIds
     * skuId集合
     * Required: true
     * Example Value: 
     */
    private $skuIds;

    /**
     * @param int[] $skuIds
     * skuId集合
     * Example Value: 
     */
    public function setSkuIds($skuIds)
    {
        $this->skuIds             = $skuIds;
        $this->apiParas["sku_ids"]  = $skuIds;
    }

    public function getSkuIds()
    {
        return $this->skuIds;
    }

}