<?php

namespace JD\request;

/**
 * 更新被驳回的主图申请
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1679&apiName=jingdong.vc.item.primaryPic.update
 * Class VcItemPrimaryPicUpdate
 * @package Jd\request
 */
class VcItemPrimaryPicUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.primaryPic.update";
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
     * @param String $applyId
     * 申请编号（提交申请后，vc系统产生的申请唯一标识）
     * Required: true
     * Example Value: fa5206b7d0ac4a20acf3805d1b2b9a8c
     */
    private $applyId;

    /**
     * @param String $applyId
     * 申请编号（提交申请后，vc系统产生的申请唯一标识）
     * Example Value: fa5206b7d0ac4a20acf3805d1b2b9a8c
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

    /**
     * @param String $skuId
     * 主图列表对应的sku
     * Required: false
     * Example Value: 1
     */
    private $skuId;

    /**
     * @param String $skuId
     * 主图列表对应的sku
     * Example Value: 1
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
     * @param String $imageList
     * 商品主图列表 第一张为主图
     * Required: false
     * Example Value: 
     */
    private $imageList;

    /**
     * @param String $imageList
     * 商品主图列表 第一张为主图
     * Example Value: 
     */
    public function setImageList($imageList)
    {
        $this->imageList             = $imageList;
        $this->apiParas["image_list"]  = $imageList;
    }

    public function getImageList()
    {
        return $this->imageList;
    }

    /**
     * @param String $skuIdLong
     * 主图列表对应的sku
     * Required: false
     * Example Value: 1
     */
    private $skuIdLong;

    /**
     * @param String $skuIdLong
     * 主图列表对应的sku
     * Example Value: 1
     */
    public function setSkuIdLong($skuIdLong)
    {
        $this->skuIdLong             = $skuIdLong;
        $this->apiParas["sku_id_long"]  = $skuIdLong;
    }

    public function getSkuIdLong()
    {
        return $this->skuIdLong;
    }

    /**
     * @param String $imageList
     * 商品主图列表 第一张为主图
     * Required: false
     * Example Value: 
     */
    private $imageList;

    /**
     * @param String $imageList
     * 商品主图列表 第一张为主图
     * Example Value: 
     */
    public function setImageList($imageList)
    {
        $this->imageList             = $imageList;
        $this->apiParas["image_list_long"]  = $imageList;
    }

    public function getImageList()
    {
        return $this->imageList;
    }

    /**
     * @param String $skuIdLucency
     * 主图列表对应的sku
     * Required: false
     * Example Value: 1
     */
    private $skuIdLucency;

    /**
     * @param String $skuIdLucency
     * 主图列表对应的sku
     * Example Value: 1
     */
    public function setSkuIdLucency($skuIdLucency)
    {
        $this->skuIdLucency             = $skuIdLucency;
        $this->apiParas["sku_id_lucency"]  = $skuIdLucency;
    }

    public function getSkuIdLucency()
    {
        return $this->skuIdLucency;
    }

    /**
     * @param String $imageList
     * 商品主图列表 第一张为主图
     * Required: false
     * Example Value: 
     */
    private $imageList;

    /**
     * @param String $imageList
     * 商品主图列表 第一张为主图
     * Example Value: 
     */
    public function setImageList($imageList)
    {
        $this->imageList             = $imageList;
        $this->apiParas["image_list_lucency"]  = $imageList;
    }

    public function getImageList()
    {
        return $this->imageList;
    }

}