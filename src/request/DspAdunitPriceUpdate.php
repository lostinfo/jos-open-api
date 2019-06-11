<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.聚效.修改单元出价
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=875&apiName=jingdong.dsp.adunit.price.update
 * Class DspAdunitPriceUpdate
 * @package Jd\request
 */
class DspAdunitPriceUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adunit.price.update";
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
     * @param int $id
     * 单元id
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 单元id
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $inFee
     * 站内出价
     * Required: true
     * Example Value: 
     */
    private $inFee;

    /**
     * @param int $inFee
     * 站内出价
     * Example Value: 
     */
    public function setInFee($inFee)
    {
        $this->inFee             = $inFee;
        $this->apiParas["inFee"]  = $inFee;
    }

    public function getInFee()
    {
        return $this->inFee;
    }

    /**
     * @param int $outFee
     * 站外出价
     * Required: true
     * Example Value: 
     */
    private $outFee;

    /**
     * @param int $outFee
     * 站外出价
     * Example Value: 
     */
    public function setOutFee($outFee)
    {
        $this->outFee             = $outFee;
        $this->apiParas["outFee"]  = $outFee;
    }

    public function getOutFee()
    {
        return $this->outFee;
    }

    /**
     * @param int $adxFee
     * 第三方联盟出价
     * Required: true
     * Example Value: 
     */
    private $adxFee;

    /**
     * @param int $adxFee
     * 第三方联盟出价
     * Example Value: 
     */
    public function setAdxFee($adxFee)
    {
        $this->adxFee             = $adxFee;
        $this->apiParas["adxFee"]  = $adxFee;
    }

    public function getAdxFee()
    {
        return $this->adxFee;
    }

}