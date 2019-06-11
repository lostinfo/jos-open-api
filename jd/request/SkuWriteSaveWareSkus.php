<?php

namespace JD\request;

/**
 * 全量保存SKU
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1382&apiName=jingdong.sku.write.saveWareSkus
 * Class SkuWriteSaveWareSkus
 * @package Jd\request
 */
class SkuWriteSaveWareSkus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sku.write.saveWareSkus";
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
     * 商品ID（必填）
     * Required: true
     * Example Value: 无
     */
    private $wareId;

    /**
     * @param Number $wareId
     * 商品ID（必填）
     * Example Value: 无
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
     * @param java.util.List $skus
     * 需要保存的sku列表（注意不在列表中的sku会做删除操作）
     * Required: true
     * Example Value: 无
     */
    private $skus;

    /**
     * @param java.util.List $skus
     * 需要保存的sku列表（注意不在列表中的sku会做删除操作）
     * Example Value: 无
     */
    public function setSkus($skus)
    {
        $this->skus             = $skus;
        $this->apiParas["skus"]  = $skus;
    }

    public function getSkus()
    {
        return $this->skus;
    }

    /**
     * @param com.jd.pop.ware.ic.api.domain.Sku $sku
     * 需要保存的SKU对象
     * Required: true
     * Example Value: 无
     */
    private $sku;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Sku $sku
     * 需要保存的SKU对象
     * Example Value: 无
     */
    public function setSku($sku)
    {
        $this->sku             = $sku;
        $this->apiParas["sku"]  = $sku;
    }

    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param Number $skuId
     * skuID
     * Required: false
     * Example Value: 无
     */
    private $skuId;

    /**
     * @param Number $skuId
     * skuID
     * Example Value: 无
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param java.util.Set $saleAttrs
     * SKU销售属性
     * Required: true
     * Example Value: 无
     */
    private $saleAttrs;

    /**
     * @param java.util.Set $saleAttrs
     * SKU销售属性
     * Example Value: 无
     */
    public function setSaleAttrs($saleAttrs)
    {
        $this->saleAttrs             = $saleAttrs;
        $this->apiParas["saleAttrs"]  = $saleAttrs;
    }

    public function getSaleAttrs()
    {
        return $this->saleAttrs;
    }

    /**
     * @param com.jd.pop.ware.ic.api.domain.Prop $prop
     * 属性
     * Required: true
     * Example Value: 无
     */
    private $prop;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Prop $prop
     * 属性
     * Example Value: 无
     */
    public function setProp($prop)
    {
        $this->prop             = $prop;
        $this->apiParas["prop"]  = $prop;
    }

    public function getProp()
    {
        return $this->prop;
    }

    /**
     * @param String[] $attrValueAlias
     * 值别名
     * Required: false
     * Example Value: 无
     */
    private $attrValueAlias;

    /**
     * @param String[] $attrValueAlias
     * 值别名
     * Example Value: 无
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

    /**
     * @param String $attrId
     * 销售属性ID 使用接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 传3级分类 type=4获取
     * Required: true
     * Example Value: 无
     */
    private $attrId;

    /**
     * @param String $attrId
     * 销售属性ID 使用接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 传3级分类 type=4获取
     * Example Value: 无
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
     * @param String[] $attrValues
     * 销售属性值ID 使用接口jingdong.category.read.findValuesByAttrIdUnlimit获取
     * Required: true
     * Example Value: 无
     */
    private $attrValues;

    /**
     * @param String[] $attrValues
     * 销售属性值ID 使用接口jingdong.category.read.findValuesByAttrIdUnlimit获取
     * Example Value: 无
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
     * @param java.util.Set $features
     * sku的特殊属性
     * Required: false
     * Example Value: 无
     */
    private $features;

    /**
     * @param java.util.Set $features
     * sku的特殊属性
     * Example Value: 无
     */
    public function setFeatures($features)
    {
        $this->features             = $features;
        $this->apiParas["features"]  = $features;
    }

    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param com.jd.pop.ware.ic.api.domain.Feature $feature
     * 特殊属性
     * Required: true
     * Example Value: 无
     */
    private $feature;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Feature $feature
     * 特殊属性
     * Example Value: 无
     */
    public function setFeature($feature)
    {
        $this->feature             = $feature;
        $this->apiParas["feature"]  = $feature;
    }

    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * @param String $cn
     * cn（可不填写）
     * Required: false
     * Example Value: 无
     */
    private $cn;

    /**
     * @param String $cn
     * cn（可不填写）
     * Example Value: 无
     */
    public function setCn($cn)
    {
        $this->cn             = $cn;
        $this->apiParas["cn"]  = $cn;
    }

    public function getCn()
    {
        return $this->cn;
    }

    /**
     * @param String $value
     * 特殊属性值
     * Required: false
     * Example Value: 无
     */
    private $value;

    /**
     * @param String $value
     * 特殊属性值
     * Example Value: 无
     */
    public function setValue($value)
    {
        $this->value             = $value;
        $this->apiParas["values"]  = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param String $key
     * 特殊属性标识
     * Required: false
     * Example Value: 无
     */
    private $key;

    /**
     * @param String $key
     * 特殊属性标识
     * Example Value: 无
     */
    public function setKey($key)
    {
        $this->key             = $key;
        $this->apiParas["key"]  = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param Number $jdPrice
     * 京东价必填 单位：元
     * Required: true
     * Example Value: 无
     */
    private $jdPrice;

    /**
     * @param Number $jdPrice
     * 京东价必填 单位：元
     * Example Value: 无
     */
    public function setJdPrice($jdPrice)
    {
        $this->jdPrice             = $jdPrice;
        $this->apiParas["jdPrice"]  = $jdPrice;
    }

    public function getJdPrice()
    {
        return $this->jdPrice;
    }

    /**
     * @param String $outerId
     * 外部ID,系统不保证唯一性,如需唯一性自行保证
     * Required: false
     * Example Value: 无
     */
    private $outerId;

    /**
     * @param String $outerId
     * 外部ID,系统不保证唯一性,如需唯一性自行保证
     * Example Value: 无
     */
    public function setOuterId($outerId)
    {
        $this->outerId             = $outerId;
        $this->apiParas["outerId"]  = $outerId;
    }

    public function getOuterId()
    {
        return $this->outerId;
    }

    /**
     * @param String $stockNum
     * 总库存数
     * Required: true
     * Example Value: 无
     */
    private $stockNum;

    /**
     * @param String $stockNum
     * 总库存数
     * Example Value: 无
     */
    public function setStockNum($stockNum)
    {
        $this->stockNum             = $stockNum;
        $this->apiParas["stockNum"]  = $stockNum;
    }

    public function getStockNum()
    {
        return $this->stockNum;
    }

    /**
     * @param String $barCode
     * SKU的条形码
     * Required: false
     * Example Value: 无
     */
    private $barCode;

    /**
     * @param String $barCode
     * SKU的条形码
     * Example Value: 无
     */
    public function setBarCode($barCode)
    {
        $this->barCode             = $barCode;
        $this->apiParas["barCode"]  = $barCode;
    }

    public function getBarCode()
    {
        return $this->barCode;
    }

    /**
     * @param java.util.Set $props
     * SKU下沉属性（已废弃 推荐使用multiCateProps）
     * Required: true
     * Example Value: 无
     */
    private $props;

    /**
     * @param java.util.Set $props
     * SKU下沉属性（已废弃 推荐使用multiCateProps）
     * Example Value: 无
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
     * 属性
     * Required: false
     * Example Value: 无
     */
    private $prop;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Prop $prop
     * 属性
     * Example Value: 无
     */
    public function setProp($prop)
    {
        $this->prop             = $prop;
        $this->apiParas["prop"]  = $prop;
    }

    public function getProp()
    {
        return $this->prop;
    }

    /**
     * @param String[] $attrValueAlias
     * 值别名
     * Required: false
     * Example Value: 无
     */
    private $attrValueAlias;

    /**
     * @param String[] $attrValueAlias
     * 值别名
     * Example Value: 无
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

    /**
     * @param String $attrId
     * 属性ID
     * Required: false
     * Example Value: 无
     */
    private $attrId;

    /**
     * @param String $attrId
     * 属性ID
     * Example Value: 无
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
     * @param String[] $attrValues
     * 属性值
     * Required: false
     * Example Value: 无
     */
    private $attrValues;

    /**
     * @param String[] $attrValues
     * 属性值
     * Example Value: 无
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
     * @param java.util.Set $multiCateProps
     * 多级SKU属性
     * Required: false
     * Example Value: 无
     */
    private $multiCateProps;

    /**
     * @param java.util.Set $multiCateProps
     * 多级SKU属性
     * Example Value: 无
     */
    public function setMultiCateProps($multiCateProps)
    {
        $this->multiCateProps             = $multiCateProps;
        $this->apiParas["multiCateProps"]  = $multiCateProps;
    }

    public function getMultiCateProps()
    {
        return $this->multiCateProps;
    }

    /**
     * @param com.jd.pop.ware.ic.api.domain.Prop $prop
     * 属性 包含扩展属性和规格参数
     * Required: false
     * Example Value: 无
     */
    private $prop;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Prop $prop
     * 属性 包含扩展属性和规格参数
     * Example Value: 无
     */
    public function setProp($prop)
    {
        $this->prop             = $prop;
        $this->apiParas["prop"]  = $prop;
    }

    public function getProp()
    {
        return $this->prop;
    }

    /**
     * @param String[] $attrValueAlias
     * 值别名（次方法不使用这个字段）
     * Required: false
     * Example Value: 无
     */
    private $attrValueAlias;

    /**
     * @param String[] $attrValueAlias
     * 值别名（次方法不使用这个字段）
     * Example Value: 无
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

    /**
     * @param String $attrId
     * 属性ID 下沉到sku的属性ID 通过接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 获取 features字段中attrLevel=1
     * Required: false
     * Example Value: 无
     */
    private $attrId;

    /**
     * @param String $attrId
     * 属性ID 下沉到sku的属性ID 通过接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 获取 features字段中attrLevel=1
     * Example Value: 无
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
     * @param String[] $attrValues
     * 属性值 下沉到sku属性值 单选或者多选 通过接口jingdong.category.read.findValuesByAttrIdUnlimit获取 输入类型请手动输入
     * Required: false
     * Example Value: 无
     */
    private $attrValues;

    /**
     * @param String[] $attrValues
     * 属性值 下沉到sku属性值 单选或者多选 通过接口jingdong.category.read.findValuesByAttrIdUnlimit获取 输入类型请手动输入
     * Example Value: 无
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
     * @param String $capacity
     * 容量，在有特殊要求的类目下必填！最多支持6位小数。
     * Required: false
     * Example Value: 20L  20T
     */
    private $capacity;

    /**
     * @param String $capacity
     * 容量，在有特殊要求的类目下必填！最多支持6位小数。
     * Example Value: 20L  20T
     */
    public function setCapacity($capacity)
    {
        $this->capacity             = $capacity;
        $this->apiParas["capacity"]  = $capacity;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

}