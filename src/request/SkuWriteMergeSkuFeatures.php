<?php

namespace JD\request;

/**
 * sku打标
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1259&apiName=jingdong.sku.write.mergeSkuFeatures
 * Class SkuWriteMergeSkuFeatures
 * @package Jd\request
 */
class SkuWriteMergeSkuFeatures
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sku.write.mergeSkuFeatures";
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
     * @param Number $skuId
     * skuId
     * Required: true
     * Example Value: skuId
     */
    private $skuId;

    /**
     * @param Number $skuId
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
     * @param String[] $key
     * SKU特殊标key
     * Required: false
     * Example Value: featureKey
     */
    private $key;

    /**
     * @param String[] $key
     * SKU特殊标key
     * Example Value: featureKey
     */
    public function setKey($key)
    {
        $this->key             = $key;
        $this->apiParas["featureKey"]  = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param String[] $value
     * SKU特殊标值
     * Required: false
     * Example Value: featureValue
     */
    private $value;

    /**
     * @param String[] $value
     * SKU特殊标值
     * Example Value: featureValue
     */
    public function setValue($value)
    {
        $this->value             = $value;
        $this->apiParas["featureValue"]  = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

}