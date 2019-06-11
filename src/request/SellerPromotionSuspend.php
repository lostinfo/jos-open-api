<?php

namespca Lostinfo\JosOpenApi;

/**
 * 暂停促销，使促销暂不生效，只能对已生效的促销进行暂停
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=215&apiName=jingdong.seller.promotion.suspend
 * Class SellerPromotionSuspend
 * @package Jd\request
 */
class SellerPromotionSuspend
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.suspend";
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