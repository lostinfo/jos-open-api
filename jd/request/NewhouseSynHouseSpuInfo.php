<?php

namespace JD\request;

/**
 * 同步商家楼盘数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2184&apiName=jingdong.newhouse.synHouseSpuInfo
 * Class NewhouseSynHouseSpuInfo
 * @package Jd\request
 */
class NewhouseSynHouseSpuInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.newhouse.synHouseSpuInfo";
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
     * @param Number $channelId
     * 渠道编号
     * Required: true
     * Example Value: 
     */
    private $channelId;

    /**
     * @param Number $channelId
     * 渠道编号
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
     * @param Number $pageNum
     * 页数（从1开始）
     * Required: true
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param Number $pageNum
     * 页数（从1开始）
     * Example Value: 
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"]  = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

}