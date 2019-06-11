<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 佣金商品基本信息
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=2664&apiName=jingdong.queryCommProduct
 * Class QueryCommProduct
 * @package Jd\request
 */
class QueryCommProduct
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryCommProduct";
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
     * @param int $shopId
     * 门店ID
     * Required: false
     * Example Value: 
     */
    private $shopId;

    /**
     * @param int $shopId
     * 门店ID
     * Example Value: 
     */
    public function setShopId($shopId)
    {
        $this->shopId             = $shopId;
        $this->apiParas["shopId"]  = $shopId;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param int $projectId
     * 项目ID
     * Required: false
     * Example Value: 
     */
    private $projectId;

    /**
     * @param int $projectId
     * 项目ID
     * Example Value: 
     */
    public function setProjectId($projectId)
    {
        $this->projectId             = $projectId;
        $this->apiParas["projectId"]  = $projectId;
    }

    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param int $index
     * 第N页
     * Required: false
     * Example Value: 
     */
    private $index;

    /**
     * @param int $index
     * 第N页
     * Example Value: 
     */
    public function setIndex($index)
    {
        $this->index             = $index;
        $this->apiParas["index"]  = $index;
    }

    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param int $pageSize
     * 每页数量
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页数量
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

    /**
     * @param string $bizToken
     * token
     * Required: true
     * Example Value: 
     */
    private $bizToken;

    /**
     * @param string $bizToken
     * token
     * Example Value: 
     */
    public function setBizToken($bizToken)
    {
        $this->bizToken             = $bizToken;
        $this->apiParas["bizToken"]  = $bizToken;
    }

    public function getBizToken()
    {
        return $this->bizToken;
    }

    /**
     * @param string $source
     * source
     * Required: true
     * Example Value: 
     */
    private $source;

    /**
     * @param string $source
     * source
     * Example Value: 
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $modiStartTime
     * 修改开始时间 格式yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 
     */
    private $modiStartTime;

    /**
     * @param string $modiStartTime
     * 修改开始时间 格式yyyy-MM-dd HH:mm:ss
     * Example Value: 
     */
    public function setModiStartTime($modiStartTime)
    {
        $this->modiStartTime             = $modiStartTime;
        $this->apiParas["modiStartTime"]  = $modiStartTime;
    }

    public function getModiStartTime()
    {
        return $this->modiStartTime;
    }

    /**
     * @param string $modiEndTime
     * 修改结束时间 格式yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 
     */
    private $modiEndTime;

    /**
     * @param string $modiEndTime
     * 修改结束时间 格式yyyy-MM-dd HH:mm:ss
     * Example Value: 
     */
    public function setModiEndTime($modiEndTime)
    {
        $this->modiEndTime             = $modiEndTime;
        $this->apiParas["modiEndTime"]  = $modiEndTime;
    }

    public function getModiEndTime()
    {
        return $this->modiEndTime;
    }

}