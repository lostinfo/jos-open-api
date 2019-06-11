<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询服务单状态
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1219&apiName=jingdong.eclp.sph.getOrderStatus
 * Class EclpSphGetOrderStatus
 * @package Jd\request
 */
class EclpSphGetOrderStatus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.sph.getOrderStatus";
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
     * @param int $serviceId
     * 服务单ID
     * Required: true
     * Example Value: 
     */
    private $serviceId;

    /**
     * @param int $serviceId
     * 服务单ID
     * Example Value: 
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId             = $serviceId;
        $this->apiParas["serviceId"]  = $serviceId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param string $sourceId
     * 外单编号
     * Required: false
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param string $sourceId
     * 外单编号
     * Example Value: 
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId             = $sourceId;
        $this->apiParas["sourceId"]  = $sourceId;
    }

    public function getSourceId()
    {
        return $this->sourceId;
    }

}