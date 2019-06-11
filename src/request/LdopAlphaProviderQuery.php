<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取承运商列表
 * 无界电子面单-电子面单商家及ISV使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=356&apiId=1531&apiName=jingdong.ldop.alpha.provider.query
 * Class LdopAlphaProviderQuery
 * @package Jd\request
 */
class LdopAlphaProviderQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.query";
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
     * @param int $providerState
     * 承运商状态
     * Required: true
     * Example Value: 
     */
    private $providerState;

    /**
     * @param int $providerState
     * 承运商状态
     * Example Value: 
     */
    public function setProviderState($providerState)
    {
        $this->providerState             = $providerState;
        $this->apiParas["providerState"]  = $providerState;
    }

    public function getProviderState()
    {
        return $this->providerState;
    }

}