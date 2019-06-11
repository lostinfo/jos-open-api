<?php

namespca Lostinfo\JosOpenApi;

/**
 * 发送供应计划数据
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2955&apiName=jingdong.edi.sdv.supplyplan.send
 * Class EdiSdvSupplyplanSend
 * @package Jd\request
 */
class EdiSdvSupplyplanSend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.sdv.supplyplan.send";
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
     * @param string $vendorCode
     * 供应商编码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
     * 供应商编码
     * Example Value: 
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
     * Example Value: 
     */
    private $vendorName;

    /**
     * @param string $vendorName
     * 供应商名称
     * Example Value: 
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
     * @param string $jdSku
     * 京东SKU
     * Required: true
     * Example Value: 
     */
    private $jdSku;

    /**
     * @param string $jdSku
     * 京东SKU
     * Example Value: 
     */
    public function setJdSku($jdSku)
    {
        $this->jdSku             = $jdSku;
        $this->apiParas["jdSku"]  = $jdSku;
    }

    public function getJdSku()
    {
        return $this->jdSku;
    }

    /**
     * @param string $productName
     * 商品名称
     * Required: false
     * Example Value: 
     */
    private $productName;

    /**
     * @param string $productName
     * 商品名称
     * Example Value: 
     */
    public function setProductName($productName)
    {
        $this->productName             = $productName;
        $this->apiParas["productName"]  = $productName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string $vendorProductId
     * 供应商商品编码
     * Required: false
     * Example Value: 
     */
    private $vendorProductId;

    /**
     * @param string $vendorProductId
     * 供应商商品编码
     * Example Value: 
     */
    public function setVendorProductId($vendorProductId)
    {
        $this->vendorProductId             = $vendorProductId;
        $this->apiParas["vendorProductId"]  = $vendorProductId;
    }

    public function getVendorProductId()
    {
        return $this->vendorProductId;
    }

    /**
     * @param string $brandCode
     * 品牌编码
     * Required: false
     * Example Value: 
     */
    private $brandCode;

    /**
     * @param string $brandCode
     * 品牌编码
     * Example Value: 
     */
    public function setBrandCode($brandCode)
    {
        $this->brandCode             = $brandCode;
        $this->apiParas["brandCode"]  = $brandCode;
    }

    public function getBrandCode()
    {
        return $this->brandCode;
    }

    /**
     * @param string $brandName
     * 品牌名称
     * Required: false
     * Example Value: 
     */
    private $brandName;

    /**
     * @param string $brandName
     * 品牌名称
     * Example Value: 
     */
    public function setBrandName($brandName)
    {
        $this->brandName             = $brandName;
        $this->apiParas["brandName"]  = $brandName;
    }

    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * @param string $categoryCode
     * 分类编码
     * Required: false
     * Example Value: 
     */
    private $categoryCode;

    /**
     * @param string $categoryCode
     * 分类编码
     * Example Value: 
     */
    public function setCategoryCode($categoryCode)
    {
        $this->categoryCode             = $categoryCode;
        $this->apiParas["categoryCode"]  = $categoryCode;
    }

    public function getCategoryCode()
    {
        return $this->categoryCode;
    }

    /**
     * @param string $categoryName
     * 分类名称
     * Required: false
     * Example Value: 
     */
    private $categoryName;

    /**
     * @param string $categoryName
     * 分类名称
     * Example Value: 
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName             = $categoryName;
        $this->apiParas["categoryName"]  = $categoryName;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param string $orgCode
     * 配送中心编码
     * Required: true
     * Example Value: 
     */
    private $orgCode;

    /**
     * @param string $orgCode
     * 配送中心编码
     * Example Value: 
     */
    public function setOrgCode($orgCode)
    {
        $this->orgCode             = $orgCode;
        $this->apiParas["orgCode"]  = $orgCode;
    }

    public function getOrgCode()
    {
        return $this->orgCode;
    }

    /**
     * @param string $orgName
     * 配送中心名称
     * Required: false
     * Example Value: 
     */
    private $orgName;

    /**
     * @param string $orgName
     * 配送中心名称
     * Example Value: 
     */
    public function setOrgName($orgName)
    {
        $this->orgName             = $orgName;
        $this->apiParas["orgName"]  = $orgName;
    }

    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * @param string $year
     * 年份
     * Required: false
     * Example Value: 
     */
    private $year;

    /**
     * @param string $year
     * 年份
     * Example Value: 
     */
    public function setYear($year)
    {
        $this->year             = $year;
        $this->apiParas["year"]  = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $weekNum
     * 周号
     * Required: true
     * Example Value: 
     */
    private $weekNum;

    /**
     * @param int $weekNum
     * 周号
     * Example Value: 
     */
    public function setWeekNum($weekNum)
    {
        $this->weekNum             = $weekNum;
        $this->apiParas["weekNum"]  = $weekNum;
    }

    public function getWeekNum()
    {
        return $this->weekNum;
    }

    /**
     * @param string $startTime
     * 周开始时间
     * Required: false
     * Example Value: 
     */
    private $startTime;

    /**
     * @param string $startTime
     * 周开始时间
     * Example Value: 
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string $endTime
     * 周结束时间
     * Required: false
     * Example Value: 
     */
    private $endTime;

    /**
     * @param string $endTime
     * 周结束时间
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param int $replenishmentQuantity
     * 补货数量
     * Required: false
     * Example Value: 
     */
    private $replenishmentQuantity;

    /**
     * @param int $replenishmentQuantity
     * 补货数量
     * Example Value: 
     */
    public function setReplenishmentQuantity($replenishmentQuantity)
    {
        $this->replenishmentQuantity             = $replenishmentQuantity;
        $this->apiParas["replenishmentQuantity"]  = $replenishmentQuantity;
    }

    public function getReplenishmentQuantity()
    {
        return $this->replenishmentQuantity;
    }

    /**
     * @param int $replenishmentAckQuantity
     * 供应数量
     * Required: true
     * Example Value: 
     */
    private $replenishmentAckQuantity;

    /**
     * @param int $replenishmentAckQuantity
     * 供应数量
     * Example Value: 
     */
    public function setReplenishmentAckQuantity($replenishmentAckQuantity)
    {
        $this->replenishmentAckQuantity             = $replenishmentAckQuantity;
        $this->apiParas["replenishmentAckQuantity"]  = $replenishmentAckQuantity;
    }

    public function getReplenishmentAckQuantity()
    {
        return $this->replenishmentAckQuantity;
    }

    /**
     * @param string $inputDate
     * 创建时间
     * Required: false
     * Example Value: 
     */
    private $inputDate;

    /**
     * @param string $inputDate
     * 创建时间
     * Example Value: 
     */
    public function setInputDate($inputDate)
    {
        $this->inputDate             = $inputDate;
        $this->apiParas["inputDate"]  = $inputDate;
    }

    public function getInputDate()
    {
        return $this->inputDate;
    }

    /**
     * @param string $version
     * 版本号
     * Required: true
     * Example Value: 
     */
    private $version;

    /**
     * @param string $version
     * 版本号
     * Example Value: 
     */
    public function setVersion($version)
    {
        $this->version             = $version;
        $this->apiParas["version"]  = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

}