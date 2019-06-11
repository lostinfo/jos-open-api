<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 新增或修改房源描述
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2766&apiName=jingdong.ers.fang.addOrUpdateDescribe
 * Class ErsFangAddOrUpdateDescribe
 * @package Jd\request
 */
class ErsFangAddOrUpdateDescribe
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateDescribe";
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
     * @param int $channelId
     * 来源渠道id
     * Required: true
     * Example Value: 
     */
    private $channelId;

    /**
     * @param int $channelId
     * 来源渠道id
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
     * @param string $content
     * 房源描述
     * Required: true
     * Example Value: 
     */
    private $content;

    /**
     * @param string $content
     * 房源描述
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
     * @param string $publishDate
     * 发布日期
     * Required: true
     * Example Value: 
     */
    private $publishDate;

    /**
     * @param string $publishDate
     * 发布日期
     * Example Value: 
     */
    public function setPublishDate($publishDate)
    {
        $this->publishDate             = $publishDate;
        $this->apiParas["publishDate"]  = $publishDate;
    }

    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * @param string $sourceUrl
     * 描述来源url
     * Required: false
     * Example Value: 
     */
    private $sourceUrl;

    /**
     * @param string $sourceUrl
     * 描述来源url
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
     * 来源房源id
     * Required: true
     * Example Value: 
     */
    private $pSourceId;

    /**
     * @param int $pSourceId
     * 来源房源id
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

}