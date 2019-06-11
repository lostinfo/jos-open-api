<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询商品被关注人数
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2477&apiName=jingdong.follow.product.read.queryForCountByProductId
 * Class FollowProductReadQueryForCountByProductId
 * @package Jd\request
 */
class FollowProductReadQueryForCountByProductId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.follow.product.read.queryForCountByProductId";
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
     * 商品ID
     * Required: true
     * Example Value: 
     */
    private $productId;

    /**
     * @param int $productId
     * 商品ID
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

}