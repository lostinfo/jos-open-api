<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取推广商品信息接口
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1413&apiName=jingdong.service.promotion.goodsInfo
 * Class ServicePromotionGoodsInfo
 * @package Jd\request
 */
class ServicePromotionGoodsInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.promotion.goodsInfo";
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
     * @param string $skuIds
     * 京东skuID串，逗号分割，最多100个（非常重要 请大家关注：：：如果输入的sk串中某个skuID的商品不在推广中[就是没有佣金]，返回结果中不会包含这个商品的信息） 
     * Required: true
     * Example Value: 
     */
    private $skuIds;

    /**
     * @param string $skuIds
     * 京东skuID串，逗号分割，最多100个（非常重要 请大家关注：：：如果输入的sk串中某个skuID的商品不在推广中[就是没有佣金]，返回结果中不会包含这个商品的信息） 
     * Example Value: 
     */
    public function setSkuIds($skuIds)
    {
        $this->skuIds             = $skuIds;
        $this->apiParas["skuIds"]  = $skuIds;
    }

    public function getSkuIds()
    {
        return $this->skuIds;
    }

}