<?php

namespace JD\request;

/**
 * 促销列表查询接口
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=260&apiName=jingdong.seller.promotion.list
 * Class SellerPromotionList
 * @package Jd\request
 */
class SellerPromotionList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.list";
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
     * @param Number $type
     * 促销类型，可选值：单品促销（1），赠品促销（4），套装促销（6），总价促销（10）
     * Required: true
     * Example Value: 1
     */
    private $type;

    /**
     * @param Number $type
     * 促销类型，可选值：单品促销（1），赠品促销（4），套装促销（6），总价促销（10）
     * Example Value: 1
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Number $status
     * 促销状态，可选值：驳回（1），未审核（2），人工审核（3），审核通过（4），已生效（5）
     * Required: false
     * Example Value: 4
     */
    private $status;

    /**
     * @param Number $status
     * 促销状态，可选值：驳回（1），未审核（2），人工审核（3），审核通过（4），已生效（5）
     * Example Value: 4
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param String $beginTime
     * 促销开始时间，格式为yyyy-MM-dd HH:mm:ss，（查询促销开始时间大于等于该值的促销）
     * Required: false
     * Example Value: 2013-11-21 13:30:59 
     */
    private $beginTime;

    /**
     * @param String $beginTime
     * 促销开始时间，格式为yyyy-MM-dd HH:mm:ss，（查询促销开始时间大于等于该值的促销）
     * Example Value: 2013-11-21 13:30:59 
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime             = $beginTime;
        $this->apiParas["begin_time"]  = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
    }

    /**
     * @param String $endTime
     * 促销结束时间，格式为yyyy-MM-dd HH:mm:ss，（查询促销结束时间小于等于该值的促销）
     * Required: false
     * Example Value: 2013-11-21 13:40:59
     */
    private $endTime;

    /**
     * @param String $endTime
     * 促销结束时间，格式为yyyy-MM-dd HH:mm:ss，（查询促销结束时间小于等于该值的促销）
     * Example Value: 2013-11-21 13:40:59
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["end_time"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param Number $skuId
     * 商品skuId（查询sku参加的促销）
     * Required: false
     * Example Value: 112233
     */
    private $skuId;

    /**
     * @param Number $skuId
     * 商品skuId（查询sku参加的促销）
     * Example Value: 112233
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_id"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param Number $favorMode
     * 总价促销订单规则类型，可选值为：满赠（0），满减（1），多买优惠（7），满减送（16）
     * Required: false
     * Example Value: null
     */
    private $favorMode;

    /**
     * @param Number $favorMode
     * 总价促销订单规则类型，可选值为：满赠（0），满减（1），多买优惠（7），满减送（16）
     * Example Value: null
     */
    public function setFavorMode($favorMode)
    {
        $this->favorMode             = $favorMode;
        $this->apiParas["favor_mode"]  = $favorMode;
    }

    public function getFavorMode()
    {
        return $this->favorMode;
    }

    /**
     * @param Number $page
     * 页码（必须为正整数）
     * Required: false
     * Example Value: 1
     */
    private $page;

    /**
     * @param Number $page
     * 页码（必须为正整数）
     * Example Value: 1
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param Number $size
     * 每页记录个数（每页最少1个，最多10个）
     * Required: false
     * Example Value: 10
     */
    private $size;

    /**
     * @param Number $size
     * 每页记录个数（每页最少1个，最多10个）
     * Example Value: 10
     */
    public function setSize($size)
    {
        $this->size             = $size;
        $this->apiParas["size"]  = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

}