<?php

namespca Lostinfo\JosOpenApi;

/**
 * 更新驳回的广告词申请
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1657&apiName=jingdong.vc.item.advertise.apply.update
 * Class VcItemAdvertiseApplyUpdate
 * @package Jd\request
 */
class VcItemAdvertiseApplyUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.advertise.apply.update";
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
     * @param string[] $skuId
     * 商品编号
     * Required: true
     * Example Value: 2677015
     */
    private $skuId;

    /**
     * @param string[] $skuId
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
     * @param string[] $adWord
     * 新广告词（200个字符内）
     * Required: true
     * Example Value: 新广告词样例
     */
    private $adWord;

    /**
     * @param string[] $adWord
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

    /**
     * @param string $applyId
     * 申请编号(提交申请后，vc系统产生的申请唯一标识)
     * Required: true
     * Example Value: f22a03d5da8844269b6534e5e558c884
     */
    private $applyId;

    /**
     * @param string $applyId
     * 申请编号(提交申请后，vc系统产生的申请唯一标识)
     * Example Value: f22a03d5da8844269b6534e5e558c884
     */
    public function setApplyId($applyId)
    {
        $this->applyId             = $applyId;
        $this->apiParas["apply_id"]  = $applyId;
    }

    public function getApplyId()
    {
        return $this->applyId;
    }

}