<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询.海投.计划信息
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1917&apiName=jingdong.dsp.kc.htcampain.list
 * Class DspKcHtcampainList
 * @package Jd\request
 */
class DspKcHtcampainList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.htcampain.list";
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