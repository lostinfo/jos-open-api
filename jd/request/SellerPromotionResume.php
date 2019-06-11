<?php

namespace JD\request;

/**
 * 重启促销，使暂停的促销重新生效，只能对暂停的促销进行重启操作。
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=217&apiName=jingdong.seller.promotion.resume
 * Class SellerPromotionResume
 * @package Jd\request
 */
class SellerPromotionResume
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.resume";
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
     * Example Value: 123456
     */
    private $promoId;

    /**
     * @param Number $promoId
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