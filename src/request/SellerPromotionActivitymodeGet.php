<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据促销编号获取促销的活动规则
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=233&apiName=jingdong.seller.promotion.activitymode.get
 * Class SellerPromotionActivitymodeGet
 * @package Jd\request
 */
class SellerPromotionActivitymodeGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.activitymode.get";
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
     * @param int $promoId
     * 促销编号
     * Required: true
     * Example Value: 123456
     */
    private $promoId;

    /**
     * @param int $promoId
     * 促销编号
     * Example Value: 123456
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