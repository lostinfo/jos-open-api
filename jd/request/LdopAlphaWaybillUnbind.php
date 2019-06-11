<?php

namespace JD\request;

/**
 *  订运关系解绑接口
 * 无界电子面单-电子面单商家及ISV使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=356&apiId=1527&apiName=jingdong.ldop.alpha.waybill.unbind
 * Class LdopAlphaWaybillUnbind
 * @package Jd\request
 */
class LdopAlphaWaybillUnbind
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.waybill.unbind";
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
     * @param String $platformOrderNo
     * 平台订单号
     * Required: true
     * Example Value: 
     */
    private $platformOrderNo;

    /**
     * @param String $platformOrderNo
     * 平台订单号
     * Example Value: 
     */
    public function setPlatformOrderNo($platformOrderNo)
    {
        $this->platformOrderNo             = $platformOrderNo;
        $this->apiParas["platformOrderNo"]  = $platformOrderNo;
    }

    public function getPlatformOrderNo()
    {
        return $this->platformOrderNo;
    }

    /**
     * @param Number $providerId
     * 承运商ID
     * Required: false
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
     * @param String $operatorName
     * 操作人姓名
     * Required: true
     * Example Value: 
     */
    private $operatorName;

    /**
     * @param String $operatorName
     * 操作人姓名
     * Example Value: 
     */
    public function setOperatorName($operatorName)
    {
        $this->operatorName             = $operatorName;
        $this->apiParas["operatorName"]  = $operatorName;
    }

    public function getOperatorName()
    {
        return $this->operatorName;
    }

    /**
     * @param Date $operatorTime
     * 操作时间
     * Required: true
     * Example Value: 
     */
    private $operatorTime;

    /**
     * @param Date $operatorTime
     * 操作时间
     * Example Value: 
     */
    public function setOperatorTime($operatorTime)
    {
        $this->operatorTime             = $operatorTime;
        $this->apiParas["operatorTime"]  = $operatorTime;
    }

    public function getOperatorTime()
    {
        return $this->operatorTime;
    }

    /**
     * @param String[] $waybillCodes
     * 运单列表
     * Required: true
     * Example Value: 
     */
    private $waybillCodes;

    /**
     * @param String[] $waybillCodes
     * 运单列表
     * Example Value: 
     */
    public function setWaybillCodes($waybillCodes)
    {
        $this->waybillCodes             = $waybillCodes;
        $this->apiParas["waybillCodeList"]  = $waybillCodes;
    }

    public function getWaybillCodes()
    {
        return $this->waybillCodes;
    }

}