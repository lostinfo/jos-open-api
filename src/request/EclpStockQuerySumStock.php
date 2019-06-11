<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询库存流水汇总数据
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1393&apiName=jingdong.eclp.stock.querySumStock
 * Class EclpStockQuerySumStock
 * @package Jd\request
 */
class EclpStockQuerySumStock
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.querySumStock";
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
     * 事业部编号；最大50字符
     * Required: true
     * Example Value: EBU123
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号；最大50字符
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
     * @param string $warehouseNo
     * 库房编号；最大50字符
     * Required: true
     * Example Value: 11000123
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 库房编号；最大50字符
     * Example Value: 11000123
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
     * 商品编码；最大50字符
     * Required: false
     * Example Value: EMG123
     */
    private $goodsNo;

    /**
     * @param string $goodsNo
     * 商品编码；最大50字符
     * Example Value: EMG123
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
     * @param string $date
     * 查询日期（yyyy-MM-dd HH:mm:ss）
     * Required: true
     * Example Value: 
     */
    private $date;

    /**
     * @param string $date
     * 查询日期（yyyy-MM-dd HH:mm:ss）
     * Example Value: 
     */
    public function setDate($date)
    {
        $this->date             = $date;
        $this->apiParas["date"]  = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $isvGoodsNo
     * ISV商品编码；最大50字符
     * Required: false
     * Example Value: 123
     */
    private $isvGoodsNo;

    /**
     * @param string $isvGoodsNo
     * ISV商品编码；最大50字符
     * Example Value: 123
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

}