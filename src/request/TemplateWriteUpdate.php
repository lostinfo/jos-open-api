<?php

namespace JD\request;

/**
 * 修改关联板式信息
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1233&apiName=jingdong.template.write.update
 * Class TemplateWriteUpdate
 * @package Jd\request
 */
class TemplateWriteUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.template.write.update";
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
     * @param String $bottomContent
     * 尾部内容
     * Required: false
     * Example Value: 尾部内容
     */
    private $bottomContent;

    /**
     * @param String $bottomContent
     * 尾部内容
     * Example Value: 尾部内容
     */
    public function setBottomContent($bottomContent)
    {
        $this->bottomContent             = $bottomContent;
        $this->apiParas["bottomContent"]  = $bottomContent;
    }

    public function getBottomContent()
    {
        return $this->bottomContent;
    }

    /**
     * @param String $headContent
     * 顶部内容
     * Required: false
     * Example Value: 顶部内容
     */
    private $headContent;

    /**
     * @param String $headContent
     * 顶部内容
     * Example Value: 顶部内容
     */
    public function setHeadContent($headContent)
    {
        $this->headContent             = $headContent;
        $this->apiParas["headContent"]  = $headContent;
    }

    public function getHeadContent()
    {
        return $this->headContent;
    }

    /**
     * @param Number $id
     * 关联板式id
     * Required: true
     * Example Value: 1234
     */
    private $id;

    /**
     * @param Number $id
     * 关联板式id
     * Example Value: 1234
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param String $name
     * 关联板式名称
     * Required: true
     * Example Value: 关联板式名称
     */
    private $name;

    /**
     * @param String $name
     * 关联板式名称
     * Example Value: 关联板式名称
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param String $mobileBottomContent
     * 移动端尾部内容
     * Required: false
     * Example Value: 移动端尾部内容
     */
    private $mobileBottomContent;

    /**
     * @param String $mobileBottomContent
     * 移动端尾部内容
     * Example Value: 移动端尾部内容
     */
    public function setMobileBottomContent($mobileBottomContent)
    {
        $this->mobileBottomContent             = $mobileBottomContent;
        $this->apiParas["mobileBottomContent"]  = $mobileBottomContent;
    }

    public function getMobileBottomContent()
    {
        return $this->mobileBottomContent;
    }

    /**
     * @param String $mobileHeadContent
     * 移动端顶部内容
     * Required: false
     * Example Value: 移动端顶部内容
     */
    private $mobileHeadContent;

    /**
     * @param String $mobileHeadContent
     * 移动端顶部内容
     * Example Value: 移动端顶部内容
     */
    public function setMobileHeadContent($mobileHeadContent)
    {
        $this->mobileHeadContent             = $mobileHeadContent;
        $this->apiParas["mobileHeadContent"]  = $mobileHeadContent;
    }

    public function getMobileHeadContent()
    {
        return $this->mobileHeadContent;
    }

}