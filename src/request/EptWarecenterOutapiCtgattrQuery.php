<?php

namespca Lostinfo\JosOpenApi;

/**
 * 通过三级类目ID查询类目属性列表
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=904&apiName=jingdong.ept.warecenter.outapi.ctgattr.query
 * Class EptWarecenterOutapiCtgattrQuery
 * @package Jd\request
 */
class EptWarecenterOutapiCtgattrQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.warecenter.outapi.ctgattr.query";
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

}