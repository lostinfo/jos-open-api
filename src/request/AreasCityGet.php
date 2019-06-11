<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取市级信息列表——新市级地址接口
 * 京东地址库API-提供获取省|市|区县|乡镇级列表、返回IP地址对应的物理地址信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=68&apiId=1014&apiName=jingdong.areas.city.get
 * Class AreasCityGet
 * @package Jd\request
 */
class AreasCityGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.areas.city.get";
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
     * 省id
     * Required: true
     * Example Value: 
     */
    private $parentId;

    /**
     * @param int $parentId
     * 省id
     * Example Value: 
     */
    public function setParentId($parentId)
    {
        $this->parentId             = $parentId;
        $this->apiParas["parent_id"]  = $parentId;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

}