<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 学生价商品查询【申请】
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=2390&apiName=jingdong.service.goods.queryStuPriceGoods
 * Class ServiceGoodsQueryStuPriceGoods
 * @package Jd\request
 */
class ServiceGoodsQueryStuPriceGoods
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.goods.queryStuPriceGoods";
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
     * @param int[] $skuIdList
     * skuId集合，长度30，可为空。如果传值，忽略其他查询条件。
     * Required: false
     * Example Value: 
     */
    private $skuIdList;

    /**
     * @param int[] $skuIdList
     * skuId集合，长度30，可为空。如果传值，忽略其他查询条件。
     * Example Value: 
     */
    public function setSkuIdList($skuIdList)
    {
        $this->skuIdList             = $skuIdList;
        $this->apiParas["skuIdList"]  = $skuIdList;
    }

    public function getSkuIdList()
    {
        return $this->skuIdList;
    }

    /**
     * @param int $pageIndex
     * 页码，默认1
     * Required: false
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页码，默认1
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
     * @param int $pageSize
     * 单页数最大30，默认30
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 单页数最大30，默认30
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
     * @param int $stuPriceFrom
     * 学生专享价区间开始（单位：元）
     * Required: true
     * Example Value: 
     */
    private $stuPriceFrom;

    /**
     * @param int $stuPriceFrom
     * 学生专享价区间开始（单位：元）
     * Example Value: 
     */
    public function setStuPriceFrom($stuPriceFrom)
    {
        $this->stuPriceFrom             = $stuPriceFrom;
        $this->apiParas["stuPriceFrom"]  = $stuPriceFrom;
    }

    public function getStuPriceFrom()
    {
        return $this->stuPriceFrom;
    }

    /**
     * @param int $stuPriceTo
     * 学生专享价区间结束
     * Required: true
     * Example Value: 
     */
    private $stuPriceTo;

    /**
     * @param int $stuPriceTo
     * 学生专享价区间结束
     * Example Value: 
     */
    public function setStuPriceTo($stuPriceTo)
    {
        $this->stuPriceTo             = $stuPriceTo;
        $this->apiParas["stuPriceTo"]  = $stuPriceTo;
    }

    public function getStuPriceTo()
    {
        return $this->stuPriceTo;
    }

    /**
     * @param int $cid1Id
     * 一级类目
     * Required: false
     * Example Value: 
     */
    private $cid1Id;

    /**
     * @param int $cid1Id
     * 一级类目
     * Example Value: 
     */
    public function setCid1Id($cid1Id)
    {
        $this->cid1Id             = $cid1Id;
        $this->apiParas["cid1Id"]  = $cid1Id;
    }

    public function getCid1Id()
    {
        return $this->cid1Id;
    }

    /**
     * @param int $cid2Id
     * 二级类目
     * Required: false
     * Example Value: 
     */
    private $cid2Id;

    /**
     * @param int $cid2Id
     * 二级类目
     * Example Value: 
     */
    public function setCid2Id($cid2Id)
    {
        $this->cid2Id             = $cid2Id;
        $this->apiParas["cid2Id"]  = $cid2Id;
    }

    public function getCid2Id()
    {
        return $this->cid2Id;
    }

    /**
     * @param int $cid3Id
     * 三级类目
     * Required: false
     * Example Value: 
     */
    private $cid3Id;

    /**
     * @param int $cid3Id
     * 三级类目
     * Example Value: 
     */
    public function setCid3Id($cid3Id)
    {
        $this->cid3Id             = $cid3Id;
        $this->apiParas["cid3Id"]  = $cid3Id;
    }

    public function getCid3Id()
    {
        return $this->cid3Id;
    }

    /**
     * @param string $owner
     * g=自营，p=pop 留空为不限
     * Required: false
     * Example Value: 
     */
    private $owner;

    /**
     * @param string $owner
     * g=自营，p=pop 留空为不限
     * Example Value: 
     */
    public function setOwner($owner)
    {
        $this->owner             = $owner;
        $this->apiParas["owner"]  = $owner;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param int $commissionShareFrom
     * 佣金比例区间开始（单位：百分比）
     * Required: false
     * Example Value: 
     */
    private $commissionShareFrom;

    /**
     * @param int $commissionShareFrom
     * 佣金比例区间开始（单位：百分比）
     * Example Value: 
     */
    public function setCommissionShareFrom($commissionShareFrom)
    {
        $this->commissionShareFrom             = $commissionShareFrom;
        $this->apiParas["commissionShareFrom"]  = $commissionShareFrom;
    }

    public function getCommissionShareFrom()
    {
        return $this->commissionShareFrom;
    }

    /**
     * @param int $commissionShareTo
     * 佣金比例区间结束
     * Required: false
     * Example Value: 
     */
    private $commissionShareTo;

    /**
     * @param int $commissionShareTo
     * 佣金比例区间结束
     * Example Value: 
     */
    public function setCommissionShareTo($commissionShareTo)
    {
        $this->commissionShareTo             = $commissionShareTo;
        $this->apiParas["commissionShareTo"]  = $commissionShareTo;
    }

    public function getCommissionShareTo()
    {
        return $this->commissionShareTo;
    }

    /**
     * @param string $sortName
     * 排序字段，stuPrice（学生价）/wlCommissionShare（佣金比例）/inOrderCount30Days（30天引入订单量）/inOrderComm30Days（30天累计支出佣金）
     * Required: false
     * Example Value: 
     */
    private $sortName;

    /**
     * @param string $sortName
     * 排序字段，stuPrice（学生价）/wlCommissionShare（佣金比例）/inOrderCount30Days（30天引入订单量）/inOrderComm30Days（30天累计支出佣金）
     * Example Value: 
     */
    public function setSortName($sortName)
    {
        $this->sortName             = $sortName;
        $this->apiParas["sortName"]  = $sortName;
    }

    public function getSortName()
    {
        return $this->sortName;
    }

    /**
     * @param string $sort
     * desc=降序（默认），asc=升序
     * Required: false
     * Example Value: 
     */
    private $sort;

    /**
     * @param string $sort
     * desc=降序（默认），asc=升序
     * Example Value: 
     */
    public function setSort($sort)
    {
        $this->sort             = $sort;
        $this->apiParas["sort"]  = $sort;
    }

    public function getSort()
    {
        return $this->sort;
    }

}