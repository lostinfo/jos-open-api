<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 商品资料修改
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=140&apiName=jingdong.logistics.sku.update
 * Class LogisticsSkuUpdate
 * @package Jd\request
 */
class LogisticsSkuUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.sku.update";
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
     * @param string $goodsNo
     * JOSL商品唯一标识
     * Required: true
     * Example Value: 
     */
    private $goodsNo;

    /**
     * @param string $goodsNo
     * JOSL商品唯一标识
     * Example Value: 
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goods_no"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param string $barCode
     * 条码
     * Required: false
     * Example Value: 
     */
    private $barCode;

    /**
     * @param string $barCode
     * 条码
     * Example Value: 
     */
    public function setBarCode($barCode)
    {
        $this->barCode             = $barCode;
        $this->apiParas["bar_code"]  = $barCode;
    }

    public function getBarCode()
    {
        return $this->barCode;
    }

    /**
     * @param string $skuId
     * JOSL商品唯一标识(外部系统商品唯一标识) 
     * Required: false
     * Example Value: 
     */
    private $skuId;

    /**
     * @param string $skuId
     * JOSL商品唯一标识(外部系统商品唯一标识) 
     * Example Value: 
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
     * @param string $name
     * 商品名称
     * Required: false
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
     * 商品名称
     * Example Value: 
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
     * @param string $goodsAbbreviation
     * 商品简称
     * Required: false
     * Example Value: 
     */
    private $goodsAbbreviation;

    /**
     * @param string $goodsAbbreviation
     * 商品简称
     * Example Value: 
     */
    public function setGoodsAbbreviation($goodsAbbreviation)
    {
        $this->goodsAbbreviation             = $goodsAbbreviation;
        $this->apiParas["goods_abbreviation"]  = $goodsAbbreviation;
    }

    public function getGoodsAbbreviation()
    {
        return $this->goodsAbbreviation;
    }

    /**
     * @param string $categoryId
     * 商品分类编号(外部数据)
     * Required: false
     * Example Value: 
     */
    private $categoryId;

    /**
     * @param string $categoryId
     * 商品分类编号(外部数据)
     * Example Value: 
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
     * @param string $categoryName
     * 商品分类名称
     * Required: false
     * Example Value: 
     */
    private $categoryName;

    /**
     * @param string $categoryName
     * 商品分类名称
     * Example Value: 
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName             = $categoryName;
        $this->apiParas["category_name"]  = $categoryName;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param string $brandNo
     * 品牌编号
     * Required: false
     * Example Value: 
     */
    private $brandNo;

    /**
     * @param string $brandNo
     * 品牌编号
     * Example Value: 
     */
    public function setBrandNo($brandNo)
    {
        $this->brandNo             = $brandNo;
        $this->apiParas["brand_no"]  = $brandNo;
    }

    public function getBrandNo()
    {
        return $this->brandNo;
    }

    /**
     * @param string $brandName
     * 品牌名称
     * Required: false
     * Example Value: 
     */
    private $brandName;

    /**
     * @param string $brandName
     * 品牌名称
     * Example Value: 
     */
    public function setBrandName($brandName)
    {
        $this->brandName             = $brandName;
        $this->apiParas["brand_name"]  = $brandName;
    }

    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * @param string $format
     * 商品规格
     * Required: false
     * Example Value: 
     */
    private $format;

    /**
     * @param string $format
     * 商品规格
     * Example Value: 
     */
    public function setFormat($format)
    {
        $this->format             = $format;
        $this->apiParas["format"]  = $format;
    }

    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $color
     * 商品颜色
     * Required: false
     * Example Value: 
     */
    private $color;

    /**
     * @param string $color
     * 商品颜色
     * Example Value: 
     */
    public function setColor($color)
    {
        $this->color             = $color;
        $this->apiParas["color"]  = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $size
     * 商品尺码
     * Required: false
     * Example Value: 
     */
    private $size;

    /**
     * @param string $size
     * 商品尺码
     * Example Value: 
     */
    public function setSize($size)
    {
        $this->size             = $size;
        $this->apiParas["size"]  = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $grossWeight
     * 商品毛重量
     * Required: false
     * Example Value: 
     */
    private $grossWeight;

    /**
     * @param string $grossWeight
     * 商品毛重量
     * Example Value: 
     */
    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight             = $grossWeight;
        $this->apiParas["gross_weight"]  = $grossWeight;
    }

    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    /**
     * @param string $netWeight
     * 商品净重量
     * Required: false
     * Example Value: 
     */
    private $netWeight;

    /**
     * @param string $netWeight
     * 商品净重量
     * Example Value: 
     */
    public function setNetWeight($netWeight)
    {
        $this->netWeight             = $netWeight;
        $this->apiParas["net_weight"]  = $netWeight;
    }

    public function getNetWeight()
    {
        return $this->netWeight;
    }

    /**
     * @param string $sizeDefinition
     * 商品件型(分为9种件型用于计费使用请慎重考虑.)
     * Required: false
     * Example Value: 
     */
    private $sizeDefinition;

    /**
     * @param string $sizeDefinition
     * 商品件型(分为9种件型用于计费使用请慎重考虑.)
     * Example Value: 
     */
    public function setSizeDefinition($sizeDefinition)
    {
        $this->sizeDefinition             = $sizeDefinition;
        $this->apiParas["size_definition"]  = $sizeDefinition;
    }

    public function getSizeDefinition()
    {
        return $this->sizeDefinition;
    }

    /**
     * @param string $suppliersName
     * 供应商名称
     * Required: false
     * Example Value: 
     */
    private $suppliersName;

    /**
     * @param string $suppliersName
     * 供应商名称
     * Example Value: 
     */
    public function setSuppliersName($suppliersName)
    {
        $this->suppliersName             = $suppliersName;
        $this->apiParas["suppliers_name"]  = $suppliersName;
    }

    public function getSuppliersName()
    {
        return $this->suppliersName;
    }

    /**
     * @param string $manufacturer
     * 生产厂商
     * Required: false
     * Example Value: 
     */
    private $manufacturer;

    /**
     * @param string $manufacturer
     * 生产厂商
     * Example Value: 
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer             = $manufacturer;
        $this->apiParas["manufacturer"]  = $manufacturer;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param string $suppliersNo
     * 供应商编码
     * Required: false
     * Example Value: 
     */
    private $suppliersNo;

    /**
     * @param string $suppliersNo
     * 供应商编码
     * Example Value: 
     */
    public function setSuppliersNo($suppliersNo)
    {
        $this->suppliersNo             = $suppliersNo;
        $this->apiParas["suppliers_no"]  = $suppliersNo;
    }

    public function getSuppliersNo()
    {
        return $this->suppliersNo;
    }

    /**
     * @param string $productArea
     * 产地
     * Required: false
     * Example Value: 
     */
    private $productArea;

    /**
     * @param string $productArea
     * 产地
     * Example Value: 
     */
    public function setProductArea($productArea)
    {
        $this->productArea             = $productArea;
        $this->apiParas["product_area"]  = $productArea;
    }

    public function getProductArea()
    {
        return $this->productArea;
    }

    /**
     * @param int $length
     * 长
     * Required: false
     * Example Value: 
     */
    private $length;

    /**
     * @param int $length
     * 长
     * Example Value: 
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

    /**
     * @param int $width
     * 宽
     * Required: false
     * Example Value: 
     */
    private $width;

    /**
     * @param int $width
     * 宽
     * Example Value: 
     */
    public function setWidth($width)
    {
        $this->width             = $width;
        $this->apiParas["width"]  = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $height
     * 高
     * Required: false
     * Example Value: 
     */
    private $height;

    /**
     * @param int $height
     * 高
     * Example Value: 
     */
    public function setHeight($height)
    {
        $this->height             = $height;
        $this->apiParas["height"]  = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $volume
     * 体积
     * Required: false
     * Example Value: 
     */
    private $volume;

    /**
     * @param int $volume
     * 体积
     * Example Value: 
     */
    public function setVolume($volume)
    {
        $this->volume             = $volume;
        $this->apiParas["volume"]  = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param int $safe
     * 是否保质期管理(1为保质期管理,0为非保质期管理,不强制加入.)
     * Required: false
     * Example Value: 
     */
    private $safe;

    /**
     * @param int $safe
     * 是否保质期管理(1为保质期管理,0为非保质期管理,不强制加入.)
     * Example Value: 
     */
    public function setSafe($safe)
    {
        $this->safe             = $safe;
        $this->apiParas["is_safe"]  = $safe;
    }

    public function getSafe()
    {
        return $this->safe;
    }

    /**
     * @param string $safeDate
     * 保质期天数(非保质期可不填写,保质期商品请填写保质期为多少天如30天请填写30.)
     * Required: false
     * Example Value: 
     */
    private $safeDate;

    /**
     * @param string $safeDate
     * 保质期天数(非保质期可不填写,保质期商品请填写保质期为多少天如30天请填写30.)
     * Example Value: 
     */
    public function setSafeDate($safeDate)
    {
        $this->safeDate             = $safeDate;
        $this->apiParas["safe_date"]  = $safeDate;
    }

    public function getSafeDate()
    {
        return $this->safeDate;
    }

}