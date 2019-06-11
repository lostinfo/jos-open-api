<?php

namespca Lostinfo\JosOpenApi;

/**
 * 删除门店信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2222&apiName=jingdong.deleteStoresById
 * Class DeleteStoresById
 * @package Jd\request
 */
class DeleteStoresById
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.deleteStoresById";
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
     * @param int $storeId
     * 门店ID
     * Required: true
     * Example Value: 
     */
    private $storeId;

    /**
     * @param int $storeId
     * 门店ID
     * Example Value: 
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

}