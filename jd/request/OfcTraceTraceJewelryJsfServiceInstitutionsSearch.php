<?php

namespace JD\request;

/**
 * 
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=3046&apiName=jingdong.ofc.trace.traceJewelryJsfService.institutionsSearch
 * Class OfcTraceTraceJewelryJsfServiceInstitutionsSearch
 * @package Jd\request
 */
class OfcTraceTraceJewelryJsfServiceInstitutionsSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ofc.trace.traceJewelryJsfService.institutionsSearch";
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