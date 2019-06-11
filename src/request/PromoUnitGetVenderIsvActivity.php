<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取isv活动列表
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2513&apiName=jingdong.promo.unit.getVenderIsvActivity
 * Class PromoUnitGetVenderIsvActivity
 * @package Jd\request
 */
class PromoUnitGetVenderIsvActivity
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.promo.unit.getVenderIsvActivity";
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
     * @param string $pluginName
     * 插件名
     * Required: true
     * Example Value: 
     */
    private $pluginName;

    /**
     * @param string $pluginName
     * 插件名
     * Example Value: 
     */
    public function setPluginName($pluginName)
    {
        $this->pluginName             = $pluginName;
        $this->apiParas["pluginName"]  = $pluginName;
    }

    public function getPluginName()
    {
        return $this->pluginName;
    }

    /**
     * @param int $pageSize
     * 页大小
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 页大小
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
     * @param int $pageNo
     * 当前页
     * Required: true
     * Example Value: 
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 当前页
     * Example Value: 
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

}