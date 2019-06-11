<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询.通用.京准通账号余额
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=887&apiName=jingdong.dsp.balance.get
 * Class DspBalanceGet
 * @package Jd\request
 */
class DspBalanceGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.balance.get";
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