<?php

namespca Lostinfo\JosOpenApi;

/**
 * 视频sku解绑
 * 视频服务API-视频的添加 更新 删除 查询 搜索 功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=67&apiId=2487&apiName=jingdong.pop.video.skus.relative.delete
 * Class PopVideoSkusRelativeDelete
 * @package Jd\request
 */
class PopVideoSkusRelativeDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.video.skus.relative.delete";
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

    /**
     * @param string $psIdsStr
     * 要取消关联的商品信息json 字符串类似于这样的格式[{productId:1179859639,skuIds:[1353103045,1353103046,1353103050]},{productId:1179957974,skuIds:[1353340855]}]，数组中每一个对象是一个商品的信息，productId为该商品的productId,skuIds 为该商品下要取消关联的skuId数组
     * Required: true
     * Example Value: [{productId:1179859639,skuIds:[1353103045,1353103046,1353103050]},{productId:1179957974,skuIds:[1353340855]}]
     */
    private $psIdsStr;

    /**
     * @param string $psIdsStr
     * 要取消关联的商品信息json 字符串类似于这样的格式[{productId:1179859639,skuIds:[1353103045,1353103046,1353103050]},{productId:1179957974,skuIds:[1353340855]}]，数组中每一个对象是一个商品的信息，productId为该商品的productId,skuIds 为该商品下要取消关联的skuId数组
     * Example Value: [{productId:1179859639,skuIds:[1353103045,1353103046,1353103050]},{productId:1179957974,skuIds:[1353340855]}]
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