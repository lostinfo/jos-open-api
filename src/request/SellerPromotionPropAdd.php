<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 添加促销道具
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=185&apiName=jingdong.seller.promotion.prop.add
 * Class SellerPromotionPropAdd
 * @package Jd\request
 */
class SellerPromotionPropAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.prop.add";
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
        $this->apiParas["#promo_id"]  = $promoId;
    }

    public function getPromoId()
    {
        return $this->promoId;
    }

    /**
     * @param int[] $type
     * 道具类型，可选值：京豆（2）
     * Required: true
     * Example Value: 2
     */
    private $type;

    /**
     * @param int[] $type
     * 道具类型，可选值：京豆（2）
     * Example Value: 2
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int[] $num
     * 道具数值，必须为10的倍数，比如类型是京券，则表示多少元
     * Required: true
     * Example Value: 20
     */
    private $num;

    /**
     * @param int[] $num
     * 道具数值，必须为10的倍数，比如类型是京券，则表示多少元
     * Example Value: 20
     */
    public function setNum($num)
    {
        $this->num             = $num;
        $this->apiParas["num"]  = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param int[] $usedWay
     * 道具使用方式，可选值：消耗（0），奖励（2）。比如，a.使用方式是消耗，则表示促销需要用户使用一定京豆才能生效；b.使用方式是奖励，则表示促销会奖励用户一定的京豆
     * Required: true
     * Example Value: 2
     */
    private $usedWay;

    /**
     * @param int[] $usedWay
     * 道具使用方式，可选值：消耗（0），奖励（2）。比如，a.使用方式是消耗，则表示促销需要用户使用一定京豆才能生效；b.使用方式是奖励，则表示促销会奖励用户一定的京豆
     * Example Value: 2
     */
    public function setUsedWay($usedWay)
    {
        $this->usedWay             = $usedWay;
        $this->apiParas["used_way"]  = $usedWay;
    }

    public function getUsedWay()
    {
        return $this->usedWay;
    }

}