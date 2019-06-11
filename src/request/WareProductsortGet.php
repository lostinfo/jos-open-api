<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取商品分类信息
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=241&apiName=jingdong.ware.productsort.get
 * Class WareProductsortGet
 * @package Jd\request
 */
class WareProductsortGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.productsort.get";
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
     * @param int[] $productSortId
     * 可批量查询分类ID，中间用逗号分隔
     * Required: true
     * Example Value: 652，833
     */
    private $productSortId;

    /**
     * @param int[] $productSortId
     * 可批量查询分类ID，中间用逗号分隔
     * Example Value: 652，833
     */
    public function setProductSortId($productSortId)
    {
        $this->productSortId             = $productSortId;
        $this->apiParas["product_sort_ids"]  = $productSortId;
    }

    public function getProductSortId()
    {
        return $this->productSortId;
    }

}