<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询采购单列表
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3119&apiName=jingdong.b2b.po.PoMidProvider.queryPurOrders
 * Class B2bPoPoMidProviderQueryPurOrders
 * @package Jd\request
 */
class B2bPoPoMidProviderQueryPurOrders
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.po.PoMidProvider.queryPurOrders";
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
     * @param string $userName
     * 买家用户名
     * Required: false
     * Example Value: 
     */
    private $userName;

    /**
     * @param string $userName
     * 买家用户名
     * Example Value: 
     */
    public function setUserName($userName)
    {
        $this->userName             = $userName;
        $this->apiParas["userName"]  = $userName;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $companyName
     * 买家公司名称
     * Required: false
     * Example Value: 
     */
    private $companyName;

    /**
     * @param string $companyName
     * 买家公司名称
     * Example Value: 
     */
    public function setCompanyName($companyName)
    {
        $this->companyName             = $companyName;
        $this->apiParas["companyName"]  = $companyName;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param int $issueInvoice
     * 开票类型(0.不开票 1.普票 2.增票 3.电子票)
     * Required: false
     * Example Value: 
     */
    private $issueInvoice;

    /**
     * @param int $issueInvoice
     * 开票类型(0.不开票 1.普票 2.增票 3.电子票)
     * Example Value: 
     */
    public function setIssueInvoice($issueInvoice)
    {
        $this->issueInvoice             = $issueInvoice;
        $this->apiParas["issueInvoice"]  = $issueInvoice;
    }

    public function getIssueInvoice()
    {
        return $this->issueInvoice;
    }

    /**
     * @param string $submitPoTimeFrom
     * 下采购单时间范围查询-开始
     * Required: false
     * Example Value: 
     */
    private $submitPoTimeFrom;

    /**
     * @param string $submitPoTimeFrom
     * 下采购单时间范围查询-开始
     * Example Value: 
     */
    public function setSubmitPoTimeFrom($submitPoTimeFrom)
    {
        $this->submitPoTimeFrom             = $submitPoTimeFrom;
        $this->apiParas["submitPoTimeFrom"]  = $submitPoTimeFrom;
    }

    public function getSubmitPoTimeFrom()
    {
        return $this->submitPoTimeFrom;
    }

    /**
     * @param string $submitPoTimeTo
     * 下采购单时间范围查询-结束
     * Required: false
     * Example Value: 
     */
    private $submitPoTimeTo;

    /**
     * @param string $submitPoTimeTo
     * 下采购单时间范围查询-结束
     * Example Value: 
     */
    public function setSubmitPoTimeTo($submitPoTimeTo)
    {
        $this->submitPoTimeTo             = $submitPoTimeTo;
        $this->apiParas["submitPoTimeTo"]  = $submitPoTimeTo;
    }

    public function getSubmitPoTimeTo()
    {
        return $this->submitPoTimeTo;
    }

    /**
     * @param int $pageSize
     * 每页大小
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页大小
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
     * @param int $pageIndex
     * 当前页码
     * Required: false
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 当前页码
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
     * @param int $consProvinceId
     * 收货地址-省ID
     * Required: false
     * Example Value: 
     */
    private $consProvinceId;

    /**
     * @param int $consProvinceId
     * 收货地址-省ID
     * Example Value: 
     */
    public function setConsProvinceId($consProvinceId)
    {
        $this->consProvinceId             = $consProvinceId;
        $this->apiParas["consProvinceId"]  = $consProvinceId;
    }

    public function getConsProvinceId()
    {
        return $this->consProvinceId;
    }

    /**
     * @param int $consCityId
     * 收货地址-市ID
     * Required: false
     * Example Value: 
     */
    private $consCityId;

    /**
     * @param int $consCityId
     * 收货地址-市ID
     * Example Value: 
     */
    public function setConsCityId($consCityId)
    {
        $this->consCityId             = $consCityId;
        $this->apiParas["consCityId"]  = $consCityId;
    }

    public function getConsCityId()
    {
        return $this->consCityId;
    }

    /**
     * @param int $consCountyId
     * 收货地址-县ID
     * Required: false
     * Example Value: 
     */
    private $consCountyId;

    /**
     * @param int $consCountyId
     * 收货地址-县ID
     * Example Value: 
     */
    public function setConsCountyId($consCountyId)
    {
        $this->consCountyId             = $consCountyId;
        $this->apiParas["consCountyId"]  = $consCountyId;
    }

    public function getConsCountyId()
    {
        return $this->consCountyId;
    }

    /**
     * @param int $consTownId
     * 收货地址-镇ID
     * Required: false
     * Example Value: 
     */
    private $consTownId;

    /**
     * @param int $consTownId
     * 收货地址-镇ID
     * Example Value: 
     */
    public function setConsTownId($consTownId)
    {
        $this->consTownId             = $consTownId;
        $this->apiParas["consTownId"]  = $consTownId;
    }

    public function getConsTownId()
    {
        return $this->consTownId;
    }

    /**
     * @param string $consName
     * 收货人名称
     * Required: false
     * Example Value: 
     */
    private $consName;

    /**
     * @param string $consName
     * 收货人名称
     * Example Value: 
     */
    public function setConsName($consName)
    {
        $this->consName             = $consName;
        $this->apiParas["consName"]  = $consName;
    }

    public function getConsName()
    {
        return $this->consName;
    }

    /**
     * @param  $thirdOrderIds
     * 三方订单号
     * Required: false
     * Example Value: 
     */
    private $thirdOrderIds;

    /**
     * @param  $thirdOrderIds
     * 三方订单号
     * Example Value: 
     */
    public function setThirdOrderIds($thirdOrderIds)
    {
        $this->thirdOrderIds             = $thirdOrderIds;
        $this->apiParas["thirdOrderIds"]  = $thirdOrderIds;
    }

    public function getThirdOrderIds()
    {
        return $this->thirdOrderIds;
    }

    /**
     * @param string[] $thirdPoIds
     * 三方采购单号
     * Required: false
     * Example Value: 
     */
    private $thirdPoIds;

    /**
     * @param string[] $thirdPoIds
     * 三方采购单号
     * Example Value: 
     */
    public function setThirdPoIds($thirdPoIds)
    {
        $this->thirdPoIds             = $thirdPoIds;
        $this->apiParas["thirdPoIds"]  = $thirdPoIds;
    }

    public function getThirdPoIds()
    {
        return $this->thirdPoIds;
    }

    /**
     * @param int[] $skuIndustryIds
     * 参数描述
     * Required: false
     * Example Value: 
     */
    private $skuIndustryIds;

    /**
     * @param int[] $skuIndustryIds
     * 参数描述
     * Example Value: 
     */
    public function setSkuIndustryIds($skuIndustryIds)
    {
        $this->skuIndustryIds             = $skuIndustryIds;
        $this->apiParas["skuIndustryIds"]  = $skuIndustryIds;
    }

    public function getSkuIndustryIds()
    {
        return $this->skuIndustryIds;
    }

    /**
     * @param int[] $poValidStates
     * 采购单有效状态
     * Required: false
     * Example Value: 
     */
    private $poValidStates;

    /**
     * @param int[] $poValidStates
     * 采购单有效状态
     * Example Value: 
     */
    public function setPoValidStates($poValidStates)
    {
        $this->poValidStates             = $poValidStates;
        $this->apiParas["poValidStates"]  = $poValidStates;
    }

    public function getPoValidStates()
    {
        return $this->poValidStates;
    }

    /**
     * @param string[] $pins
     * 用户pin
     * Required: false
     * Example Value: 
     */
    private $pins;

    /**
     * @param string[] $pins
     * 用户pin
     * Example Value: 
     */
    public function setPins($pins)
    {
        $this->pins             = $pins;
        $this->apiParas["pins"]  = $pins;
    }

    public function getPins()
    {
        return $this->pins;
    }

    /**
     * @param int[] $sortTypes
     * 排序类型
     * Required: false
     * Example Value: 
     */
    private $sortTypes;

    /**
     * @param int[] $sortTypes
     * 排序类型
     * Example Value: 
     */
    public function setSortTypes($sortTypes)
    {
        $this->sortTypes             = $sortTypes;
        $this->apiParas["sortTypes"]  = $sortTypes;
    }

    public function getSortTypes()
    {
        return $this->sortTypes;
    }

    /**
     * @param int[] $skuIndustryTypes
     * 参数描述
     * Required: false
     * Example Value: 
     */
    private $skuIndustryTypes;

    /**
     * @param int[] $skuIndustryTypes
     * 参数描述
     * Example Value: 
     */
    public function setSkuIndustryTypes($skuIndustryTypes)
    {
        $this->skuIndustryTypes             = $skuIndustryTypes;
        $this->apiParas["skuIndustryTypes"]  = $skuIndustryTypes;
    }

    public function getSkuIndustryTypes()
    {
        return $this->skuIndustryTypes;
    }

    /**
     * @param int[] $popVenderIds
     * pop商家ID
     * Required: false
     * Example Value: 
     */
    private $popVenderIds;

    /**
     * @param int[] $popVenderIds
     * pop商家ID
     * Example Value: 
     */
    public function setPopVenderIds($popVenderIds)
    {
        $this->popVenderIds             = $popVenderIds;
        $this->apiParas["popVenderIds"]  = $popVenderIds;
    }

    public function getPopVenderIds()
    {
        return $this->popVenderIds;
    }

    /**
     * @param int[] $paymentTypes
     * 支付类型
     * Required: false
     * Example Value: 
     */
    private $paymentTypes;

    /**
     * @param int[] $paymentTypes
     * 支付类型
     * Example Value: 
     */
    public function setPaymentTypes($paymentTypes)
    {
        $this->paymentTypes             = $paymentTypes;
        $this->apiParas["paymentTypes"]  = $paymentTypes;
    }

    public function getPaymentTypes()
    {
        return $this->paymentTypes;
    }

    /**
     * @param int[] $poChannels
     * 外部渠道
     * Required: false
     * Example Value: 
     */
    private $poChannels;

    /**
     * @param int[] $poChannels
     * 外部渠道
     * Example Value: 
     */
    public function setPoChannels($poChannels)
    {
        $this->poChannels             = $poChannels;
        $this->apiParas["poChannels"]  = $poChannels;
    }

    public function getPoChannels()
    {
        return $this->poChannels;
    }

    /**
     * @param int[] $poIds
     * 采购单号
     * Required: false
     * Example Value: 
     */
    private $poIds;

    /**
     * @param int[] $poIds
     * 采购单号
     * Example Value: 
     */
    public function setPoIds($poIds)
    {
        $this->poIds             = $poIds;
        $this->apiParas["poIds"]  = $poIds;
    }

    public function getPoIds()
    {
        return $this->poIds;
    }

    /**
     * @param int[] $poTiers
     * 采购单层级
     * Required: false
     * Example Value: 
     */
    private $poTiers;

    /**
     * @param int[] $poTiers
     * 采购单层级
     * Example Value: 
     */
    public function setPoTiers($poTiers)
    {
        $this->poTiers             = $poTiers;
        $this->apiParas["poTiers"]  = $poTiers;
    }

    public function getPoTiers()
    {
        return $this->poTiers;
    }

    /**
     * @param int[] $b2bVenderIds
     * 商家ID集合
     * Required: false
     * Example Value: 
     */
    private $b2bVenderIds;

    /**
     * @param int[] $b2bVenderIds
     * 商家ID集合
     * Example Value: 
     */
    public function setB2bVenderIds($b2bVenderIds)
    {
        $this->b2bVenderIds             = $b2bVenderIds;
        $this->apiParas["b2bVenderIds"]  = $b2bVenderIds;
    }

    public function getB2bVenderIds()
    {
        return $this->b2bVenderIds;
    }

    /**
     * @param int[] $jdOrderIds
     * 京东订单号
     * Required: false
     * Example Value: 
     */
    private $jdOrderIds;

    /**
     * @param int[] $jdOrderIds
     * 京东订单号
     * Example Value: 
     */
    public function setJdOrderIds($jdOrderIds)
    {
        $this->jdOrderIds             = $jdOrderIds;
        $this->apiParas["jdOrderIds"]  = $jdOrderIds;
    }

    public function getJdOrderIds()
    {
        return $this->jdOrderIds;
    }

    /**
     * @param int[] $skuIds
     * 京东订单号
     * Required: false
     * Example Value: 
     */
    private $skuIds;

    /**
     * @param int[] $skuIds
     * 京东订单号
     * Example Value: 
     */
    public function setSkuIds($skuIds)
    {
        $this->skuIds             = $skuIds;
        $this->apiParas["skuIds"]  = $skuIds;
    }

    public function getSkuIds()
    {
        return $this->skuIds;
    }

    /**
     * @param int[] $poStatuses
     * 采购单状态
     * Required: false
     * Example Value: 
     */
    private $poStatuses;

    /**
     * @param int[] $poStatuses
     * 采购单状态
     * Example Value: 
     */
    public function setPoStatuses($poStatuses)
    {
        $this->poStatuses             = $poStatuses;
        $this->apiParas["poStatuses"]  = $poStatuses;
    }

    public function getPoStatuses()
    {
        return $this->poStatuses;
    }

}