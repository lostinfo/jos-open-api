<?php

namespace JD\request;

/**
 * 获取商品主图申请列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1173&apiName=jingdong.vc.item.primaryPic.applies.find
 * Class VcItemPrimaryPicAppliesFind
 * @package Jd\request
 */
class VcItemPrimaryPicAppliesFind
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.primaryPic.applies.find";
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
     * @param String $wareId
     * 商品编码
     * Required: false
     * Example Value: 45618
     */
    private $wareId;

    /**
     * @param String $wareId
     * 商品编码
     * Example Value: 45618
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["ware_id"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param String $name
     * 商品名称
     * Required: false
     * Example Value: 京东电脑
     */
    private $name;

    /**
     * @param String $name
     * 商品名称
     * Example Value: 京东电脑
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
     * @param Number $brandId
     * 品牌Id
     * Required: false
     * Example Value: 672
     */
    private $brandId;

    /**
     * @param Number $brandId
     * 品牌Id
     * Example Value: 672
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brand_id"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param Number $categoryId
     * 分类id
     * Required: false
     * Example Value: 213
     */
    private $categoryId;

    /**
     * @param Number $categoryId
     * 分类id
     * Example Value: 213
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId             = $categoryId;
        $this->apiParas["category_id"]  = $categoryId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param Number $state
     * 状态
     * Required: false
     * Example Value: 1
     */
    private $state;

    /**
     * @param Number $state
     * 状态
     * Example Value: 1
     */
    public function setState($state)
    {
        $this->state             = $state;
        $this->apiParas["state"]  = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    /**
     * @param String $beginApplyTime
     * 开始时间,精确到天
     * Required: false
     * Example Value: 2015-11-15 00:00:00
     */
    private $beginApplyTime;

    /**
     * @param String $beginApplyTime
     * 开始时间,精确到天
     * Example Value: 2015-11-15 00:00:00
     */
    public function setBeginApplyTime($beginApplyTime)
    {
        $this->beginApplyTime             = $beginApplyTime;
        $this->apiParas["begin_apply_time"]  = $beginApplyTime;
    }

    public function getBeginApplyTime()
    {
        return $this->beginApplyTime;
    }

    /**
     * @param String $endApplyTime
     * 结束时间 精确到天
     * Required: false
     * Example Value: 2015-11-15 00:00:00
     */
    private $endApplyTime;

    /**
     * @param String $endApplyTime
     * 结束时间 精确到天
     * Example Value: 2015-11-15 00:00:00
     */
    public function setEndApplyTime($endApplyTime)
    {
        $this->endApplyTime             = $endApplyTime;
        $this->apiParas["end_apply_time"]  = $endApplyTime;
    }

    public function getEndApplyTime()
    {
        return $this->endApplyTime;
    }

    /**
     * @param Number $page
     * 页码
     * Required: false
     * Example Value: 1
     */
    private $page;

    /**
     * @param Number $page
     * 页码
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
     * @param Number $length
     * 步长
     * Required: false
     * Example Value: 10
     */
    private $length;

    /**
     * @param Number $length
     * 步长
     * Example Value: 10
     */
    public function setLength($length)
    {
        $this->length             = $length;
        $this->apiParas["length"]  = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

}