<?php

namespace JD\request;

/**
 * 根据登录pin查询商家基本信息
 * 店铺API-京东店铺API，包含提供商家、商家店铺基本信息及店内分类操作查询等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=88&apiId=2198&apiName=jingdong.vender.info.queryByPin
 * Class VenderInfoQueryByPin
 * @package Jd\request
 */
class VenderInfoQueryByPin
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.info.queryByPin";
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