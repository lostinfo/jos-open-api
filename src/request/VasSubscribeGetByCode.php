<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 服务市场订购关系查询
 * 服务市场API-服务市场API包括发布服务市场中订购关系查询API、服务操作API、获取服务列表、获取和服务相对应的收费项目列表等API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=66&apiId=3555&apiName=jingdong.vas.subscribe.getByCode
 * Class VasSubscribeGetByCode
 * @package Jd\request
 */
class VasSubscribeGetByCode
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vas.subscribe.getByCode";
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
     * @param string $item_code
     * 应用收费代码
     * Required: true
     * Example Value: 1234
     */
    private $item_code;

    /**
     * @param string $item_code
     * 应用收费代码
     * Example Value: 1234
     */
    public function setItem_code($item_code)
    {
        $this->item_code             = $item_code;
        $this->apiParas["item_code"]  = $item_code;
    }

    public function getItem_code()
    {
        return $this->item_code;
    }

}