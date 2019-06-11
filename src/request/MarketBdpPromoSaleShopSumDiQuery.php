<?php

namespca Lostinfo\JosOpenApi;

/**
 * 分平台促销销售店铺汇总
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2735&apiName=jingdong.market.bdp.promoSaleShopSumDi.query
 * Class MarketBdpPromoSaleShopSumDiQuery
 * @package Jd\request
 */
class MarketBdpPromoSaleShopSumDiQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.market.bdp.promoSaleShopSumDi.query";
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
     * @param string $dt
     * 日期(格式:yyyyMMdd)
     * Required: true
     * Example Value: 
     */
    private $dt;

    /**
     * @param string $dt
     * 日期(格式:yyyyMMdd)
     * Example Value: 
     */
    public function setDt($dt)
    {
        $this->dt             = $dt;
        $this->apiParas["dt"]  = $dt;
    }

    public function getDt()
    {
        return $this->dt;
    }

    /**
     * @param string $platform
     * 平台:pc,m,app,wx,sq,zgb(掌柜宝),xpc(pc端小站点)
     * Required: true
     * Example Value: 
     */
    private $platform;

    /**
     * @param string $platform
     * 平台:pc,m,app,wx,sq,zgb(掌柜宝),xpc(pc端小站点)
     * Example Value: 
     */
    public function setPlatform($platform)
    {
        $this->platform             = $platform;
        $this->apiParas["platform"]  = $platform;
    }

    public function getPlatform()
    {
        return $this->platform;
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