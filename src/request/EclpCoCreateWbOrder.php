<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * B2B纯配创建运单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2120&apiName=jingdong.eclp.co.createWbOrder
 * Class EclpCoCreateWbOrder
 * @package Jd\request
 */
class EclpCoCreateWbOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.createWbOrder";
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
     * @param string $orderNo
     * 商家订单编号；商家单号不能包含中文；最大长度50
     * Required: false
     * Example Value: 20190124
     */
    private $orderNo;

    /**
     * @param string $orderNo
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
     * @param string $deptNo
     * 事业部编号；最大长度50
     * Required: true
     * Example Value: EBU000000016
     */
    private $deptNo;

    /**
     * @param string $deptNo
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
     * @param string $senderNickName
     * 寄件人简称；最大长度50（简称存在，寄件人信息、四级地址和详细地址可不填）
     * Required: false
     * Example Value: 小雨
     */
    private $senderNickName;

    /**
     * @param string $senderNickName
     * 寄件人简称；最大长度50（简称存在，寄件人信息、四级地址和详细地址可不填）
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
     * @param string $senderName
     * 寄件人姓名；最大长度50（无简称时，必填）
     * Required: false
     * Example Value: 小雨
     */
    private $senderName;

    /**
     * @param string $senderName
     * 寄件人姓名；最大长度50（无简称时，必填）
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
     * @param string $senderMobile
     * 寄件人手机；最大长度50，不允许超过7位中文（无简称时，必填--手机电话二选一）
     * Required: false
     * Example Value: 13245678909
     */
    private $senderMobile;

    /**
     * @param string $senderMobile
     * 寄件人手机；最大长度50，不允许超过7位中文（无简称时，必填--手机电话二选一）
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
     * @param string $senderPhone
     * 寄件人座机；最大长度50，不允许超过7位中文（无简称时，必填--手机电话二选一）
     * Required: false
     * Example Value: 7323456
     */
    private $senderPhone;

    /**
     * @param string $senderPhone
     * 寄件人座机；最大长度50，不允许超过7位中文（无简称时，必填--手机电话二选一）
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
     * @param string $senderProvince
     * 寄件人省code；最大长度100
     * Required: false
     * Example Value: 11
     */
    private $senderProvince;

    /**
     * @param string $senderProvince
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
     * @param string $senderCity
     * 寄件人市code；最大长度100
     * Required: false
     * Example Value: 805
     */
    private $senderCity;

    /**
     * @param string $senderCity
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
     * @param string $senderCounty
     * 寄件人区/县code；最大长度100
     * Required: false
     * Example Value: 807
     */
    private $senderCounty;

    /**
     * @param string $senderCounty
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
     * @param string $senderTown
     * 寄件人城镇code；最大长度100
     * Required: false
     * Example Value: 38288
     */
    private $senderTown;

    /**
     * @param string $senderTown
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
     * @param string $senderProvinceName
     * 寄件人省；最大长度100（无简称时，必填）
     * Required: false
     * Example Value: 内蒙古
     */
    private $senderProvinceName;

    /**
     * @param string $senderProvinceName
     * 寄件人省；最大长度100（无简称时，必填）
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
     * @param string $senderCityName
     * 寄件人市；最大长度100（无简称时，必填）
     * Required: false
     * Example Value: 包头市
     */
    private $senderCityName;

    /**
     * @param string $senderCityName
     * 寄件人市；最大长度100（无简称时，必填）
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
     * @param string $senderCountyName
     * 寄件人区/县；最大长度100（无简称时，必填）
     * Required: false
     * Example Value: 固阳县
     */
    private $senderCountyName;

    /**
     * @param string $senderCountyName
     * 寄件人区/县；最大长度100（无简称时，必填）
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
     * @param string $senderTownName
     * 寄件人城镇；最大长度100
     * Required: false
     * Example Value: 县城内
     */
    private $senderTownName;

    /**
     * @param string $senderTownName
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
     * @param string $senderAddress
     * 寄件人街道；最大长度200（无简称时，必填）
     * Required: false
     * Example Value: 内蒙古包头市固阳县
     */
    private $senderAddress;

    /**
     * @param string $senderAddress
     * 寄件人街道；最大长度200（无简称时，必填）
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
     * @param string $receiverNickName
     * 收件人简称；最大长度50（简称存在切非冷链专车，收件人信息、四级地址和详细地址可不填）
     * Required: false
     * Example Value: 小雨
     */
    private $receiverNickName;

    /**
     * @param string $receiverNickName
     * 收件人简称；最大长度50（简称存在切非冷链专车，收件人信息、四级地址和详细地址可不填）
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
     * @param string $receiverName
     * 收货人姓名；最大长度50（简称不存在切非冷链专车，必填）
     * Required: false
     * Example Value: 小雨
     */
    private $receiverName;

    /**
     * @param string $receiverName
     * 收货人姓名；最大长度50（简称不存在切非冷链专车，必填）
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
     * @param string $receiverMobile
     * 收货人手机；最大长度50，不允许超过7位中文（简称不存在切非冷链专车，必填--手机电话二选一）
     * Required: false
     * Example Value: 13245678909
     */
    private $receiverMobile;

    /**
     * @param string $receiverMobile
     * 收货人手机；最大长度50，不允许超过7位中文（简称不存在切非冷链专车，必填--手机电话二选一）
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
     * @param string $receiverPhone
     * 收货人座机；最大长度50，不允许超过7位中文（简称不存在切非冷链专车，必填--手机电话二选一）
     * Required: false
     * Example Value: 7323456
     */
    private $receiverPhone;

    /**
     * @param string $receiverPhone
     * 收货人座机；最大长度50，不允许超过7位中文（简称不存在切非冷链专车，必填--手机电话二选一）
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
     * @param string $receiverProvince
     * 收货人省code；最大长度100
     * Required: false
     * Example Value: 11
     */
    private $receiverProvince;

    /**
     * @param string $receiverProvince
     * 收货人省code；最大长度100
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
     * @param string $receiverCity
     * 收货人市code；最大长度100
     * Required: false
     * Example Value: 805
     */
    private $receiverCity;

    /**
     * @param string $receiverCity
     * 收货人市code；最大长度100
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
     * @param string $receiverCounty
     * 收货人区/县code；最大长度100
     * Required: false
     * Example Value: 807
     */
    private $receiverCounty;

    /**
     * @param string $receiverCounty
     * 收货人区/县code；最大长度100
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
     * @param string $receiverTown
     * 收货人城镇code；最大长度100
     * Required: false
     * Example Value: 38288
     */
    private $receiverTown;

    /**
     * @param string $receiverTown
     * 收货人城镇code；最大长度100
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
     * @param string $receiverProvinceName
     * 收货人省；最大长度100（简称不存在切非冷链专车，必填）
     * Required: false
     * Example Value: 内蒙古
     */
    private $receiverProvinceName;

    /**
     * @param string $receiverProvinceName
     * 收货人省；最大长度100（简称不存在切非冷链专车，必填）
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
     * @param string $receiverCityName
     * 收货人市；最大长度100（简称不存在切非冷链专车，必填）
     * Required: false
     * Example Value: 包头市
     */
    private $receiverCityName;

    /**
     * @param string $receiverCityName
     * 收货人市；最大长度100（简称不存在切非冷链专车，必填）
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
     * @param string $receiverCountyName
     * 收货人区/县；最大长度100（简称不存在切非冷链专车，必填）
     * Required: false
     * Example Value: 固阳县
     */
    private $receiverCountyName;

    /**
     * @param string $receiverCountyName
     * 收货人区/县；最大长度100（简称不存在切非冷链专车，必填）
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
     * @param string $receiverTownName
     * 收货人城镇
     * Required: false
     * Example Value: 县城内
     */
    private $receiverTownName;

    /**
     * @param string $receiverTownName
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
     * @param string $remark
     * 订单备注
     * Required: false
     * Example Value: 内蒙古包头市固阳县
     */
    private $remark;

    /**
     * @param string $remark
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
     * @param int $grossWeight
     * 总重量；单位kg（非冷链专车，必填）
     * Required: false
     * Example Value: 1
     */
    private $grossWeight;

    /**
     * @param int $grossWeight
     * 总重量；单位kg（非冷链专车，必填）
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
     * @param int $grossVolume
     * 总体积；单位立方米（非冷链专车，必填）
     * Required: false
     * Example Value: 1
     */
    private $grossVolume;

    /**
     * @param int $grossVolume
     * 总体积；单位立方米（非冷链专车，必填）
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
     * @param string $createTime
     * 创建时间；格式：yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 2019-01-25 15:50:12
     */
    private $createTime;

    /**
     * @param string $createTime
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
     * @param string $createUser
     * 创建人；最大长度50
     * Required: false
     * Example Value: blademirror
     */
    private $createUser;

    /**
     * @param string $createUser
     * 创建人；最大长度50
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
     * @param int $receivable
     * 代收金额；单位元；货到付款时必填
     * Required: false
     * Example Value: 1.23
     */
    private $receivable;

    /**
     * @param int $receivable
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
     * @param string $vehicleTypeName
     * 车辆类型名称；整车必填；最大长度100
     * Required: false
     * Example Value: 1
     */
    private $vehicleTypeName;

    /**
     * @param string $vehicleTypeName
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
     * @param string $vehicleTypeNo
     * 车辆类型编码；整车必填；最大长度50（整车时，必填）
     * Required: false
     * Example Value: 1
     */
    private $vehicleTypeNo;

    /**
     * @param string $vehicleTypeNo
     * 车辆类型编码；整车必填；最大长度50（整车时，必填）
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
     * @param int $vehicleQty
     * 用车数量 ；本期写死1
     * Required: false
     * Example Value: 1
     */
    private $vehicleQty;

    /**
     * @param int $vehicleQty
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
     * @param string $expressItemName
     * 寄托物品名称；最大长度50
     * Required: false
     * Example Value: 鼠标
     */
    private $expressItemName;

    /**
     * @param string $expressItemName
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
     * @param int $expressItemQty
     * 寄托物总箱数；单位个（非冷链专车，必填）
     * Required: false
     * Example Value: 1
     */
    private $expressItemQty;

    /**
     * @param int $expressItemQty
     * 寄托物总箱数；单位个（非冷链专车，必填）
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
     * 是否发货短信回执； 0:否 1：是
     * Required: false
     * Example Value: 1
     */
    private $deliveryReceiptFlag;

    /**
     * @param  $deliveryReceiptFlag
     * 是否发货短信回执； 0:否 1：是
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
     * 是否送货入仓； 0:否 1：是
     * Required: false
     * Example Value: 1
     */
    private $deliveryIntoWarehouse;

    /**
     * @param  $deliveryIntoWarehouse
     * 是否送货入仓； 0:否 1：是
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
     * 是否装货 0:否 ；1：是
     * Required: false
     * Example Value: 1
     */
    private $loadFlag;

    /**
     * @param  $loadFlag
     * 是否装货 0:否 ；1：是
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
     * 是否卸货 0:否 ；1：是
     * Required: false
     * Example Value: 1
     */
    private $unloadFlag;

    /**
     * @param  $unloadFlag
     * 是否卸货 0:否 ；1：是
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
     * Required: false
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
     * 运费结算方式； 0:月结 1:到付 2:现付
     * Required: false
     * Example Value: 1
     */
    private $fcFlag;

    /**
     * @param  $fcFlag
     * 运费结算方式； 0:月结 1:到付 2:现付
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
     * @param int $guaranteeValue
     * 保价金额；单位元；保留两位小数
     * Required: false
     * Example Value: 1.23
     */
    private $guaranteeValue;

    /**
     * @param int $guaranteeValue
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
     * @param string $pickupBeginTime
     * 上门提货开始时间；格式:yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 2019-01-25 15:50:12
     */
    private $pickupBeginTime;

    /**
     * @param string $pickupBeginTime
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
     * @param string $pickupEndTime
     * 上门提货结束时间；格式:yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 2019-01-25 15:50:12
     */
    private $pickupEndTime;

    /**
     * @param string $pickupEndTime
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
     * 业务类型； 1：大件纯配 2：b2b小件纯配
     * Required: false
     * Example Value: 1
     */
    private $bussinessType;

    /**
     * @param  $bussinessType
     * 业务类型； 1：大件纯配 2：b2b小件纯配
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
     * 产品类型；1：零担  2:整车 3:特惠送  4:特准送 5:特惠运 6:特准运 13:冷链卡班 15:冷链同城 16:冷链专车
     * Required: false
     * Example Value: 1
     */
    private $deliveryType;

    /**
     * @param  $deliveryType
     * 产品类型；1：零担  2:整车 3:特惠送  4:特准送 5:特惠运 6:特准运 13:冷链卡班 15:冷链同城 16:冷链专车
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
     * @param string $senderCompany
     * 寄件人公司；最大长度100
     * Required: false
     * Example Value: 京东
     */
    private $senderCompany;

    /**
     * @param string $senderCompany
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
     * @param string $receiverCompany
     * 收件人公司；最大长度100
     * Required: false
     * Example Value: 京东
     */
    private $receiverCompany;

    /**
     * @param string $receiverCompany
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
     * @param string $receiverAddress
     * 收件人街道；最大长度200（简称不存在切非冷链专车，必填）
     * Required: false
     * Example Value: 北京大兴区南海家园六里32-1-1701
     */
    private $receiverAddress;

    /**
     * @param string $receiverAddress
     * 收件人街道；最大长度200（简称不存在切非冷链专车，必填）
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
     * @param string $warehouseCode
     * 发货仓编码；最大长度50
     * Required: false
     * Example Value: sjw001
     */
    private $warehouseCode;

    /**
     * @param string $warehouseCode
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
     * @param string $projectName
     * 项目名称；最大长度200
     * Required: false
     * Example Value: 普天太力取件
     */
    private $projectName;

    /**
     * @param string $projectName
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
     * @param string $actualSpId
     * 承运商ID；最大长度100
     * Required: false
     * Example Value: 20180228
     */
    private $actualSpId;

    /**
     * @param string $actualSpId
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
     * 特殊行业标识 ；0，普通；1，生鲜；2，汽配
     * Required: false
     * Example Value: 1
     */
    private $coldChainOn;

    /**
     * @param  $coldChainOn
     * 特殊行业标识 ；0，普通；1，生鲜；2，汽配
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
     * 温层（冷链）；0,温控（10-15℃）；1,冷藏（冷藏0-4℃）；2,冷冻（-18℃以下）；3,深冷（-30℃以下）；4,常温
     * Required: false
     * Example Value: 1
     */
    private $temptureNum;

    /**
     * @param  $temptureNum
     * 温层（冷链）；0,温控（10-15℃）；1,冷藏（冷藏0-4℃）；2,冷冻（-18℃以下）；3,深冷（-30℃以下）；4,常温
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
     * 是否易污染；0，否；1，是
     * Required: false
     * Example Value: 1
     */
    private $yiwuranOn;

    /**
     * @param  $yiwuranOn
     * 是否易污染；0，否；1，是
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
     * @param string $inStorageNo
     * 进仓预约号；最大长度30
     * Required: false
     * Example Value: 1234
     */
    private $inStorageNo;

    /**
     * @param string $inStorageNo
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
     * @param string $inStorageTime
     * 进仓时间
     * Required: false
     * Example Value: 
     */
    private $inStorageTime;

    /**
     * @param string $inStorageTime
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
     * @param string $inStorageRemark
     * 进仓备注；最大长度100
     * Required: false
     * Example Value: 进仓备注
     */
    private $inStorageRemark;

    /**
     * @param string $inStorageRemark
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
     * @param string $wayBillCode
     * 预制运单号
     * Required: false
     * Example Value: 1
     */
    private $wayBillCode;

    /**
     * @param string $wayBillCode
     * 预制运单号
     * Example Value: 1
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

    /**
     * @param int $spId
     * 销售平台，暂定值为1：京东，0：其他
     * Required: false
     * Example Value: 1
     */
    private $spId;

    /**
     * @param int $spId
     * 销售平台，暂定值为1：京东，0：其他
     * Example Value: 1
     */
    public function setSpId($spId)
    {
        $this->spId             = $spId;
        $this->apiParas["spId"]  = $spId;
    }

    public function getSpId()
    {
        return $this->spId;
    }

    /**
     * @param string $saleOrderNo
     * 销售平台单号
     * Required: false
     * Example Value: 4324234234234
     */
    private $saleOrderNo;

    /**
     * @param string $saleOrderNo
     * 销售平台单号
     * Example Value: 4324234234234
     */
    public function setSaleOrderNo($saleOrderNo)
    {
        $this->saleOrderNo             = $saleOrderNo;
        $this->apiParas["saleOrderNo"]  = $saleOrderNo;
    }

    public function getSaleOrderNo()
    {
        return $this->saleOrderNo;
    }

    /**
     * @param  $packageServiceOn
     * 增值服务-是否支持包装服务 0：否；1：是；
     * Required: false
     * Example Value: 1
     */
    private $packageServiceOn;

    /**
     * @param  $packageServiceOn
     * 增值服务-是否支持包装服务 0：否；1：是；
     * Example Value: 1
     */
    public function setPackageServiceOn($packageServiceOn)
    {
        $this->packageServiceOn             = $packageServiceOn;
        $this->apiParas["packageServiceOn"]  = $packageServiceOn;
    }

    public function getPackageServiceOn()
    {
        return $this->packageServiceOn;
    }

    /**
     * @param  $deliveryMthd
     * 配送方式 0:京配 1：京配转三方
     * Required: false
     * Example Value: 0
     */
    private $deliveryMthd;

    /**
     * @param  $deliveryMthd
     * 配送方式 0:京配 1：京配转三方
     * Example Value: 0
     */
    public function setDeliveryMthd($deliveryMthd)
    {
        $this->deliveryMthd             = $deliveryMthd;
        $this->apiParas["deliveryMthd"]  = $deliveryMthd;
    }

    public function getDeliveryMthd()
    {
        return $this->deliveryMthd;
    }

    /**
     * @param string $providerCode
     * 承运商编号
     * Required: false
     * Example Value: 3443242342
     */
    private $providerCode;

    /**
     * @param string $providerCode
     * 承运商编号
     * Example Value: 3443242342
     */
    public function setProviderCode($providerCode)
    {
        $this->providerCode             = $providerCode;
        $this->apiParas["providerCode"]  = $providerCode;
    }

    public function getProviderCode()
    {
        return $this->providerCode;
    }

    /**
     * @param string[] $packageNo
     * 商家包裹箱号
     * Required: false
     * Example Value: 1
     */
    private $packageNo;

    /**
     * @param string[] $packageNo
     * 商家包裹箱号
     * Example Value: 1
     */
    public function setPackageNo($packageNo)
    {
        $this->packageNo             = $packageNo;
        $this->apiParas["packageNo"]  = $packageNo;
    }

    public function getPackageNo()
    {
        return $this->packageNo;
    }

    /**
     * @param string $clientNo
     * 客户编号,营业厅订单客户编号必填
     * Required: false
     * Example Value: 1234567
     */
    private $clientNo;

    /**
     * @param string $clientNo
     * 客户编号,营业厅订单客户编号必填
     * Example Value: 1234567
     */
    public function setClientNo($clientNo)
    {
        $this->clientNo             = $clientNo;
        $this->apiParas["clientNo"]  = $clientNo;
    }

    public function getClientNo()
    {
        return $this->clientNo;
    }

    /**
     * @param  $orderType
     * 订单类型 0-B商家订单，1-营业厅订单。不填写，为B商家订单
     * Required: false
     * Example Value: 0
     */
    private $orderType;

    /**
     * @param  $orderType
     * 订单类型 0-B商家订单，1-营业厅订单。不填写，为B商家订单
     * Example Value: 0
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
     * @param  $siteCollect
     * 站点揽收 0-无效，1-是京东揽收，2-非京东揽收
     * Required: false
     * Example Value: 0
     */
    private $siteCollect;

    /**
     * @param  $siteCollect
     * 站点揽收 0-无效，1-是京东揽收，2-非京东揽收
     * Example Value: 0
     */
    public function setSiteCollect($siteCollect)
    {
        $this->siteCollect             = $siteCollect;
        $this->apiParas["siteCollect"]  = $siteCollect;
    }

    public function getSiteCollect()
    {
        return $this->siteCollect;
    }

    /**
     * @param  $siteDelivery
     * 站点派送 0-无效，1-是京东派送，2-非京东派送
     * Required: false
     * Example Value: 0
     */
    private $siteDelivery;

    /**
     * @param  $siteDelivery
     * 站点派送 0-无效，1-是京东派送，2-非京东派送
     * Example Value: 0
     */
    public function setSiteDelivery($siteDelivery)
    {
        $this->siteDelivery             = $siteDelivery;
        $this->apiParas["siteDelivery"]  = $siteDelivery;
    }

    public function getSiteDelivery()
    {
        return $this->siteDelivery;
    }

    /**
     * @param  $quarantineCert
     * 有无动物检疫证 0-无效，1-有，2-无
     * Required: false
     * Example Value: 0
     */
    private $quarantineCert;

    /**
     * @param  $quarantineCert
     * 有无动物检疫证 0-无效，1-有，2-无
     * Example Value: 0
     */
    public function setQuarantineCert($quarantineCert)
    {
        $this->quarantineCert             = $quarantineCert;
        $this->apiParas["quarantineCert"]  = $quarantineCert;
    }

    public function getQuarantineCert()
    {
        return $this->quarantineCert;
    }

    /**
     * @param int $selfCollectSiteId
     * 自送点ID
     * Required: false
     * Example Value: 0
     */
    private $selfCollectSiteId;

    /**
     * @param int $selfCollectSiteId
     * 自送点ID
     * Example Value: 0
     */
    public function setSelfCollectSiteId($selfCollectSiteId)
    {
        $this->selfCollectSiteId             = $selfCollectSiteId;
        $this->apiParas["selfCollectSiteId"]  = $selfCollectSiteId;
    }

    public function getSelfCollectSiteId()
    {
        return $this->selfCollectSiteId;
    }

    /**
     * @param int $selfDeliverySiteId
     * 自提点ID
     * Required: false
     * Example Value: 0
     */
    private $selfDeliverySiteId;

    /**
     * @param int $selfDeliverySiteId
     * 自提点ID
     * Example Value: 0
     */
    public function setSelfDeliverySiteId($selfDeliverySiteId)
    {
        $this->selfDeliverySiteId             = $selfDeliverySiteId;
        $this->apiParas["selfDeliverySiteId"]  = $selfDeliverySiteId;
    }

    public function getSelfDeliverySiteId()
    {
        return $this->selfDeliverySiteId;
    }

    /**
     * @param string $expectedArrivalStartTime
     * 期望(送货、到货、收货)开始时间[格式 HH:mm]
     * Required: false
     * Example Value: 1
     */
    private $expectedArrivalStartTime;

    /**
     * @param string $expectedArrivalStartTime
     * 期望(送货、到货、收货)开始时间[格式 HH:mm]
     * Example Value: 1
     */
    public function setExpectedArrivalStartTime($expectedArrivalStartTime)
    {
        $this->expectedArrivalStartTime             = $expectedArrivalStartTime;
        $this->apiParas["expectedArrivalStartTime"]  = $expectedArrivalStartTime;
    }

    public function getExpectedArrivalStartTime()
    {
        return $this->expectedArrivalStartTime;
    }

    /**
     * @param string $expectedArrivalEndTime
     * 期望(送货、到货、收货)结束时间[格式 HH:mm]
     * Required: false
     * Example Value: 1
     */
    private $expectedArrivalEndTime;

    /**
     * @param string $expectedArrivalEndTime
     * 期望(送货、到货、收货)结束时间[格式 HH:mm]
     * Example Value: 1
     */
    public function setExpectedArrivalEndTime($expectedArrivalEndTime)
    {
        $this->expectedArrivalEndTime             = $expectedArrivalEndTime;
        $this->apiParas["expectedArrivalEndTime"]  = $expectedArrivalEndTime;
    }

    public function getExpectedArrivalEndTime()
    {
        return $this->expectedArrivalEndTime;
    }

    /**
     * @param string $vehicleOrderNo
     * 整车单号
     * Required: false
     * Example Value: 1
     */
    private $vehicleOrderNo;

    /**
     * @param string $vehicleOrderNo
     * 整车单号
     * Example Value: 1
     */
    public function setVehicleOrderNo($vehicleOrderNo)
    {
        $this->vehicleOrderNo             = $vehicleOrderNo;
        $this->apiParas["vehicleOrderNo"]  = $vehicleOrderNo;
    }

    public function getVehicleOrderNo()
    {
        return $this->vehicleOrderNo;
    }

    /**
     * @param  $messageSign
     * 特殊签收方式 0：默认，1：短信签收，8：签收前激活（电信卡）
     * Required: false
     * Example Value: 0
     */
    private $messageSign;

    /**
     * @param  $messageSign
     * 特殊签收方式 0：默认，1：短信签收，8：签收前激活（电信卡）
     * Example Value: 0
     */
    public function setMessageSign($messageSign)
    {
        $this->messageSign             = $messageSign;
        $this->apiParas["messageSign"]  = $messageSign;
    }

    public function getMessageSign()
    {
        return $this->messageSign;
    }

    /**
     * @param  $checkPreSort
     * 下单需要校验超区 0：否，1：是
     * Required: false
     * Example Value: 0
     */
    private $checkPreSort;

    /**
     * @param  $checkPreSort
     * 下单需要校验超区 0：否，1：是
     * Example Value: 0
     */
    public function setCheckPreSort($checkPreSort)
    {
        $this->checkPreSort             = $checkPreSort;
        $this->apiParas["checkPreSort"]  = $checkPreSort;
    }

    public function getCheckPreSort()
    {
        return $this->checkPreSort;
    }

    /**
     * @param string[] $receiverName
     * 收货人姓名（冷链专车字段：无简称必填）
     * Required: false
     * Example Value: 1
     */
    private $receiverName;

    /**
     * @param string[] $receiverName
     * 收货人姓名（冷链专车字段：无简称必填）
     * Example Value: 1
     */
    public function setReceiverName($receiverName)
    {
        $this->receiverName             = $receiverName;
        $this->apiParas["receiverNameSplit"]  = $receiverName;
    }

    public function getReceiverName()
    {
        return $this->receiverName;
    }

    /**
     * @param string[] $receiverCompany
     * 收件人公司（冷链专车字段）
     * Required: false
     * Example Value: 1
     */
    private $receiverCompany;

    /**
     * @param string[] $receiverCompany
     * 收件人公司（冷链专车字段）
     * Example Value: 1
     */
    public function setReceiverCompany($receiverCompany)
    {
        $this->receiverCompany             = $receiverCompany;
        $this->apiParas["receiverCompanySplit"]  = $receiverCompany;
    }

    public function getReceiverCompany()
    {
        return $this->receiverCompany;
    }

    /**
     * @param string[] $receiverMobile
     * 收货人手机（冷链专车字段：无简称必填--手机电话二选一）
     * Required: false
     * Example Value: 1
     */
    private $receiverMobile;

    /**
     * @param string[] $receiverMobile
     * 收货人手机（冷链专车字段：无简称必填--手机电话二选一）
     * Example Value: 1
     */
    public function setReceiverMobile($receiverMobile)
    {
        $this->receiverMobile             = $receiverMobile;
        $this->apiParas["receiverMobileSplit"]  = $receiverMobile;
    }

    public function getReceiverMobile()
    {
        return $this->receiverMobile;
    }

    /**
     * @param string[] $receiverPhone
     * 收货人座机（冷链专车字段：无简称必填--手机电话二选一）
     * Required: false
     * Example Value: 1
     */
    private $receiverPhone;

    /**
     * @param string[] $receiverPhone
     * 收货人座机（冷链专车字段：无简称必填--手机电话二选一）
     * Example Value: 1
     */
    public function setReceiverPhone($receiverPhone)
    {
        $this->receiverPhone             = $receiverPhone;
        $this->apiParas["receiverPhoneSplit"]  = $receiverPhone;
    }

    public function getReceiverPhone()
    {
        return $this->receiverPhone;
    }

    /**
     * @param string[] $receiverProvinceName
     * 收货人省（冷链专车字段：无简称必填）
     * Required: false
     * Example Value: 1
     */
    private $receiverProvinceName;

    /**
     * @param string[] $receiverProvinceName
     * 收货人省（冷链专车字段：无简称必填）
     * Example Value: 1
     */
    public function setReceiverProvinceName($receiverProvinceName)
    {
        $this->receiverProvinceName             = $receiverProvinceName;
        $this->apiParas["receiverProvinceNameSplit"]  = $receiverProvinceName;
    }

    public function getReceiverProvinceName()
    {
        return $this->receiverProvinceName;
    }

    /**
     * @param string[] $receiverProvince
     * 收货人省code
     * Required: false
     * Example Value: 1
     */
    private $receiverProvince;

    /**
     * @param string[] $receiverProvince
     * 收货人省code
     * Example Value: 1
     */
    public function setReceiverProvince($receiverProvince)
    {
        $this->receiverProvince             = $receiverProvince;
        $this->apiParas["receiverProvinceSplit"]  = $receiverProvince;
    }

    public function getReceiverProvince()
    {
        return $this->receiverProvince;
    }

    /**
     * @param string[] $receiverCityName
     * 收货人市（冷链专车字段：无简称必填）
     * Required: false
     * Example Value: 1
     */
    private $receiverCityName;

    /**
     * @param string[] $receiverCityName
     * 收货人市（冷链专车字段：无简称必填）
     * Example Value: 1
     */
    public function setReceiverCityName($receiverCityName)
    {
        $this->receiverCityName             = $receiverCityName;
        $this->apiParas["receiverCityNameSplit"]  = $receiverCityName;
    }

    public function getReceiverCityName()
    {
        return $this->receiverCityName;
    }

    /**
     * @param string[] $receiverCity
     * 收货人市code
     * Required: false
     * Example Value: 1
     */
    private $receiverCity;

    /**
     * @param string[] $receiverCity
     * 收货人市code
     * Example Value: 1
     */
    public function setReceiverCity($receiverCity)
    {
        $this->receiverCity             = $receiverCity;
        $this->apiParas["receiverCitySplit"]  = $receiverCity;
    }

    public function getReceiverCity()
    {
        return $this->receiverCity;
    }

    /**
     * @param string[] $receiverCountyName
     * 收货人区/县（冷链专车字段：无简称必填）
     * Required: false
     * Example Value: 1
     */
    private $receiverCountyName;

    /**
     * @param string[] $receiverCountyName
     * 收货人区/县（冷链专车字段：无简称必填）
     * Example Value: 1
     */
    public function setReceiverCountyName($receiverCountyName)
    {
        $this->receiverCountyName             = $receiverCountyName;
        $this->apiParas["receiverCountyNameSplit"]  = $receiverCountyName;
    }

    public function getReceiverCountyName()
    {
        return $this->receiverCountyName;
    }

    /**
     * @param string[] $receiverCounty
     * 收货人区/县code
     * Required: false
     * Example Value: 1
     */
    private $receiverCounty;

    /**
     * @param string[] $receiverCounty
     * 收货人区/县code
     * Example Value: 1
     */
    public function setReceiverCounty($receiverCounty)
    {
        $this->receiverCounty             = $receiverCounty;
        $this->apiParas["receiverCountySplit"]  = $receiverCounty;
    }

    public function getReceiverCounty()
    {
        return $this->receiverCounty;
    }

    /**
     * @param string[] $receiverTownName
     * 收货人城镇
     * Required: false
     * Example Value: 1
     */
    private $receiverTownName;

    /**
     * @param string[] $receiverTownName
     * 收货人城镇
     * Example Value: 1
     */
    public function setReceiverTownName($receiverTownName)
    {
        $this->receiverTownName             = $receiverTownName;
        $this->apiParas["receiverTownNameSplit"]  = $receiverTownName;
    }

    public function getReceiverTownName()
    {
        return $this->receiverTownName;
    }

    /**
     * @param string[] $receiverTown
     * 收货人城镇code
     * Required: false
     * Example Value: 1
     */
    private $receiverTown;

    /**
     * @param string[] $receiverTown
     * 收货人城镇code
     * Example Value: 1
     */
    public function setReceiverTown($receiverTown)
    {
        $this->receiverTown             = $receiverTown;
        $this->apiParas["receiverTownSplit"]  = $receiverTown;
    }

    public function getReceiverTown()
    {
        return $this->receiverTown;
    }

    /**
     * @param string[] $receiverAddress
     * 收件人街道（冷链专车字段：无简称必填）
     * Required: false
     * Example Value: 1
     */
    private $receiverAddress;

    /**
     * @param string[] $receiverAddress
     * 收件人街道（冷链专车字段：无简称必填）
     * Example Value: 1
     */
    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress             = $receiverAddress;
        $this->apiParas["receiverAddressSplit"]  = $receiverAddress;
    }

    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

    /**
     * @param string[] $expectedArrivalStartTime
     * 期望(送货、到货、收货)开始时间[格式 HH:mm]
     * Required: false
     * Example Value: 1
     */
    private $expectedArrivalStartTime;

    /**
     * @param string[] $expectedArrivalStartTime
     * 期望(送货、到货、收货)开始时间[格式 HH:mm]
     * Example Value: 1
     */
    public function setExpectedArrivalStartTime($expectedArrivalStartTime)
    {
        $this->expectedArrivalStartTime             = $expectedArrivalStartTime;
        $this->apiParas["expectedArrivalStartTimeSplit"]  = $expectedArrivalStartTime;
    }

    public function getExpectedArrivalStartTime()
    {
        return $this->expectedArrivalStartTime;
    }

    /**
     * @param string[] $expectedArrivalEndTime
     * 期望(送货、到货、收货)结束时间[格式 HH:mm]
     * Required: false
     * Example Value: 1
     */
    private $expectedArrivalEndTime;

    /**
     * @param string[] $expectedArrivalEndTime
     * 期望(送货、到货、收货)结束时间[格式 HH:mm]
     * Example Value: 1
     */
    public function setExpectedArrivalEndTime($expectedArrivalEndTime)
    {
        $this->expectedArrivalEndTime             = $expectedArrivalEndTime;
        $this->apiParas["expectedArrivalEndTimeSplit"]  = $expectedArrivalEndTime;
    }

    public function getExpectedArrivalEndTime()
    {
        return $this->expectedArrivalEndTime;
    }

    /**
     * @param string[] $orderNo
     * 商家订单编号（冷链专车字段：必填）
     * Required: false
     * Example Value: 1
     */
    private $orderNo;

    /**
     * @param string[] $orderNo
     * 商家订单编号（冷链专车字段：必填）
     * Example Value: 1
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["orderNoSplit"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param string[] $expressItemName
     * 寄托物品名称
     * Required: false
     * Example Value: 1
     */
    private $expressItemName;

    /**
     * @param string[] $expressItemName
     * 寄托物品名称
     * Example Value: 1
     */
    public function setExpressItemName($expressItemName)
    {
        $this->expressItemName             = $expressItemName;
        $this->apiParas["expressItemNameSplit"]  = $expressItemName;
    }

    public function getExpressItemName()
    {
        return $this->expressItemName;
    }

    /**
     * @param int[] $grossVolume
     * 总体积（冷链专车字段：必填）
     * Required: false
     * Example Value: 1
     */
    private $grossVolume;

    /**
     * @param int[] $grossVolume
     * 总体积（冷链专车字段：必填）
     * Example Value: 1
     */
    public function setGrossVolume($grossVolume)
    {
        $this->grossVolume             = $grossVolume;
        $this->apiParas["grossVolumeSplit"]  = $grossVolume;
    }

    public function getGrossVolume()
    {
        return $this->grossVolume;
    }

    /**
     * @param int[] $grossWeight
     * 总重量（冷链专车字段：必填）
     * Required: false
     * Example Value: 1
     */
    private $grossWeight;

    /**
     * @param int[] $grossWeight
     * 总重量（冷链专车字段：必填）
     * Example Value: 1
     */
    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight             = $grossWeight;
        $this->apiParas["grossWeightSplit"]  = $grossWeight;
    }

    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    /**
     * @param int[] $expressItemQty
     * 寄托物总箱数（冷链专车字段：必填）
     * Required: false
     * Example Value: 1
     */
    private $expressItemQty;

    /**
     * @param int[] $expressItemQty
     * 寄托物总箱数（冷链专车字段：必填）
     * Example Value: 1
     */
    public function setExpressItemQty($expressItemQty)
    {
        $this->expressItemQty             = $expressItemQty;
        $this->apiParas["expressItemQtySplit"]  = $expressItemQty;
    }

    public function getExpressItemQty()
    {
        return $this->expressItemQty;
    }

    /**
     * @param  $temptureNum
     * 温层（冷链） ：0,温控（10-15℃）；1,冷藏（冷藏0-4℃）；2,冷冻（-18℃以下）；3,深冷（-30℃以下）;4,常温
     * Required: false
     * Example Value: 1
     */
    private $temptureNum;

    /**
     * @param  $temptureNum
     * 温层（冷链） ：0,温控（10-15℃）；1,冷藏（冷藏0-4℃）；2,冷冻（-18℃以下）；3,深冷（-30℃以下）;4,常温
     * Example Value: 1
     */
    public function setTemptureNum($temptureNum)
    {
        $this->temptureNum             = $temptureNum;
        $this->apiParas["temptureNumSplit"]  = $temptureNum;
    }

    public function getTemptureNum()
    {
        return $this->temptureNum;
    }

    /**
     * @param  $quarantineCert
     * 有无动物检疫证 0-无效，1-有，2-无
     * Required: false
     * Example Value: 1
     */
    private $quarantineCert;

    /**
     * @param  $quarantineCert
     * 有无动物检疫证 0-无效，1-有，2-无
     * Example Value: 1
     */
    public function setQuarantineCert($quarantineCert)
    {
        $this->quarantineCert             = $quarantineCert;
        $this->apiParas["quarantineCertSplit"]  = $quarantineCert;
    }

    public function getQuarantineCert()
    {
        return $this->quarantineCert;
    }

    /**
     * @param  $deliveryIntoWarehouse
     * 是否送货入仓 0:否 1：是
     * Required: false
     * Example Value: 1
     */
    private $deliveryIntoWarehouse;

    /**
     * @param  $deliveryIntoWarehouse
     * 是否送货入仓 0:否 1：是
     * Example Value: 1
     */
    public function setDeliveryIntoWarehouse($deliveryIntoWarehouse)
    {
        $this->deliveryIntoWarehouse             = $deliveryIntoWarehouse;
        $this->apiParas["deliveryIntoWarehouseSplit"]  = $deliveryIntoWarehouse;
    }

    public function getDeliveryIntoWarehouse()
    {
        return $this->deliveryIntoWarehouse;
    }

    /**
     * @param string[] $inStorageNo
     * 进仓预约号
     * Required: false
     * Example Value: 1
     */
    private $inStorageNo;

    /**
     * @param string[] $inStorageNo
     * 进仓预约号
     * Example Value: 1
     */
    public function setInStorageNo($inStorageNo)
    {
        $this->inStorageNo             = $inStorageNo;
        $this->apiParas["inStorageNoSplit"]  = $inStorageNo;
    }

    public function getInStorageNo()
    {
        return $this->inStorageNo;
    }

    /**
     * @param string[] $inStorageTime
     * 进仓时间
     * Required: false
     * Example Value: 
     */
    private $inStorageTime;

    /**
     * @param string[] $inStorageTime
     * 进仓时间
     * Example Value: 
     */
    public function setInStorageTime($inStorageTime)
    {
        $this->inStorageTime             = $inStorageTime;
        $this->apiParas["inStorageTimeSplit"]  = $inStorageTime;
    }

    public function getInStorageTime()
    {
        return $this->inStorageTime;
    }

    /**
     * @param string[] $inStorageRemark
     * 进仓备注
     * Required: false
     * Example Value: 1
     */
    private $inStorageRemark;

    /**
     * @param string[] $inStorageRemark
     * 进仓备注
     * Example Value: 1
     */
    public function setInStorageRemark($inStorageRemark)
    {
        $this->inStorageRemark             = $inStorageRemark;
        $this->apiParas["inStorageRemarkSplit"]  = $inStorageRemark;
    }

    public function getInStorageRemark()
    {
        return $this->inStorageRemark;
    }

    /**
     * @param  $loadFlag
     * 是否装货 0:否 1：是
     * Required: false
     * Example Value: 1
     */
    private $loadFlag;

    /**
     * @param  $loadFlag
     * 是否装货 0:否 1：是
     * Example Value: 1
     */
    public function setLoadFlag($loadFlag)
    {
        $this->loadFlag             = $loadFlag;
        $this->apiParas["loadFlagSplit"]  = $loadFlag;
    }

    public function getLoadFlag()
    {
        return $this->loadFlag;
    }

    /**
     * @param  $unloadFlag
     * 是否卸货 0:否 1：是
     * Required: false
     * Example Value: 1
     */
    private $unloadFlag;

    /**
     * @param  $unloadFlag
     * 是否卸货 0:否 1：是
     * Example Value: 1
     */
    public function setUnloadFlag($unloadFlag)
    {
        $this->unloadFlag             = $unloadFlag;
        $this->apiParas["unloadFlagSplit"]  = $unloadFlag;
    }

    public function getUnloadFlag()
    {
        return $this->unloadFlag;
    }

    /**
     * @param string[] $remark
     * 订单备注
     * Required: false
     * Example Value: 1
     */
    private $remark;

    /**
     * @param string[] $remark
     * 订单备注
     * Example Value: 1
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remarkSplit"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param string[] $packageModelNos
     * 箱号，按英文逗号分隔
     * Required: false
     * Example Value: 1
     */
    private $packageModelNos;

    /**
     * @param string[] $packageModelNos
     * 箱号，按英文逗号分隔
     * Example Value: 1
     */
    public function setPackageModelNos($packageModelNos)
    {
        $this->packageModelNos             = $packageModelNos;
        $this->apiParas["packageModelNosSplit"]  = $packageModelNos;
    }

    public function getPackageModelNos()
    {
        return $this->packageModelNos;
    }

    /**
     * @param  $qingzhenOn
     * 是否清真 ：0，否；1，是
     * Required: false
     * Example Value: 1
     */
    private $qingzhenOn;

    /**
     * @param  $qingzhenOn
     * 是否清真 ：0，否；1，是
     * Example Value: 1
     */
    public function setQingzhenOn($qingzhenOn)
    {
        $this->qingzhenOn             = $qingzhenOn;
        $this->apiParas["qingzhenOnSplit"]  = $qingzhenOn;
    }

    public function getQingzhenOn()
    {
        return $this->qingzhenOn;
    }

    /**
     * @param  $yiwuranOn
     * 是否易污染 ：0，否；1，是
     * Required: false
     * Example Value: 1
     */
    private $yiwuranOn;

    /**
     * @param  $yiwuranOn
     * 是否易污染 ：0，否；1，是
     * Example Value: 1
     */
    public function setYiwuranOn($yiwuranOn)
    {
        $this->yiwuranOn             = $yiwuranOn;
        $this->apiParas["yiwuranOnSplit"]  = $yiwuranOn;
    }

    public function getYiwuranOn()
    {
        return $this->yiwuranOn;
    }

    /**
     * @param string[] $receiverNickName
     * 收件人简称（冷链专车字段：有简称时，收件人信息、四级地址和详细地址非必填）
     * Required: false
     * Example Value: 1
     */
    private $receiverNickName;

    /**
     * @param string[] $receiverNickName
     * 收件人简称（冷链专车字段：有简称时，收件人信息、四级地址和详细地址非必填）
     * Example Value: 1
     */
    public function setReceiverNickName($receiverNickName)
    {
        $this->receiverNickName             = $receiverNickName;
        $this->apiParas["receiverNickNameSplit"]  = $receiverNickName;
    }

    public function getReceiverNickName()
    {
        return $this->receiverNickName;
    }

}