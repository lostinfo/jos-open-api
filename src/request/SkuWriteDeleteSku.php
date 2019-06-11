<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * Sku删除
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1323&apiName=jingdong.sku.write.deleteSku
 * Class SkuWriteDeleteSku
 * @package Jd\request
 */
class SkuWriteDeleteSku
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sku.write.deleteSku";
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

}