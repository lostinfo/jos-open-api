<?php

namespace JD\request;

/**
 * 删除视频信息
 * 视频服务API-视频的添加 更新 删除 查询 搜索 功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=67&apiId=2489&apiName=jingdong.pop.video.infos.delete
 * Class PopVideoInfosDelete
 * @package Jd\request
 */
class PopVideoInfosDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.video.infos.delete";
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
     * @param Number[] $videoIds
     * 视频id数组（最多传20个视频id）
     * Required: true
     * Example Value: 
     */
    private $videoIds;

    /**
     * @param Number[] $videoIds
     * 视频id数组（最多传20个视频id）
     * Example Value: 
     */
    public function setVideoIds($videoIds)
    {
        $this->videoIds             = $videoIds;
        $this->apiParas["video_ids"]  = $videoIds;
    }

    public function getVideoIds()
    {
        return $this->videoIds;
    }

}