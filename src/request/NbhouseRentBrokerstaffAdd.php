<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 添加或修改经纪人
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2317&apiName=jingdong.nbhouse.rent.brokerstaff.add
 * Class NbhouseRentBrokerstaffAdd
 * @package Jd\request
 */
class NbhouseRentBrokerstaffAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.nbhouse.rent.brokerstaff.add";
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
     * @param string $brokerStaffName
     * 经纪人姓名
     * Required: true
     * Example Value: 
     */
    private $brokerStaffName;

    /**
     * @param string $brokerStaffName
     * 经纪人姓名
     * Example Value: 
     */
    public function setBrokerStaffName($brokerStaffName)
    {
        $this->brokerStaffName             = $brokerStaffName;
        $this->apiParas["brokerStaffName"]  = $brokerStaffName;
    }

    public function getBrokerStaffName()
    {
        return $this->brokerStaffName;
    }

    /**
     * @param string $brokerStaffPhone
     * 经纪人电话
     * Required: true
     * Example Value: 
     */
    private $brokerStaffPhone;

    /**
     * @param string $brokerStaffPhone
     * 经纪人电话
     * Example Value: 
     */
    public function setBrokerStaffPhone($brokerStaffPhone)
    {
        $this->brokerStaffPhone             = $brokerStaffPhone;
        $this->apiParas["brokerStaffPhone"]  = $brokerStaffPhone;
    }

    public function getBrokerStaffPhone()
    {
        return $this->brokerStaffPhone;
    }

    /**
     * @param int $brokerStaffGender
     * 性别（0-男，1-女）
     * Required: true
     * Example Value: 
     */
    private $brokerStaffGender;

    /**
     * @param int $brokerStaffGender
     * 性别（0-男，1-女）
     * Example Value: 
     */
    public function setBrokerStaffGender($brokerStaffGender)
    {
        $this->brokerStaffGender             = $brokerStaffGender;
        $this->apiParas["brokerStaffGender"]  = $brokerStaffGender;
    }

    public function getBrokerStaffGender()
    {
        return $this->brokerStaffGender;
    }

    /**
     * @param string $brokerStaffImg
     * 经纪人头像
     * Required: true
     * Example Value: 
     */
    private $brokerStaffImg;

    /**
     * @param string $brokerStaffImg
     * 经纪人头像
     * Example Value: 
     */
    public function setBrokerStaffImg($brokerStaffImg)
    {
        $this->brokerStaffImg             = $brokerStaffImg;
        $this->apiParas["brokerStaffImg"]  = $brokerStaffImg;
    }

    public function getBrokerStaffImg()
    {
        return $this->brokerStaffImg;
    }

    /**
     * @param string $brokerStaffIdCardNum
     * 身份证号码（来源主键）
     * Required: true
     * Example Value: 
     */
    private $brokerStaffIdCardNum;

    /**
     * @param string $brokerStaffIdCardNum
     * 身份证号码（来源主键）
     * Example Value: 
     */
    public function setBrokerStaffIdCardNum($brokerStaffIdCardNum)
    {
        $this->brokerStaffIdCardNum             = $brokerStaffIdCardNum;
        $this->apiParas["brokerStaffIdCardNum"]  = $brokerStaffIdCardNum;
    }

    public function getBrokerStaffIdCardNum()
    {
        return $this->brokerStaffIdCardNum;
    }

    /**
     * @param string $brokerStaffIdcardfront
     * 身份证正面照
     * Required: true
     * Example Value: 
     */
    private $brokerStaffIdcardfront;

    /**
     * @param string $brokerStaffIdcardfront
     * 身份证正面照
     * Example Value: 
     */
    public function setBrokerStaffIdcardfront($brokerStaffIdcardfront)
    {
        $this->brokerStaffIdcardfront             = $brokerStaffIdcardfront;
        $this->apiParas["brokerStaffIdcardfront"]  = $brokerStaffIdcardfront;
    }

    public function getBrokerStaffIdcardfront()
    {
        return $this->brokerStaffIdcardfront;
    }

    /**
     * @param string $brokerStaffIdcardback
     * 身份证反面照
     * Required: true
     * Example Value: 
     */
    private $brokerStaffIdcardback;

    /**
     * @param string $brokerStaffIdcardback
     * 身份证反面照
     * Example Value: 
     */
    public function setBrokerStaffIdcardback($brokerStaffIdcardback)
    {
        $this->brokerStaffIdcardback             = $brokerStaffIdcardback;
        $this->apiParas["brokerStaffIdcardback"]  = $brokerStaffIdcardback;
    }

    public function getBrokerStaffIdcardback()
    {
        return $this->brokerStaffIdcardback;
    }

    /**
     * @param string $brokerName
     * 经纪机构名称
     * Required: true
     * Example Value: 
     */
    private $brokerName;

    /**
     * @param string $brokerName
     * 经纪机构名称
     * Example Value: 
     */
    public function setBrokerName($brokerName)
    {
        $this->brokerName             = $brokerName;
        $this->apiParas["brokerName"]  = $brokerName;
    }

    public function getBrokerName()
    {
        return $this->brokerName;
    }

    /**
     * @param string $extensionPhone
     * 400分机号 (更新为必填项)
     * Required: false
     * Example Value: 
     */
    private $extensionPhone;

    /**
     * @param string $extensionPhone
     * 400分机号 (更新为必填项)
     * Example Value: 
     */
    public function setExtensionPhone($extensionPhone)
    {
        $this->extensionPhone             = $extensionPhone;
        $this->apiParas["extensionPhone"]  = $extensionPhone;
    }

    public function getExtensionPhone()
    {
        return $this->extensionPhone;
    }

}