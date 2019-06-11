<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询.通用.所有地域及ID映射关系
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1307&apiName=jingdong.dsp.kuaichearea.querycity
 * Class DspKuaicheareaQuerycity
 * @package Jd\request
 */
class DspKuaicheareaQuerycity
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kuaichearea.querycity";
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