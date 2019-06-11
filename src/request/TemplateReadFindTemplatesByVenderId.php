<?php

namespace JD\request;

/**
 * 获取商家关联版式
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1241&apiName=jingdong.template.read.findTemplatesByVenderId
 * Class TemplateReadFindTemplatesByVenderId
 * @package Jd\request
 */
class TemplateReadFindTemplatesByVenderId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.template.read.findTemplatesByVenderId";
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
     * @param Number $pageNo
     * 页号,从1开始
     * Required: true
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param Number $pageNo
     * 页号,从1开始
     * Example Value: 1
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
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