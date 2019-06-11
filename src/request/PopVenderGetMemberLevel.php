<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取会员等级信息
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3283&apiName=jingdong.pop.vender.getMemberLevel
 * Class PopVenderGetMemberLevel
 * @package Jd\request
 */
class PopVenderGetMemberLevel
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.vender.getMemberLevel";
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
     * 客户Pin
     * Required: true
     * Example Value: “112322”
     */
    private $customerPin;

    /**
     * @param string $customerPin
     * 客户Pin
     * Example Value: “112322”
     */
    public function setCustomerPin($customerPin)
    {
        $this->customerPin             = $customerPin;
        $this->apiParas["customerPin"]  = $customerPin;
    }

    public function getCustomerPin()
    {
        return $this->customerPin;
    }

}