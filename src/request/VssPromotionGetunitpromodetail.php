<?php

namespace JD\request;

/**
 * 获取单品促销详情信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1793&apiName=jingdong.vss.promotion.getunitpromodetail
 * Class VssPromotionGetunitpromodetail
 * @package Jd\request
 */
class VssPromotionGetunitpromodetail
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vss.promotion.getunitpromodetail";
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
     * @param Number $promoId
     * 促销编号
     * Required: true
     * Example Value: 
     */
    private $promoId;

    /**
     * @param Number $promoId
     * 促销编号
     * Example Value: 
     */
    public function setPromoId($promoId)
    {
        $this->promoId             = $promoId;
        $this->apiParas["promo_id"]  = $promoId;
    }

    public function getPromoId()
    {
        return $this->promoId;
    }

}