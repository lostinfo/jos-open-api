<?php

namespca Lostinfo\JosOpenApi;

/**
 * 销售出库单明细查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=955&apiName=jingdong.eclp.order.queryOrder
 * Class EclpOrderQueryOrder
 * @package Jd\request
 */
class EclpOrderQueryOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.queryOrder";
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
     * @param string $eclpSoNo
     * 开放平台出库单号
     * Required: true
     * Example Value: ESL4398046641940
     */
    private $eclpSoNo;

    /**
     * @param string $eclpSoNo
     * 开放平台出库单号
     * Example Value: ESL4398046641940
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