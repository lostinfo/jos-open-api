<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 客户保护站信息
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2381&apiName=jingdong.newhouse.synHouseCustomerProtectInfo
 * Class NewhouseSynHouseCustomerProtectInfo
 * @package Jd\request
 */
class NewhouseSynHouseCustomerProtectInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.newhouse.synHouseCustomerProtectInfo";
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
     * @param string $userPhone
     * 用户手机号
     * Required: true
     * Example Value: 
     */
    private $userPhone;

    /**
     * @param string $userPhone
     * 用户手机号
     * Example Value: 
     */
    public function setUserPhone($userPhone)
    {
        $this->userPhone             = $userPhone;
        $this->apiParas["userPhone"]  = $userPhone;
    }

    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * @param int $channelId
     * 渠道ID
     * Required: true
     * Example Value: 
     */
    private $channelId;

    /**
     * @param int $channelId
     * 渠道ID
     * Example Value: 
     */
    public function setChannelId($channelId)
    {
        $this->channelId             = $channelId;
        $this->apiParas["channelId"]  = $channelId;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param string $venderId
     * 商家ID
     * Required: true
     * Example Value: 
     */
    private $venderId;

    /**
     * @param string $venderId
     * 商家ID
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

}