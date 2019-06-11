<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 创建服务单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1957&apiName=jingdong.eclp.afs.createServiceOrder
 * Class EclpAfsCreateServiceOrder
 * @package Jd\request
 */
class EclpAfsCreateServiceOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.afs.createServiceOrder";
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
     * @param string $isvUUId
     * ISV服务单号；最大长度50
     * Required: true
     * Example Value: PO0718112685359
     */
    private $isvUUId;

    /**
     * @param string $isvUUId
     * ISV服务单号；最大长度50
     * Example Value: PO0718112685359
     */
    public function setIsvUUId($isvUUId)
    {
        $this->isvUUId             = $isvUUId;
        $this->apiParas["isvUUId"]  = $isvUUId;
    }

    public function getIsvUUId()
    {
        return $this->isvUUId;
    }

    /**
     * @param string $isvSource
     * ISV来源编号；最大长度50
     * Required: true
     * Example Value: ISV0020000000228
     */
    private $isvSource;

    /**
     * @param string $isvSource
     * ISV来源编号；最大长度50
     * Example Value: ISV0020000000228
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
     * @param string $shopNo
     * 店铺编号；最大长度50
     * Required: true
     * Example Value: ESP0020000018803
     */
    private $shopNo;

    /**
     * @param string $shopNo
     * 店铺编号；最大长度50
     * Example Value: ESP0020000018803
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
     * @param string $departmentNo
     * 事业部编号；最大长度100
     * Required: true
     * Example Value: EBU4418046536843
     */
    private $departmentNo;

    /**
     * @param string $departmentNo
     * 事业部编号；最大长度100
     * Example Value: EBU4418046536843
     */
    public function setDepartmentNo($departmentNo)
    {
        $this->departmentNo             = $departmentNo;
        $this->apiParas["departmentNo"]  = $departmentNo;
    }

    public function getDepartmentNo()
    {
        return $this->departmentNo;
    }

    /**
     * @param string $shipperNo
     * eclp承运商编号；最大长度50
     * Required: false
     * Example Value: CYS0000010
     */
    private $shipperNo;

    /**
     * @param string $shipperNo
     * eclp承运商编号；最大长度50
     * Example Value: CYS0000010
     */
    public function setShipperNo($shipperNo)
    {
        $this->shipperNo             = $shipperNo;
        $this->apiParas["shipperNo"]  = $shipperNo;
    }

    public function getShipperNo()
    {
        return $this->shipperNo;
    }

    /**
     * @param string $eclpOrderId
     * 销售平台正向订单号；最大长度50
     * Required: true
     * Example Value: 201811080157111781130000
     */
    private $eclpOrderId;

    /**
     * @param string $eclpOrderId
     * 销售平台正向订单号；最大长度50
     * Example Value: 201811080157111781130000
     */
    public function setEclpOrderId($eclpOrderId)
    {
        $this->eclpOrderId             = $eclpOrderId;
        $this->apiParas["eclpOrderId"]  = $eclpOrderId;
    }

    public function getEclpOrderId()
    {
        return $this->eclpOrderId;
    }

    /**
     * @param string $salePlatformSource
     * 服务单平台来源id，参考销售平台来源查询接口的值
     * Required: true
     * Example Value: 6
     */
    private $salePlatformSource;

    /**
     * @param string $salePlatformSource
     * 服务单平台来源id，参考销售平台来源查询接口的值
     * Example Value: 6
     */
    public function setSalePlatformSource($salePlatformSource)
    {
        $this->salePlatformSource             = $salePlatformSource;
        $this->apiParas["salePlatformSource"]  = $salePlatformSource;
    }

    public function getSalePlatformSource()
    {
        return $this->salePlatformSource;
    }

    /**
     * @param string $salesPlatformCreateTime
     * 销售平台服务单申请时间；格式yyyy-mm-dd HH:mm:ss;最大长度20
     * Required: false
     * Example Value: 2018-11-26 19:40:18
     */
    private $salesPlatformCreateTime;

    /**
     * @param string $salesPlatformCreateTime
     * 销售平台服务单申请时间；格式yyyy-mm-dd HH:mm:ss;最大长度20
     * Example Value: 2018-11-26 19:40:18
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
     * @param string $sourceType
     * 审核结果；枚举值：1、退货，2、换货；最大长度2
     * Required: false
     * Example Value: 1
     */
    private $sourceType;

    /**
     * @param string $sourceType
     * 审核结果；枚举值：1、退货，2、换货；最大长度2
     * Example Value: 1
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType             = $sourceType;
        $this->apiParas["sourceType"]  = $sourceType;
    }

    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * @param string $pickupType
     * 取件单类型；枚举值：1、普通取件单，2、取件换新单；最大长度2
     * Required: false
     * Example Value: 1
     */
    private $pickupType;

    /**
     * @param string $pickupType
     * 取件单类型；枚举值：1、普通取件单，2、取件换新单；最大长度2
     * Example Value: 1
     */
    public function setPickupType($pickupType)
    {
        $this->pickupType             = $pickupType;
        $this->apiParas["pickupType"]  = $pickupType;
    }

    public function getPickupType()
    {
        return $this->pickupType;
    }

    /**
     * @param string $isInvoice
     * 是否有发票；枚举值：是，否；最大长度2
     * Required: false
     * Example Value: 否
     */
    private $isInvoice;

    /**
     * @param string $isInvoice
     * 是否有发票；枚举值：是，否；最大长度2
     * Example Value: 否
     */
    public function setIsInvoice($isInvoice)
    {
        $this->isInvoice             = $isInvoice;
        $this->apiParas["isInvoice"]  = $isInvoice;
    }

    public function getIsInvoice()
    {
        return $this->isInvoice;
    }

    /**
     * @param string $invoiceNo
     * 发票号；最大长度100
     * Required: false
     * Example Value: V100001
     */
    private $invoiceNo;

    /**
     * @param string $invoiceNo
     * 发票号；最大长度100
     * Example Value: V100001
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->invoiceNo             = $invoiceNo;
        $this->apiParas["invoiceNo"]  = $invoiceNo;
    }

    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    /**
     * @param string $isPackage
     * 是否要外包装；枚举值：是，否；最大长度2
     * Required: false
     * Example Value: 否
     */
    private $isPackage;

    /**
     * @param string $isPackage
     * 是否要外包装；枚举值：是，否；最大长度2
     * Example Value: 否
     */
    public function setIsPackage($isPackage)
    {
        $this->isPackage             = $isPackage;
        $this->apiParas["isPackage"]  = $isPackage;
    }

    public function getIsPackage()
    {
        return $this->isPackage;
    }

    /**
     * @param string $isTestReport
     * 是否要检测报告；枚举值：0、否，1、是；最大长度2
     * Required: false
     * Example Value: 0
     */
    private $isTestReport;

    /**
     * @param string $isTestReport
     * 是否要检测报告；枚举值：0、否，1、是；最大长度2
     * Example Value: 0
     */
    public function setIsTestReport($isTestReport)
    {
        $this->isTestReport             = $isTestReport;
        $this->apiParas["isTestReport"]  = $isTestReport;
    }

    public function getIsTestReport()
    {
        return $this->isTestReport;
    }

    /**
     * @param string $customerName
     * 客户姓名；最大长度50
     * Required: true
     * Example Value: 张三
     */
    private $customerName;

    /**
     * @param string $customerName
     * 客户姓名；最大长度50
     * Example Value: 张三
     */
    public function setCustomerName($customerName)
    {
        $this->customerName             = $customerName;
        $this->apiParas["customerName"]  = $customerName;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param string $customerTel
     * 客户电话；最大长度50
     * Required: true
     * Example Value: 18612341234
     */
    private $customerTel;

    /**
     * @param string $customerTel
     * 客户电话；最大长度50
     * Example Value: 18612341234
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
     * @param string $provinceNo
     * 省编号；仅为整形数字；最大长度10
     * Required: false
     * Example Value: 18
     */
    private $provinceNo;

    /**
     * @param string $provinceNo
     * 省编号；仅为整形数字；最大长度10
     * Example Value: 18
     */
    public function setProvinceNo($provinceNo)
    {
        $this->provinceNo             = $provinceNo;
        $this->apiParas["provinceNo"]  = $provinceNo;
    }

    public function getProvinceNo()
    {
        return $this->provinceNo;
    }

    /**
     * @param string $provinceName
     * 省名称；最大长度100
     * Required: false
     * Example Value: 湖南
     */
    private $provinceName;

    /**
     * @param string $provinceName
     * 省名称；最大长度100
     * Example Value: 湖南
     */
    public function setProvinceName($provinceName)
    {
        $this->provinceName             = $provinceName;
        $this->apiParas["provinceName"]  = $provinceName;
    }

    public function getProvinceName()
    {
        return $this->provinceName;
    }

    /**
     * @param string $cityName
     * 市名称；最大长度100
     * Required: false
     * Example Value: 1501
     */
    private $cityName;

    /**
     * @param string $cityName
     * 市名称；最大长度100
     * Example Value: 1501
     */
    public function setCityName($cityName)
    {
        $this->cityName             = $cityName;
        $this->apiParas["cityName"]  = $cityName;
    }

    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param string $cityNo
     * 市编号；仅为整形数字；最大长度10
     * Required: false
     * Example Value: 衡阳市
     */
    private $cityNo;

    /**
     * @param string $cityNo
     * 市编号；仅为整形数字；最大长度10
     * Example Value: 衡阳市
     */
    public function setCityNo($cityNo)
    {
        $this->cityNo             = $cityNo;
        $this->apiParas["cityNo"]  = $cityNo;
    }

    public function getCityNo()
    {
        return $this->cityNo;
    }

    /**
     * @param string $countyName
     * 县名称；最大长度100
     * Required: false
     * Example Value: 1508
     */
    private $countyName;

    /**
     * @param string $countyName
     * 县名称；最大长度100
     * Example Value: 1508
     */
    public function setCountyName($countyName)
    {
        $this->countyName             = $countyName;
        $this->apiParas["countyName"]  = $countyName;
    }

    public function getCountyName()
    {
        return $this->countyName;
    }

    /**
     * @param string $countyNo
     * 县编号；仅为整形数字；最大长度10
     * Required: false
     * Example Value: 祁东县
     */
    private $countyNo;

    /**
     * @param string $countyNo
     * 县编号；仅为整形数字；最大长度10
     * Example Value: 祁东县
     */
    public function setCountyNo($countyNo)
    {
        $this->countyNo             = $countyNo;
        $this->apiParas["countyNo"]  = $countyNo;
    }

    public function getCountyNo()
    {
        return $this->countyNo;
    }

    /**
     * @param string $townName
     * 镇名称；最大长度100
     * Required: false
     * Example Value: 30930
     */
    private $townName;

    /**
     * @param string $townName
     * 镇名称；最大长度100
     * Example Value: 30930
     */
    public function setTownName($townName)
    {
        $this->townName             = $townName;
        $this->apiParas["townName"]  = $townName;
    }

    public function getTownName()
    {
        return $this->townName;
    }

    /**
     * @param string $townNo
     * 镇编号；仅为整形数字；最大长度10
     * Required: false
     * Example Value: 白地市镇
     */
    private $townNo;

    /**
     * @param string $townNo
     * 镇编号；仅为整形数字；最大长度10
     * Example Value: 白地市镇
     */
    public function setTownNo($townNo)
    {
        $this->townNo             = $townNo;
        $this->apiParas["townNo"]  = $townNo;
    }

    public function getTownNo()
    {
        return $this->townNo;
    }

    /**
     * @param string $customerAddress
     * 客户地址；最大长度300
     * Required: true
     * Example Value: 湖南衡阳市祁东县白地市镇湖南衡阳市祁东县白地市镇天桥街23号
     */
    private $customerAddress;

    /**
     * @param string $customerAddress
     * 客户地址；最大长度300
     * Example Value: 湖南衡阳市祁东县白地市镇湖南衡阳市祁东县白地市镇天桥街23号
     */
    public function setCustomerAddress($customerAddress)
    {
        $this->customerAddress             = $customerAddress;
        $this->apiParas["customerAddress"]  = $customerAddress;
    }

    public function getCustomerAddress()
    {
        return $this->customerAddress;
    }

    /**
     * @param string $pickupAddress
     * 取件地址；最大长度300
     * Required: false
     * Example Value: 湖南衡阳市祁东县白地市镇湖南衡阳市祁东县白地市镇天桥街23号
     */
    private $pickupAddress;

    /**
     * @param string $pickupAddress
     * 取件地址；最大长度300
     * Example Value: 湖南衡阳市祁东县白地市镇湖南衡阳市祁东县白地市镇天桥街23号
     */
    public function setPickupAddress($pickupAddress)
    {
        $this->pickupAddress             = $pickupAddress;
        $this->apiParas["pickupAddress"]  = $pickupAddress;
    }

    public function getPickupAddress()
    {
        return $this->pickupAddress;
    }

    /**
     * @param string $operatorId
     * 审核人ID，实际操作人ID；最大长度200
     * Required: true
     * Example Value: 审核人ID
     */
    private $operatorId;

    /**
     * @param string $operatorId
     * 审核人ID，实际操作人ID；最大长度200
     * Example Value: 审核人ID
     */
    public function setOperatorId($operatorId)
    {
        $this->operatorId             = $operatorId;
        $this->apiParas["operatorId"]  = $operatorId;
    }

    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * @param string $operatorName
     * 审核人名，实际操作人名；最大长度50
     * Required: true
     * Example Value: API
     */
    private $operatorName;

    /**
     * @param string $operatorName
     * 审核人名，实际操作人名；最大长度50
     * Example Value: API
     */
    public function setOperatorName($operatorName)
    {
        $this->operatorName             = $operatorName;
        $this->apiParas["operatorName"]  = $operatorName;
    }

    public function getOperatorName()
    {
        return $this->operatorName;
    }

    /**
     * @param string $operateTime
     * 操作时间；格式yyyy-MM-dd HH:mm:ss；最大长度11
     * Required: true
     * Example Value: 2018-11-26 19:40:18
     */
    private $operateTime;

    /**
     * @param string $operateTime
     * 操作时间；格式yyyy-MM-dd HH:mm:ss；最大长度11
     * Example Value: 2018-11-26 19:40:18
     */
    public function setOperateTime($operateTime)
    {
        $this->operateTime             = $operateTime;
        $this->apiParas["operateTime"]  = $operateTime;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

    /**
     * @param string $pickupNo
     * 取件单号；最大长度50
     * Required: false
     * Example Value: 空
     */
    private $pickupNo;

    /**
     * @param string $pickupNo
     * 取件单号；最大长度50
     * Example Value: 空
     */
    public function setPickupNo($pickupNo)
    {
        $this->pickupNo             = $pickupNo;
        $this->apiParas["pickupNo"]  = $pickupNo;
    }

    public function getPickupNo()
    {
        return $this->pickupNo;
    }

    /**
     * @param string $questionDesc
     * 问题描述；最大长度1000
     * Required: true
     * Example Value: 问题描述
     */
    private $questionDesc;

    /**
     * @param string $questionDesc
     * 问题描述；最大长度1000
     * Example Value: 问题描述
     */
    public function setQuestionDesc($questionDesc)
    {
        $this->questionDesc             = $questionDesc;
        $this->apiParas["questionDesc"]  = $questionDesc;
    }

    public function getQuestionDesc()
    {
        return $this->questionDesc;
    }

    /**
     * @param string $applyReason
     * 申请原因；最大长度300
     * Required: true
     * Example Value: 申请原因
     */
    private $applyReason;

    /**
     * @param string $applyReason
     * 申请原因；最大长度300
     * Example Value: 申请原因
     */
    public function setApplyReason($applyReason)
    {
        $this->applyReason             = $applyReason;
        $this->apiParas["applyReason"]  = $applyReason;
    }

    public function getApplyReason()
    {
        return $this->applyReason;
    }

    /**
     * @param string $amsAuditComment
     * 售后审核意见；最大长度300
     * Required: true
     * Example Value: 售后审核意见
     */
    private $amsAuditComment;

    /**
     * @param string $amsAuditComment
     * 售后审核意见；最大长度300
     * Example Value: 售后审核意见
     */
    public function setAmsAuditComment($amsAuditComment)
    {
        $this->amsAuditComment             = $amsAuditComment;
        $this->apiParas["amsAuditComment"]  = $amsAuditComment;
    }

    public function getAmsAuditComment()
    {
        return $this->amsAuditComment;
    }

    /**
     * @param string $waybill
     * 运单号；最大长度200
     * Required: false
     * Example Value: 51200768802835
     */
    private $waybill;

    /**
     * @param string $waybill
     * 运单号；最大长度200
     * Example Value: 51200768802835
     */
    public function setWaybill($waybill)
    {
        $this->waybill             = $waybill;
        $this->apiParas["waybill"]  = $waybill;
    }

    public function getWaybill()
    {
        return $this->waybill;
    }

    /**
     * @param string $pickwaretype
     * 取件类型；枚举值：1、上门取件，2、客户发货；最大长度2
     * Required: true
     * Example Value: 2
     */
    private $pickwaretype;

    /**
     * @param string $pickwaretype
     * 取件类型；枚举值：1、上门取件，2、客户发货；最大长度2
     * Example Value: 2
     */
    public function setPickwaretype($pickwaretype)
    {
        $this->pickwaretype             = $pickwaretype;
        $this->apiParas["pickwaretype"]  = $pickwaretype;
    }

    public function getPickwaretype()
    {
        return $this->pickwaretype;
    }

    /**
     * @param string[] $isvGoodsNo
     * ISV商品编码；最大长度50
     * Required: true
     * Example Value: 25216219155
     */
    private $isvGoodsNo;

    /**
     * @param string[] $isvGoodsNo
     * ISV商品编码；最大长度50
     * Example Value: 25216219155
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
     * @param string[] $quantity
     * 数量；仅为整形数字；最大长度10
     * Required: true
     * Example Value: 1
     */
    private $quantity;

    /**
     * @param string[] $quantity
     * 数量；仅为整形数字；最大长度10
     * Example Value: 1
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
     * @param string[] $weight
     * 重量；仅为实数
     * Required: false
     * Example Value: 10
     */
    private $weight;

    /**
     * @param string[] $weight
     * 重量；仅为实数
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
     * @param string[] $sn
     * SN码；最大长度50
     * Required: false
     * Example Value: 31247890123
     */
    private $sn;

    /**
     * @param string[] $sn
     * SN码；最大长度50
     * Example Value: 31247890123
     */
    public function setSn($sn)
    {
        $this->sn             = $sn;
        $this->apiParas["sn"]  = $sn;
    }

    public function getSn()
    {
        return $this->sn;
    }

    /**
     * @param string[] $attachmentDetails
     * 附件信息；最大长度500
     * Required: true
     * Example Value: 安装螺钉、说明书
     */
    private $attachmentDetails;

    /**
     * @param string[] $attachmentDetails
     * 附件信息；最大长度500
     * Example Value: 安装螺钉、说明书
     */
    public function setAttachmentDetails($attachmentDetails)
    {
        $this->attachmentDetails             = $attachmentDetails;
        $this->apiParas["attachmentDetails"]  = $attachmentDetails;
    }

    public function getAttachmentDetails()
    {
        return $this->attachmentDetails;
    }

    /**
     * @param string[] $wareType
     * 商品类别；枚举值10、主商品，20、赠品；最大长度2
     * Required: true
     * Example Value: 10
     */
    private $wareType;

    /**
     * @param string[] $wareType
     * 商品类别；枚举值10、主商品，20、赠品；最大长度2
     * Example Value: 10
     */
    public function setWareType($wareType)
    {
        $this->wareType             = $wareType;
        $this->apiParas["wareType"]  = $wareType;
    }

    public function getWareType()
    {
        return $this->wareType;
    }

    /**
     * @param int $isCreatePickup
     * 自动创建取件单；枚举值0、否，1、是；最大长度1
     * Required: false
     * Example Value: 0
     */
    private $isCreatePickup;

    /**
     * @param int $isCreatePickup
     * 自动创建取件单；枚举值0、否，1、是；最大长度1
     * Example Value: 0
     */
    public function setIsCreatePickup($isCreatePickup)
    {
        $this->isCreatePickup             = $isCreatePickup;
        $this->apiParas["isCreatePickup"]  = $isCreatePickup;
    }

    public function getIsCreatePickup()
    {
        return $this->isCreatePickup;
    }

    /**
     * @param string $businessPhone
     * 商家联系电话；最大长度500
     * Required: false
     * Example Value: 13812341234
     */
    private $businessPhone;

    /**
     * @param string $businessPhone
     * 商家联系电话；最大长度500
     * Example Value: 13812341234
     */
    public function setBusinessPhone($businessPhone)
    {
        $this->businessPhone             = $businessPhone;
        $this->apiParas["businessPhone"]  = $businessPhone;
    }

    public function getBusinessPhone()
    {
        return $this->businessPhone;
    }

    /**
     * @param  $outPickupType
     * 外部取件类型；枚举值1、普通取件单，2、取件换新单；最大长度1
     * Required: false
     * Example Value: 1
     */
    private $outPickupType;

    /**
     * @param  $outPickupType
     * 外部取件类型；枚举值1、普通取件单，2、取件换新单；最大长度1
     * Example Value: 1
     */
    public function setOutPickupType($outPickupType)
    {
        $this->outPickupType             = $outPickupType;
        $this->apiParas["outPickupType"]  = $outPickupType;
    }

    public function getOutPickupType()
    {
        return $this->outPickupType;
    }

    /**
     * @param string $afterSalesChangeNo
     * 售后换新单号；最大长度500
     * Required: false
     * Example Value: ESL4418682223308
     */
    private $afterSalesChangeNo;

    /**
     * @param string $afterSalesChangeNo
     * 售后换新单号；最大长度500
     * Example Value: ESL4418682223308
     */
    public function setAfterSalesChangeNo($afterSalesChangeNo)
    {
        $this->afterSalesChangeNo             = $afterSalesChangeNo;
        $this->apiParas["afterSalesChangeNo"]  = $afterSalesChangeNo;
    }

    public function getAfterSalesChangeNo()
    {
        return $this->afterSalesChangeNo;
    }

}