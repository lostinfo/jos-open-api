<?php

namespace JD\request;

/**
 * 店铺分平台成交情况统计
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2726&apiName=jingdong.market.bdp.saleShopSum.query
 * Class MarketBdpSaleShopSumQuery
 * @package Jd\request
 */
class MarketBdpSaleShopSumQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.market.bdp.saleShopSum.query";
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
     * @param String $opTime
     * 日期(格式:yyyyMMdd)
     * Required: true
     * Example Value: 
     */
    private $opTime;

    /**
     * @param String $opTime
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
     * @param String $platformDesc
     * 平台:pc,m,app,wx,sq,zgb(掌柜宝),xpc(pc端小站点)
     * Required: true
     * Example Value: 
     */
    private $platformDesc;

    /**
     * @param String $platformDesc
     * 平台:pc,m,app,wx,sq,zgb(掌柜宝),xpc(pc端小站点)
     * Example Value: 
     */
    public function setPlatformDesc($platformDesc)
    {
        $this->platformDesc             = $platformDesc;
        $this->apiParas["platformDesc"]  = $platformDesc;
    }

    public function getPlatformDesc()
    {
        return $this->platformDesc;
    }

    /**
     * @param String[] $field
     * 字段
     * Required: true
     * Example Value: 
     */
    private $field;

    /**
     * @param String[] $field
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