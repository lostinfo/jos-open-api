<?php

namespace JD\request;

/**
 * 申请免费试用
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=2152&apiName=jingdong.jcloud.wms.freetrial.apply
 * Class JcloudWmsFreetrialApply
 * @package Jd\request
 */
class JcloudWmsFreetrialApply
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.freetrial.apply";
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
     * @param String $companyName
     * 公司名称
     * Required: true
     * Example Value: 
     */
    private $companyName;

    /**
     * @param String $companyName
     * 公司名称
     * Example Value: 
     */
    public function setCompanyName($companyName)
    {
        $this->companyName             = $companyName;
        $this->apiParas["companyName"]  = $companyName;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param String $userName
     * 用户姓名
     * Required: true
     * Example Value: 
     */
    private $userName;

    /**
     * @param String $userName
     * 用户姓名
     * Example Value: 
     */
    public function setUserName($userName)
    {
        $this->userName             = $userName;
        $this->apiParas["userName"]  = $userName;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param String $email
     * 邮箱
     * Required: false
     * Example Value: 
     */
    private $email;

    /**
     * @param String $email
     * 邮箱
     * Example Value: 
     */
    public function setEmail($email)
    {
        $this->email             = $email;
        $this->apiParas["email"]  = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param String $phone
     * 手机号码
     * Required: true
     * Example Value: 
     */
    private $phone;

    /**
     * @param String $phone
     * 手机号码
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
     * @param Number $industry
     * 行业
     * Required: false
     * Example Value: 
     */
    private $industry;

    /**
     * @param Number $industry
     * 行业
     * Example Value: 
     */
    public function setIndustry($industry)
    {
        $this->industry             = $industry;
        $this->apiParas["industry"]  = $industry;
    }

    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * @param String $jdPin
     * 京东账号
     * Required: false
     * Example Value: 
     */
    private $jdPin;

    /**
     * @param String $jdPin
     * 京东账号
     * Example Value: 
     */
    public function setJdPin($jdPin)
    {
        $this->jdPin             = $jdPin;
        $this->apiParas["jdPin"]  = $jdPin;
    }

    public function getJdPin()
    {
        return $this->jdPin;
    }

}