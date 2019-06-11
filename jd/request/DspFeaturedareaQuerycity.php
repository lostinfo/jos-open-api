<?php

namespace JD\request;

/**
 * 
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=877&apiName=jingdong.dsp.featuredarea.querycity
 * Class DspFeaturedareaQuerycity
 * @package Jd\request
 */
class DspFeaturedareaQuerycity
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.featuredarea.querycity";
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