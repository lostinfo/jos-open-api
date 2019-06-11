<?php

namespca Lostinfo\JosOpenApi;

/**
 * 领取或扣减积分
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2551&apiName=jingdong.pop.crm.sendPoints
 * Class PopCrmSendPoints
 * @package Jd\request
 */
class PopCrmSendPoints
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.sendPoints";
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
     * @param string $sysName
     * 系统名称
     * Required: true
     * Example Value: 
     */
    private $sysName;

    /**
     * @param string $sysName
     * 系统名称
     * Example Value: 
     */
    public function setSysName($sysName)
    {
        $this->sysName             = $sysName;
        $this->apiParas["sysName"]  = $sysName;
    }

    public function getSysName()
    {
        return $this->sysName;
    }

    /**
     * @param string $customerPin
     * 用户pin
     * Required: true
     * Example Value: 
     */
    private $customerPin;

    /**
     * @param string $customerPin
     * 用户pin
     * Example Value: 
     */
    public function setCustomerPin($customerPin)
    {
        $this->customerPin             = $customerPin;
        $this->apiParas["customerPin"]  = $customerPin;
    }

    public function getCustomerPin()
    {
        return $this->customerPin;
    }

    /**
     * @param string $resId
     * 来源标识
     * Required: true
     * Example Value: 
     */
    private $resId;

    /**
     * @param string $resId
     * 来源标识
     * Example Value: 
     */
    public function setResId($resId)
    {
        $this->resId             = $resId;
        $this->apiParas["resId"]  = $resId;
    }

    public function getResId()
    {
        return $this->resId;
    }

    /**
     * @param  $sourceType
     * 来源类型
     * Required: true
     * Example Value: 
     */
    private $sourceType;

    /**
     * @param  $sourceType
     * 来源类型
     * Example Value: 
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
     * 积分数
     * Required: true
     * Example Value: 
     */
    private $points;

    /**
     * @param int $points
     * 积分数
     * Example Value: 
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

}