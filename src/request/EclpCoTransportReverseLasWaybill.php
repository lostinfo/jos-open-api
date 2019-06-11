<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 大件取件单导入
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3265&apiName=jingdong.eclp.co.transportReverseLasWaybill
 * Class EclpCoTransportReverseLasWaybill
 * @package Jd\request
 */
class EclpCoTransportReverseLasWaybill
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.transportReverseLasWaybill";
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
     * @param string $deptNo
     * EBU开头；如事业部信息报错请查看当前事业部编码是否合法；
     * Required: true
     * Example Value: EBU4398046516026
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * EBU开头；如事业部信息报错请查看当前事业部编码是否合法；
     * Example Value: EBU4398046516026
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
     * @param string $orderNo
     * 商家自行定义；不允许输入汉字；相同事业部下单号需唯一，如单号重复，需更换商家单号；如果当前订单为京东平台订单，商家订单号不允许包含特殊字符；
     * Required: true
     * Example Value: 2345357456735
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 商家自行定义；不允许输入汉字；相同事业部下单号需唯一，如单号重复，需更换商家单号；如果当前订单为京东平台订单，商家订单号不允许包含特殊字符；
     * Example Value: 2345357456735
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["orderNo"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param string $salePlatform
     * 默认为其他，1、京东；2、其他；3天猫  ；
     * Required: false
     * Example Value: 1
     */
    private $salePlatform;

    /**
     * @param string $salePlatform
     * 默认为其他，1、京东；2、其他；3天猫  ；
     * Example Value: 1
     */
    public function setSalePlatform($salePlatform)
    {
        $this->salePlatform             = $salePlatform;
        $this->apiParas["salePlatform"]  = $salePlatform;
    }

    public function getSalePlatform()
    {
        return $this->salePlatform;
    }

    /**
     * @param string $customerPin
     * 用户PIN；销售平台为京东时必填
     * Required: false
     * Example Value: jddaojia
     */
    private $customerPin;

    /**
     * @param string $customerPin
     * 用户PIN；销售平台为京东时必填
     * Example Value: jddaojia
     */
    public function setCustomerPin($customerPin)
    {
        $this->customerPin             = $customerPin;
        $this->apiParas["customerPin"]  = $customerPin;
    }

    public function getCustomerPin()
    {
        return $this->customerPin;
    }

    /**
     * @param string $associateSoNo
     * 关联单号；必填，主要填写正向的运单号
     * Required: true
     * Example Value: LD349573475
     */
    private $associateSoNo;

    /**
     * @param string $associateSoNo
     * 关联单号；必填，主要填写正向的运单号
     * Example Value: LD349573475
     */
    public function setAssociateSoNo($associateSoNo)
    {
        $this->associateSoNo             = $associateSoNo;
        $this->apiParas["associateSoNo"]  = $associateSoNo;
    }

    public function getAssociateSoNo()
    {
        return $this->associateSoNo;
    }

    /**
     * @param string $senderName
     * 寄件人姓名
     * Required: true
     * Example Value: 张三
     */
    private $senderName;

    /**
     * @param string $senderName
     * 寄件人姓名
     * Example Value: 张三
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
     * @param string $senderMobile
     * 寄件人手机
     * Required: false
     * Example Value: 15675465445
     */
    private $senderMobile;

    /**
     * @param string $senderMobile
     * 寄件人手机
     * Example Value: 15675465445
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
     * @param string $senderPhone
     * 寄件人座机
     * Required: false
     * Example Value: 010-18765434
     */
    private $senderPhone;

    /**
     * @param string $senderPhone
     * 寄件人座机
     * Example Value: 010-18765434
     */
    public function setSenderPhone($senderPhone)
    {
        $this->senderPhone             = $senderPhone;
        $this->apiParas["senderPhone"]  = $senderPhone;
    }

    public function getSenderPhone()
    {
        return $this->senderPhone;
    }

    /**
     * @param string $senderAddress
     * 寄件人地址
     * Required: true
     * Example Value: 北京海淀区三环以内
     */
    private $senderAddress;

    /**
     * @param string $senderAddress
     * 寄件人地址
     * Example Value: 北京海淀区三环以内
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
     * @param string $receiverName
     * 收件人姓名
     * Required: true
     * Example Value: 李四
     */
    private $receiverName;

    /**
     * @param string $receiverName
     * 收件人姓名
     * Example Value: 李四
     */
    public function setReceiverName($receiverName)
    {
        $this->receiverName             = $receiverName;
        $this->apiParas["receiverName"]  = $receiverName;
    }

    public function getReceiverName()
    {
        return $this->receiverName;
    }

    /**
     * @param string $receiverMobile
     * 收件人手机
     * Required: false
     * Example Value: 15675465445
     */
    private $receiverMobile;

    /**
     * @param string $receiverMobile
     * 收件人手机
     * Example Value: 15675465445
     */
    public function setReceiverMobile($receiverMobile)
    {
        $this->receiverMobile             = $receiverMobile;
        $this->apiParas["receiverMobile"]  = $receiverMobile;
    }

    public function getReceiverMobile()
    {
        return $this->receiverMobile;
    }

    /**
     * @param string $receiverPhone
     * 收件人座机
     * Required: false
     * Example Value: 010-18765434
     */
    private $receiverPhone;

    /**
     * @param string $receiverPhone
     * 收件人座机
     * Example Value: 010-18765434
     */
    public function setReceiverPhone($receiverPhone)
    {
        $this->receiverPhone             = $receiverPhone;
        $this->apiParas["receiverPhone"]  = $receiverPhone;
    }

    public function getReceiverPhone()
    {
        return $this->receiverPhone;
    }

    /**
     * @param string $receiverAddress
     * 收件人地址
     * Required: true
     * Example Value: 北京海淀区三环以内
     */
    private $receiverAddress;

    /**
     * @param string $receiverAddress
     * 收件人地址
     * Example Value: 北京海淀区三环以内
     */
    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress             = $receiverAddress;
        $this->apiParas["receiverAddress"]  = $receiverAddress;
    }

    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

    /**
     * @param string $isFragile
     * 是否易碎；默认非易碎，如填写1：易碎，2：非易碎
     * Required: false
     * Example Value: 2
     */
    private $isFragile;

    /**
     * @param string $isFragile
     * 是否易碎；默认非易碎，如填写1：易碎，2：非易碎
     * Example Value: 2
     */
    public function setIsFragile($isFragile)
    {
        $this->isFragile             = $isFragile;
        $this->apiParas["isFragile"]  = $isFragile;
    }

    public function getIsFragile()
    {
        return $this->isFragile;
    }

    /**
     * @param string $pickupReturnReason
     * 退货原因
     * Required: true
     * Example Value: 七天无理由
     */
    private $pickupReturnReason;

    /**
     * @param string $pickupReturnReason
     * 退货原因
     * Example Value: 七天无理由
     */
    public function setPickupReturnReason($pickupReturnReason)
    {
        $this->pickupReturnReason             = $pickupReturnReason;
        $this->apiParas["pickupReturnReason"]  = $pickupReturnReason;
    }

    public function getPickupReturnReason()
    {
        return $this->pickupReturnReason;
    }

    /**
     * @param string[] $weight
     * 包裹重量
     * Required: true
     * Example Value: 10
     */
    private $weight;

    /**
     * @param string[] $weight
     * 包裹重量
     * Example Value: 10
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
     * @param string[] $length
     * 包裹长度
     * Required: true
     * Example Value: 100
     */
    private $length;

    /**
     * @param string[] $length
     * 包裹长度
     * Example Value: 100
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
     * @param string[] $width
     * 包裹宽度
     * Required: true
     * Example Value: 200
     */
    private $width;

    /**
     * @param string[] $width
     * 包裹宽度
     * Example Value: 200
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
     * @param string[] $height
     * 包裹高度
     * Required: true
     * Example Value: 300
     */
    private $height;

    /**
     * @param string[] $height
     * 包裹高度
     * Example Value: 300
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
     * @param string[] $packageName
     * 包裹内容
     * Required: true
     * Example Value: 空调
     */
    private $packageName;

    /**
     * @param string[] $packageName
     * 包裹内容
     * Example Value: 空调
     */
    public function setPackageName($packageName)
    {
        $this->packageName             = $packageName;
        $this->apiParas["packageName"]  = $packageName;
    }

    public function getPackageName()
    {
        return $this->packageName;
    }

    /**
     * @param string[] $packageQty
     * 包裹数量
     * Required: false
     * Example Value: 1
     */
    private $packageQty;

    /**
     * @param string[] $packageQty
     * 包裹数量
     * Example Value: 1
     */
    public function setPackageQty($packageQty)
    {
        $this->packageQty             = $packageQty;
        $this->apiParas["packageQty"]  = $packageQty;
    }

    public function getPackageQty()
    {
        return $this->packageQty;
    }

}