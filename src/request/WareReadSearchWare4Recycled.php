<?php

namespca Lostinfo\JosOpenApi;

/**
 * 搜索回收站商品
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1238&apiName=jingdong.ware.read.searchWare4Recycled
 * Class WareReadSearchWare4Recycled
 * @package Jd\request
 */
class WareReadSearchWare4Recycled
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.read.searchWare4Recycled";
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
     * @param int[] $wareIds
     * 商品id列表,最多20个
     * Required: false
     * Example Value: [455654454,4554544]
     */
    private $wareIds;

    /**
     * @param int[] $wareIds
     * 商品id列表,最多20个
     * Example Value: [455654454,4554544]
     */
    public function setWareIds($wareIds)
    {
        $this->wareIds             = $wareIds;
        $this->apiParas["wareId"]  = $wareIds;
    }

    public function getWareIds()
    {
        return $this->wareIds;
    }

    /**
     * @param string $searchKey
     * 商品搜索关键词,需要配合搜索域实searchField现
     * Required: false
     * Example Value: 商品名
     */
    private $searchKey;

    /**
     * @param string $searchKey
     * 商品搜索关键词,需要配合搜索域实searchField现
     * Example Value: 商品名
     */
    public function setSearchKey($searchKey)
    {
        $this->searchKey             = $searchKey;
        $this->apiParas["searchKey"]  = $searchKey;
    }

    public function getSearchKey()
    {
        return $this->searchKey;
    }

    /**
     * @param string[] $searchField
     * 商品搜索域的范围,默认是商品名称.目前值范围[title]
     * Required: false
     * Example Value: [title]
     */
    private $searchField;

    /**
     * @param string[] $searchField
     * 商品搜索域的范围,默认是商品名称.目前值范围[title]
     * Example Value: [title]
     */
    public function setSearchField($searchField)
    {
        $this->searchField             = $searchField;
        $this->apiParas["searchField"]  = $searchField;
    }

    public function getSearchField()
    {
        return $this->searchField;
    }

    /**
     * @param int $categoryId
     * 商品3级类目
     * Required: false
     * Example Value: categoryId
     */
    private $categoryId;

    /**
     * @param int $categoryId
     * 商品3级类目
     * Example Value: categoryId
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
     * @param int $shopCategoryIdLevel1
     * 店内分类的父ID，如果店内分类只设置了一级，shopCategoryIdLevel1需要传0或不传，shopCategoryIdLevel2传一级店内分类
     * Required: false
     * Example Value: shopCategoryIdLevel1
     */
    private $shopCategoryIdLevel1;

    /**
     * @param int $shopCategoryIdLevel1
     * 店内分类的父ID，如果店内分类只设置了一级，shopCategoryIdLevel1需要传0或不传，shopCategoryIdLevel2传一级店内分类
     * Example Value: shopCategoryIdLevel1
     */
    public function setShopCategoryIdLevel1($shopCategoryIdLevel1)
    {
        $this->shopCategoryIdLevel1             = $shopCategoryIdLevel1;
        $this->apiParas["shopCategoryIdLevel1"]  = $shopCategoryIdLevel1;
    }

    public function getShopCategoryIdLevel1()
    {
        return $this->shopCategoryIdLevel1;
    }

    /**
     * @param int $shopCategoryIdLevel2
     * 店内分类子id
     * Required: false
     * Example Value: shopCategoryIdLevel2
     */
    private $shopCategoryIdLevel2;

    /**
     * @param int $shopCategoryIdLevel2
     * 店内分类子id
     * Example Value: shopCategoryIdLevel2
     */
    public function setShopCategoryIdLevel2($shopCategoryIdLevel2)
    {
        $this->shopCategoryIdLevel2             = $shopCategoryIdLevel2;
        $this->apiParas["shopCategoryIdLevel2"]  = $shopCategoryIdLevel2;
    }

    public function getShopCategoryIdLevel2()
    {
        return $this->shopCategoryIdLevel2;
    }

    /**
     * @param int $templateId
     * 关联板式ID 关联版式ID 通过接口 jingdong.template.read.findTemplatesByVenderId 获取
     * Required: false
     * Example Value: templateId
     */
    private $templateId;

    /**
     * @param int $templateId
     * 关联板式ID 关联版式ID 通过接口 jingdong.template.read.findTemplatesByVenderId 获取
     * Example Value: templateId
     */
    public function setTemplateId($templateId)
    {
        $this->templateId             = $templateId;
        $this->apiParas["templateId"]  = $templateId;
    }

    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param int $promiseId
     * 时效模板ID
     * Required: false
     * Example Value: promiseId
     */
    private $promiseId;

    /**
     * @param int $promiseId
     * 时效模板ID
     * Example Value: promiseId
     */
    public function setPromiseId($promiseId)
    {
        $this->promiseId             = $promiseId;
        $this->apiParas["promiseId"]  = $promiseId;
    }

    public function getPromiseId()
    {
        return $this->promiseId;
    }

    /**
     * @param int $brandId
     * 已经授权过的品牌ID(通过商家授权类目接口获取)
     * Required: false
     * Example Value: brandId
     */
    private $brandId;

    /**
     * @param int $brandId
     * 已经授权过的品牌ID(通过商家授权类目接口获取)
     * Example Value: brandId
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brandId"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param string[] $key
     * 商品的特殊属性key
     * Required: false
     * Example Value: [featureKey]
     */
    private $key;

    /**
     * @param string[] $key
     * 商品的特殊属性key
     * Example Value: [featureKey]
     */
    public function setKey($key)
    {
        $this->key             = $key;
        $this->apiParas["featureKey"]  = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string[] $value
     * 商品的特殊属性value
     * Required: false
     * Example Value: [featureValue]
     */
    private $value;

    /**
     * @param string[] $value
     * 商品的特殊属性value
     * Example Value: [featureValue]
     */
    public function setValue($value)
    {
        $this->value             = $value;
        $this->apiParas["featureValue"]  = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int[] $wareStatusValue
     * 商品状态,多个值属于[或]操作 1:从未上架  2:自主下架  4:系统下架 8:上架  513:从未上架待审  514:自主下架待审  516:系统下架待审 520:上架待审核  1028:系统下架审核失败
     * Required: false
     * Example Value: [2,4]
     */
    private $wareStatusValue;

    /**
     * @param int[] $wareStatusValue
     * 商品状态,多个值属于[或]操作 1:从未上架  2:自主下架  4:系统下架 8:上架  513:从未上架待审  514:自主下架待审  516:系统下架待审 520:上架待审核  1028:系统下架审核失败
     * Example Value: [2,4]
     */
    public function setWareStatusValue($wareStatusValue)
    {
        $this->wareStatusValue             = $wareStatusValue;
        $this->apiParas["wareStatusValue"]  = $wareStatusValue;
    }

    public function getWareStatusValue()
    {
        return $this->wareStatusValue;
    }

    /**
     * @param string $itemNum
     * 商品货号
     * Required: false
     * Example Value: itemNum
     */
    private $itemNum;

    /**
     * @param string $itemNum
     * 商品货号
     * Example Value: itemNum
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
     * @param string $barCode
     * 商品的条形码.UPC码,SN码,PLU码统称为条形码
     * Required: false
     * Example Value: barCode
     */
    private $barCode;

    /**
     * @param string $barCode
     * 商品的条形码.UPC码,SN码,PLU码统称为条形码
     * Example Value: barCode
     */
    public function setBarCode($barCode)
    {
        $this->barCode             = $barCode;
        $this->apiParas["barCode"]  = $barCode;
    }

    public function getBarCode()
    {
        return $this->barCode;
    }

    /**
     * @param int $colType
     * 合作类型
     * Required: false
     * Example Value: colType
     */
    private $colType;

    /**
     * @param int $colType
     * 合作类型
     * Example Value: colType
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
     * @param string $startCreatedTime
     * 开始创建时间
     * Required: false
     * Example Value: 
     */
    private $startCreatedTime;

    /**
     * @param string $startCreatedTime
     * 开始创建时间
     * Example Value: 
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
     * @param string $endCreatedTime
     * 结束创建时间
     * Required: false
     * Example Value: 
     */
    private $endCreatedTime;

    /**
     * @param string $endCreatedTime
     * 结束创建时间
     * Example Value: 
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
     * @param int $startJdPrice
     * 开始京东价
     * Required: false
     * Example Value: 
     */
    private $startJdPrice;

    /**
     * @param int $startJdPrice
     * 开始京东价
     * Example Value: 
     */
    public function setStartJdPrice($startJdPrice)
    {
        $this->startJdPrice             = $startJdPrice;
        $this->apiParas["startJdPrice"]  = $startJdPrice;
    }

    public function getStartJdPrice()
    {
        return $this->startJdPrice;
    }

    /**
     * @param int $endJdPrice
     * 结束京东价
     * Required: false
     * Example Value: 
     */
    private $endJdPrice;

    /**
     * @param int $endJdPrice
     * 结束京东价
     * Example Value: 
     */
    public function setEndJdPrice($endJdPrice)
    {
        $this->endJdPrice             = $endJdPrice;
        $this->apiParas["endJdPrice"]  = $endJdPrice;
    }

    public function getEndJdPrice()
    {
        return $this->endJdPrice;
    }

    /**
     * @param string $startOnlineTime
     * 开始上架时间
     * Required: false
     * Example Value: 
     */
    private $startOnlineTime;

    /**
     * @param string $startOnlineTime
     * 开始上架时间
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
     * 结束上架时间
     * Required: false
     * Example Value: 
     */
    private $endOnlineTime;

    /**
     * @param string $endOnlineTime
     * 结束上架时间
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
     * @param string $startModifiedTime
     * 开始修改时间
     * Required: false
     * Example Value: 
     */
    private $startModifiedTime;

    /**
     * @param string $startModifiedTime
     * 开始修改时间
     * Example Value: 
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
     * @param string $endModifiedTime
     * 结束修改时间
     * Required: false
     * Example Value: 
     */
    private $endModifiedTime;

    /**
     * @param string $endModifiedTime
     * 结束修改时间
     * Example Value: 
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
     * @param string $startOfflineTime
     * 开始下架时间
     * Required: false
     * Example Value: 
     */
    private $startOfflineTime;

    /**
     * @param string $startOfflineTime
     * 开始下架时间
     * Example Value: 
     */
    public function setStartOfflineTime($startOfflineTime)
    {
        $this->startOfflineTime             = $startOfflineTime;
        $this->apiParas["startOfflineTime"]  = $startOfflineTime;
    }

    public function getStartOfflineTime()
    {
        return $this->startOfflineTime;
    }

    /**
     * @param string $endOfflineTime
     * 结束下架时间
     * Required: false
     * Example Value: 
     */
    private $endOfflineTime;

    /**
     * @param string $endOfflineTime
     * 结束下架时间
     * Example Value: 
     */
    public function setEndOfflineTime($endOfflineTime)
    {
        $this->endOfflineTime             = $endOfflineTime;
        $this->apiParas["endOfflineTime"]  = $endOfflineTime;
    }

    public function getEndOfflineTime()
    {
        return $this->endOfflineTime;
    }

    /**
     * @param int $startStockNum
     * 开始商品库存
     * Required: false
     * Example Value: 10
     */
    private $startStockNum;

    /**
     * @param int $startStockNum
     * 开始商品库存
     * Example Value: 10
     */
    public function setStartStockNum($startStockNum)
    {
        $this->startStockNum             = $startStockNum;
        $this->apiParas["startStockNum"]  = $startStockNum;
    }

    public function getStartStockNum()
    {
        return $this->startStockNum;
    }

    /**
     * @param int $endStockNum
     * 结束商品库存
     * Required: false
     * Example Value: 30
     */
    private $endStockNum;

    /**
     * @param int $endStockNum
     * 结束商品库存
     * Example Value: 30
     */
    public function setEndStockNum($endStockNum)
    {
        $this->endStockNum             = $endStockNum;
        $this->apiParas["endStockNum"]  = $endStockNum;
    }

    public function getEndStockNum()
    {
        return $this->endStockNum;
    }

    /**
     * @param string[] $orderFiled
     * 排序字段.值范围[wareId offlineTime onlineTime stockNum jdPrice modified]
     * Required: false
     * Example Value: [wareId offlineTime onlineTime stockNum jdPrice modified]
     */
    private $orderFiled;

    /**
     * @param string[] $orderFiled
     * 排序字段.值范围[wareId offlineTime onlineTime stockNum jdPrice modified]
     * Example Value: [wareId offlineTime onlineTime stockNum jdPrice modified]
     */
    public function setOrderFiled($orderFiled)
    {
        $this->orderFiled             = $orderFiled;
        $this->apiParas["orderField"]  = $orderFiled;
    }

    public function getOrderFiled()
    {
        return $this->orderFiled;
    }

    /**
     * @param string[] $orderType
     * 排序方式.值范围[asc desc]
     * Required: false
     * Example Value: [desc]
     */
    private $orderType;

    /**
     * @param string[] $orderType
     * 排序方式.值范围[asc desc]
     * Example Value: [desc]
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
     * 页码
     * Required: false
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 页码
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
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param int $transportId
     * 运费模板ID
     * Required: false
     * Example Value: transportId
     */
    private $transportId;

    /**
     * @param int $transportId
     * 运费模板ID
     * Example Value: transportId
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
     * @param int $claim
     * 是否认领
     * Required: false
     * Example Value: 1
     */
    private $claim;

    /**
     * @param int $claim
     * 是否认领
     * Example Value: 1
     */
    public function setClaim($claim)
    {
        $this->claim             = $claim;
        $this->apiParas["claim"]  = $claim;
    }

    public function getClaim()
    {
        return $this->claim;
    }

    /**
     * @param int $groupId
     * 分组ID(供销)
     * Required: false
     * Example Value: 123
     */
    private $groupId;

    /**
     * @param int $groupId
     * 分组ID(供销)
     * Example Value: 123
     */
    public function setGroupId($groupId)
    {
        $this->groupId             = $groupId;
        $this->apiParas["groupId"]  = $groupId;
    }

    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param int $multiCategoryId
     * 末级类目ID
     * Required: false
     * Example Value: multiCategoryId
     */
    private $multiCategoryId;

    /**
     * @param int $multiCategoryId
     * 末级类目ID
     * Example Value: multiCategoryId
     */
    public function setMultiCategoryId($multiCategoryId)
    {
        $this->multiCategoryId             = $multiCategoryId;
        $this->apiParas["multiCategoryId"]  = $multiCategoryId;
    }

    public function getMultiCategoryId()
    {
        return $this->multiCategoryId;
    }

    /**
     * @param string $warePropKey
     * 商品的类目属性搜索key
     * Required: false
     * Example Value: isTest
     */
    private $warePropKey;

    /**
     * @param string $warePropKey
     * 商品的类目属性搜索key
     * Example Value: isTest
     */
    public function setWarePropKey($warePropKey)
    {
        $this->warePropKey             = $warePropKey;
        $this->apiParas["warePropKey"]  = $warePropKey;
    }

    public function getWarePropKey()
    {
        return $this->warePropKey;
    }

    /**
     * @param string $warePropValue
     * 商品的类目属性搜索value
     * Required: false
     * Example Value: [1]
     */
    private $warePropValue;

    /**
     * @param string $warePropValue
     * 商品的类目属性搜索value
     * Example Value: [1]
     */
    public function setWarePropValue($warePropValue)
    {
        $this->warePropValue             = $warePropValue;
        $this->apiParas["warePropValue"]  = $warePropValue;
    }

    public function getWarePropValue()
    {
        return $this->warePropValue;
    }

    /**
     * @param string[] $fields
     * 可选的返回的字段如 ：[wareId offlineTime onlineTime stockNum jdPrice modified]
     * Required: false
     * Example Value: [wareId offlineTime onlineTime stockNum jdPrice modified]
     */
    private $fields;

    /**
     * @param string[] $fields
     * 可选的返回的字段如 ：[wareId offlineTime onlineTime stockNum jdPrice modified]
     * Example Value: [wareId offlineTime onlineTime stockNum jdPrice modified]
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