<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据商品和批量序列号查询序列号最终状态
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1683&apiName=jingdong.eclp.serial.queryBatchSerialBySku
 * Class EclpSerialQueryBatchSerialBySku
 * @package Jd\request
 */
class EclpSerialQueryBatchSerialBySku
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.serial.queryBatchSerialBySku";
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
     * Example Value: EMG44180505367
     */
    private $goodsNo;

    /**
     * @param string $goodsNo
     * 商品编号，以EMG开头，最大长度50
     * Example Value: EMG44180505367
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
     * @param string[] $goodsSIDs
     * 序列号列表，单个序列号最大长度50，列表最大长度50
     * Required: true
     * Example Value: [“BF182N0xxx”,” BF182N0xxx”]
     */
    private $goodsSIDs;

    /**
     * @param string[] $goodsSIDs
     * 序列号列表，单个序列号最大长度50，列表最大长度50
     * Example Value: [“BF182N0xxx”,” BF182N0xxx”]
     */
    public function setGoodsSIDs($goodsSIDs)
    {
        $this->goodsSIDs             = $goodsSIDs;
        $this->apiParas["goodsSIDs"]  = $goodsSIDs;
    }

    public function getGoodsSIDs()
    {
        return $this->goodsSIDs;
    }

    /**
     * @param  $queryType
     * 查询类型 1：中小件，2：大件，不填默认查中小件
     * Required: false
     * Example Value: 1
     */
    private $queryType;

    /**
     * @param  $queryType
     * 查询类型 1：中小件，2：大件，不填默认查中小件
     * Example Value: 1
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