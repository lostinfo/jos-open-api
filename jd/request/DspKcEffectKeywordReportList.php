<?php

namespace JD\request;

/**
 * 查询.快车.搜索词效果总揽报表
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=3450&apiName=jingdong.dsp.kc.effect.keyword.report.list
 * Class DspKcEffectKeywordReportList
 * @package Jd\request
 */
class DspKcEffectKeywordReportList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.effect.keyword.report.list";
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
     * @param Date $startDay
     * 起始日期
     * Required: true
     * Example Value: 
     */
    private $startDay;

    /**
     * @param Date $startDay
     * 起始日期
     * Example Value: 
     */
    public function setStartDay($startDay)
    {
        $this->startDay             = $startDay;
        $this->apiParas["startDay"]  = $startDay;
    }

    public function getStartDay()
    {
        return $this->startDay;
    }

    /**
     * @param Date $endDay
     * 结束日期
     * Required: true
     * Example Value: 
     */
    private $endDay;

    /**
     * @param Date $endDay
     * 结束日期
     * Example Value: 
     */
    public function setEndDay($endDay)
    {
        $this->endDay             = $endDay;
        $this->apiParas["endDay"]  = $endDay;
    }

    public function getEndDay()
    {
        return $this->endDay;
    }

    /**
     * @param Boolean $isDaily
     * 是否分日
     * Required: true
     * Example Value: 
     */
    private $isDaily;

    /**
     * @param Boolean $isDaily
     * 是否分日
     * Example Value: 
     */
    public function setIsDaily($isDaily)
    {
        $this->isDaily             = $isDaily;
        $this->apiParas["isDaily"]  = $isDaily;
    }

    public function getIsDaily()
    {
        return $this->isDaily;
    }

    /**
     * @param Number $clickOrOrderDay
     * 口径(0:当天，1:1天，3:3天，7:7天，15:15天)
     * Required: true
     * Example Value: 
     */
    private $clickOrOrderDay;

    /**
     * @param Number $clickOrOrderDay
     * 口径(0:当天，1:1天，3:3天，7:7天，15:15天)
     * Example Value: 
     */
    public function setClickOrOrderDay($clickOrOrderDay)
    {
        $this->clickOrOrderDay             = $clickOrOrderDay;
        $this->apiParas["clickOrOrderDay"]  = $clickOrOrderDay;
    }

    public function getClickOrOrderDay()
    {
        return $this->clickOrOrderDay;
    }

    /**
     * @param String $areaId
     * 区域id（0：全部）
     * Required: false
     * Example Value: 
     */
    private $areaId;

    /**
     * @param String $areaId
     * 区域id（0：全部）
     * Example Value: 
     */
    public function setAreaId($areaId)
    {
        $this->areaId             = $areaId;
        $this->apiParas["areaId"]  = $areaId;
    }

    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * @param Number $campaignId
     * 计划id
     * Required: false
     * Example Value: 
     */
    private $campaignId;

    /**
     * @param Number $campaignId
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
     * @param Number $groupId
     * 单元id
     * Required: false
     * Example Value: 
     */
    private $groupId;

    /**
     * @param Number $groupId
     * 单元id
     * Example Value: 
     */
    public function setGroupId($groupId)
    {
        $this->groupId             = $groupId;
        $this->apiParas["groupId"]  = $groupId;
    }

    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param Number $adId
     * 创意id
     * Required: false
     * Example Value: 
     */
    private $adId;

    /**
     * @param Number $adId
     * 创意id
     * Example Value: 
     */
    public function setAdId($adId)
    {
        $this->adId             = $adId;
        $this->apiParas["adId"]  = $adId;
    }

    public function getAdId()
    {
        return $this->adId;
    }

    /**
     * @param String $keywords
     * 关键词
     * Required: false
     * Example Value: 
     */
    private $keywords;

    /**
     * @param String $keywords
     * 关键词
     * Example Value: 
     */
    public function setKeywords($keywords)
    {
        $this->keywords             = $keywords;
        $this->apiParas["keywords"]  = $keywords;
    }

    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param Number $pageIndex
     * 当前页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 当前页码
     * Example Value: 
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param Number $pageSize
     * 每页数量(最大值100)
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页数量(最大值100)
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}