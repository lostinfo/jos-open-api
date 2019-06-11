<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取采购单预约信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1983&apiName=jingdong.edi.book.query
 * Class EdiBookQuery
 * @package Jd\request
 */
class EdiBookQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.book.query";
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
     * @param string $poNo
     * 采购单号
     * Required: true
     * Example Value: 
     */
    private $poNo;

    /**
     * @param string $poNo
     * 采购单号
     * Example Value: 
     */
    public function setPoNo($poNo)
    {
        $this->poNo             = $poNo;
        $this->apiParas["poNo"]  = $poNo;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }

}