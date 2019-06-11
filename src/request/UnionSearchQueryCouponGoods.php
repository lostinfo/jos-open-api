<?php

namespca Lostinfo\JosOpenApi;

/**
 * 优惠券商品查询【申请】
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=2593&apiName=jingdong.union.search.queryCouponGoods
 * Class UnionSearchQueryCouponGoods
 * @package Jd\request
 */
class UnionSearchQueryCouponGoods
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.union.search.queryCouponGoods";
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
     * @param int[] $skuIdList
     * skuId集合，长度最大30，可为空。如果传值，忽略其他查询条件。
     * Required: false
     * Example Value: 
     */
    private $skuIdList;

    /**
     * @param int[] $skuIdList
     * skuId集合，长度最大30，可为空。如果传值，忽略其他查询条件。
     * Example Value: 
     */
    public function setSkuIdList($skuIdList)
    {
        $this->skuIdList             = $skuIdList;
        $this->apiParas["skuIdList"]  = $skuIdList;
    }

    public function getSkuIdList()
    {
        return $this->skuIdList;
    }

    /**
     * @param int $pageIndex
     * 页码，默认1
     * Required: false
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页码，默认1
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
     * @param int $pageSize
     * 单页数最大30，默认20
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 单页数最大30，默认20
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
     * @param int $cid3
     * 三级类目
     * Required: false
     * Example Value: 
     */
    private $cid3;

    /**
     * @param int $cid3
     * 三级类目
     * Example Value: 
     */
    public function setCid3($cid3)
    {
        $this->cid3             = $cid3;
        $this->apiParas["cid3"]  = $cid3;
    }

    public function getCid3()
    {
        return $this->cid3;
    }

    /**
     * @param string $goodsKeyword
     * 商品关键词
     * Required: false
     * Example Value: 
     */
    private $goodsKeyword;

    /**
     * @param string $goodsKeyword
     * 商品关键词
     * Example Value: 
     */
    public function setGoodsKeyword($goodsKeyword)
    {
        $this->goodsKeyword             = $goodsKeyword;
        $this->apiParas["goodsKeyword"]  = $goodsKeyword;
    }

    public function getGoodsKeyword()
    {
        return $this->goodsKeyword;
    }

    /**
     * @param int $priceFrom
     * 商品价格下限
     * Required: false
     * Example Value: 
     */
    private $priceFrom;

    /**
     * @param int $priceFrom
     * 商品价格下限
     * Example Value: 
     */
    public function setPriceFrom($priceFrom)
    {
        $this->priceFrom             = $priceFrom;
        $this->apiParas["priceFrom"]  = $priceFrom;
    }

    public function getPriceFrom()
    {
        return $this->priceFrom;
    }

    /**
     * @param int $priceTo
     * 商品价格上限
     * Required: false
     * Example Value: 
     */
    private $priceTo;

    /**
     * @param int $priceTo
     * 商品价格上限
     * Example Value: 
     */
    public function setPriceTo($priceTo)
    {
        $this->priceTo             = $priceTo;
        $this->apiParas["priceTo"]  = $priceTo;
    }

    public function getPriceTo()
    {
        return $this->priceTo;
    }

}