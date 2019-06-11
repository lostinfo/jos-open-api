<?php

namespace JD\request;

/**
 * 操作.快车.删除创意（支持批量）
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1406&apiName=jingdong.dsp.kc.ad.delete
 * Class DspKcAdDelete
 * @package Jd\request
 */
class DspKcAdDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.ad.delete";
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
     * @param Number[] $id
     * 创意id
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number[] $id
     * 创意id
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}