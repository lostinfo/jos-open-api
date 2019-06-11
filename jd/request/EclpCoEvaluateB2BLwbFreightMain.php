<?php

namespace JD\request;

/**
 * B2B中小件运单运费试算
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2575&apiName=jingdong.eclp.co.evaluateB2BLwbFreightMain
 * Class EclpCoEvaluateB2BLwbFreightMain
 * @package Jd\request
 */
class EclpCoEvaluateB2BLwbFreightMain
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.evaluateB2BLwbFreightMain";
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
     * @param String $orderNo
     * 商家订单编号；商家单号不能包含中文；最大长度50
     * Required: false
     * Example Value: 20190124
     */
    private $orderNo;

    /**
     * @param String $orderNo
     * 商家订单编号；商家单号不能包含中文；最大长度50
     * Example Value: 20190124
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
     * @param String $deptNo
     * 事业部编号；最大长度50
     * Required: true
     * Example Value: EBU000000016
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编号；最大长度50
     * Example Value: EBU000000016
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
     * @param String $senderNickName
     * 寄件人简称；最大长度50
     * Required: false
     * Example Value: 小雨
     */
    private $senderNickName;

    /**
     * @param String $senderNickName
     * 寄件人简称；最大长度50
     * Example Value: 小雨
     */
    public function setSenderNickName($senderNickName)
    {
        $this->senderNickName             = $senderNickName;
        $this->apiParas["senderNickName"]  = $senderNickName;
    }

    public function getSenderNickName()
    {
        return $this->senderNickName;
    }

    /**
     * @param String $senderName
     * 寄件人姓名；最大长度50
     * Required: false
     * Example Value: 小雨
     */
    private $senderName;

    /**
     * @param String $senderName
     * 寄件人姓名；最大长度50
     * Example Value: 小雨
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
     * @param String $senderMobile
     * 寄件人手机；最大长度50
     * Required: false
     * Example Value: 13245678909
     */
    private $senderMobile;

    /**
     * @param String $senderMobile
     * 寄件人手机；最大长度50
     * Example Value: 13245678909
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
     * @param String $senderPhone
     * 寄件人座机；最大长度50
     * Required: false
     * Example Value: 7323456
     */
    private $senderPhone;

    /**
     * @param String $senderPhone
     * 寄件人座机；最大长度50
     * Example Value: 7323456
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
     * @param String $senderProvince
     * 寄件人省code；最大长度100
     * Required: false
     * Example Value: 11
     */
    private $senderProvince;

    /**
     * @param String $senderProvince
     * 寄件人省code；最大长度100
     * Example Value: 11
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
     * @param String $senderCity
     * 寄件人市code；最大长度100
     * Required: false
     * Example Value: 805
     */
    private $senderCity;

    /**
     * @param String $senderCity
     * 寄件人市code；最大长度100
     * Example Value: 805
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
     * @param String $senderCounty
     * 寄件人区/县code；最大长度100
     * Required: false
     * Example Value: 807
     */
    private $senderCounty;

    /**
     * @param String $senderCounty
     * 寄件人区/县code；最大长度100
     * Example Value: 807
     */
    public function setSenderCounty($senderCounty)
    {
        $this->senderCounty             = $senderCounty;
        $this->apiParas["senderCounty"]  = $senderCounty;
    }

    public function getSenderCounty()
    {
        return $this->senderCounty;
    }

    /**
     * @param String $senderTown
     * 寄件人城镇code；最大长度100
     * Required: false
     * Example Value: 38288
     */
    private $senderTown;

    /**
     * @param String $senderTown
     * 寄件人城镇code；最大长度100
     * Example Value: 38288
     */
    public function setSenderTown($senderTown)
    {
        $this->senderTown             = $senderTown;
        $this->apiParas["senderTown"]  = $senderTown;
    }

    public function getSenderTown()
    {
        return $this->senderTown;
    }

    /**
     * @param String $senderProvinceName
     * 寄件人省；最大长度100
     * Required: false
     * Example Value: 内蒙古
     */
    private $senderProvinceName;

    /**
     * @param String $senderProvinceName
     * 寄件人省；最大长度100
     * Example Value: 内蒙古
     */
    public function setSenderProvinceName($senderProvinceName)
    {
        $this->senderProvinceName             = $senderProvinceName;
        $this->apiParas["senderProvinceName"]  = $senderProvinceName;
    }

    public function getSenderProvinceName()
    {
        return $this->senderProvinceName;
    }

    /**
     * @param String $senderCityName
     * 寄件人市；最大长度100
     * Required: false
     * Example Value: 包头市
     */
    private $senderCityName;

    /**
     * @param String $senderCityName
     * 寄件人市；最大长度100
     * Example Value: 包头市
     */
    public function setSenderCityName($senderCityName)
    {
        $this->senderCityName             = $senderCityName;
        $this->apiParas["senderCityName"]  = $senderCityName;
    }

    public function getSenderCityName()
    {
        return $this->senderCityName;
    }

    /**
     * @param String $senderCountyName
     * 寄件人区/县；最大长度100
     * Required: false
     * Example Value: 固阳县
     */
    private $senderCountyName;

    /**
     * @param String $senderCountyName
     * 寄件人区/县；最大长度100
     * Example Value: 固阳县
     */
    public function setSenderCountyName($senderCountyName)
    {
        $this->senderCountyName             = $senderCountyName;
        $this->apiParas["senderCountyName"]  = $senderCountyName;
    }

    public function getSenderCountyName()
    {
        return $this->senderCountyName;
    }

    /**
     * @param String $senderTownName
     * 寄件人城镇；最大长度100
     * Required: false
     * Example Value: 县城内
     */
    private $senderTownName;

    /**
     * @param String $senderTownName
     * 寄件人城镇；最大长度100
     * Example Value: 县城内
     */
    public function setSenderTownName($senderTownName)
    {
        $this->senderTownName             = $senderTownName;
        $this->apiParas["senderTownName"]  = $senderTownName;
    }

    public function getSenderTownName()
    {
        return $this->senderTownName;
    }

    /**
     * @param String $senderAddress
     * 寄件人街道
     * Required: true
     * Example Value: 内蒙古包头市固阳县
     */
    private $senderAddress;

    /**
     * @param String $senderAddress
     * 寄件人街道
     * Example Value: 内蒙古包头市固阳县
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
     * @param String $receiverNickName
     * 收件人简称
     * Required: false
     * Example Value: 小雨
     */
    private $receiverNickName;

    /**
     * @param String $receiverNickName
     * 收件人简称
     * Example Value: 小雨
     */
    public function setReceiverNickName($receiverNickName)
    {
        $this->receiverNickName             = $receiverNickName;
        $this->apiParas["receiverNickName"]  = $receiverNickName;
    }

    public function getReceiverNickName()
    {
        return $this->receiverNickName;
    }

    /**
     * @param String $receiverName
     * 收货人姓名
     * Required: false
     * Example Value: 小雨
     */
    private $receiverName;

    /**
     * @param String $receiverName
     * 收货人姓名
     * Example Value: 小雨
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
     * @param String $receiverMobile
     * 收货人手机
     * Required: false
     * Example Value: 13245678909
     */
    private $receiverMobile;

    /**
     * @param String $receiverMobile
     * 收货人手机
     * Example Value: 13245678909
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
     * @param String $receiverPhone
     * 收货人座机
     * Required: false
     * Example Value: 7323456
     */
    private $receiverPhone;

    /**
     * @param String $receiverPhone
     * 收货人座机
     * Example Value: 7323456
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
     * @param String $receiverProvince
     * 收货人省code
     * Required: false
     * Example Value: 11
     */
    private $receiverProvince;

    /**
     * @param String $receiverProvince
     * 收货人省code
     * Example Value: 11
     */
    public function setReceiverProvince($receiverProvince)
    {
        $this->receiverProvince             = $receiverProvince;
        $this->apiParas["receiverProvince"]  = $receiverProvince;
    }

    public function getReceiverProvince()
    {
        return $this->receiverProvince;
    }

    /**
     * @param String $receiverCity
     * 收货人市code
     * Required: false
     * Example Value: 805
     */
    private $receiverCity;

    /**
     * @param String $receiverCity
     * 收货人市code
     * Example Value: 805
     */
    public function setReceiverCity($receiverCity)
    {
        $this->receiverCity             = $receiverCity;
        $this->apiParas["receiverCity"]  = $receiverCity;
    }

    public function getReceiverCity()
    {
        return $this->receiverCity;
    }

    /**
     * @param String $receiverCounty
     * 收货人区/县code
     * Required: false
     * Example Value: 807
     */
    private $receiverCounty;

    /**
     * @param String $receiverCounty
     * 收货人区/县code
     * Example Value: 807
     */
    public function setReceiverCounty($receiverCounty)
    {
        $this->receiverCounty             = $receiverCounty;
        $this->apiParas["receiverCounty"]  = $receiverCounty;
    }

    public function getReceiverCounty()
    {
        return $this->receiverCounty;
    }

    /**
     * @param String $receiverTown
     * 收货人城镇code
     * Required: false
     * Example Value: 38288
     */
    private $receiverTown;

    /**
     * @param String $receiverTown
     * 收货人城镇code
     * Example Value: 38288
     */
    public function setReceiverTown($receiverTown)
    {
        $this->receiverTown             = $receiverTown;
        $this->apiParas["receiverTown"]  = $receiverTown;
    }

    public function getReceiverTown()
    {
        return $this->receiverTown;
    }

    /**
     * @param String $receiverProvinceName
     * 收货人省
     * Required: false
     * Example Value: 内蒙古
     */
    private $receiverProvinceName;

    /**
     * @param String $receiverProvinceName
     * 收货人省
     * Example Value: 内蒙古
     */
    public function setReceiverProvinceName($receiverProvinceName)
    {
        $this->receiverProvinceName             = $receiverProvinceName;
        $this->apiParas["receiverProvinceName"]  = $receiverProvinceName;
    }

    public function getReceiverProvinceName()
    {
        return $this->receiverProvinceName;
    }

    /**
     * @param String $receiverCityName
     * 收货人市
     * Required: false
     * Example Value: 包头市
     */
    private $receiverCityName;

    /**
     * @param String $receiverCityName
     * 收货人市
     * Example Value: 包头市
     */
    public function setReceiverCityName($receiverCityName)
    {
        $this->receiverCityName             = $receiverCityName;
        $this->apiParas["receiverCityName"]  = $receiverCityName;
    }

    public function getReceiverCityName()
    {
        return $this->receiverCityName;
    }

    /**
     * @param String $receiverCountyName
     * 收货人区/县
     * Required: false
     * Example Value: 固阳县
     */
    private $receiverCountyName;

    /**
     * @param String $receiverCountyName
     * 收货人区/县
     * Example Value: 固阳县
     */
    public function setReceiverCountyName($receiverCountyName)
    {
        $this->receiverCountyName             = $receiverCountyName;
        $this->apiParas["receiverCountyName"]  = $receiverCountyName;
    }

    public function getReceiverCountyName()
    {
        return $this->receiverCountyName;
    }

    /**
     * @param String $receiverTownName
     * 收货人城镇
     * Required: false
     * Example Value: 县城内
     */
    private $receiverTownName;

    /**
     * @param String $receiverTownName
     * 收货人城镇
     * Example Value: 县城内
     */
    public function setReceiverTownName($receiverTownName)
    {
        $this->receiverTownName             = $receiverTownName;
        $this->apiParas["receiverTownName"]  = $receiverTownName;
    }

    public function getReceiverTownName()
    {
        return $this->receiverTownName;
    }

    /**
     * @param String $remark
     * 订单备注
     * Required: false
     * Example Value: 内蒙古包头市固阳县
     */
    private $remark;

    /**
     * @param String $remark
     * 订单备注
     * Example Value: 内蒙古包头市固阳县
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
     * @param Number $grossWeight
     * 总重量；单位kg
     * Required: true
     * Example Value: 1
     */
    private $grossWeight;

    /**
     * @param Number $grossWeight
     * 总重量；单位kg
     * Example Value: 1
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
     * @param Number $grossVolume
     * 总体积；单位立方米
     * Required: true
     * Example Value: 1
     */
    private $grossVolume;

    /**
     * @param Number $grossVolume
     * 总体积；单位立方米
     * Example Value: 1
     */
    public function setGrossVolume($grossVolume)
    {
        $this->grossVolume             = $grossVolume;
        $this->apiParas["grossVolume"]  = $grossVolume;
    }

    public function getGrossVolume()
    {
        return $this->grossVolume;
    }

    /**
     * @param String $createTime
     * 创建时间；格式：yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 2019-01-25 15:50:12
     */
    private $createTime;

    /**
     * @param String $createTime
     * 创建时间；格式：yyyy-MM-dd HH:mm:ss
     * Example Value: 2019-01-25 15:50:12
     */
    public function setCreateTime($createTime)
    {
        $this->createTime             = $createTime;
        $this->apiParas["createTime"]  = $createTime;
    }

    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * @param String $createUser
     * 创建人
     * Required: false
     * Example Value: blademirror
     */
    private $createUser;

    /**
     * @param String $createUser
     * 创建人
     * Example Value: blademirror
     */
    public function setCreateUser($createUser)
    {
        $this->createUser             = $createUser;
        $this->apiParas["createUser"]  = $createUser;
    }

    public function getCreateUser()
    {
        return $this->createUser;
    }

    /**
     * @param Number $receivable
     * 代收金额；单位元；货到付款时必填
     * Required: false
     * Example Value: 1.23
     */
    private $receivable;

    /**
     * @param Number $receivable
     * 代收金额；单位元；货到付款时必填
     * Example Value: 1.23
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
     * @param  $isCod
     * 是否代收货款 1是 0:否
     * Required: false
     * Example Value: 1
     */
    private $isCod;

    /**
     * @param  $isCod
     * 是否代收货款 1是 0:否
     * Example Value: 1
     */
    public function setIsCod($isCod)
    {
        $this->isCod             = $isCod;
        $this->apiParas["isCod"]  = $isCod;
    }

    public function getIsCod()
    {
        return $this->isCod;
    }

    /**
     * @param String $vehicleTypeName
     * 车辆类型名称；整车必填；最大长度100
     * Required: false
     * Example Value: 1
     */
    private $vehicleTypeName;

    /**
     * @param String $vehicleTypeName
     * 车辆类型名称；整车必填；最大长度100
     * Example Value: 1
     */
    public function setVehicleTypeName($vehicleTypeName)
    {
        $this->vehicleTypeName             = $vehicleTypeName;
        $this->apiParas["vehicleTypeName"]  = $vehicleTypeName;
    }

    public function getVehicleTypeName()
    {
        return $this->vehicleTypeName;
    }

    /**
     * @param String $vehicleTypeNo
     * 车辆类型编码；整车必填；最大长度50
     * Required: false
     * Example Value: 1
     */
    private $vehicleTypeNo;

    /**
     * @param String $vehicleTypeNo
     * 车辆类型编码；整车必填；最大长度50
     * Example Value: 1
     */
    public function setVehicleTypeNo($vehicleTypeNo)
    {
        $this->vehicleTypeNo             = $vehicleTypeNo;
        $this->apiParas["vehicleTypeNo"]  = $vehicleTypeNo;
    }

    public function getVehicleTypeNo()
    {
        return $this->vehicleTypeNo;
    }

    /**
     * @param Number $vehicleQty
     * 用车数量 ；本期写死1
     * Required: false
     * Example Value: 1
     */
    private $vehicleQty;

    /**
     * @param Number $vehicleQty
     * 用车数量 ；本期写死1
     * Example Value: 1
     */
    public function setVehicleQty($vehicleQty)
    {
        $this->vehicleQty             = $vehicleQty;
        $this->apiParas["vehicleQty"]  = $vehicleQty;
    }

    public function getVehicleQty()
    {
        return $this->vehicleQty;
    }

    /**
     * @param String $expressItemName
     * 寄托物品名称；最大长度50
     * Required: true
     * Example Value: 鼠标
     */
    private $expressItemName;

    /**
     * @param String $expressItemName
     * 寄托物品名称；最大长度50
     * Example Value: 鼠标
     */
    public function setExpressItemName($expressItemName)
    {
        $this->expressItemName             = $expressItemName;
        $this->apiParas["expressItemName"]  = $expressItemName;
    }

    public function getExpressItemName()
    {
        return $this->expressItemName;
    }

    /**
     * @param Number $expressItemQty
     * 寄托物总箱数；单位个
     * Required: true
     * Example Value: 1
     */
    private $expressItemQty;

    /**
     * @param Number $expressItemQty
     * 寄托物总箱数；单位个
     * Example Value: 1
     */
    public function setExpressItemQty($expressItemQty)
    {
        $this->expressItemQty             = $expressItemQty;
        $this->apiParas["expressItemQty"]  = $expressItemQty;
    }

    public function getExpressItemQty()
    {
        return $this->expressItemQty;
    }

    /**
     * @param  $signReceiptFlag
     * 是否签收短信回执 ；0:否 1：是
     * Required: false
     * Example Value: 1
     */
    private $signReceiptFlag;

    /**
     * @param  $signReceiptFlag
     * 是否签收短信回执 ；0:否 1：是
     * Example Value: 1
     */
    public function setSignReceiptFlag($signReceiptFlag)
    {
        $this->signReceiptFlag             = $signReceiptFlag;
        $this->apiParas["signReceiptFlag"]  = $signReceiptFlag;
    }

    public function getSignReceiptFlag()
    {
        return $this->signReceiptFlag;
    }

    /**
     * @param  $deliveryReceiptFlag
     * 是否发货短信回执 ；0:否 1：是
     * Required: false
     * Example Value: 1
     */
    private $deliveryReceiptFlag;

    /**
     * @param  $deliveryReceiptFlag
     * 是否发货短信回执 ；0:否 1：是
     * Example Value: 1
     */
    public function setDeliveryReceiptFlag($deliveryReceiptFlag)
    {
        $this->deliveryReceiptFlag             = $deliveryReceiptFlag;
        $this->apiParas["deliveryReceiptFlag"]  = $deliveryReceiptFlag;
    }

    public function getDeliveryReceiptFlag()
    {
        return $this->deliveryReceiptFlag;
    }

    /**
     * @param  $deliveryIntoWarehouse
     * 是否送货入仓 ；0:否 1：是
     * Required: true
     * Example Value: 1
     */
    private $deliveryIntoWarehouse;

    /**
     * @param  $deliveryIntoWarehouse
     * 是否送货入仓 ；0:否 1：是
     * Example Value: 1
     */
    public function setDeliveryIntoWarehouse($deliveryIntoWarehouse)
    {
        $this->deliveryIntoWarehouse             = $deliveryIntoWarehouse;
        $this->apiParas["deliveryIntoWarehouse"]  = $deliveryIntoWarehouse;
    }

    public function getDeliveryIntoWarehouse()
    {
        return $this->deliveryIntoWarehouse;
    }

    /**
     * @param  $loadFlag
     * 是否装货 ；0:否 1：是
     * Required: true
     * Example Value: 1
     */
    private $loadFlag;

    /**
     * @param  $loadFlag
     * 是否装货 ；0:否 1：是
     * Example Value: 1
     */
    public function setLoadFlag($loadFlag)
    {
        $this->loadFlag             = $loadFlag;
        $this->apiParas["loadFlag"]  = $loadFlag;
    }

    public function getLoadFlag()
    {
        return $this->loadFlag;
    }

    /**
     * @param  $unloadFlag
     * 是否卸货； 0:否 1：是
     * Required: true
     * Example Value: 1
     */
    private $unloadFlag;

    /**
     * @param  $unloadFlag
     * 是否卸货； 0:否 1：是
     * Example Value: 1
     */
    public function setUnloadFlag($unloadFlag)
    {
        $this->unloadFlag             = $unloadFlag;
        $this->apiParas["unloadFlag"]  = $unloadFlag;
    }

    public function getUnloadFlag()
    {
        return $this->unloadFlag;
    }

    /**
     * @param  $receiptFlag
     * 签单返还；0无签单，1纸质签单，3电子签单，4纸质签单和电子签单
     * Required: true
     * Example Value: 1
     */
    private $receiptFlag;

    /**
     * @param  $receiptFlag
     * 签单返还；0无签单，1纸质签单，3电子签单，4纸质签单和电子签单
     * Example Value: 1
     */
    public function setReceiptFlag($receiptFlag)
    {
        $this->receiptFlag             = $receiptFlag;
        $this->apiParas["receiptFlag"]  = $receiptFlag;
    }

    public function getReceiptFlag()
    {
        return $this->receiptFlag;
    }

    /**
     * @param  $fcFlag
     * 运费结算方式 ；0:月结 1:到付 2:现付
     * Required: false
     * Example Value: 1
     */
    private $fcFlag;

    /**
     * @param  $fcFlag
     * 运费结算方式 ；0:月结 1:到付 2:现付
     * Example Value: 1
     */
    public function setFcFlag($fcFlag)
    {
        $this->fcFlag             = $fcFlag;
        $this->apiParas["fcFlag"]  = $fcFlag;
    }

    public function getFcFlag()
    {
        return $this->fcFlag;
    }

    /**
     * @param Number $guaranteeValue
     * 保价金额；单位元；保留两位小数
     * Required: false
     * Example Value: 1.23
     */
    private $guaranteeValue;

    /**
     * @param Number $guaranteeValue
     * 保价金额；单位元；保留两位小数
     * Example Value: 1.23
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
     * @param String $pickupBeginTime
     * 上门提货开始时间；格式:yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 2019-01-25 15:50:12
     */
    private $pickupBeginTime;

    /**
     * @param String $pickupBeginTime
     * 上门提货开始时间；格式:yyyy-MM-dd HH:mm:ss
     * Example Value: 2019-01-25 15:50:12
     */
    public function setPickupBeginTime($pickupBeginTime)
    {
        $this->pickupBeginTime             = $pickupBeginTime;
        $this->apiParas["pickupBeginTime"]  = $pickupBeginTime;
    }

    public function getPickupBeginTime()
    {
        return $this->pickupBeginTime;
    }

    /**
     * @param String $pickupEndTime
     * 上门提货结束时间；格式:yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 2019-01-25 15:50:12
     */
    private $pickupEndTime;

    /**
     * @param String $pickupEndTime
     * 上门提货结束时间；格式:yyyy-MM-dd HH:mm:ss
     * Example Value: 2019-01-25 15:50:12
     */
    public function setPickupEndTime($pickupEndTime)
    {
        $this->pickupEndTime             = $pickupEndTime;
        $this->apiParas["pickupEndTime"]  = $pickupEndTime;
    }

    public function getPickupEndTime()
    {
        return $this->pickupEndTime;
    }

    /**
     * @param  $bussinessType
     * 业务类型 ；1：大件纯配 2：b2b小件纯配
     * Required: false
     * Example Value: 1
     */
    private $bussinessType;

    /**
     * @param  $bussinessType
     * 业务类型 ；1：大件纯配 2：b2b小件纯配
     * Example Value: 1
     */
    public function setBussinessType($bussinessType)
    {
        $this->bussinessType             = $bussinessType;
        $this->apiParas["bussinessType"]  = $bussinessType;
    }

    public function getBussinessType()
    {
        return $this->bussinessType;
    }

    /**
     * @param  $deliveryType
     * 产品类型；1：零担  2:整车
     * Required: true
     * Example Value: 1
     */
    private $deliveryType;

    /**
     * @param  $deliveryType
     * 产品类型；1：零担  2:整车
     * Example Value: 1
     */
    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType             = $deliveryType;
        $this->apiParas["deliveryType"]  = $deliveryType;
    }

    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    /**
     * @param String $senderCompany
     * 寄件人公司；最大长度100
     * Required: false
     * Example Value: 京东
     */
    private $senderCompany;

    /**
     * @param String $senderCompany
     * 寄件人公司；最大长度100
     * Example Value: 京东
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
     * @param String $receiverCompany
     * 收件人公司；最大长度100
     * Required: false
     * Example Value: 京东
     */
    private $receiverCompany;

    /**
     * @param String $receiverCompany
     * 收件人公司；最大长度100
     * Example Value: 京东
     */
    public function setReceiverCompany($receiverCompany)
    {
        $this->receiverCompany             = $receiverCompany;
        $this->apiParas["receiverCompany"]  = $receiverCompany;
    }

    public function getReceiverCompany()
    {
        return $this->receiverCompany;
    }

    /**
     * @param String $receiverAddress
     * 收件人街道；最大长度200
     * Required: true
     * Example Value: 北京大兴区南海家园六里32-1-1701
     */
    private $receiverAddress;

    /**
     * @param String $receiverAddress
     * 收件人街道；最大长度200
     * Example Value: 北京大兴区南海家园六里32-1-1701
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
     * @param String $warehouseCode
     * 发货仓编码；最大长度50
     * Required: false
     * Example Value: sjw001
     */
    private $warehouseCode;

    /**
     * @param String $warehouseCode
     * 发货仓编码；最大长度50
     * Example Value: sjw001
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
     * @param String $projectName
     * 项目名称；最大长度200
     * Required: false
     * Example Value: 普天太力取件
     */
    private $projectName;

    /**
     * @param String $projectName
     * 项目名称；最大长度200
     * Example Value: 普天太力取件
     */
    public function setProjectName($projectName)
    {
        $this->projectName             = $projectName;
        $this->apiParas["projectName"]  = $projectName;
    }

    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * @param String $actualSpId
     * 承运商ID；最大长度100
     * Required: false
     * Example Value: 20180228
     */
    private $actualSpId;

    /**
     * @param String $actualSpId
     * 承运商ID；最大长度100
     * Example Value: 20180228
     */
    public function setActualSpId($actualSpId)
    {
        $this->actualSpId             = $actualSpId;
        $this->apiParas["actualSpId"]  = $actualSpId;
    }

    public function getActualSpId()
    {
        return $this->actualSpId;
    }

    /**
     * @param  $coldChainOn
     * 特殊行业 ；0，普通；1，生鲜,2 汽后
     * Required: true
     * Example Value: 1
     */
    private $coldChainOn;

    /**
     * @param  $coldChainOn
     * 特殊行业 ；0，普通；1，生鲜,2 汽后
     * Example Value: 1
     */
    public function setColdChainOn($coldChainOn)
    {
        $this->coldChainOn             = $coldChainOn;
        $this->apiParas["coldChainOn"]  = $coldChainOn;
    }

    public function getColdChainOn()
    {
        return $this->coldChainOn;
    }

    /**
     * @param  $temptureNum
     * 温层（冷链）；0,温控（10-15℃）；1,冷藏（冷藏0-4℃）；2,冷冻（-18℃以下）；3,深冷（-30℃以下）
     * Required: false
     * Example Value: 1
     */
    private $temptureNum;

    /**
     * @param  $temptureNum
     * 温层（冷链）；0,温控（10-15℃）；1,冷藏（冷藏0-4℃）；2,冷冻（-18℃以下）；3,深冷（-30℃以下）
     * Example Value: 1
     */
    public function setTemptureNum($temptureNum)
    {
        $this->temptureNum             = $temptureNum;
        $this->apiParas["temptureNum"]  = $temptureNum;
    }

    public function getTemptureNum()
    {
        return $this->temptureNum;
    }

    /**
     * @param  $qingzhenOn
     * 是否清真；0，否；1，是
     * Required: false
     * Example Value: 1
     */
    private $qingzhenOn;

    /**
     * @param  $qingzhenOn
     * 是否清真；0，否；1，是
     * Example Value: 1
     */
    public function setQingzhenOn($qingzhenOn)
    {
        $this->qingzhenOn             = $qingzhenOn;
        $this->apiParas["qingzhenOn"]  = $qingzhenOn;
    }

    public function getQingzhenOn()
    {
        return $this->qingzhenOn;
    }

    /**
     * @param  $yiwuranOn
     * 是否易污染 ；0，否；1，是
     * Required: false
     * Example Value: 1
     */
    private $yiwuranOn;

    /**
     * @param  $yiwuranOn
     * 是否易污染 ；0，否；1，是
     * Example Value: 1
     */
    public function setYiwuranOn($yiwuranOn)
    {
        $this->yiwuranOn             = $yiwuranOn;
        $this->apiParas["yiwuranOn"]  = $yiwuranOn;
    }

    public function getYiwuranOn()
    {
        return $this->yiwuranOn;
    }

    /**
     * @param String $inStorageNo
     * 进仓预约号；最大长度30
     * Required: false
     * Example Value: 1234
     */
    private $inStorageNo;

    /**
     * @param String $inStorageNo
     * 进仓预约号；最大长度30
     * Example Value: 1234
     */
    public function setInStorageNo($inStorageNo)
    {
        $this->inStorageNo             = $inStorageNo;
        $this->apiParas["inStorageNo"]  = $inStorageNo;
    }

    public function getInStorageNo()
    {
        return $this->inStorageNo;
    }

    /**
     * @param Date $inStorageTime
     * 进仓时间
     * Required: false
     * Example Value: 
     */
    private $inStorageTime;

    /**
     * @param Date $inStorageTime
     * 进仓时间
     * Example Value: 
     */
    public function setInStorageTime($inStorageTime)
    {
        $this->inStorageTime             = $inStorageTime;
        $this->apiParas["inStorageTime"]  = $inStorageTime;
    }

    public function getInStorageTime()
    {
        return $this->inStorageTime;
    }

    /**
     * @param String $inStorageRemark
     * 进仓备注；最大长度100
     * Required: false
     * Example Value: 进仓备注
     */
    private $inStorageRemark;

    /**
     * @param String $inStorageRemark
     * 进仓备注；最大长度100
     * Example Value: 进仓备注
     */
    public function setInStorageRemark($inStorageRemark)
    {
        $this->inStorageRemark             = $inStorageRemark;
        $this->apiParas["inStorageRemark"]  = $inStorageRemark;
    }

    public function getInStorageRemark()
    {
        return $this->inStorageRemark;
    }

    /**
     * @param  $heavyUpstair
     * 是否重货上楼 ；0：否；1：是
     * Required: false
     * Example Value: 1
     */
    private $heavyUpstair;

    /**
     * @param  $heavyUpstair
     * 是否重货上楼 ；0：否；1：是
     * Example Value: 1
     */
    public function setHeavyUpstair($heavyUpstair)
    {
        $this->heavyUpstair             = $heavyUpstair;
        $this->apiParas["heavyUpstair"]  = $heavyUpstair;
    }

    public function getHeavyUpstair()
    {
        return $this->heavyUpstair;
    }

    /**
     * @param String $wayBillCode
     * 预制运单号；最大长度50
     * Required: false
     * Example Value: wy23434
     */
    private $wayBillCode;

    /**
     * @param String $wayBillCode
     * 预制运单号；最大长度50
     * Example Value: wy23434
     */
    public function setWayBillCode($wayBillCode)
    {
        $this->wayBillCode             = $wayBillCode;
        $this->apiParas["wayBillCode"]  = $wayBillCode;
    }

    public function getWayBillCode()
    {
        return $this->wayBillCode;
    }

}