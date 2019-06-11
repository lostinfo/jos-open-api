<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询商家是否开通会员开卡功能/开卡类型
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3289&apiName=jingdong.pop.crm.getShopRuleType
 * Class PopCrmGetShopRuleType
 * @package Jd\request
 */
class PopCrmGetShopRuleType
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.getShopRuleType";
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