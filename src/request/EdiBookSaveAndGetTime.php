<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 预约暂存并获取预约时间段
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1973&apiName=jingdong.edi.book.saveAndGetTime
 * Class EdiBookSaveAndGetTime
 * @package Jd\request
 */
class EdiBookSaveAndGetTime
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.book.saveAndGetTime";
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
     * @param string $carrier
     * 承运商名称
     * Required: true
     * Example Value: 
     */
    private $carrier;

    /**
     * @param string $carrier
     * 承运商名称
     * Example Value: 
     */
    public function setCarrier($carrier)
    {
        $this->carrier             = $carrier;
        $this->apiParas["carrier"]  = $carrier;
    }

    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param string $carrierTel
     * 承运商电话
     * Required: true
     * Example Value: 
     */
    private $carrierTel;

    /**
     * @param string $carrierTel
     * 承运商电话
     * Example Value: 
     */
    public function setCarrierTel($carrierTel)
    {
        $this->carrierTel             = $carrierTel;
        $this->apiParas["carrierTel"]  = $carrierTel;
    }

    public function getCarrierTel()
    {
        return $this->carrierTel;
    }

    /**
     * @param string $tcCode
     * 送货的TC的编码
     * Required: false
     * Example Value: 
     */
    private $tcCode;

    /**
     * @param string $tcCode
     * 送货的TC的编码
     * Example Value: 
     */
    public function setTcCode($tcCode)
    {
        $this->tcCode             = $tcCode;
        $this->apiParas["tcCode"]  = $tcCode;
    }

    public function getTcCode()
    {
        return $this->tcCode;
    }

    /**
     * @param string $tcName
     * 送货的TC的名称
     * Required: false
     * Example Value: 
     */
    private $tcName;

    /**
     * @param string $tcName
     * 送货的TC的名称
     * Example Value: 
     */
    public function setTcName($tcName)
    {
        $this->tcName             = $tcName;
        $this->apiParas["tcName"]  = $tcName;
    }

    public function getTcName()
    {
        return $this->tcName;
    }

    /**
     * @param int[] $bookQty
     * 预约送货数量(PO总目)
     * Required: true
     * Example Value: 
     */
    private $bookQty;

    /**
     * @param int[] $bookQty
     * 预约送货数量(PO总目)
     * Example Value: 
     */
    public function setBookQty($bookQty)
    {
        $this->bookQty             = $bookQty;
        $this->apiParas["bookQtySum"]  = $bookQty;
    }

    public function getBookQty()
    {
        return $this->bookQty;
    }

    /**
     * @param string[] $poNo
     * 采购单号(PO总目)
     * Required: true
     * Example Value: 
     */
    private $poNo;

    /**
     * @param string[] $poNo
     * 采购单号(PO总目)
     * Example Value: 
     */
    public function setPoNo($poNo)
    {
        $this->poNo             = $poNo;
        $this->apiParas["poNoSum"]  = $poNo;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }

    /**
     * @param int[] $bookBoxQty
     * 预约送货箱数(PO总目)
     * Required: true
     * Example Value: 
     */
    private $bookBoxQty;

    /**
     * @param int[] $bookBoxQty
     * 预约送货箱数(PO总目)
     * Example Value: 
     */
    public function setBookBoxQty($bookBoxQty)
    {
        $this->bookBoxQty             = $bookBoxQty;
        $this->apiParas["bookBoxQtySum"]  = $bookBoxQty;
    }

    public function getBookBoxQty()
    {
        return $this->bookBoxQty;
    }

    /**
     * @param string[] $poNo
     * 采购单号(PO细目)
     * Required: false
     * Example Value: 
     */
    private $poNo;

    /**
     * @param string[] $poNo
     * 采购单号(PO细目)
     * Example Value: 
     */
    public function setPoNo($poNo)
    {
        $this->poNo             = $poNo;
        $this->apiParas["poNoDetail"]  = $poNo;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }

    /**
     * @param int[] $bookQty
     * 预约送货数量(PO细目)
     * Required: false
     * Example Value: 
     */
    private $bookQty;

    /**
     * @param int[] $bookQty
     * 预约送货数量(PO细目)
     * Example Value: 
     */
    public function setBookQty($bookQty)
    {
        $this->bookQty             = $bookQty;
        $this->apiParas["bookQtyDetail"]  = $bookQty;
    }

    public function getBookQty()
    {
        return $this->bookQty;
    }

    /**
     * @param string[] $goodsNo
     * 京东SKU(PO细目)
     * Required: false
     * Example Value: 
     */
    private $goodsNo;

    /**
     * @param string[] $goodsNo
     * 京东SKU(PO细目)
     * Example Value: 
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goodsNoDetail"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

}