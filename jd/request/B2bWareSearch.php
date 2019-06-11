<?php

namespace JD\request;

/**
 * 查询可售商品列表
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3154&apiName=jingdong.b2b.ware.search
 * Class B2bWareSearch
 * @package Jd\request
 */
class B2bWareSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.ware.search";
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
     * @param String $channelEnum
     * 渠道枚举：FX
     * Required: true
     * Example Value: 
     */
    private $channelEnum;

    /**
     * @param String $channelEnum
     * 渠道枚举：FX
     * Example Value: 
     */
    public function setChannelEnum($channelEnum)
    {
        $this->channelEnum             = $channelEnum;
        $this->apiParas["channelType"]  = $channelEnum;
    }

    public function getChannelEnum()
    {
        return $this->channelEnum;
    }

    /**
     * @param Number $thirdCid
     * 三级类目id
     * Required: true
     * Example Value: 
     */
    private $thirdCid;

    /**
     * @param Number $thirdCid
     * 三级类目id
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
     * @param String $skuSearchTypeEnum
     * 查询类型：FX_AGENT_CATE_SEARCH
     * Required: true
     * Example Value: 
     */
    private $skuSearchTypeEnum;

    /**
     * @param String $skuSearchTypeEnum
     * 查询类型：FX_AGENT_CATE_SEARCH
     * Example Value: 
     */
    public function setSkuSearchTypeEnum($skuSearchTypeEnum)
    {
        $this->skuSearchTypeEnum             = $skuSearchTypeEnum;
        $this->apiParas["skuSearchTypeEnum"]  = $skuSearchTypeEnum;
    }

    public function getSkuSearchTypeEnum()
    {
        return $this->skuSearchTypeEnum;
    }

    /**
     * @param Number $pageSize
     * 分页每页数量
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 分页每页数量
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

    /**
     * @param Number $laskSkuId
     * 上一次查询到的最后skuid
     * Required: true
     * Example Value: 
     */
    private $laskSkuId;

    /**
     * @param Number $laskSkuId
     * 上一次查询到的最后skuid
     * Example Value: 
     */
    public function setLaskSkuId($laskSkuId)
    {
        $this->laskSkuId             = $laskSkuId;
        $this->apiParas["laskSkuId"]  = $laskSkuId;
    }

    public function getLaskSkuId()
    {
        return $this->laskSkuId;
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
     * @param Number $brandId
     * 品牌id
     * Required: true
     * Example Value: 
     */
    private $brandId;

    /**
     * @param Number $brandId
     * 品牌id
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

}