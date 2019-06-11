<?php

namespca Lostinfo\JosOpenApi;

/**
 * 商家热销商品销售排行
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2731&apiName=jingdong.market.bdp.saleVenderSkuRank.query
 * Class MarketBdpSaleVenderSkuRankQuery
 * @package Jd\request
 */
class MarketBdpSaleVenderSkuRankQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.market.bdp.saleVenderSkuRank.query";
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
     * @param string $opTime
     * 日期(格式:yyyyMMdd)
     * Required: true
     * Example Value: 
     */
    private $opTime;

    /**
     * @param string $opTime
     * 日期(格式:yyyyMMdd)
     * Example Value: 
     */
    public function setOpTime($opTime)
    {
        $this->opTime             = $opTime;
        $this->apiParas["opTime"]  = $opTime;
    }

    public function getOpTime()
    {
        return $this->opTime;
    }

    /**
     * @param string $tp
     * 1为销售数量,2为销售金额
     * Required: true
     * Example Value: 
     */
    private $tp;

    /**
     * @param string $tp
     * 1为销售数量,2为销售金额
     * Example Value: 
     */
    public function setTp($tp)
    {
        $this->tp             = $tp;
        $this->apiParas["tp"]  = $tp;
    }

    public function getTp()
    {
        return $this->tp;
    }

    /**
     * @param string[] $field
     * 字段
     * Required: true
     * Example Value: 
     */
    private $field;

    /**
     * @param string[] $field
     * 字段
     * Example Value: 
     */
    public function setField($field)
    {
        $this->field             = $field;
        $this->apiParas["field"]  = $field;
    }

    public function getField()
    {
        return $this->field;
    }

}