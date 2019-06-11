<?php

namespca Lostinfo\JosOpenApi;

/**
 * 新增或更新渠道信息
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2581&apiName=jingdong.ers.fang.addOrUpdateChannel
 * Class ErsFangAddOrUpdateChannel
 * @package Jd\request
 */
class ErsFangAddOrUpdateChannel
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateChannel";
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
     * @param int $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int $cityCode
     * 城市code
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["cityCode"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param int $sourceId
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param int $sourceId
     * 来源主键
     * Example Value: 
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId             = $sourceId;
        $this->apiParas["sourceId"]  = $sourceId;
    }

    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * @param  $businessType
     * 渠道业务类型（1，新房  2，二手房   3，租房）
     * Required: true
     * Example Value: 
     */
    private $businessType;

    /**
     * @param  $businessType
     * 渠道业务类型（1，新房  2，二手房   3，租房）
     * Example Value: 
     */
    public function setBusinessType($businessType)
    {
        $this->businessType             = $businessType;
        $this->apiParas["businessType"]  = $businessType;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

    /**
     * @param string $channelName
     * 渠道名称（公司名称）
     * Required: true
     * Example Value: 
     */
    private $channelName;

    /**
     * @param string $channelName
     * 渠道名称（公司名称）
     * Example Value: 
     */
    public function setChannelName($channelName)
    {
        $this->channelName             = $channelName;
        $this->apiParas["channelName"]  = $channelName;
    }

    public function getChannelName()
    {
        return $this->channelName;
    }

    /**
     * @param string $businessLicense
     * 营业执照
     * Required: false
     * Example Value: 
     */
    private $businessLicense;

    /**
     * @param string $businessLicense
     * 营业执照
     * Example Value: 
     */
    public function setBusinessLicense($businessLicense)
    {
        $this->businessLicense             = $businessLicense;
        $this->apiParas["businessLicense"]  = $businessLicense;
    }

    public function getBusinessLicense()
    {
        return $this->businessLicense;
    }

    /**
     * @param string $cityName
     * 城市名称
     * Required: false
     * Example Value: 
     */
    private $cityName;

    /**
     * @param string $cityName
     * 城市名称
     * Example Value: 
     */
    public function setCityName($cityName)
    {
        $this->cityName             = $cityName;
        $this->apiParas["cityName"]  = $cityName;
    }

    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param string $companyLogo
     * 公司logo
     * Required: false
     * Example Value: 
     */
    private $companyLogo;

    /**
     * @param string $companyLogo
     * 公司logo
     * Example Value: 
     */
    public function setCompanyLogo($companyLogo)
    {
        $this->companyLogo             = $companyLogo;
        $this->apiParas["companyLogo"]  = $companyLogo;
    }

    public function getCompanyLogo()
    {
        return $this->companyLogo;
    }

    /**
     * @param string $companyDes
     * 公司简称
     * Required: false
     * Example Value: 
     */
    private $companyDes;

    /**
     * @param string $companyDes
     * 公司简称
     * Example Value: 
     */
    public function setCompanyDes($companyDes)
    {
        $this->companyDes             = $companyDes;
        $this->apiParas["companyDes"]  = $companyDes;
    }

    public function getCompanyDes()
    {
        return $this->companyDes;
    }

    /**
     * @param int $purAgentRate
     * purAgentRate（保留四位小数）
     * Required: false
     * Example Value: 
     */
    private $purAgentRate;

    /**
     * @param int $purAgentRate
     * purAgentRate（保留四位小数）
     * Example Value: 
     */
    public function setPurAgentRate($purAgentRate)
    {
        $this->purAgentRate             = $purAgentRate;
        $this->apiParas["purAgentRate"]  = $purAgentRate;
    }

    public function getPurAgentRate()
    {
        return $this->purAgentRate;
    }

    /**
     * @param int $sellAgentRate
     * 卖方中介费率（保留四位小数）
     * Required: false
     * Example Value: 
     */
    private $sellAgentRate;

    /**
     * @param int $sellAgentRate
     * 卖方中介费率（保留四位小数）
     * Example Value: 
     */
    public function setSellAgentRate($sellAgentRate)
    {
        $this->sellAgentRate             = $sellAgentRate;
        $this->apiParas["sellAgentRate"]  = $sellAgentRate;
    }

    public function getSellAgentRate()
    {
        return $this->sellAgentRate;
    }

    /**
     * @param string $purCagentDes
     * 买方中介费率描述
     * Required: false
     * Example Value: 
     */
    private $purCagentDes;

    /**
     * @param string $purCagentDes
     * 买方中介费率描述
     * Example Value: 
     */
    public function setPurCagentDes($purCagentDes)
    {
        $this->purCagentDes             = $purCagentDes;
        $this->apiParas["purCagentDes"]  = $purCagentDes;
    }

    public function getPurCagentDes()
    {
        return $this->purCagentDes;
    }

    /**
     * @param string $sellCagentDes
     * 卖方中介费率描述
     * Required: false
     * Example Value: 
     */
    private $sellCagentDes;

    /**
     * @param string $sellCagentDes
     * 卖方中介费率描述
     * Example Value: 
     */
    public function setSellCagentDes($sellCagentDes)
    {
        $this->sellCagentDes             = $sellCagentDes;
        $this->apiParas["sellCagentDes"]  = $sellCagentDes;
    }

    public function getSellCagentDes()
    {
        return $this->sellCagentDes;
    }

}