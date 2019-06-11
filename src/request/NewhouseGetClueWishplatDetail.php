<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 客户线索获取心愿单详情
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2372&apiName=jingdong.newhouse.getClueWishplatDetail
 * Class NewhouseGetClueWishplatDetail
 * @package Jd\request
 */
class NewhouseGetClueWishplatDetail
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.newhouse.getClueWishplatDetail";
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

    /**
     * @param int $clueId
     * 线索ID
     * Required: true
     * Example Value: 
     */
    private $clueId;

    /**
     * @param int $clueId
     * 线索ID
     * Example Value: 
     */
    public function setClueId($clueId)
    {
        $this->clueId             = $clueId;
        $this->apiParas["clueId"]  = $clueId;
    }

    public function getClueId()
    {
        return $this->clueId;
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

}