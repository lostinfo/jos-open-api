<?php

namespace JD\request;

/**
 * 商品打标
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1257&apiName=jingdong.ware.write.mergeWareFeatures
 * Class WareWriteMergeWareFeatures
 * @package Jd\request
 */
class WareWriteMergeWareFeatures
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.write.mergeWareFeatures";
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
     * @param String[] $key
     * 特殊属性标key，is7ToReturn 7天无理由
     * Required: false
     * Example Value: featureKey
     */
    private $key;

    /**
     * @param String[] $key
     * 特殊属性标key，is7ToReturn 7天无理由
     * Example Value: featureKey
     */
    public function setKey($key)
    {
        $this->key             = $key;
        $this->apiParas["featureKey"]  = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param String[] $value
     * 特殊属性标value，0 不支持 ；1 or null 支持7天 ；2 支持90天
     * Required: false
     * Example Value: featureValue
     */
    private $value;

    /**
     * @param String[] $value
     * 特殊属性标value，0 不支持 ；1 or null 支持7天 ；2 支持90天
     * Example Value: featureValue
     */
    public function setValue($value)
    {
        $this->value             = $value;
        $this->apiParas["featureValue"]  = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

}