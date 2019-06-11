<?php

namespca Lostinfo\JosOpenApi;

/**
 * 删除关联板式
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1234&apiName=jingdong.template.write.delete
 * Class TemplateWriteDelete
 * @package Jd\request
 */
class TemplateWriteDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.template.write.delete";
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
     * 关联板式id
     * Required: true
     * Example Value: 1234
     */
    private $templateId;

    /**
     * @param int $templateId
     * 关联板式id
     * Example Value: 1234
     */
    public function setTemplateId($templateId)
    {
        $this->templateId             = $templateId;
        $this->apiParas["templateId"]  = $templateId;
    }

    public function getTemplateId()
    {
        return $this->templateId;
    }

}