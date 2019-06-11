<?php

namespca Lostinfo\JosOpenApi;

/**
 * 新增关联板式信息
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1232&apiName=jingdong.template.write.add
 * Class TemplateWriteAdd
 * @package Jd\request
 */
class TemplateWriteAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.template.write.add";
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
     * @param string $bottomContent
     * 尾部内容
     * Required: false
     * Example Value: 
     */
    private $bottomContent;

    /**
     * @param string $bottomContent
     * 尾部内容
     * Example Value: 
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
     * @param string $headContent
     * 顶部内容
     * Required: false
     * Example Value: 
     */
    private $headContent;

    /**
     * @param string $headContent
     * 顶部内容
     * Example Value: 
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
     * @param string $name
     * 关联板式名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
     * 关联板式名称
     * Example Value: 
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
     * @param string $mobileBottomContent
     * 移动版尾部内容
     * Required: false
     * Example Value: 
     */
    private $mobileBottomContent;

    /**
     * @param string $mobileBottomContent
     * 移动版尾部内容
     * Example Value: 
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
     * @param string $mobileHeadContent
     * 移动版顶部内容
     * Required: false
     * Example Value: 
     */
    private $mobileHeadContent;

    /**
     * @param string $mobileHeadContent
     * 移动版顶部内容
     * Example Value: 
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