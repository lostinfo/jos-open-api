<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据品牌id查询品牌名称信息
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3132&apiName=jingdong.BrandInfoService.queryBrandInfoByBid
 * Class BrandInfoServiceQueryBrandInfoByBid
 * @package Jd\request
 */
class BrandInfoServiceQueryBrandInfoByBid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.BrandInfoService.queryBrandInfoByBid";
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
     * @param int $brandId
     * 品牌id
     * Required: true
     * Example Value: 
     */
    private $brandId;

    /**
     * @param int $brandId
     * 品牌id
     * Example Value: 
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brandId"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

}