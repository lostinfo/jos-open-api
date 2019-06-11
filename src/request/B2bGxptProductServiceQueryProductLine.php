<?php

namespca Lostinfo\JosOpenApi;

/**
 * 供销商品产品线查询接口
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3058&apiName=jingdong.b2b.gxpt.productService.queryProductLine
 * Class B2bGxptProductServiceQueryProductLine
 * @package Jd\request
 */
class B2bGxptProductServiceQueryProductLine
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.gxpt.productService.queryProductLine";
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
     * @param int $param1
     * 供应商id
     * Required: true
     * Example Value: 
     */
    private $param1;

    /**
     * @param int $param1
     * 供应商id
     * Example Value: 
     */
    public function setParam1($param1)
    {
        $this->param1             = $param1;
        $this->apiParas["venderId"]  = $param1;
    }

    public function getParam1()
    {
        return $this->param1;
    }

}