<?php

namespca Lostinfo\JosOpenApi;

/**
 * 业务信息回传
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2807&apiName=jingdong.pop.order.business.upload
 * Class PopOrderBusinessUpload
 * @package Jd\request
 */
class PopOrderBusinessUpload
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.business.upload";
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
     * @param int $orderId
     * 订单id，非空
     * Required: true
     * Example Value: 73587941894
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单id，非空
     * Example Value: 73587941894
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $businessIds
     * 业务id，逗号分隔。当前只有 1=门店id回传。
     * Required: true
     * Example Value: 1
     */
    private $businessIds;

    /**
     * @param string $businessIds
     * 业务id，逗号分隔。当前只有 1=门店id回传。
     * Example Value: 1
     */
    public function setBusinessIds($businessIds)
    {
        $this->businessIds             = $businessIds;
        $this->apiParas["businessIds"]  = $businessIds;
    }

    public function getBusinessIds()
    {
        return $this->businessIds;
    }

    /**
     * @param string $businessJson
     * 业务信息。json格式。json里的value都为String类型，json里的key为 businessId对应的key值：1=mendianId。不能为空
     * Required: true
     * Example Value: 
     */
    private $businessJson;

    /**
     * @param string $businessJson
     * 业务信息。json格式。json里的value都为String类型，json里的key为 businessId对应的key值：1=mendianId。不能为空
     * Example Value: 
     */
    public function setBusinessJson($businessJson)
    {
        $this->businessJson             = $businessJson;
        $this->apiParas["businessJson"]  = $businessJson;
    }

    public function getBusinessJson()
    {
        return $this->businessJson;
    }

    /**
     * @param int $clienType
     * 系统来源
     * Required: true
     * Example Value: 
     */
    private $clienType;

    /**
     * @param int $clienType
     * 系统来源
     * Example Value: 
     */
    public function setClienType($clienType)
    {
        $this->clienType             = $clienType;
        $this->apiParas["clientType"]  = $clienType;
    }

    public function getClienType()
    {
        return $this->clienType;
    }

}