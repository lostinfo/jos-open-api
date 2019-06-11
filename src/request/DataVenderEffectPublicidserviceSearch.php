<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询微信公众号效果数据
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2808&apiName=jingdong.data.vender.effect.publicidservice.search
 * Class DataVenderEffectPublicidserviceSearch
 * @package Jd\request
 */
class DataVenderEffectPublicidserviceSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.effect.publicidservice.search";
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
     * 第几页,页码信息
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * 第几页,页码信息
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
     * @param int $pageSize
     * 每页多少条,条数信息，最多100条
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页多少条,条数信息，最多100条
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
     * @param string $startDate
     * 开始日期
     * Required: true
     * Example Value: 
     */
    private $startDate;

    /**
     * @param string $startDate
     * 开始日期
     * Example Value: 
     */
    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["start_date"]  = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * 截止日期
     * Required: true
     * Example Value: 
     */
    private $endDate;

    /**
     * @param string $endDate
     * 截止日期
     * Example Value: 
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["end_date"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $wechatPublicId
     * 微信公众号
     * Required: true
     * Example Value: 
     */
    private $wechatPublicId;

    /**
     * @param string $wechatPublicId
     * 微信公众号
     * Example Value: 
     */
    public function setWechatPublicId($wechatPublicId)
    {
        $this->wechatPublicId             = $wechatPublicId;
        $this->apiParas["wechat_publicid"]  = $wechatPublicId;
    }

    public function getWechatPublicId()
    {
        return $this->wechatPublicId;
    }

}