<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取单个SKU
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1223&apiName=jingdong.sku.read.findSkuById
 * Class SkuReadFindSkuById
 * @package Jd\request
 */
class SkuReadFindSkuById
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sku.read.findSkuById";
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
     * 自定义返回字段
     * Required: false
     * Example Value: 如: categoryId、stockNum、skuName
     */
    private $fields;

    /**
     * @param string[] $fields
     * 自定义返回字段
     * Example Value: 如: categoryId、stockNum、skuName
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