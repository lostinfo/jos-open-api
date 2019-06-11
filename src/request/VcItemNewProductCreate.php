<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 新增商品信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1680&apiName=jingdong.vc.item.newProduct.create
 * Class VcItemNewProductCreate
 * @package Jd\request
 */
class VcItemNewProductCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.newProduct.create";
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
     * @param string $applyId
     * 申请编号（由VC系统产生的编号，该字段为空：表示新品创建，该字段不为空：表示新品驳回提交。）
     * Required: false
     * Example Value: 9e3cb5dbe5fd41b784e67051db1e8e15
     */
    private $applyId;

    /**
     * @param string $applyId
     * 申请编号（由VC系统产生的编号，该字段为空：表示新品创建，该字段不为空：表示新品驳回提交。）
     * Example Value: 9e3cb5dbe5fd41b784e67051db1e8e15
     */
    public function setApplyId($applyId)
    {
        $this->applyId             = $applyId;
        $this->apiParas["apply_id"]  = $applyId;
    }

    public function getApplyId()
    {
        return $this->applyId;
    }

    /**
     * @param string $name
     * 商品名称
     * Required: true
     * Example Value: 耐克（NIKE）2015秋季新款女子REVOLUTION 2跑步鞋
     */
    private $name;

    /**
     * @param string $name
     * 商品名称
     * Example Value: 耐克（NIKE）2015秋季新款女子REVOLUTION 2跑步鞋
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $cid1
     * 第一分类ID（三级分类）
     * Required: true
     * Example Value: 798
     */
    private $cid1;

    /**
     * @param int $cid1
     * 第一分类ID（三级分类）
     * Example Value: 798
     */
    public function setCid1($cid1)
    {
        $this->cid1             = $cid1;
        $this->apiParas["cid1"]  = $cid1;
    }

    public function getCid1()
    {
        return $this->cid1;
    }

    /**
     * @param int $leafCid
     * 末级分类
     * Required: false
     * Example Value: 7984
     */
    private $leafCid;

    /**
     * @param int $leafCid
     * 末级分类
     * Example Value: 7984
     */
    public function setLeafCid($leafCid)
    {
        $this->leafCid             = $leafCid;
        $this->apiParas["leaf_cid"]  = $leafCid;
    }

    public function getLeafCid()
    {
        return $this->leafCid;
    }

    /**
     * @param int $brandId
     * 品牌ID
     * Required: true
     * Example Value: 7888
     */
    private $brandId;

    /**
     * @param int $brandId
     * 品牌ID
     * Example Value: 7888
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brand_id"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param string $zhBrand
     * 中文品牌
     * Required: false
     * Example Value: 耐克
     */
    private $zhBrand;

    /**
     * @param string $zhBrand
     * 中文品牌
     * Example Value: 耐克
     */
    public function setZhBrand($zhBrand)
    {
        $this->zhBrand             = $zhBrand;
        $this->apiParas["zh_brand"]  = $zhBrand;
    }

    public function getZhBrand()
    {
        return $this->zhBrand;
    }

    /**
     * @param string $enBrand
     * 英文品牌
     * Required: false
     * Example Value: NIKE
     */
    private $enBrand;

    /**
     * @param string $enBrand
     * 英文品牌
     * Example Value: NIKE
     */
    public function setEnBrand($enBrand)
    {
        $this->enBrand             = $enBrand;
        $this->apiParas["en_brand"]  = $enBrand;
    }

    public function getEnBrand()
    {
        return $this->enBrand;
    }

    /**
     * @param string $model
     * 商品型号
     * Required: true
     * Example Value: 554901-061
     */
    private $model;

    /**
     * @param string $model
     * 商品型号
     * Example Value: 554901-061
     */
    public function setModel($model)
    {
        $this->model             = $model;
        $this->apiParas["model"]  = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param string $tel
     * 服务电话
     * Required: false
     * Example Value: 85641111
     */
    private $tel;

    /**
     * @param string $tel
     * 服务电话
     * Example Value: 85641111
     */
    public function setTel($tel)
    {
        $this->tel             = $tel;
        $this->apiParas["tel"]  = $tel;
    }

    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param string $webSite
     * 官方网址
     * Required: false
     * Example Value: www.nike.com
     */
    private $webSite;

    /**
     * @param string $webSite
     * 官方网址
     * Example Value: www.nike.com
     */
    public function setWebSite($webSite)
    {
        $this->webSite             = $webSite;
        $this->apiParas["web_site"]  = $webSite;
    }

    public function getWebSite()
    {
        return $this->webSite;
    }

    /**
     * @param string $originalPlace
     * 产地
     * Required: true
     * Example Value: 中国大陆
     */
    private $originalPlace;

    /**
     * @param string $originalPlace
     * 产地
     * Example Value: 中国大陆
     */
    public function setOriginalPlace($originalPlace)
    {
        $this->originalPlace             = $originalPlace;
        $this->apiParas["original_place"]  = $originalPlace;
    }

    public function getOriginalPlace()
    {
        return $this->originalPlace;
    }

    /**
     * @param string $warranty
     * 质保（最多可输入6个汉字）
     * Required: true
     * Example Value: 一年质保
     */
    private $warranty;

    /**
     * @param string $warranty
     * 质保（最多可输入6个汉字）
     * Example Value: 一年质保
     */
    public function setWarranty($warranty)
    {
        $this->warranty             = $warranty;
        $this->apiParas["warranty"]  = $warranty;
    }

    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * @param int $shelfLife
     * 保质期(单位：天)
     * Required: false
     * Example Value: 365
     */
    private $shelfLife;

    /**
     * @param int $shelfLife
     * 保质期(单位：天)
     * Example Value: 365
     */
    public function setShelfLife($shelfLife)
    {
        $this->shelfLife             = $shelfLife;
        $this->apiParas["shelf_life"]  = $shelfLife;
    }

    public function getShelfLife()
    {
        return $this->shelfLife;
    }

    /**
     * @param int $weight
     * 商品重量(单位：千克，含包装)小数点后保留3位[注意：非盖亚必填，盖亚不填]
     * Required: false
     * Example Value: 1.123
     */
    private $weight;

    /**
     * @param int $weight
     * 商品重量(单位：千克，含包装)小数点后保留3位[注意：非盖亚必填，盖亚不填]
     * Example Value: 1.123
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
     * @param int $length
     * 长度(单位：毫米，含包装)[注意：非盖亚必填，盖亚不填]
     * Required: false
     * Example Value: 9
     */
    private $length;

    /**
     * @param int $length
     * 长度(单位：毫米，含包装)[注意：非盖亚必填，盖亚不填]
     * Example Value: 9
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
     * 宽度(单位：毫米，含包装)[注意：非盖亚必填，盖亚不填]
     * Required: false
     * Example Value: 8
     */
    private $width;

    /**
     * @param int $width
     * 宽度(单位：毫米，含包装)[注意：非盖亚必填，盖亚不填]
     * Example Value: 8
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
     * 高度(单位：毫米，含包装)[注意：非盖亚必填，盖亚不填]
     * Required: false
     * Example Value: 7
     */
    private $height;

    /**
     * @param int $height
     * 高度(单位：毫米，含包装)[注意：非盖亚必填，盖亚不填]
     * Example Value: 7
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
     * @param int $marketPrice
     * 市场价（小数点后保留2位）[注意：非盖亚必填，盖亚不填]
     * Required: false
     * Example Value: 900.00
     */
    private $marketPrice;

    /**
     * @param int $marketPrice
     * 市场价（小数点后保留2位）[注意：非盖亚必填，盖亚不填]
     * Example Value: 900.00
     */
    public function setMarketPrice($marketPrice)
    {
        $this->marketPrice             = $marketPrice;
        $this->apiParas["market_price"]  = $marketPrice;
    }

    public function getMarketPrice()
    {
        return $this->marketPrice;
    }

    /**
     * @param int $purchasePrice
     * 采购价（小数点后保留2位）[注意：非盖亚必填，盖亚不填]
     * Required: false
     * Example Value: 700.00
     */
    private $purchasePrice;

    /**
     * @param int $purchasePrice
     * 采购价（小数点后保留2位）[注意：非盖亚必填，盖亚不填]
     * Example Value: 700.00
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice             = $purchasePrice;
        $this->apiParas["purchase_price"]  = $purchasePrice;
    }

    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }

    /**
     * @param int $memberPrice
     * 京东价（小数点后保留2位）[注意：非盖亚必填，盖亚不填]
     * Required: false
     * Example Value: 800.00
     */
    private $memberPrice;

    /**
     * @param int $memberPrice
     * 京东价（小数点后保留2位）[注意：非盖亚必填，盖亚不填]
     * Example Value: 800.00
     */
    public function setMemberPrice($memberPrice)
    {
        $this->memberPrice             = $memberPrice;
        $this->apiParas["member_price"]  = $memberPrice;
    }

    public function getMemberPrice()
    {
        return $this->memberPrice;
    }

    /**
     * @param string $salerCode
     * 销售员简码
     * Required: true
     * Example Value: zhaoqun
     */
    private $salerCode;

    /**
     * @param string $salerCode
     * 销售员简码
     * Example Value: zhaoqun
     */
    public function setSalerCode($salerCode)
    {
        $this->salerCode             = $salerCode;
        $this->apiParas["saler_code"]  = $salerCode;
    }

    public function getSalerCode()
    {
        return $this->salerCode;
    }

    /**
     * @param string $purchaserCode
     * 采购员简码
     * Required: true
     * Example Value: zhaoqun
     */
    private $purchaserCode;

    /**
     * @param string $purchaserCode
     * 采购员简码
     * Example Value: zhaoqun
     */
    public function setPurchaserCode($purchaserCode)
    {
        $this->purchaserCode             = $purchaserCode;
        $this->apiParas["purchaser_code"]  = $purchaserCode;
    }

    public function getPurchaserCode()
    {
        return $this->purchaserCode;
    }

    /**
     * @param string $upc
     * UPC编码（只包含字母和数字）[注意：非盖亚选填，盖亚不填]
     * Required: false
     * Example Value: 6555
     */
    private $upc;

    /**
     * @param string $upc
     * UPC编码（只包含字母和数字）[注意：非盖亚选填，盖亚不填]
     * Example Value: 6555
     */
    public function setUpc($upc)
    {
        $this->upc             = $upc;
        $this->apiParas["upc"]  = $upc;
    }

    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * @param int $packing
     * 包装规格（[1×N]请填写N的值）
     * Required: false
     * Example Value: 2
     */
    private $packing;

    /**
     * @param int $packing
     * 包装规格（[1×N]请填写N的值）
     * Example Value: 2
     */
    public function setPacking($packing)
    {
        $this->packing             = $packing;
        $this->apiParas["packing"]  = $packing;
    }

    public function getPacking()
    {
        return $this->packing;
    }

    /**
     * @param int $packType
     * 特殊属性（1:普通商品，2:易碎品，3:裸装液体，4:带包装液体，5:按原包装出库）
     * Required: true
     * Example Value: 1
     */
    private $packType;

    /**
     * @param int $packType
     * 特殊属性（1:普通商品，2:易碎品，3:裸装液体，4:带包装液体，5:按原包装出库）
     * Example Value: 1
     */
    public function setPackType($packType)
    {
        $this->packType             = $packType;
        $this->apiParas["pack_type"]  = $packType;
    }

    public function getPackType()
    {
        return $this->packType;
    }

    /**
     * @param string $skuUnit
     * 销售单位（必须为VC接口提供的销售单位）
     * Required: false
     * Example Value: 箱
     */
    private $skuUnit;

    /**
     * @param string $skuUnit
     * 销售单位（必须为VC接口提供的销售单位）
     * Example Value: 箱
     */
    public function setSkuUnit($skuUnit)
    {
        $this->skuUnit             = $skuUnit;
        $this->apiParas["sku_unit"]  = $skuUnit;
    }

    public function getSkuUnit()
    {
        return $this->skuUnit;
    }

    /**
     * @param string $pkgInfo
     * 包装清单（格式：USB线 × 1、AV线 × 1、配带 × 1、说明书 × 1、保修卡 × 1 ，最多可录入20000个字符）
     * Required: true
     * Example Value: USB线 × 1
     */
    private $pkgInfo;

    /**
     * @param string $pkgInfo
     * 包装清单（格式：USB线 × 1、AV线 × 1、配带 × 1、说明书 × 1、保修卡 × 1 ，最多可录入20000个字符）
     * Example Value: USB线 × 1
     */
    public function setPkgInfo($pkgInfo)
    {
        $this->pkgInfo             = $pkgInfo;
        $this->apiParas["pkg_info"]  = $pkgInfo;
    }

    public function getPkgInfo()
    {
        return $this->pkgInfo;
    }

    /**
     * @param string $itemNum
     * 货号（货号不能包括中文，只能为英文或数字）[注意：非盖亚选填，盖亚不填]
     * Required: false
     * Example Value: 132
     */
    private $itemNum;

    /**
     * @param string $itemNum
     * 货号（货号不能包括中文，只能为英文或数字）[注意：非盖亚选填，盖亚不填]
     * Example Value: 132
     */
    public function setItemNum($itemNum)
    {
        $this->itemNum             = $itemNum;
        $this->apiParas["item_num"]  = $itemNum;
    }

    public function getItemNum()
    {
        return $this->itemNum;
    }

    /**
     * @param string $introHtml
     * PC端代码录入的商品介绍（敏感标签将会被自动过滤，比如：a、script）
     * Required: false
     * Example Value: 防滑橡胶鞋
     */
    private $introHtml;

    /**
     * @param string $introHtml
     * PC端代码录入的商品介绍（敏感标签将会被自动过滤，比如：a、script）
     * Example Value: 防滑橡胶鞋
     */
    public function setIntroHtml($introHtml)
    {
        $this->introHtml             = $introHtml;
        $this->apiParas["intro_html"]  = $introHtml;
    }

    public function getIntroHtml()
    {
        return $this->introHtml;
    }

    /**
     * @param string $introMobile
     * Mobile端代码录入的商品介绍（敏感标签将会被自动过滤，比如：a、script）
     * Required: false
     * Example Value: 防滑橡胶鞋
     */
    private $introMobile;

    /**
     * @param string $introMobile
     * Mobile端代码录入的商品介绍（敏感标签将会被自动过滤，比如：a、script）
     * Example Value: 防滑橡胶鞋
     */
    public function setIntroMobile($introMobile)
    {
        $this->introMobile             = $introMobile;
        $this->apiParas["intro_mobile"]  = $introMobile;
    }

    public function getIntroMobile()
    {
        return $this->introMobile;
    }

    /**
     * @param int $videoId
     * 视频介绍编号
     * Required: false
     * Example Value: 312
     */
    private $videoId;

    /**
     * @param int $videoId
     * 视频介绍编号
     * Example Value: 312
     */
    public function setVideoId($videoId)
    {
        $this->videoId             = $videoId;
        $this->apiParas["video_id"]  = $videoId;
    }

    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * @param int[] $value
     * 危险品的值
     * Required: false
     * Example Value: 1
     */
    private $value;

    /**
     * @param int[] $value
     * 危险品的值
     * Example Value: 1
     */
    public function setValue($value)
    {
        $this->value             = $value;
        $this->apiParas["danger_value"]  = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $sysp
     * 试用品标识[0:否 1:是]
     * Required: false
     * Example Value: 0
     */
    private $sysp;

    /**
     * @param int $sysp
     * 试用品标识[0:否 1:是]
     * Example Value: 0
     */
    public function setSysp($sysp)
    {
        $this->sysp             = $sysp;
        $this->apiParas["sysp"]  = $sysp;
    }

    public function getSysp()
    {
        return $this->sysp;
    }

    /**
     * @param int $storeProperty
     * 冷链标记（1：控温（10 -18℃）;2：冷藏（0-8 ℃）;3：冷冻（零下12- 零下18 ℃）;4：深冷（零下30 ℃ ）;6:产地直送;7：鲜品（冷藏存常温配）;0或null：未设置）
     * Required: false
     * Example Value: 1
     */
    private $storeProperty;

    /**
     * @param int $storeProperty
     * 冷链标记（1：控温（10 -18℃）;2：冷藏（0-8 ℃）;3：冷冻（零下12- 零下18 ℃）;4：深冷（零下30 ℃ ）;6:产地直送;7：鲜品（冷藏存常温配）;0或null：未设置）
     * Example Value: 1
     */
    public function setStoreProperty($storeProperty)
    {
        $this->storeProperty             = $storeProperty;
        $this->apiParas["store_property"]  = $storeProperty;
    }

    public function getStoreProperty()
    {
        return $this->storeProperty;
    }

    /**
     * @param int $productOilNumber
     * 成品油容量(正数，如果填写小数，小数位数长度不能超过6位)
     * Required: false
     * Example Value: 4.0123
     */
    private $productOilNumber;

    /**
     * @param int $productOilNumber
     * 成品油容量(正数，如果填写小数，小数位数长度不能超过6位)
     * Example Value: 4.0123
     */
    public function setProductOilNumber($productOilNumber)
    {
        $this->productOilNumber             = $productOilNumber;
        $this->apiParas["product_oil_number"]  = $productOilNumber;
    }

    public function getProductOilNumber()
    {
        return $this->productOilNumber;
    }

    /**
     * @param string $productOilUnit
     * 成品油单位[大写的'L'(升)或者大写的'T'(吨)]
     * Required: false
     * Example Value: L
     */
    private $productOilUnit;

    /**
     * @param string $productOilUnit
     * 成品油单位[大写的'L'(升)或者大写的'T'(吨)]
     * Example Value: L
     */
    public function setProductOilUnit($productOilUnit)
    {
        $this->productOilUnit             = $productOilUnit;
        $this->apiParas["product_oil_unit"]  = $productOilUnit;
    }

    public function getProductOilUnit()
    {
        return $this->productOilUnit;
    }

    /**
     * @param int $giftsGoods
     * 赠品标识[0:否 1:是不可销售 2：是可销售]
     * Required: false
     * Example Value: 0
     */
    private $giftsGoods;

    /**
     * @param int $giftsGoods
     * 赠品标识[0:否 1:是不可销售 2：是可销售]
     * Example Value: 0
     */
    public function setGiftsGoods($giftsGoods)
    {
        $this->giftsGoods             = $giftsGoods;
        $this->apiParas["gifts_goods"]  = $giftsGoods;
    }

    public function getGiftsGoods()
    {
        return $this->giftsGoods;
    }

    /**
     * @param string $designConcept
     * 设计理念
     * Required: false
     * Example Value: 设计理念
     */
    private $designConcept;

    /**
     * @param string $designConcept
     * 设计理念
     * Example Value: 设计理念
     */
    public function setDesignConcept($designConcept)
    {
        $this->designConcept             = $designConcept;
        $this->apiParas["design_concept"]  = $designConcept;
    }

    public function getDesignConcept()
    {
        return $this->designConcept;
    }

    /**
     * @param string $isTransferElecCode
     * 是否需要电子监管码[0:不需要 1:需要]
     * Required: false
     * Example Value: 0
     */
    private $isTransferElecCode;

    /**
     * @param string $isTransferElecCode
     * 是否需要电子监管码[0:不需要 1:需要]
     * Example Value: 0
     */
    public function setIsTransferElecCode($isTransferElecCode)
    {
        $this->isTransferElecCode             = $isTransferElecCode;
        $this->apiParas["has_transfer_elec_code"]  = $isTransferElecCode;
    }

    public function getIsTransferElecCode()
    {
        return $this->isTransferElecCode;
    }

    /**
     * @param string $afterSaleDesc
     * 售后保障
     * Required: false
     * Example Value: 售后保障图文详情字符串
     */
    private $afterSaleDesc;

    /**
     * @param string $afterSaleDesc
     * 售后保障
     * Example Value: 售后保障图文详情字符串
     */
    public function setAfterSaleDesc($afterSaleDesc)
    {
        $this->afterSaleDesc             = $afterSaleDesc;
        $this->apiParas["after_sale_desc"]  = $afterSaleDesc;
    }

    public function getAfterSaleDesc()
    {
        return $this->afterSaleDesc;
    }

    /**
     * @param string $wreadme
     * 规格参数手工录入文本
     * Required: false
     * Example Value: 鞋品材料：橡胶
     */
    private $wreadme;

    /**
     * @param string $wreadme
     * 规格参数手工录入文本
     * Example Value: 鞋品材料：橡胶
     */
    public function setWreadme($wreadme)
    {
        $this->wreadme             = $wreadme;
        $this->apiParas["wreadme"]  = $wreadme;
    }

    public function getWreadme()
    {
        return $this->wreadme;
    }

    /**
     * @param int[] $pid
     * 规格参数ID
     * Required: false
     * Example Value: 90
     */
    private $pid;

    /**
     * @param int[] $pid
     * 规格参数ID
     * Example Value: 90
     */
    public function setPid($pid)
    {
        $this->pid             = $pid;
        $this->apiParas["prop_id"]  = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param string[] $isv_vid
     * 单选属性值ID
     * Required: false
     * Example Value: 118,,12
     */
    private $isv_vid;

    /**
     * @param string[] $isv_vid
     * 单选属性值ID
     * Example Value: 118,,12
     */
    public function setIsv_vid($isv_vid)
    {
        $this->isv_vid             = $isv_vid;
        $this->apiParas["prop_vid"]  = $isv_vid;
    }

    public function getIsv_vid()
    {
        return $this->isv_vid;
    }

    /**
     * @param string[] $remark
     * 数值/文本内容/单选备注
     * Required: false
     * Example Value: 磨砂
     */
    private $remark;

    /**
     * @param string[] $remark
     * 数值/文本内容/单选备注
     * Example Value: 磨砂
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["prop_remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param string[] $alias
     * 单选别名
     * Required: false
     * Example Value: 深红色
     */
    private $alias;

    /**
     * @param string[] $alias
     * 单选别名
     * Example Value: 深红色
     */
    public function setAlias($alias)
    {
        $this->alias             = $alias;
        $this->apiParas["prop_alias"]  = $alias;
    }

    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param string[] $isv_values
     * 复选的属性值ID,以英文分号分隔
     * Required: false
     * Example Value: 123;67829;1234
     */
    private $isv_values;

    /**
     * @param string[] $isv_values
     * 复选的属性值ID,以英文分号分隔
     * Example Value: 123;67829;1234
     */
    public function setIsv_values($isv_values)
    {
        $this->isv_values             = $isv_values;
        $this->apiParas["prop_values"]  = $isv_values;
    }

    public function getIsv_values()
    {
        return $this->isv_values;
    }

    /**
     * @param int[] $attId
     * 扩展属性ID
     * Required: false
     * Example Value: 119
     */
    private $attId;

    /**
     * @param int[] $attId
     * 扩展属性ID
     * Example Value: 119
     */
    public function setAttId($attId)
    {
        $this->attId             = $attId;
        $this->apiParas["ext_id"]  = $attId;
    }

    public function getAttId()
    {
        return $this->attId;
    }

    /**
     * @param string[] $values
     * 扩展属性单选或者复选的属性值ID,以英文分号分隔
     * Required: false
     * Example Value: 80,90,100
     */
    private $values;

    /**
     * @param string[] $values
     * 扩展属性单选或者复选的属性值ID,以英文分号分隔
     * Example Value: 80,90,100
     */
    public function setValues($values)
    {
        $this->values             = $values;
        $this->apiParas["ext_values"]  = $values;
    }

    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param string[] $alias
     * 单选属性别名
     * Required: false
     * Example Value: 别名
     */
    private $alias;

    /**
     * @param string[] $alias
     * 单选属性别名
     * Example Value: 别名
     */
    public function setAlias($alias)
    {
        $this->alias             = $alias;
        $this->apiParas["ext_alias"]  = $alias;
    }

    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param string[] $remark
     * 数值
     * Required: false
     * Example Value: 12.3
     */
    private $remark;

    /**
     * @param string[] $remark
     * 数值
     * Example Value: 12.3
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["ext_remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param string[] $skuName
     * 商品名称
     * Required: false
     * Example Value: XXX衬衫
     */
    private $skuName;

    /**
     * @param string[] $skuName
     * 商品名称
     * Example Value: XXX衬衫
     */
    public function setSkuName($skuName)
    {
        $this->skuName             = $skuName;
        $this->apiParas["sku_name_gaea"]  = $skuName;
    }

    public function getSkuName()
    {
        return $this->skuName;
    }

    /**
     * @param string[] $color
     * 第一维度销售属性值 属性名参见接口jingdong.vc.item.saleAttributeSettings.get
     * Required: false
     * Example Value: 红色
     */
    private $color;

    /**
     * @param string[] $color
     * 第一维度销售属性值 属性名参见接口jingdong.vc.item.saleAttributeSettings.get
     * Example Value: 红色
     */
    public function setColor($color)
    {
        $this->color             = $color;
        $this->apiParas["dim1_val_gaea"]  = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param int[] $colorSort
     * 第一维度销售属顺序
     * Required: false
     * Example Value: 1
     */
    private $colorSort;

    /**
     * @param int[] $colorSort
     * 第一维度销售属顺序
     * Example Value: 1
     */
    public function setColorSort($colorSort)
    {
        $this->colorSort             = $colorSort;
        $this->apiParas["dim1_sort_gaea"]  = $colorSort;
    }

    public function getColorSort()
    {
        return $this->colorSort;
    }

    /**
     * @param string[] $size
     * 第二维度销售属性值 属性名参见接口jingdong.vc.item.saleAttributeSettings.get
     * Required: false
     * Example Value: S1
     */
    private $size;

    /**
     * @param string[] $size
     * 第二维度销售属性值 属性名参见接口jingdong.vc.item.saleAttributeSettings.get
     * Example Value: S1
     */
    public function setSize($size)
    {
        $this->size             = $size;
        $this->apiParas["dim2_val_gaea"]  = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string[] $sizeSort
     * 第二维度销售属性顺序
     * Required: false
     * Example Value: 1
     */
    private $sizeSort;

    /**
     * @param string[] $sizeSort
     * 第二维度销售属性顺序
     * Example Value: 1
     */
    public function setSizeSort($sizeSort)
    {
        $this->sizeSort             = $sizeSort;
        $this->apiParas["dim2_sort_gaea"]  = $sizeSort;
    }

    public function getSizeSort()
    {
        return $this->sizeSort;
    }

    /**
     * @param string[] $saleAttributesStr
     * 高维销售属性格式:dim.value.sequence;dim.value.sequence  字段含义:dim-维度值整数 value-属性值 sequence-顺序  必须按照dim顺序填写 维度信息参见接口jingdong.vc.item.saleAttributeSettings.get
     * Required: false
     * Example Value: 3.5V.1;4.6A.1
     */
    private $saleAttributesStr;

    /**
     * @param string[] $saleAttributesStr
     * 高维销售属性格式:dim.value.sequence;dim.value.sequence  字段含义:dim-维度值整数 value-属性值 sequence-顺序  必须按照dim顺序填写 维度信息参见接口jingdong.vc.item.saleAttributeSettings.get
     * Example Value: 3.5V.1;4.6A.1
     */
    public function setSaleAttributesStr($saleAttributesStr)
    {
        $this->saleAttributesStr             = $saleAttributesStr;
        $this->apiParas["other_sale_attribute_gaea"]  = $saleAttributesStr;
    }

    public function getSaleAttributesStr()
    {
        return $this->saleAttributesStr;
    }

    /**
     * @param string[] $marketPrice
     * 市场价（小数点后保留2位）
     * Required: false
     * Example Value: 1.11
     */
    private $marketPrice;

    /**
     * @param string[] $marketPrice
     * 市场价（小数点后保留2位）
     * Example Value: 1.11
     */
    public function setMarketPrice($marketPrice)
    {
        $this->marketPrice             = $marketPrice;
        $this->apiParas["market_price_gaea"]  = $marketPrice;
    }

    public function getMarketPrice()
    {
        return $this->marketPrice;
    }

    /**
     * @param string[] $purchasePrice
     * 采购价（小数点后保留2位)
     * Required: false
     * Example Value: 2.11
     */
    private $purchasePrice;

    /**
     * @param string[] $purchasePrice
     * 采购价（小数点后保留2位)
     * Example Value: 2.11
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice             = $purchasePrice;
        $this->apiParas["purchase_price_gaea"]  = $purchasePrice;
    }

    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }

    /**
     * @param string[] $memberPrice
     * 京东价（小数点后保留2位)
     * Required: false
     * Example Value: 3.11
     */
    private $memberPrice;

    /**
     * @param string[] $memberPrice
     * 京东价（小数点后保留2位)
     * Example Value: 3.11
     */
    public function setMemberPrice($memberPrice)
    {
        $this->memberPrice             = $memberPrice;
        $this->apiParas["member_price_gaea"]  = $memberPrice;
    }

    public function getMemberPrice()
    {
        return $this->memberPrice;
    }

    /**
     * @param string[] $weight
     * 单位:千克,含包装 最多输入9位，保留小数点后三位数字
     * Required: false
     * Example Value: 3
     */
    private $weight;

    /**
     * @param string[] $weight
     * 单位:千克,含包装 最多输入9位，保留小数点后三位数字
     * Example Value: 3
     */
    public function setWeight($weight)
    {
        $this->weight             = $weight;
        $this->apiParas["weight_gaea"]  = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int[] $length
     * 长度 单位:毫米,含包装 必须是正整数，最多输入9位
     * Required: false
     * Example Value: 3
     */
    private $length;

    /**
     * @param int[] $length
     * 长度 单位:毫米,含包装 必须是正整数，最多输入9位
     * Example Value: 3
     */
    public function setLength($length)
    {
        $this->length             = $length;
        $this->apiParas["length_gaea"]  = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int[] $width
     * 宽度 单位:毫米,含包装 必须是正整数，最多输入9位
     * Required: false
     * Example Value: 3
     */
    private $width;

    /**
     * @param int[] $width
     * 宽度 单位:毫米,含包装 必须是正整数，最多输入9位
     * Example Value: 3
     */
    public function setWidth($width)
    {
        $this->width             = $width;
        $this->apiParas["width_gaea"]  = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int[] $height
     * 高度 单位:毫米,含包装 必须是正整数，最多输入9位
     * Required: false
     * Example Value: 3
     */
    private $height;

    /**
     * @param int[] $height
     * 高度 单位:毫米,含包装 必须是正整数，最多输入9位
     * Example Value: 3
     */
    public function setHeight($height)
    {
        $this->height             = $height;
        $this->apiParas["height_gaea"]  = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string[] $upc
     * upc编码
     * Required: false
     * Example Value: 100000062482
     */
    private $upc;

    /**
     * @param string[] $upc
     * upc编码
     * Example Value: 100000062482
     */
    public function setUpc($upc)
    {
        $this->upc             = $upc;
        $this->apiParas["upc_gaea"]  = $upc;
    }

    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * @param string[] $itemNum
     * 货号
     * Required: false
     * Example Value: 12345312333
     */
    private $itemNum;

    /**
     * @param string[] $itemNum
     * 货号
     * Example Value: 12345312333
     */
    public function setItemNum($itemNum)
    {
        $this->itemNum             = $itemNum;
        $this->apiParas["item_num_gaea"]  = $itemNum;
    }

    public function getItemNum()
    {
        return $this->itemNum;
    }

    /**
     * @param int[] $type
     * 资质类型
     * Required: false
     * Example Value: 2
     */
    private $type;

    /**
     * @param int[] $type
     * 资质类型
     * Example Value: 2
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string[] $applicant
     * 3c证书委托人
     * Required: false
     * Example Value: 京东商城
     */
    private $applicant;

    /**
     * @param string[] $applicant
     * 3c证书委托人
     * Example Value: 京东商城
     */
    public function setApplicant($applicant)
    {
        $this->applicant             = $applicant;
        $this->apiParas["applicant"]  = $applicant;
    }

    public function getApplicant()
    {
        return $this->applicant;
    }

    /**
     * @param string[] $qcCode
     * 3c证书编号
     * Required: false
     * Example Value: 123223445
     */
    private $qcCode;

    /**
     * @param string[] $qcCode
     * 3c证书编号
     * Example Value: 123223445
     */
    public function setQcCode($qcCode)
    {
        $this->qcCode             = $qcCode;
        $this->apiParas["qc_code"]  = $qcCode;
    }

    public function getQcCode()
    {
        return $this->qcCode;
    }

    /**
     * @param string[] $endDate
     * 资质到期日期
     * Required: false
     * Example Value: 2016-08-09
     */
    private $endDate;

    /**
     * @param string[] $endDate
     * 资质到期日期
     * Example Value: 2016-08-09
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["end_date"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string[] $fileKeyList
     * 资质文件key列表，多个key中间用英文分号[;]进行分隔
     * Required: false
     * Example Value: 52c81484-7941-4017-a40b-d116d3b117a4.txt;52c81484-7941-4017-a40b-d116d3b117a4.txt
     */
    private $fileKeyList;

    /**
     * @param string[] $fileKeyList
     * 资质文件key列表，多个key中间用英文分号[;]进行分隔
     * Example Value: 52c81484-7941-4017-a40b-d116d3b117a4.txt;52c81484-7941-4017-a40b-d116d3b117a4.txt
     */
    public function setFileKeyList($fileKeyList)
    {
        $this->fileKeyList             = $fileKeyList;
        $this->apiParas["file_key_list"]  = $fileKeyList;
    }

    public function getFileKeyList()
    {
        return $this->fileKeyList;
    }

}