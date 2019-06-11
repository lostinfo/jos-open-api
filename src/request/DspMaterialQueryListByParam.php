<?php

namespace JD\request;

/**
 * 查询.创意库.获取全部创意信息
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=1946&apiName=jingdong.dsp.material.queryListByParam
 * Class DspMaterialQueryListByParam
 * @package Jd\request
 */
class DspMaterialQueryListByParam
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.material.queryListByParam";
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
     * @param Number $effective
     * 是否失效 0失效，1未失效
     * Required: true
     * Example Value: 
     */
    private $effective;

    /**
     * @param Number $effective
     * 是否失效 0失效，1未失效
     * Example Value: 
     */
    public function setEffective($effective)
    {
        $this->effective             = $effective;
        $this->apiParas["effective"]  = $effective;
    }

    public function getEffective()
    {
        return $this->effective;
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
     * 每页数量
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页数量
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