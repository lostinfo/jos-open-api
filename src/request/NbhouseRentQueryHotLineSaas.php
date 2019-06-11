<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询热线电话
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2926&apiName=jingdong.nbhouse.rent.queryHotLineSaas
 * Class NbhouseRentQueryHotLineSaas
 * @package Jd\request
 */
class NbhouseRentQueryHotLineSaas
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.nbhouse.rent.queryHotLineSaas";
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
     * @param string $phoneExtensionNum
     * 分机号信息
     * Required: false
     * Example Value: 
     */
    private $phoneExtensionNum;

    /**
     * @param string $phoneExtensionNum
     * 分机号信息
     * Example Value: 
     */
    public function setPhoneExtensionNum($phoneExtensionNum)
    {
        $this->phoneExtensionNum             = $phoneExtensionNum;
        $this->apiParas["phoneExtensionNum"]  = $phoneExtensionNum;
    }

    public function getPhoneExtensionNum()
    {
        return $this->phoneExtensionNum;
    }

    /**
     * @param int $page
     * 页数大小(从1开始,默认1）
     * Required: false
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * 页数大小(从1开始,默认1）
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

    /**
     * @param int $pageSize
     * 分页大小(默认10）
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 分页大小(默认10）
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