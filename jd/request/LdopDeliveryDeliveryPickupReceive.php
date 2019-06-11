<?php

namespace JD\request;

/**
 * 送取同步下单接口
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=2447&apiName=jingdong.ldop.delivery.deliveryPickupReceive
 * Class LdopDeliveryDeliveryPickupReceive
 * @package Jd\request
 */
class LdopDeliveryDeliveryPickupReceive
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.delivery.deliveryPickupReceive";
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
     * @param String $josPin
     * 商家jos账号
     * Required: true
     * Example Value: 
     */
    private $josPin;

    /**
     * @param String $josPin
     * 商家jos账号
     * Example Value: 
     */
    public function setJosPin($josPin)
    {
        $this->josPin             = $josPin;
        $this->apiParas["josPin"]  = $josPin;
    }

    public function getJosPin()
    {
        return $this->josPin;
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
     * 销售平台订单号(例如京东订单号或天猫订单号等等。总长度不要超过100。如果有多个单号，用英文,间隔。例如：7898675,7898676) 
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param String $orderId
     * 销售平台订单号(例如京东订单号或天猫订单号等等。总长度不要超过100。如果有多个单号，用英文,间隔。例如：7898675,7898676) 
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
     * 三方订单号
     * Required: false
     * Example Value: 
     */
    private $thrOrderId;

    /**
     * @param String $thrOrderId
     * 三方订单号
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
     * @param String $receiveName
     * 收收件人名称 （收件人信息也是取件单的取件人信息）
     * Required: true
     * Example Value: 
     */
    private $receiveName;

    /**
     * @param String $receiveName
     * 收收件人名称 （收件人信息也是取件单的取件人信息）
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
     * 收件人地址 （同时也是取件地址）
     * Required: true
     * Example Value: 
     */
    private $receiveAddress;

    /**
     * @param String $receiveAddress
     * 收件人地址 （同时也是取件地址）
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
     *  收件人手机号(收件人电话、手机至少有一个不为空) ；同时也是取件人联系电话
     * Required: false
     * Example Value: 
     */
    private $receiveMobile;

    /**
     * @param String $receiveMobile
     *  收件人手机号(收件人电话、手机至少有一个不为空) ；同时也是取件人联系电话
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
     * Example Value: 
     */
    private $weight;

    /**
     * @param Number $weight
     * 重量(单位：kg，保留小数点后两位) 
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
     * Example Value: 
     */
    private $vloumn;

    /**
     * @param Number $vloumn
     * 体积(单位：cm3，保留小数点后两位) 
     * Example Value: 
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
     * 物品描述
     * Required: false
     * Example Value: 
     */
    private $description;

    /**
     * @param String $description
     * 物品描述
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
     * @param Number $goodsMoney
     * 商品金额
     * Required: false
     * Example Value: 
     */
    private $goodsMoney;

    /**
     * @param Number $goodsMoney
     * 商品金额
     * Example Value: 
     */
    public function setGoodsMoney($goodsMoney)
    {
        $this->goodsMoney             = $goodsMoney;
        $this->apiParas["goodsMoney"]  = $goodsMoney;
    }

    public function getGoodsMoney()
    {
        return $this->goodsMoney;
    }

    /**
     * @param Number $collectionValue
     * 是否代收货款(是：1，否：0。不填或者超出范围，默认是0) 
     * Required: false
     * Example Value: 
     */
    private $collectionValue;

    /**
     * @param Number $collectionValue
     * 是否代收货款(是：1，否：0。不填或者超出范围，默认是0) 
     * Example Value: 
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
     * Example Value: 
     */
    private $collectionMoney;

    /**
     * @param Number $collectionMoney
     * 代收货款金额(保留小数点后两位) 
     * Example Value: 
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
     * Example Value: 
     */
    private $guaranteeValue;

    /**
     * @param Number $guaranteeValue
     * 是否保价(是：1，否：0。不填或者超出范围，默认是0) 
     * Example Value: 
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
     * 正向运单保价金额(保留小数点后两位) 
     * Required: false
     * Example Value: 
     */
    private $guaranteeValueAmount;

    /**
     * @param Number $guaranteeValueAmount
     * 正向运单保价金额(保留小数点后两位) 
     * Example Value: 
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
     * 签单返还(是：1，否：0。不填或者超出范围，默认是0) 
     * Required: false
     * Example Value: 
     */
    private $signReturn;

    /**
     * @param Number $signReturn
     * 签单返还(是：1，否：0。不填或者超出范围，默认是0) 
     * Example Value: 
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
     * Example Value: 
     */
    private $aging;

    /**
     * @param Number $aging
     * 时效(普通：1，工作日：2，非工作日：3，晚间：4。O2O一小时达：5。O2O定时达：6。不填或者超出范围，默认是1) 
     * Example Value: 
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
     * @param String $remark
     * 正向运单备注（不超过20个字）,打印面单时备注内容也会显示在快递面单上
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param String $remark
     * 正向运单备注（不超过20个字）,打印面单时备注内容也会显示在快递面单上
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
     * @param String $idNumber
     * 运单收件人身份证号 
     * Required: false
     * Example Value: 
     */
    private $idNumber;

    /**
     * @param String $idNumber
     * 运单收件人身份证号 
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
     * 增值服务 （不需要上传，此业务类型已默认增值服务信息）
     * Required: false
     * Example Value: 
     */
    private $addedService;

    /**
     * @param String $addedService
     * 增值服务 （不需要上传，此业务类型已默认增值服务信息）
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
     * @param String $senderCompany
     * 寄件公司
     * Required: false
     * Example Value: 
     */
    private $senderCompany;

    /**
     * @param String $senderCompany
     * 寄件公司
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
     * 收件公司
     * Required: false
     * Example Value: 
     */
    private $receiveCompany;

    /**
     * @param String $receiveCompany
     * 收件公司
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
     * @param String $senderIdNumber
     * 运单寄件人身份证号 
     * Required: false
     * Example Value: 
     */
    private $senderIdNumber;

    /**
     * @param String $senderIdNumber
     * 运单寄件人身份证号 
     * Example Value: 
     */
    public function setSenderIdNumber($senderIdNumber)
    {
        $this->senderIdNumber             = $senderIdNumber;
        $this->apiParas["senderIdNumber"]  = $senderIdNumber;
    }

    public function getSenderIdNumber()
    {
        return $this->senderIdNumber;
    }

    /**
     * @param Number $senderIdType
     * 证件类型 身份证(20183191),临时身份证(20183192),户口簿(20183193)
     * Required: false
     * Example Value: 
     */
    private $senderIdType;

    /**
     * @param Number $senderIdType
     * 证件类型 身份证(20183191),临时身份证(20183192),户口簿(20183193)
     * Example Value: 
     */
    public function setSenderIdType($senderIdType)
    {
        $this->senderIdType             = $senderIdType;
        $this->apiParas["senderIdType"]  = $senderIdType;
    }

    public function getSenderIdType()
    {
        return $this->senderIdType;
    }

    /**
     * @param Number $sendAndPickupType
     * 送取模式1、先送后取2、先取后送，非必填
     * Required: false
     * Example Value: 
     */
    private $sendAndPickupType;

    /**
     * @param Number $sendAndPickupType
     * 送取模式1、先送后取2、先取后送，非必填
     * Example Value: 
     */
    public function setSendAndPickupType($sendAndPickupType)
    {
        $this->sendAndPickupType             = $sendAndPickupType;
        $this->apiParas["sendAndPickupType"]  = $sendAndPickupType;
    }

    public function getSendAndPickupType()
    {
        return $this->sendAndPickupType;
    }

    /**
     * @param String $customerTel
     * 商家电话
     * Required: true
     * Example Value: 
     */
    private $customerTel;

    /**
     * @param String $customerTel
     * 商家电话
     * Example Value: 
     */
    public function setCustomerTel($customerTel)
    {
        $this->customerTel             = $customerTel;
        $this->apiParas["customerTel"]  = $customerTel;
    }

    public function getCustomerTel()
    {
        return $this->customerTel;
    }

    /**
     * @param String $backAddress
     * 商品返回地址 （取件单的退货地址）
     * Required: true
     * Example Value: 
     */
    private $backAddress;

    /**
     * @param String $backAddress
     * 商品返回地址 （取件单的退货地址）
     * Example Value: 
     */
    public function setBackAddress($backAddress)
    {
        $this->backAddress             = $backAddress;
        $this->apiParas["backAddress"]  = $backAddress;
    }

    public function getBackAddress()
    {
        return $this->backAddress;
    }

    /**
     * @param String $customerContract
     * 联系人 （是商家，如果联系不上取件人联系商家的电话）
     * Required: true
     * Example Value: 
     */
    private $customerContract;

    /**
     * @param String $customerContract
     * 联系人 （是商家，如果联系不上取件人联系商家的电话）
     * Example Value: 
     */
    public function setCustomerContract($customerContract)
    {
        $this->customerContract             = $customerContract;
        $this->apiParas["customerContract"]  = $customerContract;
    }

    public function getCustomerContract()
    {
        return $this->customerContract;
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
        $this->apiParas["pickupOrderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param Number $weight
     * 取件重量
     * Required: false
     * Example Value: 
     */
    private $weight;

    /**
     * @param Number $weight
     * 取件重量
     * Example Value: 
     */
    public function setWeight($weight)
    {
        $this->weight             = $weight;
        $this->apiParas["pickupWeight"]  = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param String $remark
     * 逆向取件单备注信息 
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param String $remark
     * 逆向取件单备注信息 
     * Example Value: 
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["pickupRemark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param Number $volume
     * 取件体积
     * Required: false
     * Example Value: 
     */
    private $volume;

    /**
     * @param Number $volume
     * 取件体积
     * Example Value: 
     */
    public function setVolume($volume)
    {
        $this->volume             = $volume;
        $this->apiParas["pickupVolume"]  = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param Boolean $guaranteeValue
     * 是否保价(是：1，否：0。不填或者超出范围，默认是0) 
     * Required: false
     * Example Value: 
     */
    private $guaranteeValue;

    /**
     * @param Boolean $guaranteeValue
     * 是否保价(是：1，否：0。不填或者超出范围，默认是0) 
     * Example Value: 
     */
    public function setGuaranteeValue($guaranteeValue)
    {
        $this->guaranteeValue             = $guaranteeValue;
        $this->apiParas["isGuaranteeValue"]  = $guaranteeValue;
    }

    public function getGuaranteeValue()
    {
        return $this->guaranteeValue;
    }

    /**
     * @param Number $guaranteeValueAmount
     * 逆向取件单保价金额
     * Required: false
     * Example Value: 
     */
    private $guaranteeValueAmount;

    /**
     * @param Number $guaranteeValueAmount
     * 逆向取件单保价金额
     * Example Value: 
     */
    public function setGuaranteeValueAmount($guaranteeValueAmount)
    {
        $this->guaranteeValueAmount             = $guaranteeValueAmount;
        $this->apiParas["pickupGuaranteeValueAmount"]  = $guaranteeValueAmount;
    }

    public function getGuaranteeValueAmount()
    {
        return $this->guaranteeValueAmount;
    }

    /**
     * @param Number $goodsType
     * 取件配送业务类型（ 1:普通，3:填仓，4:特配，6:控温，7:冷藏，8:冷冻，9:深冷）默认是1 
     * Required: false
     * Example Value: 
     */
    private $goodsType;

    /**
     * @param Number $goodsType
     * 取件配送业务类型（ 1:普通，3:填仓，4:特配，6:控温，7:冷藏，8:冷冻，9:深冷）默认是1 
     * Example Value: 
     */
    public function setGoodsType($goodsType)
    {
        $this->goodsType             = $goodsType;
        $this->apiParas["pickupGoodsType"]  = $goodsType;
    }

    public function getGoodsType()
    {
        return $this->goodsType;
    }

    /**
     * @param Number $pickupBizType
     * 取件业务类型 1代表公益
     * Required: false
     * Example Value: 
     */
    private $pickupBizType;

    /**
     * @param Number $pickupBizType
     * 取件业务类型 1代表公益
     * Example Value: 
     */
    public function setPickupBizType($pickupBizType)
    {
        $this->pickupBizType             = $pickupBizType;
        $this->apiParas["pickupBizType"]  = $pickupBizType;
    }

    public function getPickupBizType()
    {
        return $this->pickupBizType;
    }

    /**
     * @param String $valueAddService
     * 增值服务 （不需要上传，此业务类型已默认增值服务信息）
     * Required: false
     * Example Value: 
     */
    private $valueAddService;

    /**
     * @param String $valueAddService
     * 增值服务 （不需要上传，此业务类型已默认增值服务信息）
     * Example Value: 
     */
    public function setValueAddService($valueAddService)
    {
        $this->valueAddService             = $valueAddService;
        $this->apiParas["valueAddService"]  = $valueAddService;
    }

    public function getValueAddService()
    {
        return $this->valueAddService;
    }

    /**
     * @param String $senderIdNumber
     * 寄件人证件号码 （逆向取件单取件人信息）
     * Required: false
     * Example Value: 
     */
    private $senderIdNumber;

    /**
     * @param String $senderIdNumber
     * 寄件人证件号码 （逆向取件单取件人信息）
     * Example Value: 
     */
    public function setSenderIdNumber($senderIdNumber)
    {
        $this->senderIdNumber             = $senderIdNumber;
        $this->apiParas["pickupSenderIdNumber"]  = $senderIdNumber;
    }

    public function getSenderIdNumber()
    {
        return $this->senderIdNumber;
    }

    /**
     * @param Number $senderIdType
     * 寄件人证件类型 身份证(20183191),临时身份证(20183192),户口簿(20183193)
     * Required: false
     * Example Value: 
     */
    private $senderIdType;

    /**
     * @param Number $senderIdType
     * 寄件人证件类型 身份证(20183191),临时身份证(20183192),户口簿(20183193)
     * Example Value: 
     */
    public function setSenderIdType($senderIdType)
    {
        $this->senderIdType             = $senderIdType;
        $this->apiParas["pickupSenderIdType"]  = $senderIdType;
    }

    public function getSenderIdType()
    {
        return $this->senderIdType;
    }

    /**
     * @param String[] $productId
     * 商品id
     * Required: false
     * Example Value: 
     */
    private $productId;

    /**
     * @param String[] $productId
     * 商品id
     * Example Value: 
     */
    public function setProductId($productId)
    {
        $this->productId             = $productId;
        $this->apiParas["productId"]  = $productId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param String[] $snCode
     * 商品条码，选择校验条码时，必填
     * Required: false
     * Example Value: 
     */
    private $snCode;

    /**
     * @param String[] $snCode
     * 商品条码，选择校验条码时，必填
     * Example Value: 
     */
    public function setSnCode($snCode)
    {
        $this->snCode             = $snCode;
        $this->apiParas["snCode"]  = $snCode;
    }

    public function getSnCode()
    {
        return $this->snCode;
    }

    /**
     * @param String[] $productName
     * 商品名称
     * Required: true
     * Example Value: 
     */
    private $productName;

    /**
     * @param String[] $productName
     * 商品名称
     * Example Value: 
     */
    public function setProductName($productName)
    {
        $this->productName             = $productName;
        $this->apiParas["productName"]  = $productName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param Number[] $productCount
     * 商品数量
     * Required: true
     * Example Value: 
     */
    private $productCount;

    /**
     * @param Number[] $productCount
     * 商品数量
     * Example Value: 
     */
    public function setProductCount($productCount)
    {
        $this->productCount             = $productCount;
        $this->apiParas["productCount"]  = $productCount;
    }

    public function getProductCount()
    {
        return $this->productCount;
    }

}