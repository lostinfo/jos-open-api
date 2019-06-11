<?php

namespace JD\request;

/**
 * 查询100个sku以内的生成视频状态的sku信息
 * 视频服务API-视频的添加 更新 删除 查询 搜索 功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=67&apiId=3392&apiName=jingdong.itv.ImageToVideoService.queryImgToVideoList
 * Class ItvImageToVideoServiceQueryImgToVideoList
 * @package Jd\request
 */
class ItvImageToVideoServiceQueryImgToVideoList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.itv.ImageToVideoService.queryImgToVideoList";
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
     * @param Number[] $skuId
     * long型skuid
     * Required: true
     * Example Value: [30254437722]
     */
    private $skuId;

    /**
     * @param Number[] $skuId
     * long型skuid
     * Example Value: [30254437722]
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param Number $appId
     * 业务id
     * Required: true
     * Example Value: 10001
     */
    private $appId;

    /**
     * @param Number $appId
     * 业务id
     * Example Value: 10001
     */
    public function setAppId($appId)
    {
        $this->appId             = $appId;
        $this->apiParas["businessId"]  = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param String $token
     * 业务编号
     * Required: true
     * Example Value: sssss
     */
    private $token;

    /**
     * @param String $token
     * 业务编号
     * Example Value: sssss
     */
    public function setToken($token)
    {
        $this->token             = $token;
        $this->apiParas["businessCode"]  = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

}