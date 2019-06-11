<?php

namespace JD\request;

/**
 * 商家参加促销活动累加汇总
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2734&apiName=jingdong.market.bdp.promoActivityDa.query
 * Class MarketBdpPromoActivityDaQuery
 * @package Jd\request
 */
class MarketBdpPromoActivityDaQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.market.bdp.promoActivityDa.query";
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
     * @param Number $id
     * 促销编号
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number $id
     * 促销编号
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
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