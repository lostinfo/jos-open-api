<?php

namespca Lostinfo\JosOpenApi;

/**
 * 修改店铺信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2221&apiName=jingdong.updateEntityStore
 * Class UpdateEntityStore
 * @package Jd\request
 */
class UpdateEntityStore
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.updateEntityStore";
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
     * @param int $id
     * 门店ID
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 门店ID
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["storeId"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     * 门店名称
     * Required: false
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
     * 门店三级地址(京东)
     * Required: false
     * Example Value: 
     */
    private $addCode;

    /**
     * @param int $addCode
     * 门店三级地址(京东)
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
     * 未定义
     * Required: false
     * Example Value: 
     */
    private $addCodeName;

    /**
     * @param string $addCodeName
     * 未定义
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
     * 门店地址@分割
     * Required: false
     * Example Value: 
     */
    private $addName;

    /**
     * @param string $addName
     * 门店地址@分割
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
     * 门店经纬度
     * Required: false
     * Example Value: 
     */
    private $coordinate;

    /**
     * @param string $coordinate
     * 门店经纬度
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
     * 电话
     * Required: false
     * Example Value: 
     */
    private $phone;

    /**
     * @param string $phone
     * 电话
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
     * @param int[] $v1
     * 门店组ID
     * Required: false
     * Example Value: 
     */
    private $v1;

    /**
     * @param int[] $v1
     * 门店组ID
     * Example Value: 
     */
    public function setV1($v1)
    {
        $this->v1             = $v1;
        $this->apiParas["groupId"]  = $v1;
    }

    public function getV1()
    {
        return $this->v1;
    }

    /**
     * @param string $address
     * 地址
     * Required: false
     * Example Value: 
     */
    private $address;

    /**
     * @param string $address
     * 地址
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
     * 扩展属性类目
     * Required: false
     * Example Value: 
     */
    private $categoryName;

    /**
     * @param string $categoryName
     * 扩展属性类目
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
     * 扩展属性JSON
     * Required: false
     * Example Value: 
     */
    private $extendJson;

    /**
     * @param string $extendJson
     * 扩展属性JSON
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