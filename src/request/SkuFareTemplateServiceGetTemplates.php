<?php

namespace JD\request;

/**
 * 查询单品模板
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=1020&apiName=jingdong.SkuFareTemplateService.getTemplates
 * Class SkuFareTemplateServiceGetTemplates
 * @package Jd\request
 */
class SkuFareTemplateServiceGetTemplates
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.SkuFareTemplateService.getTemplates";
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