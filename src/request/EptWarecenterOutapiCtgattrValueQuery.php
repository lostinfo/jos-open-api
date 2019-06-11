<?php

namespca Lostinfo\JosOpenApi;

/**
 * 通过三级类目ID和属性ID查询属性值列表
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=905&apiName=jingdong.ept.warecenter.outapi.ctgattr.value.query
 * Class EptWarecenterOutapiCtgattrValueQuery
 * @package Jd\request
 */
class EptWarecenterOutapiCtgattrValueQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.warecenter.outapi.ctgattr.value.query";
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
     * @param int $catId
     * 三级类目ID
     * Required: true
     * Example Value: 
     */
    private $catId;

    /**
     * @param int $catId
     * 三级类目ID
     * Example Value: 
     */
    public function setCatId($catId)
    {
        $this->catId             = $catId;
        $this->apiParas["catId"]  = $catId;
    }

    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * @param int $propertyId
     * 属性ID
     * Required: true
     * Example Value: 
     */
    private $propertyId;

    /**
     * @param int $propertyId
     * 属性ID
     * Example Value: 
     */
    public function setPropertyId($propertyId)
    {
        $this->propertyId             = $propertyId;
        $this->apiParas["propertyId"]  = $propertyId;
    }

    public function getPropertyId()
    {
        return $this->propertyId;
    }

}