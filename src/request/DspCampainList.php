<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询.聚效.获取全部计划基本信息
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=885&apiName=jingdong.dsp.campain.list
 * Class DspCampainList
 * @package Jd\request
 */
class DspCampainList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.campain.list";
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
     * @param int $pageNum
     * 页数
     * Required: true
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param int $pageNum
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
     * @param int $pageSize
     * 行数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 行数
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