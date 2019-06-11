<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取sku库存信息
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1239&apiName=jingdong.stock.read.findSkuStock
 * Class StockReadFindSkuStock
 * @package Jd\request
 */
class StockReadFindSkuStock
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.stock.read.findSkuStock";
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
     * skuId
     * Required: true
     * Example Value: skuId
     */
    private $skuId;

    /**
     * @param int $skuId
     * skuId
     * Example Value: skuId
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
     * @param string[] $fields
     * 可选的返回的字段 例如 detailStock
     * Required: false
     * Example Value: [detailStock]
     */
    private $fields;

    /**
     * @param string[] $fields
     * 可选的返回的字段 例如 detailStock
     * Example Value: [detailStock]
     */
    public function setFields($fields)
    {
        $this->fields             = $fields;
        $this->apiParas["field"]  = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

}