<?php

namespace JD\request;

/**
 * 查询服务市场订购订单详情
 * 服务市场API-服务市场API包括发布服务市场中订购关系查询API、服务操作API、获取服务列表、获取和服务相对应的收费项目列表等API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=66&apiId=3572&apiName=jingdong.pop.fw.order.listwithpage
 * Class PopFwOrderListwithpage
 * @package Jd\request
 */
class PopFwOrderListwithpage
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.fw.order.listwithpage";
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
     * @param Number $pageSize
     * 页面中展示个数
     * Required: true
     * Example Value: 1
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 页面中展示个数
     * Example Value: 1
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
     * @param String $fwsPin
     * 服务商PIN
     * Required: true
     * Example Value: fwsPin
     */
    private $fwsPin;

    /**
     * @param String $fwsPin
     * 服务商PIN
     * Example Value: fwsPin
     */
    public function setFwsPin($fwsPin)
    {
        $this->fwsPin             = $fwsPin;
        $this->apiParas["fwsPin"]  = $fwsPin;
    }

    public function getFwsPin()
    {
        return $this->fwsPin;
    }

    /**
     * @param Number $currentPage
     * 当前页数
     * Required: true
     * Example Value: 1
     */
    private $currentPage;

    /**
     * @param Number $currentPage
     * 当前页数
     * Example Value: 1
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
     * @param String $serviceCode
     * 服务编码
     * Required: true
     * Example Value: FW_GOODS-....
     */
    private $serviceCode;

    /**
     * @param String $serviceCode
     * 服务编码
     * Example Value: FW_GOODS-....
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode             = $serviceCode;
        $this->apiParas["serviceCode"]  = $serviceCode;
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

}