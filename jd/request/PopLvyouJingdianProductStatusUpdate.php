<?php

namespace JD\request;

/**
 * 更新产品状态
 * 景点门票API-POP虚拟业务,开放景点门票业务API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=131&apiId=778&apiName=jingdong.pop.lvyou.jingdian.product.status.update
 * Class PopLvyouJingdianProductStatusUpdate
 * @package Jd\request
 */
class PopLvyouJingdianProductStatusUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.lvyou.jingdian.product.status.update";
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
     * @param String $supplierProductId
     * 供应商商品ID
     * Required: true
     * Example Value: 
     */
    private $supplierProductId;

    /**
     * @param String $supplierProductId
     * 供应商商品ID
     * Example Value: 
     */
    public function setSupplierProductId($supplierProductId)
    {
        $this->supplierProductId             = $supplierProductId;
        $this->apiParas["supplierProductId"]  = $supplierProductId;
    }

    public function getSupplierProductId()
    {
        return $this->supplierProductId;
    }

    /**
     * @param Number $productStatus
     * 产品状态
     * Required: false
     * Example Value: 
     */
    private $productStatus;

    /**
     * @param Number $productStatus
     * 产品状态
     * Example Value: 
     */
    public function setProductStatus($productStatus)
    {
        $this->productStatus             = $productStatus;
        $this->apiParas["productStatus"]  = $productStatus;
    }

    public function getProductStatus()
    {
        return $this->productStatus;
    }

}