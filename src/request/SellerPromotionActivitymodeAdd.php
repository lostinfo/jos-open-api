<?php

namespca Lostinfo\JosOpenApi;

/**
 * 添加活动规则
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=165&apiName=jingdong.seller.promotion.activitymode.add
 * Class SellerPromotionActivitymodeAdd
 * @package Jd\request
 */
class SellerPromotionActivitymodeAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.activitymode.add";
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

    /**
     * @param int $numBound
     * 参与促销的SKU总数量。默认值为0（不限)，或任意正整数；限时抢购时，该参数必须大于0
     * Required: false
     * Example Value: 10
     */
    private $numBound;

    /**
     * @param int $numBound
     * 参与促销的SKU总数量。默认值为0（不限)，或任意正整数；限时抢购时，该参数必须大于0
     * Example Value: 10
     */
    public function setNumBound($numBound)
    {
        $this->numBound             = $numBound;
        $this->apiParas["num_bound"]  = $numBound;
    }

    public function getNumBound()
    {
        return $this->numBound;
    }

    /**
     * @param int $freqBound
     * 是否限购一个。默认值为0，可选值：0（不限），1（限购一个）；当设置为限购一个时，单次最多可购数量，单次最少可够数量的设置不再起作用，系统默认会设置为1
     * Required: false
     * Example Value: 0
     */
    private $freqBound;

    /**
     * @param int $freqBound
     * 是否限购一个。默认值为0，可选值：0（不限），1（限购一个）；当设置为限购一个时，单次最多可购数量，单次最少可够数量的设置不再起作用，系统默认会设置为1
     * Example Value: 0
     */
    public function setFreqBound($freqBound)
    {
        $this->freqBound             = $freqBound;
        $this->apiParas["freq_bound"]  = $freqBound;
    }

    public function getFreqBound()
    {
        return $this->freqBound;
    }

    /**
     * @param int $perMaxNum
     * 单次最多可购数量，默认值为0（不限），或任意正整数
     * Required: false
     * Example Value: 3
     */
    private $perMaxNum;

    /**
     * @param int $perMaxNum
     * 单次最多可购数量，默认值为0（不限），或任意正整数
     * Example Value: 3
     */
    public function setPerMaxNum($perMaxNum)
    {
        $this->perMaxNum             = $perMaxNum;
        $this->apiParas["per_max_num"]  = $perMaxNum;
    }

    public function getPerMaxNum()
    {
        return $this->perMaxNum;
    }

    /**
     * @param int $perMinNum
     * 单次最少可购数量，默认值为0（不限），或任意正整数。赠品促销时不能大于10
     * Required: false
     * Example Value: 1
     */
    private $perMinNum;

    /**
     * @param int $perMinNum
     * 单次最少可购数量，默认值为0（不限），或任意正整数。赠品促销时不能大于10
     * Example Value: 1
     */
    public function setPerMinNum($perMinNum)
    {
        $this->perMinNum             = $perMinNum;
        $this->apiParas["per_min_num"]  = $perMinNum;
    }

    public function getPerMinNum()
    {
        return $this->perMinNum;
    }

}