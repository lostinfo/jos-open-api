<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 回传线索状态
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2247&apiName=jingdong.newhouse.synHouseClueStatus
 * Class NewhouseSynHouseClueStatus
 * @package Jd\request
 */
class NewhouseSynHouseClueStatus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.newhouse.synHouseClueStatus";
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
     * @param int $clueStatus
     * 线索状态（1:待分配2:已报备3:已确认有效 4:已带看5:已认购6:已签约7:带看审核未通过8:成交待审核9:已成交10:已结佣 11:拒绝成交12:退款待审核13:已退款14:已回收）
     * Required: true
     * Example Value: 
     */
    private $clueStatus;

    /**
     * @param int $clueStatus
     * 线索状态（1:待分配2:已报备3:已确认有效 4:已带看5:已认购6:已签约7:带看审核未通过8:成交待审核9:已成交10:已结佣 11:拒绝成交12:退款待审核13:已退款14:已回收）
     * Example Value: 
     */
    public function setClueStatus($clueStatus)
    {
        $this->clueStatus             = $clueStatus;
        $this->apiParas["clueStatus"]  = $clueStatus;
    }

    public function getClueStatus()
    {
        return $this->clueStatus;
    }

    /**
     * @param int $brokerId
     * 经纪人ID
     * Required: false
     * Example Value: 
     */
    private $brokerId;

    /**
     * @param int $brokerId
     * 经纪人ID
     * Example Value: 
     */
    public function setBrokerId($brokerId)
    {
        $this->brokerId             = $brokerId;
        $this->apiParas["brokerId"]  = $brokerId;
    }

    public function getBrokerId()
    {
        return $this->brokerId;
    }

    /**
     * @param int $updateTimeLong
     * 更新时间(毫秒值)
     * Required: true
     * Example Value: 
     */
    private $updateTimeLong;

    /**
     * @param int $updateTimeLong
     * 更新时间(毫秒值)
     * Example Value: 
     */
    public function setUpdateTimeLong($updateTimeLong)
    {
        $this->updateTimeLong             = $updateTimeLong;
        $this->apiParas["updateTimeLong"]  = $updateTimeLong;
    }

    public function getUpdateTimeLong()
    {
        return $this->updateTimeLong;
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