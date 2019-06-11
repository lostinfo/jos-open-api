<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询小区列表
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2316&apiName=jingdong.nbhouse.rent.listPlotInfo
 * Class NbhouseRentListPlotInfo
 * @package Jd\request
 */
class NbhouseRentListPlotInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.nbhouse.rent.listPlotInfo";
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
     * @param int $lat
     * 纬度
     * Required: false
     * Example Value: 
     */
    private $lat;

    /**
     * @param int $lat
     * 纬度
     * Example Value: 
     */
    public function setLat($lat)
    {
        $this->lat             = $lat;
        $this->apiParas["lat"]  = $lat;
    }

    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param int $lon
     * 经度
     * Required: false
     * Example Value: 
     */
    private $lon;

    /**
     * @param int $lon
     * 经度
     * Example Value: 
     */
    public function setLon($lon)
    {
        $this->lon             = $lon;
        $this->apiParas["lon"]  = $lon;
    }

    public function getLon()
    {
        return $this->lon;
    }

    /**
     * @param int $distance
     * 距离(km,不能单独作为查询条件，需和经纬度一起使用)
     * Required: false
     * Example Value: 
     */
    private $distance;

    /**
     * @param int $distance
     * 距离(km,不能单独作为查询条件，需和经纬度一起使用)
     * Example Value: 
     */
    public function setDistance($distance)
    {
        $this->distance             = $distance;
        $this->apiParas["distance"]  = $distance;
    }

    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param string $plotName
     * 小区名称（小区名称的模糊查询）
     * Required: false
     * Example Value: 
     */
    private $plotName;

    /**
     * @param string $plotName
     * 小区名称（小区名称的模糊查询）
     * Example Value: 
     */
    public function setPlotName($plotName)
    {
        $this->plotName             = $plotName;
        $this->apiParas["plotName"]  = $plotName;
    }

    public function getPlotName()
    {
        return $this->plotName;
    }

    /**
     * @param int $plotCode
     * 地址Code（plotId，firstCode，secondCode，thirdCode的模糊查询） 暂不支持
     * Required: false
     * Example Value: 
     */
    private $plotCode;

    /**
     * @param int $plotCode
     * 地址Code（plotId，firstCode，secondCode，thirdCode的模糊查询） 暂不支持
     * Example Value: 
     */
    public function setPlotCode($plotCode)
    {
        $this->plotCode             = $plotCode;
        $this->apiParas["plotCode"]  = $plotCode;
    }

    public function getPlotCode()
    {
        return $this->plotCode;
    }

    /**
     * @param string $matchName
     * 地址名称全匹配（firstName，secondName，thirdName，addressDes的模糊查询）
     * Required: false
     * Example Value: 
     */
    private $matchName;

    /**
     * @param string $matchName
     * 地址名称全匹配（firstName，secondName，thirdName，addressDes的模糊查询）
     * Example Value: 
     */
    public function setMatchName($matchName)
    {
        $this->matchName             = $matchName;
        $this->apiParas["matchName"]  = $matchName;
    }

    public function getMatchName()
    {
        return $this->matchName;
    }

    /**
     * @param int $currentPage
     * 当前页 
     * Required: true
     * Example Value: 
     */
    private $currentPage;

    /**
     * @param int $currentPage
     * 当前页 
     * Example Value: 
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["currentPage"]  = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param int $pageSize
     * 分页数量 
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 分页数量 
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