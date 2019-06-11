<?php

namespace JD\request;

/**
 * 问题类型关联查询
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2137&apiName=jingdong.asc.audit.reason.list
 * Class AscAuditReasonList
 * @package Jd\request
 */
class AscAuditReasonList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.audit.reason.list";
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
     * @param String $buId
     * 商家编号
     * Required: false
     * Example Value: 
     */
    private $buId;

    /**
     * @param String $buId
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
     * @param String $operatePin
     * 操作人账号
     * Required: false
     * Example Value: 
     */
    private $operatePin;

    /**
     * @param String $operatePin
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
     * @param String $operateNick
     * 操作人姓名
     * Required: false
     * Example Value: 
     */
    private $operateNick;

    /**
     * @param String $operateNick
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
     * @param Number $serviceId
     * 服务单号
     * Required: false
     * Example Value: 
     */
    private $serviceId;

    /**
     * @param Number $serviceId
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
     * @param String $parentCode
     * 父级原因编号
     * Required: false
     * Example Value: 
     */
    private $parentCode;

    /**
     * @param String $parentCode
     * 父级原因编号
     * Example Value: 
     */
    public function setParentCode($parentCode)
    {
        $this->parentCode             = $parentCode;
        $this->apiParas["parentCode"]  = $parentCode;
    }

    public function getParentCode()
    {
        return $this->parentCode;
    }

    /**
     * @param Number $bizType
     * 业务类型（1：审核原因（默认）；2：京东介入原因）
     * Required: false
     * Example Value: 
     */
    private $bizType;

    /**
     * @param Number $bizType
     * 业务类型（1：审核原因（默认）；2：京东介入原因）
     * Example Value: 
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