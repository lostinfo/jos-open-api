<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 商品删除
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=921&apiName=jingdong.ept.warecenter.ware.delete
 * Class EptWarecenterWareDelete
 * @package Jd\request
 */
class EptWarecenterWareDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.warecenter.ware.delete";
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
     * @param int $wareId
     * 需要删除的商品id
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param int $wareId
     * 需要删除的商品id
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