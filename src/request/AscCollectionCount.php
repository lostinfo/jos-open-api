<?php

namespace JD\request;

/**
 * 查询闪电催收列表数目
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2107&apiName=jingdong.asc.collection.count
 * Class AscCollectionCount
 * @package Jd\request
 */
class AscCollectionCount
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.collection.count";
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
     * Required: true
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
     * Required: true
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
     * Required: true
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
     * @param Boolean $jdIntervention
     * 京东介入
     * Required: false
     * Example Value: 
     */
    private $jdIntervention;

    /**
     * @param Boolean $jdIntervention
     * 京东介入
     * Example Value: 
     */
    public function setJdIntervention($jdIntervention)
    {
        $this->jdIntervention             = $jdIntervention;
        $this->apiParas["jdInterveneFlag"]  = $jdIntervention;
    }

    public function getJdIntervention()
    {
        return $this->jdIntervention;
    }

    /**
     * @param Number $balanceFlag
     * 结算标识
     * Required: false
     * Example Value: 
     */
    private $balanceFlag;

    /**
     * @param Number $balanceFlag
     * 结算标识
     * Example Value: 
     */
    public function setBalanceFlag($balanceFlag)
    {
        $this->balanceFlag             = $balanceFlag;
        $this->apiParas["balanceFlag"]  = $balanceFlag;
    }

    public function getBalanceFlag()
    {
        return $this->balanceFlag;
    }

    /**
     * @param Date $applyTimeBegin
     * 服务单申请开始时间
     * Required: false
     * Example Value: 
     */
    private $applyTimeBegin;

    /**
     * @param Date $applyTimeBegin
     * 服务单申请开始时间
     * Example Value: 
     */
    public function setApplyTimeBegin($applyTimeBegin)
    {
        $this->applyTimeBegin             = $applyTimeBegin;
        $this->apiParas["applyTimeBegin"]  = $applyTimeBegin;
    }

    public function getApplyTimeBegin()
    {
        return $this->applyTimeBegin;
    }

    /**
     * @param Date $applyTimeEnd
     * 服务单申请截止时间
     * Required: false
     * Example Value: 
     */
    private $applyTimeEnd;

    /**
     * @param Date $applyTimeEnd
     * 服务单申请截止时间
     * Example Value: 
     */
    public function setApplyTimeEnd($applyTimeEnd)
    {
        $this->applyTimeEnd             = $applyTimeEnd;
        $this->apiParas["applyTimeEnd"]  = $applyTimeEnd;
    }

    public function getApplyTimeEnd()
    {
        return $this->applyTimeEnd;
    }

    /**
     * @param String $extJsonStr
     * 扩展条件
     * Required: false
     * Example Value: 
     */
    private $extJsonStr;

    /**
     * @param String $extJsonStr
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