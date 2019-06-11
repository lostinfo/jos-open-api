<?php

namespca Lostinfo\JosOpenApi;

/**
 * 其它出库单查询
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=146&apiName=jingdong.logistics.otherOutstore.query
 * Class LogisticsOtherOutstoreQuery
 * @package Jd\request
 */
class LogisticsOtherOutstoreQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.otherOutstore.query";
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
     * @param string $joslOutboundNo
     * josl出库单号
     * Required: true
     * Example Value: 
     */
    private $joslOutboundNo;

    /**
     * @param string $joslOutboundNo
     * josl出库单号
     * Example Value: 
     */
    public function setJoslOutboundNo($joslOutboundNo)
    {
        $this->joslOutboundNo             = $joslOutboundNo;
        $this->apiParas["josl_outbound_no"]  = $joslOutboundNo;
    }

    public function getJoslOutboundNo()
    {
        return $this->joslOutboundNo;
    }

}