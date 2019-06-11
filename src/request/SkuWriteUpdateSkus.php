<?php

namespca Lostinfo\JosOpenApi;

/**
 * 增量保存SKU
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1383&apiName=jingdong.sku.write.updateSkus
 * Class SkuWriteUpdateSkus
 * @package Jd\request
 */
class SkuWriteUpdateSkus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sku.write.updateSkus";
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
     * 商品ID（必填）
     * Required: true
     * Example Value: 11111111111
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品ID（必填）
     * Example Value: 11111111111
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
     * 增量保存sku列表（可新增sku）
     * Required: true
     * Example Value: 无
     */
    private $skus;

    /**
     * @param java.util.List $skus
     * 增量保存sku列表（可新增sku）
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
     * SKU对象
     * Required: true
     * Example Value: 无
     */
    private $sku;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Sku $sku
     * SKU对象
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
     * @param int $wareId
     * 商品ID（必填）
     * Required: true
     * Example Value: 11111111111
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品ID（必填）
     * Example Value: 11111111111
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
     * @param int $skuId
     * skuID（新增的sku可不填写）
     * Required: false
     * Example Value: 11111558987
     */
    private $skuId;

    /**
     * @param int $skuId
     * skuID（新增的sku可不填写）
     * Example Value: 11111558987
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
     * @param string[] $attrValueAlias
     * 值别名
     * Required: false
     * Example Value: 无
     */
    private $attrValueAlias;

    /**
     * @param string[] $attrValueAlias
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
     * @param string $attrId
     * 销售属性ID 使用接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 传3级分类 type=4获取
     * Required: true
     * Example Value: 457888
     */
    private $attrId;

    /**
     * @param string $attrId
     * 销售属性ID 使用接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 传3级分类 type=4获取
     * Example Value: 457888
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
     * 销售属性值ID 使用接口jingdong.category.read.findValuesByAttrIdUnlimit获取
     * Required: true
     * Example Value: [545454,78787,454545]
     */
    private $attrValues;

    /**
     * @param string[] $attrValues
     * 销售属性值ID 使用接口jingdong.category.read.findValuesByAttrIdUnlimit获取
     * Example Value: [545454,78787,454545]
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
     * sku特殊属性
     * Required: false
     * Example Value: 无
     */
    private $features;

    /**
     * @param java.util.Set $features
     * sku特殊属性
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
     * @param string $cn
     * cn（可不填写）
     * Required: false
     * Example Value: 无
     */
    private $cn;

    /**
     * @param string $cn
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
     * @param string $value
     * 特殊属性值
     * Required: false
     * Example Value: value
     */
    private $value;

    /**
     * @param string $value
     * 特殊属性值
     * Example Value: value
     */
    public function setValue($value)
    {
        $this->value             = $value;
        $this->apiParas["value"]  = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $key
     * 特殊属性标识
     * Required: false
     * Example Value: key
     */
    private $key;

    /**
     * @param string $key
     * 特殊属性标识
     * Example Value: key
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
     * @param int $jdPrice
     * 京东价必填 单位：元
     * Required: true
     * Example Value: 无
     */
    private $jdPrice;

    /**
     * @param int $jdPrice
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
     * @param string $outerId
     * 外部ID,系统不保证唯一性,如需唯一性自行保证
     * Required: false
     * Example Value: ww_4567
     */
    private $outerId;

    /**
     * @param string $outerId
     * 外部ID,系统不保证唯一性,如需唯一性自行保证
     * Example Value: ww_4567
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
     * @param string $stockNum
     * 总库存数
     * Required: true
     * Example Value: 10
     */
    private $stockNum;

    /**
     * @param string $stockNum
     * 总库存数
     * Example Value: 10
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
     * @param string $barCode
     * SKU的条形码
     * Required: false
     * Example Value: 45456467777
     */
    private $barCode;

    /**
     * @param string $barCode
     * SKU的条形码
     * Example Value: 45456467777
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
     * Required: false
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
     * @param string[] $attrValueAlias
     * 值别名
     * Required: false
     * Example Value: 无
     */
    private $attrValueAlias;

    /**
     * @param string[] $attrValueAlias
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
     * @param string $attrId
     * 属性ID
     * Required: false
     * Example Value: 无
     */
    private $attrId;

    /**
     * @param string $attrId
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
     * @param string[] $attrValues
     * 属性值
     * Required: false
     * Example Value: 无
     */
    private $attrValues;

    /**
     * @param string[] $attrValues
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
     * @param string[] $attrValueAlias
     * 值别名（次方法不使用这个字段）
     * Required: false
     * Example Value: 无
     */
    private $attrValueAlias;

    /**
     * @param string[] $attrValueAlias
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
     * @param string $attrId
     * 属性ID 下沉到sku的属性ID 通过接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 获取 features字段中attrLevel=1
     * Required: false
     * Example Value: 1256
     */
    private $attrId;

    /**
     * @param string $attrId
     * 属性ID 下沉到sku的属性ID 通过接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 获取 features字段中attrLevel=1
     * Example Value: 1256
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
     * 属性值 下沉到sku属性值 单选或者多选 通过接口jingdong.category.read.findValuesByAttrIdUnlimit获取 输入类型请手动输入
     * Required: false
     * Example Value: [121212,78778]
     */
    private $attrValues;

    /**
     * @param string[] $attrValues
     * 属性值 下沉到sku属性值 单选或者多选 通过接口jingdong.category.read.findValuesByAttrIdUnlimit获取 输入类型请手动输入
     * Example Value: [121212,78778]
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
     * @param string $capacity
     * 容量，在有特殊要求的类目下必填！最多支持6位小数。
     * Required: false
     * Example Value: 20L
     */
    private $capacity;

    /**
     * @param string $capacity
     * 容量，在有特殊要求的类目下必填！最多支持6位小数。
     * Example Value: 20L
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