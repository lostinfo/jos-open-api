<?php

namespace JD\request;

/**
 * 商家库存查询接口
 * 无界电子面单-电子面单商家及ISV使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=356&apiId=1529&apiName=jingdong.ldop.alpha.vendor.stock.query
 * Class LdopAlphaVendorStockQuery
 * @package Jd\request
 */
class LdopAlphaVendorStockQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.vendor.stock.query";
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
     * @param String $vendorCode
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param String $vendorCode
     * 商家编码
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
     * @param Number $providerId
     * 承运商ID
     * Required: true
     * Example Value: 
     */
    private $providerId;

    /**
     * @param Number $providerId
     * 承运商ID
     * Example Value: 
     */
    public function setProviderId($providerId)
    {
        $this->providerId             = $providerId;
        $this->apiParas["providerId"]  = $providerId;
    }

    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * @param String $branchCode
     * 网点编码
     * Required: false
     * Example Value: 
     */
    private $branchCode;

    /**
     * @param String $branchCode
     * 网点编码
     * Example Value: 
     */
    public function setBranchCode($branchCode)
    {
        $this->branchCode             = $branchCode;
        $this->apiParas["branchCode"]  = $branchCode;
    }

    public function getBranchCode()
    {
        return $this->branchCode;
    }

}