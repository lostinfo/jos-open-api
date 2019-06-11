<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取单个商品
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1244&apiName=jingdong.ware.read.findWareById
 * Class WareReadFindWareById
 * @package Jd\request
 */
class WareReadFindWareById
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.read.findWareById";
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
     * @param int $wareId
     * 商品id
     * Required: true
     * Example Value: wareId
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品id
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
     * @param string[] $fields
     * 可选的返回的字段
     * Required: false
     * Example Value: 例如 itemNum，barCode
     */
    private $fields;

    /**
     * @param string[] $fields
     * 可选的返回的字段
     * Example Value: 例如 itemNum，barCode
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