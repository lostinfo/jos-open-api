<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 商品批量创建和修改
 * 商品通API-商品通API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=361&apiId=2718&apiName=jingdong.innovation.product.write.createSkus
 * Class InnovationProductWriteCreateSkus
 * @package Jd\request
 */
class InnovationProductWriteCreateSkus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.innovation.product.write.createSkus";
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
     * 创建商品参数
     * Required: true
     * Example Value: 
     */
    private $paramStrin;

    /**
     * @param string $paramStrin
     * 创建商品参数
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