<?php

namespca Lostinfo\JosOpenApi;

/**
 * 其他出库订单下传
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=158&apiName=jingdong.logistics.otherOutstore.add
 * Class LogisticsOtherOutstoreAdd
 * @package Jd\request
 */
class LogisticsOtherOutstoreAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.otherOutstore.add";
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
     * @param string $outboundNo
     * 出库单号
     * Required: true
     * Example Value: 123456
     */
    private $outboundNo;

    /**
     * @param string $outboundNo
     * 出库单号
     * Example Value: 123456
     */
    public function setOutboundNo($outboundNo)
    {
        $this->outboundNo             = $outboundNo;
        $this->apiParas["outbound_no"]  = $outboundNo;
    }

    public function getOutboundNo()
    {
        return $this->outboundNo;
    }

    /**
     * @param string $joslWareNo
     * JOSL库房编号
     * Required: true
     * Example Value: BJ000000001
     */
    private $joslWareNo;

    /**
     * @param string $joslWareNo
     * JOSL库房编号
     * Example Value: BJ000000001
     */
    public function setJoslWareNo($joslWareNo)
    {
        $this->joslWareNo             = $joslWareNo;
        $this->apiParas["josl_ware_no"]  = $joslWareNo;
    }

    public function getJoslWareNo()
    {
        return $this->joslWareNo;
    }

    /**
     * @param string $joslCarriersNo
     * JOSL承运商编号
     * Required: true
     * Example Value: CYS0000002
     */
    private $joslCarriersNo;

    /**
     * @param string $joslCarriersNo
     * JOSL承运商编号
     * Example Value: CYS0000002
     */
    public function setJoslCarriersNo($joslCarriersNo)
    {
        $this->joslCarriersNo             = $joslCarriersNo;
        $this->apiParas["josl_carriers_no"]  = $joslCarriersNo;
    }

    public function getJoslCarriersNo()
    {
        return $this->joslCarriersNo;
    }

    /**
     * @param string $expectDate
     * 期望出库日期
     * Required: false
     * Example Value: yyyy-mm-dd
     */
    private $expectDate;

    /**
     * @param string $expectDate
     * 期望出库日期
     * Example Value: yyyy-mm-dd
     */
    public function setExpectDate($expectDate)
    {
        $this->expectDate             = $expectDate;
        $this->apiParas["expect_date"]  = $expectDate;
    }

    public function getExpectDate()
    {
        return $this->expectDate;
    }

    /**
     * @param string $supplierName
     * 供应商名称
     * Required: false
     * Example Value: xxxxxxx
     */
    private $supplierName;

    /**
     * @param string $supplierName
     * 供应商名称
     * Example Value: xxxxxxx
     */
    public function setSupplierName($supplierName)
    {
        $this->supplierName             = $supplierName;
        $this->apiParas["supplier_name"]  = $supplierName;
    }

    public function getSupplierName()
    {
        return $this->supplierName;
    }

    /**
     * @param string $supplierNo
     * 供应商编号
     * Required: false
     * Example Value: 1001
     */
    private $supplierNo;

    /**
     * @param string $supplierNo
     * 供应商编号
     * Example Value: 1001
     */
    public function setSupplierNo($supplierNo)
    {
        $this->supplierNo             = $supplierNo;
        $this->apiParas["supplier_no"]  = $supplierNo;
    }

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

    /**
     * @param string $approver
     * 审批人
     * Required: false
     * Example Value: 张三
     */
    private $approver;

    /**
     * @param string $approver
     * 审批人
     * Example Value: 张三
     */
    public function setApprover($approver)
    {
        $this->approver             = $approver;
        $this->apiParas["approver"]  = $approver;
    }

    public function getApprover()
    {
        return $this->approver;
    }

    /**
     * @param string $outboundType
     * 出库类型
     * Required: true
     * Example Value: 除销售出库以外的所有出库类型
     */
    private $outboundType;

    /**
     * @param string $outboundType
     * 出库类型
     * Example Value: 除销售出库以外的所有出库类型
     */
    public function setOutboundType($outboundType)
    {
        $this->outboundType             = $outboundType;
        $this->apiParas["outbound_type"]  = $outboundType;
    }

    public function getOutboundType()
    {
        return $this->outboundType;
    }

    /**
     * @param string $remark
     * 备注
     * Required: false
     * Example Value: xxxxxxxxxxxx
     */
    private $remark;

    /**
     * @param string $remark
     * 备注
     * Example Value: xxxxxxxxxxxx
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
     * @param string $consigneeName
     * 收货人姓名
     * Required: true
     * Example Value: 李四
     */
    private $consigneeName;

    /**
     * @param string $consigneeName
     * 收货人姓名
     * Example Value: 李四
     */
    public function setConsigneeName($consigneeName)
    {
        $this->consigneeName             = $consigneeName;
        $this->apiParas["consignee_name"]  = $consigneeName;
    }

    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

    /**
     * @param string $address
     * 收货地址
     * Required: true
     * Example Value: xxxxxxxxxxxxxxxx
     */
    private $address;

    /**
     * @param string $address
     * 收货地址
     * Example Value: xxxxxxxxxxxxxxxx
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
     * @param string $stationNo
     * 站点编号
     * Required: false
     * Example Value: xxxxxxxxxxxxxxxx
     */
    private $stationNo;

    /**
     * @param string $stationNo
     * 站点编号
     * Example Value: xxxxxxxxxxxxxxxx
     */
    public function setStationNo($stationNo)
    {
        $this->stationNo             = $stationNo;
        $this->apiParas["station_no"]  = $stationNo;
    }

    public function getStationNo()
    {
        return $this->stationNo;
    }

    /**
     * @param string $stationName
     * 站点名称
     * Required: false
     * Example Value: xxxxxxxxxxxxxxxx
     */
    private $stationName;

    /**
     * @param string $stationName
     * 站点名称
     * Example Value: xxxxxxxxxxxxxxxx
     */
    public function setStationName($stationName)
    {
        $this->stationName             = $stationName;
        $this->apiParas["station_name"]  = $stationName;
    }

    public function getStationName()
    {
        return $this->stationName;
    }

    /**
     * @param int $receivable
     * 应收金额
     * Required: false
     * Example Value: 100.0
     */
    private $receivable;

    /**
     * @param int $receivable
     * 应收金额
     * Example Value: 100.0
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
     * @param string $zipCode
     * 邮编
     * Required: false
     * Example Value: 100001
     */
    private $zipCode;

    /**
     * @param string $zipCode
     * 邮编
     * Example Value: 100001
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode             = $zipCode;
        $this->apiParas["zip_code"]  = $zipCode;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $phone
     * 电话
     * Required: true
     * Example Value: 158xxxxxxxx
     */
    private $phone;

    /**
     * @param string $phone
     * 电话
     * Example Value: 158xxxxxxxx
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
     * @param string $mobile
     * 手机号
     * Required: true
     * Example Value: 136xxxxxxxx
     */
    private $mobile;

    /**
     * @param string $mobile
     * 手机号
     * Example Value: 136xxxxxxxx
     */
    public function setMobile($mobile)
    {
        $this->mobile             = $mobile;
        $this->apiParas["mobile"]  = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $email
     * 电子邮件
     * Required: false
     * Example Value: xxx@jd.com
     */
    private $email;

    /**
     * @param string $email
     * 电子邮件
     * Example Value: xxx@jd.com
     */
    public function setEmail($email)
    {
        $this->email             = $email;
        $this->apiParas["email"]  = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $buyerRemark
     * 买家留言
     * Required: false
     * Example Value: xxxxxx
     */
    private $buyerRemark;

    /**
     * @param string $buyerRemark
     * 买家留言
     * Example Value: xxxxxx
     */
    public function setBuyerRemark($buyerRemark)
    {
        $this->buyerRemark             = $buyerRemark;
        $this->apiParas["buyer_remark"]  = $buyerRemark;
    }

    public function getBuyerRemark()
    {
        return $this->buyerRemark;
    }

    /**
     * @param string $verifyRemark
     * 审核备注
     * Required: false
     * Example Value: xxxxxxx
     */
    private $verifyRemark;

    /**
     * @param string $verifyRemark
     * 审核备注
     * Example Value: xxxxxxx
     */
    public function setVerifyRemark($verifyRemark)
    {
        $this->verifyRemark             = $verifyRemark;
        $this->apiParas["verify_remark"]  = $verifyRemark;
    }

    public function getVerifyRemark()
    {
        return $this->verifyRemark;
    }

    /**
     * @param string $returnConsigneeName
     * 退货收货人姓名
     * Required: false
     * Example Value: 张三
     */
    private $returnConsigneeName;

    /**
     * @param string $returnConsigneeName
     * 退货收货人姓名
     * Example Value: 张三
     */
    public function setReturnConsigneeName($returnConsigneeName)
    {
        $this->returnConsigneeName             = $returnConsigneeName;
        $this->apiParas["return_consignee_name"]  = $returnConsigneeName;
    }

    public function getReturnConsigneeName()
    {
        return $this->returnConsigneeName;
    }

    /**
     * @param string $returnConsigneeAddress
     * 退货收货地址
     * Required: false
     * Example Value: xxxxx
     */
    private $returnConsigneeAddress;

    /**
     * @param string $returnConsigneeAddress
     * 退货收货地址
     * Example Value: xxxxx
     */
    public function setReturnConsigneeAddress($returnConsigneeAddress)
    {
        $this->returnConsigneeAddress             = $returnConsigneeAddress;
        $this->apiParas["return_consignee_address"]  = $returnConsigneeAddress;
    }

    public function getReturnConsigneeAddress()
    {
        return $this->returnConsigneeAddress;
    }

    /**
     * @param string $returnConsigneeMobile
     * 退货收货人电话
     * Required: false
     * Example Value: 136xxxxxxxx
     */
    private $returnConsigneeMobile;

    /**
     * @param string $returnConsigneeMobile
     * 退货收货人电话
     * Example Value: 136xxxxxxxx
     */
    public function setReturnConsigneeMobile($returnConsigneeMobile)
    {
        $this->returnConsigneeMobile             = $returnConsigneeMobile;
        $this->apiParas["return_consignee_mobile"]  = $returnConsigneeMobile;
    }

    public function getReturnConsigneeMobile()
    {
        return $this->returnConsigneeMobile;
    }

    /**
     * @param string $addressProvince
     * 省
     * Required: true
     * Example Value: 北京
     */
    private $addressProvince;

    /**
     * @param string $addressProvince
     * 省
     * Example Value: 北京
     */
    public function setAddressProvince($addressProvince)
    {
        $this->addressProvince             = $addressProvince;
        $this->apiParas["address_province"]  = $addressProvince;
    }

    public function getAddressProvince()
    {
        return $this->addressProvince;
    }

    /**
     * @param string $addressCity
     * 市
     * Required: true
     * Example Value: 北京
     */
    private $addressCity;

    /**
     * @param string $addressCity
     * 市
     * Example Value: 北京
     */
    public function setAddressCity($addressCity)
    {
        $this->addressCity             = $addressCity;
        $this->apiParas["address_city"]  = $addressCity;
    }

    public function getAddressCity()
    {
        return $this->addressCity;
    }

    /**
     * @param string $addressCounty
     * 县
     * Required: true
     * Example Value: 昌平
     */
    private $addressCounty;

    /**
     * @param string $addressCounty
     * 县
     * Example Value: 昌平
     */
    public function setAddressCounty($addressCounty)
    {
        $this->addressCounty             = $addressCounty;
        $this->apiParas["address_county"]  = $addressCounty;
    }

    public function getAddressCounty()
    {
        return $this->addressCounty;
    }

    /**
     * @param string $addressTown
     * 镇
     * Required: true
     * Example Value: 昌平
     */
    private $addressTown;

    /**
     * @param string $addressTown
     * 镇
     * Example Value: 昌平
     */
    public function setAddressTown($addressTown)
    {
        $this->addressTown             = $addressTown;
        $this->apiParas["address_town"]  = $addressTown;
    }

    public function getAddressTown()
    {
        return $this->addressTown;
    }

    /**
     * @param string $picker
     * 取件人
     * Required: false
     * Example Value: 李四
     */
    private $picker;

    /**
     * @param string $picker
     * 取件人
     * Example Value: 李四
     */
    public function setPicker($picker)
    {
        $this->picker             = $picker;
        $this->apiParas["picker"]  = $picker;
    }

    public function getPicker()
    {
        return $this->picker;
    }

    /**
     * @param string $pickerCell
     * 取件人电话
     * Required: false
     * Example Value: 150xxxxxxxx
     */
    private $pickerCell;

    /**
     * @param string $pickerCell
     * 取件人电话
     * Example Value: 150xxxxxxxx
     */
    public function setPickerCell($pickerCell)
    {
        $this->pickerCell             = $pickerCell;
        $this->apiParas["picker_cell"]  = $pickerCell;
    }

    public function getPickerCell()
    {
        return $this->pickerCell;
    }

    /**
     * @param string $pikerID
     * 取件人身份证
     * Required: false
     * Example Value: 130225xxxxxxxxxxxxxxxx
     */
    private $pikerID;

    /**
     * @param string $pikerID
     * 取件人身份证
     * Example Value: 130225xxxxxxxxxxxxxxxx
     */
    public function setPikerID($pikerID)
    {
        $this->pikerID             = $pikerID;
        $this->apiParas["piker_id"]  = $pikerID;
    }

    public function getPikerID()
    {
        return $this->pikerID;
    }

    /**
     * @param string $transportWay
     * 运输方式
     * Required: false
     * Example Value: 顺风快递
     */
    private $transportWay;

    /**
     * @param string $transportWay
     * 运输方式
     * Example Value: 顺风快递
     */
    public function setTransportWay($transportWay)
    {
        $this->transportWay             = $transportWay;
        $this->apiParas["transport_way"]  = $transportWay;
    }

    public function getTransportWay()
    {
        return $this->transportWay;
    }

    /**
     * @param string $orderMark
     * 订单标记位
     * Required: true
     * Example Value: 010101010101010
     */
    private $orderMark;

    /**
     * @param string $orderMark
     * 订单标记位
     * Example Value: 010101010101010
     */
    public function setOrderMark($orderMark)
    {
        $this->orderMark             = $orderMark;
        $this->apiParas["order_mark"]  = $orderMark;
    }

    public function getOrderMark()
    {
        return $this->orderMark;
    }

    /**
     * @param string[] $joslGoodNo
     * JOSL商品编号
     * Required: true
     * Example Value: JGNO0658257920
     */
    private $joslGoodNo;

    /**
     * @param string[] $joslGoodNo
     * JOSL商品编号
     * Example Value: JGNO0658257920
     */
    public function setJoslGoodNo($joslGoodNo)
    {
        $this->joslGoodNo             = $joslGoodNo;
        $this->apiParas["josl_good_no"]  = $joslGoodNo;
    }

    public function getJoslGoodNo()
    {
        return $this->joslGoodNo;
    }

    /**
     * @param string[] $isvGoodNo
     * ISV商品编号
     * Required: false
     * Example Value: 1253036049
     */
    private $isvGoodNo;

    /**
     * @param string[] $isvGoodNo
     * ISV商品编号
     * Example Value: 1253036049
     */
    public function setIsvGoodNo($isvGoodNo)
    {
        $this->isvGoodNo             = $isvGoodNo;
        $this->apiParas["isv_good_no"]  = $isvGoodNo;
    }

    public function getIsvGoodNo()
    {
        return $this->isvGoodNo;
    }

    /**
     * @param int[] $outQty
     * 申请出库数量
     * Required: true
     * Example Value: 100
     */
    private $outQty;

    /**
     * @param int[] $outQty
     * 申请出库数量
     * Example Value: 100
     */
    public function setOutQty($outQty)
    {
        $this->outQty             = $outQty;
        $this->apiParas["out_qty"]  = $outQty;
    }

    public function getOutQty()
    {
        return $this->outQty;
    }

    /**
     * @param string[] $goodStatus
     * 商品状态（1：良品；2：残品；3：样品；4：新品）
     * Required: true
     * Example Value: 0
     */
    private $goodStatus;

    /**
     * @param string[] $goodStatus
     * 商品状态（1：良品；2：残品；3：样品；4：新品）
     * Example Value: 0
     */
    public function setGoodStatus($goodStatus)
    {
        $this->goodStatus             = $goodStatus;
        $this->apiParas["good_status"]  = $goodStatus;
    }

    public function getGoodStatus()
    {
        return $this->goodStatus;
    }

}