<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询库存分页数据
 * 移动店铺API-移动店铺新业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=202&apiId=1780&apiName=jingdong.miniwms.oc.stock.queryStockPage
 * Class MiniwmsOcStockQueryStockPage
 * @package Jd\request
 */
class MiniwmsOcStockQueryStockPage
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.miniwms.oc.stock.queryStockPage";
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
     * @param string $stationId
     * 移动仓ID
     * Required: true
     * Example Value: 
     */
    private $stationId;

    /**
     * @param string $stationId
     * 移动仓ID
     * Example Value: 
     */
    public function setStationId($stationId)
    {
        $this->stationId             = $stationId;
        $this->apiParas["stationId"]  = $stationId;
    }

    public function getStationId()
    {
        return $this->stationId;
    }

    /**
     * @param int $pageSize
     * 每页大小
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页大小
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
     * @param int $page
     * 页码
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * 页码
     * Example Value: 
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

}