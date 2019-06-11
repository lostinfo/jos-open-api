<?php

namespace JD\request;

/**
 * 根据venderid分页查询生成视频的sku的状态信息
 * 视频服务API-视频的添加 更新 删除 查询 搜索 功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=67&apiId=3393&apiName=jingdong.itv.ImageToVideoService.queryImgToVideoListPage
 * Class ItvImageToVideoServiceQueryImgToVideoListPage
 * @package Jd\request
 */
class ItvImageToVideoServiceQueryImgToVideoListPage
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.itv.ImageToVideoService.queryImgToVideoListPage";
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
     * @param Number $pageNo
     * 页数
     * Required: false
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param Number $pageNo
     * 页数
     * Example Value: 1
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param Number $appId
     * 业务id
     * Required: true
     * Example Value: 100001
     */
    private $appId;

    /**
     * @param Number $appId
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
     * @param Number $pageSize
     * 每页显示条数
     * Required: false
     * Example Value: 20
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页显示条数
     * Example Value: 20
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param Number $skuId
     * skuId
     * Required: false
     * Example Value: 111111
     */
    private $skuId;

    /**
     * @param Number $skuId
     * skuId
     * Example Value: 111111
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
     * @param Number $status
     * 状态
     * Required: false
     * Example Value: 1
     */
    private $status;

    /**
     * @param Number $status
     * 状态
     * Example Value: 1
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param String $token
     * 业务编号
     * Required: true
     * Example Value: sdsdsdsds
     */
    private $token;

    /**
     * @param String $token
     * 业务编号
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