<?php

namespace JD\request;

/**
 * 查询单条景点信息
 * 景点门票API-POP虚拟业务,开放景点门票业务API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=131&apiId=777&apiName=jingdong.pop.lvyou.jingdian.get
 * Class PopLvyouJingdianGet
 * @package Jd\request
 */
class PopLvyouJingdianGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.lvyou.jingdian.get";
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
     * @param Number $sceneryId
     * 景点ID
     * Required: true
     * Example Value: 
     */
    private $sceneryId;

    /**
     * @param Number $sceneryId
     * 景点ID
     * Example Value: 
     */
    public function setSceneryId($sceneryId)
    {
        $this->sceneryId             = $sceneryId;
        $this->apiParas["sceneryId"]  = $sceneryId;
    }

    public function getSceneryId()
    {
        return $this->sceneryId;
    }

}