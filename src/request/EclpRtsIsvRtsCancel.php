<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 退供应商取消
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=942&apiName=jingdong.eclp.rts.isvRtsCancel
 * Class EclpRtsIsvRtsCancel
 * @package Jd\request
 */
class EclpRtsIsvRtsCancel
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.rts.isvRtsCancel";
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
     * @param string $rtsNum
     * 开放平台退供应商单号（EBS开头）;格式：EBS4XXXXXXXXXXX;最大长度50字符
     * Required: true
     * Example Value: EBS4XXXXXXXXXXX
     */
    private $rtsNum;

    /**
     * @param string $rtsNum
     * 开放平台退供应商单号（EBS开头）;格式：EBS4XXXXXXXXXXX;最大长度50字符
     * Example Value: EBS4XXXXXXXXXXX
     */
    public function setRtsNum($rtsNum)
    {
        $this->rtsNum             = $rtsNum;
        $this->apiParas["eclpRtsNo"]  = $rtsNum;
    }

    public function getRtsNum()
    {
        return $this->rtsNum;
    }

    /**
     * @param string $isvRtsNum
     * 商家系统退供应商单号；最大长度50字符
     * Required: false
     * Example Value: 20190101145501
     */
    private $isvRtsNum;

    /**
     * @param string $isvRtsNum
     * 商家系统退供应商单号；最大长度50字符
     * Example Value: 20190101145501
     */
    public function setIsvRtsNum($isvRtsNum)
    {
        $this->isvRtsNum             = $isvRtsNum;
        $this->apiParas["isvRtsNum"]  = $isvRtsNum;
    }

    public function getIsvRtsNum()
    {
        return $this->isvRtsNum;
    }

    /**
     * @param string $deptNo
     * 京东开放平台事业部编号；EBU开头；最大长度50字符
     * Required: false
     * Example Value: EBU4XXXXXXXXXXX
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 京东开放平台事业部编号；EBU开头；最大长度50字符
     * Example Value: EBU4XXXXXXXXXXX
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
     * @param string $deliveryMode
     * 退供单据类型；枚举值：1（良品非临期），2（残品非临期），6（待检品）；最大1个字符
     * Required: false
     * Example Value: 1
     */
    private $deliveryMode;

    /**
     * @param string $deliveryMode
     * 退供单据类型；枚举值：1（良品非临期），2（残品非临期），6（待检品）；最大1个字符
     * Example Value: 1
     */
    public function setDeliveryMode($deliveryMode)
    {
        $this->deliveryMode             = $deliveryMode;
        $this->apiParas["deliveryMode"]  = $deliveryMode;
    }

    public function getDeliveryMode()
    {
        return $this->deliveryMode;
    }

    /**
     * @param string $warehouseNo
     * 退库库房编号(出库库房编号，必须为事业部签署的正生效的物流服务下的库房)；最大50个字符
     * Required: false
     * Example Value: 98
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 退库库房编号(出库库房编号，必须为事业部签署的正生效的物流服务下的库房)；最大50个字符
     * Example Value: 98
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
     * @param string $supplierNo
     * 供应商编号；开放平台供应商编号；最大50字符
     * Required: false
     * Example Value: EMS4XXXXXXXXXXX
     */
    private $supplierNo;

    /**
     * @param string $supplierNo
     * 供应商编号；开放平台供应商编号；最大50字符
     * Example Value: EMS4XXXXXXXXXXX
     */
    public function setSupplierNo($supplierNo)
    {
        $this->supplierNo             = $supplierNo;
        $this->apiParas["supplierNo"]  = $supplierNo;
    }

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

    /**
     * @param string $receiver
     * 收货人姓名；最大50字符
     * Required: false
     * Example Value: 张三
     */
    private $receiver;

    /**
     * @param string $receiver
     * 收货人姓名；最大50字符
     * Example Value: 张三
     */
    public function setReceiver($receiver)
    {
        $this->receiver             = $receiver;
        $this->apiParas["receiver"]  = $receiver;
    }

    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param string $receiverPhone
     * 收货人电话；最大50字符
     * Required: false
     * Example Value: 13800000000
     */
    private $receiverPhone;

    /**
     * @param string $receiverPhone
     * 收货人电话；最大50字符
     * Example Value: 13800000000
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
     * @param string $email
     * 收货人邮箱；最大50字符
     * Required: false
     * Example Value: zhangsan@jd.com
     */
    private $email;

    /**
     * @param string $email
     * 收货人邮箱；最大50字符
     * Example Value: zhangsan@jd.com
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
     * @param string $province
     * 收货人地址（省）；最大50字符
     * Required: false
     * Example Value: 北京
     */
    private $province;

    /**
     * @param string $province
     * 收货人地址（省）；最大50字符
     * Example Value: 北京
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
     * @param string $city
     * 收货人地址（市）；最大50字符
     * Required: false
     * Example Value: 北京市
     */
    private $city;

    /**
     * @param string $city
     * 收货人地址（市）；最大50字符
     * Example Value: 北京市
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
     * @param string $county
     * 收货人地址（县）；最大50字符
     * Required: false
     * Example Value: 大兴区
     */
    private $county;

    /**
     * @param string $county
     * 收货人地址（县）；最大50字符
     * Example Value: 大兴区
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
     * @param string $town
     * 收货人地址（镇）；最大50字符
     * Required: false
     * Example Value: 旧宫镇
     */
    private $town;

    /**
     * @param string $town
     * 收货人地址（镇）；最大50字符
     * Example Value: 旧宫镇
     */
    public function setTown($town)
    {
        $this->town             = $town;
        $this->apiParas["town"]  = $town;
    }

    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param string $address
     * 收货人地址（具体收货地址）；最大50字符
     * Required: false
     * Example Value: 总部大厦C座1001
     */
    private $address;

    /**
     * @param string $address
     * 收货人地址（具体收货地址）；最大50字符
     * Example Value: 总部大厦C座1001
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
     * @param string $deptGoodsNo
     * 事业部商品编码；最大50字符
     * Required: false
     * Example Value: EMG4XXXXXXXXXXX
     */
    private $deptGoodsNo;

    /**
     * @param string $deptGoodsNo
     * 事业部商品编码；最大50字符
     * Example Value: EMG4XXXXXXXXXXX
     */
    public function setDeptGoodsNo($deptGoodsNo)
    {
        $this->deptGoodsNo             = $deptGoodsNo;
        $this->apiParas["deptGoodsNo"]  = $deptGoodsNo;
    }

    public function getDeptGoodsNo()
    {
        return $this->deptGoodsNo;
    }

    /**
     * @param string $goodsName
     * 事业部商品名称；最大50字符
     * Required: false
     * Example Value: 脉动青柠600ml*1*15
     */
    private $goodsName;

    /**
     * @param string $goodsName
     * 事业部商品名称；最大50字符
     * Example Value: 脉动青柠600ml*1*15
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName             = $goodsName;
        $this->apiParas["goodsName"]  = $goodsName;
    }

    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * @param string $quantity
     * 申请出库数量；正整数
     * Required: false
     * Example Value: 10
     */
    private $quantity;

    /**
     * @param string $quantity
     * 申请出库数量；正整数
     * Example Value: 10
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
     * @param string $realQuantity
     * 实际出库数量
     * Required: false
     * Example Value: 0
     */
    private $realQuantity;

    /**
     * @param string $realQuantity
     * 实际出库数量
     * Example Value: 0
     */
    public function setRealQuantity($realQuantity)
    {
        $this->realQuantity             = $realQuantity;
        $this->apiParas["realQuantity"]  = $realQuantity;
    }

    public function getRealQuantity()
    {
        return $this->realQuantity;
    }

    /**
     * @param string $goodsStatus
     * 商品状态；枚举值：1(良品）、2（残品)；如果值为空，则根据商品等级；最大10字符
     * Required: false
     * Example Value: 1
     */
    private $goodsStatus;

    /**
     * @param string $goodsStatus
     * 商品状态；枚举值：1(良品）、2（残品)；如果值为空，则根据商品等级；最大10字符
     * Example Value: 1
     */
    public function setGoodsStatus($goodsStatus)
    {
        $this->goodsStatus             = $goodsStatus;
        $this->apiParas["goodsStatus"]  = $goodsStatus;
    }

    public function getGoodsStatus()
    {
        return $this->goodsStatus;
    }

}