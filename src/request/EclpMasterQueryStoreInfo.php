<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询门店
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3448&apiName=jingdong.eclp.master.queryStoreInfo
 * Class EclpMasterQueryStoreInfo
 * @package Jd\request
 */
class EclpMasterQueryStoreInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.queryStoreInfo";
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
     * 当前页
     * Required: false
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * 当前页
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
     * 分页大小
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 分页大小
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

    /**
     * @param string $sellerNo
     * 商家编号
     * Required: true
     * Example Value: 
     */
    private $sellerNo;

    /**
     * @param string $sellerNo
     * 商家编号
     * Example Value: 
     */
    public function setSellerNo($sellerNo)
    {
        $this->sellerNo             = $sellerNo;
        $this->apiParas["sellerNo"]  = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    /**
     * @param string $storeNo
     * 门店编号
     * Required: false
     * Example Value: 
     */
    private $storeNo;

    /**
     * @param string $storeNo
     * 门店编号
     * Example Value: 
     */
    public function setStoreNo($storeNo)
    {
        $this->storeNo             = $storeNo;
        $this->apiParas["storeNo"]  = $storeNo;
    }

    public function getStoreNo()
    {
        return $this->storeNo;
    }

}