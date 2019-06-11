<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询单品模板规则
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=1019&apiName=jingdong.SkuFareTemplateService.getTemplateRules
 * Class SkuFareTemplateServiceGetTemplateRules
 * @package Jd\request
 */
class SkuFareTemplateServiceGetTemplateRules
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.SkuFareTemplateService.getTemplateRules";
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
     * @param int $templateId
     * 模板id
     * Required: true
     * Example Value: 
     */
    private $templateId;

    /**
     * @param int $templateId
     * 模板id
     * Example Value: 
     */
    public function setTemplateId($templateId)
    {
        $this->templateId             = $templateId;
        $this->apiParas["template_id"]  = $templateId;
    }

    public function getTemplateId()
    {
        return $this->templateId;
    }

}