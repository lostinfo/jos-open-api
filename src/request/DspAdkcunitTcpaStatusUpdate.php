<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 修改TCPA出价
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=3559&apiName=jingdong.dsp.adkcunit.tcpa.status.update
 * Class DspAdkcunitTcpaStatusUpdate
 * @package Jd\request
 */
class DspAdkcunitTcpaStatusUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkcunit.tcpa.status.update";
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
     * @param int $adGroupId
     * 单元id
     * Required: true
     * Example Value: 1
     */
    private $adGroupId;

    /**
     * @param int $adGroupId
     * 单元id
     * Example Value: 1
     */
    public function setAdGroupId($adGroupId)
    {
        $this->adGroupId             = $adGroupId;
        $this->apiParas["adGroupId"]  = $adGroupId;
    }

    public function getAdGroupId()
    {
        return $this->adGroupId;
    }

    /**
     * @param string $tcpaBidStr
     * tCPA出价
     * Required: true
     * Example Value: 100
     */
    private $tcpaBidStr;

    /**
     * @param string $tcpaBidStr
     * tCPA出价
     * Example Value: 100
     */
    public function setTcpaBidStr($tcpaBidStr)
    {
        $this->tcpaBidStr             = $tcpaBidStr;
        $this->apiParas["tcpaBidStr"]  = $tcpaBidStr;
    }

    public function getTcpaBidStr()
    {
        return $this->tcpaBidStr;
    }

    /**
     * @param int $automatedBiddingType
     * 是否开启tCPA出价，0：不开启，1：开启
     * Required: true
     * Example Value: 1
     */
    private $automatedBiddingType;

    /**
     * @param int $automatedBiddingType
     * 是否开启tCPA出价，0：不开启，1：开启
     * Example Value: 1
     */
    public function setAutomatedBiddingType($automatedBiddingType)
    {
        $this->automatedBiddingType             = $automatedBiddingType;
        $this->apiParas["automatedBiddingType"]  = $automatedBiddingType;
    }

    public function getAutomatedBiddingType()
    {
        return $this->automatedBiddingType;
    }

}