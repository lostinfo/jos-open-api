<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 客户订单
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=159&apiName=jingdong.logistics.order.add
 * Class LogisticsOrderAdd
 * @package Jd\request
 */
class LogisticsOrderAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.order.add";
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
     * @param string $sellerId
     * 商家编号
     * Required: true
     * Example Value: 
     */
    private $sellerId;

    /**
     * @param string $sellerId
     * 商家编号
     * Example Value: 
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId             = $sellerId;
        $this->apiParas["channels_seller_no"]  = $sellerId;
    }

    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * @param string $outboundNo
     * 出库单号
     * Required: true
     * Example Value: 
     */
    private $outboundNo;

    /**
     * @param string $outboundNo
     * 出库单号
     * Example Value: 
     */
    public function setOutboundNo($outboundNo)
    {
        $this->outboundNo             = $outboundNo;
        $this->apiParas["channels_outbound_no"]  = $outboundNo;
    }

    public function getOutboundNo()
    {
        return $this->outboundNo;
    }

    /**
     * @param string $warehouseNo
     * 生产库房编号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 生产库房编号
     * Example Value: 
     */
    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo             = $warehouseNo;
        $this->apiParas["warehouse_no"]  = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    /**
     * @param string $carriersId
     * 承运商编号ID
     * Required: true
     * Example Value: 
     */
    private $carriersId;

    /**
     * @param string $carriersId
     * 承运商编号ID
     * Example Value: 
     */
    public function setCarriersId($carriersId)
    {
        $this->carriersId             = $carriersId;
        $this->apiParas["carriers_id"]  = $carriersId;
    }

    public function getCarriersId()
    {
        return $this->carriersId;
    }

    /**
     * @param string $expectDate
     * 期望发货日期(yyyy-mm-dd hh:mm:ss)
     * Required: false
     * Example Value: 
     */
    private $expectDate;

    /**
     * @param string $expectDate
     * 期望发货日期(yyyy-mm-dd hh:mm:ss)
     * Example Value: 
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
     * @param string $orderNo
     * 平台销售单号
     * Required: false
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 平台销售单号
     * Example Value: 
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["order_no"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param string $shopNo
     * 平台店铺编号
     * Required: false
     * Example Value: 
     */
    private $shopNo;

    /**
     * @param string $shopNo
     * 平台店铺编号
     * Example Value: 
     */
    public function setShopNo($shopNo)
    {
        $this->shopNo             = $shopNo;
        $this->apiParas["shop_no"]  = $shopNo;
    }

    public function getShopNo()
    {
        return $this->shopNo;
    }

    /**
     * @param string $consigneeName
     * 收货人姓名
     * Required: true
     * Example Value: 
     */
    private $consigneeName;

    /**
     * @param string $consigneeName
     * 收货人姓名
     * Example Value: 
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
     * @param string $addressProvince
     * 收货人省
     * Required: true
     * Example Value: 
     */
    private $addressProvince;

    /**
     * @param string $addressProvince
     * 收货人省
     * Example Value: 
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
     * 收货人市
     * Required: true
     * Example Value: 
     */
    private $addressCity;

    /**
     * @param string $addressCity
     * 收货人市
     * Example Value: 
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
     * 收货人县
     * Required: true
     * Example Value: 
     */
    private $addressCounty;

    /**
     * @param string $addressCounty
     * 收货人县
     * Example Value: 
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
     * 收货人镇
     * Required: true
     * Example Value: 
     */
    private $addressTown;

    /**
     * @param string $addressTown
     * 收货人镇
     * Example Value: 
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
     * @param string $address
     * 收货人地址
     * Required: true
     * Example Value: 
     */
    private $address;

    /**
     * @param string $address
     * 收货人地址
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
     * @param string $zipCode
     * 收货人邮编
     * Required: false
     * Example Value: 
     */
    private $zipCode;

    /**
     * @param string $zipCode
     * 收货人邮编
     * Example Value: 
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
     * 收货人电话
     * Required: true
     * Example Value: 
     */
    private $phone;

    /**
     * @param string $phone
     * 收货人电话
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
     * @param string $mobile
     * 收货人手机
     * Required: true
     * Example Value: 
     */
    private $mobile;

    /**
     * @param string $mobile
     * 收货人手机
     * Example Value: 
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
     * @param int $receivable
     * 应收金额
     * Required: true
     * Example Value: 
     */
    private $receivable;

    /**
     * @param int $receivable
     * 应收金额
     * Example Value: 
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
     * @param string $email
     * email
     * Required: false
     * Example Value: 
     */
    private $email;

    /**
     * @param string $email
     * email
     * Example Value: 
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
     * Example Value: 
     */
    private $buyerRemark;

    /**
     * @param string $buyerRemark
     * 买家留言
     * Example Value: 
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
     * Example Value: 
     */
    private $verifyRemark;

    /**
     * @param string $verifyRemark
     * 审核备注
     * Example Value: 
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
     * @param string $returnConsigneeAddress
     * 退货收货人地址
     * Required: false
     * Example Value: 
     */
    private $returnConsigneeAddress;

    /**
     * @param string $returnConsigneeAddress
     * 退货收货人地址
     * Example Value: 
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
     * @param string $returnConsigneeName
     * 退货收货人姓名
     * Required: false
     * Example Value: 
     */
    private $returnConsigneeName;

    /**
     * @param string $returnConsigneeName
     * 退货收货人姓名
     * Example Value: 
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
     * @param string $returnConsigneeContact
     * 退货收货人电话
     * Required: false
     * Example Value: 
     */
    private $returnConsigneeContact;

    /**
     * @param string $returnConsigneeContact
     * 退货收货人电话
     * Example Value: 
     */
    public function setReturnConsigneeContact($returnConsigneeContact)
    {
        $this->returnConsigneeContact             = $returnConsigneeContact;
        $this->apiParas["return_consignee_phone"]  = $returnConsigneeContact;
    }

    public function getReturnConsigneeContact()
    {
        return $this->returnConsigneeContact;
    }

    /**
     * @param string $stationNo
     * 站点编号
     * Required: false
     * Example Value: 
     */
    private $stationNo;

    /**
     * @param string $stationNo
     * 站点编号
     * Example Value: 
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
     * Example Value: 
     */
    private $stationName;

    /**
     * @param string $stationName
     * 站点名称
     * Example Value: 
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
     * @param string $orderMark
     * 订单标记位:50位的数字串，第1位为1代表货到付款
     * Required: true
     * Example Value: 
     */
    private $orderMark;

    /**
     * @param string $orderMark
     * 订单标记位:50位的数字串，第1位为1代表货到付款
     * Example Value: 
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
     * @param string $spSource
     * 销售平台来源 类型：0010001 京东，  0010002 天猫，  0010003 苏宁，  0010004 亚马逊中国，  0020001 ChinaSkin，  0030001 其他小型销售平台  如果选择京东平台，则order_no字段必须填写京东平台的订单号
     * Required: true
     * Example Value: 
     */
    private $spSource;

    /**
     * @param string $spSource
     * 销售平台来源 类型：0010001 京东，  0010002 天猫，  0010003 苏宁，  0010004 亚马逊中国，  0020001 ChinaSkin，  0030001 其他小型销售平台  如果选择京东平台，则order_no字段必须填写京东平台的订单号
     * Example Value: 
     */
    public function setSpSource($spSource)
    {
        $this->spSource             = $spSource;
        $this->apiParas["shop_order_source"]  = $spSource;
    }

    public function getSpSource()
    {
        return $this->spSource;
    }

    /**
     * @param string $spOrderTime
     * 销售平台的下单时间:yyyy-mm-dd hh:mm:ss
     * Required: false
     * Example Value: 
     */
    private $spOrderTime;

    /**
     * @param string $spOrderTime
     * 销售平台的下单时间:yyyy-mm-dd hh:mm:ss
     * Example Value: 
     */
    public function setSpOrderTime($spOrderTime)
    {
        $this->spOrderTime             = $spOrderTime;
        $this->apiParas["shop_order_create_time"]  = $spOrderTime;
    }

    public function getSpOrderTime()
    {
        return $this->spOrderTime;
    }

    /**
     * @param string $picker
     * 取件人
     * Required: false
     * Example Value: 
     */
    private $picker;

    /**
     * @param string $picker
     * 取件人
     * Example Value: 
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
     * @param string $pickerCall
     * 取件人电话
     * Required: false
     * Example Value: 
     */
    private $pickerCall;

    /**
     * @param string $pickerCall
     * 取件人电话
     * Example Value: 
     */
    public function setPickerCall($pickerCall)
    {
        $this->pickerCall             = $pickerCall;
        $this->apiParas["picker_call"]  = $pickerCall;
    }

    public function getPickerCall()
    {
        return $this->pickerCall;
    }

    /**
     * @param string $pikerId
     * 取件人身份证
     * Required: false
     * Example Value: 
     */
    private $pikerId;

    /**
     * @param string $pikerId
     * 取件人身份证
     * Example Value: 
     */
    public function setPikerId($pikerId)
    {
        $this->pikerId             = $pikerId;
        $this->apiParas["piker_id"]  = $pikerId;
    }

    public function getPikerId()
    {
        return $this->pikerId;
    }

    /**
     * @param string $packType
     * 包装类型
     * Required: false
     * Example Value: 
     */
    private $packType;

    /**
     * @param string $packType
     * 包装类型
     * Example Value: 
     */
    public function setPackType($packType)
    {
        $this->packType             = $packType;
        $this->apiParas["pack_type"]  = $packType;
    }

    public function getPackType()
    {
        return $this->packType;
    }

    /**
     * @param string[] $goodsNo
     * JOSL商品编号
     * Required: true
     * Example Value: 
     */
    private $goodsNo;

    /**
     * @param string[] $goodsNo
     * JOSL商品编号
     * Example Value: 
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goods_no"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param string[] $skuId
     * ISV商品编号
     * Required: false
     * Example Value: 
     */
    private $skuId;

    /**
     * @param string[] $skuId
     * ISV商品编号
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_id"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param string[] $shopGoodsNo
     * 淘宝的商品编号
     * Required: false
     * Example Value: 
     */
    private $shopGoodsNo;

    /**
     * @param string[] $shopGoodsNo
     * 淘宝的商品编号
     * Example Value: 
     */
    public function setShopGoodsNo($shopGoodsNo)
    {
        $this->shopGoodsNo             = $shopGoodsNo;
        $this->apiParas["shopGoodsNo"]  = $shopGoodsNo;
    }

    public function getShopGoodsNo()
    {
        return $this->shopGoodsNo;
    }

    /**
     * @param int[] $quantity
     * 申请出库数量
     * Required: true
     * Example Value: 
     */
    private $quantity;

    /**
     * @param int[] $quantity
     * 申请出库数量
     * Example Value: 
     */
    public function setQuantity($quantity)
    {
        $this->quantity             = $quantity;
        $this->apiParas["qty"]  = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string[] $goodsStatus
     * 商品状态（1：良品；2：残品；3：样品；4：新品）
     * Required: true
     * Example Value: 
     */
    private $goodsStatus;

    /**
     * @param string[] $goodsStatus
     * 商品状态（1：良品；2：残品；3：样品；4：新品）
     * Example Value: 
     */
    public function setGoodsStatus($goodsStatus)
    {
        $this->goodsStatus             = $goodsStatus;
        $this->apiParas["goods_status"]  = $goodsStatus;
    }

    public function getGoodsStatus()
    {
        return $this->goodsStatus;
    }

}