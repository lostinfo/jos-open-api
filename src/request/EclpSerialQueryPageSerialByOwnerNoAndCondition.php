<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据货主编号和业务类型等查询序列号详情
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1682&apiName=jingdong.eclp.serial.queryPageSerialByOwnerNoAndCondition
 * Class EclpSerialQueryPageSerialByOwnerNoAndCondition
 * @package Jd\request
 */
class EclpSerialQueryPageSerialByOwnerNoAndCondition
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.serial.queryPageSerialByOwnerNoAndCondition";
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
     * @param  $billType
     * 中小件单据类型(采购入库:11,退货入库:12,订单出库:24,退供出库:32;大件:10)
     * Required: true
     * Example Value: 24
     */
    private $billType;

    /**
     * @param  $billType
     * 中小件单据类型(采购入库:11,退货入库:12,订单出库:24,退供出库:32;大件:10)
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
     * @param string $ownerNo
     * 货主编号,EBU开头，最大长度50
     * Required: true
     * Example Value: EBU44180465357
     */
    private $ownerNo;

    /**
     * @param string $ownerNo
     * 货主编号,EBU开头，最大长度50
     * Example Value: EBU44180465357
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["ownerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    /**
     * @param string $startTime
     * 起始时间，时间格式 yyyy-MM-dd HH:mm:ss
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param string $startTime
     * 起始时间，时间格式 yyyy-MM-dd HH:mm:ss
     * Example Value: 
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string $endTime
     * 结束时间 时间格式 yyyy-MM-dd HH:mm:ss
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param string $endTime
     * 结束时间 时间格式 yyyy-MM-dd HH:mm:ss
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param string $warehouseNo
     * 库房编号，最大长度50
     * Required: false
     * Example Value: 110002457
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 库房编号，最大长度50
     * Example Value: 110002457
     */
    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo             = $warehouseNo;
        $this->apiParas["warehouseNo"]  = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
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
     * 每页记录数，每页最大200
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页记录数，每页最大200
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
     * 查询类型 （1：中小件，2：大件，不填则默认查中小件）
     * Required: false
     * Example Value: 1
     */
    private $queryType;

    /**
     * @param  $queryType
     * 查询类型 （1：中小件，2：大件，不填则默认查中小件）
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