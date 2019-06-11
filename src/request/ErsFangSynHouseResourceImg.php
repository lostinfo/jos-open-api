<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 同步房源图片
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2759&apiName=jingdong.ers.fang.synHouseResourceImg
 * Class ErsFangSynHouseResourceImg
 * @package Jd\request
 */
class ErsFangSynHouseResourceImg
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.synHouseResourceImg";
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
     * @param string $imgUrl
     * 图片url（转换后的图片url）
     * Required: true
     * Example Value: 
     */
    private $imgUrl;

    /**
     * @param string $imgUrl
     * 图片url（转换后的图片url）
     * Example Value: 
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl             = $imgUrl;
        $this->apiParas["imgUrl"]  = $imgUrl;
    }

    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * @param  $imgType
     * 图片类型（1：主图   2：户型图  3：列表展示图  4:室内图   5：效果图   6：样板间  7：实景  8：配套   9：规划   10：其他）
     * Required: true
     * Example Value: 
     */
    private $imgType;

    /**
     * @param  $imgType
     * 图片类型（1：主图   2：户型图  3：列表展示图  4:室内图   5：效果图   6：样板间  7：实景  8：配套   9：规划   10：其他）
     * Example Value: 
     */
    public function setImgType($imgType)
    {
        $this->imgType             = $imgType;
        $this->apiParas["imgType"]  = $imgType;
    }

    public function getImgType()
    {
        return $this->imgType;
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