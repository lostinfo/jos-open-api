<?php

namespace JD\request;

/**
 * 获取商品下架原因
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1225&apiName=jingdong.ware.read.findOpReason
 * Class WareReadFindOpReason
 * @package Jd\request
 */
class WareReadFindOpReason
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.read.findOpReason";
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
     * @param Number $wareId
     * 商品Id
     * Required: true
     * Example Value: wareId
     */
    private $wareId;

    /**
     * @param Number $wareId
     * 商品Id
     * Example Value: wareId
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
     * @param String[] $fields
     * 可选的返回对象的的字段 如note，opUser
     * Required: false
     * Example Value: opUser
     */
    private $fields;

    /**
     * @param String[] $fields
     * 可选的返回对象的的字段 如note，opUser
     * Example Value: opUser
     */
    public function setFields($fields)
    {
        $this->fields             = $fields;
        $this->apiParas["field"]  = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

}