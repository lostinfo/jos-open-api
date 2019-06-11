<?php

namespace JD\request;

/**
 * 修改商品
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1380&apiName=jingdong.ware.write.updateWare
 * Class WareWriteUpdateWare
 * @package Jd\request
 */
class WareWriteUpdateWare
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.write.updateWare";
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
     * @param com.jd.pop.ware.ic.api.domain.Ware $ware
     * 商品对象
     * Required: true
     * Example Value: 
     */
    private $ware;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Ware $ware
     * 商品对象
     * Example Value: 
     */
    public function setWare($ware)
    {
        $this->ware             = $ware;
        $this->apiParas["ware"]  = $ware;
    }

    public function getWare()
    {
        return $this->ware;
    }

    /**
     * @param Number $wareId
     * 商品ID（修改时必填）
     * Required: true
     * Example Value: 无
     */
    private $wareId;

    /**
     * @param Number $wareId
     * 商品ID（修改时必填）
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
     * @param String $title
     * 商品名称 限制45个字符内
     * Required: false
     * Example Value: 标题
     */
    private $title;

    /**
     * @param String $title
     * 商品名称 限制45个字符内
     * Example Value: 标题
     */
    public function setTitle($title)
    {
        $this->title             = $title;
        $this->apiParas["title"]  = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param Number $brandId
     * 已经授权过的品牌ID(通过商家授权类目接口获取)
     * Required: false
     * Example Value: 无
     */
    private $brandId;

    /**
     * @param Number $brandId
     * 已经授权过的品牌ID(通过商家授权类目接口获取)
     * Example Value: 无
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brandId"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param Number $templateId
     * 关联版式ID 通过接口 jingdong.template.read.findTemplatesByVenderId 获取
     * Required: false
     * Example Value: 无
     */
    private $templateId;

    /**
     * @param Number $templateId
     * 关联版式ID 通过接口 jingdong.template.read.findTemplatesByVenderId 获取
     * Example Value: 无
     */
    public function setTemplateId($templateId)
    {
        $this->templateId             = $templateId;
        $this->apiParas["templateId"]  = $templateId;
    }

    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param Number $transportId
     * 运费模板ID
     * Required: false
     * Example Value: 无
     */
    private $transportId;

    /**
     * @param Number $transportId
     * 运费模板ID
     * Example Value: 无
     */
    public function setTransportId($transportId)
    {
        $this->transportId             = $transportId;
        $this->apiParas["transportId"]  = $transportId;
    }

    public function getTransportId()
    {
        return $this->transportId;
    }

    /**
     * @param Number $wareStatus
     * 商品状态1:从未上架 2:自主下架 4:系统下架 8:在售 513:从未上架 待审核 514:自主下架 待审核 516:系统下架 待审核 520:在售 待审核 1025:从未上架 审核不通过 暂时没用 1026:自主下架 审核不通过 暂时没用 1028:系统下架 审核不通过 1032:在售 审核不通过
     * Required: false
     * Example Value: 无
     */
    private $wareStatus;

    /**
     * @param Number $wareStatus
     * 商品状态1:从未上架 2:自主下架 4:系统下架 8:在售 513:从未上架 待审核 514:自主下架 待审核 516:系统下架 待审核 520:在售 待审核 1025:从未上架 审核不通过 暂时没用 1026:自主下架 审核不通过 暂时没用 1028:系统下架 审核不通过 1032:在售 审核不通过
     * Example Value: 无
     */
    public function setWareStatus($wareStatus)
    {
        $this->wareStatus             = $wareStatus;
        $this->apiParas["wareStatus"]  = $wareStatus;
    }

    public function getWareStatus()
    {
        return $this->wareStatus;
    }

    /**
     * @param String $outerId
     * 商品外部ID,商家自己维护并确保唯一
     * Required: false
     * Example Value: 无
     */
    private $outerId;

    /**
     * @param String $outerId
     * 商品外部ID,商家自己维护并确保唯一
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
     * @param String $itemNum
     * 商品货号
     * Required: false
     * Example Value: 无
     */
    private $itemNum;

    /**
     * @param String $itemNum
     * 商品货号
     * Example Value: 无
     */
    public function setItemNum($itemNum)
    {
        $this->itemNum             = $itemNum;
        $this->apiParas["itemNum"]  = $itemNum;
    }

    public function getItemNum()
    {
        return $this->itemNum;
    }

    /**
     * @param String $barCode
     * 商品的条形码.UPC码,SN码,PLU码统称为条形码
     * Required: false
     * Example Value: 无
     */
    private $barCode;

    /**
     * @param String $barCode
     * 商品的条形码.UPC码,SN码,PLU码统称为条形码
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
     * @param Number $wareLocation
     * 商品产出地区
     * Required: false
     * Example Value: 无
     */
    private $wareLocation;

    /**
     * @param Number $wareLocation
     * 商品产出地区
     * Example Value: 无
     */
    public function setWareLocation($wareLocation)
    {
        $this->wareLocation             = $wareLocation;
        $this->apiParas["wareLocation"]  = $wareLocation;
    }

    public function getWareLocation()
    {
        return $this->wareLocation;
    }

    /**
     * @param Number $delivery
     * 商品发货地
     * Required: false
     * Example Value: 无
     */
    private $delivery;

    /**
     * @param Number $delivery
     * 商品发货地
     * Example Value: 无
     */
    public function setDelivery($delivery)
    {
        $this->delivery             = $delivery;
        $this->apiParas["delivery"]  = $delivery;
    }

    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param Number $promiseId
     * 配送时效
     * Required: false
     * Example Value: 无
     */
    private $promiseId;

    /**
     * @param Number $promiseId
     * 配送时效
     * Example Value: 无
     */
    public function setPromiseId($promiseId)
    {
        $this->promiseId             = $promiseId;
        $this->apiParas["promiseId"]  = $promiseId;
    }

    public function getPromiseId()
    {
        return $this->promiseId;
    }

    /**
     * @param com.jd.pop.ware.ic.api.domain.AdWords $adWords
     * 商品广告词对象 （单品页显示的优先级低于促销广告词）
     * Required: false
     * Example Value: 
     */
    private $adWords;

    /**
     * @param com.jd.pop.ware.ic.api.domain.AdWords $adWords
     * 商品广告词对象 （单品页显示的优先级低于促销广告词）
     * Example Value: 
     */
    public function setAdWords($adWords)
    {
        $this->adWords             = $adWords;
        $this->apiParas["adWords"]  = $adWords;
    }

    public function getAdWords()
    {
        return $this->adWords;
    }

    /**
     * @param String $url
     * 广告词链接地址
     * Required: false
     * Example Value: https://item.jd.com/5319765.html
     */
    private $url;

    /**
     * @param String $url
     * 广告词链接地址
     * Example Value: https://item.jd.com/5319765.html
     */
    public function setUrl($url)
    {
        $this->url             = $url;
        $this->apiParas["url"]  = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param String $urlWords
     * 广告词链接文案
     * Required: false
     * Example Value: 广告词
     */
    private $urlWords;

    /**
     * @param String $urlWords
     * 广告词链接文案
     * Example Value: 广告词
     */
    public function setUrlWords($urlWords)
    {
        $this->urlWords             = $urlWords;
        $this->apiParas["urlWords"]  = $urlWords;
    }

    public function getUrlWords()
    {
        return $this->urlWords;
    }

    /**
     * @param String $words
     * 广告词仅文字内容
     * Required: false
     * Example Value: 广告词
     */
    private $words;

    /**
     * @param String $words
     * 广告词仅文字内容
     * Example Value: 广告词
     */
    public function setWords($words)
    {
        $this->words             = $words;
        $this->apiParas["words"]  = $words;
    }

    public function getWords()
    {
        return $this->words;
    }

    /**
     * @param String $wrap
     * 包装规格
     * Required: false
     * Example Value: 无
     */
    private $wrap;

    /**
     * @param String $wrap
     * 包装规格
     * Example Value: 无
     */
    public function setWrap($wrap)
    {
        $this->wrap             = $wrap;
        $this->apiParas["wrap"]  = $wrap;
    }

    public function getWrap()
    {
        return $this->wrap;
    }

    /**
     * @param String $packListing
     * 商品包装清单
     * Required: false
     * Example Value: 无
     */
    private $packListing;

    /**
     * @param String $packListing
     * 商品包装清单
     * Example Value: 无
     */
    public function setPackListing($packListing)
    {
        $this->packListing             = $packListing;
        $this->apiParas["packListing"]  = $packListing;
    }

    public function getPackListing()
    {
        return $this->packListing;
    }

    /**
     * @param Number $length
     * 商品长度,单位mm
     * Required: false
     * Example Value: 无
     */
    private $length;

    /**
     * @param Number $length
     * 商品长度,单位mm
     * Example Value: 无
     */
    public function setLength($length)
    {
        $this->length             = $length;
        $this->apiParas["length"]  = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param Number $width
     * 商品宽度,单位mm
     * Required: false
     * Example Value: 无
     */
    private $width;

    /**
     * @param Number $width
     * 商品宽度,单位mm
     * Example Value: 无
     */
    public function setWidth($width)
    {
        $this->width             = $width;
        $this->apiParas["width"]  = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param Number $height
     * 商品高度,单位mm
     * Required: false
     * Example Value: 无
     */
    private $height;

    /**
     * @param Number $height
     * 商品高度,单位mm
     * Example Value: 无
     */
    public function setHeight($height)
    {
        $this->height             = $height;
        $this->apiParas["height"]  = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param Number $weight
     * 商品重量,单位kg
     * Required: false
     * Example Value: 无
     */
    private $weight;

    /**
     * @param Number $weight
     * 商品重量,单位kg
     * Example Value: 无
     */
    public function setWeight($weight)
    {
        $this->weight             = $weight;
        $this->apiParas["weight"]  = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param java.util.Set $props
     * 属性列表(已废弃 请使用multiCateProps,已经按照类目限制使用3级类目修改，请及时迁移到多级类目)
     * Required: false
     * Example Value: 
     */
    private $props;

    /**
     * @param java.util.Set $props
     * 属性列表(已废弃 请使用multiCateProps,已经按照类目限制使用3级类目修改，请及时迁移到多级类目)
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
     * 商品属性：包括规格参数，扩展属性
     * Required: false
     * Example Value: 
     */
    private $prop;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Prop $prop
     * 商品属性：包括规格参数，扩展属性
     * Example Value: 
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
     * @param String $attrId
     * 属性ID
     * Required: true
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
     * @param String $attrValues
     * 属性值ID数组
     * Required: true
     * Example Value: 无
     */
    private $attrValues;

    /**
     * @param String $attrValues
     * 属性值ID数组
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
     * 商品维度的特殊属性
     * Required: false
     * Example Value: 
     */
    private $features;

    /**
     * @param java.util.Set $features
     * 商品维度的特殊属性
     * Example Value: 
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
     * 属性对象
     * Required: false
     * Example Value: 
     */
    private $feature;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Feature $feature
     * 属性对象
     * Example Value: 
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
     * @param String $key
     * 特殊属性key
     * Required: true
     * Example Value: 无
     */
    private $key;

    /**
     * @param String $key
     * 特殊属性key
     * Example Value: 无
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
     * @param String $value
     * 特殊属性value
     * Required: false
     * Example Value: 无
     */
    private $value;

    /**
     * @param String $value
     * 特殊属性value
     * Example Value: 无
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

    /**
     * @param java.util.Set $shopCategorys
     * 商品店内分类（商家接口获取到的最末级的分类）
     * Required: false
     * Example Value: 
     */
    private $shopCategorys;

    /**
     * @param java.util.Set $shopCategorys
     * 商品店内分类（商家接口获取到的最末级的分类）
     * Example Value: 
     */
    public function setShopCategorys($shopCategorys)
    {
        $this->shopCategorys             = $shopCategorys;
        $this->apiParas["shopCategorys"]  = $shopCategorys;
    }

    public function getShopCategorys()
    {
        return $this->shopCategorys;
    }

    /**
     * @param Number $shopCategory
     * 店内分类Id数组
     * Required: false
     * Example Value: 无
     */
    private $shopCategory;

    /**
     * @param Number $shopCategory
     * 店内分类Id数组
     * Example Value: 无
     */
    public function setShopCategory($shopCategory)
    {
        $this->shopCategory             = $shopCategory;
        $this->apiParas["shopCategory"]  = $shopCategory;
    }

    public function getShopCategory()
    {
        return $this->shopCategory;
    }

    /**
     * @param String $mobileDesc
     * 移动版的商品介绍
     * Required: false
     * Example Value: 无
     */
    private $mobileDesc;

    /**
     * @param String $mobileDesc
     * 移动版的商品介绍
     * Example Value: 无
     */
    public function setMobileDesc($mobileDesc)
    {
        $this->mobileDesc             = $mobileDesc;
        $this->apiParas["mobileDesc"]  = $mobileDesc;
    }

    public function getMobileDesc()
    {
        return $this->mobileDesc;
    }

    /**
     * @param String $zhuangBaId
     * 商品描述装吧实例ID
     * Required: false
     * Example Value: 无
     */
    private $zhuangBaId;

    /**
     * @param String $zhuangBaId
     * 商品描述装吧实例ID
     * Example Value: 无
     */
    public function setZhuangBaId($zhuangBaId)
    {
        $this->zhuangBaId             = $zhuangBaId;
        $this->apiParas["zhuangBaId"]  = $zhuangBaId;
    }

    public function getZhuangBaId()
    {
        return $this->zhuangBaId;
    }

    /**
     * @param String $introductionUseFlag
     * 商品描述使用标识 ,0：使用默认的商品描述,1：使用装吧商详
     * Required: false
     * Example Value: 无
     */
    private $introductionUseFlag;

    /**
     * @param String $introductionUseFlag
     * 商品描述使用标识 ,0：使用默认的商品描述,1：使用装吧商详
     * Example Value: 无
     */
    public function setIntroductionUseFlag($introductionUseFlag)
    {
        $this->introductionUseFlag             = $introductionUseFlag;
        $this->apiParas["introductionUseFlag"]  = $introductionUseFlag;
    }

    public function getIntroductionUseFlag()
    {
        return $this->introductionUseFlag;
    }

    /**
     * @param String $mobileZhuangBaId
     * 移动版装吧实例ID
     * Required: false
     * Example Value: 无
     */
    private $mobileZhuangBaId;

    /**
     * @param String $mobileZhuangBaId
     * 移动版装吧实例ID
     * Example Value: 无
     */
    public function setMobileZhuangBaId($mobileZhuangBaId)
    {
        $this->mobileZhuangBaId             = $mobileZhuangBaId;
        $this->apiParas["mobileZhuangBaId"]  = $mobileZhuangBaId;
    }

    public function getMobileZhuangBaId()
    {
        return $this->mobileZhuangBaId;
    }

    /**
     * @param String $mobileDescUseFlag
     * 移动版商品描述使用标识,0：使用默认的移动商详；1：使用装吧移动版商详
     * Required: false
     * Example Value: 无
     */
    private $mobileDescUseFlag;

    /**
     * @param String $mobileDescUseFlag
     * 移动版商品描述使用标识,0：使用默认的移动商详；1：使用装吧移动版商详
     * Example Value: 无
     */
    public function setMobileDescUseFlag($mobileDescUseFlag)
    {
        $this->mobileDescUseFlag             = $mobileDescUseFlag;
        $this->apiParas["mobileDescUseFlag"]  = $mobileDescUseFlag;
    }

    public function getMobileDescUseFlag()
    {
        return $this->mobileDescUseFlag;
    }

    /**
     * @param String $introduction
     * PC版的商品介绍
     * Required: false
     * Example Value: 无
     */
    private $introduction;

    /**
     * @param String $introduction
     * PC版的商品介绍
     * Example Value: 无
     */
    public function setIntroduction($introduction)
    {
        $this->introduction             = $introduction;
        $this->apiParas["introduction"]  = $introduction;
    }

    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * @param String $afterSales
     * 售后服务
     * Required: false
     * Example Value: 无
     */
    private $afterSales;

    /**
     * @param String $afterSales
     * 售后服务
     * Example Value: 无
     */
    public function setAfterSales($afterSales)
    {
        $this->afterSales             = $afterSales;
        $this->apiParas["afterSales"]  = $afterSales;
    }

    public function getAfterSales()
    {
        return $this->afterSales;
    }

    /**
     * @param Number $jdPrice
     * 商品的京东价,人民币单元是元
     * Required: false
     * Example Value: 
     */
    private $jdPrice;

    /**
     * @param Number $jdPrice
     * 商品的京东价,人民币单元是元
     * Example Value: 
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
     * @param Number $marketPrice
     * 商品的市场价,人民币单元是元
     * Required: false
     * Example Value: 
     */
    private $marketPrice;

    /**
     * @param Number $marketPrice
     * 商品的市场价,人民币单元是元
     * Example Value: 
     */
    public function setMarketPrice($marketPrice)
    {
        $this->marketPrice             = $marketPrice;
        $this->apiParas["marketPrice"]  = $marketPrice;
    }

    public function getMarketPrice()
    {
        return $this->marketPrice;
    }

    /**
     * @param String $designConcept
     * 商品设计理念,适用范围是toplife类目
     * Required: false
     * Example Value: 无
     */
    private $designConcept;

    /**
     * @param String $designConcept
     * 商品设计理念,适用范围是toplife类目
     * Example Value: 无
     */
    public function setDesignConcept($designConcept)
    {
        $this->designConcept             = $designConcept;
        $this->apiParas["designConcept"]  = $designConcept;
    }

    public function getDesignConcept()
    {
        return $this->designConcept;
    }

    /**
     * @param String $fitCaseHtmlApp
     * 装修案例移动版描述,装修类目才可填写
     * Required: false
     * Example Value: 无
     */
    private $fitCaseHtmlApp;

    /**
     * @param String $fitCaseHtmlApp
     * 装修案例移动版描述,装修类目才可填写
     * Example Value: 无
     */
    public function setFitCaseHtmlApp($fitCaseHtmlApp)
    {
        $this->fitCaseHtmlApp             = $fitCaseHtmlApp;
        $this->apiParas["fitCaseHtmlApp"]  = $fitCaseHtmlApp;
    }

    public function getFitCaseHtmlApp()
    {
        return $this->fitCaseHtmlApp;
    }

    /**
     * @param String $fitCaseHtmlPc
     * 装修案例PC版描述,装修类目才可填写
     * Required: false
     * Example Value: 无
     */
    private $fitCaseHtmlPc;

    /**
     * @param String $fitCaseHtmlPc
     * 装修案例PC版描述,装修类目才可填写
     * Example Value: 无
     */
    public function setFitCaseHtmlPc($fitCaseHtmlPc)
    {
        $this->fitCaseHtmlPc             = $fitCaseHtmlPc;
        $this->apiParas["fitCaseHtmlPc"]  = $fitCaseHtmlPc;
    }

    public function getFitCaseHtmlPc()
    {
        return $this->fitCaseHtmlPc;
    }

    /**
     * @param java.util.Set $multiCateProps
     * 类目属性列表
     * Required: false
     * Example Value: 
     */
    private $multiCateProps;

    /**
     * @param java.util.Set $multiCateProps
     * 类目属性列表
     * Example Value: 
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
     * 商品属性：包括规格参数，扩展属性
     * Required: false
     * Example Value: 
     */
    private $prop;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Prop $prop
     * 商品属性：包括规格参数，扩展属性
     * Example Value: 
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
     * @param String $attrId
     * 属性ID 通过接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 按照类目ID获取
     * Required: true
     * Example Value: 无
     */
    private $attrId;

    /**
     * @param String $attrId
     * 属性ID 通过接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 按照类目ID获取
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
     * @param String $attrValues
     * 属性值ID数组 jingdong.category.read.findValuesByAttrIdUnlimit  获取，输入方式类型请填写文字
     * Required: true
     * Example Value: 无
     */
    private $attrValues;

    /**
     * @param String $attrValues
     * 属性值ID数组 jingdong.category.read.findValuesByAttrIdUnlimit  获取，输入方式类型请填写文字
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
     * @param java.util.List $specialServices
     * 特色服务,装修类目才可填写,装修类必填,最大为5,每个值最长为8个字符
     * Required: false
     * Example Value: 
     */
    private $specialServices;

    /**
     * @param java.util.List $specialServices
     * 特色服务,装修类目才可填写,装修类必填,最大为5,每个值最长为8个字符
     * Example Value: 
     */
    public function setSpecialServices($specialServices)
    {
        $this->specialServices             = $specialServices;
        $this->apiParas["specialServices"]  = $specialServices;
    }

    public function getSpecialServices()
    {
        return $this->specialServices;
    }

    /**
     * @param String $specialService
     * 特色服务
     * Required: false
     * Example Value: 无
     */
    private $specialService;

    /**
     * @param String $specialService
     * 特色服务
     * Example Value: 无
     */
    public function setSpecialService($specialService)
    {
        $this->specialService             = $specialService;
        $this->apiParas["specialService"]  = $specialService;
    }

    public function getSpecialService()
    {
        return $this->specialService;
    }

}