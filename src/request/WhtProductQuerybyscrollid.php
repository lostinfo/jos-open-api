<?php

namespace JD\request;

/**
 * 根据scrollId查询万花筒商品
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=3243&apiName=jingdong.wht.product.querybyscrollid
 * Class WhtProductQuerybyscrollid
 * @package Jd\request
 */
class WhtProductQuerybyscrollid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.wht.product.querybyscrollid";
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
     * @param Number $deviceType
     * 设备类型ID,电子价签设备ID为10000000
     * Required: true
     * Example Value: 10000000
     */
    private $deviceType;

    /**
     * @param Number $deviceType
     * 设备类型ID,电子价签设备ID为10000000
     * Example Value: 10000000
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType             = $deviceType;
        $this->apiParas["deviceType"]  = $deviceType;
    }

    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * @param Number $systemId
     * 系统ID,万家系统ID为79,超级旗舰店系统ID为81
     * Required: false
     * Example Value: 79
     */
    private $systemId;

    /**
     * @param Number $systemId
     * 系统ID,万家系统ID为79,超级旗舰店系统ID为81
     * Example Value: 79
     */
    public function setSystemId($systemId)
    {
        $this->systemId             = $systemId;
        $this->apiParas["systemId"]  = $systemId;
    }

    public function getSystemId()
    {
        return $this->systemId;
    }

    /**
     * @param Number $pageSize
     * 每页数量,最多100个
     * Required: false
     * Example Value: 100
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页数量,最多100个
     * Example Value: 100
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
     * @param String $deviceSn
     * 设备编码,电子价签设备编码为elabel-10000000
     * Required: true
     * Example Value: elabel-10000000
     */
    private $deviceSn;

    /**
     * @param String $deviceSn
     * 设备编码,电子价签设备编码为elabel-10000000
     * Example Value: elabel-10000000
     */
    public function setDeviceSn($deviceSn)
    {
        $this->deviceSn             = $deviceSn;
        $this->apiParas["deviceSn"]  = $deviceSn;
    }

    public function getDeviceSn()
    {
        return $this->deviceSn;
    }

    /**
     * @param String $scrollId
     * 查询游标,查询第一页时不需要填写,查询第二页时需要第一页返回的scrollId
     * Required: false
     * Example Value: DnF1ZXJ5VGhlbkZldGNoBAAAAAAAAATkFlZnR2VfdjgtUUJ5NmRVNF81UGZKancAAAAAAAAE4xZCbWpIYUFVMVFmR21QNnpiYm8yQ3F3AAAAAAAABOQWQm1qSGFBVTFRZkdtUDZ6YmJvMkNxdwAAAAAAAATkFkV2aVlLVEpqVGMydVFnOURXdVZxZkE=
     */
    private $scrollId;

    /**
     * @param String $scrollId
     * 查询游标,查询第一页时不需要填写,查询第二页时需要第一页返回的scrollId
     * Example Value: DnF1ZXJ5VGhlbkZldGNoBAAAAAAAAATkFlZnR2VfdjgtUUJ5NmRVNF81UGZKancAAAAAAAAE4xZCbWpIYUFVMVFmR21QNnpiYm8yQ3F3AAAAAAAABOQWQm1qSGFBVTFRZkdtUDZ6YmJvMkNxdwAAAAAAAATkFkV2aVlLVEpqVGMydVFnOURXdVZxZkE=
     */
    public function setScrollId($scrollId)
    {
        $this->scrollId             = $scrollId;
        $this->apiParas["scrollId"]  = $scrollId;
    }

    public function getScrollId()
    {
        return $this->scrollId;
    }

    /**
     * @param String $skuName
     * 商品名称(关键词匹配)
     * Required: false
     * Example Value: MR9Q2CH
     */
    private $skuName;

    /**
     * @param String $skuName
     * 商品名称(关键词匹配)
     * Example Value: MR9Q2CH
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
     * @param Number $cat2
     * 二级分类ID
     * Required: false
     * Example Value: 671
     */
    private $cat2;

    /**
     * @param Number $cat2
     * 二级分类ID
     * Example Value: 671
     */
    public function setCat2($cat2)
    {
        $this->cat2             = $cat2;
        $this->apiParas["cat2"]  = $cat2;
    }

    public function getCat2()
    {
        return $this->cat2;
    }

    /**
     * @param Number $cat3
     * 三级分类ID
     * Required: false
     * Example Value: 672
     */
    private $cat3;

    /**
     * @param Number $cat3
     * 三级分类ID
     * Example Value: 672
     */
    public function setCat3($cat3)
    {
        $this->cat3             = $cat3;
        $this->apiParas["cat3"]  = $cat3;
    }

    public function getCat3()
    {
        return $this->cat3;
    }

    /**
     * @param Number $cat1
     * 一级分类ID
     * Required: false
     * Example Value: 670
     */
    private $cat1;

    /**
     * @param Number $cat1
     * 一级分类ID
     * Example Value: 670
     */
    public function setCat1($cat1)
    {
        $this->cat1             = $cat1;
        $this->apiParas["cat1"]  = $cat1;
    }

    public function getCat1()
    {
        return $this->cat1;
    }

    /**
     * @param Number $brandId
     * 品牌ID
     * Required: false
     * Example Value: 14026
     */
    private $brandId;

    /**
     * @param Number $brandId
     * 品牌ID
     * Example Value: 14026
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
     * @param String $shopId
     * 门店编号
     * Required: true
     * Example Value: mdtaibei000010
     */
    private $shopId;

    /**
     * @param String $shopId
     * 门店编号
     * Example Value: mdtaibei000010
     */
    public function setShopId($shopId)
    {
        $this->shopId             = $shopId;
        $this->apiParas["shopId"]  = $shopId;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param Number $page
     * 本接口此参数作废
     * Required: false
     * Example Value: 本接口此参数作废
     */
    private $page;

    /**
     * @param Number $page
     * 本接口此参数作废
     * Example Value: 本接口此参数作废
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
     * @param Number $skuId
     * 商品编号
     * Required: false
     * Example Value: 7629588
     */
    private $skuId;

    /**
     * @param Number $skuId
     * 商品编号
     * Example Value: 7629588
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

}