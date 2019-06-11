<?php

namespace JD\request;

/**
 * 查询.快车.指定单元基本信息
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1281&apiName=jingdong.dsp.adkcunit.adgroup.get
 * Class DspAdkcunitAdgroupGet
 * @package Jd\request
 */
class DspAdkcunitAdgroupGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkcunit.adgroup.get";
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
     * @param Number $id
     * 单元id
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number $id
     * 单元id
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