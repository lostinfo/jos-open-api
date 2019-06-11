<?php

namespca Lostinfo\JosOpenApi;

/**
 * 校验人群规则表达式
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3116&apiName=jingdong.ceodd.recom.rule.check
 * Class CeoddRecomRuleCheck
 * @package Jd\request
 */
class CeoddRecomRuleCheck
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ceodd.recom.rule.check";
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
     * @param string $ruleInfo
     * 人群规则
     * Required: true
     * Example Value: {'bool':{'must':[{'bool':{'group':'app_eco_user_base','must':[{'term':{'promotioSens':{'value':5}}},{'terms':{'addrLevel':[1,2,3,4]}},{'range':{'age':{'gte':2,'lte':7}}}]}}],'should':[{'bool':{'group':'app_eco_user_act','should':[{'range':{'payAmount':{'gte':15.0}}},{'range':{'followShopTm':{'gt':1535471000000}}}]}}]}}
     */
    private $ruleInfo;

    /**
     * @param string $ruleInfo
     * 人群规则
     * Example Value: {'bool':{'must':[{'bool':{'group':'app_eco_user_base','must':[{'term':{'promotioSens':{'value':5}}},{'terms':{'addrLevel':[1,2,3,4]}},{'range':{'age':{'gte':2,'lte':7}}}]}}],'should':[{'bool':{'group':'app_eco_user_act','should':[{'range':{'payAmount':{'gte':15.0}}},{'range':{'followShopTm':{'gt':1535471000000}}}]}}]}}
     */
    public function setRuleInfo($ruleInfo)
    {
        $this->ruleInfo             = $ruleInfo;
        $this->apiParas["ruleInfo"]  = $ruleInfo;
    }

    public function getRuleInfo()
    {
        return $this->ruleInfo;
    }

}