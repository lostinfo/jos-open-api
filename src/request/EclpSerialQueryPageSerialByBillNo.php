<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据订单号查询序列号
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1685&apiName=jingdong.eclp.serial.queryPageSerialByBillNo
 * Class EclpSerialQueryPageSerialByBillNo
 * @package Jd\request
 */
class EclpSerialQueryPageSerialByBillNo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.serial.queryPageSerialByBillNo";
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
     * @param string $billNo
     * 订单号，以ESL开头，最大长度50
     * Required: true
     * Example Value: ESL1363593563
     */
    private $billNo;

    /**
     * @param string $billNo
     * 订单号，以ESL开头，最大长度50
     * Example Value: ESL1363593563
     */
    public function setBillNo($billNo)
    {
        $this->billNo             = $billNo;
        $this->apiParas["billNo"]  = $billNo;
    }

    public function getBillNo()
    {
        return $this->billNo;
    }

    /**
     * @param  $billType
     * 订单类型（11：采购入库；12：客退入库；24：订单出库；32：退供出库）
     * Required: true
     * Example Value: 24
     */
    private $billType;

    /**
     * @param  $billType
     * 订单类型（11：采购入库；12：客退入库；24：订单出库；32：退供出库）
     * Example Value: 24
     */
    public function setBillType($billType)
    {
        $this->billType             = $billType;
        $this->apiParas["billType"]  = $billType;
    }

    public function getBillType()
    {
        return $this->billType;
    }

    /**
     * @param int $pageNo
     * 页码，从1开始
     * Required: true
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 页码，从1开始
     * Example Value: 1
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param int $pageSize
     * 每页记录数
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页记录数
     * Example Value: 10
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param  $queryType
     * 查询类型 1：中小件，2：大件，不填则默认查中小件
     * Required: false
     * Example Value: 1
     */
    private $queryType;

    /**
     * @param  $queryType
     * 查询类型 1：中小件，2：大件，不填则默认查中小件
     * Example Value: 1
     */
    public function setQueryType($queryType)
    {
        $this->queryType             = $queryType;
        $this->apiParas["queryType"]  = $queryType;
    }

    public function getQueryType()
    {
        return $this->queryType;
    }

}