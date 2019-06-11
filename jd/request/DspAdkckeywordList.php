<?php

namespace JD\request;

/**
 * 关键词列表
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=3554&apiName=jingdong.dsp.adkckeyword.list
 * Class DspAdkckeywordList
 * @package Jd\request
 */
class DspAdkckeywordList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkckeyword.list";
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
     * @param String $platform
     * 设备，NULL：全部，0-PC，1-无线
     * Required: false
     * Example Value: 1
     */
    private $platform;

    /**
     * @param String $platform
     * 设备，NULL：全部，0-PC，1-无线
     * Example Value: 1
     */
    public function setPlatform($platform)
    {
        $this->platform             = $platform;
        $this->apiParas["platform"]  = $platform;
    }

    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param String $valType
     * 购买类型，NULL：全部，1：精确匹配，4-短语匹配，8-切词匹配
     * Required: false
     * Example Value: 1
     */
    private $valType;

    /**
     * @param String $valType
     * 购买类型，NULL：全部，1：精确匹配，4-短语匹配，8-切词匹配
     * Example Value: 1
     */
    public function setValType($valType)
    {
        $this->valType             = $valType;
        $this->apiParas["valType"]  = $valType;
    }

    public function getValType()
    {
        return $this->valType;
    }

    /**
     * @param Number $page
     * 页码
     * Required: true
     * Example Value: 1
     */
    private $page;

    /**
     * @param Number $page
     * 页码
     * Example Value: 1
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
     * @param Number $pageSize
     * 每页项数
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页项数
     * Example Value: 10
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