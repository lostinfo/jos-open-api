<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取退货单总目
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1972&apiName=jingdong.edi.ro.get
 * Class EdiRoGet
 * @package Jd\request
 */
class EdiRoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.ro.get";
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
     * @param int $type
     * 退货单类型: 1. 主库退货; 2. 备件库退货.
     * Required: true
     * Example Value: 
     */
    private $type;

    /**
     * @param int $type
     * 退货单类型: 1. 主库退货; 2. 备件库退货.
     * Example Value: 
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $createTimeStart
     * 退货单创建时间开始
     * Required: true
     * Example Value: 
     */
    private $createTimeStart;

    /**
     * @param string $createTimeStart
     * 退货单创建时间开始
     * Example Value: 
     */
    public function setCreateTimeStart($createTimeStart)
    {
        $this->createTimeStart             = $createTimeStart;
        $this->apiParas["createTimeStart"]  = $createTimeStart;
    }

    public function getCreateTimeStart()
    {
        return $this->createTimeStart;
    }

    /**
     * @param string $createTimeEnd
     * 退货单创建时间结束
     * Required: true
     * Example Value: 
     */
    private $createTimeEnd;

    /**
     * @param string $createTimeEnd
     * 退货单创建时间结束
     * Example Value: 
     */
    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->createTimeEnd             = $createTimeEnd;
        $this->apiParas["createTimeEnd"]  = $createTimeEnd;
    }

    public function getCreateTimeEnd()
    {
        return $this->createTimeEnd;
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