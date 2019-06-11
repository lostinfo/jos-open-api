<?php

namespace JD\request;

/**
 * 赤道独立站仅申报或重推接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2219&apiName=jingdong.eclp.order.equatorOrderCustoms
 * Class EclpOrderEquatorOrderCustoms
 * @package Jd\request
 */
class EclpOrderEquatorOrderCustoms
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.equatorOrderCustoms";
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
     * @param String $isvUUID
     * isv出库单号，作为isv出库的唯一性校验码(长度不能超过125)
     * Required: true
     * Example Value: 
     */
    private $isvUUID;

    /**
     * @param String $isvUUID
     * isv出库单号，作为isv出库的唯一性校验码(长度不能超过125)
     * Example Value: 
     */
    public function setIsvUUID($isvUUID)
    {
        $this->isvUUID             = $isvUUID;
        $this->apiParas["isvUUID"]  = $isvUUID;
    }

    public function getIsvUUID()
    {
        return $this->isvUUID;
    }

    /**
     * @param String $isvSource
     * ISV来源编号 
     * Required: true
     * Example Value: 
     */
    private $isvSource;

    /**
     * @param String $isvSource
     * ISV来源编号 
     * Example Value: 
     */
    public function setIsvSource($isvSource)
    {
        $this->isvSource             = $isvSource;
        $this->apiParas["isvSource"]  = $isvSource;
    }

    public function getIsvSource()
    {
        return $this->isvSource;
    }

    /**
     * @param String $platformId
     * 三方平台编号(商家编号),长度不超过20
     * Required: true
     * Example Value: 
     */
    private $platformId;

    /**
     * @param String $platformId
     * 三方平台编号(商家编号),长度不超过20
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
     * 三方平台名称(商家名称),长度不超过100
     * Required: true
     * Example Value: 
     */
    private $platformName;

    /**
     * @param String $platformName
     * 三方平台名称(商家名称),长度不超过100
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
     * @param String $platformType
     * 销售平台类型(1.电商平台 2.商家系统)
     * Required: true
     * Example Value: 
     */
    private $platformType;

    /**
     * @param String $platformType
     * 销售平台类型(1.电商平台 2.商家系统)
     * Example Value: 
     */
    public function setPlatformType($platformType)
    {
        $this->platformType             = $platformType;
        $this->apiParas["platformType"]  = $platformType;
    }

    public function getPlatformType()
    {
        return $this->platformType;
    }

    /**
     * @param String $spSoNo
     * 销售平台单号,长度不超过200
     * Required: true
     * Example Value: 
     */
    private $spSoNo;

    /**
     * @param String $spSoNo
     * 销售平台单号,长度不超过200
     * Example Value: 
     */
    public function setSpSoNo($spSoNo)
    {
        $this->spSoNo             = $spSoNo;
        $this->apiParas["spSoNo"]  = $spSoNo;
    }

    public function getSpSoNo()
    {
        return $this->spSoNo;
    }

    /**
     * @param String $deptNo
     * 事业部编号且与pin匹配,否则拒单,必须是以EBU开头数字结尾的字符串
     * Required: true
     * Example Value: 
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编号且与pin匹配,否则拒单,必须是以EBU开头数字结尾的字符串
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
     * @param String $inJdwms
     * 是否入京仓(0:否,1:入京仓)
     * Required: true
     * Example Value: 
     */
    private $inJdwms;

    /**
     * @param String $inJdwms
     * 是否入京仓(0:否,1:入京仓)
     * Example Value: 
     */
    public function setInJdwms($inJdwms)
    {
        $this->inJdwms             = $inJdwms;
        $this->apiParas["inJdwms"]  = $inJdwms;
    }

    public function getInJdwms()
    {
        return $this->inJdwms;
    }

    /**
     * @param Date $salesPlatformCreateTime
     * 订单创建时间(销售平台下单时间),没有指定则默认京东接单时间,格式为：yyyy-mm-dd HH:mm:ss
     * Required: true
     * Example Value: 
     */
    private $salesPlatformCreateTime;

    /**
     * @param Date $salesPlatformCreateTime
     * 订单创建时间(销售平台下单时间),没有指定则默认京东接单时间,格式为：yyyy-mm-dd HH:mm:ss
     * Example Value: 
     */
    public function setSalesPlatformCreateTime($salesPlatformCreateTime)
    {
        $this->salesPlatformCreateTime             = $salesPlatformCreateTime;
        $this->apiParas["salesPlatformCreateTime"]  = $salesPlatformCreateTime;
    }

    public function getSalesPlatformCreateTime()
    {
        return $this->salesPlatformCreateTime;
    }

    /**
     * @param String $venderId
     * 商家编号
     * Required: false
     * Example Value: 
     */
    private $venderId;

    /**
     * @param String $venderId
     * 商家编号
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
     * @param String $venderName
     * 商家名称
     * Required: false
     * Example Value: 
     */
    private $venderName;

    /**
     * @param String $venderName
     * 商家名称
     * Example Value: 
     */
    public function setVenderName($venderName)
    {
        $this->venderName             = $venderName;
        $this->apiParas["venderName"]  = $venderName;
    }

    public function getVenderName()
    {
        return $this->venderName;
    }

    /**
     * @param String $consigneeName
     * 收货人(最大支持20个汉字)
     * Required: true
     * Example Value: 
     */
    private $consigneeName;

    /**
     * @param String $consigneeName
     * 收货人(最大支持20个汉字)
     * Example Value: 
     */
    public function setConsigneeName($consigneeName)
    {
        $this->consigneeName             = $consigneeName;
        $this->apiParas["consigneeName"]  = $consigneeName;
    }

    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

    /**
     * @param String $consigneeMobile
     * 收货人手机(收件人电话、手机至少有一个不为空),长度不超过30
     * Required: false
     * Example Value: 
     */
    private $consigneeMobile;

    /**
     * @param String $consigneeMobile
     * 收货人手机(收件人电话、手机至少有一个不为空),长度不超过30
     * Example Value: 
     */
    public function setConsigneeMobile($consigneeMobile)
    {
        $this->consigneeMobile             = $consigneeMobile;
        $this->apiParas["consigneeMobile"]  = $consigneeMobile;
    }

    public function getConsigneeMobile()
    {
        return $this->consigneeMobile;
    }

    /**
     * @param String $consigneePhone
     * 收货人电话(收件人电话、手机至少有一个不为空),长度不超过20
     * Required: false
     * Example Value: 
     */
    private $consigneePhone;

    /**
     * @param String $consigneePhone
     * 收货人电话(收件人电话、手机至少有一个不为空),长度不超过20
     * Example Value: 
     */
    public function setConsigneePhone($consigneePhone)
    {
        $this->consigneePhone             = $consigneePhone;
        $this->apiParas["consigneePhone"]  = $consigneePhone;
    }

    public function getConsigneePhone()
    {
        return $this->consigneePhone;
    }

    /**
     * @param String $consigneeEmail
     * 收货人邮箱,长度不超过100
     * Required: false
     * Example Value: 
     */
    private $consigneeEmail;

    /**
     * @param String $consigneeEmail
     * 收货人邮箱,长度不超过100
     * Example Value: 
     */
    public function setConsigneeEmail($consigneeEmail)
    {
        $this->consigneeEmail             = $consigneeEmail;
        $this->apiParas["consigneeEmail"]  = $consigneeEmail;
    }

    public function getConsigneeEmail()
    {
        return $this->consigneeEmail;
    }

    /**
     * @param String $consigneeAddress
     * 收货人地址(最大支持125个汉字)
     * Required: true
     * Example Value: 
     */
    private $consigneeAddress;

    /**
     * @param String $consigneeAddress
     * 收货人地址(最大支持125个汉字)
     * Example Value: 
     */
    public function setConsigneeAddress($consigneeAddress)
    {
        $this->consigneeAddress             = $consigneeAddress;
        $this->apiParas["consigneeAddress"]  = $consigneeAddress;
    }

    public function getConsigneeAddress()
    {
        return $this->consigneeAddress;
    }

    /**
     * @param String $consigneePostcode
     * 收货人邮政编码
     * Required: false
     * Example Value: 
     */
    private $consigneePostcode;

    /**
     * @param String $consigneePostcode
     * 收货人邮政编码
     * Example Value: 
     */
    public function setConsigneePostcode($consigneePostcode)
    {
        $this->consigneePostcode             = $consigneePostcode;
        $this->apiParas["consigneePostcode"]  = $consigneePostcode;
    }

    public function getConsigneePostcode()
    {
        return $this->consigneePostcode;
    }

    /**
     * @param String $consigneeCountry
     * 收货人所在国家(地区)代码
     * Required: true
     * Example Value: 
     */
    private $consigneeCountry;

    /**
     * @param String $consigneeCountry
     * 收货人所在国家(地区)代码
     * Example Value: 
     */
    public function setConsigneeCountry($consigneeCountry)
    {
        $this->consigneeCountry             = $consigneeCountry;
        $this->apiParas["consigneeCountry"]  = $consigneeCountry;
    }

    public function getConsigneeCountry()
    {
        return $this->consigneeCountry;
    }

    /**
     * @param String $addressProvince
     * 收货地址-省名称 长度不超过30
     * Required: true
     * Example Value: 
     */
    private $addressProvince;

    /**
     * @param String $addressProvince
     * 收货地址-省名称 长度不超过30
     * Example Value: 
     */
    public function setAddressProvince($addressProvince)
    {
        $this->addressProvince             = $addressProvince;
        $this->apiParas["addressProvince"]  = $addressProvince;
    }

    public function getAddressProvince()
    {
        return $this->addressProvince;
    }

    /**
     * @param String $addressCity
     * 收货地址-市名称 长度不超过30
     * Required: true
     * Example Value: 
     */
    private $addressCity;

    /**
     * @param String $addressCity
     * 收货地址-市名称 长度不超过30
     * Example Value: 
     */
    public function setAddressCity($addressCity)
    {
        $this->addressCity             = $addressCity;
        $this->apiParas["addressCity"]  = $addressCity;
    }

    public function getAddressCity()
    {
        return $this->addressCity;
    }

    /**
     * @param String $addressCounty
     * 收货地址-县名称 长度不超过30
     * Required: true
     * Example Value: 
     */
    private $addressCounty;

    /**
     * @param String $addressCounty
     * 收货地址-县名称 长度不超过30
     * Example Value: 
     */
    public function setAddressCounty($addressCounty)
    {
        $this->addressCounty             = $addressCounty;
        $this->apiParas["addressCounty"]  = $addressCounty;
    }

    public function getAddressCounty()
    {
        return $this->addressCounty;
    }

    /**
     * @param String $addressTown
     * 收货地址-镇名称 长度不超过30
     * Required: false
     * Example Value: 
     */
    private $addressTown;

    /**
     * @param String $addressTown
     * 收货地址-镇名称 长度不超过30
     * Example Value: 
     */
    public function setAddressTown($addressTown)
    {
        $this->addressTown             = $addressTown;
        $this->apiParas["addressTown"]  = $addressTown;
    }

    public function getAddressTown()
    {
        return $this->addressTown;
    }

    /**
     * @param String $declareOrder
     * 是否申报订单(1.是 2.否)
     * Required: true
     * Example Value: 
     */
    private $declareOrder;

    /**
     * @param String $declareOrder
     * 是否申报订单(1.是 2.否)
     * Example Value: 
     */
    public function setDeclareOrder($declareOrder)
    {
        $this->declareOrder             = $declareOrder;
        $this->apiParas["declareOrder"]  = $declareOrder;
    }

    public function getDeclareOrder()
    {
        return $this->declareOrder;
    }

    /**
     * @param String $ccProvider
     * 清关服务商编码 长度不超过30
     * Required: true
     * Example Value: 
     */
    private $ccProvider;

    /**
     * @param String $ccProvider
     * 清关服务商编码 长度不超过30
     * Example Value: 
     */
    public function setCcProvider($ccProvider)
    {
        $this->ccProvider             = $ccProvider;
        $this->apiParas["ccProvider"]  = $ccProvider;
    }

    public function getCcProvider()
    {
        return $this->ccProvider;
    }

    /**
     * @param String $ccProviderName
     * 服务商名称 长度不超过100
     * Required: true
     * Example Value: 
     */
    private $ccProviderName;

    /**
     * @param String $ccProviderName
     * 服务商名称 长度不超过100
     * Example Value: 
     */
    public function setCcProviderName($ccProviderName)
    {
        $this->ccProviderName             = $ccProviderName;
        $this->apiParas["ccProviderName"]  = $ccProviderName;
    }

    public function getCcProviderName()
    {
        return $this->ccProviderName;
    }

    /**
     * @param String $postType
     * 申报订单类型(电商平台的订单类型 I-进口商品订单；E-出口商品订单)
     * Required: true
     * Example Value: 
     */
    private $postType;

    /**
     * @param String $postType
     * 申报订单类型(电商平台的订单类型 I-进口商品订单；E-出口商品订单)
     * Example Value: 
     */
    public function setPostType($postType)
    {
        $this->postType             = $postType;
        $this->apiParas["postType"]  = $postType;
    }

    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * @param String $pattern
     * 跨境业务模式(备货=beihuo，直邮=zhiyou，集货=jihuo，个人快件=grkuaijian，邮政=youzheng)
     * Required: true
     * Example Value: 
     */
    private $pattern;

    /**
     * @param String $pattern
     * 跨境业务模式(备货=beihuo，直邮=zhiyou，集货=jihuo，个人快件=grkuaijian，邮政=youzheng)
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
     * @param String $customs
     * 保税区编码,长度不超过50
     * Required: true
     * Example Value: 
     */
    private $customs;

    /**
     * @param String $customs
     * 保税区编码,长度不超过50
     * Example Value: 
     */
    public function setCustoms($customs)
    {
        $this->customs             = $customs;
        $this->apiParas["customs"]  = $customs;
    }

    public function getCustoms()
    {
        return $this->customs;
    }

    /**
     * @param String $warehouseNo
     * 11开头9位的eclp仓编码
     * Required: false
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 11开头9位的eclp仓编码
     * Example Value: 
     */
    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo             = $warehouseNo;
        $this->apiParas["warehouseNo"]  = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    /**
     * @param String $ebpCode
     * 电商平台代码(海关10位编码)
     * Required: false
     * Example Value: 
     */
    private $ebpCode;

    /**
     * @param String $ebpCode
     * 电商平台代码(海关10位编码)
     * Example Value: 
     */
    public function setEbpCode($ebpCode)
    {
        $this->ebpCode             = $ebpCode;
        $this->apiParas["ebpCode"]  = $ebpCode;
    }

    public function getEbpCode()
    {
        return $this->ebpCode;
    }

    /**
     * @param String $ebpName
     * 电商平台名称
     * Required: false
     * Example Value: 
     */
    private $ebpName;

    /**
     * @param String $ebpName
     * 电商平台名称
     * Example Value: 
     */
    public function setEbpName($ebpName)
    {
        $this->ebpName             = $ebpName;
        $this->apiParas["ebpName"]  = $ebpName;
    }

    public function getEbpName()
    {
        return $this->ebpName;
    }

    /**
     * @param String $ebcCode
     * 电商企业代码(海关10位编码)
     * Required: false
     * Example Value: 
     */
    private $ebcCode;

    /**
     * @param String $ebcCode
     * 电商企业代码(海关10位编码)
     * Example Value: 
     */
    public function setEbcCode($ebcCode)
    {
        $this->ebcCode             = $ebcCode;
        $this->apiParas["ebcCode"]  = $ebcCode;
    }

    public function getEbcCode()
    {
        return $this->ebcCode;
    }

    /**
     * @param String $ebcName
     * 电商企业名称
     * Required: false
     * Example Value: 
     */
    private $ebcName;

    /**
     * @param String $ebcName
     * 电商企业名称
     * Example Value: 
     */
    public function setEbcName($ebcName)
    {
        $this->ebcName             = $ebcName;
        $this->apiParas["ebcName"]  = $ebcName;
    }

    public function getEbcName()
    {
        return $this->ebcName;
    }

    /**
     * @param String $delivery
     * 直邮发货地(直邮、邮政、个人快件必填),长度不超过30
     * Required: false
     * Example Value: 
     */
    private $delivery;

    /**
     * @param String $delivery
     * 直邮发货地(直邮、邮政、个人快件必填),长度不超过30
     * Example Value: 
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
     * @param Number $discount
     * 优惠减免金额
     * Required: true
     * Example Value: 
     */
    private $discount;

    /**
     * @param Number $discount
     * 优惠减免金额
     * Example Value: 
     */
    public function setDiscount($discount)
    {
        $this->discount             = $discount;
        $this->apiParas["discount"]  = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param String $discountNote
     * 优惠说明(如果有优惠减免金额，则需附上优惠说明)
     * Required: false
     * Example Value: 
     */
    private $discountNote;

    /**
     * @param String $discountNote
     * 优惠说明(如果有优惠减免金额，则需附上优惠说明)
     * Example Value: 
     */
    public function setDiscountNote($discountNote)
    {
        $this->discountNote             = $discountNote;
        $this->apiParas["discountNote"]  = $discountNote;
    }

    public function getDiscountNote()
    {
        return $this->discountNote;
    }

    /**
     * @param String $istax
     * 是否包税(包税=0，不包税=1)
     * Required: true
     * Example Value: 
     */
    private $istax;

    /**
     * @param String $istax
     * 是否包税(包税=0，不包税=1)
     * Example Value: 
     */
    public function setIstax($istax)
    {
        $this->istax             = $istax;
        $this->apiParas["istax"]  = $istax;
    }

    public function getIstax()
    {
        return $this->istax;
    }

    /**
     * @param Number $taxTotal
     * 税费(按照货款金额计算的税款，无则为0)
     * Required: true
     * Example Value: 
     */
    private $taxTotal;

    /**
     * @param Number $taxTotal
     * 税费(按照货款金额计算的税款，无则为0)
     * Example Value: 
     */
    public function setTaxTotal($taxTotal)
    {
        $this->taxTotal             = $taxTotal;
        $this->apiParas["taxTotal"]  = $taxTotal;
    }

    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * @param Number $freight
     * 运费(货物运输费用)
     * Required: true
     * Example Value: 
     */
    private $freight;

    /**
     * @param Number $freight
     * 运费(货物运输费用)
     * Example Value: 
     */
    public function setFreight($freight)
    {
        $this->freight             = $freight;
        $this->apiParas["freight"]  = $freight;
    }

    public function getFreight()
    {
        return $this->freight;
    }

    /**
     * @param Number $otherPrice
     * 其他费用(满减金额，如果没有满减则传0)
     * Required: true
     * Example Value: 
     */
    private $otherPrice;

    /**
     * @param Number $otherPrice
     * 其他费用(满减金额，如果没有满减则传0)
     * Example Value: 
     */
    public function setOtherPrice($otherPrice)
    {
        $this->otherPrice             = $otherPrice;
        $this->apiParas["otherPrice"]  = $otherPrice;
    }

    public function getOtherPrice()
    {
        return $this->otherPrice;
    }

    /**
     * @param Number $goodsValue
     * 商品价格(商品货款总和，含优惠满减，含运费)
     * Required: true
     * Example Value: 
     */
    private $goodsValue;

    /**
     * @param Number $goodsValue
     * 商品价格(商品货款总和，含优惠满减，含运费)
     * Example Value: 
     */
    public function setGoodsValue($goodsValue)
    {
        $this->goodsValue             = $goodsValue;
        $this->apiParas["goodsValue"]  = $goodsValue;
    }

    public function getGoodsValue()
    {
        return $this->goodsValue;
    }

    /**
     * @param Number $weight
     * 毛重(单位为千克)
     * Required: true
     * Example Value: 
     */
    private $weight;

    /**
     * @param Number $weight
     * 毛重(单位为千克)
     * Example Value: 
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
     * @param Number $netWeight
     * 净重(单位为千克)
     * Required: true
     * Example Value: 
     */
    private $netWeight;

    /**
     * @param Number $netWeight
     * 净重(单位为千克)
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
     * @param String $batchNumbers
     * 商品批次号
     * Required: false
     * Example Value: 
     */
    private $batchNumbers;

    /**
     * @param String $batchNumbers
     * 商品批次号
     * Example Value: 
     */
    public function setBatchNumbers($batchNumbers)
    {
        $this->batchNumbers             = $batchNumbers;
        $this->apiParas["batchNumbers"]  = $batchNumbers;
    }

    public function getBatchNumbers()
    {
        return $this->batchNumbers;
    }

    /**
     * @param String $buyerRegNo
     * 订购人注册号(平台用户账号，user pin),长度不超过60
     * Required: true
     * Example Value: 
     */
    private $buyerRegNo;

    /**
     * @param String $buyerRegNo
     * 订购人注册号(平台用户账号，user pin),长度不超过60
     * Example Value: 
     */
    public function setBuyerRegNo($buyerRegNo)
    {
        $this->buyerRegNo             = $buyerRegNo;
        $this->apiParas["buyerRegNo"]  = $buyerRegNo;
    }

    public function getBuyerRegNo()
    {
        return $this->buyerRegNo;
    }

    /**
     * @param String $buyerPhone
     * 订购人电话,长度不超过50
     * Required: true
     * Example Value: 
     */
    private $buyerPhone;

    /**
     * @param String $buyerPhone
     * 订购人电话,长度不超过50
     * Example Value: 
     */
    public function setBuyerPhone($buyerPhone)
    {
        $this->buyerPhone             = $buyerPhone;
        $this->apiParas["buyerPhone"]  = $buyerPhone;
    }

    public function getBuyerPhone()
    {
        return $this->buyerPhone;
    }

    /**
     * @param String $buyerName
     * 订购人姓名,长度不超过60
     * Required: true
     * Example Value: 
     */
    private $buyerName;

    /**
     * @param String $buyerName
     * 订购人姓名,长度不超过60
     * Example Value: 
     */
    public function setBuyerName($buyerName)
    {
        $this->buyerName             = $buyerName;
        $this->apiParas["buyerName"]  = $buyerName;
    }

    public function getBuyerName()
    {
        return $this->buyerName;
    }

    /**
     * @param String $buyerIdType
     * 订购人证件类型(1-身份证,2-其它)
     * Required: true
     * Example Value: 
     */
    private $buyerIdType;

    /**
     * @param String $buyerIdType
     * 订购人证件类型(1-身份证,2-其它)
     * Example Value: 
     */
    public function setBuyerIdType($buyerIdType)
    {
        $this->buyerIdType             = $buyerIdType;
        $this->apiParas["buyerIdType"]  = $buyerIdType;
    }

    public function getBuyerIdType()
    {
        return $this->buyerIdType;
    }

    /**
     * @param String $buyerIdNumber
     * 订购人证件号码
     * Required: true
     * Example Value: 
     */
    private $buyerIdNumber;

    /**
     * @param String $buyerIdNumber
     * 订购人证件号码
     * Example Value: 
     */
    public function setBuyerIdNumber($buyerIdNumber)
    {
        $this->buyerIdNumber             = $buyerIdNumber;
        $this->apiParas["buyerIdNumber"]  = $buyerIdNumber;
    }

    public function getBuyerIdNumber()
    {
        return $this->buyerIdNumber;
    }

    /**
     * @param String $senderName
     * 发件人名称,长度不超过10
     * Required: true
     * Example Value: 
     */
    private $senderName;

    /**
     * @param String $senderName
     * 发件人名称,长度不超过10
     * Example Value: 
     */
    public function setSenderName($senderName)
    {
        $this->senderName             = $senderName;
        $this->apiParas["senderName"]  = $senderName;
    }

    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * @param String $senderCompanyName
     * 发件方公司名称,长度不超过30
     * Required: true
     * Example Value: 
     */
    private $senderCompanyName;

    /**
     * @param String $senderCompanyName
     * 发件方公司名称,长度不超过30
     * Example Value: 
     */
    public function setSenderCompanyName($senderCompanyName)
    {
        $this->senderCompanyName             = $senderCompanyName;
        $this->apiParas["senderCompanyName"]  = $senderCompanyName;
    }

    public function getSenderCompanyName()
    {
        return $this->senderCompanyName;
    }

    /**
     * @param String $senderCountry
     * 发件地国家(海关代码),长度不超过3
     * Required: true
     * Example Value: 
     */
    private $senderCountry;

    /**
     * @param String $senderCountry
     * 发件地国家(海关代码),长度不超过3
     * Example Value: 
     */
    public function setSenderCountry($senderCountry)
    {
        $this->senderCountry             = $senderCountry;
        $this->apiParas["senderCountry"]  = $senderCountry;
    }

    public function getSenderCountry()
    {
        return $this->senderCountry;
    }

    /**
     * @param String $senderZip
     * 发件地邮编,长度不超过10
     * Required: true
     * Example Value: 
     */
    private $senderZip;

    /**
     * @param String $senderZip
     * 发件地邮编,长度不超过10
     * Example Value: 
     */
    public function setSenderZip($senderZip)
    {
        $this->senderZip             = $senderZip;
        $this->apiParas["senderZip"]  = $senderZip;
    }

    public function getSenderZip()
    {
        return $this->senderZip;
    }

    /**
     * @param String $senderCity
     * 发件地城市,长度不超过50
     * Required: true
     * Example Value: 
     */
    private $senderCity;

    /**
     * @param String $senderCity
     * 发件地城市,长度不超过50
     * Example Value: 
     */
    public function setSenderCity($senderCity)
    {
        $this->senderCity             = $senderCity;
        $this->apiParas["senderCity"]  = $senderCity;
    }

    public function getSenderCity()
    {
        return $this->senderCity;
    }

    /**
     * @param String $senderProvince
     * 发件地省/州名,长度不超过20
     * Required: true
     * Example Value: 
     */
    private $senderProvince;

    /**
     * @param String $senderProvince
     * 发件地省/州名,长度不超过20
     * Example Value: 
     */
    public function setSenderProvince($senderProvince)
    {
        $this->senderProvince             = $senderProvince;
        $this->apiParas["senderProvince"]  = $senderProvince;
    }

    public function getSenderProvince()
    {
        return $this->senderProvince;
    }

    /**
     * @param String $senderTel
     * 发件人电话,长度不超过30
     * Required: true
     * Example Value: 
     */
    private $senderTel;

    /**
     * @param String $senderTel
     * 发件人电话,长度不超过30
     * Example Value: 
     */
    public function setSenderTel($senderTel)
    {
        $this->senderTel             = $senderTel;
        $this->apiParas["senderTel"]  = $senderTel;
    }

    public function getSenderTel()
    {
        return $this->senderTel;
    }

    /**
     * @param String $senderAddr
     * 发件人地址,长度不超过150
     * Required: true
     * Example Value: 
     */
    private $senderAddr;

    /**
     * @param String $senderAddr
     * 发件人地址,长度不超过150
     * Example Value: 
     */
    public function setSenderAddr($senderAddr)
    {
        $this->senderAddr             = $senderAddr;
        $this->apiParas["senderAddr"]  = $senderAddr;
    }

    public function getSenderAddr()
    {
        return $this->senderAddr;
    }

    /**
     * @param String $customsRemark
     * 申报备注
     * Required: false
     * Example Value: 
     */
    private $customsRemark;

    /**
     * @param String $customsRemark
     * 申报备注
     * Example Value: 
     */
    public function setCustomsRemark($customsRemark)
    {
        $this->customsRemark             = $customsRemark;
        $this->apiParas["customsRemark"]  = $customsRemark;
    }

    public function getCustomsRemark()
    {
        return $this->customsRemark;
    }

    /**
     * @param String $declarePaymentList
     * 是否申报支付单(1.是 2.否)
     * Required: true
     * Example Value: 
     */
    private $declarePaymentList;

    /**
     * @param String $declarePaymentList
     * 是否申报支付单(1.是 2.否)
     * Example Value: 
     */
    public function setDeclarePaymentList($declarePaymentList)
    {
        $this->declarePaymentList             = $declarePaymentList;
        $this->apiParas["declarePaymentList"]  = $declarePaymentList;
    }

    public function getDeclarePaymentList()
    {
        return $this->declarePaymentList;
    }

    /**
     * @param String $paymentType
     * 支付方式,长度不超过32
     * Required: true
     * Example Value: 
     */
    private $paymentType;

    /**
     * @param String $paymentType
     * 支付方式,长度不超过32
     * Example Value: 
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType             = $paymentType;
        $this->apiParas["paymentType"]  = $paymentType;
    }

    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param String $payCode
     * 支付企业代码(支付企业备案号，海关10位编码)
     * Required: true
     * Example Value: 
     */
    private $payCode;

    /**
     * @param String $payCode
     * 支付企业代码(支付企业备案号，海关10位编码)
     * Example Value: 
     */
    public function setPayCode($payCode)
    {
        $this->payCode             = $payCode;
        $this->apiParas["payCode"]  = $payCode;
    }

    public function getPayCode()
    {
        return $this->payCode;
    }

    /**
     * @param String $payName
     * 支付企业名称,长度不超过100
     * Required: true
     * Example Value: 
     */
    private $payName;

    /**
     * @param String $payName
     * 支付企业名称,长度不超过100
     * Example Value: 
     */
    public function setPayName($payName)
    {
        $this->payName             = $payName;
        $this->apiParas["payName"]  = $payName;
    }

    public function getPayName()
    {
        return $this->payName;
    }

    /**
     * @param String $payTransactionId
     * 支付交易编号(支付单号),长度不超过60
     * Required: true
     * Example Value: 
     */
    private $payTransactionId;

    /**
     * @param String $payTransactionId
     * 支付交易编号(支付单号),长度不超过60
     * Example Value: 
     */
    public function setPayTransactionId($payTransactionId)
    {
        $this->payTransactionId             = $payTransactionId;
        $this->apiParas["payTransactionId"]  = $payTransactionId;
    }

    public function getPayTransactionId()
    {
        return $this->payTransactionId;
    }

    /**
     * @param String $currency
     * 支付币制(默认为142),长度不超过3
     * Required: true
     * Example Value: 
     */
    private $currency;

    /**
     * @param String $currency
     * 支付币制(默认为142),长度不超过3
     * Example Value: 
     */
    public function setCurrency($currency)
    {
        $this->currency             = $currency;
        $this->apiParas["currency"]  = $currency;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param String $paymentConfirmTime
     * 支付时间(yyyyMMddHHmmss),14位
     * Required: true
     * Example Value: 
     */
    private $paymentConfirmTime;

    /**
     * @param String $paymentConfirmTime
     * 支付时间(yyyyMMddHHmmss),14位
     * Example Value: 
     */
    public function setPaymentConfirmTime($paymentConfirmTime)
    {
        $this->paymentConfirmTime             = $paymentConfirmTime;
        $this->apiParas["paymentConfirmTime"]  = $paymentConfirmTime;
    }

    public function getPaymentConfirmTime()
    {
        return $this->paymentConfirmTime;
    }

    /**
     * @param Number $shouldPay
     * 实际支付金额(货款+运费+税款-优惠金额，与支付保持一致,精确到元)
     * Required: true
     * Example Value: 
     */
    private $shouldPay;

    /**
     * @param Number $shouldPay
     * 实际支付金额(货款+运费+税款-优惠金额，与支付保持一致,精确到元)
     * Example Value: 
     */
    public function setShouldPay($shouldPay)
    {
        $this->shouldPay             = $shouldPay;
        $this->apiParas["shouldPay"]  = $shouldPay;
    }

    public function getShouldPay()
    {
        return $this->shouldPay;
    }

    /**
     * @param String $receiveNo
     * 收件人证件号
     * Required: false
     * Example Value: 
     */
    private $receiveNo;

    /**
     * @param String $receiveNo
     * 收件人证件号
     * Example Value: 
     */
    public function setReceiveNo($receiveNo)
    {
        $this->receiveNo             = $receiveNo;
        $this->apiParas["receiveNo"]  = $receiveNo;
    }

    public function getReceiveNo()
    {
        return $this->receiveNo;
    }

    /**
     * @param String $payRemark
     * 支付备注
     * Required: false
     * Example Value: 
     */
    private $payRemark;

    /**
     * @param String $payRemark
     * 支付备注
     * Example Value: 
     */
    public function setPayRemark($payRemark)
    {
        $this->payRemark             = $payRemark;
        $this->apiParas["payRemark"]  = $payRemark;
    }

    public function getPayRemark()
    {
        return $this->payRemark;
    }

    /**
     * @param String $declareWaybill
     * 是否申报运单(1.是 2.否)
     * Required: true
     * Example Value: 
     */
    private $declareWaybill;

    /**
     * @param String $declareWaybill
     * 是否申报运单(1.是 2.否)
     * Example Value: 
     */
    public function setDeclareWaybill($declareWaybill)
    {
        $this->declareWaybill             = $declareWaybill;
        $this->apiParas["declareWaybill"]  = $declareWaybill;
    }

    public function getDeclareWaybill()
    {
        return $this->declareWaybill;
    }

    /**
     * @param String $logisticsCode
     * 物流企业代码(承运商编号，默认为京东快递，CYS0000010)
     * Required: true
     * Example Value: 
     */
    private $logisticsCode;

    /**
     * @param String $logisticsCode
     * 物流企业代码(承运商编号，默认为京东快递，CYS0000010)
     * Example Value: 
     */
    public function setLogisticsCode($logisticsCode)
    {
        $this->logisticsCode             = $logisticsCode;
        $this->apiParas["logisticsCode"]  = $logisticsCode;
    }

    public function getLogisticsCode()
    {
        return $this->logisticsCode;
    }

    /**
     * @param String $logisticsName
     * 物流企业名称,长度不超过100
     * Required: true
     * Example Value: 
     */
    private $logisticsName;

    /**
     * @param String $logisticsName
     * 物流企业名称,长度不超过100
     * Example Value: 
     */
    public function setLogisticsName($logisticsName)
    {
        $this->logisticsName             = $logisticsName;
        $this->apiParas["logisticsName"]  = $logisticsName;
    }

    public function getLogisticsName()
    {
        return $this->logisticsName;
    }

    /**
     * @param String $bdOwnerNo
     * 商家京配编号(青龙业主号),长度不超过50.1、承运商为京东承运商或需要承运商分单或承运商类型为京配转三方时才会对该字段进行验证，其他情况不验证该字段，非必填； 2、仓库为大件仓时也不校验； 3、销售平台为京东时，需要验证店铺或事业部是否维护订单下传的青龙业主号，如果店铺或事业部上只维护了一个青龙业主号，则订单青龙业主号可不填；如果维护了多个，则订单必须指定一个青龙业主号； 4、销售平台为非京东时，需要通过查询店铺承运商关系表找到维护的青龙业主号，如果只维护了一个青龙业主号，则订单青龙业主号可不填；如果维护了多个，则订单必须指定一个青龙业主号
     * Required: false
     * Example Value: 
     */
    private $bdOwnerNo;

    /**
     * @param String $bdOwnerNo
     * 商家京配编号(青龙业主号),长度不超过50.1、承运商为京东承运商或需要承运商分单或承运商类型为京配转三方时才会对该字段进行验证，其他情况不验证该字段，非必填； 2、仓库为大件仓时也不校验； 3、销售平台为京东时，需要验证店铺或事业部是否维护订单下传的青龙业主号，如果店铺或事业部上只维护了一个青龙业主号，则订单青龙业主号可不填；如果维护了多个，则订单必须指定一个青龙业主号； 4、销售平台为非京东时，需要通过查询店铺承运商关系表找到维护的青龙业主号，如果只维护了一个青龙业主号，则订单青龙业主号可不填；如果维护了多个，则订单必须指定一个青龙业主号
     * Example Value: 
     */
    public function setBdOwnerNo($bdOwnerNo)
    {
        $this->bdOwnerNo             = $bdOwnerNo;
        $this->apiParas["bdOwnerNo"]  = $bdOwnerNo;
    }

    public function getBdOwnerNo()
    {
        return $this->bdOwnerNo;
    }

    /**
     * @param String $logisticsNo
     * 物流运单编号
     * Required: false
     * Example Value: 
     */
    private $logisticsNo;

    /**
     * @param String $logisticsNo
     * 物流运单编号
     * Example Value: 
     */
    public function setLogisticsNo($logisticsNo)
    {
        $this->logisticsNo             = $logisticsNo;
        $this->apiParas["logisticsNo"]  = $logisticsNo;
    }

    public function getLogisticsNo()
    {
        return $this->logisticsNo;
    }

    /**
     * @param Number $packNo
     * 件数(包裹数,固定传1)
     * Required: true
     * Example Value: 
     */
    private $packNo;

    /**
     * @param Number $packNo
     * 件数(包裹数,固定传1)
     * Example Value: 
     */
    public function setPackNo($packNo)
    {
        $this->packNo             = $packNo;
        $this->apiParas["packNo"]  = $packNo;
    }

    public function getPackNo()
    {
        return $this->packNo;
    }

    /**
     * @param String $logisticsRemark
     * 物流备注
     * Required: false
     * Example Value: 
     */
    private $logisticsRemark;

    /**
     * @param String $logisticsRemark
     * 物流备注
     * Example Value: 
     */
    public function setLogisticsRemark($logisticsRemark)
    {
        $this->logisticsRemark             = $logisticsRemark;
        $this->apiParas["logisticsRemark"]  = $logisticsRemark;
    }

    public function getLogisticsRemark()
    {
        return $this->logisticsRemark;
    }

    /**
     * @param Number $isDelivery
     * 是否货到付款(0:否,1:是)
     * Required: true
     * Example Value: 
     */
    private $isDelivery;

    /**
     * @param Number $isDelivery
     * 是否货到付款(0:否,1:是)
     * Example Value: 
     */
    public function setIsDelivery($isDelivery)
    {
        $this->isDelivery             = $isDelivery;
        $this->apiParas["isDelivery"]  = $isDelivery;
    }

    public function getIsDelivery()
    {
        return $this->isDelivery;
    }

    /**
     * @param Number $receivable
     * 订单应收金额(如果货到付款订单且非京东平台达到,则该字段不能为空)
     * Required: false
     * Example Value: 
     */
    private $receivable;

    /**
     * @param Number $receivable
     * 订单应收金额(如果货到付款订单且非京东平台达到,则该字段不能为空)
     * Example Value: 
     */
    public function setReceivable($receivable)
    {
        $this->receivable             = $receivable;
        $this->apiParas["receivable"]  = $receivable;
    }

    public function getReceivable()
    {
        return $this->receivable;
    }

    /**
     * @param String $consigneeRemark
     * 客户留言
     * Required: false
     * Example Value: 
     */
    private $consigneeRemark;

    /**
     * @param String $consigneeRemark
     * 客户留言
     * Example Value: 
     */
    public function setConsigneeRemark($consigneeRemark)
    {
        $this->consigneeRemark             = $consigneeRemark;
        $this->apiParas["consigneeRemark"]  = $consigneeRemark;
    }

    public function getConsigneeRemark()
    {
        return $this->consigneeRemark;
    }

    /**
     * @param String $packageMark
     * 顺丰E标,枚举值：1.E(陆运、电商特惠)2.D(电商业务)
     * Required: false
     * Example Value: 
     */
    private $packageMark;

    /**
     * @param String $packageMark
     * 顺丰E标,枚举值：1.E(陆运、电商特惠)2.D(电商业务)
     * Example Value: 
     */
    public function setPackageMark($packageMark)
    {
        $this->packageMark             = $packageMark;
        $this->apiParas["packageMark"]  = $packageMark;
    }

    public function getPackageMark()
    {
        return $this->packageMark;
    }

    /**
     * @param String $businessType
     * 业务类型(收货款 标准快递 电商特惠)
     * Required: false
     * Example Value: 
     */
    private $businessType;

    /**
     * @param String $businessType
     * 业务类型(收货款 标准快递 电商特惠)
     * Example Value: 
     */
    public function setBusinessType($businessType)
    {
        $this->businessType             = $businessType;
        $this->apiParas["businessType"]  = $businessType;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

    /**
     * @param String $destinationCode
     * 目的地代码
     * Required: false
     * Example Value: 
     */
    private $destinationCode;

    /**
     * @param String $destinationCode
     * 目的地代码
     * Example Value: 
     */
    public function setDestinationCode($destinationCode)
    {
        $this->destinationCode             = $destinationCode;
        $this->apiParas["destinationCode"]  = $destinationCode;
    }

    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    /**
     * @param String $destinationName
     * 目的地名称
     * Required: false
     * Example Value: 
     */
    private $destinationName;

    /**
     * @param String $destinationName
     * 目的地名称
     * Example Value: 
     */
    public function setDestinationName($destinationName)
    {
        $this->destinationName             = $destinationName;
        $this->apiParas["destinationName"]  = $destinationName;
    }

    public function getDestinationName()
    {
        return $this->destinationName;
    }

    /**
     * @param String $sendWebsiteCode
     * 发件网点代码
     * Required: false
     * Example Value: 
     */
    private $sendWebsiteCode;

    /**
     * @param String $sendWebsiteCode
     * 发件网点代码
     * Example Value: 
     */
    public function setSendWebsiteCode($sendWebsiteCode)
    {
        $this->sendWebsiteCode             = $sendWebsiteCode;
        $this->apiParas["sendWebsiteCode"]  = $sendWebsiteCode;
    }

    public function getSendWebsiteCode()
    {
        return $this->sendWebsiteCode;
    }

    /**
     * @param String $sendWebsiteName
     * 发件网点名称
     * Required: false
     * Example Value: 
     */
    private $sendWebsiteName;

    /**
     * @param String $sendWebsiteName
     * 发件网点名称
     * Example Value: 
     */
    public function setSendWebsiteName($sendWebsiteName)
    {
        $this->sendWebsiteName             = $sendWebsiteName;
        $this->apiParas["sendWebsiteName"]  = $sendWebsiteName;
    }

    public function getSendWebsiteName()
    {
        return $this->sendWebsiteName;
    }

    /**
     * @param String $sendMode
     * 寄件方式(1.自寄2.其它)
     * Required: false
     * Example Value: 
     */
    private $sendMode;

    /**
     * @param String $sendMode
     * 寄件方式(1.自寄2.其它)
     * Example Value: 
     */
    public function setSendMode($sendMode)
    {
        $this->sendMode             = $sendMode;
        $this->apiParas["sendMode"]  = $sendMode;
    }

    public function getSendMode()
    {
        return $this->sendMode;
    }

    /**
     * @param String $receiveMode
     * 收件方式(1.自寄2.其它)
     * Required: false
     * Example Value: 
     */
    private $receiveMode;

    /**
     * @param String $receiveMode
     * 收件方式(1.自寄2.其它)
     * Example Value: 
     */
    public function setReceiveMode($receiveMode)
    {
        $this->receiveMode             = $receiveMode;
        $this->apiParas["receiveMode"]  = $receiveMode;
    }

    public function getReceiveMode()
    {
        return $this->receiveMode;
    }

    /**
     * @param String $appointDeliveryTime
     * 预约配送时间
     * Required: false
     * Example Value: 
     */
    private $appointDeliveryTime;

    /**
     * @param String $appointDeliveryTime
     * 预约配送时间
     * Example Value: 
     */
    public function setAppointDeliveryTime($appointDeliveryTime)
    {
        $this->appointDeliveryTime             = $appointDeliveryTime;
        $this->apiParas["appointDeliveryTime"]  = $appointDeliveryTime;
    }

    public function getAppointDeliveryTime()
    {
        return $this->appointDeliveryTime;
    }

    /**
     * @param String $insuredPriceFlag
     * 是否保价(是：1，否：0，默认是0)
     * Required: false
     * Example Value: 
     */
    private $insuredPriceFlag;

    /**
     * @param String $insuredPriceFlag
     * 是否保价(是：1，否：0，默认是0)
     * Example Value: 
     */
    public function setInsuredPriceFlag($insuredPriceFlag)
    {
        $this->insuredPriceFlag             = $insuredPriceFlag;
        $this->apiParas["insuredPriceFlag"]  = $insuredPriceFlag;
    }

    public function getInsuredPriceFlag()
    {
        return $this->insuredPriceFlag;
    }

    /**
     * @param Number $insuredValue
     * 保价声明价值
     * Required: false
     * Example Value: 
     */
    private $insuredValue;

    /**
     * @param Number $insuredValue
     * 保价声明价值
     * Example Value: 
     */
    public function setInsuredValue($insuredValue)
    {
        $this->insuredValue             = $insuredValue;
        $this->apiParas["insuredValue"]  = $insuredValue;
    }

    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

    /**
     * @param Number $insuredFee
     * 保价费用(默认为0)
     * Required: true
     * Example Value: 
     */
    private $insuredFee;

    /**
     * @param Number $insuredFee
     * 保价费用(默认为0)
     * Example Value: 
     */
    public function setInsuredFee($insuredFee)
    {
        $this->insuredFee             = $insuredFee;
        $this->apiParas["insuredFee"]  = $insuredFee;
    }

    public function getInsuredFee()
    {
        return $this->insuredFee;
    }

    /**
     * @param String $thirdPayment
     * 运费支付方式(1.寄方付2.收方付3.寄付月结)
     * Required: false
     * Example Value: 
     */
    private $thirdPayment;

    /**
     * @param String $thirdPayment
     * 运费支付方式(1.寄方付2.收方付3.寄付月结)
     * Example Value: 
     */
    public function setThirdPayment($thirdPayment)
    {
        $this->thirdPayment             = $thirdPayment;
        $this->apiParas["thirdPayment"]  = $thirdPayment;
    }

    public function getThirdPayment()
    {
        return $this->thirdPayment;
    }

    /**
     * @param String $monthlyAccount
     * 月结账号
     * Required: false
     * Example Value: 
     */
    private $monthlyAccount;

    /**
     * @param String $monthlyAccount
     * 月结账号
     * Example Value: 
     */
    public function setMonthlyAccount($monthlyAccount)
    {
        $this->monthlyAccount             = $monthlyAccount;
        $this->apiParas["monthlyAccount"]  = $monthlyAccount;
    }

    public function getMonthlyAccount()
    {
        return $this->monthlyAccount;
    }

    /**
     * @param String $shipment
     * 寄托物
     * Required: false
     * Example Value: 
     */
    private $shipment;

    /**
     * @param String $shipment
     * 寄托物
     * Example Value: 
     */
    public function setShipment($shipment)
    {
        $this->shipment             = $shipment;
        $this->apiParas["shipment"]  = $shipment;
    }

    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @param String $sellerRemark
     * 模板备注
     * Required: false
     * Example Value: 
     */
    private $sellerRemark;

    /**
     * @param String $sellerRemark
     * 模板备注
     * Example Value: 
     */
    public function setSellerRemark($sellerRemark)
    {
        $this->sellerRemark             = $sellerRemark;
        $this->apiParas["sellerRemark"]  = $sellerRemark;
    }

    public function getSellerRemark()
    {
        return $this->sellerRemark;
    }

    /**
     * @param String $thirdSite
     * 大头笔
     * Required: false
     * Example Value: 
     */
    private $thirdSite;

    /**
     * @param String $thirdSite
     * 大头笔
     * Example Value: 
     */
    public function setThirdSite($thirdSite)
    {
        $this->thirdSite             = $thirdSite;
        $this->apiParas["thirdSite"]  = $thirdSite;
    }

    public function getThirdSite()
    {
        return $this->thirdSite;
    }

    /**
     * @param String $shopNo
     * 店铺编号,长度不超过20
     * Required: true
     * Example Value: 
     */
    private $shopNo;

    /**
     * @param String $shopNo
     * 店铺编号,长度不超过20
     * Example Value: 
     */
    public function setShopNo($shopNo)
    {
        $this->shopNo             = $shopNo;
        $this->apiParas["shopNo"]  = $shopNo;
    }

    public function getShopNo()
    {
        return $this->shopNo;
    }

    /**
     * @param  $isSupervise
     * 是否代监管支付：1-是 2-否，当跨境业务模式(pattern)=zhiyou或beihuo时必填
     * Required: false
     * Example Value: 
     */
    private $isSupervise;

    /**
     * @param  $isSupervise
     * 是否代监管支付：1-是 2-否，当跨境业务模式(pattern)=zhiyou或beihuo时必填
     * Example Value: 
     */
    public function setIsSupervise($isSupervise)
    {
        $this->isSupervise             = $isSupervise;
        $this->apiParas["isSupervise"]  = $isSupervise;
    }

    public function getIsSupervise()
    {
        return $this->isSupervise;
    }

    /**
     * @param String $initalRequest
     * 原始请求，最大长度8000，当是否代监管支付(isSupervise)=1时必填
     * Required: false
     * Example Value: 
     */
    private $initalRequest;

    /**
     * @param String $initalRequest
     * 原始请求，最大长度8000，当是否代监管支付(isSupervise)=1时必填
     * Example Value: 
     */
    public function setInitalRequest($initalRequest)
    {
        $this->initalRequest             = $initalRequest;
        $this->apiParas["initalRequest"]  = $initalRequest;
    }

    public function getInitalRequest()
    {
        return $this->initalRequest;
    }

    /**
     * @param String $initalResponse
     * 原始响应，最大长度8000，当是否代监管支付(isSupervise)=1时必填
     * Required: false
     * Example Value: 
     */
    private $initalResponse;

    /**
     * @param String $initalResponse
     * 原始响应，最大长度8000，当是否代监管支付(isSupervise)=1时必填
     * Example Value: 
     */
    public function setInitalResponse($initalResponse)
    {
        $this->initalResponse             = $initalResponse;
        $this->apiParas["initalResponse"]  = $initalResponse;
    }

    public function getInitalResponse()
    {
        return $this->initalResponse;
    }

    /**
     * @param String $payTransactionIdYh
     * 交易流水号，最大长度60，当是否代监管支付(isSupervise)=1时必填
     * Required: false
     * Example Value: 
     */
    private $payTransactionIdYh;

    /**
     * @param String $payTransactionIdYh
     * 交易流水号，最大长度60，当是否代监管支付(isSupervise)=1时必填
     * Example Value: 
     */
    public function setPayTransactionIdYh($payTransactionIdYh)
    {
        $this->payTransactionIdYh             = $payTransactionIdYh;
        $this->apiParas["payTransactionIdYh"]  = $payTransactionIdYh;
    }

    public function getPayTransactionIdYh()
    {
        return $this->payTransactionIdYh;
    }

    /**
     * @param String $isvParentId
     * 商家父单号，最大长度125，当是否代监管支付(isSupervise)=1时必填
     * Required: false
     * Example Value: 
     */
    private $isvParentId;

    /**
     * @param String $isvParentId
     * 商家父单号，最大长度125，当是否代监管支付(isSupervise)=1时必填
     * Example Value: 
     */
    public function setIsvParentId($isvParentId)
    {
        $this->isvParentId             = $isvParentId;
        $this->apiParas["isvParentId"]  = $isvParentId;
    }

    public function getIsvParentId()
    {
        return $this->isvParentId;
    }

    /**
     * @param String $isvOrderIdList
     * 商家子单集合(交易流水号下所有的子单集合，单号用;隔开)，最大长度2500，当是否代监管支付(isSupervise)=1时必填
     * Required: false
     * Example Value: 
     */
    private $isvOrderIdList;

    /**
     * @param String $isvOrderIdList
     * 商家子单集合(交易流水号下所有的子单集合，单号用;隔开)，最大长度2500，当是否代监管支付(isSupervise)=1时必填
     * Example Value: 
     */
    public function setIsvOrderIdList($isvOrderIdList)
    {
        $this->isvOrderIdList             = $isvOrderIdList;
        $this->apiParas["isvOrderIdList"]  = $isvOrderIdList;
    }

    public function getIsvOrderIdList()
    {
        return $this->isvOrderIdList;
    }

    /**
     * @param Number $totalAmount
     * 交易金额，当是否代监管支付(isSupervise)=1时必填
     * Required: false
     * Example Value: 
     */
    private $totalAmount;

    /**
     * @param Number $totalAmount
     * 交易金额，当是否代监管支付(isSupervise)=1时必填
     * Example Value: 
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount             = $totalAmount;
        $this->apiParas["totalAmount"]  = $totalAmount;
    }

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param  $verDept
     * 核验机构：1-银联 2-网联 3-其他，当是否代监管支付(isSupervise)=1时必填
     * Required: false
     * Example Value: 
     */
    private $verDept;

    /**
     * @param  $verDept
     * 核验机构：1-银联 2-网联 3-其他，当是否代监管支付(isSupervise)=1时必填
     * Example Value: 
     */
    public function setVerDept($verDept)
    {
        $this->verDept             = $verDept;
        $this->apiParas["verDept"]  = $verDept;
    }

    public function getVerDept()
    {
        return $this->verDept;
    }

    /**
     * @param  $payType
     * 支付类型：1-APP 2-PC 3-扫码 4-其他
     * Required: false
     * Example Value: 
     */
    private $payType;

    /**
     * @param  $payType
     * 支付类型：1-APP 2-PC 3-扫码 4-其他
     * Example Value: 
     */
    public function setPayType($payType)
    {
        $this->payType             = $payType;
        $this->apiParas["payType"]  = $payType;
    }

    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * @param String $recpAccount
     * 收款账号，最大长度60，当是否代监管支付(isSupervise)=1时必填
     * Required: false
     * Example Value: 
     */
    private $recpAccount;

    /**
     * @param String $recpAccount
     * 收款账号，最大长度60，当是否代监管支付(isSupervise)=1时必填
     * Example Value: 
     */
    public function setRecpAccount($recpAccount)
    {
        $this->recpAccount             = $recpAccount;
        $this->apiParas["recpAccount"]  = $recpAccount;
    }

    public function getRecpAccount()
    {
        return $this->recpAccount;
    }

    /**
     * @param String $recpCode
     * 收款企业代码，最大长度18
     * Required: false
     * Example Value: 
     */
    private $recpCode;

    /**
     * @param String $recpCode
     * 收款企业代码，最大长度18
     * Example Value: 
     */
    public function setRecpCode($recpCode)
    {
        $this->recpCode             = $recpCode;
        $this->apiParas["recpCode"]  = $recpCode;
    }

    public function getRecpCode()
    {
        return $this->recpCode;
    }

    /**
     * @param String $recpName
     * 收款企业名称，最大长度100，当是否代监管支付(isSupervise)=1时必填
     * Required: false
     * Example Value: 
     */
    private $recpName;

    /**
     * @param String $recpName
     * 收款企业名称，最大长度100，当是否代监管支付(isSupervise)=1时必填
     * Example Value: 
     */
    public function setRecpName($recpName)
    {
        $this->recpName             = $recpName;
        $this->apiParas["recpName"]  = $recpName;
    }

    public function getRecpName()
    {
        return $this->recpName;
    }

    /**
     * @param Number[] $gnum
     * 商品序号
     * Required: true
     * Example Value: 
     */
    private $gnum;

    /**
     * @param Number[] $gnum
     * 商品序号
     * Example Value: 
     */
    public function setGnum($gnum)
    {
        $this->gnum             = $gnum;
        $this->apiParas["gnum"]  = $gnum;
    }

    public function getGnum()
    {
        return $this->gnum;
    }

    /**
     * @param String[] $isvGoodsNo
     * ISV主商品编码,长度不超过50
     * Required: true
     * Example Value: 
     */
    private $isvGoodsNo;

    /**
     * @param String[] $isvGoodsNo
     * ISV主商品编码,长度不超过50
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
     * @param String[] $spGoodsNo
     * 销售平台商品编码(商品sku；非京东平台，则填写商品在该平台的销售编号),长度不超过50
     * Required: true
     * Example Value: 
     */
    private $spGoodsNo;

    /**
     * @param String[] $spGoodsNo
     * 销售平台商品编码(商品sku；非京东平台，则填写商品在该平台的销售编号),长度不超过50
     * Example Value: 
     */
    public function setSpGoodsNo($spGoodsNo)
    {
        $this->spGoodsNo             = $spGoodsNo;
        $this->apiParas["spGoodsNo"]  = $spGoodsNo;
    }

    public function getSpGoodsNo()
    {
        return $this->spGoodsNo;
    }

    /**
     * @param Number[] $quantity
     * 数量,必须大于0
     * Required: true
     * Example Value: 
     */
    private $quantity;

    /**
     * @param Number[] $quantity
     * 数量,必须大于0
     * Example Value: 
     */
    public function setQuantity($quantity)
    {
        $this->quantity             = $quantity;
        $this->apiParas["quantity"]  = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param Number[] $price
     * 单价
     * Required: true
     * Example Value: 
     */
    private $price;

    /**
     * @param Number[] $price
     * 单价
     * Example Value: 
     */
    public function setPrice($price)
    {
        $this->price             = $price;
        $this->apiParas["price"]  = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param String[] $goodsRemark
     * 备注
     * Required: false
     * Example Value: 
     */
    private $goodsRemark;

    /**
     * @param String[] $goodsRemark
     * 备注
     * Example Value: 
     */
    public function setGoodsRemark($goodsRemark)
    {
        $this->goodsRemark             = $goodsRemark;
        $this->apiParas["goodsRemark"]  = $goodsRemark;
    }

    public function getGoodsRemark()
    {
        return $this->goodsRemark;
    }

    /**
     * @param String[] $itemLink
     * 商品展示链接地址，最大长度3000，当是否代监管支付(isSupervise)=1时必填
     * Required: false
     * Example Value: 
     */
    private $itemLink;

    /**
     * @param String[] $itemLink
     * 商品展示链接地址，最大长度3000，当是否代监管支付(isSupervise)=1时必填
     * Example Value: 
     */
    public function setItemLink($itemLink)
    {
        $this->itemLink             = $itemLink;
        $this->apiParas["itemLink"]  = $itemLink;
    }

    public function getItemLink()
    {
        return $this->itemLink;
    }

}