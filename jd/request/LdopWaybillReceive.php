<?php

namespace JD\request;

/**
 * 京东物流接单接口
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=2122&apiName=jingdong.ldop.waybill.receive
 * Class LdopWaybillReceive
 * @package Jd\request
 */
class LdopWaybillReceive
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.waybill.receive";
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
     * @param String $salePlat
     * 销售平台
     * Required: true
     * Example Value: 
     */
    private $salePlat;

    /**
     * @param String $salePlat
     * 销售平台
     * Example Value: 
     */
    public function setSalePlat($salePlat)
    {
        $this->salePlat             = $salePlat;
        $this->apiParas["salePlat"]  = $salePlat;
    }

    public function getSalePlat()
    {
        return $this->salePlat;
    }

    /**
     * @param String $customerCode
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $customerCode;

    /**
     * @param String $customerCode
     * 商家编码
     * Example Value: 
     */
    public function setCustomerCode($customerCode)
    {
        $this->customerCode             = $customerCode;
        $this->apiParas["customerCode"]  = $customerCode;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    /**
     * @param String $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param String $orderId
     * 订单号
     * Example Value: 
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param String $thrOrderId
     * 销售平台订单号(例如京东订单号或天猫订单号等等。总长度不要超过100。如果有多个单号，用英文,间隔。例如：7898675,7898676)
     * Required: false
     * Example Value: 
     */
    private $thrOrderId;

    /**
     * @param String $thrOrderId
     * 销售平台订单号(例如京东订单号或天猫订单号等等。总长度不要超过100。如果有多个单号，用英文,间隔。例如：7898675,7898676)
     * Example Value: 
     */
    public function setThrOrderId($thrOrderId)
    {
        $this->thrOrderId             = $thrOrderId;
        $this->apiParas["thrOrderId"]  = $thrOrderId;
    }

    public function getThrOrderId()
    {
        return $this->thrOrderId;
    }

    /**
     * @param String $senderName
     * 寄件人姓名
     * Required: true
     * Example Value: 
     */
    private $senderName;

    /**
     * @param String $senderName
     * 寄件人姓名
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
     * @param String $senderAddress
     * 寄件人地址
     * Required: true
     * Example Value: 
     */
    private $senderAddress;

    /**
     * @param String $senderAddress
     * 寄件人地址
     * Example Value: 
     */
    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress             = $senderAddress;
        $this->apiParas["senderAddress"]  = $senderAddress;
    }

    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    /**
     * @param String $senderTel
     * 寄件人电话
     * Required: false
     * Example Value: 
     */
    private $senderTel;

    /**
     * @param String $senderTel
     * 寄件人电话
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
     * @param String $senderMobile
     * 寄件人手机(寄件人电话、手机至少有一个不为空)
     * Required: false
     * Example Value: 
     */
    private $senderMobile;

    /**
     * @param String $senderMobile
     * 寄件人手机(寄件人电话、手机至少有一个不为空)
     * Example Value: 
     */
    public function setSenderMobile($senderMobile)
    {
        $this->senderMobile             = $senderMobile;
        $this->apiParas["senderMobile"]  = $senderMobile;
    }

    public function getSenderMobile()
    {
        return $this->senderMobile;
    }

    /**
     * @param String $senderPostcode
     * 寄件人邮编
     * Required: false
     * Example Value: 
     */
    private $senderPostcode;

    /**
     * @param String $senderPostcode
     * 寄件人邮编
     * Example Value: 
     */
    public function setSenderPostcode($senderPostcode)
    {
        $this->senderPostcode             = $senderPostcode;
        $this->apiParas["senderPostcode"]  = $senderPostcode;
    }

    public function getSenderPostcode()
    {
        return $this->senderPostcode;
    }

    /**
     * @param String $receiveName
     * 收件人名称
     * Required: true
     * Example Value: 
     */
    private $receiveName;

    /**
     * @param String $receiveName
     * 收件人名称
     * Example Value: 
     */
    public function setReceiveName($receiveName)
    {
        $this->receiveName             = $receiveName;
        $this->apiParas["receiveName"]  = $receiveName;
    }

    public function getReceiveName()
    {
        return $this->receiveName;
    }

    /**
     * @param String $receiveAddress
     * 收件人地址
     * Required: true
     * Example Value: 
     */
    private $receiveAddress;

    /**
     * @param String $receiveAddress
     * 收件人地址
     * Example Value: 
     */
    public function setReceiveAddress($receiveAddress)
    {
        $this->receiveAddress             = $receiveAddress;
        $this->apiParas["receiveAddress"]  = $receiveAddress;
    }

    public function getReceiveAddress()
    {
        return $this->receiveAddress;
    }

    /**
     * @param String $province
     * 收件人省
     * Required: false
     * Example Value: 
     */
    private $province;

    /**
     * @param String $province
     * 收件人省
     * Example Value: 
     */
    public function setProvince($province)
    {
        $this->province             = $province;
        $this->apiParas["province"]  = $province;
    }

    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param String $city
     * 收件人市
     * Required: false
     * Example Value: 
     */
    private $city;

    /**
     * @param String $city
     * 收件人市
     * Example Value: 
     */
    public function setCity($city)
    {
        $this->city             = $city;
        $this->apiParas["city"]  = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param String $county
     * 收件人县
     * Required: false
     * Example Value: 
     */
    private $county;

    /**
     * @param String $county
     * 收件人县
     * Example Value: 
     */
    public function setCounty($county)
    {
        $this->county             = $county;
        $this->apiParas["county"]  = $county;
    }

    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param String $town
     * 收件人镇
     * Required: false
     * Example Value: 
     */
    private $town;

    /**
     * @param String $town
     * 收件人镇
     * Example Value: 
     */
    public function setTown($town)
    {
        $this->town             = $town;
        $this->apiParas["town"]  = $town;
    }

    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param Number $provinceId
     * 收件人省编码
     * Required: false
     * Example Value: 
     */
    private $provinceId;

    /**
     * @param Number $provinceId
     * 收件人省编码
     * Example Value: 
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId             = $provinceId;
        $this->apiParas["provinceId"]  = $provinceId;
    }

    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * @param Number $cityId
     * 收件人市编码
     * Required: false
     * Example Value: 
     */
    private $cityId;

    /**
     * @param Number $cityId
     * 收件人市编码
     * Example Value: 
     */
    public function setCityId($cityId)
    {
        $this->cityId             = $cityId;
        $this->apiParas["cityId"]  = $cityId;
    }

    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param Number $countyId
     * 收件人县编码
     * Required: false
     * Example Value: 
     */
    private $countyId;

    /**
     * @param Number $countyId
     * 收件人县编码
     * Example Value: 
     */
    public function setCountyId($countyId)
    {
        $this->countyId             = $countyId;
        $this->apiParas["countyId"]  = $countyId;
    }

    public function getCountyId()
    {
        return $this->countyId;
    }

    /**
     * @param Number $townId
     * 收件人镇编码
     * Required: false
     * Example Value: 
     */
    private $townId;

    /**
     * @param Number $townId
     * 收件人镇编码
     * Example Value: 
     */
    public function setTownId($townId)
    {
        $this->townId             = $townId;
        $this->apiParas["townId"]  = $townId;
    }

    public function getTownId()
    {
        return $this->townId;
    }

    /**
     * @param Number $siteType
     * 站点类型
     * Required: false
     * Example Value: 
     */
    private $siteType;

    /**
     * @param Number $siteType
     * 站点类型
     * Example Value: 
     */
    public function setSiteType($siteType)
    {
        $this->siteType             = $siteType;
        $this->apiParas["siteType"]  = $siteType;
    }

    public function getSiteType()
    {
        return $this->siteType;
    }

    /**
     * @param Number $siteId
     * 站点编码
     * Required: false
     * Example Value: 
     */
    private $siteId;

    /**
     * @param Number $siteId
     * 站点编码
     * Example Value: 
     */
    public function setSiteId($siteId)
    {
        $this->siteId             = $siteId;
        $this->apiParas["siteId"]  = $siteId;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * @param String $siteName
     * 站点名称
     * Required: false
     * Example Value: 
     */
    private $siteName;

    /**
     * @param String $siteName
     * 站点名称
     * Example Value: 
     */
    public function setSiteName($siteName)
    {
        $this->siteName             = $siteName;
        $this->apiParas["siteName"]  = $siteName;
    }

    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * @param String $receiveTel
     * 收件人电话
     * Required: false
     * Example Value: 
     */
    private $receiveTel;

    /**
     * @param String $receiveTel
     * 收件人电话
     * Example Value: 
     */
    public function setReceiveTel($receiveTel)
    {
        $this->receiveTel             = $receiveTel;
        $this->apiParas["receiveTel"]  = $receiveTel;
    }

    public function getReceiveTel()
    {
        return $this->receiveTel;
    }

    /**
     * @param String $receiveMobile
     * 收件人手机号(收件人电话、手机至少有一个不为空)
     * Required: false
     * Example Value: 
     */
    private $receiveMobile;

    /**
     * @param String $receiveMobile
     * 收件人手机号(收件人电话、手机至少有一个不为空)
     * Example Value: 
     */
    public function setReceiveMobile($receiveMobile)
    {
        $this->receiveMobile             = $receiveMobile;
        $this->apiParas["receiveMobile"]  = $receiveMobile;
    }

    public function getReceiveMobile()
    {
        return $this->receiveMobile;
    }

    /**
     * @param String $postcode
     * 收件人邮编
     * Required: false
     * Example Value: 
     */
    private $postcode;

    /**
     * @param String $postcode
     * 收件人邮编
     * Example Value: 
     */
    public function setPostcode($postcode)
    {
        $this->postcode             = $postcode;
        $this->apiParas["postcode"]  = $postcode;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param Number $packageCount
     * 包裹数(大于0，小于1000)
     * Required: true
     * Example Value: 
     */
    private $packageCount;

    /**
     * @param Number $packageCount
     * 包裹数(大于0，小于1000)
     * Example Value: 
     */
    public function setPackageCount($packageCount)
    {
        $this->packageCount             = $packageCount;
        $this->apiParas["packageCount"]  = $packageCount;
    }

    public function getPackageCount()
    {
        return $this->packageCount;
    }

    /**
     * @param Number $weight
     * 重量(单位：kg，保留小数点后两位)
     * Required: true
     * Example Value: 2.5
     */
    private $weight;

    /**
     * @param Number $weight
     * 重量(单位：kg，保留小数点后两位)
     * Example Value: 2.5
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
     * @param Number $vloumLong
     * 包裹长(单位：cm,保留小数点后两位)
     * Required: false
     * Example Value: 
     */
    private $vloumLong;

    /**
     * @param Number $vloumLong
     * 包裹长(单位：cm,保留小数点后两位)
     * Example Value: 
     */
    public function setVloumLong($vloumLong)
    {
        $this->vloumLong             = $vloumLong;
        $this->apiParas["vloumLong"]  = $vloumLong;
    }

    public function getVloumLong()
    {
        return $this->vloumLong;
    }

    /**
     * @param Number $vloumWidth
     * 包裹宽(单位：cm，保留小数点后两位)
     * Required: false
     * Example Value: 
     */
    private $vloumWidth;

    /**
     * @param Number $vloumWidth
     * 包裹宽(单位：cm，保留小数点后两位)
     * Example Value: 
     */
    public function setVloumWidth($vloumWidth)
    {
        $this->vloumWidth             = $vloumWidth;
        $this->apiParas["vloumWidth"]  = $vloumWidth;
    }

    public function getVloumWidth()
    {
        return $this->vloumWidth;
    }

    /**
     * @param Number $vloumHeight
     * 包裹高(单位：cm，保留小数点后两位)
     * Required: false
     * Example Value: 
     */
    private $vloumHeight;

    /**
     * @param Number $vloumHeight
     * 包裹高(单位：cm，保留小数点后两位)
     * Example Value: 
     */
    public function setVloumHeight($vloumHeight)
    {
        $this->vloumHeight             = $vloumHeight;
        $this->apiParas["vloumHeight"]  = $vloumHeight;
    }

    public function getVloumHeight()
    {
        return $this->vloumHeight;
    }

    /**
     * @param Number $vloumn
     * 体积(单位：cm3，保留小数点后两位)
     * Required: true
     * Example Value: 10000
     */
    private $vloumn;

    /**
     * @param Number $vloumn
     * 体积(单位：cm3，保留小数点后两位)
     * Example Value: 10000
     */
    public function setVloumn($vloumn)
    {
        $this->vloumn             = $vloumn;
        $this->apiParas["vloumn"]  = $vloumn;
    }

    public function getVloumn()
    {
        return $this->vloumn;
    }

    /**
     * @param String $description
     * 商品描述
     * Required: false
     * Example Value: 
     */
    private $description;

    /**
     * @param String $description
     * 商品描述
     * Example Value: 
     */
    public function setDescription($description)
    {
        $this->description             = $description;
        $this->apiParas["description"]  = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param Number $collectionValue
     * 是否代收货款(是：1，否：0。不填或者超出范围，默认是0)
     * Required: false
     * Example Value: 1
     */
    private $collectionValue;

    /**
     * @param Number $collectionValue
     * 是否代收货款(是：1，否：0。不填或者超出范围，默认是0)
     * Example Value: 1
     */
    public function setCollectionValue($collectionValue)
    {
        $this->collectionValue             = $collectionValue;
        $this->apiParas["collectionValue"]  = $collectionValue;
    }

    public function getCollectionValue()
    {
        return $this->collectionValue;
    }

    /**
     * @param Number $collectionMoney
     * 代收货款金额(保留小数点后两位)
     * Required: false
     * Example Value: 98.00
     */
    private $collectionMoney;

    /**
     * @param Number $collectionMoney
     * 代收货款金额(保留小数点后两位)
     * Example Value: 98.00
     */
    public function setCollectionMoney($collectionMoney)
    {
        $this->collectionMoney             = $collectionMoney;
        $this->apiParas["collectionMoney"]  = $collectionMoney;
    }

    public function getCollectionMoney()
    {
        return $this->collectionMoney;
    }

    /**
     * @param Number $guaranteeValue
     * 是否保价(是：1，否：0。不填或者超出范围，默认是0)
     * Required: false
     * Example Value: 1
     */
    private $guaranteeValue;

    /**
     * @param Number $guaranteeValue
     * 是否保价(是：1，否：0。不填或者超出范围，默认是0)
     * Example Value: 1
     */
    public function setGuaranteeValue($guaranteeValue)
    {
        $this->guaranteeValue             = $guaranteeValue;
        $this->apiParas["guaranteeValue"]  = $guaranteeValue;
    }

    public function getGuaranteeValue()
    {
        return $this->guaranteeValue;
    }

    /**
     * @param Number $guaranteeValueAmount
     * 保价金额(保留小数点后两位)
     * Required: false
     * Example Value: 100.00
     */
    private $guaranteeValueAmount;

    /**
     * @param Number $guaranteeValueAmount
     * 保价金额(保留小数点后两位)
     * Example Value: 100.00
     */
    public function setGuaranteeValueAmount($guaranteeValueAmount)
    {
        $this->guaranteeValueAmount             = $guaranteeValueAmount;
        $this->apiParas["guaranteeValueAmount"]  = $guaranteeValueAmount;
    }

    public function getGuaranteeValueAmount()
    {
        return $this->guaranteeValueAmount;
    }

    /**
     * @param Number $signReturn
     * 签单返还(签单返还类型：0-不返单，1-普通返单，2-校验身份返单，3-电子签返单，4-电子返单+普通返单)
     * Required: false
     * Example Value: 1
     */
    private $signReturn;

    /**
     * @param Number $signReturn
     * 签单返还(签单返还类型：0-不返单，1-普通返单，2-校验身份返单，3-电子签返单，4-电子返单+普通返单)
     * Example Value: 1
     */
    public function setSignReturn($signReturn)
    {
        $this->signReturn             = $signReturn;
        $this->apiParas["signReturn"]  = $signReturn;
    }

    public function getSignReturn()
    {
        return $this->signReturn;
    }

    /**
     * @param Number $aging
     * 时效(普通：1，工作日：2，非工作日：3，晚间：4。O2O一小时达：5。O2O定时达：6。不填或者超出范围，默认是1)
     * Required: false
     * Example Value: 1
     */
    private $aging;

    /**
     * @param Number $aging
     * 时效(普通：1，工作日：2，非工作日：3，晚间：4。O2O一小时达：5。O2O定时达：6。不填或者超出范围，默认是1)
     * Example Value: 1
     */
    public function setAging($aging)
    {
        $this->aging             = $aging;
        $this->apiParas["aging"]  = $aging;
    }

    public function getAging()
    {
        return $this->aging;
    }

    /**
     * @param Number $transType
     * 运输类型(陆运：1，航空：2。不填或者超出范围，默认是1)
     * Required: false
     * Example Value: 1
     */
    private $transType;

    /**
     * @param Number $transType
     * 运输类型(陆运：1，航空：2。不填或者超出范围，默认是1)
     * Example Value: 1
     */
    public function setTransType($transType)
    {
        $this->transType             = $transType;
        $this->apiParas["transType"]  = $transType;
    }

    public function getTransType()
    {
        return $this->transType;
    }

    /**
     * @param String $remark
     * 运单备注（不超过20个字）,打印面单时备注内容也会显示在快递面单上
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param String $remark
     * 运单备注（不超过20个字）,打印面单时备注内容也会显示在快递面单上
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
     * @param Number $goodsType
     * 配送业务类型（ 1:普通，3:填仓，4:特配，6:控温，7:冷藏，8:冷冻，9:深冷）默认是1
     * Required: false
     * Example Value: 
     */
    private $goodsType;

    /**
     * @param Number $goodsType
     * 配送业务类型（ 1:普通，3:填仓，4:特配，6:控温，7:冷藏，8:冷冻，9:深冷）默认是1
     * Example Value: 
     */
    public function setGoodsType($goodsType)
    {
        $this->goodsType             = $goodsType;
        $this->apiParas["goodsType"]  = $goodsType;
    }

    public function getGoodsType()
    {
        return $this->goodsType;
    }

    /**
     * @param Number $orderType
     * 运单类型。(普通外单：0，O2O外单：1)默认为0
     * Required: false
     * Example Value: 
     */
    private $orderType;

    /**
     * @param Number $orderType
     * 运单类型。(普通外单：0，O2O外单：1)默认为0
     * Example Value: 
     */
    public function setOrderType($orderType)
    {
        $this->orderType             = $orderType;
        $this->apiParas["orderType"]  = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * @param String $shopCode
     * 门店编码(只O2O运单需要传，普通运单不需要传)
     * Required: false
     * Example Value: 
     */
    private $shopCode;

    /**
     * @param String $shopCode
     * 门店编码(只O2O运单需要传，普通运单不需要传)
     * Example Value: 
     */
    public function setShopCode($shopCode)
    {
        $this->shopCode             = $shopCode;
        $this->apiParas["shopCode"]  = $shopCode;
    }

    public function getShopCode()
    {
        return $this->shopCode;
    }

    /**
     * @param String $orderSendTime
     * 预约配送时间（格式：yyyy-MM-dd HH:mm:ss。例如：2014-09-18 08:30:00）
     * Required: false
     * Example Value: 
     */
    private $orderSendTime;

    /**
     * @param String $orderSendTime
     * 预约配送时间（格式：yyyy-MM-dd HH:mm:ss。例如：2014-09-18 08:30:00）
     * Example Value: 
     */
    public function setOrderSendTime($orderSendTime)
    {
        $this->orderSendTime             = $orderSendTime;
        $this->apiParas["orderSendTime"]  = $orderSendTime;
    }

    public function getOrderSendTime()
    {
        return $this->orderSendTime;
    }

    /**
     * @param String $warehouseCode
     * 发货仓编码
     * Required: false
     * Example Value: 
     */
    private $warehouseCode;

    /**
     * @param String $warehouseCode
     * 发货仓编码
     * Example Value: 
     */
    public function setWarehouseCode($warehouseCode)
    {
        $this->warehouseCode             = $warehouseCode;
        $this->apiParas["warehouseCode"]  = $warehouseCode;
    }

    public function getWarehouseCode()
    {
        return $this->warehouseCode;
    }

    /**
     * @param Number $areaProvId
     * 接货省ID
     * Required: false
     * Example Value: 
     */
    private $areaProvId;

    /**
     * @param Number $areaProvId
     * 接货省ID
     * Example Value: 
     */
    public function setAreaProvId($areaProvId)
    {
        $this->areaProvId             = $areaProvId;
        $this->apiParas["areaProvId"]  = $areaProvId;
    }

    public function getAreaProvId()
    {
        return $this->areaProvId;
    }

    /**
     * @param Number $areaCityId
     * 接货市ID
     * Required: false
     * Example Value: 
     */
    private $areaCityId;

    /**
     * @param Number $areaCityId
     * 接货市ID
     * Example Value: 
     */
    public function setAreaCityId($areaCityId)
    {
        $this->areaCityId             = $areaCityId;
        $this->apiParas["areaCityId"]  = $areaCityId;
    }

    public function getAreaCityId()
    {
        return $this->areaCityId;
    }

    /**
     * @param Date $shipmentStartTime
     * 配送起始时间
     * Required: false
     * Example Value: 
     */
    private $shipmentStartTime;

    /**
     * @param Date $shipmentStartTime
     * 配送起始时间
     * Example Value: 
     */
    public function setShipmentStartTime($shipmentStartTime)
    {
        $this->shipmentStartTime             = $shipmentStartTime;
        $this->apiParas["shipmentStartTime"]  = $shipmentStartTime;
    }

    public function getShipmentStartTime()
    {
        return $this->shipmentStartTime;
    }

    /**
     * @param Date $shipmentEndTime
     * 配送结束时间
     * Required: false
     * Example Value: 
     */
    private $shipmentEndTime;

    /**
     * @param Date $shipmentEndTime
     * 配送结束时间
     * Example Value: 
     */
    public function setShipmentEndTime($shipmentEndTime)
    {
        $this->shipmentEndTime             = $shipmentEndTime;
        $this->apiParas["shipmentEndTime"]  = $shipmentEndTime;
    }

    public function getShipmentEndTime()
    {
        return $this->shipmentEndTime;
    }

    /**
     * @param String $idNumber
     * 身份证号
     * Required: false
     * Example Value: 
     */
    private $idNumber;

    /**
     * @param String $idNumber
     * 身份证号
     * Example Value: 
     */
    public function setIdNumber($idNumber)
    {
        $this->idNumber             = $idNumber;
        $this->apiParas["idNumber"]  = $idNumber;
    }

    public function getIdNumber()
    {
        return $this->idNumber;
    }

    /**
     * @param String $addedService
     * 扩展服务
     * Required: false
     * Example Value: 
     */
    private $addedService;

    /**
     * @param String $addedService
     * 扩展服务
     * Example Value: 
     */
    public function setAddedService($addedService)
    {
        $this->addedService             = $addedService;
        $this->apiParas["addedService"]  = $addedService;
    }

    public function getAddedService()
    {
        return $this->addedService;
    }

    /**
     * @param String $extendField1
     * 扩展字段1
     * Required: false
     * Example Value: 
     */
    private $extendField1;

    /**
     * @param String $extendField1
     * 扩展字段1
     * Example Value: 
     */
    public function setExtendField1($extendField1)
    {
        $this->extendField1             = $extendField1;
        $this->apiParas["extendField1"]  = $extendField1;
    }

    public function getExtendField1()
    {
        return $this->extendField1;
    }

    /**
     * @param String $extendField2
     * 扩展字段2
     * Required: false
     * Example Value: 
     */
    private $extendField2;

    /**
     * @param String $extendField2
     * 扩展字段2
     * Example Value: 
     */
    public function setExtendField2($extendField2)
    {
        $this->extendField2             = $extendField2;
        $this->apiParas["extendField2"]  = $extendField2;
    }

    public function getExtendField2()
    {
        return $this->extendField2;
    }

    /**
     * @param String $extendField3
     * 扩展字段3
     * Required: false
     * Example Value: 
     */
    private $extendField3;

    /**
     * @param String $extendField3
     * 扩展字段3
     * Example Value: 
     */
    public function setExtendField3($extendField3)
    {
        $this->extendField3             = $extendField3;
        $this->apiParas["extendField3"]  = $extendField3;
    }

    public function getExtendField3()
    {
        return $this->extendField3;
    }

    /**
     * @param Number $extendField4
     * 扩展字段4
     * Required: false
     * Example Value: 
     */
    private $extendField4;

    /**
     * @param Number $extendField4
     * 扩展字段4
     * Example Value: 
     */
    public function setExtendField4($extendField4)
    {
        $this->extendField4             = $extendField4;
        $this->apiParas["extendField4"]  = $extendField4;
    }

    public function getExtendField4()
    {
        return $this->extendField4;
    }

    /**
     * @param Number $extendField5
     * 扩展字段5
     * Required: false
     * Example Value: 
     */
    private $extendField5;

    /**
     * @param Number $extendField5
     * 扩展字段5
     * Example Value: 
     */
    public function setExtendField5($extendField5)
    {
        $this->extendField5             = $extendField5;
        $this->apiParas["extendField5"]  = $extendField5;
    }

    public function getExtendField5()
    {
        return $this->extendField5;
    }

    /**
     * @param String $senderCompany
     * 寄件人公司
     * Required: false
     * Example Value: 
     */
    private $senderCompany;

    /**
     * @param String $senderCompany
     * 寄件人公司
     * Example Value: 
     */
    public function setSenderCompany($senderCompany)
    {
        $this->senderCompany             = $senderCompany;
        $this->apiParas["senderCompany"]  = $senderCompany;
    }

    public function getSenderCompany()
    {
        return $this->senderCompany;
    }

    /**
     * @param String $receiveCompany
     * 收件人公司
     * Required: false
     * Example Value: 
     */
    private $receiveCompany;

    /**
     * @param String $receiveCompany
     * 收件人公司
     * Example Value: 
     */
    public function setReceiveCompany($receiveCompany)
    {
        $this->receiveCompany             = $receiveCompany;
        $this->apiParas["receiveCompany"]  = $receiveCompany;
    }

    public function getReceiveCompany()
    {
        return $this->receiveCompany;
    }

    /**
     * @param String $goods
     * 托寄物名称（为避免托运物品在铁路、航空安检中被扣押，请务必下传商品类目或名称，例如：服装、3C等）
     * Required: false
     * Example Value: 
     */
    private $goods;

    /**
     * @param String $goods
     * 托寄物名称（为避免托运物品在铁路、航空安检中被扣押，请务必下传商品类目或名称，例如：服装、3C等）
     * Example Value: 
     */
    public function setGoods($goods)
    {
        $this->goods             = $goods;
        $this->apiParas["goods"]  = $goods;
    }

    public function getGoods()
    {
        return $this->goods;
    }

    /**
     * @param Number $goodsCount
     * 寄托物数量
     * Required: false
     * Example Value: 
     */
    private $goodsCount;

    /**
     * @param Number $goodsCount
     * 寄托物数量
     * Example Value: 
     */
    public function setGoodsCount($goodsCount)
    {
        $this->goodsCount             = $goodsCount;
        $this->apiParas["goodsCount"]  = $goodsCount;
    }

    public function getGoodsCount()
    {
        return $this->goodsCount;
    }

    /**
     * @param Number $promiseTimeType
     * 产品类型（5：同城即日）
     * Required: false
     * Example Value: 
     */
    private $promiseTimeType;

    /**
     * @param Number $promiseTimeType
     * 产品类型（5：同城即日）
     * Example Value: 
     */
    public function setPromiseTimeType($promiseTimeType)
    {
        $this->promiseTimeType             = $promiseTimeType;
        $this->apiParas["promiseTimeType"]  = $promiseTimeType;
    }

    public function getPromiseTimeType()
    {
        return $this->promiseTimeType;
    }

    /**
     * @param Number $freight
     * 运费
     * Required: false
     * Example Value: 
     */
    private $freight;

    /**
     * @param Number $freight
     * 运费
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
     * @param Date $pickUpStartTime
     * 预约取件开始时间
     * Required: false
     * Example Value: 
     */
    private $pickUpStartTime;

    /**
     * @param Date $pickUpStartTime
     * 预约取件开始时间
     * Example Value: 
     */
    public function setPickUpStartTime($pickUpStartTime)
    {
        $this->pickUpStartTime             = $pickUpStartTime;
        $this->apiParas["pickUpStartTime"]  = $pickUpStartTime;
    }

    public function getPickUpStartTime()
    {
        return $this->pickUpStartTime;
    }

    /**
     * @param Date $pickUpEndTime
     * 预约取件结束时间
     * Required: false
     * Example Value: 
     */
    private $pickUpEndTime;

    /**
     * @param Date $pickUpEndTime
     * 预约取件结束时间
     * Example Value: 
     */
    public function setPickUpEndTime($pickUpEndTime)
    {
        $this->pickUpEndTime             = $pickUpEndTime;
        $this->apiParas["pickUpEndTime"]  = $pickUpEndTime;
    }

    public function getPickUpEndTime()
    {
        return $this->pickUpEndTime;
    }

}