<?php

namespace JD\request;

/**
 * 获取产品信息
 * 景点门票API-POP虚拟业务,开放景点门票业务API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=131&apiId=785&apiName=jingdong.pop.lvyou.jingdian.product.list.get
 * Class PopLvyouJingdianProductListGet
 * @package Jd\request
 */
class PopLvyouJingdianProductListGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.lvyou.jingdian.product.list.get";
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
     * @param Number $jingdianId
     * 景点ID
     * Required: false
     * Example Value: 
     */
    private $jingdianId;

    /**
     * @param Number $jingdianId
     * 景点ID
     * Example Value: 
     */
    public function setJingdianId($jingdianId)
    {
        $this->jingdianId             = $jingdianId;
        $this->apiParas["jingdianId"]  = $jingdianId;
    }

    public function getJingdianId()
    {
        return $this->jingdianId;
    }

    /**
     * @param Number $productStatus
     * 商品状态：1:新建待审核2:审核中3:审核中并上架4:下架5:上架6:回收7:审核失败
     * Required: true
     * Example Value: 
     */
    private $productStatus;

    /**
     * @param Number $productStatus
     * 商品状态：1:新建待审核2:审核中3:审核中并上架4:下架5:上架6:回收7:审核失败
     * Example Value: 
     */
    public function setProductStatus($productStatus)
    {
        $this->productStatus             = $productStatus;
        $this->apiParas["productStatus"]  = $productStatus;
    }

    public function getProductStatus()
    {
        return $this->productStatus;
    }

    /**
     * @param Number $pageNum
     * 默认1
     * Required: false
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param Number $pageNum
     * 默认1
     * Example Value: 
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"]  = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param Number $pageSize
     * 默认20条每页，最多50条
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 默认20条每页，最多50条
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