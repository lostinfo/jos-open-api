<?php

namespca Lostinfo\JosOpenApi;

/**
 * 创建门店组
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2827&apiName=jingdong.createEntityStoresGroup
 * Class CreateEntityStoresGroup
 * @package Jd\request
 */
class CreateEntityStoresGroup
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.createEntityStoresGroup";
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
     * @param int $id
     * 门店组ID
     * Required: false
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 门店组ID
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     * 门店组名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
     * 门店组名称
     * Example Value: 
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int[] $storeId
     * 门店ID
     * Required: false
     * Example Value: 
     */
    private $storeId;

    /**
     * @param int[] $storeId
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