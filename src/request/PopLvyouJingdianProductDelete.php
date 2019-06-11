<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 删除商品
 * 景点门票API-POP虚拟业务,开放景点门票业务API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=131&apiId=784&apiName=jingdong.pop.lvyou.jingdian.product.delete
 * Class PopLvyouJingdianProductDelete
 * @package Jd\request
 */
class PopLvyouJingdianProductDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.lvyou.jingdian.product.delete";
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
     * @param string $supplierProductId
     * 供应商商品ID
     * Required: true
     * Example Value: 
     */
    private $supplierProductId;

    /**
     * @param string $supplierProductId
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

}