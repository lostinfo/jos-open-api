<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 修改会员等级
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3262&apiName=jingdong.pop.crm.setMemberGrade
 * Class PopCrmSetMemberGrade
 * @package Jd\request
 */
class PopCrmSetMemberGrade
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.setMemberGrade";
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
     * @param string $customerPin
     * 用户pin
     * Required: true
     * Example Value: ‘1356189’
     */
    private $customerPin;

    /**
     * @param string $customerPin
     * 用户pin
     * Example Value: ‘1356189’
     */
    public function setCustomerPin($customerPin)
    {
        $this->customerPin             = $customerPin;
        $this->apiParas["pin"]  = $customerPin;
    }

    public function getCustomerPin()
    {
        return $this->customerPin;
    }

    /**
     * @param int $grade
     * 等级
     * Required: true
     * Example Value: 1
     */
    private $grade;

    /**
     * @param int $grade
     * 等级
     * Example Value: 1
     */
    public function setGrade($grade)
    {
        $this->grade             = $grade;
        $this->apiParas["grade"]  = $grade;
    }

    public function getGrade()
    {
        return $this->grade;
    }

}