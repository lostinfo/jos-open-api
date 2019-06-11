<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取销售平台信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=947&apiName=jingdong.eclp.master.querySpSource
 * Class EclpMasterQuerySpSource
 * @package Jd\request
 */
class EclpMasterQuerySpSource
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.querySpSource";
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

}