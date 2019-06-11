<?php

namespace JD\request;

/**
 * 退货入库单查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=956&apiName=jingdong.eclp.rtw.queryRtw
 * Class EclpRtwQueryRtw
 * @package Jd\request
 */
class EclpRtwQueryRtw
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.rtw.queryRtw";
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
     * @param String $orderNum
     * 物流开放平台出库单号(出库单号与订单号只能填一个)，ESL开头，最大长度：50
     * Required: false
     * Example Value: ESL00000000001
     */
    private $orderNum;

    /**
     * @param String $orderNum
     * 物流开放平台出库单号(出库单号与订单号只能填一个)，ESL开头，最大长度：50
     * Example Value: ESL00000000001
     */
    public function setOrderNum($orderNum)
    {
        $this->orderNum             = $orderNum;
        $this->apiParas["eclpSoNo"]  = $orderNum;
    }

    public function getOrderNum()
    {
        return $this->orderNum;
    }

    /**
     * @param String $rtwNum
     * 物流开放平台退货入库单号(出库单号与订单号只能填一个)，ESR/EBR开头，最大长度：50
     * Required: false
     * Example Value: ESR00000000001/EBR00000000001
     */
    private $rtwNum;

    /**
     * @param String $rtwNum
     * 物流开放平台退货入库单号(出库单号与订单号只能填一个)，ESR/EBR开头，最大长度：50
     * Example Value: ESR00000000001/EBR00000000001
     */
    public function setRtwNum($rtwNum)
    {
        $this->rtwNum             = $rtwNum;
        $this->apiParas["eclpRtwNo"]  = $rtwNum;
    }

    public function getRtwNum()
    {
        return $this->rtwNum;
    }

    /**
     * @param String $isvRtwNum
     * ISV退货入库单号，最大长度：50
     * Required: false
     * Example Value: 01s8fy619870
     */
    private $isvRtwNum;

    /**
     * @param String $isvRtwNum
     * ISV退货入库单号，最大长度：50
     * Example Value: 01s8fy619870
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
     * @param String $warehouseNo
     * 物流开放平台库房编号，11开头，最大长度：50
     * Required: false
     * Example Value: 1100002384
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 物流开放平台库房编号，11开头，最大长度：50
     * Example Value: 1100002384
     */
    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo             = $warehouseNo;
        $this->apiParas["warehouseNo"]  = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    /**
     * @param String $reson
     * 退货入库原因，最大长度：400
     * Required: false
     * Example Value: 客户下错单
     */
    private $reson;

    /**
     * @param String $reson
     * 退货入库原因，最大长度：400
     * Example Value: 客户下错单
     */
    public function setReson($reson)
    {
        $this->reson             = $reson;
        $this->apiParas["reson"]  = $reson;
    }

    public function getReson()
    {
        return $this->reson;
    }

    /**
     * @param  $orderInType
     * 单据类型，1:b2c；2:b2b，最大长度：1
     * Required: false
     * Example Value: 1
     */
    private $orderInType;

    /**
     * @param  $orderInType
     * 单据类型，1:b2c；2:b2b，最大长度：1
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

    /**
     * @param Boolean $queryBatAttrFlag
     * 是否查询批次信息，true:查询批次信息；false:不查询批次信息；默认不查询，最大长度：10
     * Required: false
     * Example Value: false
     */
    private $queryBatAttrFlag;

    /**
     * @param Boolean $queryBatAttrFlag
     * 是否查询批次信息，true:查询批次信息；false:不查询批次信息；默认不查询，最大长度：10
     * Example Value: false
     */
    public function setQueryBatAttrFlag($queryBatAttrFlag)
    {
        $this->queryBatAttrFlag             = $queryBatAttrFlag;
        $this->apiParas["queryBatAttrFlag"]  = $queryBatAttrFlag;
    }

    public function getQueryBatAttrFlag()
    {
        return $this->queryBatAttrFlag;
    }

}