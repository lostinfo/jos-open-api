<?php

namespace JD\request;

/**
 * sku对应关系上下架
 * 全渠道开放平台API-全渠道开放平台API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=244&apiId=3181&apiName=jingdong.omnichannel.skurelation.update
 * Class OmnichannelSkurelationUpdate
 * @package Jd\request
 */
class OmnichannelSkurelationUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.omnichannel.skurelation.update";
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
     * @param Number $actionType
     * 操作类型 1,上架操作；2,下架操作
     * Required: true
     * Example Value: 1
     */
    private $actionType;

    /**
     * @param Number $actionType
     * 操作类型 1,上架操作；2,下架操作
     * Example Value: 1
     */
    public function setActionType($actionType)
    {
        $this->actionType             = $actionType;
        $this->apiParas["actionType"]  = $actionType;
    }

    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * @param Number $checkStatus
     * 商品关联状态1:上架状态 3:下架状态
     * Required: true
     * Example Value: 1
     */
    private $checkStatus;

    /**
     * @param Number $checkStatus
     * 商品关联状态1:上架状态 3:下架状态
     * Example Value: 1
     */
    public function setCheckStatus($checkStatus)
    {
        $this->checkStatus             = $checkStatus;
        $this->apiParas["checkStatus"]  = $checkStatus;
    }

    public function getCheckStatus()
    {
        return $this->checkStatus;
    }

    /**
     * @param Number $id
     * 唯一id
     * Required: true
     * Example Value: 1
     */
    private $id;

    /**
     * @param Number $id
     * 唯一id
     * Example Value: 1
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param String $selfSkuid
     * 京东sku编号
     * Required: true
     * Example Value: 1
     */
    private $selfSkuid;

    /**
     * @param String $selfSkuid
     * 京东sku编号
     * Example Value: 1
     */
    public function setSelfSkuid($selfSkuid)
    {
        $this->selfSkuid             = $selfSkuid;
        $this->apiParas["selfSkuid"]  = $selfSkuid;
    }

    public function getSelfSkuid()
    {
        return $this->selfSkuid;
    }

}