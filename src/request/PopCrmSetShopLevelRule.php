<?php

namespca Lostinfo\JosOpenApi;

/**
 * 修改会员体系规则
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3281&apiName=jingdong.pop.crm.setShopLevelRule
 * Class PopCrmSetShopLevelRule
 * @package Jd\request
 */
class PopCrmSetShopLevelRule
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.setShopLevelRule";
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
     * @param string[] $customerLevelName
     * 按顺序填写店铺会员等级名称
     * Required: true
     * Example Value: 一星会员，二星会员
     */
    private $customerLevelName;

    /**
     * @param string[] $customerLevelName
     * 按顺序填写店铺会员等级名称
     * Example Value: 一星会员，二星会员
     */
    public function setCustomerLevelName($customerLevelName)
    {
        $this->customerLevelName             = $customerLevelName;
        $this->apiParas["customerLevelName"]  = $customerLevelName;
    }

    public function getCustomerLevelName()
    {
        return $this->customerLevelName;
    }

}