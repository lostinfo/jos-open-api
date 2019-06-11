<?php

namespace JD\request;

/**
 * ISV查询商家库存接口
 * 无界电子面单-电子面单商家及ISV使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=356&apiId=1928&apiName=jingdong.ldop.alpha.vendor.stock.queryByProviderCode
 * Class LdopAlphaVendorStockQueryByProviderCode
 * @package Jd\request
 */
class LdopAlphaVendorStockQueryByProviderCode
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.vendor.stock.queryByProviderCode";
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
     * @param String $providerCode
     * 承运商编码
     * Required: true
     * Example Value: 
     */
    private $providerCode;

    /**
     * @param String $providerCode
     * 承运商编码
     * Example Value: 
     */
    public function setProviderCode($providerCode)
    {
        $this->providerCode             = $providerCode;
        $this->apiParas["providerCode"]  = $providerCode;
    }

    public function getProviderCode()
    {
        return $this->providerCode;
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