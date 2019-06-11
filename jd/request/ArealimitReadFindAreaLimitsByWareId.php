<?php

namespace JD\request;

/**
 * 获取商品限购/可购
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1254&apiName=jingdong.arealimit.read.findAreaLimitsByWareId
 * Class ArealimitReadFindAreaLimitsByWareId
 * @package Jd\request
 */
class ArealimitReadFindAreaLimitsByWareId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.arealimit.read.findAreaLimitsByWareId";
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
     * 商品id
     * Required: true
     * Example Value: wareId
     */
    private $wareId;

    /**
     * @param Number $wareId
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
     * @param String[] $fields
     * 可选的返回的字段  如areaId，limitType
     * Required: false
     * Example Value: limitType
     */
    private $fields;

    /**
     * @param String[] $fields
     * 可选的返回的字段  如areaId，limitType
     * Example Value: limitType
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