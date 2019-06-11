<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=3493&apiName=jingdong.dsp.kc.usertag.get
 * Class DspKcUsertagGet
 * @package Jd\request
 */
class DspKcUsertagGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.usertag.get";
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