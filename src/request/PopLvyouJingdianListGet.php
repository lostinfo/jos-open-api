<?php

namespace JD\request;

/**
 * 获取景点信息
 * 景点门票API-POP虚拟业务,开放景点门票业务API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=131&apiId=775&apiName=jingdong.pop.lvyou.jingdian.list.get
 * Class PopLvyouJingdianListGet
 * @package Jd\request
 */
class PopLvyouJingdianListGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.lvyou.jingdian.list.get";
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
     * @param String $jingdianName
     * 景点名称
     * Required: false
     * Example Value: 
     */
    private $jingdianName;

    /**
     * @param String $jingdianName
     * 景点名称
     * Example Value: 
     */
    public function setJingdianName($jingdianName)
    {
        $this->jingdianName             = $jingdianName;
        $this->apiParas["jingdianName"]  = $jingdianName;
    }

    public function getJingdianName()
    {
        return $this->jingdianName;
    }

    /**
     * @param Number $pageNum
     * 默认1
     * Required: false
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param Number $pageNum
     * 默认1
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
     * 默认20条每页，最多50条
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 默认20条每页，最多50条
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