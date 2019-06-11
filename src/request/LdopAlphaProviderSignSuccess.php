<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据商家编码查询商家所有审核成功的签约信息
 * 无界电子面单-电子面单商家及ISV使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=356&apiId=2063&apiName=jingdong.ldop.alpha.provider.sign.success
 * Class LdopAlphaProviderSignSuccess
 * @package Jd\request
 */
class LdopAlphaProviderSignSuccess
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.sign.success";
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
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
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

}