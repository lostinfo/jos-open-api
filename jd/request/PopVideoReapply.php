<?php

namespace JD\request;

/**
 * 申诉驳回的视频
 * 视频服务API-视频的添加 更新 删除 查询 搜索 功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=67&apiId=2483&apiName=jingdong.pop.video.reapply
 * Class PopVideoReapply
 * @package Jd\request
 */
class PopVideoReapply
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.video.reapply";
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
     * @param Number $videoId
     * 视频id
     * Required: true
     * Example Value: 
     */
    private $videoId;

    /**
     * @param Number $videoId
     * 视频id
     * Example Value: 
     */
    public function setVideoId($videoId)
    {
        $this->videoId             = $videoId;
        $this->apiParas["video_id"]  = $videoId;
    }

    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * @param String $applyReason
     * 申述原因（不能为空最多200字）
     * Required: true
     * Example Value: 
     */
    private $applyReason;

    /**
     * @param String $applyReason
     * 申述原因（不能为空最多200字）
     * Example Value: 
     */
    public function setApplyReason($applyReason)
    {
        $this->applyReason             = $applyReason;
        $this->apiParas["apply_reason"]  = $applyReason;
    }

    public function getApplyReason()
    {
        return $this->applyReason;
    }

}