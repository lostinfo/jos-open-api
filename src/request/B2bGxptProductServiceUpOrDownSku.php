<?php

namespace JD\request;

/**
 * 批量上下架操作
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3092&apiName=jingdong.b2b.gxpt.productService.upOrDownSku
 * Class B2bGxptProductServiceUpOrDownSku
 * @package Jd\request
 */
class B2bGxptProductServiceUpOrDownSku
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.gxpt.productService.upOrDownSku";
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
     * @param Number[] $spuIds
     * spuIds
     * Required: true
     * Example Value: 
     */
    private $spuIds;

    /**
     * @param Number[] $spuIds
     * spuIds
     * Example Value: 
     */
    public function setSpuIds($spuIds)
    {
        $this->spuIds             = $spuIds;
        $this->apiParas["spuIds"]  = $spuIds;
    }

    public function getSpuIds()
    {
        return $this->spuIds;
    }

    /**
     * @param Number $venderId
     * 商家id
     * Required: true
     * Example Value: 
     */
    private $venderId;

    /**
     * @param Number $venderId
     * 商家id
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    /**
     * @param Number $status
     * 上下架状态
     * Required: true
     * Example Value: 
     */
    private $status;

    /**
     * @param Number $status
     * 上下架状态
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

}