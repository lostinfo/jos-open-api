<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * POP-O2O 创建门店同时创建仓
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2224&apiName=jingdong.createEntityStore
 * Class CreateEntityStore
 * @package Jd\request
 */
class CreateEntityStore
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.createEntityStore";
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
     * @param string $name
     * 门店名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
     * 门店名称
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
     * @param int $addCode
     * 门店三级地址code
     * Required: true
     * Example Value: 
     */
    private $addCode;

    /**
     * @param int $addCode
     * 门店三级地址code
     * Example Value: 
     */
    public function setAddCode($addCode)
    {
        $this->addCode             = $addCode;
        $this->apiParas["addCode"]  = $addCode;
    }

    public function getAddCode()
    {
        return $this->addCode;
    }

    /**
     * @param string $addCodeName
     * 门店地址名称
     * Required: false
     * Example Value: 
     */
    private $addCodeName;

    /**
     * @param string $addCodeName
     * 门店地址名称
     * Example Value: 
     */
    public function setAddCodeName($addCodeName)
    {
        $this->addCodeName             = $addCodeName;
        $this->apiParas["addCodeName"]  = $addCodeName;
    }

    public function getAddCodeName()
    {
        return $this->addCodeName;
    }

    /**
     * @param string $addName
     * 门店地址
     * Required: true
     * Example Value: 
     */
    private $addName;

    /**
     * @param string $addName
     * 门店地址
     * Example Value: 
     */
    public function setAddName($addName)
    {
        $this->addName             = $addName;
        $this->apiParas["addName"]  = $addName;
    }

    public function getAddName()
    {
        return $this->addName;
    }

    /**
     * @param string $coordinate
     * 门店经纬度(纬度，经度)
     * Required: true
     * Example Value: 
     */
    private $coordinate;

    /**
     * @param string $coordinate
     * 门店经纬度(纬度，经度)
     * Example Value: 
     */
    public function setCoordinate($coordinate)
    {
        $this->coordinate             = $coordinate;
        $this->apiParas["coordinate"]  = $coordinate;
    }

    public function getCoordinate()
    {
        return $this->coordinate;
    }

    /**
     * @param string $phone
     * 门店电话
     * Required: true
     * Example Value: 
     */
    private $phone;

    /**
     * @param string $phone
     * 门店电话
     * Example Value: 
     */
    public function setPhone($phone)
    {
        $this->phone             = $phone;
        $this->apiParas["phone"]  = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param int[] $item
     * 门店组ID
     * Required: true
     * Example Value: 
     */
    private $item;

    /**
     * @param int[] $item
     * 门店组ID
     * Example Value: 
     */
    public function setItem($item)
    {
        $this->item             = $item;
        $this->apiParas["item"]  = $item;
    }

    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param string $customerId
     * 外部业务ID
     * Required: false
     * Example Value: 
     */
    private $customerId;

    /**
     * @param string $customerId
     * 外部业务ID
     * Example Value: 
     */
    public function setCustomerId($customerId)
    {
        $this->customerId             = $customerId;
        $this->apiParas["customerId"]  = $customerId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param string $address
     * 门店地址
     * Required: false
     * Example Value: 
     */
    private $address;

    /**
     * @param string $address
     * 门店地址
     * Example Value: 
     */
    public function setAddress($address)
    {
        $this->address             = $address;
        $this->apiParas["address"]  = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $businessHours
     * 营业时间
     * Required: false
     * Example Value: 
     */
    private $businessHours;

    /**
     * @param string $businessHours
     * 营业时间
     * Example Value: 
     */
    public function setBusinessHours($businessHours)
    {
        $this->businessHours             = $businessHours;
        $this->apiParas["businessHours"]  = $businessHours;
    }

    public function getBusinessHours()
    {
        return $this->businessHours;
    }

    /**
     * @param string $categoryName
     * 门店扩展属性类目名称固定填为：pop-mendian-Selfdelivery
     * Required: false
     * Example Value: 
     */
    private $categoryName;

    /**
     * @param string $categoryName
     * 门店扩展属性类目名称固定填为：pop-mendian-Selfdelivery
     * Example Value: 
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName             = $categoryName;
        $this->apiParas["categoryName"]  = $categoryName;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param string $extendJson
     * 扩展属性JSON如：{name1：'value1',name2:'value2'},营业时间固定格式：{\'businessBeginTime\':\'09:00\',\'businessEndTime\':\'22:00\'}' ，可将中间的时间变更
     * Required: false
     * Example Value: 
     */
    private $extendJson;

    /**
     * @param string $extendJson
     * 扩展属性JSON如：{name1：'value1',name2:'value2'},营业时间固定格式：{\'businessBeginTime\':\'09:00\',\'businessEndTime\':\'22:00\'}' ，可将中间的时间变更
     * Example Value: 
     */
    public function setExtendJson($extendJson)
    {
        $this->extendJson             = $extendJson;
        $this->apiParas["extendJson"]  = $extendJson;
    }

    public function getExtendJson()
    {
        return $this->extendJson;
    }

    /**
     * @param byte[] $imageFile
     * 门店图片,图片二进制文件流，允许png、jpg、gif、jpeg、bmp图片格式，1M以内。
     * Required: false
     * Example Value: 
     */
    private $imageFile;

    /**
     * @param byte[] $imageFile
     * 门店图片,图片二进制文件流，允许png、jpg、gif、jpeg、bmp图片格式，1M以内。
     * Example Value: 
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile             = $imageFile;
        $this->apiParas["imageFile"]  = $imageFile;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

}