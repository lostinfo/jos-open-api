<?php

namespace JD\request;

/**
 * 图片转视频生成进度查询接口
 * 视频服务API-视频的添加 更新 删除 查询 搜索 功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=67&apiId=3395&apiName=jingdong.itv.ImageToVideoService.imgToVideoProgress
 * Class ItvImageToVideoServiceImgToVideoProgress
 * @package Jd\request
 */
class ItvImageToVideoServiceImgToVideoProgress
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.itv.ImageToVideoService.imgToVideoProgress";
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
     * @param Number $appId
     * 业务编号
     * Required: true
     * Example Value: 100001
     */
    private $appId;

    /**
     * @param Number $appId
     * 业务编号
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
     * @param String $token
     * 业务编号
     * Required: true
     * Example Value: 1267f0c0-edea-441f-806a-7sd673f1e812
     */
    private $token;

    /**
     * @param String $token
     * 业务编号
     * Example Value: 1267f0c0-edea-441f-806a-7sd673f1e812
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

    /**
     * @param Number $skuId
     * 商品skuid
     * Required: true
     * Example Value: 36821791609
     */
    private $skuId;

    /**
     * @param Number $skuId
     * 商品skuid
     * Example Value: 36821791609
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

}