<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 保存商品多语言信息
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=1279&apiName=jingdong.warelang.save
 * Class WarelangSave
 * @package Jd\request
 */
class WarelangSave
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.warelang.save";
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
     * @param int $wareId
     * 商品ID
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品ID
     * Example Value: 
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param int $langId
     * 语言ID【英语为2，俄语为3】
     * Required: true
     * Example Value: 
     */
    private $langId;

    /**
     * @param int $langId
     * 语言ID【英语为2，俄语为3】
     * Example Value: 
     */
    public function setLangId($langId)
    {
        $this->langId             = $langId;
        $this->apiParas["langId"]  = $langId;
    }

    public function getLangId()
    {
        return $this->langId;
    }

    /**
     * @param string $title
     * 商品标题
     * Required: true
     * Example Value: 
     */
    private $title;

    /**
     * @param string $title
     * 商品标题
     * Example Value: 
     */
    public function setTitle($title)
    {
        $this->title             = $title;
        $this->apiParas["title"]  = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $seoKeywords
     * SEO关键字
     * Required: true
     * Example Value: 
     */
    private $seoKeywords;

    /**
     * @param string $seoKeywords
     * SEO关键字
     * Example Value: 
     */
    public function setSeoKeywords($seoKeywords)
    {
        $this->seoKeywords             = $seoKeywords;
        $this->apiParas["seoKeywords"]  = $seoKeywords;
    }

    public function getSeoKeywords()
    {
        return $this->seoKeywords;
    }

    /**
     * @param string $extPackInfo
     * 包装信息
     * Required: true
     * Example Value: 
     */
    private $extPackInfo;

    /**
     * @param string $extPackInfo
     * 包装信息
     * Example Value: 
     */
    public function setExtPackInfo($extPackInfo)
    {
        $this->extPackInfo             = $extPackInfo;
        $this->apiParas["extPackInfo"]  = $extPackInfo;
    }

    public function getExtPackInfo()
    {
        return $this->extPackInfo;
    }

    /**
     * @param string $description
     * 商品描述
     * Required: true
     * Example Value: 
     */
    private $description;

    /**
     * @param string $description
     * 商品描述
     * Example Value: 
     */
    public function setDescription($description)
    {
        $this->description             = $description;
        $this->apiParas["description"]  = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $appDescription
     * 移动端商品描述
     * Required: true
     * Example Value: 
     */
    private $appDescription;

    /**
     * @param string $appDescription
     * 移动端商品描述
     * Example Value: 
     */
    public function setAppDescription($appDescription)
    {
        $this->appDescription             = $appDescription;
        $this->apiParas["appDescription"]  = $appDescription;
    }

    public function getAppDescription()
    {
        return $this->appDescription;
    }

}