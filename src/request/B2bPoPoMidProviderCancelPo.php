<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 取消采购单
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3129&apiName=jingdong.b2b.po.PoMidProvider.cancelPo
 * Class B2bPoPoMidProviderCancelPo
 * @package Jd\request
 */
class B2bPoPoMidProviderCancelPo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.po.PoMidProvider.cancelPo";
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
     * @param int $poSource
     * 采购单来源
     * Required: true
     * Example Value: 
     */
    private $poSource;

    /**
     * @param int $poSource
     * 采购单来源
     * Example Value: 
     */
    public function setPoSource($poSource)
    {
        $this->poSource             = $poSource;
        $this->apiParas["poSource"]  = $poSource;
    }

    public function getPoSource()
    {
        return $this->poSource;
    }

    /**
     * @param string $cancelReason
     * 取消原因
     * Required: true
     * Example Value: 
     */
    private $cancelReason;

    /**
     * @param string $cancelReason
     * 取消原因
     * Example Value: 
     */
    public function setCancelReason($cancelReason)
    {
        $this->cancelReason             = $cancelReason;
        $this->apiParas["cancelReason"]  = $cancelReason;
    }

    public function getCancelReason()
    {
        return $this->cancelReason;
    }

    /**
     * @param int $poId
     * 采购单Id
     * Required: true
     * Example Value: 
     */
    private $poId;

    /**
     * @param int $poId
     * 采购单Id
     * Example Value: 
     */
    public function setPoId($poId)
    {
        $this->poId             = $poId;
        $this->apiParas["poId"]  = $poId;
    }

    public function getPoId()
    {
        return $this->poId;
    }

}