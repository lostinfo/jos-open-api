<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取包中用户信息(用于微信公众号)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2950&apiName=jingdong.data.vender.userpack.isv.content.list
 * Class DataVenderUserpackIsvContentList
 * @package Jd\request
 */
class DataVenderUserpackIsvContentList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.content.list";
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
     * @param int $page
     * 页索引（页索引大于等于1）
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * 页索引（页索引大于等于1）
     * Example Value: 
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page_index"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $pageSize
     * 页大小（其值大于等于1）
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 页大小（其值大于等于1）
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param string $searchId
     * 人群包筛选结果唯一ID
     * Required: true
     * Example Value: 
     */
    private $searchId;

    /**
     * @param string $searchId
     * 人群包筛选结果唯一ID
     * Example Value: 
     */
    public function setSearchId($searchId)
    {
        $this->searchId             = $searchId;
        $this->apiParas["search_id"]  = $searchId;
    }

    public function getSearchId()
    {
        return $this->searchId;
    }

}