<?php

namespace JD\request;

/**
 * 添加广告词申请
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1659&apiName=jingdong.vc.item.advertise.apply.create
 * Class VcItemAdvertiseApplyCreate
 * @package Jd\request
 */
class VcItemAdvertiseApplyCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.advertise.apply.create";
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
     * Required: true
     * Example Value: 2677015
     */
    private $wareId;

    /**
     * @param String $wareId
     * 商品编号
     * Example Value: 2677015
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
     * @param String[] $skuId
     * 商品编号
     * Required: true
     * Example Value: 2677015
     */
    private $skuId;

    /**
     * @param String[] $skuId
     * 商品编号
     * Example Value: 2677015
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
     * @param String[] $adWord
     * 新广告词（200个字符内）
     * Required: true
     * Example Value: 新广告词样例
     */
    private $adWord;

    /**
     * @param String[] $adWord
     * 新广告词（200个字符内）
     * Example Value: 新广告词样例
     */
    public function setAdWord($adWord)
    {
        $this->adWord             = $adWord;
        $this->apiParas["ad_word"]  = $adWord;
    }

    public function getAdWord()
    {
        return $this->adWord;
    }

}