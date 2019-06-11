<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询.通用.历史用词（关键词）
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1300&apiName=jingdong.dsp.adkckeyword.usedKeyword.get
 * Class DspAdkckeywordUsedKeywordGet
 * @package Jd\request
 */
class DspAdkckeywordUsedKeywordGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkckeyword.usedKeyword.get";
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