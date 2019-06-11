<?php

namespace JD\request;

/**
 * 销售出库单包裹数据查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=954&apiName=jingdong.eclp.order.queryOrderPacks
 * Class EclpOrderQueryOrderPacks
 * @package Jd\request
 */
class EclpOrderQueryOrderPacks
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.queryOrderPacks";
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
     * @param String[] $eclpSoNo
     * 开放平台出库单号
     * Required: true
     * Example Value: 
     */
    private $eclpSoNo;

    /**
     * @param String[] $eclpSoNo
     * 开放平台出库单号
     * Example Value: 
     */
    public function setEclpSoNo($eclpSoNo)
    {
        $this->eclpSoNo             = $eclpSoNo;
        $this->apiParas["eclpSoNo"]  = $eclpSoNo;
    }

    public function getEclpSoNo()
    {
        return $this->eclpSoNo;
    }

}