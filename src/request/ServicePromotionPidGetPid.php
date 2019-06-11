<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取联盟PID
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=2018&apiName=jingdong.service.promotion.pid.getPid
 * Class ServicePromotionPidGetPid
 * @package Jd\request
 */
class ServicePromotionPidGetPid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.promotion.pid.getPid";
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
     * @param int $unionId
     * 联盟ID
     * Required: true
     * Example Value: 
     */
    private $unionId;

    /**
     * @param int $unionId
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
     * @param int $sonUnionId
     * 子联盟ID
     * Required: true
     * Example Value: 
     */
    private $sonUnionId;

    /**
     * @param int $sonUnionId
     * 子联盟ID
     * Example Value: 
     */
    public function setSonUnionId($sonUnionId)
    {
        $this->sonUnionId             = $sonUnionId;
        $this->apiParas["sonUnionId"]  = $sonUnionId;
    }

    public function getSonUnionId()
    {
        return $this->sonUnionId;
    }

    /**
     * @param string $mediaName
     * 媒体名称,推广方式为app推广时必填，且app名称必须为已存在的app名称
     * Required: false
     * Example Value: 
     */
    private $mediaName;

    /**
     * @param string $mediaName
     * 媒体名称,推广方式为app推广时必填，且app名称必须为已存在的app名称
     * Example Value: 
     */
    public function setMediaName($mediaName)
    {
        $this->mediaName             = $mediaName;
        $this->apiParas["mediaName"]  = $mediaName;
    }

    public function getMediaName()
    {
        return $this->mediaName;
    }

    /**
     * @param string $positionName
     * 推广位名称,如不存在则创建，不填则由联盟根据母账号信息创建
     * Required: false
     * Example Value: 
     */
    private $positionName;

    /**
     * @param string $positionName
     * 推广位名称,如不存在则创建，不填则由联盟根据母账号信息创建
     * Example Value: 
     */
    public function setPositionName($positionName)
    {
        $this->positionName             = $positionName;
        $this->apiParas["positionName"]  = $positionName;
    }

    public function getPositionName()
    {
        return $this->positionName;
    }

    /**
     * @param int $promotionType
     * 推广方式,1APP推广 2聊天工具推广
     * Required: true
     * Example Value: 
     */
    private $promotionType;

    /**
     * @param int $promotionType
     * 推广方式,1APP推广 2聊天工具推广
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

}