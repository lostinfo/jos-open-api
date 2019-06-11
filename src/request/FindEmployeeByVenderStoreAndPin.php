<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询导购信息
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=3437&apiName=jingdong.findEmployeeByVenderStoreAndPin
 * Class FindEmployeeByVenderStoreAndPin
 * @package Jd\request
 */
class FindEmployeeByVenderStoreAndPin
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.findEmployeeByVenderStoreAndPin";
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
     * 入参对象的属性，门店ID
     * Required: true
     * Example Value: 200000
     */
    private $storeId;

    /**
     * @param int $storeId
     * 入参对象的属性，门店ID
     * Example Value: 200000
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

    /**
     * @param string $name
     * 入参对象的属性
     * Required: true
     * Example Value: jd_abcedef
     */
    private $name;

    /**
     * @param string $name
     * 入参对象的属性
     * Example Value: jd_abcedef
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

}