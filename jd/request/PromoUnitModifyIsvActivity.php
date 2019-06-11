<?php

namespace JD\request;

/**
 * 修改isv活动
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2729&apiName=jingdong.promo.unit.modifyIsvActivity
 * Class PromoUnitModifyIsvActivity
 * @package Jd\request
 */
class PromoUnitModifyIsvActivity
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.promo.unit.modifyIsvActivity";
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
     * @param Number $id
     * 签到活动编码
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number $id
     * 签到活动编码
     * Example Value: 
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
     * @param Number $categoryId
     * 主营类目id（对应一级经营分类）
     * Required: true
     * Example Value: 
     */
    private $categoryId;

    /**
     * @param Number $categoryId
     * 主营类目id（对应一级经营分类）
     * Example Value: 
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId             = $categoryId;
        $this->apiParas["categoryId"]  = $categoryId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param String $name
     * 活动名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param String $name
     * 活动名称
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
     * @param Date $beginTime
     * 活动开始时间
     * Required: true
     * Example Value: 
     */
    private $beginTime;

    /**
     * @param Date $beginTime
     * 活动开始时间
     * Example Value: 
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime             = $beginTime;
        $this->apiParas["beginTime"]  = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
    }

    /**
     * @param Date $endTime
     * 活动结束时间
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param Date $endTime
     * 活动结束时间
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param String $imageUrl
     * 活动背景图url
     * Required: true
     * Example Value: 
     */
    private $imageUrl;

    /**
     * @param String $imageUrl
     * 活动背景图url
     * Example Value: 
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl             = $imageUrl;
        $this->apiParas["imageUrl"]  = $imageUrl;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param String $note
     * 活动规则说明
     * Required: true
     * Example Value: 
     */
    private $note;

    /**
     * @param String $note
     * 活动规则说明
     * Example Value: 
     */
    public function setNote($note)
    {
        $this->note             = $note;
        $this->apiParas["note"]  = $note;
    }

    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param String $channelType
     * 渠道类型（0：app，1：PC）
     * Required: true
     * Example Value: 
     */
    private $channelType;

    /**
     * @param String $channelType
     * 渠道类型（0：app，1：PC）
     * Example Value: 
     */
    public function setChannelType($channelType)
    {
        $this->channelType             = $channelType;
        $this->apiParas["channelType"]  = $channelType;
    }

    public function getChannelType()
    {
        return $this->channelType;
    }

    /**
     * @param Number $ruleType
     * 规则类型(0：普通签到，1：连续签到）
     * Required: true
     * Example Value: 
     */
    private $ruleType;

    /**
     * @param Number $ruleType
     * 规则类型(0：普通签到，1：连续签到）
     * Example Value: 
     */
    public function setRuleType($ruleType)
    {
        $this->ruleType             = $ruleType;
        $this->apiParas["ruleType"]  = $ruleType;
    }

    public function getRuleType()
    {
        return $this->ruleType;
    }

    /**
     * @param Number $shared
     * 是否可以分享 1是0否
     * Required: true
     * Example Value: 
     */
    private $shared;

    /**
     * @param Number $shared
     * 是否可以分享 1是0否
     * Example Value: 
     */
    public function setShared($shared)
    {
        $this->shared             = $shared;
        $this->apiParas["shared"]  = $shared;
    }

    public function getShared()
    {
        return $this->shared;
    }

    /**
     * @param Number $source
     * 活动来源(1、pop   2、自营 3、isv)
     * Required: true
     * Example Value: 
     */
    private $source;

    /**
     * @param Number $source
     * 活动来源(1、pop   2、自营 3、isv)
     * Example Value: 
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param String $isvUrl
     * isv 活动链接
     * Required: true
     * Example Value: 
     */
    private $isvUrl;

    /**
     * @param String $isvUrl
     * isv 活动链接
     * Example Value: 
     */
    public function setIsvUrl($isvUrl)
    {
        $this->isvUrl             = $isvUrl;
        $this->apiParas["isvUrl"]  = $isvUrl;
    }

    public function getIsvUrl()
    {
        return $this->isvUrl;
    }

    /**
     * @param String $pluginName
     * isv 插件名称
     * Required: true
     * Example Value: 
     */
    private $pluginName;

    /**
     * @param String $pluginName
     * isv 插件名称
     * Example Value: 
     */
    public function setPluginName($pluginName)
    {
        $this->pluginName             = $pluginName;
        $this->apiParas["pluginName"]  = $pluginName;
    }

    public function getPluginName()
    {
        return $this->pluginName;
    }

    /**
     * @param Number $status
     * 状态。-1：已关闭（删除）1:已设置活动 2：已设置规则 3：已完成  4:已暂停
     * Required: true
     * Example Value: 
     */
    private $status;

    /**
     * @param Number $status
     * 状态。-1：已关闭（删除）1:已设置活动 2：已设置规则 3：已完成  4:已暂停
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param String $callBackUrl
     * 唤醒isv活动链接
     * Required: true
     * Example Value: 
     */
    private $callBackUrl;

    /**
     * @param String $callBackUrl
     * 唤醒isv活动链接
     * Example Value: 
     */
    public function setCallBackUrl($callBackUrl)
    {
        $this->callBackUrl             = $callBackUrl;
        $this->apiParas["callBackUrl"]  = $callBackUrl;
    }

    public function getCallBackUrl()
    {
        return $this->callBackUrl;
    }

}