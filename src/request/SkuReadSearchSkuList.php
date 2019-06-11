<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * SKU搜索服务
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1227&apiName=jingdong.sku.read.searchSkuList
 * Class SkuReadSearchSkuList
 * @package Jd\request
 */
class SkuReadSearchSkuList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sku.read.searchSkuList";
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
     * @param int[] $wareId
     * 商品ID
     * Required: false
     * Example Value: 无
     */
    private $wareId;

    /**
     * @param int[] $wareId
     * 商品ID
     * Example Value: 无
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param int[] $skuId
     * SKU ID
     * Required: false
     * Example Value: 无
     */
    private $skuId;

    /**
     * @param int[] $skuId
     * SKU ID
     * Example Value: 无
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param int[] $skuStatuValue
     * SKU状态：1:上架 2:下架 4:删除  默认查询上架下架商品
     * Required: false
     * Example Value: 无
     */
    private $skuStatuValue;

    /**
     * @param int[] $skuStatuValue
     * SKU状态：1:上架 2:下架 4:删除  默认查询上架下架商品
     * Example Value: 无
     */
    public function setSkuStatuValue($skuStatuValue)
    {
        $this->skuStatuValue             = $skuStatuValue;
        $this->apiParas["skuStatuValue"]  = $skuStatuValue;
    }

    public function getSkuStatuValue()
    {
        return $this->skuStatuValue;
    }

    /**
     * @param int $maxStockNum
     * 库存范围 最大库存
     * Required: false
     * Example Value: 最大库存
     */
    private $maxStockNum;

    /**
     * @param int $maxStockNum
     * 库存范围 最大库存
     * Example Value: 最大库存
     */
    public function setMaxStockNum($maxStockNum)
    {
        $this->maxStockNum             = $maxStockNum;
        $this->apiParas["maxStockNum"]  = $maxStockNum;
    }

    public function getMaxStockNum()
    {
        return $this->maxStockNum;
    }

    /**
     * @param int $minStockNum
     * 库存范围 最小库存
     * Required: false
     * Example Value: 最小库存
     */
    private $minStockNum;

    /**
     * @param int $minStockNum
     * 库存范围 最小库存
     * Example Value: 最小库存
     */
    public function setMinStockNum($minStockNum)
    {
        $this->minStockNum             = $minStockNum;
        $this->apiParas["minStockNum"]  = $minStockNum;
    }

    public function getMinStockNum()
    {
        return $this->minStockNum;
    }

    /**
     * @param string $endCreatedTime
     * 创建时间结束
     * Required: false
     * Example Value: 无
     */
    private $endCreatedTime;

    /**
     * @param string $endCreatedTime
     * 创建时间结束
     * Example Value: 无
     */
    public function setEndCreatedTime($endCreatedTime)
    {
        $this->endCreatedTime             = $endCreatedTime;
        $this->apiParas["endCreatedTime"]  = $endCreatedTime;
    }

    public function getEndCreatedTime()
    {
        return $this->endCreatedTime;
    }

    /**
     * @param string $endModifiedTime
     * 修改时间结束
     * Required: false
     * Example Value: 无
     */
    private $endModifiedTime;

    /**
     * @param string $endModifiedTime
     * 修改时间结束
     * Example Value: 无
     */
    public function setEndModifiedTime($endModifiedTime)
    {
        $this->endModifiedTime             = $endModifiedTime;
        $this->apiParas["endModifiedTime"]  = $endModifiedTime;
    }

    public function getEndModifiedTime()
    {
        return $this->endModifiedTime;
    }

    /**
     * @param string $startCreatedTime
     * 创建时间开始
     * Required: false
     * Example Value: 无
     */
    private $startCreatedTime;

    /**
     * @param string $startCreatedTime
     * 创建时间开始
     * Example Value: 无
     */
    public function setStartCreatedTime($startCreatedTime)
    {
        $this->startCreatedTime             = $startCreatedTime;
        $this->apiParas["startCreatedTime"]  = $startCreatedTime;
    }

    public function getStartCreatedTime()
    {
        return $this->startCreatedTime;
    }

    /**
     * @param string $startModifiedTime
     * 修改时间开始
     * Required: false
     * Example Value: 无
     */
    private $startModifiedTime;

    /**
     * @param string $startModifiedTime
     * 修改时间开始
     * Example Value: 无
     */
    public function setStartModifiedTime($startModifiedTime)
    {
        $this->startModifiedTime             = $startModifiedTime;
        $this->apiParas["startModifiedTime"]  = $startModifiedTime;
    }

    public function getStartModifiedTime()
    {
        return $this->startModifiedTime;
    }

    /**
     * @param string[] $outId
     * 外部ID
     * Required: false
     * Example Value: 无
     */
    private $outId;

    /**
     * @param string[] $outId
     * 外部ID
     * Example Value: 无
     */
    public function setOutId($outId)
    {
        $this->outId             = $outId;
        $this->apiParas["outId"]  = $outId;
    }

    public function getOutId()
    {
        return $this->outId;
    }

    /**
     * @param int $colType
     * 合作类型
     * Required: false
     * Example Value: 合作类型
     */
    private $colType;

    /**
     * @param int $colType
     * 合作类型
     * Example Value: 合作类型
     */
    public function setColType($colType)
    {
        $this->colType             = $colType;
        $this->apiParas["colType"]  = $colType;
    }

    public function getColType()
    {
        return $this->colType;
    }

    /**
     * @param string $itemNum
     * 货号
     * Required: false
     * Example Value: 货号
     */
    private $itemNum;

    /**
     * @param string $itemNum
     * 货号
     * Example Value: 货号
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
     * @param string $wareTitle
     * 商品名称
     * Required: false
     * Example Value: 商品名称
     */
    private $wareTitle;

    /**
     * @param string $wareTitle
     * 商品名称
     * Example Value: 商品名称
     */
    public function setWareTitle($wareTitle)
    {
        $this->wareTitle             = $wareTitle;
        $this->apiParas["wareTitle"]  = $wareTitle;
    }

    public function getWareTitle()
    {
        return $this->wareTitle;
    }

    /**
     * @param string[] $orderFiled
     * 排序字段.目前支持skuId、stockNum
     * Required: false
     * Example Value: 无
     */
    private $orderFiled;

    /**
     * @param string[] $orderFiled
     * 排序字段.目前支持skuId、stockNum
     * Example Value: 无
     */
    public function setOrderFiled($orderFiled)
    {
        $this->orderFiled             = $orderFiled;
        $this->apiParas["orderFiled"]  = $orderFiled;
    }

    public function getOrderFiled()
    {
        return $this->orderFiled;
    }

    /**
     * @param string[] $orderType
     * 排序类型：asc、desc
     * Required: false
     * Example Value: 无
     */
    private $orderType;

    /**
     * @param string[] $orderType
     * 排序类型：asc、desc
     * Example Value: 无
     */
    public function setOrderType($orderType)
    {
        $this->orderType             = $orderType;
        $this->apiParas["orderType"]  = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * @param int $pageNo
     * 页码 从1开始
     * Required: false
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 页码 从1开始
     * Example Value: 1
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param int $pageSize
     * 每页条数
     * Required: false
     * Example Value: 30
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页条数
     * Example Value: 30
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
     * @param string[] $fields
     * 自定义返回字段
     * Required: false
     * Example Value: 如: categoryId、stockNum、skuName
     */
    private $fields;

    /**
     * @param string[] $fields
     * 自定义返回字段
     * Example Value: 如: categoryId、stockNum、skuName
     */
    public function setFields($fields)
    {
        $this->fields             = $fields;
        $this->apiParas["field"]  = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

}