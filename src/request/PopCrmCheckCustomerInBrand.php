<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询用户是否是某品牌或店铺会员
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3653&apiName=jingdong.pop.crm.checkCustomerInBrand
 * Class PopCrmCheckCustomerInBrand
 * @package Jd\request
 */
class PopCrmCheckCustomerInBrand
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.checkCustomerInBrand";
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
     * @param int $brandId
     * 会员体系ID
     * Required: true
     * Example Value: 111
     */
    private $brandId;

    /**
     * @param int $brandId
     * 会员体系ID
     * Example Value: 111
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brand_id"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param string $userPin
     * 用户pin
     * Required: true
     * Example Value: 'zz'
     */
    private $userPin;

    /**
     * @param string $userPin
     * 用户pin
     * Example Value: 'zz'
     */
    public function setUserPin($userPin)
    {
        $this->userPin             = $userPin;
        $this->apiParas["pin"]  = $userPin;
    }

    public function getUserPin()
    {
        return $this->userPin;
    }

}