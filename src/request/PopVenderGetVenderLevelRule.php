<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取会员等级体系规则
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3282&apiName=jingdong.pop.vender.getVenderLevelRule
 * Class PopVenderGetVenderLevelRule
 * @package Jd\request
 */
class PopVenderGetVenderLevelRule
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.vender.getVenderLevelRule";
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