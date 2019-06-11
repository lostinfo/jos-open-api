<?php

namespca Lostinfo\JosOpenApi;

/**
 * 申请京东介入
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2108&apiName=jingdong.asc.process.JdIntervene
 * Class AscProcessJdIntervene
 * @package Jd\request
 */
class AscProcessJdIntervene
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.process.JdIntervene";
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
     * @param string $buId
     * 商家编号
     * Required: false
     * Example Value: 
     */
    private $buId;

    /**
     * @param string $buId
     * 商家编号
     * Example Value: 
     */
    public function setBuId($buId)
    {
        $this->buId             = $buId;
        $this->apiParas["buId"]  = $buId;
    }

    public function getBuId()
    {
        return $this->buId;
    }

    /**
     * @param string $operatePin
     * 操作人账号
     * Required: false
     * Example Value: 
     */
    private $operatePin;

    /**
     * @param string $operatePin
     * 操作人账号
     * Example Value: 
     */
    public function setOperatePin($operatePin)
    {
        $this->operatePin             = $operatePin;
        $this->apiParas["operatePin"]  = $operatePin;
    }

    public function getOperatePin()
    {
        return $this->operatePin;
    }

    /**
     * @param string $operateNick
     * 操作人姓名
     * Required: true
     * Example Value: 
     */
    private $operateNick;

    /**
     * @param string $operateNick
     * 操作人姓名
     * Example Value: 
     */
    public function setOperateNick($operateNick)
    {
        $this->operateNick             = $operateNick;
        $this->apiParas["operateNick"]  = $operateNick;
    }

    public function getOperateNick()
    {
        return $this->operateNick;
    }

    /**
     * @param int $serviceId
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $serviceId;

    /**
     * @param int $serviceId
     * 服务单号
     * Example Value: 
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId             = $serviceId;
        $this->apiParas["serviceId"]  = $serviceId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param int $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单号
     * Example Value: 
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $sysVersion
     * 服务单版本号
     * Required: true
     * Example Value: 
     */
    private $sysVersion;

    /**
     * @param int $sysVersion
     * 服务单版本号
     * Example Value: 
     */
    public function setSysVersion($sysVersion)
    {
        $this->sysVersion             = $sysVersion;
        $this->apiParas["sysVersion"]  = $sysVersion;
    }

    public function getSysVersion()
    {
        return $this->sysVersion;
    }

    /**
     * @param int $interveneReasonCid1
     * 一级原因Id
     * Required: true
     * Example Value: 
     */
    private $interveneReasonCid1;

    /**
     * @param int $interveneReasonCid1
     * 一级原因Id
     * Example Value: 
     */
    public function setInterveneReasonCid1($interveneReasonCid1)
    {
        $this->interveneReasonCid1             = $interveneReasonCid1;
        $this->apiParas["interveneReasonCid1"]  = $interveneReasonCid1;
    }

    public function getInterveneReasonCid1()
    {
        return $this->interveneReasonCid1;
    }

    /**
     * @param int $interveneReasonCid2
     * 二级原因Id
     * Required: true
     * Example Value: 
     */
    private $interveneReasonCid2;

    /**
     * @param int $interveneReasonCid2
     * 二级原因Id
     * Example Value: 
     */
    public function setInterveneReasonCid2($interveneReasonCid2)
    {
        $this->interveneReasonCid2             = $interveneReasonCid2;
        $this->apiParas["interveneReasonCid2"]  = $interveneReasonCid2;
    }

    public function getInterveneReasonCid2()
    {
        return $this->interveneReasonCid2;
    }

    /**
     * @param string $contactTel
     * 联系电话
     * Required: true
     * Example Value: 
     */
    private $contactTel;

    /**
     * @param string $contactTel
     * 联系电话
     * Example Value: 
     */
    public function setContactTel($contactTel)
    {
        $this->contactTel             = $contactTel;
        $this->apiParas["contactTel"]  = $contactTel;
    }

    public function getContactTel()
    {
        return $this->contactTel;
    }

    /**
     * @param string $extJsonStr
     * 扩展条件
     * Required: false
     * Example Value: 
     */
    private $extJsonStr;

    /**
     * @param string $extJsonStr
     * 扩展条件
     * Example Value: 
     */
    public function setExtJsonStr($extJsonStr)
    {
        $this->extJsonStr             = $extJsonStr;
        $this->apiParas["extJsonStr"]  = $extJsonStr;
    }

    public function getExtJsonStr()
    {
        return $this->extJsonStr;
    }

}