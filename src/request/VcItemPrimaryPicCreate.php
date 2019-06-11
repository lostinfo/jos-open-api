<?php

namespace JD\request;

/**
 * 添加更新主图信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1677&apiName=jingdong.vc.item.primaryPic.create
 * Class VcItemPrimaryPicCreate
 * @package Jd\request
 */
class VcItemPrimaryPicCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.primaryPic.create";
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
     * @param String[] $skuId
     * 主图列表对应的sku
     * Required: false
     * Example Value: 1
     */
    private $skuId;

    /**
     * @param String[] $skuId
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
     * @param String[] $imageList
     * 商品主图url串,中间以英文分号分隔 第一张为主图,图片url格式请参考示例
     * Required: false
     * Example Value: jfs/t34/345/595119105/184734/5cebf89a/59132defNee807d15.jpg;jfs/t1270/217/166271583/299821/27c3f1b3/55069318Nd404ed16.jpg
     */
    private $imageList;

    /**
     * @param String[] $imageList
     * 商品主图url串,中间以英文分号分隔 第一张为主图,图片url格式请参考示例
     * Example Value: jfs/t34/345/595119105/184734/5cebf89a/59132defNee807d15.jpg;jfs/t1270/217/166271583/299821/27c3f1b3/55069318Nd404ed16.jpg
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
     * @param String[] $skuIdLong
     * 主图列表对应的sku
     * Required: false
     * Example Value: 1
     */
    private $skuIdLong;

    /**
     * @param String[] $skuIdLong
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
     * @param String[] $imageList
     * 商品主图url串,中间以英文分号分隔 第一张为主图,图片url格式请参考示例
     * Required: false
     * Example Value: jfs/t34/345/595119105/184734/5cebf89a/59132defNee807d15.jpg;jfs/t1270/217/166271583/299821/27c3f1b3/55069318Nd404ed16.jpg
     */
    private $imageList;

    /**
     * @param String[] $imageList
     * 商品主图url串,中间以英文分号分隔 第一张为主图,图片url格式请参考示例
     * Example Value: jfs/t34/345/595119105/184734/5cebf89a/59132defNee807d15.jpg;jfs/t1270/217/166271583/299821/27c3f1b3/55069318Nd404ed16.jpg
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
     * @param String[] $skuIdLucency
     * 主图列表对应的sku
     * Required: false
     * Example Value: 1
     */
    private $skuIdLucency;

    /**
     * @param String[] $skuIdLucency
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
     * @param String[] $imageList
     * 商品主图url串,透明图一个SKU只能上传一张
     * Required: false
     * Example Value: jfs/t34/345/595119105/184734/5cebf89a/59132defNee807d15.jpg
     */
    private $imageList;

    /**
     * @param String[] $imageList
     * 商品主图url串,透明图一个SKU只能上传一张
     * Example Value: jfs/t34/345/595119105/184734/5cebf89a/59132defNee807d15.jpg
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