<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取数量
 * 视频服务API-视频的添加 更新 删除 查询 搜索 功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=67&apiId=2491&apiName=jingdong.pop.video.info.count
 * Class PopVideoInfoCount
 * @package Jd\request
 */
class PopVideoInfoCount
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.video.info.count";
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
     * @param string $videoName
     * 视频名称
     * Required: false
     * Example Value: 
     */
    private $videoName;

    /**
     * @param string $videoName
     * 视频名称
     * Example Value: 
     */
    public function setVideoName($videoName)
    {
        $this->videoName             = $videoName;
        $this->apiParas["video_name"]  = $videoName;
    }

    public function getVideoName()
    {
        return $this->videoName;
    }

    /**
     * @param int $status
     * 视频状态[1-转码中，2-转码完成，3-待审核，4-审核通过，5-审核驳回，6-转码失败，7-全景图处理中]
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param int $status
     * 视频状态[1-转码中，2-转码完成，3-待审核，4-审核通过，5-审核驳回，6-转码失败，7-全景图处理中]
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int[] $statuses
     * 视频状态集 (与视频状态二选一)
     * Required: false
     * Example Value: 
     */
    private $statuses;

    /**
     * @param int[] $statuses
     * 视频状态集 (与视频状态二选一)
     * Example Value: 
     */
    public function setStatuses($statuses)
    {
        $this->statuses             = $statuses;
        $this->apiParas["statuses"]  = $statuses;
    }

    public function getStatuses()
    {
        return $this->statuses;
    }

    /**
     * @param int $agentVideoId
     * 视频编码
     * Required: false
     * Example Value: 
     */
    private $agentVideoId;

    /**
     * @param int $agentVideoId
     * 视频编码
     * Example Value: 
     */
    public function setAgentVideoId($agentVideoId)
    {
        $this->agentVideoId             = $agentVideoId;
        $this->apiParas["agent_video_id"]  = $agentVideoId;
    }

    public function getAgentVideoId()
    {
        return $this->agentVideoId;
    }

    /**
     * @param int $videoType
     * 视频类型[1-主图 2-全景图]
     * Required: true
     * Example Value: 
     */
    private $videoType;

    /**
     * @param int $videoType
     * 视频类型[1-主图 2-全景图]
     * Example Value: 
     */
    public function setVideoType($videoType)
    {
        $this->videoType             = $videoType;
        $this->apiParas["video_type"]  = $videoType;
    }

    public function getVideoType()
    {
        return $this->videoType;
    }

    /**
     * @param string $createdDateStart
     * 创建日期左边界
     * Required: false
     * Example Value: 2018-04-27 00:00:00
     */
    private $createdDateStart;

    /**
     * @param string $createdDateStart
     * 创建日期左边界
     * Example Value: 2018-04-27 00:00:00
     */
    public function setCreatedDateStart($createdDateStart)
    {
        $this->createdDateStart             = $createdDateStart;
        $this->apiParas["created_date_start"]  = $createdDateStart;
    }

    public function getCreatedDateStart()
    {
        return $this->createdDateStart;
    }

    /**
     * @param string $createdDateEnd
     * 创建日期右边界
     * Required: false
     * Example Value: 2018-04-27 00:00:00
     */
    private $createdDateEnd;

    /**
     * @param string $createdDateEnd
     * 创建日期右边界
     * Example Value: 2018-04-27 00:00:00
     */
    public function setCreatedDateEnd($createdDateEnd)
    {
        $this->createdDateEnd             = $createdDateEnd;
        $this->apiParas["created_date_end"]  = $createdDateEnd;
    }

    public function getCreatedDateEnd()
    {
        return $this->createdDateEnd;
    }

    /**
     * @param int $skuId
     * 绑定的skuId
     * Required: false
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * 绑定的skuId
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_id"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

}