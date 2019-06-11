<?php

namespace JD\request;

/**
 * 商品备案
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2225&apiName=jingdong.eclp.goods.saveGoodsRecord
 * Class EclpGoodsSaveGoodsRecord
 * @package Jd\request
 */
class EclpGoodsSaveGoodsRecord
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.goods.saveGoodsRecord";
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
     * @param String $bondedArea
     * 保税区编码;如果是备货则必填，其它非必填；京东提供清关地编码
     * Required: false
     * Example Value: 
     */
    private $bondedArea;

    /**
     * @param String $bondedArea
     * 保税区编码;如果是备货则必填，其它非必填；京东提供清关地编码
     * Example Value: 
     */
    public function setBondedArea($bondedArea)
    {
        $this->bondedArea             = $bondedArea;
        $this->apiParas["bondedArea"]  = $bondedArea;
    }

    public function getBondedArea()
    {
        return $this->bondedArea;
    }

    /**
     * @param String $platformId
     * 三方平台编号; 三方平台标识，由京东侧提供
     * Required: true
     * Example Value: 
     */
    private $platformId;

    /**
     * @param String $platformId
     * 三方平台编号; 三方平台标识，由京东侧提供
     * Example Value: 
     */
    public function setPlatformId($platformId)
    {
        $this->platformId             = $platformId;
        $this->apiParas["platformId"]  = $platformId;
    }

    public function getPlatformId()
    {
        return $this->platformId;
    }

    /**
     * @param String $platformName
     * 三方平台名称; 三方平台名称，由京东侧提供
     * Required: true
     * Example Value: 
     */
    private $platformName;

    /**
     * @param String $platformName
     * 三方平台名称; 三方平台名称，由京东侧提供
     * Example Value: 
     */
    public function setPlatformName($platformName)
    {
        $this->platformName             = $platformName;
        $this->apiParas["platformName"]  = $platformName;
    }

    public function getPlatformName()
    {
        return $this->platformName;
    }

    /**
     * @param String $venderId
     * 商家ID;京东平台商家必填
     * Required: false
     * Example Value: 
     */
    private $venderId;

    /**
     * @param String $venderId
     * 商家ID;京东平台商家必填
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    /**
     * @param String $deptNo
     * eclp事业部编号; 必填
     * Required: true
     * Example Value: 
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * eclp事业部编号; 必填
     * Example Value: 
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"]  = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    /**
     * @param String $pattern
     * 跨境业务模式; 备货=beihuo，直邮=zhiyou，集货=jihuo，个人快件=grkuaijian，邮路=youzheng
     * Required: true
     * Example Value: 
     */
    private $pattern;

    /**
     * @param String $pattern
     * 跨境业务模式; 备货=beihuo，直邮=zhiyou，集货=jihuo，个人快件=grkuaijian，邮路=youzheng
     * Example Value: 
     */
    public function setPattern($pattern)
    {
        $this->pattern             = $pattern;
        $this->apiParas["pattern"]  = $pattern;
    }

    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param String $isvGoodsNo
     * ISV主商品编码
     * Required: true
     * Example Value: 
     */
    private $isvGoodsNo;

    /**
     * @param String $isvGoodsNo
     * ISV主商品编码
     * Example Value: 
     */
    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo             = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"]  = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    /**
     * @param String $skuId
     * 销售平台商品编码,商品sku；非京东平台，则填写商品在该平台的销售编号
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param String $skuId
     * 销售平台商品编码,商品sku；非京东平台，则填写商品在该平台的销售编号
     * Example Value: 
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
     * @param String $barcodes
     * 条形码/UPC; 不能有空格，校验UPC不等于sku id
     * Required: true
     * Example Value: 
     */
    private $barcodes;

    /**
     * @param String $barcodes
     * 条形码/UPC; 不能有空格，校验UPC不等于sku id
     * Example Value: 
     */
    public function setBarcodes($barcodes)
    {
        $this->barcodes             = $barcodes;
        $this->apiParas["barcodes"]  = $barcodes;
    }

    public function getBarcodes()
    {
        return $this->barcodes;
    }

    /**
     * @param  $postChangeType
     * 备案类型:1-新增, 2-变更，默认为1
     * Required: true
     * Example Value: 
     */
    private $postChangeType;

    /**
     * @param  $postChangeType
     * 备案类型:1-新增, 2-变更，默认为1
     * Example Value: 
     */
    public function setPostChangeType($postChangeType)
    {
        $this->postChangeType             = $postChangeType;
        $this->apiParas["postChangeType"]  = $postChangeType;
    }

    public function getPostChangeType()
    {
        return $this->postChangeType;
    }

    /**
     * @param String $brand
     * 品牌（中文）; 默认为空；
     * Required: false
     * Example Value: 
     */
    private $brand;

    /**
     * @param String $brand
     * 品牌（中文）; 默认为空；
     * Example Value: 
     */
    public function setBrand($brand)
    {
        $this->brand             = $brand;
        $this->apiParas["brand"]  = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param String $brandEn
     * 品牌（英文）; 产品外包装上的品牌，要与产品名称中文品牌对应
     * Required: false
     * Example Value: 
     */
    private $brandEn;

    /**
     * @param String $brandEn
     * 品牌（英文）; 产品外包装上的品牌，要与产品名称中文品牌对应
     * Example Value: 
     */
    public function setBrandEn($brandEn)
    {
        $this->brandEn             = $brandEn;
        $this->apiParas["brandEn"]  = $brandEn;
    }

    public function getBrandEn()
    {
        return $this->brandEn;
    }

    /**
     * @param String $goodsName
     * 商品备案名称;商品名称含品牌，规格和描述，其中：描述必须清晰易懂、完整，能直观判断出是何种商品及货物形态（粉、片、剂、胶囊等），如鱼油胶囊不能只录入鱼油。商品名称中含有过激词语、功效成分词，医药成分词，如野生、有机、缓解、治疗等。
     * Required: true
     * Example Value: 
     */
    private $goodsName;

    /**
     * @param String $goodsName
     * 商品备案名称;商品名称含品牌，规格和描述，其中：描述必须清晰易懂、完整，能直观判断出是何种商品及货物形态（粉、片、剂、胶囊等），如鱼油胶囊不能只录入鱼油。商品名称中含有过激词语、功效成分词，医药成分词，如野生、有机、缓解、治疗等。
     * Example Value: 
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName             = $goodsName;
        $this->apiParas["goodsName"]  = $goodsName;
    }

    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * @param String $goodsNameEn
     * 商品名称（英文），产品外包装上的名称，要与产品名称中文名称对应
     * Required: true
     * Example Value: 
     */
    private $goodsNameEn;

    /**
     * @param String $goodsNameEn
     * 商品名称（英文），产品外包装上的名称，要与产品名称中文名称对应
     * Example Value: 
     */
    public function setGoodsNameEn($goodsNameEn)
    {
        $this->goodsNameEn             = $goodsNameEn;
        $this->apiParas["goodsNameEn"]  = $goodsNameEn;
    }

    public function getGoodsNameEn()
    {
        return $this->goodsNameEn;
    }

    /**
     * @param String $modelNumber
     * 型号; 如果个人快递，邮路则非必填，其他必填；没有填“无”如纸尿裤XL 30片/包，此处填“XL”
     * Required: false
     * Example Value: 
     */
    private $modelNumber;

    /**
     * @param String $modelNumber
     * 型号; 如果个人快递，邮路则非必填，其他必填；没有填“无”如纸尿裤XL 30片/包，此处填“XL”
     * Example Value: 
     */
    public function setModelNumber($modelNumber)
    {
        $this->modelNumber             = $modelNumber;
        $this->apiParas["modelNumber"]  = $modelNumber;
    }

    public function getModelNumber()
    {
        return $this->modelNumber;
    }

    /**
     * @param String $spe
     * 规格; 以“400ml/瓶”或“800g/罐”的格式填写；套装填写格式为（400ml/瓶+5片/盒）/套
     * Required: true
     * Example Value: 
     */
    private $spe;

    /**
     * @param String $spe
     * 规格; 以“400ml/瓶”或“800g/罐”的格式填写；套装填写格式为（400ml/瓶+5片/盒）/套
     * Example Value: 
     */
    public function setSpe($spe)
    {
        $this->spe             = $spe;
        $this->apiParas["spe"]  = $spe;
    }

    public function getSpe()
    {
        return $this->spe;
    }

    /**
     * @param String $unit
     * 申报/合同单位; 根据规格带出
     * Required: true
     * Example Value: 
     */
    private $unit;

    /**
     * @param String $unit
     * 申报/合同单位; 根据规格带出
     * Example Value: 
     */
    public function setUnit($unit)
    {
        $this->unit             = $unit;
        $this->apiParas["unit"]  = $unit;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param String $grossWeight
     * 毛重(kg); 带包装的重量；毛重必须大于净重
     * Required: true
     * Example Value: 
     */
    private $grossWeight;

    /**
     * @param String $grossWeight
     * 毛重(kg); 带包装的重量；毛重必须大于净重
     * Example Value: 
     */
    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight             = $grossWeight;
        $this->apiParas["grossWeight"]  = $grossWeight;
    }

    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    /**
     * @param String $netWeight
     * 净重(kg); 不带包装的重量（有效成分重量），化妆品需要与第一数量一致
     * Required: true
     * Example Value: 
     */
    private $netWeight;

    /**
     * @param String $netWeight
     * 净重(kg); 不带包装的重量（有效成分重量），化妆品需要与第一数量一致
     * Example Value: 
     */
    public function setNetWeight($netWeight)
    {
        $this->netWeight             = $netWeight;
        $this->apiParas["netWeight"]  = $netWeight;
    }

    public function getNetWeight()
    {
        return $this->netWeight;
    }

    /**
     * @param String $hsCode
     * HS编码; 如果个人快递，邮路则非必填，其他必填；通关网查询http://www.hscode.net/
     * Required: false
     * Example Value: 
     */
    private $hsCode;

    /**
     * @param String $hsCode
     * HS编码; 如果个人快递，邮路则非必填，其他必填；通关网查询http://www.hscode.net/
     * Example Value: 
     */
    public function setHsCode($hsCode)
    {
        $this->hsCode             = $hsCode;
        $this->apiParas["hsCode"]  = $hsCode;
    }

    public function getHsCode()
    {
        return $this->hsCode;
    }

    /**
     * @param Number $vatRate
     * 增值税率; 如果个人快递，邮路则非必填，其他必填；填写整数，例如：16%增值税，传16
     * Required: false
     * Example Value: 
     */
    private $vatRate;

    /**
     * @param Number $vatRate
     * 增值税率; 如果个人快递，邮路则非必填，其他必填；填写整数，例如：16%增值税，传16
     * Example Value: 
     */
    public function setVatRate($vatRate)
    {
        $this->vatRate             = $vatRate;
        $this->apiParas["vatRate"]  = $vatRate;
    }

    public function getVatRate()
    {
        return $this->vatRate;
    }

    /**
     * @param Number $taxRate
     * 消费税率; 如果个人快递，邮路则非必填，其他必填；消费税率; 填写整数，例如：30%消费税，传30
     * Required: false
     * Example Value: 
     */
    private $taxRate;

    /**
     * @param Number $taxRate
     * 消费税率; 如果个人快递，邮路则非必填，其他必填；消费税率; 填写整数，例如：30%消费税，传30
     * Example Value: 
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate             = $taxRate;
        $this->apiParas["taxRate"]  = $taxRate;
    }

    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @param String $hgsbys
     * 海关申报要素; 如果个人快递，邮路则非必填，其他必填；根据申报要素所需的项目内容填写，每项内容之间用分号隔开
     * Required: false
     * Example Value: 
     */
    private $hgsbys;

    /**
     * @param String $hgsbys
     * 海关申报要素; 如果个人快递，邮路则非必填，其他必填；根据申报要素所需的项目内容填写，每项内容之间用分号隔开
     * Example Value: 
     */
    public function setHgsbys($hgsbys)
    {
        $this->hgsbys             = $hgsbys;
        $this->apiParas["hgsbys"]  = $hgsbys;
    }

    public function getHgsbys()
    {
        return $this->hgsbys;
    }

    /**
     * @param String $function
     * 功能; 如果个人快递，邮路则非必填，其他必填；如清洁、装饰、保暖等
     * Required: false
     * Example Value: 
     */
    private $function;

    /**
     * @param String $function
     * 功能; 如果个人快递，邮路则非必填，其他必填；如清洁、装饰、保暖等
     * Example Value: 
     */
    public function setFunction($function)
    {
        $this->function             = $function;
        $this->apiParas["function"]  = $function;
    }

    public function getFunction()
    {
        return $this->function;
    }

    /**
     * @param String $purpose
     * 用途,如果个人快递，邮路则非必填，其他必填；用途; 如婴幼儿饮品，服装穿戴，保护设施等
     * Required: false
     * Example Value: 
     */
    private $purpose;

    /**
     * @param String $purpose
     * 用途,如果个人快递，邮路则非必填，其他必填；用途; 如婴幼儿饮品，服装穿戴，保护设施等
     * Example Value: 
     */
    public function setPurpose($purpose)
    {
        $this->purpose             = $purpose;
        $this->apiParas["purpose"]  = $purpose;
    }

    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param String $composition
     * 成份;如果个人快递，邮路则非必填，其他必填；产品的完整的配料成分，禁止填写营养成分，成分按照主次顺序填写，相加等于100%，成分与商品名称填写相符（例如：脱脂牛奶70%，浓缩乳清蛋白10%，乳铁蛋白10%，乳糖10%）
     * Required: false
     * Example Value: 
     */
    private $composition;

    /**
     * @param String $composition
     * 成份;如果个人快递，邮路则非必填，其他必填；产品的完整的配料成分，禁止填写营养成分，成分按照主次顺序填写，相加等于100%，成分与商品名称填写相符（例如：脱脂牛奶70%，浓缩乳清蛋白10%，乳铁蛋白10%，乳糖10%）
     * Example Value: 
     */
    public function setComposition($composition)
    {
        $this->composition             = $composition;
        $this->apiParas["composition"]  = $composition;
    }

    public function getComposition()
    {
        return $this->composition;
    }

    /**
     * @param String $enterpriseName
     * 生产企业名称; 如果个人快递，邮路则非必填，其他必填；生产企业请填写全称，精确到“CO.,LTD”如“Milupa GmbH”
     * Required: false
     * Example Value: 
     */
    private $enterpriseName;

    /**
     * @param String $enterpriseName
     * 生产企业名称; 如果个人快递，邮路则非必填，其他必填；生产企业请填写全称，精确到“CO.,LTD”如“Milupa GmbH”
     * Example Value: 
     */
    public function setEnterpriseName($enterpriseName)
    {
        $this->enterpriseName             = $enterpriseName;
        $this->apiParas["enterpriseName"]  = $enterpriseName;
    }

    public function getEnterpriseName()
    {
        return $this->enterpriseName;
    }

    /**
     * @param String $enterpriseAddress
     * 生产企业地址（奶制品必填） 奶制品必填，奶制品生产企业名称及地址要与网上备案的一致，以下网址可参考查询http://www.cnca.gov.cn/ywzl/gjgnhz/jkzl/
     * Required: false
     * Example Value: 
     */
    private $enterpriseAddress;

    /**
     * @param String $enterpriseAddress
     * 生产企业地址（奶制品必填） 奶制品必填，奶制品生产企业名称及地址要与网上备案的一致，以下网址可参考查询http://www.cnca.gov.cn/ywzl/gjgnhz/jkzl/
     * Example Value: 
     */
    public function setEnterpriseAddress($enterpriseAddress)
    {
        $this->enterpriseAddress             = $enterpriseAddress;
        $this->apiParas["enterpriseAddress"]  = $enterpriseAddress;
    }

    public function getEnterpriseAddress()
    {
        return $this->enterpriseAddress;
    }

    /**
     * @param String $country
     * 海关原产国; 海关原产国；商家填中文；
     * Required: true
     * Example Value: 
     */
    private $country;

    /**
     * @param String $country
     * 海关原产国; 海关原产国；商家填中文；
     * Example Value: 
     */
    public function setCountry($country)
    {
        $this->country             = $country;
        $this->apiParas["country"]  = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param String $qiCountry
     * 国检原产国; 国检原产国；商家填中文；
     * Required: true
     * Example Value: 
     */
    private $qiCountry;

    /**
     * @param String $qiCountry
     * 国检原产国; 国检原产国；商家填中文；
     * Example Value: 
     */
    public function setQiCountry($qiCountry)
    {
        $this->qiCountry             = $qiCountry;
        $this->apiParas["qiCountry"]  = $qiCountry;
    }

    public function getQiCountry()
    {
        return $this->qiCountry;
    }

    /**
     * @param String $originRegion
     * 原产地区; 日本产品必填，需要精确到市县;
     * Required: false
     * Example Value: 
     */
    private $originRegion;

    /**
     * @param String $originRegion
     * 原产地区; 日本产品必填，需要精确到市县;
     * Example Value: 
     */
    public function setOriginRegion($originRegion)
    {
        $this->originRegion             = $originRegion;
        $this->apiParas["originRegion"]  = $originRegion;
    }

    public function getOriginRegion()
    {
        return $this->originRegion;
    }

    /**
     * @param String $goodsCostPrice
     * 商品成本价（人民币）   如果个人快递，邮路则非必填，其他必填；仅备案使用，不要与实际成本价相差太多 
     * Required: false
     * Example Value: 
     */
    private $goodsCostPrice;

    /**
     * @param String $goodsCostPrice
     * 商品成本价（人民币）   如果个人快递，邮路则非必填，其他必填；仅备案使用，不要与实际成本价相差太多 
     * Example Value: 
     */
    public function setGoodsCostPrice($goodsCostPrice)
    {
        $this->goodsCostPrice             = $goodsCostPrice;
        $this->apiParas["goodsCostPrice"]  = $goodsCostPrice;
    }

    public function getGoodsCostPrice()
    {
        return $this->goodsCostPrice;
    }

    /**
     * @param String $goodsSellerPrice
     * 商品销售价（人民币）   仅备案使用，不要与销售价相差太多;  
     * Required: false
     * Example Value: 
     */
    private $goodsSellerPrice;

    /**
     * @param String $goodsSellerPrice
     * 商品销售价（人民币）   仅备案使用，不要与销售价相差太多;  
     * Example Value: 
     */
    public function setGoodsSellerPrice($goodsSellerPrice)
    {
        $this->goodsSellerPrice             = $goodsSellerPrice;
        $this->apiParas["goodsSellerPrice"]  = $goodsSellerPrice;
    }

    public function getGoodsSellerPrice()
    {
        return $this->goodsSellerPrice;
    }

    /**
     * @param String $volume
     * 体积
     * Required: false
     * Example Value: 
     */
    private $volume;

    /**
     * @param String $volume
     * 体积
     * Example Value: 
     */
    public function setVolume($volume)
    {
        $this->volume             = $volume;
        $this->apiParas["volume"]  = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param Number $safeDays
     * 保质期（天数）; 如果是备货则必填，其他为非必填；按天为单位折算成保质期，如6个月，6*30=180，此处填180，保质期一年要填365
     * Required: false
     * Example Value: 
     */
    private $safeDays;

    /**
     * @param Number $safeDays
     * 保质期（天数）; 如果是备货则必填，其他为非必填；按天为单位折算成保质期，如6个月，6*30=180，此处填180，保质期一年要填365
     * Example Value: 
     */
    public function setSafeDays($safeDays)
    {
        $this->safeDays             = $safeDays;
        $this->apiParas["safeDays"]  = $safeDays;
    }

    public function getSafeDays()
    {
        return $this->safeDays;
    }

    /**
     * @param String $saleWebPage
     * 销售网址;如果是备货则必填，其他为非必填；按天为单位折算成保质    
     * Required: false
     * Example Value: 
     */
    private $saleWebPage;

    /**
     * @param String $saleWebPage
     * 销售网址;如果是备货则必填，其他为非必填；按天为单位折算成保质    
     * Example Value: 
     */
    public function setSaleWebPage($saleWebPage)
    {
        $this->saleWebPage             = $saleWebPage;
        $this->apiParas["saleWebPage"]  = $saleWebPage;
    }

    public function getSaleWebPage()
    {
        return $this->saleWebPage;
    }

    /**
     * @param String $contacts
     * 商家联系人,便于资料补充及修改
     * Required: false
     * Example Value: 
     */
    private $contacts;

    /**
     * @param String $contacts
     * 商家联系人,便于资料补充及修改
     * Example Value: 
     */
    public function setContacts($contacts)
    {
        $this->contacts             = $contacts;
        $this->apiParas["contacts"]  = $contacts;
    }

    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param String $email
     * 商家邮箱,便于资料补充及修改
     * Required: false
     * Example Value: 
     */
    private $email;

    /**
     * @param String $email
     * 商家邮箱,便于资料补充及修改
     * Example Value: 
     */
    public function setEmail($email)
    {
        $this->email             = $email;
        $this->apiParas["email"]  = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param String $telephone
     * 商家联系电话,便于资料补充及修改
     * Required: false
     * Example Value: 
     */
    private $telephone;

    /**
     * @param String $telephone
     * 商家联系电话,便于资料补充及修改
     * Example Value: 
     */
    public function setTelephone($telephone)
    {
        $this->telephone             = $telephone;
        $this->apiParas["telephone"]  = $telephone;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param String $remark
     * 备注
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param String $remark
     * 备注
     * Example Value: 
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param String $reserve1
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve1;

    /**
     * @param String $reserve1
     * 预留字段
     * Example Value: 
     */
    public function setReserve1($reserve1)
    {
        $this->reserve1             = $reserve1;
        $this->apiParas["reserve1"]  = $reserve1;
    }

    public function getReserve1()
    {
        return $this->reserve1;
    }

    /**
     * @param String $reserve2
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve2;

    /**
     * @param String $reserve2
     * 预留字段
     * Example Value: 
     */
    public function setReserve2($reserve2)
    {
        $this->reserve2             = $reserve2;
        $this->apiParas["reserve2"]  = $reserve2;
    }

    public function getReserve2()
    {
        return $this->reserve2;
    }

    /**
     * @param String $reserve3
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve3;

    /**
     * @param String $reserve3
     * 预留字段
     * Example Value: 
     */
    public function setReserve3($reserve3)
    {
        $this->reserve3             = $reserve3;
        $this->apiParas["reserve3"]  = $reserve3;
    }

    public function getReserve3()
    {
        return $this->reserve3;
    }

    /**
     * @param String $reserve4
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve4;

    /**
     * @param String $reserve4
     * 预留字段
     * Example Value: 
     */
    public function setReserve4($reserve4)
    {
        $this->reserve4             = $reserve4;
        $this->apiParas["reserve4"]  = $reserve4;
    }

    public function getReserve4()
    {
        return $this->reserve4;
    }

    /**
     * @param String $reserve5
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve5;

    /**
     * @param String $reserve5
     * 预留字段
     * Example Value: 
     */
    public function setReserve5($reserve5)
    {
        $this->reserve5             = $reserve5;
        $this->apiParas["reserve5"]  = $reserve5;
    }

    public function getReserve5()
    {
        return $this->reserve5;
    }

}