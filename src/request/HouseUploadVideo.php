<?php

namespca Lostinfo\JosOpenApi;

/**
 * 上传视频
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=3963&apiName=jingdong.house.uploadVideo
 * Class HouseUploadVideo
 * @package Jd\request
 */
class HouseUploadVideo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.house.uploadVideo";
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
     * Required: true
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
        $this->apiParas["videoName"]  = $videoName;
    }

    public function getVideoName()
    {
        return $this->videoName;
    }

    /**
     * @param string $ip
     * 客户端ip
     * Required: true
     * Example Value: 
     */
    private $ip;

    /**
     * @param string $ip
     * 客户端ip
     * Example Value: 
     */
    public function setIp($ip)
    {
        $this->ip             = $ip;
        $this->apiParas["ip"]  = $ip;
    }

    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $videoTag
     * 视频标签
     * Required: false
     * Example Value: 
     */
    private $videoTag;

    /**
     * @param string $videoTag
     * 视频标签
     * Example Value: 
     */
    public function setVideoTag($videoTag)
    {
        $this->videoTag             = $videoTag;
        $this->apiParas["videoTag"]  = $videoTag;
    }

    public function getVideoTag()
    {
        return $this->videoTag;
    }

    /**
     * @param string $videoDesc
     * 视频描述
     * Required: false
     * Example Value: 
     */
    private $videoDesc;

    /**
     * @param string $videoDesc
     * 视频描述
     * Example Value: 
     */
    public function setVideoDesc($videoDesc)
    {
        $this->videoDesc             = $videoDesc;
        $this->apiParas["videoDesc"]  = $videoDesc;
    }

    public function getVideoDesc()
    {
        return $this->videoDesc;
    }

    /**
     * @param int $fileSize
     * 文件大小
     * Required: true
     * Example Value: 
     */
    private $fileSize;

    /**
     * @param int $fileSize
     * 文件大小
     * Example Value: 
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize             = $fileSize;
        $this->apiParas["fileSize"]  = $fileSize;
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }

}