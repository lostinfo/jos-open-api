<?php

namespca Lostinfo\JosOpenApi;

/**
 * 
 * 京东地址库API-提供获取省|市|区县|乡镇级列表、返回IP地址对应的物理地址信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=68&apiId=2625&apiName=jingdong.areas.overseasProvince.get
 * Class AreasOverseasProvinceGet
 * @package Jd\request
 */
class AreasOverseasProvinceGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.areas.overseasProvince.get";
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