<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询等级映射
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3274&apiName=jingdong.crm.gateway.downclient.jdMappingLevel
 * Class CrmGatewayDownclientJdMappingLevel
 * @package Jd\request
 */
class CrmGatewayDownclientJdMappingLevel
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.gateway.downclient.jdMappingLevel";
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
     * @param string $appId
     * 商家应用标识
     * Required: true
     * Example Value: 123456
     */
    private $appId;

    /**
     * @param string $appId
     * 商家应用标识
     * Example Value: 123456
     */
    public function setAppId($appId)
    {
        $this->appId             = $appId;
        $this->apiParas["appId"]  = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param int $customerLevel
     * 会员等级编码（1、2、3、4、5），最多五个等级
     * Required: true
     * Example Value: 1
     */
    private $customerLevel;

    /**
     * @param int $customerLevel
     * 会员等级编码（1、2、3、4、5），最多五个等级
     * Example Value: 1
     */
    public function setCustomerLevel($customerLevel)
    {
        $this->customerLevel             = $customerLevel;
        $this->apiParas["customerLevel"]  = $customerLevel;
    }

    public function getCustomerLevel()
    {
        return $this->customerLevel;
    }

    /**
     * @param string $openId
     * 加密字段(openId = appKey + pin)
     * Required: true
     * Example Value: testxxx
     */
    private $openId;

    /**
     * @param string $openId
     * 加密字段(openId = appKey + pin)
     * Example Value: testxxx
     */
    public function setOpenId($openId)
    {
        $this->openId             = $openId;
        $this->apiParas["openId"]  = $openId;
    }

    public function getOpenId()
    {
        return $this->openId;
    }

    /**
     * @param string $appKey
     * jos分配应用标识
     * Required: true
     * Example Value: zxc123
     */
    private $appKey;

    /**
     * @param string $appKey
     * jos分配应用标识
     * Example Value: zxc123
     */
    public function setAppKey($appKey)
    {
        $this->appKey             = $appKey;
        $this->apiParas["appKey"]  = $appKey;
    }

    public function getAppKey()
    {
        return $this->appKey;
    }

}