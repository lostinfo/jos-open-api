<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据门店加商家商品编号查询商品详情
 * 商品通API-商品通API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=361&apiId=2725&apiName=jingdong.innovation.store.read.getProductInfoByStoreIdAndArticleNumber
 * Class InnovationStoreReadGetProductInfoByStoreIdAndArticleNumber
 * @package Jd\request
 */
class InnovationStoreReadGetProductInfoByStoreIdAndArticleNumber
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.innovation.store.read.getProductInfoByStoreIdAndArticleNumber";
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
     * @param string $paramStrin
     * 根据门店加商家商品编号查询商品详情参数
     * Required: true
     * Example Value: 
     */
    private $paramStrin;

    /**
     * @param string $paramStrin
     * 根据门店加商家商品编号查询商品详情参数
     * Example Value: 
     */
    public function setParamStrin($paramStrin)
    {
        $this->paramStrin             = $paramStrin;
        $this->apiParas["paramStrin"]  = $paramStrin;
    }

    public function getParamStrin()
    {
        return $this->paramStrin;
    }

}