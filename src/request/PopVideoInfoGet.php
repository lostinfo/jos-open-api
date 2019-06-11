<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询单条视频
 * 视频服务API-视频的添加 更新 删除 查询 搜索 功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=67&apiId=2484&apiName=jingdong.pop.video.info.get
 * Class PopVideoInfoGet
 * @package Jd\request
 */
class PopVideoInfoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.video.info.get";
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
     * 视频id
     * Required: true
     * Example Value: 
     */
    private $videoId;

    /**
     * @param int $videoId
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

}