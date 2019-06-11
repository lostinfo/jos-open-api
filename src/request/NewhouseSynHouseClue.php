<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 同步销售线索
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2248&apiName=jingdong.newhouse.synHouseClue
 * Class NewhouseSynHouseClue
 * @package Jd\request
 */
class NewhouseSynHouseClue
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.newhouse.synHouseClue";
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
     * @param int $clueId
     * 线索ID（增量取上次获取的最大值）
     * Required: true
     * Example Value: 
     */
    private $clueId;

    /**
     * @param int $clueId
     * 线索ID（增量取上次获取的最大值）
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