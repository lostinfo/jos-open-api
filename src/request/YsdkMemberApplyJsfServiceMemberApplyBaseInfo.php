<?php

namespace JD\request;

/**
 * 委托代征会员信息会员基础信息接口
 * 商事创新API-B端企业与自然人之间的劳务采买涉及发票开具、发票核销以及企业向自然人发佣等服务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=472&apiId=3612&apiName=jingdong.ysdk.MemberApplyJsfService.memberApplyBaseInfo
 * Class YsdkMemberApplyJsfServiceMemberApplyBaseInfo
 * @package Jd\request
 */
class YsdkMemberApplyJsfServiceMemberApplyBaseInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ysdk.MemberApplyJsfService.memberApplyBaseInfo";
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
     * @param String $bankAccount
     * 银行账户
     * Required: false
     * Example Value: 非必填
     */
    private $bankAccount;

    /**
     * @param String $bankAccount
     * 银行账户
     * Example Value: 非必填
     */
    public function setBankAccount($bankAccount)
    {
        $this->bankAccount             = $bankAccount;
        $this->apiParas["bankAccount"]  = $bankAccount;
    }

    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @param String $certType
     * 身份证类型
     * Required: true
     * Example Value: 201
     */
    private $certType;

    /**
     * @param String $certType
     * 身份证类型
     * Example Value: 201
     */
    public function setCertType($certType)
    {
        $this->certType             = $certType;
        $this->apiParas["certType"]  = $certType;
    }

    public function getCertType()
    {
        return $this->certType;
    }

    /**
     * @param String $address
     * 地址
     * Required: true
     * Example Value: 北京大兴
     */
    private $address;

    /**
     * @param String $address
     * 地址
     * Example Value: 北京大兴
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
     * @param String $registerTime
     * 注册时间
     * Required: true
     * Example Value: 2019-04-09 14:36:00
     */
    private $registerTime;

    /**
     * @param String $registerTime
     * 注册时间
     * Example Value: 2019-04-09 14:36:00
     */
    public function setRegisterTime($registerTime)
    {
        $this->registerTime             = $registerTime;
        $this->apiParas["registerTime"]  = $registerTime;
    }

    public function getRegisterTime()
    {
        return $this->registerTime;
    }

    /**
     * @param String $bankType
     * 银行类型
     * Required: false
     * Example Value: 非必填
     */
    private $bankType;

    /**
     * @param String $bankType
     * 银行类型
     * Example Value: 非必填
     */
    public function setBankType($bankType)
    {
        $this->bankType             = $bankType;
        $this->apiParas["bankType"]  = $bankType;
    }

    public function getBankType()
    {
        return $this->bankType;
    }

    /**
     * @param Number $sex
     * 性别
     * Required: true
     * Example Value: 1
     */
    private $sex;

    /**
     * @param Number $sex
     * 性别
     * Example Value: 1
     */
    public function setSex($sex)
    {
        $this->sex             = $sex;
        $this->apiParas["sex"]  = $sex;
    }

    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param String $telephone
     * 电话
     * Required: true
     * Example Value: 18515381111
     */
    private $telephone;

    /**
     * @param String $telephone
     * 电话
     * Example Value: 18515381111
     */
    public function setTelephone($telephone)
    {
        $this->telephone             = $telephone;
        $this->apiParas["telephone"]  = $telephone;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param String $bankName
     * 银行名称
     * Required: false
     * Example Value: 非必填
     */
    private $bankName;

    /**
     * @param String $bankName
     * 银行名称
     * Example Value: 非必填
     */
    public function setBankName($bankName)
    {
        $this->bankName             = $bankName;
        $this->apiParas["bankName"]  = $bankName;
    }

    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param String $birthDate
     * 出生日期
     * Required: true
     * Example Value: 1990-12-12
     */
    private $birthDate;

    /**
     * @param String $birthDate
     * 出生日期
     * Example Value: 1990-12-12
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate             = $birthDate;
        $this->apiParas["birthDate"]  = $birthDate;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param String $certNo
     * 生份证编号
     * Required: true
     * Example Value: 140221199012122326
     */
    private $certNo;

    /**
     * @param String $certNo
     * 生份证编号
     * Example Value: 140221199012122326
     */
    public function setCertNo($certNo)
    {
        $this->certNo             = $certNo;
        $this->apiParas["certNo"]  = $certNo;
    }

    public function getCertNo()
    {
        return $this->certNo;
    }

    /**
     * @param String $nationality
     * 国籍
     * Required: true
     * Example Value: 156
     */
    private $nationality;

    /**
     * @param String $nationality
     * 国籍
     * Example Value: 156
     */
    public function setNationality($nationality)
    {
        $this->nationality             = $nationality;
        $this->apiParas["nationality"]  = $nationality;
    }

    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param String $requestId
     * 请求id
     * Required: true
     * Example Value: cs00001
     */
    private $requestId;

    /**
     * @param String $requestId
     * 请求id
     * Example Value: cs00001
     */
    public function setRequestId($requestId)
    {
        $this->requestId             = $requestId;
        $this->apiParas["requestId"]  = $requestId;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param String $name
     * 名字
     * Required: true
     * Example Value: 张三测试
     */
    private $name;

    /**
     * @param String $name
     * 名字
     * Example Value: 张三测试
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
     * @param String $platformCode
     * 平台编码
     * Required: true
     * Example Value: CESHI
     */
    private $platformCode;

    /**
     * @param String $platformCode
     * 平台编码
     * Example Value: CESHI
     */
    public function setPlatformCode($platformCode)
    {
        $this->platformCode             = $platformCode;
        $this->apiParas["platformCode"]  = $platformCode;
    }

    public function getPlatformCode()
    {
        return $this->platformCode;
    }

}