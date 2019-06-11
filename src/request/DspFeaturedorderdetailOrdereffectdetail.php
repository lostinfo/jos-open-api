<?php

namespace JD\request;

/**
 * 查询.聚效.订单效果总揽报表
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=1906&apiName=jingdong.dsp.featuredorderdetail.ordereffectdetail
 * Class DspFeaturedorderdetailOrdereffectdetail
 * @package Jd\request
 */
class DspFeaturedorderdetailOrdereffectdetail
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.featuredorderdetail.ordereffectdetail";
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
     * @param Number $campaignId
     * 推广计划
     * Required: false
     * Example Value: 
     */
    private $campaignId;

    /**
     * @param Number $campaignId
     * 推广计划
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
     * 推广单元
     * Required: false
     * Example Value: 
     */
    private $groupId;

    /**
     * @param Number $groupId
     * 推广单元
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
     * @param String $mySelf
     * 订单类型(全部：1,3;直接订单：3;间接订单：1)
     * Required: true
     * Example Value: 
     */
    private $mySelf;

    /**
     * @param String $mySelf
     * 订单类型(全部：1,3;直接订单：3;间接订单：1)
     * Example Value: 
     */
    public function setMySelf($mySelf)
    {
        $this->mySelf             = $mySelf;
        $this->apiParas["mySelf"]  = $mySelf;
    }

    public function getMySelf()
    {
        return $this->mySelf;
    }

    /**
     * @param String $province
     * 地区
     * Required: false
     * Example Value: 
     */
    private $province;

    /**
     * @param String $province
     * 地区
     * Example Value: 
     */
    public function setProvince($province)
    {
        $this->province             = $province;
        $this->apiParas["province"]  = $province;
    }

    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param String $mediaId
     * 广告位ID(逗号分割)
     * Required: false
     * Example Value: 
     */
    private $mediaId;

    /**
     * @param String $mediaId
     * 广告位ID(逗号分割)
     * Example Value: 
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId             = $mediaId;
        $this->apiParas["mediaId"]  = $mediaId;
    }

    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * @param String $unionid
     * 投放平台(全部:空;站内：52007;站外:52006;第三方联盟:52008)
     * Required: false
     * Example Value: 
     */
    private $unionid;

    /**
     * @param String $unionid
     * 投放平台(全部:空;站内：52007;站外:52006;第三方联盟:52008)
     * Example Value: 
     */
    public function setUnionid($unionid)
    {
        $this->unionid             = $unionid;
        $this->apiParas["unionid"]  = $unionid;
    }

    public function getUnionid()
    {
        return $this->unionid;
    }

    /**
     * @param Number $orderStatus
     * 订单状态(全部：空；已完成：2;已取消：3;已付款：4;货到付款:5;网上支付：6)
     * Required: false
     * Example Value: 
     */
    private $orderStatus;

    /**
     * @param Number $orderStatus
     * 订单状态(全部：空；已完成：2;已取消：3;已付款：4;货到付款:5;网上支付：6)
     * Example Value: 
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus             = $orderStatus;
        $this->apiParas["orderStatus"]  = $orderStatus;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param Date $clickStartDay
     * 点击起始日期
     * Required: true
     * Example Value: 
     */
    private $clickStartDay;

    /**
     * @param Date $clickStartDay
     * 点击起始日期
     * Example Value: 
     */
    public function setClickStartDay($clickStartDay)
    {
        $this->clickStartDay             = $clickStartDay;
        $this->apiParas["clickStartDay"]  = $clickStartDay;
    }

    public function getClickStartDay()
    {
        return $this->clickStartDay;
    }

    /**
     * @param Date $clickEndDay
     * 点击结束日期
     * Required: true
     * Example Value: 
     */
    private $clickEndDay;

    /**
     * @param Date $clickEndDay
     * 点击结束日期
     * Example Value: 
     */
    public function setClickEndDay($clickEndDay)
    {
        $this->clickEndDay             = $clickEndDay;
        $this->apiParas["clickEndDay"]  = $clickEndDay;
    }

    public function getClickEndDay()
    {
        return $this->clickEndDay;
    }

    /**
     * @param Date $orderStartDay
     * 下单起始日期
     * Required: true
     * Example Value: 
     */
    private $orderStartDay;

    /**
     * @param Date $orderStartDay
     * 下单起始日期
     * Example Value: 
     */
    public function setOrderStartDay($orderStartDay)
    {
        $this->orderStartDay             = $orderStartDay;
        $this->apiParas["orderStartDay"]  = $orderStartDay;
    }

    public function getOrderStartDay()
    {
        return $this->orderStartDay;
    }

    /**
     * @param Date $orderEndDay
     * 下单结束日期
     * Required: true
     * Example Value: 
     */
    private $orderEndDay;

    /**
     * @param Date $orderEndDay
     * 下单结束日期
     * Example Value: 
     */
    public function setOrderEndDay($orderEndDay)
    {
        $this->orderEndDay             = $orderEndDay;
        $this->apiParas["orderEndDay"]  = $orderEndDay;
    }

    public function getOrderEndDay()
    {
        return $this->orderEndDay;
    }

    /**
     * @param Number $realTime
     * 转换周期(当天：0;1天：1;3天：3; 7天：7;15天：15)
     * Required: false
     * Example Value: 
     */
    private $realTime;

    /**
     * @param Number $realTime
     * 转换周期(当天：0;1天：1;3天：3; 7天：7;15天：15)
     * Example Value: 
     */
    public function setRealTime($realTime)
    {
        $this->realTime             = $realTime;
        $this->apiParas["realTime"]  = $realTime;
    }

    public function getRealTime()
    {
        return $this->realTime;
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