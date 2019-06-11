<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 运单解绑接口
 * 无界电子面单-电子面单商家及ISV使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=356&apiId=2190&apiName=jingdong.ldop.alpha.waybill.api.unbind
 * Class LdopAlphaWaybillApiUnbind
 * @package Jd\request
 */
class LdopAlphaWaybillApiUnbind
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.waybill.api.unbind";
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
     * @param int $providerId
     * 承运商ID
     * Required: false
     * Example Value: 
     */
    private $providerId;

    /**
     * @param int $providerId
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
     * @param string $providerCode
     * 承运商编码
     * Required: false
     * Example Value: 
     */
    private $providerCode;

    /**
     * @param string $providerCode
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
     * @param string $waybillCode
     * 运单号
     * Required: true
     * Example Value: 
     */
    private $waybillCode;

    /**
     * @param string $waybillCode
     * 运单号
     * Example Value: 
     */
    public function setWaybillCode($waybillCode)
    {
        $this->waybillCode             = $waybillCode;
        $this->apiParas["waybillCode"]  = $waybillCode;
    }

    public function getWaybillCode()
    {
        return $this->waybillCode;
    }

}