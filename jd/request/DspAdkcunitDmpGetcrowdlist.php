<?php

namespace JD\request;

/**
 * 查询.通用.人群信息
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1606&apiName=jingdong.dsp.adkcunit.dmp.getcrowdlist
 * Class DspAdkcunitDmpGetcrowdlist
 * @package Jd\request
 */
class DspAdkcunitDmpGetcrowdlist
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkcunit.dmp.getcrowdlist";
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
     * @param String $crowdName
     * 人群名称
     * Required: false
     * Example Value: 
     */
    private $crowdName;

    /**
     * @param String $crowdName
     * 人群名称
     * Example Value: 
     */
    public function setCrowdName($crowdName)
    {
        $this->crowdName             = $crowdName;
        $this->apiParas["crowdName"]  = $crowdName;
    }

    public function getCrowdName()
    {
        return $this->crowdName;
    }

    /**
     * @param Number $pageIndex
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
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
     * @param Number $pageSize
     * 每页返回数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页返回数
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