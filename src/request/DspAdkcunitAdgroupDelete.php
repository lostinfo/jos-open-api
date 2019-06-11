<?php

namespace JD\request;

/**
 * 操作.快车.删除单元
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1407&apiName=jingdong.dsp.adkcunit.adgroup.delete
 * Class DspAdkcunitAdgroupDelete
 * @package Jd\request
 */
class DspAdkcunitAdgroupDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkcunit.adgroup.delete";
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
     * 单元ID
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number[] $id
     * 单元ID
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["adGroupId"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}