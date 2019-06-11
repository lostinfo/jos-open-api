<?php

namespace JD\request;

/**
 * 修改或新增楼盘动态数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2615&apiName=jingdong.ers.fang.addOrUpdateHousesDynamic
 * Class ErsFangAddOrUpdateHousesDynamic
 * @package Jd\request
 */
class ErsFangAddOrUpdateHousesDynamic
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateHousesDynamic";
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
     * @param Number $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param Number $cityCode
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
     * @param Number $sourceId
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param Number $sourceId
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
     * @param Number $pSourceId
     * 来源楼盘主键
     * Required: true
     * Example Value: 
     */
    private $pSourceId;

    /**
     * @param Number $pSourceId
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
     * @param String $title
     * 标题
     * Required: true
     * Example Value: 
     */
    private $title;

    /**
     * @param String $title
     * 标题
     * Example Value: 
     */
    public function setTitle($title)
    {
        $this->title             = $title;
        $this->apiParas["title"]  = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param String $content
     * 内容
     * Required: true
     * Example Value: 
     */
    private $content;

    /**
     * @param String $content
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
     * @param Date $publishDate
     * 楼盘动态发布日期
     * Required: true
     * Example Value: 
     */
    private $publishDate;

    /**
     * @param Date $publishDate
     * 楼盘动态发布日期
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

}