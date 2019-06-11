<?php

namespace JD\request;

/**
 * 自定义链接转换
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1648&apiName=jingdong.service.promotion.getcode
 * Class ServicePromotionGetcode
 * @package Jd\request
 */
class ServicePromotionGetcode
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.promotion.getcode";
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
     * @param Number $promotionType
     * 推广类型 0 活动推广 1：pop单品推广 2:pop店铺推广 3 专柜推广 4 自营频道页推广 5 搜索推广 6 组件推广 7 自定义推广 8 自定义单品 9 自定义首页 10 自定义其他 11 聚合页首跳 12 聚合页推广 13 pop频道推广 14 组合推广 15 超值购频道推广 16自定义店铺推广 17 自定义活动推广 30 自营活动推广   60/61 文章推广-站外 62 文章推广-站内  
     * Required: true
     * Example Value: 
     */
    private $promotionType;

    /**
     * @param Number $promotionType
     * 推广类型 0 活动推广 1：pop单品推广 2:pop店铺推广 3 专柜推广 4 自营频道页推广 5 搜索推广 6 组件推广 7 自定义推广 8 自定义单品 9 自定义首页 10 自定义其他 11 聚合页首跳 12 聚合页推广 13 pop频道推广 14 组合推广 15 超值购频道推广 16自定义店铺推广 17 自定义活动推广 30 自营活动推广   60/61 文章推广-站外 62 文章推广-站内  
     * Example Value: 
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType             = $promotionType;
        $this->apiParas["promotionType"]  = $promotionType;
    }

    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * @param String $materialId
     * 推广物料 就是落地页
     * Required: true
     * Example Value: 
     */
    private $materialId;

    /**
     * @param String $materialId
     * 推广物料 就是落地页
     * Example Value: 
     */
    public function setMaterialId($materialId)
    {
        $this->materialId             = $materialId;
        $this->apiParas["materialId"]  = $materialId;
    }

    public function getMaterialId()
    {
        return $this->materialId;
    }

    /**
     * @param Number $unionId
     * 联盟ID
     * Required: true
     * Example Value: 
     */
    private $unionId;

    /**
     * @param Number $unionId
     * 联盟ID
     * Example Value: 
     */
    public function setUnionId($unionId)
    {
        $this->unionId             = $unionId;
        $this->apiParas["unionId"]  = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
    }

    /**
     * @param String $subUnionId
     * 子联盟ID
     * Required: false
     * Example Value: 
     */
    private $subUnionId;

    /**
     * @param String $subUnionId
     * 子联盟ID
     * Example Value: 
     */
    public function setSubUnionId($subUnionId)
    {
        $this->subUnionId             = $subUnionId;
        $this->apiParas["subUnionId"]  = $subUnionId;
    }

    public function getSubUnionId()
    {
        return $this->subUnionId;
    }

    /**
     * @param String $siteSize
     * 推广位尺寸
     * Required: false
     * Example Value: 
     */
    private $siteSize;

    /**
     * @param String $siteSize
     * 推广位尺寸
     * Example Value: 
     */
    public function setSiteSize($siteSize)
    {
        $this->siteSize             = $siteSize;
        $this->apiParas["siteSize"]  = $siteSize;
    }

    public function getSiteSize()
    {
        return $this->siteSize;
    }

    /**
     * @param String $siteId
     * 推广位ID，获取京东饭粒的推广链接时必填。
     * Required: false
     * Example Value: 
     */
    private $siteId;

    /**
     * @param String $siteId
     * 推广位ID，获取京东饭粒的推广链接时必填。
     * Example Value: 
     */
    public function setSiteId($siteId)
    {
        $this->siteId             = $siteId;
        $this->apiParas["siteId"]  = $siteId;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * @param String $channel
     * 推广渠道（PC/WL）
     * Required: true
     * Example Value: 
     */
    private $channel;

    /**
     * @param String $channel
     * 推广渠道（PC/WL）
     * Example Value: 
     */
    public function setChannel($channel)
    {
        $this->channel             = $channel;
        $this->apiParas["channel"]  = $channel;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param String $webId
     * 网站id
     * Required: true
     * Example Value: 
     */
    private $webId;

    /**
     * @param String $webId
     * 网站id
     * Example Value: 
     */
    public function setWebId($webId)
    {
        $this->webId             = $webId;
        $this->apiParas["webId"]  = $webId;
    }

    public function getWebId()
    {
        return $this->webId;
    }

    /**
     * @param String $extendId
     * 扩展字段
     * Required: false
     * Example Value: 
     */
    private $extendId;

    /**
     * @param String $extendId
     * 扩展字段
     * Example Value: 
     */
    public function setExtendId($extendId)
    {
        $this->extendId             = $extendId;
        $this->apiParas["extendId"]  = $extendId;
    }

    public function getExtendId()
    {
        return $this->extendId;
    }

    /**
     * @param String $ext1
     * 扩展字段
     * Required: false
     * Example Value: 
     */
    private $ext1;

    /**
     * @param String $ext1
     * 扩展字段
     * Example Value: 
     */
    public function setExt1($ext1)
    {
        $this->ext1             = $ext1;
        $this->apiParas["ext1"]  = $ext1;
    }

    public function getExt1()
    {
        return $this->ext1;
    }

    /**
     * @param String $adttype
     * 推广渠道 6：cps网站
     * Required: true
     * Example Value: 
     */
    private $adttype;

    /**
     * @param String $adttype
     * 推广渠道 6：cps网站
     * Example Value: 
     */
    public function setAdttype($adttype)
    {
        $this->adttype             = $adttype;
        $this->apiParas["adttype"]  = $adttype;
    }

    public function getAdttype()
    {
        return $this->adttype;
    }

    /**
     * @param Number $protocol
     * 传输协议 1为https 其他为 http
     * Required: false
     * Example Value: 
     */
    private $protocol;

    /**
     * @param Number $protocol
     * 传输协议 1为https 其他为 http
     * Example Value: 
     */
    public function setProtocol($protocol)
    {
        $this->protocol             = $protocol;
        $this->apiParas["protocol"]  = $protocol;
    }

    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param String $pid
     * 母子账号
     * Required: false
     * Example Value: 
     */
    private $pid;

    /**
     * @param String $pid
     * 母子账号
     * Example Value: 
     */
    public function setPid($pid)
    {
        $this->pid             = $pid;
        $this->apiParas["pid"]  = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

}