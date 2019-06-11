<?php

namespace JD\request;

/**
 * 根据房源主键删除房源下经纪人数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2927&apiName=jingdong.ers.fang.houseResource.deleteBrokerByHouseResourceId
 * Class ErsFangHouseResourceDeleteBrokerByHouseResourceId
 * @package Jd\request
 */
class ErsFangHouseResourceDeleteBrokerByHouseResourceId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.houseResource.deleteBrokerByHouseResourceId";
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
     * @param Number $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param Number $cityCode
     * 城市code
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["cityCode"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param Number $pSourceId
     * 来源房源id(需要根据房源id做分表条件删除数据)
     * Required: true
     * Example Value: 
     */
    private $pSourceId;

    /**
     * @param Number $pSourceId
     * 来源房源id(需要根据房源id做分表条件删除数据)
     * Example Value: 
     */
    public function setPSourceId($pSourceId)
    {
        $this->pSourceId             = $pSourceId;
        $this->apiParas["pSourceId"]  = $pSourceId;
    }

    public function getPSourceId()
    {
        return $this->pSourceId;
    }

}