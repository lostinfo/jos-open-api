<?php

namespca Lostinfo\JosOpenApi;

/**
 * 其它入库单查询
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=155&apiName=jingdong.logistics.otherInstore.query
 * Class LogisticsOtherInstoreQuery
 * @package Jd\request
 */
class LogisticsOtherInstoreQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.otherInstore.query";
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
     * @param string $inBoundNo
     * 其它入库入库单号
     * Required: true
     * Example Value: JBI0000000033
     */
    private $inBoundNo;

    /**
     * @param string $inBoundNo
     * 其它入库入库单号
     * Example Value: JBI0000000033
     */
    public function setInBoundNo($inBoundNo)
    {
        $this->inBoundNo             = $inBoundNo;
        $this->apiParas["in_bound_no"]  = $inBoundNo;
    }

    public function getInBoundNo()
    {
        return $this->inBoundNo;
    }

}