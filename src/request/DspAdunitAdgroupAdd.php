<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.聚效.新增单元
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=878&apiName=jingdong.dsp.adunit.adgroup.add
 * Class DspAdunitAdgroupAdd
 * @package Jd\request
 */
class DspAdunitAdgroupAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adunit.adgroup.add";
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
     * @param string $name
     * 单元名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
     * 单元名称
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
     * @param int $campaignId
     * 计划id
     * Required: true
     * Example Value: 
     */
    private $campaignId;

    /**
     * @param int $campaignId
     * 计划id
     * Example Value: 
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId             = $campaignId;
        $this->apiParas["campaignId"]  = $campaignId;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param string $position
     * 广告位
     * Required: true
     * Example Value: 
     */
    private $position;

    /**
     * @param string $position
     * 广告位
     * Example Value: 
     */
    public function setPosition($position)
    {
        $this->position             = $position;
        $this->apiParas["position"]  = $position;
    }

    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $inFee
     * 站内出价
     * Required: true
     * Example Value: 
     */
    private $inFee;

    /**
     * @param int $inFee
     * 站内出价
     * Example Value: 
     */
    public function setInFee($inFee)
    {
        $this->inFee             = $inFee;
        $this->apiParas["inFee"]  = $inFee;
    }

    public function getInFee()
    {
        return $this->inFee;
    }

    /**
     * @param int $outFee
     * 站外出价
     * Required: true
     * Example Value: 
     */
    private $outFee;

    /**
     * @param int $outFee
     * 站外出价
     * Example Value: 
     */
    public function setOutFee($outFee)
    {
        $this->outFee             = $outFee;
        $this->apiParas["outFee"]  = $outFee;
    }

    public function getOutFee()
    {
        return $this->outFee;
    }

    /**
     * @param int $adOptimize
     * 创意优选
     * Required: false
     * Example Value: 
     */
    private $adOptimize;

    /**
     * @param int $adOptimize
     * 创意优选
     * Example Value: 
     */
    public function setAdOptimize($adOptimize)
    {
        $this->adOptimize             = $adOptimize;
        $this->apiParas["adOptimize"]  = $adOptimize;
    }

    public function getAdOptimize()
    {
        return $this->adOptimize;
    }

    /**
     * @param int $adDevice
     * 推广设备1:计算机 2:移动设备
     * Required: true
     * Example Value: 
     */
    private $adDevice;

    /**
     * @param int $adDevice
     * 推广设备1:计算机 2:移动设备
     * Example Value: 
     */
    public function setAdDevice($adDevice)
    {
        $this->adDevice             = $adDevice;
        $this->apiParas["adDevice"]  = $adDevice;
    }

    public function getAdDevice()
    {
        return $this->adDevice;
    }

}