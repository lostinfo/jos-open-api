<?php

namespca Lostinfo\JosOpenApi;

/**
 * 上传检测报告
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2253&apiName=jingdong.edi.sdv.upLoadTpReport.upload
 * Class EdiSdvUpLoadTpReportUpload
 * @package Jd\request
 */
class EdiSdvUpLoadTpReportUpload
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.sdv.upLoadTpReport.upload";
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
     * @param string $serialNo
     * 序列号
     * Required: true
     * Example Value: 
     */
    private $serialNo;

    /**
     * @param string $serialNo
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
     * @param string $ckBusId
     * 备件库出库单号
     * Required: true
     * Example Value: 
     */
    private $ckBusId;

    /**
     * @param string $ckBusId
     * 备件库出库单号
     * Example Value: 
     */
    public function setCkBusId($ckBusId)
    {
        $this->ckBusId             = $ckBusId;
        $this->apiParas["ckBusId"]  = $ckBusId;
    }

    public function getCkBusId()
    {
        return $this->ckBusId;
    }

    /**
     * @param string $vendorCode
     * 供应商简码
     * Required: true
     * Example Value: 
     */
    private $vendorCode;

    /**
     * @param string $vendorCode
     * 供应商简码
     * Example Value: 
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode             = $vendorCode;
        $this->apiParas["vendorCode"]  = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * @param string $wareId
     * sku
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param string $wareId
     * sku
     * Example Value: 
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param string $barCode
     * 备件条码
     * Required: true
     * Example Value: 
     */
    private $barCode;

    /**
     * @param string $barCode
     * 备件条码
     * Example Value: 
     */
    public function setBarCode($barCode)
    {
        $this->barCode             = $barCode;
        $this->apiParas["barCode"]  = $barCode;
    }

    public function getBarCode()
    {
        return $this->barCode;
    }

    /**
     * @param string $fileName
     * 文件名称
     * Required: true
     * Example Value: 
     */
    private $fileName;

    /**
     * @param string $fileName
     * 文件名称
     * Example Value: 
     */
    public function setFileName($fileName)
    {
        $this->fileName             = $fileName;
        $this->apiParas["fileName"]  = $fileName;
    }

    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $imageData
     * 文件数据
     * Required: true
     * Example Value: 
     */
    private $imageData;

    /**
     * @param string $imageData
     * 文件数据
     * Example Value: 
     */
    public function setImageData($imageData)
    {
        $this->imageData             = $imageData;
        $this->apiParas["imageData"]  = $imageData;
    }

    public function getImageData()
    {
        return $this->imageData;
    }

    /**
     * @param string $jdUsername
     * 用户名
     * Required: true
     * Example Value: 
     */
    private $jdUsername;

    /**
     * @param string $jdUsername
     * 用户名
     * Example Value: 
     */
    public function setJdUsername($jdUsername)
    {
        $this->jdUsername             = $jdUsername;
        $this->apiParas["jdUsername"]  = $jdUsername;
    }

    public function getJdUsername()
    {
        return $this->jdUsername;
    }

}