<?php

namespace JD\request;

/**
 * 商品资料新增
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1631&apiName=jingdong.jcloud.wms.SkuAcceptServiceHandler.create
 * Class JcloudWmsSkuAcceptServiceHandlerCreate
 * @package Jd\request
 */
class JcloudWmsSkuAcceptServiceHandlerCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.SkuAcceptServiceHandler.create";
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
     * @param String $code
     * 商品码
     * Required: true
     * Example Value: 
     */
    private $code;

    /**
     * @param String $code
     * 商品码
     * Example Value: 
     */
    public function setCode($code)
    {
        $this->code             = $code;
        $this->apiParas["code"]  = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param String $tenantId
     * 租户ID
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param String $tenantId
     * 租户ID
     * Example Value: 
     */
    public function setTenantId($tenantId)
    {
        $this->tenantId             = $tenantId;
        $this->apiParas["tenantId"]  = $tenantId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    /**
     * @param String $specification
     * 规格
     * Required: false
     * Example Value: 
     */
    private $specification;

    /**
     * @param String $specification
     * 规格
     * Example Value: 
     */
    public function setSpecification($specification)
    {
        $this->specification             = $specification;
        $this->apiParas["specification"]  = $specification;
    }

    public function getSpecification()
    {
        return $this->specification;
    }

    /**
     * @param String $model
     * 型号
     * Required: false
     * Example Value: 
     */
    private $model;

    /**
     * @param String $model
     * 型号
     * Example Value: 
     */
    public function setModel($model)
    {
        $this->model             = $model;
        $this->apiParas["model"]  = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param String $ownerNo
     * 货主编码
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param String $ownerNo
     * 货主编码
     * Example Value: 
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["ownerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    /**
     * @param String $name
     * 商品名称
     * Required: true
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
     * @param String $foreignName
     * 英文名称
     * Required: false
     * Example Value: 
     */
    private $foreignName;

    /**
     * @param String $foreignName
     * 英文名称
     * Example Value: 
     */
    public function setForeignName($foreignName)
    {
        $this->foreignName             = $foreignName;
        $this->apiParas["foreignName"]  = $foreignName;
    }

    public function getForeignName()
    {
        return $this->foreignName;
    }

    /**
     * @param String $categoryCode
     * 类目
     * Required: true
     * Example Value: 
     */
    private $categoryCode;

    /**
     * @param String $categoryCode
     * 类目
     * Example Value: 
     */
    public function setCategoryCode($categoryCode)
    {
        $this->categoryCode             = $categoryCode;
        $this->apiParas["categoryCode"]  = $categoryCode;
    }

    public function getCategoryCode()
    {
        return $this->categoryCode;
    }

    /**
     * @param String $brand
     * 品牌名称
     * Required: false
     * Example Value: 
     */
    private $brand;

    /**
     * @param String $brand
     * 品牌名称
     * Example Value: 
     */
    public function setBrand($brand)
    {
        $this->brand             = $brand;
        $this->apiParas["brand"]  = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param String[] $barcodeType
     * 条码类型(1:69码，2：二维码)
     * Required: true
     * Example Value: 
     */
    private $barcodeType;

    /**
     * @param String[] $barcodeType
     * 条码类型(1:69码，2：二维码)
     * Example Value: 
     */
    public function setBarcodeType($barcodeType)
    {
        $this->barcodeType             = $barcodeType;
        $this->apiParas["barcodeType"]  = $barcodeType;
    }

    public function getBarcodeType()
    {
        return $this->barcodeType;
    }

    /**
     * @param String[] $barcodeArr
     * 条码
     * Required: true
     * Example Value: 
     */
    private $barcodeArr;

    /**
     * @param String[] $barcodeArr
     * 条码
     * Example Value: 
     */
    public function setBarcodeArr($barcodeArr)
    {
        $this->barcodeArr             = $barcodeArr;
        $this->apiParas["barcodeArr"]  = $barcodeArr;
    }

    public function getBarcodeArr()
    {
        return $this->barcodeArr;
    }

    /**
     * @param String $sizeType
     * 件型(S:小件  M:中件  B:大件)
     * Required: true
     * Example Value: 
     */
    private $sizeType;

    /**
     * @param String $sizeType
     * 件型(S:小件  M:中件  B:大件)
     * Example Value: 
     */
    public function setSizeType($sizeType)
    {
        $this->sizeType             = $sizeType;
        $this->apiParas["sizeType"]  = $sizeType;
    }

    public function getSizeType()
    {
        return $this->sizeType;
    }

    /**
     * @param Number $weight
     * 重量
     * Required: true
     * Example Value: 
     */
    private $weight;

    /**
     * @param Number $weight
     * 重量
     * Example Value: 
     */
    public function setWeight($weight)
    {
        $this->weight             = $weight;
        $this->apiParas["weight"]  = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param Number $length
     * 长
     * Required: true
     * Example Value: 
     */
    private $length;

    /**
     * @param Number $length
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
     * @param Number $width
     * 宽
     * Required: true
     * Example Value: 
     */
    private $width;

    /**
     * @param Number $width
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
     * @param Number $height
     * 高
     * Required: true
     * Example Value: 
     */
    private $height;

    /**
     * @param Number $height
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
     * @param Number $isShelfLife
     * 是否保质期（0:否 1：是）
     * Required: true
     * Example Value: 
     */
    private $isShelfLife;

    /**
     * @param Number $isShelfLife
     * 是否保质期（0:否 1：是）
     * Example Value: 
     */
    public function setIsShelfLife($isShelfLife)
    {
        $this->isShelfLife             = $isShelfLife;
        $this->apiParas["isShelfLife"]  = $isShelfLife;
    }

    public function getIsShelfLife()
    {
        return $this->isShelfLife;
    }

    /**
     * @param Number $shelfLife
     * 保质期天数
     * Required: false
     * Example Value: 
     */
    private $shelfLife;

    /**
     * @param Number $shelfLife
     * 保质期天数
     * Example Value: 
     */
    public function setShelfLife($shelfLife)
    {
        $this->shelfLife             = $shelfLife;
        $this->apiParas["shelfLife"]  = $shelfLife;
    }

    public function getShelfLife()
    {
        return $this->shelfLife;
    }

    /**
     * @param Number $isSerial
     * 是否序列号（0:否 1：是）
     * Required: true
     * Example Value: 
     */
    private $isSerial;

    /**
     * @param Number $isSerial
     * 是否序列号（0:否 1：是）
     * Example Value: 
     */
    public function setIsSerial($isSerial)
    {
        $this->isSerial             = $isSerial;
        $this->apiParas["isSerial"]  = $isSerial;
    }

    public function getIsSerial()
    {
        return $this->isSerial;
    }

    /**
     * @param Number $isHighValue
     * 是否高值（0:否 1：是）
     * Required: false
     * Example Value: 
     */
    private $isHighValue;

    /**
     * @param Number $isHighValue
     * 是否高值（0:否 1：是）
     * Example Value: 
     */
    public function setIsHighValue($isHighValue)
    {
        $this->isHighValue             = $isHighValue;
        $this->apiParas["isHighValue"]  = $isHighValue;
    }

    public function getIsHighValue()
    {
        return $this->isHighValue;
    }

    /**
     * @param Number $isLuxury
     * 是否奢侈品（0:否 1：是）
     * Required: false
     * Example Value: 
     */
    private $isLuxury;

    /**
     * @param Number $isLuxury
     * 是否奢侈品（0:否 1：是）
     * Example Value: 
     */
    public function setIsLuxury($isLuxury)
    {
        $this->isLuxury             = $isLuxury;
        $this->apiParas["isLuxury"]  = $isLuxury;
    }

    public function getIsLuxury()
    {
        return $this->isLuxury;
    }

    /**
     * @param Number $isFragile
     * 是否易碎品（0:否 1：是）
     * Required: false
     * Example Value: 
     */
    private $isFragile;

    /**
     * @param Number $isFragile
     * 是否易碎品（0:否 1：是）
     * Example Value: 
     */
    public function setIsFragile($isFragile)
    {
        $this->isFragile             = $isFragile;
        $this->apiParas["isFragile"]  = $isFragile;
    }

    public function getIsFragile()
    {
        return $this->isFragile;
    }

    /**
     * @param String $memo
     * 备注
     * Required: false
     * Example Value: 
     */
    private $memo;

    /**
     * @param String $memo
     * 备注
     * Example Value: 
     */
    public function setMemo($memo)
    {
        $this->memo             = $memo;
        $this->apiParas["memo"]  = $memo;
    }

    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * @param String $operateUser
     * 操作人
     * Required: true
     * Example Value: 
     */
    private $operateUser;

    /**
     * @param String $operateUser
     * 操作人
     * Example Value: 
     */
    public function setOperateUser($operateUser)
    {
        $this->operateUser             = $operateUser;
        $this->apiParas["operateUser"]  = $operateUser;
    }

    public function getOperateUser()
    {
        return $this->operateUser;
    }

    /**
     * @param Date $operateTime
     * 操作时间
     * Required: true
     * Example Value: 
     */
    private $operateTime;

    /**
     * @param Date $operateTime
     * 操作时间
     * Example Value: 
     */
    public function setOperateTime($operateTime)
    {
        $this->operateTime             = $operateTime;
        $this->apiParas["operateTime"]  = $operateTime;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

    /**
     * @param String $dangerLevel
     * 危险等级（0：普通品 1：危险品）
     * Required: false
     * Example Value: 
     */
    private $dangerLevel;

    /**
     * @param String $dangerLevel
     * 危险等级（0：普通品 1：危险品）
     * Example Value: 
     */
    public function setDangerLevel($dangerLevel)
    {
        $this->dangerLevel             = $dangerLevel;
        $this->apiParas["dangerLevel"]  = $dangerLevel;
    }

    public function getDangerLevel()
    {
        return $this->dangerLevel;
    }

    /**
     * @param String $manufactureSkuNo
     * 制造商商品编码
     * Required: false
     * Example Value: 
     */
    private $manufactureSkuNo;

    /**
     * @param String $manufactureSkuNo
     * 制造商商品编码
     * Example Value: 
     */
    public function setManufactureSkuNo($manufactureSkuNo)
    {
        $this->manufactureSkuNo             = $manufactureSkuNo;
        $this->apiParas["manufactureSkuNo"]  = $manufactureSkuNo;
    }

    public function getManufactureSkuNo()
    {
        return $this->manufactureSkuNo;
    }

    /**
     * @param String $erpSkuNo
     * erp商品编码
     * Required: false
     * Example Value: 
     */
    private $erpSkuNo;

    /**
     * @param String $erpSkuNo
     * erp商品编码
     * Example Value: 
     */
    public function setErpSkuNo($erpSkuNo)
    {
        $this->erpSkuNo             = $erpSkuNo;
        $this->apiParas["erpSkuNo"]  = $erpSkuNo;
    }

    public function getErpSkuNo()
    {
        return $this->erpSkuNo;
    }

}