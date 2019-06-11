<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 地域定义信息
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3658&apiName=jingdong.data.vender.area.define.info.get
 * Class DataVenderAreaDefineInfoGet
 * @package Jd\request
 */
class DataVenderAreaDefineInfoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.area.define.info.get";
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
     * @param string $areaLevel
     * 地域级别,省:province 市:city 县:county
     * Required: true
     * Example Value: 
     */
    private $areaLevel;

    /**
     * @param string $areaLevel
     * 地域级别,省:province 市:city 县:county
     * Example Value: 
     */
    public function setAreaLevel($areaLevel)
    {
        $this->areaLevel             = $areaLevel;
        $this->apiParas["area_level"]  = $areaLevel;
    }

    public function getAreaLevel()
    {
        return $this->areaLevel;
    }

}