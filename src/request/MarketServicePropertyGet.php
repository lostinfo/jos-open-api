<?php

namespca Lostinfo\JosOpenApi;

/**
 * 服务属性查询
 * 品控质检API-品控质检API为您提供新增质检报告、获得质检报告、获取订购关系、查询质检报告列表、删除质检报告、更新质检报告六个品控质检API.
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=65&apiId=554&apiName=jingdong.market.service.property.get
 * Class MarketServicePropertyGet
 * @package Jd\request
 */
class MarketServicePropertyGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.market.service.property.get";
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
     * @param string $serviceItemCode
     * 服务收费项目code,支持最大长度50
     * Required: false
     * Example Value: FW_GOODS-149205-1
     */
    private $serviceItemCode;

    /**
     * @param string $serviceItemCode
     * 服务收费项目code,支持最大长度50
     * Example Value: FW_GOODS-149205-1
     */
    public function setServiceItemCode($serviceItemCode)
    {
        $this->serviceItemCode             = $serviceItemCode;
        $this->apiParas["service_item_code"]  = $serviceItemCode;
    }

    public function getServiceItemCode()
    {
        return $this->serviceItemCode;
    }

}