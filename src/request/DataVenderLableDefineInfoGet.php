<?php

namespace JD\request;

/**
 * 标签定义信息
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3644&apiName=jingdong.data.vender.lable.define.info.get
 * Class DataVenderLableDefineInfoGet
 * @package Jd\request
 */
class DataVenderLableDefineInfoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.lable.define.info.get";
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
     * @param String $begroup
     * 所属分组
     * Required: false
     * Example Value: 
     */
    private $begroup;

    /**
     * @param String $begroup
     * 所属分组
     * Example Value: 
     */
    public function setBegroup($begroup)
    {
        $this->begroup             = $begroup;
        $this->apiParas["begroup"]  = $begroup;
    }

    public function getBegroup()
    {
        return $this->begroup;
    }

    /**
     * @param Number $version
     * 版本
     * Required: true
     * Example Value: 
     */
    private $version;

    /**
     * @param Number $version
     * 版本
     * Example Value: 
     */
    public function setVersion($version)
    {
        $this->version             = $version;
        $this->apiParas["lversion"]  = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

}