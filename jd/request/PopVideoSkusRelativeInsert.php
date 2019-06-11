<?php

namespace JD\request;

/**
 * 批量插入单条视频和sku关联关系
 * 视频服务API-视频的添加 更新 删除 查询 搜索 功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=67&apiId=2474&apiName=jingdong.pop.video.skus.relative.insert
 * Class PopVideoSkusRelativeInsert
 * @package Jd\request
 */
class PopVideoSkusRelativeInsert
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.video.skus.relative.insert";
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
        $this->apiParas["videoId"]  = $videoId;
    }

    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * @param String $psIdsStr
     * 要关联的商品信息json 字符串类似于这样的格式[{productId:1179859639,skuIds:[1353103045,1353103046,1353103050]},{productId:1179957974,skuIds:[1353340855]}]，数组中每一个对象是一个商品的信息，productId为该商品的productId,skuIds 为该商品下要关联的skuId数组
     * Required: true
     * Example Value: [{productId:1179859639,skuIds:[1353103045,1353103046,1353103050]},{productId:1179957974,skuIds:[1353340855]}](一个视频最多只能关联20个spu 单次最多只能关联100个sku)
     */
    private $psIdsStr;

    /**
     * @param String $psIdsStr
     * 要关联的商品信息json 字符串类似于这样的格式[{productId:1179859639,skuIds:[1353103045,1353103046,1353103050]},{productId:1179957974,skuIds:[1353340855]}]，数组中每一个对象是一个商品的信息，productId为该商品的productId,skuIds 为该商品下要关联的skuId数组
     * Example Value: [{productId:1179859639,skuIds:[1353103045,1353103046,1353103050]},{productId:1179957974,skuIds:[1353340855]}](一个视频最多只能关联20个spu 单次最多只能关联100个sku)
     */
    public function setPsIdsStr($psIdsStr)
    {
        $this->psIdsStr             = $psIdsStr;
        $this->apiParas["product_info_array"]  = $psIdsStr;
    }

    public function getPsIdsStr()
    {
        return $this->psIdsStr;
    }

}