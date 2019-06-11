<?php

namespca Lostinfo\JosOpenApi;

/**
 * 发布商品
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1379&apiName=jingdong.ware.write.add
 * Class WareWriteAdd
 * @package Jd\request
 */
class WareWriteAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.write.add";
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
     * Example Value: 无
     */
    private $ware;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Ware $ware
     * 商品对象
     * Example Value: 无
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
     * @param string $title
     * 商品名称（限制50个字符以内）
     * Required: true
     * Example Value: 无
     */
    private $title;

    /**
     * @param string $title
     * 商品名称（限制50个字符以内）
     * Example Value: 无
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
     * @param int $categoryId
     * 已经授权过的京东“三级”类目(通过商家授权类目接口获取)
     * Required: true
     * Example Value: 无
     */
    private $categoryId;

    /**
     * @param int $categoryId
     * 已经授权过的京东“三级”类目(通过商家授权类目接口获取)
     * Example Value: 无
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId             = $categoryId;
        $this->apiParas["categoryId"]  = $categoryId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param int $multiCategoryId
     * 末级类目ID
     * Required: false
     * Example Value: 无
     */
    private $multiCategoryId;

    /**
     * @param int $multiCategoryId
     * 末级类目ID
     * Example Value: 无
     */
    public function setMultiCategoryId($multiCategoryId)
    {
        $this->multiCategoryId             = $multiCategoryId;
        $this->apiParas["multiCategoryId"]  = $multiCategoryId;
    }

    public function getMultiCategoryId()
    {
        return $this->multiCategoryId;
    }

    /**
     * @param int $brandId
     * 已经授权过的品牌ID(通过商家授权类目接口获取)
     * Required: false
     * Example Value: 无
     */
    private $brandId;

    /**
     * @param int $brandId
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
     * @param int $templateId
     * 关联版式ID 通过接口 jingdong.template.read.findTemplatesByVenderId 获取
     * Required: false
     * Example Value: 无
     */
    private $templateId;

    /**
     * @param int $templateId
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
     * @param int $transportId
     * 运费模板ID
     * Required: true
     * Example Value: 无
     */
    private $transportId;

    /**
     * @param int $transportId
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
     * @param int $wareStatus
     * 商品状态1:从未上架 2:自主下架 4:系统下架 8:在售 513:从未上架 待审核 514:自主下架 待审核 516:系统下架 待审核 520:在售 待审核 1025:从未上架 审核不通过 暂时没用 1026:自主下架 审核不通过 暂时没用 1028:系统下架 审核不通过 1032:在售 审核不通过
     * Required: false
     * Example Value: 新增仅可以使用 1:从未上架  8:在售(上架)
     */
    private $wareStatus;

    /**
     * @param int $wareStatus
     * 商品状态1:从未上架 2:自主下架 4:系统下架 8:在售 513:从未上架 待审核 514:自主下架 待审核 516:系统下架 待审核 520:在售 待审核 1025:从未上架 审核不通过 暂时没用 1026:自主下架 审核不通过 暂时没用 1028:系统下架 审核不通过 1032:在售 审核不通过
     * Example Value: 新增仅可以使用 1:从未上架  8:在售(上架)
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
     * @param string $outerId
     * 商品外部ID,商家自行设置的ID（便于关联京东商品）
     * Required: false
     * Example Value: 无
     */
    private $outerId;

    /**
     * @param string $outerId
     * 商品外部ID,商家自行设置的ID（便于关联京东商品）
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
     * @param string $itemNum
     * 商品货号
     * Required: false
     * Example Value: 无
     */
    private $itemNum;

    /**
     * @param string $itemNum
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
     * @param string $barCode
     * 商品的条形码.UPC码,SN码,PLU码统称为条形码
     * Required: false
     * Example Value: 无
     */
    private $barCode;

    /**
     * @param string $barCode
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
     * @param int $wareLocation
     * 商品产出地区
     * Required: false
     * Example Value: 无
     */
    private $wareLocation;

    /**
     * @param int $wareLocation
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
     * @param int $delivery
     * 商品发货地
     * Required: false
     * Example Value: 无
     */
    private $delivery;

    /**
     * @param int $delivery
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
     * @param int $promiseId
     * 配送时效
     * Required: false
     * Example Value: 无
     */
    private $promiseId;

    /**
     * @param int $promiseId
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
     * Example Value: 无
     */
    private $adWords;

    /**
     * @param com.jd.pop.ware.ic.api.domain.AdWords $adWords
     * 商品广告词对象 （单品页显示的优先级低于促销广告词）
     * Example Value: 无
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
     * @param string $url
     * “京东链接”的定义：http://开头，一级域名是"jd"或"360buy"或"360buyimg"，后缀是.com或.net
     * Required: false
     * Example Value: 无
     */
    private $url;

    /**
     * @param string $url
     * “京东链接”的定义：http://开头，一级域名是"jd"或"360buy"或"360buyimg"，后缀是.com或.net
     * Example Value: 无
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
     * @param string $urlWords
     * 带链接的广告词，即a标签内的文字
     * Required: false
     * Example Value: 无
     */
    private $urlWords;

    /**
     * @param string $urlWords
     * 带链接的广告词，即a标签内的文字
     * Example Value: 无
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
     * @param string $words
     * 广告词仅文字内容
     * Required: true
     * Example Value: 无
     */
    private $words;

    /**
     * @param string $words
     * 广告词仅文字内容
     * Example Value: 无
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
     * @param string $wrap
     * 包装规格
     * Required: false
     * Example Value: 无
     */
    private $wrap;

    /**
     * @param string $wrap
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
     * @param string $packListing
     * 商品包装清单
     * Required: false
     * Example Value: 无
     */
    private $packListing;

    /**
     * @param string $packListing
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
     * @param int $length
     * 商品长度,单位mm
     * Required: false
     * Example Value: 无
     */
    private $length;

    /**
     * @param int $length
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
     * @param int $width
     * 商品宽度,单位mm
     * Required: false
     * Example Value: 无
     */
    private $width;

    /**
     * @param int $width
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
     * @param int $height
     * 商品高度,单位mm
     * Required: false
     * Example Value: 无
     */
    private $height;

    /**
     * @param int $height
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
     * @param int $weight
     * 商品重量,单位kg
     * Required: false
     * Example Value: 无
     */
    private $weight;

    /**
     * @param int $weight
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
     * Example Value: 无
     */
    private $props;

    /**
     * @param java.util.Set $props
     * 属性列表(已废弃 请使用multiCateProps,已经按照类目限制使用3级类目修改，请及时迁移到多级类目)
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
     * 商品属性：包括规格参数，扩展属性
     * Required: false
     * Example Value: 无
     */
    private $prop;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Prop $prop
     * 商品属性：包括规格参数，扩展属性
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
     * @param string $attrValues
     * 属性值ID数组
     * Required: false
     * Example Value: 无
     */
    private $attrValues;

    /**
     * @param string $attrValues
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
     * Example Value: 无
     */
    private $features;

    /**
     * @param java.util.Set $features
     * 商品维度的特殊属性
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
     * 属性对象
     * Required: false
     * Example Value: 无
     */
    private $feature;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Feature $feature
     * 属性对象
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
     * @param string $key
     * 特殊属性key
     * Required: true
     * Example Value: 无
     */
    private $key;

    /**
     * @param string $key
     * 特殊属性key
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
     * @param string $value
     * 特殊属性value
     * Required: false
     * Example Value: 无
     */
    private $value;

    /**
     * @param string $value
     * 特殊属性value
     * Example Value: 无
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
     * @param java.util.List $images
     * 商品图片列表
     * Required: true
     * Example Value: 无
     */
    private $images;

    /**
     * @param java.util.List $images
     * 商品图片列表
     * Example Value: 无
     */
    public function setImages($images)
    {
        $this->images             = $images;
        $this->apiParas["images"]  = $images;
    }

    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param com.jd.pop.ware.ic.api.domain.Image $image
     * 图片对象
     * Required: true
     * Example Value: 无
     */
    private $image;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Image $image
     * 图片对象
     * Example Value: 无
     */
    public function setImage($image)
    {
        $this->image             = $image;
        $this->apiParas["image"]  = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $colorId
     * 颜色id，颜色id和您设置的销售属性值id对应，使用接口jingdong.category.read.findValuesByAttrIdUnlimit 获取 ，如果没销售属性，则默认为10个0（主图，并且主图必填）
     * Required: true
     * Example Value: 无
     */
    private $colorId;

    /**
     * @param string $colorId
     * 颜色id，颜色id和您设置的销售属性值id对应，使用接口jingdong.category.read.findValuesByAttrIdUnlimit 获取 ，如果没销售属性，则默认为10个0（主图，并且主图必填）
     * Example Value: 无
     */
    public function setColorId($colorId)
    {
        $this->colorId             = $colorId;
        $this->apiParas["colorId"]  = $colorId;
    }

    public function getColorId()
    {
        return $this->colorId;
    }

    /**
     * @param int $imgIndex
     * 图片顺序。index值：1-N，如果index存在，则直接覆盖相应index图片.发布商品时必须存在颜色ID 为 0000000000且imgIndex为1的图片(商品主图)
     * Required: true
     * Example Value: 无
     */
    private $imgIndex;

    /**
     * @param int $imgIndex
     * 图片顺序。index值：1-N，如果index存在，则直接覆盖相应index图片.发布商品时必须存在颜色ID 为 0000000000且imgIndex为1的图片(商品主图)
     * Example Value: 无
     */
    public function setImgIndex($imgIndex)
    {
        $this->imgIndex             = $imgIndex;
        $this->apiParas["imgIndex"]  = $imgIndex;
    }

    public function getImgIndex()
    {
        return $this->imgIndex;
    }

    /**
     * @param string $imgUrl
     * 京东图片服务器地址，不包括前缀。例如：jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.jpg
     * Required: true
     * Example Value: 无
     */
    private $imgUrl;

    /**
     * @param string $imgUrl
     * 京东图片服务器地址，不包括前缀。例如：jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.jpg
     * Example Value: 无
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl             = $imgUrl;
        $this->apiParas["imgUrl"]  = $imgUrl;
    }

    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * @param string $imgZoneId
     * 图片空间中的图片Id
     * Required: false
     * Example Value: 无
     */
    private $imgZoneId;

    /**
     * @param string $imgZoneId
     * 图片空间中的图片Id
     * Example Value: 无
     */
    public function setImgZoneId($imgZoneId)
    {
        $this->imgZoneId             = $imgZoneId;
        $this->apiParas["imgZoneId"]  = $imgZoneId;
    }

    public function getImgZoneId()
    {
        return $this->imgZoneId;
    }

    /**
     * @param java.util.Set $shopCategorys
     * 商品店内分类（商家接口获取到的最末级的分类）
     * Required: false
     * Example Value: 无
     */
    private $shopCategorys;

    /**
     * @param java.util.Set $shopCategorys
     * 商品店内分类（商家接口获取到的最末级的分类）
     * Example Value: 无
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
     * @param int[] $shopCategory
     * 店内分类Id数组（店铺首页展示的分类）
     * Required: false
     * Example Value: 无
     */
    private $shopCategory;

    /**
     * @param int[] $shopCategory
     * 店内分类Id数组（店铺首页展示的分类）
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
     * @param string $mobileDesc
     * 移动版的商品介绍 长度限制10W个字符
     * Required: true
     * Example Value: 无
     */
    private $mobileDesc;

    /**
     * @param string $mobileDesc
     * 移动版的商品介绍 长度限制10W个字符
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
     * @param string $introduction
     * PC版的商品介绍 长度限制10W个字符
     * Required: true
     * Example Value: 无
     */
    private $introduction;

    /**
     * @param string $introduction
     * PC版的商品介绍 长度限制10W个字符
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
     * @param string $afterSales
     * 售后服务
     * Required: false
     * Example Value: 无
     */
    private $afterSales;

    /**
     * @param string $afterSales
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
     * @param int $jdPrice
     * 商品的京东价,人民币单元是元
     * Required: false
     * Example Value: 无
     */
    private $jdPrice;

    /**
     * @param int $jdPrice
     * 商品的京东价,人民币单元是元
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
     * @param int $marketPrice
     * 商品的市场价,人民币单元是元
     * Required: false
     * Example Value: 无
     */
    private $marketPrice;

    /**
     * @param int $marketPrice
     * 商品的市场价,人民币单元是元
     * Example Value: 无
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
     * @param string $zhuangBaId
     * 商品描述装吧实例ID
     * Required: false
     * Example Value: 无
     */
    private $zhuangBaId;

    /**
     * @param string $zhuangBaId
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
     * @param string $introductionUseFlag
     * 商品描述使用标识 ,0：使用默认的商品描述,1：使用装吧商详
     * Required: false
     * Example Value: 无
     */
    private $introductionUseFlag;

    /**
     * @param string $introductionUseFlag
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
     * @param string $mobileZhuangBaId
     * 移动版商品描述装吧实例ID
     * Required: false
     * Example Value: 无
     */
    private $mobileZhuangBaId;

    /**
     * @param string $mobileZhuangBaId
     * 移动版商品描述装吧实例ID
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
     * @param string $mobileDescUseFlag
     * 移动版商品描述使用标识,0：使用默认的移动商详；1：使用装吧移动版商详
     * Required: false
     * Example Value: 无
     */
    private $mobileDescUseFlag;

    /**
     * @param string $mobileDescUseFlag
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
     * @param string $designConcept
     * 商品设计理念,适用范围是toplife类目
     * Required: false
     * Example Value: 无
     */
    private $designConcept;

    /**
     * @param string $designConcept
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
     * @param string $fitCaseHtmlApp
     * 装修案例移动版描述,装修类目才可填写
     * Required: false
     * Example Value: 无
     */
    private $fitCaseHtmlApp;

    /**
     * @param string $fitCaseHtmlApp
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
     * @param string $fitCaseHtmlPc
     * 装修案例PC版描述,装修类目才可填写
     * Required: false
     * Example Value: 无
     */
    private $fitCaseHtmlPc;

    /**
     * @param string $fitCaseHtmlPc
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
     * @param java.util.List $specialServices
     * 特色服务,装修类目才可填写,装修类必填,最大为5,每个值最长为8个字符
     * Required: false
     * Example Value: 无
     */
    private $specialServices;

    /**
     * @param java.util.List $specialServices
     * 特色服务,装修类目才可填写,装修类必填,最大为5,每个值最长为8个字符
     * Example Value: 无
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
     * @param string $specialService
     * 特色服务
     * Required: false
     * Example Value: 无
     */
    private $specialService;

    /**
     * @param string $specialService
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

    /**
     * @param java.util.Set $multiCateProps
     * 新类目属性列表
     * Required: false
     * Example Value: 无
     */
    private $multiCateProps;

    /**
     * @param java.util.Set $multiCateProps
     * 新类目属性列表
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
     * 商品属性：包括规格参数，扩展属性
     * Required: false
     * Example Value: 无
     */
    private $prop;

    /**
     * @param com.jd.pop.ware.ic.api.domain.Prop $prop
     * 商品属性：包括规格参数，扩展属性
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
     * @param string $attrId
     * 属性ID 通过接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 按照类目ID获取
     * Required: true
     * Example Value: 无
     */
    private $attrId;

    /**
     * @param string $attrId
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
     * @param string[] $attrValues
     * 属性值ID数组 jingdong.category.read.findValuesByAttrIdUnlimit  获取，输入方式类型请填写文字
     * Required: true
     * Example Value: 无
     */
    private $attrValues;

    /**
     * @param string[] $attrValues
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
     * @param java.util.List $skus
     * sku列表 （只写属性用于 新建商品使用）
     * Required: false
     * Example Value: 无
     */
    private $skus;

    /**
     * @param java.util.List $skus
     * sku列表 （只写属性用于 新建商品使用）
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
     * @param int $skuId
     * skuID（新建商品不需要填写）
     * Required: false
     * Example Value: 无
     */
    private $skuId;

    /**
     * @param int $skuId
     * skuID（新建商品不需要填写）
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
     * @param string[] $attrValueAlias
     * 值别名，发布商品时不可设置
     * Required: false
     * Example Value: 无
     */
    private $attrValueAlias;

    /**
     * @param string[] $attrValueAlias
     * 值别名，发布商品时不可设置
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
     * 属性ID 通过接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 传3级分类 type=4获取
     * Required: true
     * Example Value: 无
     */
    private $attrId;

    /**
     * @param string $attrId
     * 属性ID 通过接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 传3级分类 type=4获取
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
     * 销售属性值 使用接口jingdong.category.read.findValuesByAttrIdUnlimit获取
     * Required: true
     * Example Value: 无
     */
    private $attrValues;

    /**
     * @param string[] $attrValues
     * 销售属性值 使用接口jingdong.category.read.findValuesByAttrIdUnlimit获取
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
     * 特殊属性
     * Required: false
     * Example Value: 无
     */
    private $features;

    /**
     * @param java.util.Set $features
     * 特殊属性
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
     * 可不填
     * Required: false
     * Example Value: 无
     */
    private $cn;

    /**
     * @param string $cn
     * 可不填
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
     * sku级别特殊属性值
     * Required: false
     * Example Value: 无
     */
    private $value;

    /**
     * @param string $value
     * sku级别特殊属性值
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
     * @param string $key
     * sku级别特殊属性
     * Required: false
     * Example Value: 无
     */
    private $key;

    /**
     * @param string $key
     * sku级别特殊属性
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
     * Example Value: 无
     */
    private $outerId;

    /**
     * @param string $outerId
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
     * @param string $stockNum
     * 总库存数
     * Required: true
     * Example Value: 无
     */
    private $stockNum;

    /**
     * @param string $stockNum
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
     * @param string $barCode
     * SKU的条形码
     * Required: false
     * Example Value: 无
     */
    private $barCode;

    /**
     * @param string $barCode
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
     * SKU属性(已废弃 请使用multiCateProps，已经按照类目限制使用3级类目修改，请及时迁移到多级类目)
     * Required: false
     * Example Value: 无
     */
    private $props;

    /**
     * @param java.util.Set $props
     * SKU属性(已废弃 请使用multiCateProps，已经按照类目限制使用3级类目修改，请及时迁移到多级类目)
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
     * SKU维度的新类目属性信息
     * Required: false
     * Example Value: 无
     */
    private $multiCateProps;

    /**
     * @param java.util.Set $multiCateProps
     * SKU维度的新类目属性信息
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
     * 下沉到sku的属性ID 通过接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 获取 features字段中attrLevel=1
     * Required: false
     * Example Value: 无
     */
    private $attrId;

    /**
     * @param string $attrId
     * 下沉到sku的属性ID 通过接口 jingdong.category.read.findAttrsByCategoryIdUnlimitCate 获取 features字段中attrLevel=1
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
     * 下沉到sku属性值 单选或者多选 通过接口jingdong.category.read.findValuesByAttrIdUnlimit获取 输入类型请手动输入
     * Required: false
     * Example Value: 无
     */
    private $attrValues;

    /**
     * @param string[] $attrValues
     * 下沉到sku属性值 单选或者多选 通过接口jingdong.category.read.findValuesByAttrIdUnlimit获取 输入类型请手动输入
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
     * @param string $capacity
     * 容量，在有特殊要求的类目下必填！最多支持6位小数。
     * Required: false
     * Example Value: 20L  20T
     */
    private $capacity;

    /**
     * @param string $capacity
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