<?php

namespace JD\request;

/**
 * 调划线价接口
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=2939&apiName=jingdong.promotion.updateLineationPrice
 * Class PromotionUpdateLineationPrice
 * @package Jd\request
 */
class PromotionUpdateLineationPrice
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.promotion.updateLineationPrice";
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
     * @param Number $skuId
     * sku编号
     * Required: true
     * Example Value: 752731
     */
    private $skuId;

    /**
     * @param Number $skuId
     * sku编号
     * Example Value: 752731
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
     * @param Number $lineationPrice
     * 新划线价
     * Required: false
     * Example Value: 999999
     */
    private $lineationPrice;

    /**
     * @param Number $lineationPrice
     * 新划线价
     * Example Value: 999999
     */
    public function setLineationPrice($lineationPrice)
    {
        $this->lineationPrice             = $lineationPrice;
        $this->apiParas["lineationPrice"]  = $lineationPrice;
    }

    public function getLineationPrice()
    {
        return $this->lineationPrice;
    }

    /**
     * @param String $applicant
     * 申请人
     * Required: true
     * Example Value: vip_wangkai
     */
    private $applicant;

    /**
     * @param String $applicant
     * 申请人
     * Example Value: vip_wangkai
     */
    public function setApplicant($applicant)
    {
        $this->applicant             = $applicant;
        $this->apiParas["applicant"]  = $applicant;
    }

    public function getApplicant()
    {
        return $this->applicant;
    }

}