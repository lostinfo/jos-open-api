<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询包列表信息接口(用于用户标签开放)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2889&apiName=jingdong.data.vender.userpack.isv.list
 * Class DataVenderUserpackIsvList
 * @package Jd\request
 */
class DataVenderUserpackIsvList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.list";
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
     * @param string $dateTime
     * 起始时间(时间格式需为：yyyy-mm-dd hh:mm:ss)
     * Required: false
     * Example Value: 2018-8-31 08:08:08
     */
    private $dateTime;

    /**
     * @param string $dateTime
     * 起始时间(时间格式需为：yyyy-mm-dd hh:mm:ss)
     * Example Value: 2018-8-31 08:08:08
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime             = $dateTime;
        $this->apiParas["date_time"]  = $dateTime;
    }

    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param int $pageIndex
     * 页索引（页索引大于等于1）
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页索引（页索引大于等于1）
     * Example Value: 
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["page_index"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $pageSize
     * 页大小（其值大于等于1）
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 页大小（其值大于等于1）
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

}