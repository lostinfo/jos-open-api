<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 更新商品维度的销售属性值别名
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1381&apiName=jingdong.ware.write.updateWareSaleAttrvalueAlias
 * Class WareWriteUpdateWareSaleAttrvalueAlias
 * @package Jd\request
 */
class WareWriteUpdateWareSaleAttrvalueAlias
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.write.updateWareSaleAttrvalueAlias";
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
     * 商品ID必填
     * Required: true
     * Example Value: wareId
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品ID必填
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
     * @param java.util.Set $props
     * 商品属性别名列表
     * Required: false
     * Example Value: 
     */
    private $props;

    /**
     * @param java.util.Set $props
     * 商品属性别名列表
     * Example Value: 
     */
    public function setProps($props)
    {
        $this->props             = $props;
        $this->apiParas["props"]  = $props;
    }

    public function getProps()
    {
        return $this->props;
    }

    /**
     * @param com.jd.pop.ware.ic.api.domain.Prop $prop
     * 商品属性
     * Required: false
     * Example Value: 
     */
    private $prop;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Prop $prop
     * 商品属性
     * Example Value: 
     */
    public function setProp($prop)
    {
        $this->prop             = $prop;
        $this->apiParas["skuProp"]  = $prop;
    }

    public function getProp()
    {
        return $this->prop;
    }

    /**
     * @param string $attrId
     * 销售属性ID 通过接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 传3级分类 type=4获取
     * Required: false
     * Example Value: attrId
     */
    private $attrId;

    /**
     * @param string $attrId
     * 销售属性ID 通过接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 传3级分类 type=4获取
     * Example Value: attrId
     */
    public function setAttrId($attrId)
    {
        $this->attrId             = $attrId;
        $this->apiParas["attrId"]  = $attrId;
    }

    public function getAttrId()
    {
        return $this->attrId;
    }

    /**
     * @param string[] $attrValues
     * 销售属性值ID数组 销售属性值 使用接口jingdong.category.read.findValuesByAttrIdUnlimit获取
     * Required: false
     * Example Value: attrValues
     */
    private $attrValues;

    /**
     * @param string[] $attrValues
     * 销售属性值ID数组 销售属性值 使用接口jingdong.category.read.findValuesByAttrIdUnlimit获取
     * Example Value: attrValues
     */
    public function setAttrValues($attrValues)
    {
        $this->attrValues             = $attrValues;
        $this->apiParas["attrValues"]  = $attrValues;
    }

    public function getAttrValues()
    {
        return $this->attrValues;
    }

    /**
     * @param string[] $attrValueAlias
     * 根基销售属性值ID重新命名属性名
     * Required: false
     * Example Value: attrValueAlias
     */
    private $attrValueAlias;

    /**
     * @param string[] $attrValueAlias
     * 根基销售属性值ID重新命名属性名
     * Example Value: attrValueAlias
     */
    public function setAttrValueAlias($attrValueAlias)
    {
        $this->attrValueAlias             = $attrValueAlias;
        $this->apiParas["attrValueAlias"]  = $attrValueAlias;
    }

    public function getAttrValueAlias()
    {
        return $this->attrValueAlias;
    }

}