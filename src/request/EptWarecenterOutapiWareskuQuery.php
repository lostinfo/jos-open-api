<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询商品下的SKU
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=901&apiName=jingdong.ept.warecenter.outapi.waresku.query
 * Class EptWarecenterOutapiWareskuQuery
 * @package Jd\request
 */
class EptWarecenterOutapiWareskuQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.warecenter.outapi.waresku.query";
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
     * @param string $wareId
     * 商品Id(最多支持10个wareId,每个wareId之间由“,”隔开。如:6666,888,777)
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param string $wareId
     * 商品Id(最多支持10个wareId,每个wareId之间由“,”隔开。如:6666,888,777)
     * Example Value: 
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

}