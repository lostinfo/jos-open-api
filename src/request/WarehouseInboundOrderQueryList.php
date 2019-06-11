<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询入库单
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1594&apiName=jingdong.warehouse.inbound.order.query.list
 * Class WarehouseInboundOrderQueryList
 * @package Jd\request
 */
class WarehouseInboundOrderQueryList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.warehouse.inbound.order.query.list";
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
     * @param int $pageIndex
     * 当前页码（默认值1）
     * Required: true
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 当前页码（默认值1）
     * Example Value: 1
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $pageSize
     * 每页大小(最大支持200)
     * Required: true
     * Example Value: 200
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页大小(最大支持200)
     * Example Value: 200
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
     * @param string $createTimeBegin
     * 制单日期开始时间
     * Required: false
     * Example Value: 
     */
    private $createTimeBegin;

    /**
     * @param string $createTimeBegin
     * 制单日期开始时间
     * Example Value: 
     */
    public function setCreateTimeBegin($createTimeBegin)
    {
        $this->createTimeBegin             = $createTimeBegin;
        $this->apiParas["createTimeBegin"]  = $createTimeBegin;
    }

    public function getCreateTimeBegin()
    {
        return $this->createTimeBegin;
    }

    /**
     * @param string $createTimeEnd
     * 制单日期结束时间
     * Required: false
     * Example Value: 
     */
    private $createTimeEnd;

    /**
     * @param string $createTimeEnd
     * 制单日期结束时间
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
     * @param string $unpackingTimeBegin
     * 拆包开始时间
     * Required: true
     * Example Value: 
     */
    private $unpackingTimeBegin;

    /**
     * @param string $unpackingTimeBegin
     * 拆包开始时间
     * Example Value: 
     */
    public function setUnpackingTimeBegin($unpackingTimeBegin)
    {
        $this->unpackingTimeBegin             = $unpackingTimeBegin;
        $this->apiParas["unpackingTimeBegin"]  = $unpackingTimeBegin;
    }

    public function getUnpackingTimeBegin()
    {
        return $this->unpackingTimeBegin;
    }

    /**
     * @param string $unpackingTimeEnd
     * 拆包开始时间
     * Required: true
     * Example Value: 
     */
    private $unpackingTimeEnd;

    /**
     * @param string $unpackingTimeEnd
     * 拆包开始时间
     * Example Value: 
     */
    public function setUnpackingTimeEnd($unpackingTimeEnd)
    {
        $this->unpackingTimeEnd             = $unpackingTimeEnd;
        $this->apiParas["unpackingTimeEnd"]  = $unpackingTimeEnd;
    }

    public function getUnpackingTimeEnd()
    {
        return $this->unpackingTimeEnd;
    }

    /**
     * @param string $remark1
     * 备注1
     * Required: false
     * Example Value: 
     */
    private $remark1;

    /**
     * @param string $remark1
     * 备注1
     * Example Value: 
     */
    public function setRemark1($remark1)
    {
        $this->remark1             = $remark1;
        $this->apiParas["remark1"]  = $remark1;
    }

    public function getRemark1()
    {
        return $this->remark1;
    }

    /**
     * @param string $remark2
     * 备注2
     * Required: false
     * Example Value: 
     */
    private $remark2;

    /**
     * @param string $remark2
     * 备注2
     * Example Value: 
     */
    public function setRemark2($remark2)
    {
        $this->remark2             = $remark2;
        $this->apiParas["remark2"]  = $remark2;
    }

    public function getRemark2()
    {
        return $this->remark2;
    }

    /**
     * @param string $remark3
     * 备注3
     * Required: false
     * Example Value: 
     */
    private $remark3;

    /**
     * @param string $remark3
     * 备注3
     * Example Value: 
     */
    public function setRemark3($remark3)
    {
        $this->remark3             = $remark3;
        $this->apiParas["remark3"]  = $remark3;
    }

    public function getRemark3()
    {
        return $this->remark3;
    }

    /**
     * @param string $remark4
     * 备注4
     * Required: false
     * Example Value: 
     */
    private $remark4;

    /**
     * @param string $remark4
     * 备注4
     * Example Value: 
     */
    public function setRemark4($remark4)
    {
        $this->remark4             = $remark4;
        $this->apiParas["remark4"]  = $remark4;
    }

    public function getRemark4()
    {
        return $this->remark4;
    }

    /**
     * @param string $remark5
     * 备注5
     * Required: false
     * Example Value: 
     */
    private $remark5;

    /**
     * @param string $remark5
     * 备注5
     * Example Value: 
     */
    public function setRemark5($remark5)
    {
        $this->remark5             = $remark5;
        $this->apiParas["remark5"]  = $remark5;
    }

    public function getRemark5()
    {
        return $this->remark5;
    }

}