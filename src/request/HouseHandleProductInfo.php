<?php

namespca Lostinfo\JosOpenApi;

/**
 * 添加修改商品信息
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=3962&apiName=jingdong.house.handleProductInfo
 * Class HouseHandleProductInfo
 * @package Jd\request
 */
class HouseHandleProductInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.house.handleProductInfo";
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
     * @param string $productInfo
     * 商品信息
     * Required: true
     * Example Value: 
     */
    private $productInfo;

    /**
     * @param string $productInfo
     * 商品信息
     * Example Value: 
     */
    public function setProductInfo($productInfo)
    {
        $this->productInfo             = $productInfo;
        $this->apiParas["productInfo"]  = $productInfo;
    }

    public function getProductInfo()
    {
        return $this->productInfo;
    }

}