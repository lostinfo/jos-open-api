<?php

namespace JD\request;

/**
 * 通过商家skuId修改商品信息
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3090&apiName=jingdong.b2b.gxpt.productService.modifyProduct
 * Class B2bGxptProductServiceModifyProduct
 * @package Jd\request
 */
class B2bGxptProductServiceModifyProduct
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.gxpt.productService.modifyProduct";
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
     * @param Number $productAreaId
     * 产地id
     * Required: false
     * Example Value: 
     */
    private $productAreaId;

    /**
     * @param Number $productAreaId
     * 产地id
     * Example Value: 
     */
    public function setProductAreaId($productAreaId)
    {
        $this->productAreaId             = $productAreaId;
        $this->apiParas["productAreaId"]  = $productAreaId;
    }

    public function getProductAreaId()
    {
        return $this->productAreaId;
    }

    /**
     * @param Number $jdSkuId
     * 京东skuId
     * Required: false
     * Example Value: 
     */
    private $jdSkuId;

    /**
     * @param Number $jdSkuId
     * 京东skuId
     * Example Value: 
     */
    public function setJdSkuId($jdSkuId)
    {
        $this->jdSkuId             = $jdSkuId;
        $this->apiParas["jdSkuId"]  = $jdSkuId;
    }

    public function getJdSkuId()
    {
        return $this->jdSkuId;
    }

    /**
     * @param Number $venderId
     * 商家id
     * Required: false
     * Example Value: 
     */
    private $venderId;

    /**
     * @param Number $venderId
     * 商家id
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    /**
     * @param Number $length
     * 包装（长）
     * Required: false
     * Example Value: 
     */
    private $length;

    /**
     * @param Number $length
     * 包装（长）
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
     * @param String $itemNum
     * 货号
     * Required: false
     * Example Value: 
     */
    private $itemNum;

    /**
     * @param String $itemNum
     * 货号
     * Example Value: 
     */
    public function setItemNum($itemNum)
    {
        $this->itemNum             = $itemNum;
        $this->apiParas["itemNum"]  = $itemNum;
    }

    public function getItemNum()
    {
        return $this->itemNum;
    }

    /**
     * @param String $wareDes
     * 商品描述
     * Required: false
     * Example Value: 
     */
    private $wareDes;

    /**
     * @param String $wareDes
     * 商品描述
     * Example Value: 
     */
    public function setWareDes($wareDes)
    {
        $this->wareDes             = $wareDes;
        $this->apiParas["wareDes"]  = $wareDes;
    }

    public function getWareDes()
    {
        return $this->wareDes;
    }

    /**
     * @param Number $wareWeight
     * 产品毛重
     * Required: false
     * Example Value: 
     */
    private $wareWeight;

    /**
     * @param Number $wareWeight
     * 产品毛重
     * Example Value: 
     */
    public function setWareWeight($wareWeight)
    {
        $this->wareWeight             = $wareWeight;
        $this->apiParas["wareWeight"]  = $wareWeight;
    }

    public function getWareWeight()
    {
        return $this->wareWeight;
    }

    /**
     * @param String[] $imagePath
     * 图片url地址
     * Required: false
     * Example Value: 
     */
    private $imagePath;

    /**
     * @param String[] $imagePath
     * 图片url地址
     * Example Value: 
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath             = $imagePath;
        $this->apiParas["imagePath"]  = $imagePath;
    }

    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * @param Number[] $id
     * 图片id
     * Required: false
     * Example Value: 
     */
    private $id;

    /**
     * @param Number[] $id
     * 图片id
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param String $name
     * 商品名称
     * Required: false
     * Example Value: 
     */
    private $name;

    /**
     * @param String $name
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
     * @param Number $width
     * 宽度
     * Required: false
     * Example Value: 
     */
    private $width;

    /**
     * @param Number $width
     * 宽度
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
     * @param String $upcCode
     * UPC编码
     * Required: false
     * Example Value: 
     */
    private $upcCode;

    /**
     * @param String $upcCode
     * UPC编码
     * Example Value: 
     */
    public function setUpcCode($upcCode)
    {
        $this->upcCode             = $upcCode;
        $this->apiParas["upcCode"]  = $upcCode;
    }

    public function getUpcCode()
    {
        return $this->upcCode;
    }

    /**
     * @param String $consumerSkuId
     * 第三方skuId
     * Required: false
     * Example Value: 
     */
    private $consumerSkuId;

    /**
     * @param String $consumerSkuId
     * 第三方skuId
     * Example Value: 
     */
    public function setConsumerSkuId($consumerSkuId)
    {
        $this->consumerSkuId             = $consumerSkuId;
        $this->apiParas["consumerSkuId"]  = $consumerSkuId;
    }

    public function getConsumerSkuId()
    {
        return $this->consumerSkuId;
    }

    /**
     * @param Number $height
     * 高度
     * Required: false
     * Example Value: 
     */
    private $height;

    /**
     * @param Number $height
     * 高度
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

}