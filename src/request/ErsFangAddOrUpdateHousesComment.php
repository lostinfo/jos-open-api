<?php

namespca Lostinfo\JosOpenApi;

/**
 * 修改或新增楼盘点评数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2641&apiName=jingdong.ers.fang.addOrUpdateHousesComment
 * Class ErsFangAddOrUpdateHousesComment
 * @package Jd\request
 */
class ErsFangAddOrUpdateHousesComment
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateHousesComment";
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
     * @param int $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int $cityCode
     * 城市code
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["cityCode"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param int $sourceId
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param int $sourceId
     * 来源主键
     * Example Value: 
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId             = $sourceId;
        $this->apiParas["sourceId"]  = $sourceId;
    }

    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * @param int $pSourceId
     * 来源楼盘主键
     * Required: true
     * Example Value: 
     */
    private $pSourceId;

    /**
     * @param int $pSourceId
     * 来源楼盘主键
     * Example Value: 
     */
    public function setPSourceId($pSourceId)
    {
        $this->pSourceId             = $pSourceId;
        $this->apiParas["pSourceId"]  = $pSourceId;
    }

    public function getPSourceId()
    {
        return $this->pSourceId;
    }

    /**
     * @param int $channelId
     * 来源渠道主键
     * Required: true
     * Example Value: 
     */
    private $channelId;

    /**
     * @param int $channelId
     * 来源渠道主键
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
     * @param string $userName
     * 点评人
     * Required: false
     * Example Value: 
     */
    private $userName;

    /**
     * @param string $userName
     * 点评人
     * Example Value: 
     */
    public function setUserName($userName)
    {
        $this->userName             = $userName;
        $this->apiParas["userName"]  = $userName;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $content
     * 内容
     * Required: false
     * Example Value: 
     */
    private $content;

    /**
     * @param string $content
     * 内容
     * Example Value: 
     */
    public function setContent($content)
    {
        $this->content             = $content;
        $this->apiParas["content"]  = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $sourceUrl
     * 点评来源url
     * Required: false
     * Example Value: 
     */
    private $sourceUrl;

    /**
     * @param string $sourceUrl
     * 点评来源url
     * Example Value: 
     */
    public function setSourceUrl($sourceUrl)
    {
        $this->sourceUrl             = $sourceUrl;
        $this->apiParas["sourceUrl"]  = $sourceUrl;
    }

    public function getSourceUrl()
    {
        return $this->sourceUrl;
    }

    /**
     * @param string $commentTime
     * 点评时间
     * Required: false
     * Example Value: 
     */
    private $commentTime;

    /**
     * @param string $commentTime
     * 点评时间
     * Example Value: 
     */
    public function setCommentTime($commentTime)
    {
        $this->commentTime             = $commentTime;
        $this->apiParas["commentTime"]  = $commentTime;
    }

    public function getCommentTime()
    {
        return $this->commentTime;
    }

}