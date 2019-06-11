<?php

namespace JD\request;

/**
 * 查询商家基本信息
 * 店铺API-京东店铺API，包含提供商家、商家店铺基本信息及店内分类操作查询等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=88&apiId=493&apiName=jingdong.seller.vender.info.get
 * Class SellerVenderInfoGet
 * @package Jd\request
 */
class SellerVenderInfoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.vender.info.get";
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
     * @param String $extJsonParam
     * 预留的参数为，json格式
     * Required: false
     * Example Value: 
     */
    private $extJsonParam;

    /**
     * @param String $extJsonParam
     * 预留的参数为，json格式
     * Example Value: 
     */
    public function setExtJsonParam($extJsonParam)
    {
        $this->extJsonParam             = $extJsonParam;
        $this->apiParas["ext_json_param"]  = $extJsonParam;
    }

    public function getExtJsonParam()
    {
        return $this->extJsonParam;
    }

}