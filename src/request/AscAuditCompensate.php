<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 审核为不退货补发新品
 * 商家售后服务开放API-商家售后服务开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=241&apiId=2125&apiName=jingdong.asc.audit.compensate
 * Class AscAuditCompensate
 * @package Jd\request
 */
class AscAuditCompensate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.audit.compensate";
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
     * 商家编号
     * Required: true
     * Example Value: 
     */
    private $buId;

    /**
     * @param string $buId
     * 商家编号
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
     * 操作人账号
     * Required: true
     * Example Value: 
     */
    private $operatePin;

    /**
     * @param string $operatePin
     * 操作人账号
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
     * 操作人姓名
     * Required: true
     * Example Value: 
     */
    private $operateNick;

    /**
     * @param string $operateNick
     * 操作人姓名
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
     * @param int $deliveryCenterId
     * 配送中心id
     * Required: true
     * Example Value: 
     */
    private $deliveryCenterId;

    /**
     * @param int $deliveryCenterId
     * 配送中心id
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
     * 配送中心名称
     * Required: true
     * Example Value: 
     */
    private $deliveryCenterName;

    /**
     * @param string $deliveryCenterName
     * 配送中心名称
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
     * 库房号
     * Required: true
     * Example Value: 
     */
    private $storeId;

    /**
     * @param int $storeId
     * 库房号
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
     * @param string $contactName
     * 客户联系人
     * Required: true
     * Example Value: 
     */
    private $contactName;

    /**
     * @param string $contactName
     * 客户联系人
     * Example Value: 
     */
    public function setContactName($contactName)
    {
        $this->contactName             = $contactName;
        $this->apiParas["customerContactName"]  = $contactName;
    }

    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * @param string $contactTel
     * 客户联系电话
     * Required: true
     * Example Value: 
     */
    private $contactTel;

    /**
     * @param string $contactTel
     * 客户联系电话
     * Example Value: 
     */
    public function setContactTel($contactTel)
    {
        $this->contactTel             = $contactTel;
        $this->apiParas["customerContactTel"]  = $contactTel;
    }

    public function getContactTel()
    {
        return $this->contactTel;
    }

    /**
     * @param string $contactMobile
     * 客户联系手机
     * Required: true
     * Example Value: 
     */
    private $contactMobile;

    /**
     * @param string $contactMobile
     * 客户联系手机
     * Example Value: 
     */
    public function setContactMobile($contactMobile)
    {
        $this->contactMobile             = $contactMobile;
        $this->apiParas["customerContactMobile"]  = $contactMobile;
    }

    public function getContactMobile()
    {
        return $this->contactMobile;
    }

    /**
     * @param string $contactZipcode
     * 客户邮编
     * Required: false
     * Example Value: 
     */
    private $contactZipcode;

    /**
     * @param string $contactZipcode
     * 客户邮编
     * Example Value: 
     */
    public function setContactZipcode($contactZipcode)
    {
        $this->contactZipcode             = $contactZipcode;
        $this->apiParas["customerZipcode"]  = $contactZipcode;
    }

    public function getContactZipcode()
    {
        return $this->contactZipcode;
    }

    /**
     * @param int $provinceCode
     * 客户省份
     * Required: true
     * Example Value: 
     */
    private $provinceCode;

    /**
     * @param int $provinceCode
     * 客户省份
     * Example Value: 
     */
    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode             = $provinceCode;
        $this->apiParas["customerProvince"]  = $provinceCode;
    }

    public function getProvinceCode()
    {
        return $this->provinceCode;
    }

    /**
     * @param int $cityCode
     * 客户城市
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int $cityCode
     * 客户城市
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["customerCity"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param int $countyCode
     * 客户区县
     * Required: true
     * Example Value: 
     */
    private $countyCode;

    /**
     * @param int $countyCode
     * 客户区县
     * Example Value: 
     */
    public function setCountyCode($countyCode)
    {
        $this->countyCode             = $countyCode;
        $this->apiParas["customerCounty"]  = $countyCode;
    }

    public function getCountyCode()
    {
        return $this->countyCode;
    }

    /**
     * @param int $villageCode
     * 客户乡镇
     * Required: false
     * Example Value: 
     */
    private $villageCode;

    /**
     * @param int $villageCode
     * 客户乡镇
     * Example Value: 
     */
    public function setVillageCode($villageCode)
    {
        $this->villageCode             = $villageCode;
        $this->apiParas["customerVillage"]  = $villageCode;
    }

    public function getVillageCode()
    {
        return $this->villageCode;
    }

    /**
     * @param string $detailAddress
     * 客户详细地址
     * Required: true
     * Example Value: 
     */
    private $detailAddress;

    /**
     * @param string $detailAddress
     * 客户详细地址
     * Example Value: 
     */
    public function setDetailAddress($detailAddress)
    {
        $this->detailAddress             = $detailAddress;
        $this->apiParas["customerDetailAddress"]  = $detailAddress;
    }

    public function getDetailAddress()
    {
        return $this->detailAddress;
    }

    /**
     * @param int[] $skuId
     * 新商品编号（数组，与名称、价格、数量要一一对应）
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int[] $skuId
     * 新商品编号（数组，与名称、价格、数量要一一对应）
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
     * 新商品名称（数组，与编号、价格、数量要一一对应）
     * Required: true
     * Example Value: 
     */
    private $wareName;

    /**
     * @param string[] $wareName
     * 新商品名称（数组，与编号、价格、数量要一一对应）
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
     * @param int[] $warePrice
     * 新商品价格（数组，与编号、名称、数量要一一对应）
     * Required: true
     * Example Value: 
     */
    private $warePrice;

    /**
     * @param int[] $warePrice
     * 新商品价格（数组，与编号、名称、数量要一一对应）
     * Example Value: 
     */
    public function setWarePrice($warePrice)
    {
        $this->warePrice             = $warePrice;
        $this->apiParas["warePrice"]  = $warePrice;
    }

    public function getWarePrice()
    {
        return $this->warePrice;
    }

    /**
     * @param int[] $wareNum
     * 新商品数量（数组，与编号、名称、价格要一一对应）
     * Required: true
     * Example Value: 
     */
    private $wareNum;

    /**
     * @param int[] $wareNum
     * 新商品数量（数组，与编号、名称、价格要一一对应）
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
     * 扩展条件
     * Required: false
     * Example Value: 
     */
    private $extJsonStr;

    /**
     * @param string $extJsonStr
     * 扩展条件
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