<?php

namespace JD\request;

/**
 * 操作.快车.修改指定单元投放地域
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1297&apiName=jingdong.dsp.adkcunit.areadirection.update
 * Class DspAdkcunitAreadirectionUpdate
 * @package Jd\request
 */
class DspAdkcunitAreadirectionUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkcunit.areadirection.update";
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
        $this->apiParas["adGroupId"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param String $areaId
     * 自定义请填区域id；不限：0
     * Required: true
     * Example Value: 
     */
    private $areaId;

    /**
     * @param String $areaId
     * 自定义请填区域id；不限：0
     * Example Value: 
     */
    public function setAreaId($areaId)
    {
        $this->areaId             = $areaId;
        $this->apiParas["areaId"]  = $areaId;
    }

    public function getAreaId()
    {
        return $this->areaId;
    }

}