<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 更新修改vis库存接口
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1442&apiName=jingdong.vis.jos.service.updateInventory
 * Class VisJosServiceUpdateInventory
 * @package Jd\request
 */
class VisJosServiceUpdateInventory
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vis.jos.service.updateInventory";
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
     * @param string $JD_SKU
     * 商品编码
     * Required: true
     * Example Value: 100000043544
     */
    private $JD_SKU;

    /**
     * @param string $JD_SKU
     * 商品编码
     * Example Value: 100000043544
     */
    public function setJD_SKU($JD_SKU)
    {
        $this->JD_SKU             = $JD_SKU;
        $this->apiParas["JD_SKU"]  = $JD_SKU;
    }

    public function getJD_SKU()
    {
        return $this->JD_SKU;
    }

    /**
     * @param string $VENDOR_CODE
     * 供应商简码
     * Required: true
     * Example Value: bjylgxgs
     */
    private $VENDOR_CODE;

    /**
     * @param string $VENDOR_CODE
     * 供应商简码
     * Example Value: bjylgxgs
     */
    public function setVENDOR_CODE($VENDOR_CODE)
    {
        $this->VENDOR_CODE             = $VENDOR_CODE;
        $this->apiParas["VENDOR_CODE"]  = $VENDOR_CODE;
    }

    public function getVENDOR_CODE()
    {
        return $this->VENDOR_CODE;
    }

    /**
     * @param int $QUANTITY
     * 库存数量
     * Required: true
     * Example Value: 100
     */
    private $QUANTITY;

    /**
     * @param int $QUANTITY
     * 库存数量
     * Example Value: 100
     */
    public function setQUANTITY($QUANTITY)
    {
        $this->QUANTITY             = $QUANTITY;
        $this->apiParas["QUANTITY"]  = $QUANTITY;
    }

    public function getQUANTITY()
    {
        return $this->QUANTITY;
    }

    /**
     * @param string $DELV_CENTER_ID
     * 配送中心代码
     * Required: true
     * Example Value: 698
     */
    private $DELV_CENTER_ID;

    /**
     * @param string $DELV_CENTER_ID
     * 配送中心代码
     * Example Value: 698
     */
    public function setDELV_CENTER_ID($DELV_CENTER_ID)
    {
        $this->DELV_CENTER_ID             = $DELV_CENTER_ID;
        $this->apiParas["DELV_CENTER_ID"]  = $DELV_CENTER_ID;
    }

    public function getDELV_CENTER_ID()
    {
        return $this->DELV_CENTER_ID;
    }

}