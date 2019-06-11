<?php

namespca Lostinfo\JosOpenApi;

/**
 * 积分发放接口(新)
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3292&apiName=jingdong.points.jos.sendPoints
 * Class PointsJosSendPoints
 * @package Jd\request
 */
class PointsJosSendPoints
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.points.jos.sendPoints";
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
     * @param string $pin
     * 用户pin
     * Required: true
     * Example Value: '1111'
     */
    private $pin;

    /**
     * @param string $pin
     * 用户pin
     * Example Value: '1111'
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["pin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param string $businessId
     * 防重ID
     * Required: true
     * Example Value: '1111'
     */
    private $businessId;

    /**
     * @param string $businessId
     * 防重ID
     * Example Value: '1111'
     */
    public function setBusinessId($businessId)
    {
        $this->businessId             = $businessId;
        $this->apiParas["businessId"]  = $businessId;
    }

    public function getBusinessId()
    {
        return $this->businessId;
    }

    /**
     * @param  $sourceType
     * 渠道类型：26-消费积分                   27-发放积分
     * Required: true
     * Example Value: 26
     */
    private $sourceType;

    /**
     * @param  $sourceType
     * 渠道类型：26-消费积分                   27-发放积分
     * Example Value: 26
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType             = $sourceType;
        $this->apiParas["sourceType"]  = $sourceType;
    }

    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * @param int $points
     * 积分变更值
     * Required: true
     * Example Value: 111
     */
    private $points;

    /**
     * @param int $points
     * 积分变更值
     * Example Value: 111
     */
    public function setPoints($points)
    {
        $this->points             = $points;
        $this->apiParas["points"]  = $points;
    }

    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param string $sourceComment
     * 积分变更明细说明(10个字符)
     * Required: true
     * Example Value: '123112312'
     */
    private $sourceComment;

    /**
     * @param string $sourceComment
     * 积分变更明细说明(10个字符)
     * Example Value: '123112312'
     */
    public function setSourceComment($sourceComment)
    {
        $this->sourceComment             = $sourceComment;
        $this->apiParas["sourceComment"]  = $sourceComment;
    }

    public function getSourceComment()
    {
        return $this->sourceComment;
    }

}