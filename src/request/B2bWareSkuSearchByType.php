<?php

namespace JD\request;

/**
 * 查询可售商品列表
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3110&apiName=jingdong.b2b.ware.skuSearchByType
 * Class B2bWareSkuSearchByType
 * @package Jd\request
 */
class B2bWareSkuSearchByType
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.ware.skuSearchByType";
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
     * @param String $channelType
     * 渠道类型 FX:分销渠道业务 FX_GLOBAL:分销全球购 XTL:新通路渠道业务 KA:大客户渠道业务 YAO:医药城渠道 ALL:不区分渠道 JIADIAN_KA:家电京采-大客户 JIADIAN_XC:家电京采-渠道下沉 TUOPAN:托盘 GXPT_DX:供销平台代销模式 GXPT_FX:供销平台分销模式
     * Required: true
     * Example Value: 
     */
    private $channelType;

    /**
     * @param String $channelType
     * 渠道类型 FX:分销渠道业务 FX_GLOBAL:分销全球购 XTL:新通路渠道业务 KA:大客户渠道业务 YAO:医药城渠道 ALL:不区分渠道 JIADIAN_KA:家电京采-大客户 JIADIAN_XC:家电京采-渠道下沉 TUOPAN:托盘 GXPT_DX:供销平台代销模式 GXPT_FX:供销平台分销模式
     * Example Value: 
     */
    public function setChannelType($channelType)
    {
        $this->channelType             = $channelType;
        $this->apiParas["channelType"]  = $channelType;
    }

    public function getChannelType()
    {
        return $this->channelType;
    }

    /**
     * @param Number $thirdCid
     * 三级分类
     * Required: true
     * Example Value: 
     */
    private $thirdCid;

    /**
     * @param Number $thirdCid
     * 三级分类
     * Example Value: 
     */
    public function setThirdCid($thirdCid)
    {
        $this->thirdCid             = $thirdCid;
        $this->apiParas["thirdCid"]  = $thirdCid;
    }

    public function getThirdCid()
    {
        return $this->thirdCid;
    }

    /**
     * @param Number $brandId
     * 品牌
     * Required: true
     * Example Value: 
     */
    private $brandId;

    /**
     * @param Number $brandId
     * 品牌
     * Example Value: 
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brandId"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param Number $lastSkuId
     * 上一次查询最末skuId，主要解决大于一万条数据无法查询到的问题，类似于游标的查询方式，一直递归到无返回数据即可。
     * Required: true
     * Example Value: 
     */
    private $lastSkuId;

    /**
     * @param Number $lastSkuId
     * 上一次查询最末skuId，主要解决大于一万条数据无法查询到的问题，类似于游标的查询方式，一直递归到无返回数据即可。
     * Example Value: 
     */
    public function setLastSkuId($lastSkuId)
    {
        $this->lastSkuId             = $lastSkuId;
        $this->apiParas["lastSkuId"]  = $lastSkuId;
    }

    public function getLastSkuId()
    {
        return $this->lastSkuId;
    }

    /**
     * @param Number $pageNo
     * 当前页
     * Required: true
     * Example Value: 
     */
    private $pageNo;

    /**
     * @param Number $pageNo
     * 当前页
     * Example Value: 
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param Number $pageSize
     * 页大小
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 页大小
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