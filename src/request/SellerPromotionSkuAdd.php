<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 添加参加促销的sku
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=188&apiName=jingdong.seller.promotion.sku.add
 * Class SellerPromotionSkuAdd
 * @package Jd\request
 */
class SellerPromotionSkuAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.sku.add";
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
     * @param int[] $skuId
     * SKU编号
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int[] $skuId
     * SKU编号
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_ids"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param string[] $jdPrice
     * 京东价，以元为单位，最高可精确到小数点后两位
     * Required: true
     * Example Value: 20.0
     */
    private $jdPrice;

    /**
     * @param string[] $jdPrice
     * 京东价，以元为单位，最高可精确到小数点后两位
     * Example Value: 20.0
     */
    public function setJdPrice($jdPrice)
    {
        $this->jdPrice             = $jdPrice;
        $this->apiParas["jd_prices"]  = $jdPrice;
    }

    public function getJdPrice()
    {
        return $this->jdPrice;
    }

    /**
     * @param string[] $promoPrice
     * 促销价，以元为单位，精确到小数点后一位，且必须小于京东价。
     * Required: false
     * Example Value: 18.9
     */
    private $promoPrice;

    /**
     * @param string[] $promoPrice
     * 促销价，以元为单位，精确到小数点后一位，且必须小于京东价。
     * Example Value: 18.9
     */
    public function setPromoPrice($promoPrice)
    {
        $this->promoPrice             = $promoPrice;
        $this->apiParas["promo_prices"]  = $promoPrice;
    }

    public function getPromoPrice()
    {
        return $this->promoPrice;
    }

    /**
     * @param int[] $seq
     * 套装商品展示次序，相同商品的SKU上次序必须一致，次序必须是1到7之间的自然数。（只对套装促销有效） 
     * Required: false
     * Example Value: 1,2,3,4 或3,1,2,4
     */
    private $seq;

    /**
     * @param int[] $seq
     * 套装商品展示次序，相同商品的SKU上次序必须一致，次序必须是1到7之间的自然数。（只对套装促销有效） 
     * Example Value: 1,2,3,4 或3,1,2,4
     */
    public function setSeq($seq)
    {
        $this->seq             = $seq;
        $this->apiParas["seq"]  = $seq;
    }

    public function getSeq()
    {
        return $this->seq;
    }

    /**
     * @param int[] $num
     * 赠品赠送数量，只能送1-3个。(只对赠品促销有效)
     * Required: false
     * Example Value: 
     */
    private $num;

    /**
     * @param int[] $num
     * 赠品赠送数量，只能送1-3个。(只对赠品促销有效)
     * Example Value: 
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
     * @param int[] $bindType
     * 绑定类型, 可选值：主商品（1），赠品（2）。(赠品促销、满减送促销中的赠品需要设置为2，其余均设置为1)
     * Required: false
     * Example Value: 1（此字段为必填）
     */
    private $bindType;

    /**
     * @param int[] $bindType
     * 绑定类型, 可选值：主商品（1），赠品（2）。(赠品促销、满减送促销中的赠品需要设置为2，其余均设置为1)
     * Example Value: 1（此字段为必填）
     */
    public function setBindType($bindType)
    {
        $this->bindType             = $bindType;
        $this->apiParas["bind_type"]  = $bindType;
    }

    public function getBindType()
    {
        return $this->bindType;
    }

}