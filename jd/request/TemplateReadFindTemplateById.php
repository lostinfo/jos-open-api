<?php

namespace JD\request;

/**
 * 查询关联版式内容
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1242&apiName=jingdong.template.read.findTemplateById
 * Class TemplateReadFindTemplateById
 * @package Jd\request
 */
class TemplateReadFindTemplateById
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.template.read.findTemplateById";
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
     * @param Number $templateId
     * 关联板式id
     * Required: true
     * Example Value: 
     */
    private $templateId;

    /**
     * @param Number $templateId
     * 关联板式id
     * Example Value: 
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

    /**
     * @param String[] $fields
     * 可选的返回的字段
     * Required: false
     * Example Value: id,bottomContent,headContent,headContent
     */
    private $fields;

    /**
     * @param String[] $fields
     * 可选的返回的字段
     * Example Value: id,bottomContent,headContent,headContent
     */
    public function setFields($fields)
    {
        $this->fields             = $fields;
        $this->apiParas["field"]  = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

}