<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据商品和序列号查询流水
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1684&apiName=jingdong.eclp.serial.querySerialBySkuAndSerial
 * Class EclpSerialQuerySerialBySkuAndSerial
 * @package Jd\request
 */
class EclpSerialQuerySerialBySkuAndSerial
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.serial.querySerialBySkuAndSerial";
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
     * @param string $goodsNo
     * 商品编号，以EMG开头，最大长度50
     * Required: true
     * Example Value: EMG44180505356
     */
    private $goodsNo;

    /**
     * @param string $goodsNo
     * 商品编号，以EMG开头，最大长度50
     * Example Value: EMG44180505356
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goodsNo"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param string $goodsSID
     * 商品序列号，最大长度50
     * Required: true
     * Example Value: BF182N04978
     */
    private $goodsSID;

    /**
     * @param string $goodsSID
     * 商品序列号，最大长度50
     * Example Value: BF182N04978
     */
    public function setGoodsSID($goodsSID)
    {
        $this->goodsSID             = $goodsSID;
        $this->apiParas["goodsSID"]  = $goodsSID;
    }

    public function getGoodsSID()
    {
        return $this->goodsSID;
    }

    /**
     * @param  $queryType
     * 查询类型 1：中小件，2：大件，不填则默认查中小件
     * Required: false
     * Example Value: 2
     */
    private $queryType;

    /**
     * @param  $queryType
     * 查询类型 1：中小件，2：大件，不填则默认查中小件
     * Example Value: 2
     */
    public function setQueryType($queryType)
    {
        $this->queryType             = $queryType;
        $this->apiParas["queryType"]  = $queryType;
    }

    public function getQueryType()
    {
        return $this->queryType;
    }

}