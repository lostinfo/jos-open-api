<?php

namespace Lostinfo\JosOpenApi\request;

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
     * @param int $productAreaId
     * 产地id
     * Required: false
     * Example Value: 
     */
    private $productAreaId;

    /**
     * @param int $productAreaId
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
     * @param int $jdSkuId
     * 京东skuId
     * Required: false
     * Example Value: 
     */
    private $jdSkuId;

    /**
     * @param int $jdSkuId
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
     * @param int $venderId
     * 商家id
     * Required: false
     * Example Value: 
     */
    private $venderId;

    /**
     * @param int $venderId
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
     * @param int $length
     * 包装（长）
     * Required: false
     * Example Value: 
     */
    private $length;

    /**
     * @param int $length
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
     * @param string $itemNum
     * 货号
     * Required: false
     * Example Value: 
     */
    private $itemNum;

    /**
     * @param string $itemNum
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
     * @param string $wareDes
     * 商品描述
     * Required: false
     * Example Value: 
     */
    private $wareDes;

    /**
     * @param string $wareDes
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
     * @param int $wareWeight
     * 产品毛重
     * Required: false
     * Example Value: 
     */
    private $wareWeight;

    /**
     * @param int $wareWeight
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
     * @param string[] $imagePath
     * 图片url地址
     * Required: false
     * Example Value: 
     */
    private $imagePath;

    /**
     * @param string[] $imagePath
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
     * @param int[] $id
     * 图片id
     * Required: false
     * Example Value: 
     */
    private $id;

    /**
     * @param int[] $id
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
     * @param int $width
     * 宽度
     * Required: false
     * Example Value: 
     */
    private $width;

    /**
     * @param int $width
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
     * @param string $upcCode
     * UPC编码
     * Required: false
     * Example Value: 
     */
    private $upcCode;

    /**
     * @param string $upcCode
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
     * @param string $consumerSkuId
     * 第三方skuId
     * Required: false
     * Example Value: 
     */
    private $consumerSkuId;

    /**
     * @param string $consumerSkuId
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
     * @param int $height
     * 高度
     * Required: false
     * Example Value: 
     */
    private $height;

    /**
     * @param int $height
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