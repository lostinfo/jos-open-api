<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 审核领取
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2457&apiName=jingdong.asc.audit.fetch
 * Class AscAuditFetch
 * @package Jd\request
 */
class AscAuditFetch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.audit.fetch";
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
     * Required: true
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
     * Required: true
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
     * @param int $fetchNum
     * 领取数量
     * Required: false
     * Example Value: 
     */
    private $fetchNum;

    /**
     * @param int $fetchNum
     * 领取数量
     * Example Value: 
     */
    public function setFetchNum($fetchNum)
    {
        $this->fetchNum             = $fetchNum;
        $this->apiParas["fetchNum"]  = $fetchNum;
    }

    public function getFetchNum()
    {
        return $this->fetchNum;
    }

}