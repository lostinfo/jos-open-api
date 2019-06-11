<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据条件获取中小件备件库库存
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1977&apiName=jingdong.edi.spi.midandsm.get
 * Class EdiSpiMidandsmGet
 * @package Jd\request
 */
class EdiSpiMidandsmGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.spi.midandsm.get";
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
     * @param string $orgId
     * 机构编码
     * Required: false
     * Example Value: 
     */
    private $orgId;

    /**
     * @param string $orgId
     * 机构编码
     * Example Value: 
     */
    public function setOrgId($orgId)
    {
        $this->orgId             = $orgId;
        $this->apiParas["orgId"]  = $orgId;
    }

    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * @param string $warehouseCode
     * 库房编码
     * Required: false
     * Example Value: 
     */
    private $warehouseCode;

    /**
     * @param string $warehouseCode
     * 库房编码
     * Example Value: 
     */
    public function setWarehouseCode($warehouseCode)
    {
        $this->warehouseCode             = $warehouseCode;
        $this->apiParas["warehouseCode"]  = $warehouseCode;
    }

    public function getWarehouseCode()
    {
        return $this->warehouseCode;
    }

    /**
     * @param string $jdSku
     * 京东SKU
     * Required: false
     * Example Value: 
     */
    private $jdSku;

    /**
     * @param string $jdSku
     * 京东SKU
     * Example Value: 
     */
    public function setJdSku($jdSku)
    {
        $this->jdSku             = $jdSku;
        $this->apiParas["jdSku"]  = $jdSku;
    }

    public function getJdSku()
    {
        return $this->jdSku;
    }

    /**
     * @param string $inTimeStart
     * 入库时间开始
     * Required: true
     * Example Value: 
     */
    private $inTimeStart;

    /**
     * @param string $inTimeStart
     * 入库时间开始
     * Example Value: 
     */
    public function setInTimeStart($inTimeStart)
    {
        $this->inTimeStart             = $inTimeStart;
        $this->apiParas["inTimeStart"]  = $inTimeStart;
    }

    public function getInTimeStart()
    {
        return $this->inTimeStart;
    }

    /**
     * @param string $inTimeEnd
     * 入库时间结束
     * Required: true
     * Example Value: 
     */
    private $inTimeEnd;

    /**
     * @param string $inTimeEnd
     * 入库时间结束
     * Example Value: 
     */
    public function setInTimeEnd($inTimeEnd)
    {
        $this->inTimeEnd             = $inTimeEnd;
        $this->apiParas["inTimeEnd"]  = $inTimeEnd;
    }

    public function getInTimeEnd()
    {
        return $this->inTimeEnd;
    }

    /**
     * @param int $pageNum
     * 当前页数，从1开始
     * Required: false
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param int $pageNum
     * 当前页数，从1开始
     * Example Value: 
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"]  = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param int $pageSize
     * 一页记录数目
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 一页记录数目
     * Example Value: 
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

}