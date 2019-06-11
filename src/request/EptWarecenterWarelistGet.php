<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 商品列表查询
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=908&apiName=jingdong.ept.warecenter.warelist.get
 * Class EptWarecenterWarelistGet
 * @package Jd\request
 */
class EptWarecenterWarelistGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.warecenter.warelist.get";
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
     * @param string $wareIdsStr
     * 商品编号，多个编号之间使用逗号分隔
     * Required: false
     * Example Value: 
     */
    private $wareIdsStr;

    /**
     * @param string $wareIdsStr
     * 商品编号，多个编号之间使用逗号分隔
     * Example Value: 
     */
    public function setWareIdsStr($wareIdsStr)
    {
        $this->wareIdsStr             = $wareIdsStr;
        $this->apiParas["wareIdsStr"]  = $wareIdsStr;
    }

    public function getWareIdsStr()
    {
        return $this->wareIdsStr;
    }

    /**
     * @param string $wareStatus
     * 商品状态(1.在售中,2.仓库中,3违规,4.删除)
     * Required: false
     * Example Value: 
     */
    private $wareStatus;

    /**
     * @param string $wareStatus
     * 商品状态(1.在售中,2.仓库中,3违规,4.删除)
     * Example Value: 
     */
    public function setWareStatus($wareStatus)
    {
        $this->wareStatus             = $wareStatus;
        $this->apiParas["wareStatus"]  = $wareStatus;
    }

    public function getWareStatus()
    {
        return $this->wareStatus;
    }

    /**
     * @param int $categoryId
     * 三级类目ID
     * Required: false
     * Example Value: 
     */
    private $categoryId;

    /**
     * @param int $categoryId
     * 三级类目ID
     * Example Value: 
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId             = $categoryId;
        $this->apiParas["categoryId"]  = $categoryId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param string $title
     * 商品标题
     * Required: false
     * Example Value: 
     */
    private $title;

    /**
     * @param string $title
     * 商品标题
     * Example Value: 
     */
    public function setTitle($title)
    {
        $this->title             = $title;
        $this->apiParas["title"]  = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $itemNum
     * 货号
     * Required: false
     * Example Value: 
     */
    private $itemNum;

    /**
     * @param string $itemNum
     * 货号
     * Example Value: 
     */
    public function setItemNum($itemNum)
    {
        $this->itemNum             = $itemNum;
        $this->apiParas["itemNum"]  = $itemNum;
    }

    public function getItemNum()
    {
        return $this->itemNum;
    }

    /**
     * @param int $transportId
     * 运费模板编号
     * Required: false
     * Example Value: 
     */
    private $transportId;

    /**
     * @param int $transportId
     * 运费模板编号
     * Example Value: 
     */
    public function setTransportId($transportId)
    {
        $this->transportId             = $transportId;
        $this->apiParas["transportId"]  = $transportId;
    }

    public function getTransportId()
    {
        return $this->transportId;
    }

    /**
     * @param string $startOnlineTime
     * 上架起始日期（精确到秒)
     * Required: false
     * Example Value: 
     */
    private $startOnlineTime;

    /**
     * @param string $startOnlineTime
     * 上架起始日期（精确到秒)
     * Example Value: 
     */
    public function setStartOnlineTime($startOnlineTime)
    {
        $this->startOnlineTime             = $startOnlineTime;
        $this->apiParas["startOnlineTime"]  = $startOnlineTime;
    }

    public function getStartOnlineTime()
    {
        return $this->startOnlineTime;
    }

    /**
     * @param string $endOnlineTime
     * 上架截止日期（精确到秒)
     * Required: false
     * Example Value: 
     */
    private $endOnlineTime;

    /**
     * @param string $endOnlineTime
     * 上架截止日期（精确到秒)
     * Example Value: 
     */
    public function setEndOnlineTime($endOnlineTime)
    {
        $this->endOnlineTime             = $endOnlineTime;
        $this->apiParas["endOnlineTime"]  = $endOnlineTime;
    }

    public function getEndOnlineTime()
    {
        return $this->endOnlineTime;
    }

    /**
     * @param string $minSupplyPrice
     * 最低供货价（单位：分）
     * Required: false
     * Example Value: 
     */
    private $minSupplyPrice;

    /**
     * @param string $minSupplyPrice
     * 最低供货价（单位：分）
     * Example Value: 
     */
    public function setMinSupplyPrice($minSupplyPrice)
    {
        $this->minSupplyPrice             = $minSupplyPrice;
        $this->apiParas["minSupplyPrice"]  = $minSupplyPrice;
    }

    public function getMinSupplyPrice()
    {
        return $this->minSupplyPrice;
    }

    /**
     * @param string $maxSupplyPrice
     * 最高供货价（单位：分）
     * Required: false
     * Example Value: 
     */
    private $maxSupplyPrice;

    /**
     * @param string $maxSupplyPrice
     * 最高供货价（单位：分）
     * Example Value: 
     */
    public function setMaxSupplyPrice($maxSupplyPrice)
    {
        $this->maxSupplyPrice             = $maxSupplyPrice;
        $this->apiParas["maxSupplyPrice"]  = $maxSupplyPrice;
    }

    public function getMaxSupplyPrice()
    {
        return $this->maxSupplyPrice;
    }

    /**
     * @param int $recommendTpid
     * 关联版式编号
     * Required: false
     * Example Value: 
     */
    private $recommendTpid;

    /**
     * @param int $recommendTpid
     * 关联版式编号
     * Example Value: 
     */
    public function setRecommendTpid($recommendTpid)
    {
        $this->recommendTpid             = $recommendTpid;
        $this->apiParas["recommendTpid"]  = $recommendTpid;
    }

    public function getRecommendTpid()
    {
        return $this->recommendTpid;
    }

    /**
     * @param int $pageSize
     * 单页大小(单页显示记录数不能超过20条)
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 单页大小(单页显示记录数不能超过20条)
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
     * @param int $currentPage
     * 页码
     * Required: true
     * Example Value: 
     */
    private $currentPage;

    /**
     * @param int $currentPage
     * 页码
     * Example Value: 
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["currentPage"]  = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

}