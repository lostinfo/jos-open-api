<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取厂家服务单妥投时间信息
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1926&apiName=jingdong.getFactoryAbutmentDeliveryInfo
 * Class GetFactoryAbutmentDeliveryInfo
 * @package Jd\request
 */
class GetFactoryAbutmentDeliveryInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.getFactoryAbutmentDeliveryInfo";
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
     * @param string $authorizedSequence
     * 厂家授权码
     * Required: true
     * Example Value: 
     */
    private $authorizedSequence;

    /**
     * @param string $authorizedSequence
     * 厂家授权码
     * Example Value: 
     */
    public function setAuthorizedSequence($authorizedSequence)
    {
        $this->authorizedSequence             = $authorizedSequence;
        $this->apiParas["authorizedSequence"]  = $authorizedSequence;
    }

    public function getAuthorizedSequence()
    {
        return $this->authorizedSequence;
    }

}