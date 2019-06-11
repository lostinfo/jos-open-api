<?php

namespace JD\request;

/**
 * 获取商品大字段信息
 * 商城API-面向用户类商城系统商品相关信息获取
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=49&apiId=1039&apiName=jingdong.ware.productbigfield.get
 * Class WareProductbigfieldGet
 * @package Jd\request
 */
class WareProductbigfieldGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.productbigfield.get";
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
     * @param String $skuId
     * skuId
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param String $skuId
     * skuId
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_id"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param String[] $field
     * 传入要查询的字段，如：wareQD（包装清单）、propCode（规格参数）、wdis（商品介绍）、shouhou（售后）。可单独查询一个字段，也可查询多个，查多个时用逗号分隔。如：wareQD,propCode
     * Required: true
     * Example Value: wareQD
     */
    private $field;

    /**
     * @param String[] $field
     * 传入要查询的字段，如：wareQD（包装清单）、propCode（规格参数）、wdis（商品介绍）、shouhou（售后）。可单独查询一个字段，也可查询多个，查多个时用逗号分隔。如：wareQD,propCode
     * Example Value: wareQD
     */
    public function setField($field)
    {
        $this->field             = $field;
        $this->apiParas["field"]  = $field;
    }

    public function getField()
    {
        return $this->field;
    }

}