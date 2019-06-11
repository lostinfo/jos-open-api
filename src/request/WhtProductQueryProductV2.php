<?php

namespace JD\request;

/**
 * 滚动查询
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=3403&apiName=jingdong.wht.product.queryProductV2
 * Class WhtProductQueryProductV2
 * @package Jd\request
 */
class WhtProductQueryProductV2
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.wht.product.queryProductV2";
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
     * @param Number $systemId
     * 系统ID,万家系统ID为78,超级旗舰店系统ID为80
     * Required: true
     * Example Value: 
     */
    private $systemId;

    /**
     * @param Number $systemId
     * 系统ID,万家系统ID为78,超级旗舰店系统ID为80
     * Example Value: 
     */
    public function setSystemId($systemId)
    {
        $this->systemId             = $systemId;
        $this->apiParas["system_id"]  = $systemId;
    }

    public function getSystemId()
    {
        return $this->systemId;
    }

    /**
     * @param String $shopId
     * 门店编号
     * Required: true
     * Example Value: 
     */
    private $shopId;

    /**
     * @param String $shopId
     * 门店编号
     * Example Value: 
     */
    public function setShopId($shopId)
    {
        $this->shopId             = $shopId;
        $this->apiParas["shop_id"]  = $shopId;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param Number $pageSize
     * 每页数量,最多100个
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页数量,最多100个
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param String $scrollId
     * 查询游标,查询第一页时不需要填写,查询第二页时需要第一页返回的scrollId
     * Required: false
     * Example Value: 
     */
    private $scrollId;

    /**
     * @param String $scrollId
     * 查询游标,查询第一页时不需要填写,查询第二页时需要第一页返回的scrollId
     * Example Value: 
     */
    public function setScrollId($scrollId)
    {
        $this->scrollId             = $scrollId;
        $this->apiParas["scroll_id"]  = $scrollId;
    }

    public function getScrollId()
    {
        return $this->scrollId;
    }

    /**
     * @param Date $startTime
     * 获取这个时间点之后更新的商品,如果不传,则获取全量数据,
     * Required: false
     * Example Value: 
     */
    private $startTime;

    /**
     * @param Date $startTime
     * 获取这个时间点之后更新的商品,如果不传,则获取全量数据,
     * Example Value: 
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["start_time"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param String $uuid
     * uuid,追踪调用路径,
     * Required: false
     * Example Value: 
     */
    private $uuid;

    /**
     * @param String $uuid
     * uuid,追踪调用路径,
     * Example Value: 
     */
    public function setUuid($uuid)
    {
        $this->uuid             = $uuid;
        $this->apiParas["uuid"]  = $uuid;
    }

    public function getUuid()
    {
        return $this->uuid;
    }

}