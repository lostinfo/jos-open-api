<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 品牌街搜索后台
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=1348&apiName=jingdong.pinpaijie.search
 * Class PinpaijieSearch
 * @package Jd\request
 */
class PinpaijieSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pinpaijie.search";
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
     * @param string $key
     * 关键字
     * Required: false
     * Example Value: 
     */
    private $key;

    /**
     * @param string $key
     * 关键字
     * Example Value: 
     */
    public function setKey($key)
    {
        $this->key             = $key;
        $this->apiParas["key"]  = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $pagesize
     * 页大小
     * Required: false
     * Example Value: 
     */
    private $pagesize;

    /**
     * @param string $pagesize
     * 页大小
     * Example Value: 
     */
    public function setPagesize($pagesize)
    {
        $this->pagesize             = $pagesize;
        $this->apiParas["pagesize"]  = $pagesize;
    }

    public function getPagesize()
    {
        return $this->pagesize;
    }

    /**
     * @param string $page
     * 第几页
     * Required: false
     * Example Value: 
     */
    private $page;

    /**
     * @param string $page
     * 第几页
     * Example Value: 
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

}