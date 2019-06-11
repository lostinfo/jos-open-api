<?php

namespace JD\request;

/**
 * 查询会员体系状态
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3263&apiName=jingdong.pop.vender.getVenderStatus
 * Class PopVenderGetVenderStatus
 * @package Jd\request
 */
class PopVenderGetVenderStatus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.vender.getVenderStatus";
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