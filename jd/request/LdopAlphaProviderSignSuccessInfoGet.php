<?php

namespace JD\request;

/**
 * 根据商家编码查询商家所有审核成功的签约信息
 * 无界电子面单-电子面单商家及ISV使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=356&apiId=2121&apiName=jingdong.ldop.alpha.provider.sign.success.info.get
 * Class LdopAlphaProviderSignSuccessInfoGet
 * @package Jd\request
 */
class LdopAlphaProviderSignSuccessInfoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.sign.success.info.get";
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
     * @param String $venderCode
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $venderCode;

    /**
     * @param String $venderCode
     * 商家编码
     * Example Value: 
     */
    public function setVenderCode($venderCode)
    {
        $this->venderCode             = $venderCode;
        $this->apiParas["venderCode"]  = $venderCode;
    }

    public function getVenderCode()
    {
        return $this->venderCode;
    }

}