<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.快车.绑定/解绑指定单元人群包
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1607&apiName=jingdong.dsp.adkcunit.dmp.batchBindCrowdRef
 * Class DspAdkcunitDmpBatchBindCrowdRef
 * @package Jd\request
 */
class DspAdkcunitDmpBatchBindCrowdRef
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkcunit.dmp.batchBindCrowdRef";
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
     * @param int $campaignId
     * 计划号
     * Required: true
     * Example Value: 
     */
    private $campaignId;

    /**
     * @param int $campaignId
     * 计划号
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
     * @param int $adGroupId
     * 单元号
     * Required: true
     * Example Value: 
     */
    private $adGroupId;

    /**
     * @param int $adGroupId
     * 单元号
     * Example Value: 
     */
    public function setAdGroupId($adGroupId)
    {
        $this->adGroupId             = $adGroupId;
        $this->apiParas["adGroupId"]  = $adGroupId;
    }

    public function getAdGroupId()
    {
        return $this->adGroupId;
    }

    /**
     * @param int $adGroupType
     * 单元类型：RECOMMEND(推荐,1);SEARCH(搜索,2);
     * Required: true
     * Example Value: 
     */
    private $adGroupType;

    /**
     * @param int $adGroupType
     * 单元类型：RECOMMEND(推荐,1);SEARCH(搜索,2);
     * Example Value: 
     */
    public function setAdGroupType($adGroupType)
    {
        $this->adGroupType             = $adGroupType;
        $this->apiParas["adGroupType"]  = $adGroupType;
    }

    public function getAdGroupType()
    {
        return $this->adGroupType;
    }

    /**
     * @param int $opt
     * 操作枚举：1.绑定 2 解绑
     * Required: true
     * Example Value: 
     */
    private $opt;

    /**
     * @param int $opt
     * 操作枚举：1.绑定 2 解绑
     * Example Value: 
     */
    public function setOpt($opt)
    {
        $this->opt             = $opt;
        $this->apiParas["opt"]  = $opt;
    }

    public function getOpt()
    {
        return $this->opt;
    }

    /**
     * @param int[] $crowdId
     * 人群编号
     * Required: true
     * Example Value: 
     */
    private $crowdId;

    /**
     * @param int[] $crowdId
     * 人群编号
     * Example Value: 
     */
    public function setCrowdId($crowdId)
    {
        $this->crowdId             = $crowdId;
        $this->apiParas["crowdId"]  = $crowdId;
    }

    public function getCrowdId()
    {
        return $this->crowdId;
    }

    /**
     * @param int[] $isUsed
     * 0.停用 1.启用
     * Required: true
     * Example Value: 
     */
    private $isUsed;

    /**
     * @param int[] $isUsed
     * 0.停用 1.启用
     * Example Value: 
     */
    public function setIsUsed($isUsed)
    {
        $this->isUsed             = $isUsed;
        $this->apiParas["isUsed"]  = $isUsed;
    }

    public function getIsUsed()
    {
        return $this->isUsed;
    }

    /**
     * @param int[] $adGroupPrice
     * 溢价系数
     * Required: true
     * Example Value: 
     */
    private $adGroupPrice;

    /**
     * @param int[] $adGroupPrice
     * 溢价系数
     * Example Value: 
     */
    public function setAdGroupPrice($adGroupPrice)
    {
        $this->adGroupPrice             = $adGroupPrice;
        $this->apiParas["adGroupPrice"]  = $adGroupPrice;
    }

    public function getAdGroupPrice()
    {
        return $this->adGroupPrice;
    }

}