<?php

namespca Lostinfo\JosOpenApi;

/**
 * 审核为上门换新
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2458&apiName=jingdong.asc.audit.doorRenew
 * Class AscAuditDoorRenew
 * @package Jd\request
 */
class AscAuditDoorRenew
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.audit.doorRenew";
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
     * @param string $buId
     * 商家ID（最长50）
     * Required: true
     * Example Value: 
     */
    private $buId;

    /**
     * @param string $buId
     * 商家ID（最长50）
     * Example Value: 
     */
    public function setBuId($buId)
    {
        $this->buId             = $buId;
        $this->apiParas["buId"]  = $buId;
    }

    public function getBuId()
    {
        return $this->buId;
    }

    /**
     * @param string $operatePin
     * 操作人账号（最长50）
     * Required: true
     * Example Value: 
     */
    private $operatePin;

    /**
     * @param string $operatePin
     * 操作人账号（最长50）
     * Example Value: 
     */
    public function setOperatePin($operatePin)
    {
        $this->operatePin             = $operatePin;
        $this->apiParas["operatePin"]  = $operatePin;
    }

    public function getOperatePin()
    {
        return $this->operatePin;
    }

    /**
     * @param string $operateNick
     * 操作人姓名（最长50）
     * Required: true
     * Example Value: 
     */
    private $operateNick;

    /**
     * @param string $operateNick
     * 操作人姓名（最长50）
     * Example Value: 
     */
    public function setOperateNick($operateNick)
    {
        $this->operateNick             = $operateNick;
        $this->apiParas["operateNick"]  = $operateNick;
    }

    public function getOperateNick()
    {
        return $this->operateNick;
    }

    /**
     * @param int $serviceId
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $serviceId;

    /**
     * @param int $serviceId
     * 服务单号
     * Example Value: 
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId             = $serviceId;
        $this->apiParas["serviceId"]  = $serviceId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param int $orderId
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param int $orderId
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
     * @param string $approveNotes
     * 审核意见
     * Required: true
     * Example Value: 
     */
    private $approveNotes;

    /**
     * @param string $approveNotes
     * 审核意见
     * Example Value: 
     */
    public function setApproveNotes($approveNotes)
    {
        $this->approveNotes             = $approveNotes;
        $this->apiParas["approveNotes"]  = $approveNotes;
    }

    public function getApproveNotes()
    {
        return $this->approveNotes;
    }

    /**
     * @param int $sysVersion
     * 服务单版本号
     * Required: true
     * Example Value: 
     */
    private $sysVersion;

    /**
     * @param int $sysVersion
     * 服务单版本号
     * Example Value: 
     */
    public function setSysVersion($sysVersion)
    {
        $this->sysVersion             = $sysVersion;
        $this->apiParas["sysVersion"]  = $sysVersion;
    }

    public function getSysVersion()
    {
        return $this->sysVersion;
    }

    /**
     * @param int $questionTypeCid1
     * 一级审核原因
     * Required: true
     * Example Value: 
     */
    private $questionTypeCid1;

    /**
     * @param int $questionTypeCid1
     * 一级审核原因
     * Example Value: 
     */
    public function setQuestionTypeCid1($questionTypeCid1)
    {
        $this->questionTypeCid1             = $questionTypeCid1;
        $this->apiParas["approveReasonCid1"]  = $questionTypeCid1;
    }

    public function getQuestionTypeCid1()
    {
        return $this->questionTypeCid1;
    }

    /**
     * @param int $questionTypeCid2
     * 二级审核原因
     * Required: false
     * Example Value: 
     */
    private $questionTypeCid2;

    /**
     * @param int $questionTypeCid2
     * 二级审核原因
     * Example Value: 
     */
    public function setQuestionTypeCid2($questionTypeCid2)
    {
        $this->questionTypeCid2             = $questionTypeCid2;
        $this->apiParas["approveReasonCid2"]  = $questionTypeCid2;
    }

    public function getQuestionTypeCid2()
    {
        return $this->questionTypeCid2;
    }

    /**
     * @param bool $appendPickware
     * 是否追加取件
     * Required: false
     * Example Value: 
     */
    private $appendPickware;

    /**
     * @param bool $appendPickware
     * 是否追加取件
     * Example Value: 
     */
    public function setAppendPickware($appendPickware)
    {
        $this->appendPickware             = $appendPickware;
        $this->apiParas["appendPickware"]  = $appendPickware;
    }

    public function getAppendPickware()
    {
        return $this->appendPickware;
    }

    /**
     * @param string $contactName
     * 取件联系人
     * Required: true
     * Example Value: 
     */
    private $contactName;

    /**
     * @param string $contactName
     * 取件联系人
     * Example Value: 
     */
    public function setContactName($contactName)
    {
        $this->contactName             = $contactName;
        $this->apiParas["pickupContactName"]  = $contactName;
    }

    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * @param string $contactTel
     * 取件联系电话
     * Required: true
     * Example Value: 
     */
    private $contactTel;

    /**
     * @param string $contactTel
     * 取件联系电话
     * Example Value: 
     */
    public function setContactTel($contactTel)
    {
        $this->contactTel             = $contactTel;
        $this->apiParas["pickupContactTel"]  = $contactTel;
    }

    public function getContactTel()
    {
        return $this->contactTel;
    }

    /**
     * @param string $contactMobile
     * 取件联系手机
     * Required: false
     * Example Value: 
     */
    private $contactMobile;

    /**
     * @param string $contactMobile
     * 取件联系手机
     * Example Value: 
     */
    public function setContactMobile($contactMobile)
    {
        $this->contactMobile             = $contactMobile;
        $this->apiParas["pickupContactMobile"]  = $contactMobile;
    }

    public function getContactMobile()
    {
        return $this->contactMobile;
    }

    /**
     * @param string $contactZipcode
     * 取件联系邮编
     * Required: false
     * Example Value: 
     */
    private $contactZipcode;

    /**
     * @param string $contactZipcode
     * 取件联系邮编
     * Example Value: 
     */
    public function setContactZipcode($contactZipcode)
    {
        $this->contactZipcode             = $contactZipcode;
        $this->apiParas["pickupZipcode"]  = $contactZipcode;
    }

    public function getContactZipcode()
    {
        return $this->contactZipcode;
    }

    /**
     * @param int $provinceCode
     * 取件省份
     * Required: true
     * Example Value: 
     */
    private $provinceCode;

    /**
     * @param int $provinceCode
     * 取件省份
     * Example Value: 
     */
    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode             = $provinceCode;
        $this->apiParas["pickupProvince"]  = $provinceCode;
    }

    public function getProvinceCode()
    {
        return $this->provinceCode;
    }

    /**
     * @param int $cityCode
     * 取件城市
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int $cityCode
     * 取件城市
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["pickupCity"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param int $countyCode
     * 取件区县
     * Required: true
     * Example Value: 
     */
    private $countyCode;

    /**
     * @param int $countyCode
     * 取件区县
     * Example Value: 
     */
    public function setCountyCode($countyCode)
    {
        $this->countyCode             = $countyCode;
        $this->apiParas["pickupCounty"]  = $countyCode;
    }

    public function getCountyCode()
    {
        return $this->countyCode;
    }

    /**
     * @param int $villageCode
     * 取件乡镇
     * Required: false
     * Example Value: 
     */
    private $villageCode;

    /**
     * @param int $villageCode
     * 取件乡镇
     * Example Value: 
     */
    public function setVillageCode($villageCode)
    {
        $this->villageCode             = $villageCode;
        $this->apiParas["pickupVillage"]  = $villageCode;
    }

    public function getVillageCode()
    {
        return $this->villageCode;
    }

    /**
     * @param string $detailAddress
     * 取件详细地址
     * Required: true
     * Example Value: 
     */
    private $detailAddress;

    /**
     * @param string $detailAddress
     * 取件详细地址
     * Example Value: 
     */
    public function setDetailAddress($detailAddress)
    {
        $this->detailAddress             = $detailAddress;
        $this->apiParas["pickupDetailAddress"]  = $detailAddress;
    }

    public function getDetailAddress()
    {
        return $this->detailAddress;
    }

    /**
     * @param string $contactName
     * 返件联系人
     * Required: true
     * Example Value: 
     */
    private $contactName;

    /**
     * @param string $contactName
     * 返件联系人
     * Example Value: 
     */
    public function setContactName($contactName)
    {
        $this->contactName             = $contactName;
        $this->apiParas["returnContactName"]  = $contactName;
    }

    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * @param string $contactTel
     * 返件联系电话
     * Required: true
     * Example Value: 
     */
    private $contactTel;

    /**
     * @param string $contactTel
     * 返件联系电话
     * Example Value: 
     */
    public function setContactTel($contactTel)
    {
        $this->contactTel             = $contactTel;
        $this->apiParas["returnContactTel"]  = $contactTel;
    }

    public function getContactTel()
    {
        return $this->contactTel;
    }

    /**
     * @param string $contactMobile
     * 返件联系手机
     * Required: false
     * Example Value: 
     */
    private $contactMobile;

    /**
     * @param string $contactMobile
     * 返件联系手机
     * Example Value: 
     */
    public function setContactMobile($contactMobile)
    {
        $this->contactMobile             = $contactMobile;
        $this->apiParas["returnContactMobile"]  = $contactMobile;
    }

    public function getContactMobile()
    {
        return $this->contactMobile;
    }

    /**
     * @param string $contactZipcode
     * 返件邮编
     * Required: true
     * Example Value: 
     */
    private $contactZipcode;

    /**
     * @param string $contactZipcode
     * 返件邮编
     * Example Value: 
     */
    public function setContactZipcode($contactZipcode)
    {
        $this->contactZipcode             = $contactZipcode;
        $this->apiParas["returnZipcode"]  = $contactZipcode;
    }

    public function getContactZipcode()
    {
        return $this->contactZipcode;
    }

    /**
     * @param int $provinceCode
     * 返件省份
     * Required: true
     * Example Value: 
     */
    private $provinceCode;

    /**
     * @param int $provinceCode
     * 返件省份
     * Example Value: 
     */
    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode             = $provinceCode;
        $this->apiParas["returnProvince"]  = $provinceCode;
    }

    public function getProvinceCode()
    {
        return $this->provinceCode;
    }

    /**
     * @param int $cityCode
     * 返件城市
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int $cityCode
     * 返件城市
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["returnCity"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param int $countyCode
     * 返件区县
     * Required: true
     * Example Value: 
     */
    private $countyCode;

    /**
     * @param int $countyCode
     * 返件区县
     * Example Value: 
     */
    public function setCountyCode($countyCode)
    {
        $this->countyCode             = $countyCode;
        $this->apiParas["returnCounty"]  = $countyCode;
    }

    public function getCountyCode()
    {
        return $this->countyCode;
    }

    /**
     * @param int $villageCode
     * 返件乡镇
     * Required: false
     * Example Value: 
     */
    private $villageCode;

    /**
     * @param int $villageCode
     * 返件乡镇
     * Example Value: 
     */
    public function setVillageCode($villageCode)
    {
        $this->villageCode             = $villageCode;
        $this->apiParas["returnVillage"]  = $villageCode;
    }

    public function getVillageCode()
    {
        return $this->villageCode;
    }

    /**
     * @param string $detailAddress
     * 返件详细地址
     * Required: true
     * Example Value: 
     */
    private $detailAddress;

    /**
     * @param string $detailAddress
     * 返件详细地址
     * Example Value: 
     */
    public function setDetailAddress($detailAddress)
    {
        $this->detailAddress             = $detailAddress;
        $this->apiParas["returnDetailAddress"]  = $detailAddress;
    }

    public function getDetailAddress()
    {
        return $this->detailAddress;
    }

    /**
     * @param int $returnAddressType
     * 返件地址类型
     * Required: true
     * Example Value: 
     */
    private $returnAddressType;

    /**
     * @param int $returnAddressType
     * 返件地址类型
     * Example Value: 
     */
    public function setReturnAddressType($returnAddressType)
    {
        $this->returnAddressType             = $returnAddressType;
        $this->apiParas["returnAddressType"]  = $returnAddressType;
    }

    public function getReturnAddressType()
    {
        return $this->returnAddressType;
    }

    /**
     * @param int[] $applyDetailIdList
     * 申请明细编号列表
     * Required: true
     * Example Value: 
     */
    private $applyDetailIdList;

    /**
     * @param int[] $applyDetailIdList
     * 申请明细编号列表
     * Example Value: 
     */
    public function setApplyDetailIdList($applyDetailIdList)
    {
        $this->applyDetailIdList             = $applyDetailIdList;
        $this->apiParas["applyDetailIdList"]  = $applyDetailIdList;
    }

    public function getApplyDetailIdList()
    {
        return $this->applyDetailIdList;
    }

    /**
     * @param string $invoiceNo
     * 发票编号
     * Required: false
     * Example Value: 
     */
    private $invoiceNo;

    /**
     * @param string $invoiceNo
     * 发票编号
     * Example Value: 
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
     * @param int $invoiceType
     * 发票类型（40：发票原件，50：发票复印件）
     * Required: false
     * Example Value: 
     */
    private $invoiceType;

    /**
     * @param int $invoiceType
     * 发票类型（40：发票原件，50：发票复印件）
     * Example Value: 
     */
    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType             = $invoiceType;
        $this->apiParas["invoiceType"]  = $invoiceType;
    }

    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

    /**
     * @param bool $pickPackage
     * 是否取包装
     * Required: false
     * Example Value: 
     */
    private $pickPackage;

    /**
     * @param bool $pickPackage
     * 是否取包装
     * Example Value: 
     */
    public function setPickPackage($pickPackage)
    {
        $this->pickPackage             = $pickPackage;
        $this->apiParas["pickPackage"]  = $pickPackage;
    }

    public function getPickPackage()
    {
        return $this->pickPackage;
    }

    /**
     * @param bool $pickDetctPaper
     * 是否取出检报告
     * Required: false
     * Example Value: 
     */
    private $pickDetctPaper;

    /**
     * @param bool $pickDetctPaper
     * 是否取出检报告
     * Example Value: 
     */
    public function setPickDetctPaper($pickDetctPaper)
    {
        $this->pickDetctPaper             = $pickDetctPaper;
        $this->apiParas["pickDetctPaper"]  = $pickDetctPaper;
    }

    public function getPickDetctPaper()
    {
        return $this->pickDetctPaper;
    }

    /**
     * @param string $operateRemark
     * 操作备注
     * Required: false
     * Example Value: 
     */
    private $operateRemark;

    /**
     * @param string $operateRemark
     * 操作备注
     * Example Value: 
     */
    public function setOperateRemark($operateRemark)
    {
        $this->operateRemark             = $operateRemark;
        $this->apiParas["operateRemark"]  = $operateRemark;
    }

    public function getOperateRemark()
    {
        return $this->operateRemark;
    }

    /**
     * @param int $deliveryCenterId
     * 配送中心ID
     * Required: true
     * Example Value: 
     */
    private $deliveryCenterId;

    /**
     * @param int $deliveryCenterId
     * 配送中心ID
     * Example Value: 
     */
    public function setDeliveryCenterId($deliveryCenterId)
    {
        $this->deliveryCenterId             = $deliveryCenterId;
        $this->apiParas["deliveryCenterId"]  = $deliveryCenterId;
    }

    public function getDeliveryCenterId()
    {
        return $this->deliveryCenterId;
    }

    /**
     * @param string $deliveryCenterName
     * 配送中心名字
     * Required: false
     * Example Value: 
     */
    private $deliveryCenterName;

    /**
     * @param string $deliveryCenterName
     * 配送中心名字
     * Example Value: 
     */
    public function setDeliveryCenterName($deliveryCenterName)
    {
        $this->deliveryCenterName             = $deliveryCenterName;
        $this->apiParas["deliveryCenterName"]  = $deliveryCenterName;
    }

    public function getDeliveryCenterName()
    {
        return $this->deliveryCenterName;
    }

    /**
     * @param int $storeId
     * 库房ID
     * Required: true
     * Example Value: 
     */
    private $storeId;

    /**
     * @param int $storeId
     * 库房ID
     * Example Value: 
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param int $freightAmount
     * 运费金额
     * Required: false
     * Example Value: 
     */
    private $freightAmount;

    /**
     * @param int $freightAmount
     * 运费金额
     * Example Value: 
     */
    public function setFreightAmount($freightAmount)
    {
        $this->freightAmount             = $freightAmount;
        $this->apiParas["freightAmount"]  = $freightAmount;
    }

    public function getFreightAmount()
    {
        return $this->freightAmount;
    }

    /**
     * @param int[] $skuId
     * 商品编号（数组，与名称、数量、关联商品编号，关联商品类型一一对应）
     * Required: false
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int[] $skuId
     * 商品编号（数组，与名称、数量、关联商品编号，关联商品类型一一对应）
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
     * @param string[] $wareName
     * 商品名称（数组，与编号、数量、关联商品编号，关联商品类型一一对应）
     * Required: false
     * Example Value: 
     */
    private $wareName;

    /**
     * @param string[] $wareName
     * 商品名称（数组，与编号、数量、关联商品编号，关联商品类型一一对应）
     * Example Value: 
     */
    public function setWareName($wareName)
    {
        $this->wareName             = $wareName;
        $this->apiParas["wareName"]  = $wareName;
    }

    public function getWareName()
    {
        return $this->wareName;
    }

    /**
     * @param int[] $wareNum
     * 商品数量（数组，与编号、名称、关联商品编号，关联商品类型一一对应）
     * Required: false
     * Example Value: 
     */
    private $wareNum;

    /**
     * @param int[] $wareNum
     * 商品数量（数组，与编号、名称、关联商品编号，关联商品类型一一对应）
     * Example Value: 
     */
    public function setWareNum($wareNum)
    {
        $this->wareNum             = $wareNum;
        $this->apiParas["wareNum"]  = $wareNum;
    }

    public function getWareNum()
    {
        return $this->wareNum;
    }

    /**
     * @param string $extJsonStr
     * 扩展条件（JSON格式）
     * Required: false
     * Example Value: 
     */
    private $extJsonStr;

    /**
     * @param string $extJsonStr
     * 扩展条件（JSON格式）
     * Example Value: 
     */
    public function setExtJsonStr($extJsonStr)
    {
        $this->extJsonStr             = $extJsonStr;
        $this->apiParas["extJsonStr"]  = $extJsonStr;
    }

    public function getExtJsonStr()
    {
        return $this->extJsonStr;
    }

}