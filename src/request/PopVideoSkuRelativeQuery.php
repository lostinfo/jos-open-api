<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询视频关联关系
 * 视频服务API-视频的添加 更新 删除 查询 搜索 功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=67&apiId=2488&apiName=jingdong.pop.video.sku.relative.query
 * Class PopVideoSkuRelativeQuery
 * @package Jd\request
 */
class PopVideoSkuRelativeQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.video.sku.relative.query";
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
     * @param int $productId
     * 商品id
     * Required: false
     * Example Value: 
     */
    private $productId;

    /**
     * @param int $productId
     * 商品id
     * Example Value: 
     */
    public function setProductId($productId)
    {
        $this->productId             = $productId;
        $this->apiParas["product_id"]  = $productId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $skuId
     * skuId
     * Required: false
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int $skuId
     * skuId
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_id"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param int $status
     * 关联关系状态[3-待审核 4-审核通过 5-审核驳回]
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param int $status
     * 关联关系状态[3-待审核 4-审核通过 5-审核驳回]
     * Example Value: 
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
     * @param int[] $statuses
     * 关联关系状态集[3-待审核 4-审核通过 5-审核驳回]
     * Required: false
     * Example Value: 
     */
    private $statuses;

    /**
     * @param int[] $statuses
     * 关联关系状态集[3-待审核 4-审核通过 5-审核驳回]
     * Example Value: 
     */
    public function setStatuses($statuses)
    {
        $this->statuses             = $statuses;
        $this->apiParas["statuses"]  = $statuses;
    }

    public function getStatuses()
    {
        return $this->statuses;
    }

    /**
     * @param int $videoType
     * 视频类型
     * Required: true
     * Example Value: 
     */
    private $videoType;

    /**
     * @param int $videoType
     * 视频类型
     * Example Value: 
     */
    public function setVideoType($videoType)
    {
        $this->videoType             = $videoType;
        $this->apiParas["videoType"]  = $videoType;
    }

    public function getVideoType()
    {
        return $this->videoType;
    }

    /**
     * @param int $pageIndex
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页码
     * Example Value: 
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $pageSize
     * 每页显示个数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页显示个数
     * Example Value: 
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

}