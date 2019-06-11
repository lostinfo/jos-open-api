<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 
 * 京东地址库API-提供获取省|市|区县|乡镇级列表、返回IP地址对应的物理地址信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=68&apiId=1011&apiName=jingdong.areas.province.get
 * Class AreasProvinceGet
 * @package Jd\request
 */
class AreasProvinceGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.areas.province.get";
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