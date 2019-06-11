<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取商家的所有物流公司
 * 配送API-提供获取物流公司信息的功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=75&apiId=582&apiName=360buy.get.vender.all.delivery.company
 * Class TVenderAllDeliveryCompany
 * @package Jd\request
 */
class TVenderAllDeliveryCompany
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "360buy.get.vender.all.delivery.company";
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
     * @param string $fields
     * 返回字段列表
     * Required: true
     * Example Value: 
     */
    private $fields;

    /**
     * @param string $fields
     * 返回字段列表
     * Example Value: 
     */
    public function setFields($fields)
    {
        $this->fields             = $fields;
        $this->apiParas["fields"]  = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

}