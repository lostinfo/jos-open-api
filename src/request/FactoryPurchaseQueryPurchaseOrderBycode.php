<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询采购单
 * 生鲜加工中心API-生鲜接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=257&apiId=3176&apiName=jingdong.factory.purchase.queryPurchaseOrderBycode
 * Class FactoryPurchaseQueryPurchaseOrderBycode
 * @package Jd\request
 */
class FactoryPurchaseQueryPurchaseOrderBycode
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.factory.purchase.queryPurchaseOrderBycode";
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
     * @param int $factoryId
     * 工厂id
     * Required: true
     * Example Value: 0
     */
    private $factoryId;

    /**
     * @param int $factoryId
     * 工厂id
     * Example Value: 0
     */
    public function setFactoryId($factoryId)
    {
        $this->factoryId             = $factoryId;
        $this->apiParas["factoryId"]  = $factoryId;
    }

    public function getFactoryId()
    {
        return $this->factoryId;
    }

    /**
     * @param string $personalKey
     * 个人Key
     * Required: true
     * Example Value: 0
     */
    private $personalKey;

    /**
     * @param string $personalKey
     * 个人Key
     * Example Value: 0
     */
    public function setPersonalKey($personalKey)
    {
        $this->personalKey             = $personalKey;
        $this->apiParas["personalKey"]  = $personalKey;
    }

    public function getPersonalKey()
    {
        return $this->personalKey;
    }

    /**
     * @param int $ptId
     * 租户关联Id
     * Required: true
     * Example Value: 0
     */
    private $ptId;

    /**
     * @param int $ptId
     * 租户关联Id
     * Example Value: 0
     */
    public function setPtId($ptId)
    {
        $this->ptId             = $ptId;
        $this->apiParas["ptId"]  = $ptId;
    }

    public function getPtId()
    {
        return $this->ptId;
    }

    /**
     * @param string $code
     * 采购单号
     * Required: true
     * Example Value: 0
     */
    private $code;

    /**
     * @param string $code
     * 采购单号
     * Example Value: 0
     */
    public function setCode($code)
    {
        $this->code             = $code;
        $this->apiParas["code"]  = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

}