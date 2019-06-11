<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询.通用.人群信息
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=1638&apiName=jingdong.dsp.adunit.dmp.getcrowdlist
 * Class DspAdunitDmpGetcrowdlist
 * @package Jd\request
 */
class DspAdunitDmpGetcrowdlist
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adunit.dmp.getcrowdlist";
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
     * @param string $crowdName
     * 人群名称
     * Required: false
     * Example Value: 
     */
    private $crowdName;

    /**
     * @param string $crowdName
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
     * @param int $pageIndex
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
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
     * @param int $pageSize
     * 每页返回数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
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