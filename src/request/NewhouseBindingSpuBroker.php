<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 回传楼盘经纪人绑定关系
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2249&apiName=jingdong.newhouse.bindingSpuBroker
 * Class NewhouseBindingSpuBroker
 * @package Jd\request
 */
class NewhouseBindingSpuBroker
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.newhouse.bindingSpuBroker";
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
     * @param int[] $v1
     * 经纪人ID（取经纪人添加返回ID）
     * Required: true
     * Example Value: 
     */
    private $v1;

    /**
     * @param int[] $v1
     * 经纪人ID（取经纪人添加返回ID）
     * Example Value: 
     */
    public function setV1($v1)
    {
        $this->v1             = $v1;
        $this->apiParas["v1"]  = $v1;
    }

    public function getV1()
    {
        return $this->v1;
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
     * @param int $spuId
     * 楼盘ID
     * Required: true
     * Example Value: 
     */
    private $spuId;

    /**
     * @param int $spuId
     * 楼盘ID
     * Example Value: 
     */
    public function setSpuId($spuId)
    {
        $this->spuId             = $spuId;
        $this->apiParas["spuId"]  = $spuId;
    }

    public function getSpuId()
    {
        return $this->spuId;
    }

}