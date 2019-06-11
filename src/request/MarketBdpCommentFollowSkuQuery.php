<?php

namespca Lostinfo\JosOpenApi;

/**
 * sku关注评价咨询信息
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2739&apiName=jingdong.market.bdp.CommentFollowSku.query
 * Class MarketBdpCommentFollowSkuQuery
 * @package Jd\request
 */
class MarketBdpCommentFollowSkuQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.market.bdp.CommentFollowSku.query";
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
     * @param string $skuId
     * sku编号
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param string $skuId
     * sku编号
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
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