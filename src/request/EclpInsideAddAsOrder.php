<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 新建增值服务单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2972&apiName=jingdong.eclp.inside.addAsOrder
 * Class EclpInsideAddAsOrder
 * @package Jd\request
 */
class EclpInsideAddAsOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.inside.addAsOrder";
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
     * @param int $id
     * 服务单id
     * Required: false
     * Example Value: 1
     */
    private $id;

    /**
     * @param int $id
     * 服务单id
     * Example Value: 1
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $sellerNo
     * 商家编码
     * Required: true
     * Example Value: ECP001
     */
    private $sellerNo;

    /**
     * @param string $sellerNo
     * 商家编码
     * Example Value: ECP001
     */
    public function setSellerNo($sellerNo)
    {
        $this->sellerNo             = $sellerNo;
        $this->apiParas["sellerNo"]  = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    /**
     * @param string $pin
     * pin码
     * Required: true
     * Example Value: PINCODE
     */
    private $pin;

    /**
     * @param string $pin
     * pin码
     * Example Value: PINCODE
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["pin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param string $deptNo
     * 事业部编码
     * Required: true
     * Example Value: EBU001
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编码
     * Example Value: EBU001
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
     * @param string $warehouseNo
     * eclp仓库号
     * Required: true
     * Example Value: 110001234
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * eclp仓库号
     * Example Value: 110001234
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
     * @param string $sellerAsNo
     * 商家服务单号
     * Required: true
     * Example Value: sellerOrderNo001
     */
    private $sellerAsNo;

    /**
     * @param string $sellerAsNo
     * 商家服务单号
     * Example Value: sellerOrderNo001
     */
    public function setSellerAsNo($sellerAsNo)
    {
        $this->sellerAsNo             = $sellerAsNo;
        $this->apiParas["sellerAsNo"]  = $sellerAsNo;
    }

    public function getSellerAsNo()
    {
        return $this->sellerAsNo;
    }

    /**
     * @param string $orderType
     * 单据类型
     * Required: true
     * Example Value: PURCHASE_ENTRY_ORDER
     */
    private $orderType;

    /**
     * @param string $orderType
     * 单据类型
     * Example Value: PURCHASE_ENTRY_ORDER
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
     * @param string $sellerRelatedNo
     * 商家关联单号,非库内 账外 则必填外连单号
     * Required: false
     * Example Value: 001
     */
    private $sellerRelatedNo;

    /**
     * @param string $sellerRelatedNo
     * 商家关联单号,非库内 账外 则必填外连单号
     * Example Value: 001
     */
    public function setSellerRelatedNo($sellerRelatedNo)
    {
        $this->sellerRelatedNo             = $sellerRelatedNo;
        $this->apiParas["sellerRelatedNo"]  = $sellerRelatedNo;
    }

    public function getSellerRelatedNo()
    {
        return $this->sellerRelatedNo;
    }

    /**
     * @param string $eclpRelatedNo
     * eclp关联单号,非库内 账外 则必填外连单号
     * Required: false
     * Example Value: EPL001
     */
    private $eclpRelatedNo;

    /**
     * @param string $eclpRelatedNo
     * eclp关联单号,非库内 账外 则必填外连单号
     * Example Value: EPL001
     */
    public function setEclpRelatedNo($eclpRelatedNo)
    {
        $this->eclpRelatedNo             = $eclpRelatedNo;
        $this->apiParas["eclpRelatedNo"]  = $eclpRelatedNo;
    }

    public function getEclpRelatedNo()
    {
        return $this->eclpRelatedNo;
    }

    /**
     * @param string $exceptedStartDate
     * 期望开始日期
     * Required: false
     * Example Value: 
     */
    private $exceptedStartDate;

    /**
     * @param string $exceptedStartDate
     * 期望开始日期
     * Example Value: 
     */
    public function setExceptedStartDate($exceptedStartDate)
    {
        $this->exceptedStartDate             = $exceptedStartDate;
        $this->apiParas["exceptedStartDate"]  = $exceptedStartDate;
    }

    public function getExceptedStartDate()
    {
        return $this->exceptedStartDate;
    }

    /**
     * @param string $exceptedCompletionDate
     * 期望结束日期
     * Required: false
     * Example Value: 
     */
    private $exceptedCompletionDate;

    /**
     * @param string $exceptedCompletionDate
     * 期望结束日期
     * Example Value: 
     */
    public function setExceptedCompletionDate($exceptedCompletionDate)
    {
        $this->exceptedCompletionDate             = $exceptedCompletionDate;
        $this->apiParas["exceptedCompletionDate"]  = $exceptedCompletionDate;
    }

    public function getExceptedCompletionDate()
    {
        return $this->exceptedCompletionDate;
    }

    /**
     * @param string $businessContacts
     * 商家联系人
     * Required: false
     * Example Value: zhangsan
     */
    private $businessContacts;

    /**
     * @param string $businessContacts
     * 商家联系人
     * Example Value: zhangsan
     */
    public function setBusinessContacts($businessContacts)
    {
        $this->businessContacts             = $businessContacts;
        $this->apiParas["businessContacts"]  = $businessContacts;
    }

    public function getBusinessContacts()
    {
        return $this->businessContacts;
    }

    /**
     * @param string $businessPhone
     * 商家联系电话
     * Required: false
     * Example Value: 13015571682
     */
    private $businessPhone;

    /**
     * @param string $businessPhone
     * 商家联系电话
     * Example Value: 13015571682
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
     * @param string $sellerRemark
     * 商家服务说明
     * Required: false
     * Example Value: 备注
     */
    private $sellerRemark;

    /**
     * @param string $sellerRemark
     * 商家服务说明
     * Example Value: 备注
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
     * @param int $source
     * 单据来源, jos接口必须填4
     * Required: true
     * Example Value: 4
     */
    private $source;

    /**
     * @param int $source
     * 单据来源, jos接口必须填4
     * Example Value: 4
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $extraInfos
     *  额外附件,使用jfs存储后传入
     * Required: false
     * Example Value: 
     */
    private $extraInfos;

    /**
     * @param string $extraInfos
     *  额外附件,使用jfs存储后传入
     * Example Value: 
     */
    public function setExtraInfos($extraInfos)
    {
        $this->extraInfos             = $extraInfos;
        $this->apiParas["extraInfos"]  = $extraInfos;
    }

    public function getExtraInfos()
    {
        return $this->extraInfos;
    }

    /**
     * @param string[] $goodsNo
     * eclp商品编码,与isvGoodsNo必填其一
     * Required: false
     * Example Value: EMG001
     */
    private $goodsNo;

    /**
     * @param string[] $goodsNo
     * eclp商品编码,与isvGoodsNo必填其一
     * Example Value: EMG001
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goodsNo"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param string[] $isvGoodsNo
     * 商家商品编码
     * Required: false
     * Example Value: sellerGoodsNo001
     */
    private $isvGoodsNo;

    /**
     * @param string[] $isvGoodsNo
     * 商家商品编码
     * Example Value: sellerGoodsNo001
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
     * @param string[] $serviceItemCode
     * 服务项编码
     * Required: true
     * Example Value: serviceCode001
     */
    private $serviceItemCode;

    /**
     * @param string[] $serviceItemCode
     * 服务项编码
     * Example Value: serviceCode001
     */
    public function setServiceItemCode($serviceItemCode)
    {
        $this->serviceItemCode             = $serviceItemCode;
        $this->apiParas["serviceItemCode"]  = $serviceItemCode;
    }

    public function getServiceItemCode()
    {
        return $this->serviceItemCode;
    }

    /**
     * @param int[] $planQty
     * 计划数量
     * Required: true
     * Example Value: 10
     */
    private $planQty;

    /**
     * @param int[] $planQty
     * 计划数量
     * Example Value: 10
     */
    public function setPlanQty($planQty)
    {
        $this->planQty             = $planQty;
        $this->apiParas["planQty"]  = $planQty;
    }

    public function getPlanQty()
    {
        return $this->planQty;
    }

    /**
     * @param string[] $serviceItemName
     * 服务项名称
     * Required: true
     * Example Value: 服务项1
     */
    private $serviceItemName;

    /**
     * @param string[] $serviceItemName
     * 服务项名称
     * Example Value: 服务项1
     */
    public function setServiceItemName($serviceItemName)
    {
        $this->serviceItemName             = $serviceItemName;
        $this->apiParas["serviceItemName"]  = $serviceItemName;
    }

    public function getServiceItemName()
    {
        return $this->serviceItemName;
    }

}