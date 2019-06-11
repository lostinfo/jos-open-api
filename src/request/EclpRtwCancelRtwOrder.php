<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 取消退货入库单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2771&apiName=jingdong.eclp.rtw.cancelRtwOrder
 * Class EclpRtwCancelRtwOrder
 * @package Jd\request
 */
class EclpRtwCancelRtwOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.rtw.cancelRtwOrder";
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
     * @param string $isvRtwNum
     * 商家退货单号(必填)
     * Required: true
     * Example Value: 10000021
     */
    private $isvRtwNum;

    /**
     * @param string $isvRtwNum
     * 商家退货单号(必填)
     * Example Value: 10000021
     */
    public function setIsvRtwNum($isvRtwNum)
    {
        $this->isvRtwNum             = $isvRtwNum;
        $this->apiParas["isvRtwNum"]  = $isvRtwNum;
    }

    public function getIsvRtwNum()
    {
        return $this->isvRtwNum;
    }

    /**
     * @param string $eclpRtwNum
     * 物流开放平台退货入库单号
     * Required: false
     * Example Value: ESR000000001
     */
    private $eclpRtwNum;

    /**
     * @param string $eclpRtwNum
     * 物流开放平台退货入库单号
     * Example Value: ESR000000001
     */
    public function setEclpRtwNum($eclpRtwNum)
    {
        $this->eclpRtwNum             = $eclpRtwNum;
        $this->apiParas["eclpRtwNum"]  = $eclpRtwNum;
    }

    public function getEclpRtwNum()
    {
        return $this->eclpRtwNum;
    }

    /**
     * @param string $cancelReson
     * 取消原因
     * Required: false
     * Example Value: 客户下错单
     */
    private $cancelReson;

    /**
     * @param string $cancelReson
     * 取消原因
     * Example Value: 客户下错单
     */
    public function setCancelReson($cancelReson)
    {
        $this->cancelReson             = $cancelReson;
        $this->apiParas["cancelReson"]  = $cancelReson;
    }

    public function getCancelReson()
    {
        return $this->cancelReson;
    }

    /**
     * @param string $ownerNo
     * 事业部编号(必填)
     * Required: true
     * Example Value: EBU000000001
     */
    private $ownerNo;

    /**
     * @param string $ownerNo
     * 事业部编号(必填)
     * Example Value: EBU000000001
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["ownerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    /**
     * @param  $orderInType
     * 单据类型(1:b2c业务;2:b2b业务)
     * Required: false
     * Example Value: 1
     */
    private $orderInType;

    /**
     * @param  $orderInType
     * 单据类型(1:b2c业务;2:b2b业务)
     * Example Value: 1
     */
    public function setOrderInType($orderInType)
    {
        $this->orderInType             = $orderInType;
        $this->apiParas["orderInType"]  = $orderInType;
    }

    public function getOrderInType()
    {
        return $this->orderInType;
    }

}