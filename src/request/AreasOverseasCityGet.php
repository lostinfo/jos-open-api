<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询国内海外二级地址
 * 京东地址库API-提供获取省|市|区县|乡镇级列表、返回IP地址对应的物理地址信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=68&apiId=2653&apiName=jingdong.areas.overseasCity.get
 * Class AreasOverseasCityGet
 * @package Jd\request
 */
class AreasOverseasCityGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.areas.overseasCity.get";
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
     * @param int $parentId
     * 地址父ID
     * Required: false
     * Example Value: 
     */
    private $parentId;

    /**
     * @param int $parentId
     * 地址父ID
     * Example Value: 
     */
    public function setParentId($parentId)
    {
        $this->parentId             = $parentId;
        $this->apiParas["parentId"]  = $parentId;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param int $useable
     * 状态值
     * Required: false
     * Example Value: 
     */
    private $useable;

    /**
     * @param int $useable
     * 状态值
     * Example Value: 
     */
    public function setUseable($useable)
    {
        $this->useable             = $useable;
        $this->apiParas["useable"]  = $useable;
    }

    public function getUseable()
    {
        return $this->useable;
    }

    /**
     * @param string $source
     * source
     * Required: false
     * Example Value: 
     */
    private $source;

    /**
     * @param string $source
     * source
     * Example Value: 
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

}