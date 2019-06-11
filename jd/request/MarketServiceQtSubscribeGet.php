<?php

namespace JD\request;

/**
 * 获取订购关系
 * 品控质检API-品控质检API为您提供新增质检报告、获得质检报告、获取订购关系、查询质检报告列表、删除质检报告、更新质检报告六个品控质检API.
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=65&apiId=249&apiName=jingdong.market.service.qt.subscribe.get
 * Class MarketServiceQtSubscribeGet
 * @package Jd\request
 */
class MarketServiceQtSubscribeGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.market.service.qt.subscribe.get";
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
     * @param String $serviceItemCode
     * 服务收费项目code,支持最大长度50
     * Required: true
     * Example Value: FW_GOODS-149205-1
     */
    private $serviceItemCode;

    /**
     * @param String $serviceItemCode
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

    /**
     * @param String $pin
     * 用户京东pin，支持最大长度50
     * Required: true
     * Example Value: i_pin
     */
    private $pin;

    /**
     * @param String $pin
     * 用户京东pin，支持最大长度50
     * Example Value: i_pin
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["pin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

}