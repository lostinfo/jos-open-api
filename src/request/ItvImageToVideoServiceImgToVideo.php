<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据skuid和venderid生成视频接口
 * 视频服务API-视频的添加 更新 删除 查询 搜索 功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=67&apiId=3394&apiName=jingdong.itv.ImageToVideoService.imgToVideo
 * Class ItvImageToVideoServiceImgToVideo
 * @package Jd\request
 */
class ItvImageToVideoServiceImgToVideo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.itv.ImageToVideoService.imgToVideo";
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
     * @param int $appId
     * 业务id
     * Required: true
     * Example Value: 100001
     */
    private $appId;

    /**
     * @param int $appId
     * 业务id
     * Example Value: 100001
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
     * @param int $skuId
     * skuid
     * Required: true
     * Example Value: 1111111
     */
    private $skuId;

    /**
     * @param int $skuId
     * skuid
     * Example Value: 1111111
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
     * @param string $token
     * 业务code
     * Required: true
     * Example Value: sdsdsdsds
     */
    private $token;

    /**
     * @param string $token
     * 业务code
     * Example Value: sdsdsdsds
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