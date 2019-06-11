<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询.快车.获取商品创意
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1290&apiName=jingdong.dsp.kc.ad.querySkuInfo
 * Class DspKcAdQuerySkuInfo
 * @package Jd\request
 */
class DspKcAdQuerySkuInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.ad.querySkuInfo";
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
     * 商品ID
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * 商品ID
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
     * @param int $adGroupId
     * 单元ID
     * Required: true
     * Example Value: 
     */
    private $adGroupId;

    /**
     * @param int $adGroupId
     * 单元ID
     * Example Value: 
     */
    public function setAdGroupId($adGroupId)
    {
        $this->adGroupId             = $adGroupId;
        $this->apiParas["adGroupId"]  = $adGroupId;
    }

    public function getAdGroupId()
    {
        return $this->adGroupId;
    }

}