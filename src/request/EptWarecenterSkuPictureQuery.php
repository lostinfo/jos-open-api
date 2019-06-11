<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询SKU图片
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=914&apiName=jingdong.ept.warecenter.skuPicture.query
 * Class EptWarecenterSkuPictureQuery
 * @package Jd\request
 */
class EptWarecenterSkuPictureQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.warecenter.skuPicture.query";
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
     * @param int $wareId
     * 商品ID
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品ID
     * Example Value: 
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param int $attrValueId
     * 销售属性值ID
     * Required: true
     * Example Value: 
     */
    private $attrValueId;

    /**
     * @param int $attrValueId
     * 销售属性值ID
     * Example Value: 
     */
    public function setAttrValueId($attrValueId)
    {
        $this->attrValueId             = $attrValueId;
        $this->apiParas["attrValueId"]  = $attrValueId;
    }

    public function getAttrValueId()
    {
        return $this->attrValueId;
    }

}