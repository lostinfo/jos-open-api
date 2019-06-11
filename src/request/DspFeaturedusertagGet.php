<?php

namespca Lostinfo\JosOpenApi;

/**
 * 
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=872&apiName=jingdong.dsp.featuredusertag.get
 * Class DspFeaturedusertagGet
 * @package Jd\request
 */
class DspFeaturedusertagGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.featuredusertag.get";
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