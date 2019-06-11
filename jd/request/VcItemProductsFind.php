<?php

namespace JD\request;

/**
 * 获取我的商品列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1681&apiName=jingdong.vc.item.products.find
 * Class VcItemProductsFind
 * @package Jd\request
 */
class VcItemProductsFind
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.products.find";
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
     * 商品编号
     * Required: false
     * Example Value: 1560
     */
    private $wareId;

    /**
     * @param String $wareId
     * 商品编号
     * Example Value: 1560
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
     * 品牌id
     * Required: false
     * Example Value: 685
     */
    private $brandId;

    /**
     * @param Number $brandId
     * 品牌id
     * Example Value: 685
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
     * 三级分类id
     * Required: false
     * Example Value: 12
     */
    private $categoryId;

    /**
     * @param Number $categoryId
     * 三级分类id
     * Example Value: 12
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
     * @param Number $saleState
     * 上下柜状态
     * Required: false
     * Example Value: 1
     */
    private $saleState;

    /**
     * @param Number $saleState
     * 上下柜状态
     * Example Value: 1
     */
    public function setSaleState($saleState)
    {
        $this->saleState             = $saleState;
        $this->apiParas["sale_state"]  = $saleState;
    }

    public function getSaleState()
    {
        return $this->saleState;
    }

    /**
     * @param Date $beginModifyTime
     * 开始修改时间
     * Required: false
     * Example Value: 2015-11-13 59:59:59
     */
    private $beginModifyTime;

    /**
     * @param Date $beginModifyTime
     * 开始修改时间
     * Example Value: 2015-11-13 59:59:59
     */
    public function setBeginModifyTime($beginModifyTime)
    {
        $this->beginModifyTime             = $beginModifyTime;
        $this->apiParas["begin_modify_time"]  = $beginModifyTime;
    }

    public function getBeginModifyTime()
    {
        return $this->beginModifyTime;
    }

    /**
     * @param Date $endModifyTime
     * 截止修改时间
     * Required: false
     * Example Value: 2015-11-13 59:59:59
     */
    private $endModifyTime;

    /**
     * @param Date $endModifyTime
     * 截止修改时间
     * Example Value: 2015-11-13 59:59:59
     */
    public function setEndModifyTime($endModifyTime)
    {
        $this->endModifyTime             = $endModifyTime;
        $this->apiParas["end_modify_time"]  = $endModifyTime;
    }

    public function getEndModifyTime()
    {
        return $this->endModifyTime;
    }

    /**
     * @param Number $offset
     * 记录起始值
     * Required: false
     * Example Value: 1
     */
    private $offset;

    /**
     * @param Number $offset
     * 记录起始值
     * Example Value: 1
     */
    public function setOffset($offset)
    {
        $this->offset             = $offset;
        $this->apiParas["offset"]  = $offset;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param Number $pageSize
     * 每次获取记录数
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每次获取记录数
     * Example Value: 10
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}