<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据单据类型获取商品出库预占数量
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2728&apiName=jingdong.eclp.stock.queryWarehouseStockOrderFlowByGroup
 * Class EclpStockQueryWarehouseStockOrderFlowByGroup
 * @package Jd\request
 */
class EclpStockQueryWarehouseStockOrderFlowByGroup
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryWarehouseStockOrderFlowByGroup";
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
     * @param string $startDate
     * 开始时间,格式为：yyyy-mm-dd HH:mm:ss
     * Required: true
     * Example Value: 2018-12-01
     */
    private $startDate;

    /**
     * @param string $startDate
     * 开始时间,格式为：yyyy-mm-dd HH:mm:ss
     * Example Value: 2018-12-01
     */
    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["startDate"]  = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * 结束时间,格式为：yyyy-mm-dd HH:mm:ss；最多查询两个月
     * Required: true
     * Example Value: 2018-12-02
     */
    private $endDate;

    /**
     * @param string $endDate
     * 结束时间,格式为：yyyy-mm-dd HH:mm:ss；最多查询两个月
     * Example Value: 2018-12-02
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["endDate"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
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
     * @param string $goodsNo
     * eclp商品编码 eclp商品编码或商家商品编码至少传一个，如果两个都传，以eclp商品编码为准；最大长度50
     * Required: false
     * Example Value: EMG00XX
     */
    private $goodsNo;

    /**
     * @param string $goodsNo
     * eclp商品编码 eclp商品编码或商家商品编码至少传一个，如果两个都传，以eclp商品编码为准；最大长度50
     * Example Value: EMG00XX
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goodsNo"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param string $isvGoodsNo
     * 商家商品编码；最大长度50
     * Required: false
     * Example Value: goods_01
     */
    private $isvGoodsNo;

    /**
     * @param string $isvGoodsNo
     * 商家商品编码；最大长度50
     * Example Value: goods_01
     */
    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo             = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"]  = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    /**
     * @param string $orderType
     * 单据类型；最大长度11
     * Required: false
     * Example Value: 1
     */
    private $orderType;

    /**
     * @param string $orderType
     * 单据类型；最大长度11
     * Example Value: 1
     */
    public function setOrderType($orderType)
    {
        $this->orderType             = $orderType;
        $this->apiParas["orderType"]  = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * @param int $bizType
     * 业务类型；21：预占；22：回传
     * Required: false
     * Example Value: 21
     */
    private $bizType;

    /**
     * @param int $bizType
     * 业务类型；21：预占；22：回传
     * Example Value: 21
     */
    public function setBizType($bizType)
    {
        $this->bizType             = $bizType;
        $this->apiParas["bizType"]  = $bizType;
    }

    public function getBizType()
    {
        return $this->bizType;
    }

}