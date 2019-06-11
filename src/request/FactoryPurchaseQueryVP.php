<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询供应商映射信息
 * 生鲜加工中心API-生鲜接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=257&apiId=3407&apiName=jingdong.factory.purchase.queryVP
 * Class FactoryPurchaseQueryVP
 * @package Jd\request
 */
class FactoryPurchaseQueryVP
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.factory.purchase.queryVP";
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
     * @param int $factoryId
     * 工厂id
     * Required: true
     * Example Value: 0
     */
    private $factoryId;

    /**
     * @param int $factoryId
     * 工厂id
     * Example Value: 0
     */
    public function setFactoryId($factoryId)
    {
        $this->factoryId             = $factoryId;
        $this->apiParas["factoryId"]  = $factoryId;
    }

    public function getFactoryId()
    {
        return $this->factoryId;
    }

    /**
     * @param string $personalKey
     * 个人Key
     * Required: true
     * Example Value: 0
     */
    private $personalKey;

    /**
     * @param string $personalKey
     * 个人Key
     * Example Value: 0
     */
    public function setPersonalKey($personalKey)
    {
        $this->personalKey             = $personalKey;
        $this->apiParas["personalKey"]  = $personalKey;
    }

    public function getPersonalKey()
    {
        return $this->personalKey;
    }

    /**
     * @param int $ptId
     * ptId
     * Required: true
     * Example Value: 0
     */
    private $ptId;

    /**
     * @param int $ptId
     * ptId
     * Example Value: 0
     */
    public function setPtId($ptId)
    {
        $this->ptId             = $ptId;
        $this->apiParas["ptId"]  = $ptId;
    }

    public function getPtId()
    {
        return $this->ptId;
    }

    /**
     * @param string $vendorCode
     * 供应商编码
     * Required: false
     * Example Value: 0
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
     * 供应商编码
     * Example Value: 0
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode             = $vendorCode;
        $this->apiParas["vendorCode"]  = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * @param string $vendorName
     * 供应商名称
     * Required: false
     * Example Value: 0
     */
    private $vendorName;

    /**
     * @param string $vendorName
     * 供应商名称
     * Example Value: 0
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName             = $vendorName;
        $this->apiParas["vendorName"]  = $vendorName;
    }

    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * @param string $vendorNameAbbr
     * 供应商名称缩写
     * Required: false
     * Example Value: 0
     */
    private $vendorNameAbbr;

    /**
     * @param string $vendorNameAbbr
     * 供应商名称缩写
     * Example Value: 0
     */
    public function setVendorNameAbbr($vendorNameAbbr)
    {
        $this->vendorNameAbbr             = $vendorNameAbbr;
        $this->apiParas["vendorNameAbbr"]  = $vendorNameAbbr;
    }

    public function getVendorNameAbbr()
    {
        return $this->vendorNameAbbr;
    }

    /**
     * @param string $code
     * 供应商产品编码
     * Required: false
     * Example Value: 0
     */
    private $code;

    /**
     * @param string $code
     * 供应商产品编码
     * Example Value: 0
     */
    public function setCode($code)
    {
        $this->code             = $code;
        $this->apiParas["code"]  = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $name
     * 供应商产品名称
     * Required: false
     * Example Value: 0
     */
    private $name;

    /**
     * @param string $name
     * 供应商产品名称
     * Example Value: 0
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $categoryId
     * 类目
     * Required: false
     * Example Value: 0
     */
    private $categoryId;

    /**
     * @param int $categoryId
     * 类目
     * Example Value: 0
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
     * @param int $parentCategoryId
     * 上级类目
     * Required: false
     * Example Value: 0
     */
    private $parentCategoryId;

    /**
     * @param int $parentCategoryId
     * 上级类目
     * Example Value: 0
     */
    public function setParentCategoryId($parentCategoryId)
    {
        $this->parentCategoryId             = $parentCategoryId;
        $this->apiParas["parentCategoryId"]  = $parentCategoryId;
    }

    public function getParentCategoryId()
    {
        return $this->parentCategoryId;
    }

    /**
     * @param int $rootCategoryId
     * 顶级类目
     * Required: false
     * Example Value: 0
     */
    private $rootCategoryId;

    /**
     * @param int $rootCategoryId
     * 顶级类目
     * Example Value: 0
     */
    public function setRootCategoryId($rootCategoryId)
    {
        $this->rootCategoryId             = $rootCategoryId;
        $this->apiParas["rootCategoryId"]  = $rootCategoryId;
    }

    public function getRootCategoryId()
    {
        return $this->rootCategoryId;
    }

    /**
     * @param string $skuId
     * 产品编号
     * Required: false
     * Example Value: 0
     */
    private $skuId;

    /**
     * @param string $skuId
     * 产品编号
     * Example Value: 0
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
     * @param string $skuName
     * 产品名
     * Required: false
     * Example Value: 0
     */
    private $skuName;

    /**
     * @param string $skuName
     * 产品名
     * Example Value: 0
     */
    public function setSkuName($skuName)
    {
        $this->skuName             = $skuName;
        $this->apiParas["skuName"]  = $skuName;
    }

    public function getSkuName()
    {
        return $this->skuName;
    }

    /**
     * @param string $purchaseMan
     * 采销人员
     * Required: false
     * Example Value: 0
     */
    private $purchaseMan;

    /**
     * @param string $purchaseMan
     * 采销人员
     * Example Value: 0
     */
    public function setPurchaseMan($purchaseMan)
    {
        $this->purchaseMan             = $purchaseMan;
        $this->apiParas["purchaseMan"]  = $purchaseMan;
    }

    public function getPurchaseMan()
    {
        return $this->purchaseMan;
    }

    /**
     * @param int $skuType
     * 产品类型
     * Required: false
     * Example Value: 0
     */
    private $skuType;

    /**
     * @param int $skuType
     * 产品类型
     * Example Value: 0
     */
    public function setSkuType($skuType)
    {
        $this->skuType             = $skuType;
        $this->apiParas["skuType"]  = $skuType;
    }

    public function getSkuType()
    {
        return $this->skuType;
    }

    /**
     * @param bool $available
     * 是否有效
     * Required: false
     * Example Value: 0
     */
    private $available;

    /**
     * @param bool $available
     * 是否有效
     * Example Value: 0
     */
    public function setAvailable($available)
    {
        $this->available             = $available;
        $this->apiParas["available"]  = $available;
    }

    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param string $createdStart
     * 创建起始时间
     * Required: false
     * Example Value: 
     */
    private $createdStart;

    /**
     * @param string $createdStart
     * 创建起始时间
     * Example Value: 
     */
    public function setCreatedStart($createdStart)
    {
        $this->createdStart             = $createdStart;
        $this->apiParas["createdStart"]  = $createdStart;
    }

    public function getCreatedStart()
    {
        return $this->createdStart;
    }

    /**
     * @param string $createdEnd
     * 创建结束时间
     * Required: false
     * Example Value: 
     */
    private $createdEnd;

    /**
     * @param string $createdEnd
     * 创建结束时间
     * Example Value: 
     */
    public function setCreatedEnd($createdEnd)
    {
        $this->createdEnd             = $createdEnd;
        $this->apiParas["createdEnd"]  = $createdEnd;
    }

    public function getCreatedEnd()
    {
        return $this->createdEnd;
    }

    /**
     * @param string $stockInVendor
     * 入库供应商
     * Required: false
     * Example Value: 0
     */
    private $stockInVendor;

    /**
     * @param string $stockInVendor
     * 入库供应商
     * Example Value: 0
     */
    public function setStockInVendor($stockInVendor)
    {
        $this->stockInVendor             = $stockInVendor;
        $this->apiParas["stockInVendor"]  = $stockInVendor;
    }

    public function getStockInVendor()
    {
        return $this->stockInVendor;
    }

    /**
     * @param string $modifiedStart
     * 修改起始时间啊
     * Required: false
     * Example Value: 
     */
    private $modifiedStart;

    /**
     * @param string $modifiedStart
     * 修改起始时间啊
     * Example Value: 
     */
    public function setModifiedStart($modifiedStart)
    {
        $this->modifiedStart             = $modifiedStart;
        $this->apiParas["modifiedStart"]  = $modifiedStart;
    }

    public function getModifiedStart()
    {
        return $this->modifiedStart;
    }

    /**
     * @param string $modifiedEnd
     * 修改结束时间
     * Required: false
     * Example Value: 
     */
    private $modifiedEnd;

    /**
     * @param string $modifiedEnd
     * 修改结束时间
     * Example Value: 
     */
    public function setModifiedEnd($modifiedEnd)
    {
        $this->modifiedEnd             = $modifiedEnd;
        $this->apiParas["modifiedEnd"]  = $modifiedEnd;
    }

    public function getModifiedEnd()
    {
        return $this->modifiedEnd;
    }

    /**
     * @param int $pageIndex
     * 页码
     * Required: true
     * Example Value: 0
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页码
     * Example Value: 0
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
     * 一页多少个
     * Required: true
     * Example Value: 0
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 一页多少个
     * Example Value: 0
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