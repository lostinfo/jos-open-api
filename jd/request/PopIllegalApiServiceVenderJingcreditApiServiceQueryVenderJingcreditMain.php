<?php

namespace JD\request;

/**
 * 根据商家获取最新的京信用主数据信息
 * 拍拍业务-拍拍业务相关接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=382&apiId=3503&apiName=jingdong.pop.illegal.api.service.VenderJingcreditApiService.queryVenderJingcreditMain
 * Class PopIllegalApiServiceVenderJingcreditApiServiceQueryVenderJingcreditMain
 * @package Jd\request
 */
class PopIllegalApiServiceVenderJingcreditApiServiceQueryVenderJingcreditMain
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.illegal.api.service.VenderJingcreditApiService.queryVenderJingcreditMain";
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