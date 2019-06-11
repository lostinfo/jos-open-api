<?php

namespace JD\request;

/**
 * 查询.聚效.获取指定单元下全部创意基本信息
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=2629&apiName=jingdong.dsp.featured.querylist
 * Class DspFeaturedQuerylist
 * @package Jd\request
 */
class DspFeaturedQuerylist
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.featured.querylist";
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
     * @param Number $adGroupId
     * 来源
     * Required: true
     * Example Value: 
     */
    private $adGroupId;

    /**
     * @param Number $adGroupId
     * 来源
     * Example Value: 
     */
    public function setAdGroupId($adGroupId)
    {
        $this->adGroupId             = $adGroupId;
        $this->apiParas["adGroupId"]  = $adGroupId;
    }

    public function getAdGroupId()
    {
        return $this->adGroupId;
    }

    /**
     * @param Number $pageNum
     * 页数
     * Required: true
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param Number $pageNum
     * 页数
     * Example Value: 
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"]  = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param Number $pageSize
     * 列数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 列数
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