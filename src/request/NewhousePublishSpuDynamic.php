<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 发布楼盘动态信息接口
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2676&apiName=jingdong.newhouse.publishSpuDynamic
 * Class NewhousePublishSpuDynamic
 * @package Jd\request
 */
class NewhousePublishSpuDynamic
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.newhouse.publishSpuDynamic";
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
     * @param int[] $id
     * 楼盘动态ID（更新使用，新增不需要添加）
     * Required: false
     * Example Value: 
     */
    private $id;

    /**
     * @param int[] $id
     * 楼盘动态ID（更新使用，新增不需要添加）
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
     * @param string[] $dynamicsTitle
     * 楼盘动态标题
     * Required: true
     * Example Value: 
     */
    private $dynamicsTitle;

    /**
     * @param string[] $dynamicsTitle
     * 楼盘动态标题
     * Example Value: 
     */
    public function setDynamicsTitle($dynamicsTitle)
    {
        $this->dynamicsTitle             = $dynamicsTitle;
        $this->apiParas["dynamicsTitle"]  = $dynamicsTitle;
    }

    public function getDynamicsTitle()
    {
        return $this->dynamicsTitle;
    }

    /**
     * @param string[] $dynamicsContent
     * 楼盘动态内容
     * Required: true
     * Example Value: 
     */
    private $dynamicsContent;

    /**
     * @param string[] $dynamicsContent
     * 楼盘动态内容
     * Example Value: 
     */
    public function setDynamicsContent($dynamicsContent)
    {
        $this->dynamicsContent             = $dynamicsContent;
        $this->apiParas["dynamicsContent"]  = $dynamicsContent;
    }

    public function getDynamicsContent()
    {
        return $this->dynamicsContent;
    }

    /**
     * @param string[] $dynamicsVenderName
     * 楼盘动态来源
     * Required: true
     * Example Value: 
     */
    private $dynamicsVenderName;

    /**
     * @param string[] $dynamicsVenderName
     * 楼盘动态来源
     * Example Value: 
     */
    public function setDynamicsVenderName($dynamicsVenderName)
    {
        $this->dynamicsVenderName             = $dynamicsVenderName;
        $this->apiParas["dynamicsVenderName"]  = $dynamicsVenderName;
    }

    public function getDynamicsVenderName()
    {
        return $this->dynamicsVenderName;
    }

    /**
     * @param int $channelId
     * 渠道ID
     * Required: true
     * Example Value: 
     */
    private $channelId;

    /**
     * @param int $channelId
     * 渠道ID
     * Example Value: 
     */
    public function setChannelId($channelId)
    {
        $this->channelId             = $channelId;
        $this->apiParas["channelId"]  = $channelId;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param int $spuId
     * 楼盘ID
     * Required: true
     * Example Value: 
     */
    private $spuId;

    /**
     * @param int $spuId
     * 楼盘ID
     * Example Value: 
     */
    public function setSpuId($spuId)
    {
        $this->spuId             = $spuId;
        $this->apiParas["spuId"]  = $spuId;
    }

    public function getSpuId()
    {
        return $this->spuId;
    }

}