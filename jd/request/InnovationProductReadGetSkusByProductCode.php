<?php

namespace JD\request;

/**
 * 根据商品编码查对应的商城编码
 * 商品通API-商品通API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=361&apiId=3002&apiName=jingdong.innovation.product.read.getSkusByProductCode
 * Class InnovationProductReadGetSkusByProductCode
 * @package Jd\request
 */
class InnovationProductReadGetSkusByProductCode
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.innovation.product.read.getSkusByProductCode";
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
     * @param Number $businessId
     * 经营主体id
     * Required: true
     * Example Value: 经营主体id
     */
    private $businessId;

    /**
     * @param Number $businessId
     * 经营主体id
     * Example Value: 经营主体id
     */
    public function setBusinessId($businessId)
    {
        $this->businessId             = $businessId;
        $this->apiParas["businessId"]  = $businessId;
    }

    public function getBusinessId()
    {
        return $this->businessId;
    }

    /**
     * @param String $articleNumber
     * 商品编码
     * Required: true
     * Example Value: 商品编码
     */
    private $articleNumber;

    /**
     * @param String $articleNumber
     * 商品编码
     * Example Value: 商品编码
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber             = $articleNumber;
        $this->apiParas["articleNumber"]  = $articleNumber;
    }

    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * @param String $systemNo
     * 系统编号
     * Required: true
     * Example Value: 系统编号
     */
    private $systemNo;

    /**
     * @param String $systemNo
     * 系统编号
     * Example Value: 系统编号
     */
    public function setSystemNo($systemNo)
    {
        $this->systemNo             = $systemNo;
        $this->apiParas["systemNo"]  = $systemNo;
    }

    public function getSystemNo()
    {
        return $this->systemNo;
    }

    /**
     * @param String $bizNo
     * 业务编号
     * Required: false
     * Example Value: 业务编号
     */
    private $bizNo;

    /**
     * @param String $bizNo
     * 业务编号
     * Example Value: 业务编号
     */
    public function setBizNo($bizNo)
    {
        $this->bizNo             = $bizNo;
        $this->apiParas["bizNo"]  = $bizNo;
    }

    public function getBizNo()
    {
        return $this->bizNo;
    }

}