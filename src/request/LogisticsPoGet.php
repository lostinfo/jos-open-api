<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取采购单信息
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=152&apiName=jingdong.logistics.po.get
 * Class LogisticsPoGet
 * @package Jd\request
 */
class LogisticsPoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.po.get";
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
     * @param string $inboundNo
     * JOSL唯一入库单号
     * Required: true
     * Example Value: 
     */
    private $inboundNo;

    /**
     * @param string $inboundNo
     * JOSL唯一入库单号
     * Example Value: 
     */
    public function setInboundNo($inboundNo)
    {
        $this->inboundNo             = $inboundNo;
        $this->apiParas["inbound_no"]  = $inboundNo;
    }

    public function getInboundNo()
    {
        return $this->inboundNo;
    }

    /**
     * @param string $poNo
     * JOSL唯一入库单号
     * Required: false
     * Example Value: 
     */
    private $poNo;

    /**
     * @param string $poNo
     * JOSL唯一入库单号
     * Example Value: 
     */
    public function setPoNo($poNo)
    {
        $this->poNo             = $poNo;
        $this->apiParas["po_no"]  = $poNo;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }

}