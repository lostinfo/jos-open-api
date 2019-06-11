<?php

namespace JD\request;

/**
 * 采购入库单传序列号清单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3558&apiName=jingdong.eclp.po.addPoSidDetail
 * Class EclpPoAddPoSidDetail
 * @package Jd\request
 */
class EclpPoAddPoSidDetail
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.po.addPoSidDetail";
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
     * @param String $poNo
     * 采购单号
     * Required: true
     * Example Value: 
     */
    private $poNo;

    /**
     * @param String $poNo
     * 采购单号
     * Example Value: 
     */
    public function setPoNo($poNo)
    {
        $this->poNo             = $poNo;
        $this->apiParas["poNo"]  = $poNo;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }

    /**
     * @param String $version
     * 序列号版本信息
     * Required: true
     * Example Value: 
     */
    private $version;

    /**
     * @param String $version
     * 序列号版本信息
     * Example Value: 
     */
    public function setVersion($version)
    {
        $this->version             = $version;
        $this->apiParas["version"]  = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param String $deptGoodsNo
     * 事业部商品编号
     * Required: true
     * Example Value: 
     */
    private $deptGoodsNo;

    /**
     * @param String $deptGoodsNo
     * 事业部商品编号
     * Example Value: 
     */
    public function setDeptGoodsNo($deptGoodsNo)
    {
        $this->deptGoodsNo             = $deptGoodsNo;
        $this->apiParas["deptGoodsNo"]  = $deptGoodsNo;
    }

    public function getDeptGoodsNo()
    {
        return $this->deptGoodsNo;
    }

    /**
     * @param String $serialNo
     * 序列号
     * Required: true
     * Example Value: 
     */
    private $serialNo;

    /**
     * @param String $serialNo
     * 序列号
     * Example Value: 
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo             = $serialNo;
        $this->apiParas["serialNo"]  = $serialNo;
    }

    public function getSerialNo()
    {
        return $this->serialNo;
    }

    /**
     * @param String $pin
     * 授权码
     * Required: true
     * Example Value: 
     */
    private $pin;

    /**
     * @param String $pin
     * 授权码
     * Example Value: 
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["pin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

}