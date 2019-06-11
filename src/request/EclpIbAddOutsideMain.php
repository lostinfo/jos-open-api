<?php

namespca Lostinfo\JosOpenApi;

/**
 * 新增仓间调拨单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1721&apiName=jingdong.eclp.ib.addOutsideMain
 * Class EclpIbAddOutsideMain
 * @package Jd\request
 */
class EclpIbAddOutsideMain
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.ib.addOutsideMain";
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
     * 事业部编号，以EBU开头，最大长度30
     * Required: true
     * Example Value: EBU4414564401
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号，以EBU开头，最大长度30
     * Example Value: EBU4414564401
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
     * @param string $isvOutsideNo
     * ISV仓间调拨单号，商家单号，最大长度50
     * Required: true
     * Example Value: CX2018110101001
     */
    private $isvOutsideNo;

    /**
     * @param string $isvOutsideNo
     * ISV仓间调拨单号，商家单号，最大长度50
     * Example Value: CX2018110101001
     */
    public function setIsvOutsideNo($isvOutsideNo)
    {
        $this->isvOutsideNo             = $isvOutsideNo;
        $this->apiParas["isvOutsideNo"]  = $isvOutsideNo;
    }

    public function getIsvOutsideNo()
    {
        return $this->isvOutsideNo;
    }

    /**
     * @param string $warehouseNoOut
     * 配出eclp库房编号，最大长度20
     * Required: true
     * Example Value: 11000011
     */
    private $warehouseNoOut;

    /**
     * @param string $warehouseNoOut
     * 配出eclp库房编号，最大长度20
     * Example Value: 11000011
     */
    public function setWarehouseNoOut($warehouseNoOut)
    {
        $this->warehouseNoOut             = $warehouseNoOut;
        $this->apiParas["warehouseNoOut"]  = $warehouseNoOut;
    }

    public function getWarehouseNoOut()
    {
        return $this->warehouseNoOut;
    }

    /**
     * @param string $warehouseNoIn
     * 配入eclp库房编号，最大长度20
     * Required: true
     * Example Value: 11000012
     */
    private $warehouseNoIn;

    /**
     * @param string $warehouseNoIn
     * 配入eclp库房编号，最大长度20
     * Example Value: 11000012
     */
    public function setWarehouseNoIn($warehouseNoIn)
    {
        $this->warehouseNoIn             = $warehouseNoIn;
        $this->apiParas["warehouseNoIn"]  = $warehouseNoIn;
    }

    public function getWarehouseNoIn()
    {
        return $this->warehouseNoIn;
    }

    /**
     * @param string[] $goodsNo
     * 主商品编号，以EMG开头，单个商品编码最大长度50
     * Required: true
     * Example Value: [EMG0001,EMG0002]
     */
    private $goodsNo;

    /**
     * @param string[] $goodsNo
     * 主商品编号，以EMG开头，单个商品编码最大长度50
     * Example Value: [EMG0001,EMG0002]
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
     * @param int[] $planNum
     * 计划配出数量，正整数，最大位数10位
     * Required: true
     * Example Value: [1,2]
     */
    private $planNum;

    /**
     * @param int[] $planNum
     * 计划配出数量，正整数，最大位数10位
     * Example Value: [1,2]
     */
    public function setPlanNum($planNum)
    {
        $this->planNum             = $planNum;
        $this->apiParas["planNum"]  = $planNum;
    }

    public function getPlanNum()
    {
        return $this->planNum;
    }

    /**
     * @param string[] $batAttrListJson
     * 商品批属性信息，枚举:packageBatchNo(包装批号) productionDate(生产日期) expirationDate(到期日期)lot(批次号)poNo(采购单号)，示例：[{'batchKey':'packageBatchNo'_$_'batchValue':'20161010'}_$_{'batchKey':'productionDate'_$_'batchValue':'2016-10-10'}]
     * Required: false
     * Example Value: [{'batchKey':'packageBatchNo'_$_'batchValue':'20161010'}_$_{'batchKey':'productionDate'_$_'batchValue':'2016-10-10'}]
     */
    private $batAttrListJson;

    /**
     * @param string[] $batAttrListJson
     * 商品批属性信息，枚举:packageBatchNo(包装批号) productionDate(生产日期) expirationDate(到期日期)lot(批次号)poNo(采购单号)，示例：[{'batchKey':'packageBatchNo'_$_'batchValue':'20161010'}_$_{'batchKey':'productionDate'_$_'batchValue':'2016-10-10'}]
     * Example Value: [{'batchKey':'packageBatchNo'_$_'batchValue':'20161010'}_$_{'batchKey':'productionDate'_$_'batchValue':'2016-10-10'}]
     */
    public function setBatAttrListJson($batAttrListJson)
    {
        $this->batAttrListJson             = $batAttrListJson;
        $this->apiParas["batAttrListJson"]  = $batAttrListJson;
    }

    public function getBatAttrListJson()
    {
        return $this->batAttrListJson;
    }

}