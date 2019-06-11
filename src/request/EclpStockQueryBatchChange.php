<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 批属性变更查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2763&apiName=jingdong.eclp.stock.queryBatchChange
 * Class EclpStockQueryBatchChange
 * @package Jd\request
 */
class EclpStockQueryBatchChange
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryBatchChange";
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
     * 事业部编号；最大长度50
     * Required: true
     * Example Value: EBU000000000000X
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号；最大长度50
     * Example Value: EBU000000000000X
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
     * @param string $allocativeCenterNo
     * 配送中心编号;最大长度50
     * Required: false
     * Example Value: 3
     */
    private $allocativeCenterNo;

    /**
     * @param string $allocativeCenterNo
     * 配送中心编号;最大长度50
     * Example Value: 3
     */
    public function setAllocativeCenterNo($allocativeCenterNo)
    {
        $this->allocativeCenterNo             = $allocativeCenterNo;
        $this->apiParas["allocativeCenterNo"]  = $allocativeCenterNo;
    }

    public function getAllocativeCenterNo()
    {
        return $this->allocativeCenterNo;
    }

    /**
     * @param string $warehouseNo
     * 仓库编号；最大长度50
     * Required: false
     * Example Value: 11000000X
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 仓库编号；最大长度50
     * Example Value: 11000000X
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
     * @param string $batchAttrChangeNo
     * 批属性变更单号 可多个，逗号隔开
     * Required: false
     * Example Value: danhao_1,danhao_2
     */
    private $batchAttrChangeNo;

    /**
     * @param string $batchAttrChangeNo
     * 批属性变更单号 可多个，逗号隔开
     * Example Value: danhao_1,danhao_2
     */
    public function setBatchAttrChangeNo($batchAttrChangeNo)
    {
        $this->batchAttrChangeNo             = $batchAttrChangeNo;
        $this->apiParas["batchAttrChangeNo"]  = $batchAttrChangeNo;
    }

    public function getBatchAttrChangeNo()
    {
        return $this->batchAttrChangeNo;
    }

    /**
     * @param string $startTime
     * 开始日期,格式为：yyyy-MM-dd HH:mm:ss 对应单据创建时间，默认时间为系统当天
     * Required: false
     * Example Value: 
     */
    private $startTime;

    /**
     * @param string $startTime
     * 开始日期,格式为：yyyy-MM-dd HH:mm:ss 对应单据创建时间，默认时间为系统当天
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
     * 结束日期,格式为：yyyy-MM-dd HH:mm:ss 对应单据创建时间，默认时间为系统当天
     * Required: false
     * Example Value: 
     */
    private $endTime;

    /**
     * @param string $endTime
     * 结束日期,格式为：yyyy-MM-dd HH:mm:ss 对应单据创建时间，默认时间为系统当天
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
     * @param int $startPage
     * 分页起始页（第一页从1开始）
     * Required: false
     * Example Value: 1
     */
    private $startPage;

    /**
     * @param int $startPage
     * 分页起始页（第一页从1开始）
     * Example Value: 1
     */
    public function setStartPage($startPage)
    {
        $this->startPage             = $startPage;
        $this->apiParas["startPage"]  = $startPage;
    }

    public function getStartPage()
    {
        return $this->startPage;
    }

    /**
     * @param int $onePageNum
     * 每页记录显示条数（大于0小于100），默认每页50行
     * Required: false
     * Example Value: 50
     */
    private $onePageNum;

    /**
     * @param int $onePageNum
     * 每页记录显示条数（大于0小于100），默认每页50行
     * Example Value: 50
     */
    public function setOnePageNum($onePageNum)
    {
        $this->onePageNum             = $onePageNum;
        $this->apiParas["onePageNum"]  = $onePageNum;
    }

    public function getOnePageNum()
    {
        return $this->onePageNum;
    }

}