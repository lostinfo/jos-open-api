<?php

namespace JD\request;

/**
 * 修改客户信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2776&apiName=jingdong.eclp.master.updateCustomerInfo
 * Class EclpMasterUpdateCustomerInfo
 * @package Jd\request
 */
class EclpMasterUpdateCustomerInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.updateCustomerInfo";
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
     * @param String $sellerNo
     * 商家编码（不可修改）(非必填，长度：16) 
     * Required: false
     * Example Value: ECP0000000000013
     */
    private $sellerNo;

    /**
     * @param String $sellerNo
     * 商家编码（不可修改）(非必填，长度：16) 
     * Example Value: ECP0000000000013
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
     * @param String $deptNo
     * 事业部编码(根据事业部编码查询商家，创建该商家的客户)(必填，长度：16) 
     * Required: true
     * Example Value: EBU0000000000666
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编码(根据事业部编码查询商家，创建该商家的客户)(必填，长度：16) 
     * Example Value: EBU0000000000666
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
     * @param String $customerNo
     * 客户编码（不可修改）(必填，长度：50) 
     * Required: true
     * Example Value: C00216A
     */
    private $customerNo;

    /**
     * @param String $customerNo
     * 客户编码（不可修改）(必填，长度：50) 
     * Example Value: C00216A
     */
    public function setCustomerNo($customerNo)
    {
        $this->customerNo             = $customerNo;
        $this->apiParas["customerNo"]  = $customerNo;
    }

    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    /**
     * @param String $customerName
     * 客户名称(必填，长度：100) 
     * Required: true
     * Example Value: 刘星
     */
    private $customerName;

    /**
     * @param String $customerName
     * 客户名称(必填，长度：100) 
     * Example Value: 刘星
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
     * @param String $contacts
     * 联系人(非必填，长度：50) 
     * Required: false
     * Example Value: 张三
     */
    private $contacts;

    /**
     * @param String $contacts
     * 联系人(非必填，长度：50) 
     * Example Value: 张三
     */
    public function setContacts($contacts)
    {
        $this->contacts             = $contacts;
        $this->apiParas["contacts"]  = $contacts;
    }

    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param String $phone
     * 联系人电话(非必填，长度：50) 
     * Required: false
     * Example Value: 13800000000
     */
    private $phone;

    /**
     * @param String $phone
     * 联系人电话(非必填，长度：50) 
     * Example Value: 13800000000
     */
    public function setPhone($phone)
    {
        $this->phone             = $phone;
        $this->apiParas["phone"]  = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param String $customerEmail
     * 联系人邮箱(非必填，长度：50) 
     * Required: false
     * Example Value: 2628896666Aqq.com
     */
    private $customerEmail;

    /**
     * @param String $customerEmail
     * 联系人邮箱(非必填，长度：50) 
     * Example Value: 2628896666Aqq.com
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail             = $customerEmail;
        $this->apiParas["customerEmail"]  = $customerEmail;
    }

    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * @param String $customerAddress
     * 联系人地址(非必填，长度：50) 
     * Required: false
     * Example Value: 北京亦庄经济开发区科创十一街18号 京东集团总部大楼C座10层
     */
    private $customerAddress;

    /**
     * @param String $customerAddress
     * 联系人地址(非必填，长度：50) 
     * Example Value: 北京亦庄经济开发区科创十一街18号 京东集团总部大楼C座10层
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
     * @param  $customerType
     * 客户类型(必填，长度：1， 1 国际 2 普通 3 跨境电商 4 门店 5 总仓 6 工厂 7 京东仓 8 商超 9 经销商 10 供应商) 
     * Required: true
     * Example Value: 2
     */
    private $customerType;

    /**
     * @param  $customerType
     * 客户类型(必填，长度：1， 1 国际 2 普通 3 跨境电商 4 门店 5 总仓 6 工厂 7 京东仓 8 商超 9 经销商 10 供应商) 
     * Example Value: 2
     */
    public function setCustomerType($customerType)
    {
        $this->customerType             = $customerType;
        $this->apiParas["customerType"]  = $customerType;
    }

    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * @param  $transitType
     * 中转类型(必填，长度：1， 0 普通 1 转运) 
     * Required: true
     * Example Value: 1
     */
    private $transitType;

    /**
     * @param  $transitType
     * 中转类型(必填，长度：1， 0 普通 1 转运) 
     * Example Value: 1
     */
    public function setTransitType($transitType)
    {
        $this->transitType             = $transitType;
        $this->apiParas["transitType"]  = $transitType;
    }

    public function getTransitType()
    {
        return $this->transitType;
    }

    /**
     * @param String $warehouseName
     * 京东库房名称(非必填，长度：100) 
     * Required: false
     * Example Value: 沈阳安利KA测试仓1号库
     */
    private $warehouseName;

    /**
     * @param String $warehouseName
     * 京东库房名称(非必填，长度：100) 
     * Example Value: 沈阳安利KA测试仓1号库
     */
    public function setWarehouseName($warehouseName)
    {
        $this->warehouseName             = $warehouseName;
        $this->apiParas["warehouseName"]  = $warehouseName;
    }

    public function getWarehouseName()
    {
        return $this->warehouseName;
    }

    /**
     * @param String $provinceName
     * 省名称(非必填，长度：200) 
     * Required: false
     * Example Value: 辽宁
     */
    private $provinceName;

    /**
     * @param String $provinceName
     * 省名称(非必填，长度：200) 
     * Example Value: 辽宁
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
     * @param String $cityName
     * 市名称(非必填，长度：200) 
     * Required: false
     * Example Value: 大连
     */
    private $cityName;

    /**
     * @param String $cityName
     * 市名称(非必填，长度：200) 
     * Example Value: 大连
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
     * @param String $countyName
     * 县（区）名称(非必填，长度：200) 
     * Required: false
     * Example Value: 沙河口区
     */
    private $countyName;

    /**
     * @param String $countyName
     * 县（区）名称(非必填，长度：200) 
     * Example Value: 沙河口区
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
     * @param String $townName
     * 镇名称(非必填，长度：200) 
     * Required: false
     * Example Value: 南沙街
     */
    private $townName;

    /**
     * @param String $townName
     * 镇名称(非必填，长度：200) 
     * Example Value: 南沙街
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
     * @param  $rection
     * 是否直配(非必填，长度：1，0 否 1是) 
     * Required: false
     * Example Value: 1
     */
    private $rection;

    /**
     * @param  $rection
     * 是否直配(非必填，长度：1，0 否 1是) 
     * Example Value: 1
     */
    public function setRection($rection)
    {
        $this->rection             = $rection;
        $this->apiParas["rection"]  = $rection;
    }

    public function getRection()
    {
        return $this->rection;
    }

    /**
     * @param String $customerRemark
     * 送货要求(说明特殊送货要求，请务必输入！ 限200个汉字！无要求，请输入“无”)(必填，长度：200) 
     * Required: true
     * Example Value: 无
     */
    private $customerRemark;

    /**
     * @param String $customerRemark
     * 送货要求(说明特殊送货要求，请务必输入！ 限200个汉字！无要求，请输入“无”)(必填，长度：200) 
     * Example Value: 无
     */
    public function setCustomerRemark($customerRemark)
    {
        $this->customerRemark             = $customerRemark;
        $this->apiParas["customerRemark"]  = $customerRemark;
    }

    public function getCustomerRemark()
    {
        return $this->customerRemark;
    }

    /**
     * @param String $licenseAddr
     * 客户执照地址(非必填，长度：100) 
     * Required: false
     * Example Value: 北京亦庄经济开发区科创十一街18号 京东集团总部大楼C座10层
     */
    private $licenseAddr;

    /**
     * @param String $licenseAddr
     * 客户执照地址(非必填，长度：100) 
     * Example Value: 北京亦庄经济开发区科创十一街18号 京东集团总部大楼C座10层
     */
    public function setLicenseAddr($licenseAddr)
    {
        $this->licenseAddr             = $licenseAddr;
        $this->apiParas["licenseAddr"]  = $licenseAddr;
    }

    public function getLicenseAddr()
    {
        return $this->licenseAddr;
    }

    /**
     * @param String $licenseUnit
     * 客户执照单位(非必填，长度：30) 
     * Required: false
     * Example Value: 亦庄经济技术开发区
     */
    private $licenseUnit;

    /**
     * @param String $licenseUnit
     * 客户执照单位(非必填，长度：30) 
     * Example Value: 亦庄经济技术开发区
     */
    public function setLicenseUnit($licenseUnit)
    {
        $this->licenseUnit             = $licenseUnit;
        $this->apiParas["licenseUnit"]  = $licenseUnit;
    }

    public function getLicenseUnit()
    {
        return $this->licenseUnit;
    }

    /**
     * @param String $licenseUnitNo
     * 客户执照单位编码(非必填，长度：10) 
     * Required: false
     * Example Value: 3333345
     */
    private $licenseUnitNo;

    /**
     * @param String $licenseUnitNo
     * 客户执照单位编码(非必填，长度：10) 
     * Example Value: 3333345
     */
    public function setLicenseUnitNo($licenseUnitNo)
    {
        $this->licenseUnitNo             = $licenseUnitNo;
        $this->apiParas["licenseUnitNo"]  = $licenseUnitNo;
    }

    public function getLicenseUnitNo()
    {
        return $this->licenseUnitNo;
    }

    /**
     * @param String $warehouseNo
     * 仓库编号(非必填，长度：50) 
     * Required: false
     * Example Value: 110000001
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 仓库编号(非必填，长度：50) 
     * Example Value: 110000001
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
     * @param String $sellerName
     * 商家名称(非必填，长度：100) 
     * Required: false
     * Example Value: 靖哥哥商家 
     */
    private $sellerName;

    /**
     * @param String $sellerName
     * 商家名称(非必填，长度：100) 
     * Example Value: 靖哥哥商家 
     */
    public function setSellerName($sellerName)
    {
        $this->sellerName             = $sellerName;
        $this->apiParas["sellerName"]  = $sellerName;
    }

    public function getSellerName()
    {
        return $this->sellerName;
    }

}