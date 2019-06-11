<?php

namespace JD\request;

/**
 * 查询商品信息大字段信息
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3131&apiName=jingdong.b2b.product.getBigField
 * Class B2bProductGetBigField
 * @package Jd\request
 */
class B2bProductGetBigField
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.product.getBigField";
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
     * 自营商品skuId
     * Required: true
     * Example Value: 10924541
     */
    private $skuId;

    /**
     * @param Number $skuId
     * 自营商品skuId
     * Example Value: 10924541
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
     * @param String[] $fieldKeys
     * 大字段属性
     * Required: true
     * Example Value: WARE_QD:包装清单,PROP_CODE:规格参数,WDIS:商品介绍,W_READ_ME:商品说明,SHOUHOU:售后,SERVICE:服务
     */
    private $fieldKeys;

    /**
     * @param String[] $fieldKeys
     * 大字段属性
     * Example Value: WARE_QD:包装清单,PROP_CODE:规格参数,WDIS:商品介绍,W_READ_ME:商品说明,SHOUHOU:售后,SERVICE:服务
     */
    public function setFieldKeys($fieldKeys)
    {
        $this->fieldKeys             = $fieldKeys;
        $this->apiParas["fieldKeys"]  = $fieldKeys;
    }

    public function getFieldKeys()
    {
        return $this->fieldKeys;
    }

}