<?php

namespca Lostinfo\JosOpenApi;

/**
 * null
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=213&apiName=jingdong.seller.promotion.check
 * Class SellerPromotionCheck
 * @package Jd\request
 */
class SellerPromotionCheck
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.check";
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
     * Example Value: 654321
     */
    private $promoId;

    /**
     * @param int $promoId
     * 促销编号
     * Example Value: 654321
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

    /**
     * @param int $status
     * 审核状态。1:驳回,4:通过
     * Required: true
     * Example Value: 4
     */
    private $status;

    /**
     * @param int $status
     * 审核状态。1:驳回,4:通过
     * Example Value: 4
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

}