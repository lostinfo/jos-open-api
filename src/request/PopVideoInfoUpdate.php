<?php

namespca Lostinfo\JosOpenApi;

/**
 * 视频信息更新
 * 视频服务API-视频的添加 更新 删除 查询 搜索 功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=67&apiId=2490&apiName=jingdong.pop.video.info.update
 * Class PopVideoInfoUpdate
 * @package Jd\request
 */
class PopVideoInfoUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.video.info.update";
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
     * @param int $videoId
     * 视频编号（更新时筛选条件）
     * Required: true
     * Example Value: 
     */
    private $videoId;

    /**
     * @param int $videoId
     * 视频编号（更新时筛选条件）
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
     * @param int $videoType
     * 视频类型（更新时筛选条件）
     * Required: true
     * Example Value: 
     */
    private $videoType;

    /**
     * @param int $videoType
     * 视频类型（更新时筛选条件）
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
     * @param string $videoName
     * 视频名称（可更新项 最长为25字）
     * Required: false
     * Example Value: 
     */
    private $videoName;

    /**
     * @param string $videoName
     * 视频名称（可更新项 最长为25字）
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
     * @param string $videoDesc
     * 视频描述（可更新项 最长为200字）
     * Required: false
     * Example Value: 
     */
    private $videoDesc;

    /**
     * @param string $videoDesc
     * 视频描述（可更新项 最长为200字）
     * Example Value: 
     */
    public function setVideoDesc($videoDesc)
    {
        $this->videoDesc             = $videoDesc;
        $this->apiParas["video_desc"]  = $videoDesc;
    }

    public function getVideoDesc()
    {
        return $this->videoDesc;
    }

}