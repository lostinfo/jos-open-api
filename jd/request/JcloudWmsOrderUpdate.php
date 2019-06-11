<?php

namespace JD\request;

/**
 * 出库单更新下传
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1626&apiName=jingdong.jcloud.wms.order.update
 * Class JcloudWmsOrderUpdate
 * @package Jd\request
 */
class JcloudWmsOrderUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.order.update";
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
     * 出库单号
     * Required: true
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param String $orderNo
     * 出库单号
     * Example Value: 
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
     * @param String $warehouseNo
     * 库房号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 库房号
     * Example Value: 
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
     * @param String $tenantId
     * 租户ID
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param String $tenantId
     * 租户ID
     * Example Value: 
     */
    public function setTenantId($tenantId)
    {
        $this->tenantId             = $tenantId;
        $this->apiParas["tenantId"]  = $tenantId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    /**
     * @param String $billType
     * 订单类型
     * Required: true
     * Example Value: 
     */
    private $billType;

    /**
     * @param String $billType
     * 订单类型
     * Example Value: 
     */
    public function setBillType($billType)
    {
        $this->billType             = $billType;
        $this->apiParas["billType"]  = $billType;
    }

    public function getBillType()
    {
        return $this->billType;
    }

    /**
     * @param String $ownerNo
     * 货主编号
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param String $ownerNo
     * 货主编号
     * Example Value: 
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["ownerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    /**
     * @param Number $invoiceFlag
     * 是否有发票(0:否；1:是)
     * Required: false
     * Example Value: 
     */
    private $invoiceFlag;

    /**
     * @param Number $invoiceFlag
     * 是否有发票(0:否；1:是)
     * Example Value: 
     */
    public function setInvoiceFlag($invoiceFlag)
    {
        $this->invoiceFlag             = $invoiceFlag;
        $this->apiParas["invoiceFlag"]  = $invoiceFlag;
    }

    public function getInvoiceFlag()
    {
        return $this->invoiceFlag;
    }

    /**
     * @param String $invoiceTitle
     * 发票抬头
     * Required: false
     * Example Value: 
     */
    private $invoiceTitle;

    /**
     * @param String $invoiceTitle
     * 发票抬头
     * Example Value: 
     */
    public function setInvoiceTitle($invoiceTitle)
    {
        $this->invoiceTitle             = $invoiceTitle;
        $this->apiParas["invoiceTitle"]  = $invoiceTitle;
    }

    public function getInvoiceTitle()
    {
        return $this->invoiceTitle;
    }

    /**
     * @param String $invoiceContent
     * 发票内容
     * Required: false
     * Example Value: 
     */
    private $invoiceContent;

    /**
     * @param String $invoiceContent
     * 发票内容
     * Example Value: 
     */
    public function setInvoiceContent($invoiceContent)
    {
        $this->invoiceContent             = $invoiceContent;
        $this->apiParas["invoiceContent"]  = $invoiceContent;
    }

    public function getInvoiceContent()
    {
        return $this->invoiceContent;
    }

    /**
     * @param String $notes
     * 买家备注
     * Required: false
     * Example Value: 
     */
    private $notes;

    /**
     * @param String $notes
     * 买家备注
     * Example Value: 
     */
    public function setNotes($notes)
    {
        $this->notes             = $notes;
        $this->apiParas["notes"]  = $notes;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param String $sellerNotes
     * 卖家备注
     * Required: false
     * Example Value: 
     */
    private $sellerNotes;

    /**
     * @param String $sellerNotes
     * 卖家备注
     * Example Value: 
     */
    public function setSellerNotes($sellerNotes)
    {
        $this->sellerNotes             = $sellerNotes;
        $this->apiParas["sellerNotes"]  = $sellerNotes;
    }

    public function getSellerNotes()
    {
        return $this->sellerNotes;
    }

    /**
     * @param String $province
     * 收件人所在省
     * Required: false
     * Example Value: 
     */
    private $province;

    /**
     * @param String $province
     * 收件人所在省
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
     * 收件人所在市
     * Required: false
     * Example Value: 
     */
    private $city;

    /**
     * @param String $city
     * 收件人所在市
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
     * 收件人所在县
     * Required: false
     * Example Value: 
     */
    private $county;

    /**
     * @param String $county
     * 收件人所在县
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
     * @param String $zipcode
     * 邮政编码
     * Required: false
     * Example Value: 
     */
    private $zipcode;

    /**
     * @param String $zipcode
     * 邮政编码
     * Example Value: 
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode             = $zipcode;
        $this->apiParas["zipcode"]  = $zipcode;
    }

    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param String $contact
     * 收件人姓名
     * Required: false
     * Example Value: 
     */
    private $contact;

    /**
     * @param String $contact
     * 收件人姓名
     * Example Value: 
     */
    public function setContact($contact)
    {
        $this->contact             = $contact;
        $this->apiParas["contact"]  = $contact;
    }

    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param String $tel
     * 收件人联系电话
     * Required: false
     * Example Value: 
     */
    private $tel;

    /**
     * @param String $tel
     * 收件人联系电话
     * Example Value: 
     */
    public function setTel($tel)
    {
        $this->tel             = $tel;
        $this->apiParas["tel"]  = $tel;
    }

    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param String $phone
     * 收件人手机
     * Required: false
     * Example Value: 
     */
    private $phone;

    /**
     * @param String $phone
     * 收件人手机
     * Example Value: 
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
     * @param String $address
     * 收件人地址
     * Required: false
     * Example Value: 
     */
    private $address;

    /**
     * @param String $address
     * 收件人地址
     * Example Value: 
     */
    public function setAddress($address)
    {
        $this->address             = $address;
        $this->apiParas["address"]  = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param String $operator
     * 操作人
     * Required: false
     * Example Value: 
     */
    private $operator;

    /**
     * @param String $operator
     * 操作人
     * Example Value: 
     */
    public function setOperator($operator)
    {
        $this->operator             = $operator;
        $this->apiParas["operator"]  = $operator;
    }

    public function getOperator()
    {
        return $this->operator;
    }

}