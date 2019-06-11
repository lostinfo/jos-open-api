<?php

namespca Lostinfo\JosOpenApi;

/**
 * 添加订单规则
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=268&apiName=jingdong.seller.promotion.ordermode.add
 * Class SellerPromotionOrdermodeAdd
 * @package Jd\request
 */
class SellerPromotionOrdermodeAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.ordermode.add";
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
     * Example Value: 21113
     */
    private $promoId;

    /**
     * @param int $promoId
     * 促销编号
     * Example Value: 21113
     */
    public function setPromoId($promoId)
    {
        $this->promoId             = $promoId;
        $this->apiParas["#promo_id"]  = $promoId;
    }

    public function getPromoId()
    {
        return $this->promoId;
    }

    /**
     * @param int $favorMode
     * 订单规则类型，可选值：满赠（0），满减（1），每满减（2），满赠加价购（5），满M件减N件（6），阶梯买M件减N件（7），M元任选N件（13），M件N折（15），满减送（元）（16），满减送（件）（17）
     * Required: true
     * Example Value: 16
     */
    private $favorMode;

    /**
     * @param int $favorMode
     * 订单规则类型，可选值：满赠（0），满减（1），每满减（2），满赠加价购（5），满M件减N件（6），阶梯买M件减N件（7），M元任选N件（13），M件N折（15），满减送（元）（16），满减送（件）（17）
     * Example Value: 16
     */
    public function setFavorMode($favorMode)
    {
        $this->favorMode             = $favorMode;
        $this->apiParas["#favor_mode"]  = $favorMode;
    }

    public function getFavorMode()
    {
        return $this->favorMode;
    }

    /**
     * @param int[] $quota
     * 订单额度；（满M件减N件或M件N折时为M的值，单位件，只支持正整数；M元任选N件时为M的值，单位元，支持小数点后一位，例：9.9元；满减送时为订单满金额，单位元，只支持正整数；）
     * Required: true
     * Example Value: 100
     */
    private $quota;

    /**
     * @param int[] $quota
     * 订单额度；（满M件减N件或M件N折时为M的值，单位件，只支持正整数；M元任选N件时为M的值，单位元，支持小数点后一位，例：9.9元；满减送时为订单满金额，单位元，只支持正整数；）
     * Example Value: 100
     */
    public function setQuota($quota)
    {
        $this->quota             = $quota;
        $this->apiParas["quota"]  = $quota;
    }

    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * @param int[] $rate
     * 优惠力度；（满M件减N件、M元任选N件时为N的值，单位件,只支持正整数；M件N折时为N的值，单位折，支持小数点后一位，例：8.5折；满减送不支持此字段，除满减送之外其它促销为必填项）
     * Required: false
     * Example Value: 10
     */
    private $rate;

    /**
     * @param int[] $rate
     * 优惠力度；（满M件减N件、M元任选N件时为N的值，单位件,只支持正整数；M件N折时为N的值，单位折，支持小数点后一位，例：8.5折；满减送不支持此字段，除满减送之外其它促销为必填项）
     * Example Value: 10
     */
    public function setRate($rate)
    {
        $this->rate             = $rate;
        $this->apiParas["rate"]  = $rate;
    }

    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param int[] $plus
     * 加价金额，只支持正整数；（只满减送有效，且为可选项，该字段设置了值，必须送赠品）
     * Required: false
     * Example Value: 10
     */
    private $plus;

    /**
     * @param int[] $plus
     * 加价金额，只支持正整数；（只满减送有效，且为可选项，该字段设置了值，必须送赠品）
     * Example Value: 10
     */
    public function setPlus($plus)
    {
        $this->plus             = $plus;
        $this->apiParas["plus"]  = $plus;
    }

    public function getPlus()
    {
        return $this->plus;
    }

    /**
     * @param int[] $minus
     * 减金额，只支持正整数；（只满减送有效，且为可选项）
     * Required: false
     * Example Value: 10
     */
    private $minus;

    /**
     * @param int[] $minus
     * 减金额，只支持正整数；（只满减送有效，且为可选项）
     * Example Value: 10
     */
    public function setMinus($minus)
    {
        $this->minus             = $minus;
        $this->apiParas["minus"]  = $minus;
    }

    public function getMinus()
    {
        return $this->minus;
    }

    /**
     * @param string $link
     * 店铺活动链接地址
     * Required: false
     * Example Value: http://mall.jd.com/test-1234.html
     */
    private $link;

    /**
     * @param string $link
     * 店铺活动链接地址
     * Example Value: http://mall.jd.com/test-1234.html
     */
    public function setLink($link)
    {
        $this->link             = $link;
        $this->apiParas["#link"]  = $link;
    }

    public function getLink()
    {
        return $this->link;
    }

}