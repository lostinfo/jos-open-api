<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 盘盈单查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=926&apiName=jingdong.eclp.checkstock.queryCheckStockProfit
 * Class EclpCheckstockQueryCheckStockProfit
 * @package Jd\request
 */
class EclpCheckstockQueryCheckStockProfit
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.checkstock.queryCheckStockProfit";
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
     * @param string $deptNo
     * 事业部编码；最大50个字符
     * Required: true
     * Example Value: EBU123
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编码；最大50个字符
     * Example Value: EBU123
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"]  = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    /**
     * @param string $checkStockNos
     * 盘点单号，多个以逗号隔开；单个单号最大50个字符
     * Required: false
     * Example Value: CP001,CP002,CP003
     */
    private $checkStockNos;

    /**
     * @param string $checkStockNos
     * 盘点单号，多个以逗号隔开；单个单号最大50个字符
     * Example Value: CP001,CP002,CP003
     */
    public function setCheckStockNos($checkStockNos)
    {
        $this->checkStockNos             = $checkStockNos;
        $this->apiParas["checkStockNos"]  = $checkStockNos;
    }

    public function getCheckStockNos()
    {
        return $this->checkStockNos;
    }

    /**
     * @param int $pageNo
     * 查询页码；默认第一页
     * Required: false
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 查询页码；默认第一页
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
     * 每页盘点单个数；默认：50
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页盘点单个数；默认：50
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
     * @param string $startTime
     * 开始日期；格式：yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 2012-12-12 00:00:00
     */
    private $startTime;

    /**
     * @param string $startTime
     * 开始日期；格式：yyyy-MM-dd HH:mm:ss
     * Example Value: 2012-12-12 00:00:00
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
     * 结束日期；格式：yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 2012-12-13 00:00:00
     */
    private $endTime;

    /**
     * @param string $endTime
     * 结束日期；格式：yyyy-MM-dd HH:mm:ss
     * Example Value: 2012-12-13 00:00:00
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
     * @param int $returnIsvLotattrs
     * 是否返回isv串 ,不传时不返回,为原查询方式,填1时代表返回isv串,将影响查询方式和返回数据的维度(物流云专用)
     * Required: false
     * Example Value: 物流云参数
     */
    private $returnIsvLotattrs;

    /**
     * @param int $returnIsvLotattrs
     * 是否返回isv串 ,不传时不返回,为原查询方式,填1时代表返回isv串,将影响查询方式和返回数据的维度(物流云专用)
     * Example Value: 物流云参数
     */
    public function setReturnIsvLotattrs($returnIsvLotattrs)
    {
        $this->returnIsvLotattrs             = $returnIsvLotattrs;
        $this->apiParas["returnIsvLotattrs"]  = $returnIsvLotattrs;
    }

    public function getReturnIsvLotattrs()
    {
        return $this->returnIsvLotattrs;
    }

}