<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询.通用.全部商家资质
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=1942&apiName=jingdong.dsp.material.queryCreativeByParam
 * Class DspMaterialQueryCreativeByParam
 * @package Jd\request
 */
class DspMaterialQueryCreativeByParam
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.material.queryCreativeByParam";
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
     * 页码
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * 页码
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

    /**
     * @param int $pagesize
     * 每页数量
     * Required: true
     * Example Value: 
     */
    private $pagesize;

    /**
     * @param int $pagesize
     * 每页数量
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

}