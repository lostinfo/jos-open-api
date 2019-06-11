<?php

namespace JD\request;

/**
 * 报废出库新建
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2769&apiName=jingdong.eclp.inside.addUlOrder
 * Class EclpInsideAddUlOrder
 * @package Jd\request
 */
class EclpInsideAddUlOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.inside.addUlOrder";
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
     * @param String $outUlNo
     * 商家报废申请单号,必填项，最大长度50
     * Required: true
     * Example Value: OCN000000001
     */
    private $outUlNo;

    /**
     * @param String $outUlNo
     * 商家报废申请单号,必填项，最大长度50
     * Example Value: OCN000000001
     */
    public function setOutUlNo($outUlNo)
    {
        $this->outUlNo             = $outUlNo;
        $this->apiParas["outUlNo"]  = $outUlNo;
    }

    public function getOutUlNo()
    {
        return $this->outUlNo;
    }

    /**
     * @param String $sellerNo
     * 开放平台商家编码,必填项，以ECP开头，最大长度50
     * Required: true
     * Example Value: ECP0000039
     */
    private $sellerNo;

    /**
     * @param String $sellerNo
     * 开放平台商家编码,必填项，以ECP开头，最大长度50
     * Example Value: ECP0000039
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
     * @param String $warehouseNo
     * 开放平台入库库房编号,必填项，最大长度30
     * Required: true
     * Example Value: 110005442
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 开放平台入库库房编号,必填项，最大长度30
     * Example Value: 110005442
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
     * @param String $deptNo
     * 开放平台事业部编码，以EBU开头，最大长度50
     * Required: true
     * Example Value: EBU000000012
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 开放平台事业部编码，以EBU开头，最大长度50
     * Example Value: EBU000000012
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
     * @param  $deliveryMode
     * 提货方式(1、自提。2、京东配送) 默认1
     * Required: true
     * Example Value: 2
     */
    private $deliveryMode;

    /**
     * @param  $deliveryMode
     * 提货方式(1、自提。2、京东配送) 默认1
     * Example Value: 2
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
     * @param  $ulType
     * 处理方式(1、京东代为销毁）
     * Required: true
     * Example Value: 1
     */
    private $ulType;

    /**
     * @param  $ulType
     * 处理方式(1、京东代为销毁）
     * Example Value: 1
     */
    public function setUlType($ulType)
    {
        $this->ulType             = $ulType;
        $this->apiParas["ulType"]  = $ulType;
    }

    public function getUlType()
    {
        return $this->ulType;
    }

    /**
     * @param  $allowReturnDest
     * 是否需要回传销毁资料（1、是；0、否，默认值为0）
     * Required: false
     * Example Value: 1
     */
    private $allowReturnDest;

    /**
     * @param  $allowReturnDest
     * 是否需要回传销毁资料（1、是；0、否，默认值为0）
     * Example Value: 1
     */
    public function setAllowReturnDest($allowReturnDest)
    {
        $this->allowReturnDest             = $allowReturnDest;
        $this->apiParas["allowReturnDest"]  = $allowReturnDest;
    }

    public function getAllowReturnDest()
    {
        return $this->allowReturnDest;
    }

    /**
     * @param  $allowLackDest
     * 是否允许缺量销毁（1、是；0、否，默认值为1）
     * Required: false
     * Example Value: 1
     */
    private $allowLackDest;

    /**
     * @param  $allowLackDest
     * 是否允许缺量销毁（1、是；0、否，默认值为1）
     * Example Value: 1
     */
    public function setAllowLackDest($allowLackDest)
    {
        $this->allowLackDest             = $allowLackDest;
        $this->apiParas["allowLackDest"]  = $allowLackDest;
    }

    public function getAllowLackDest()
    {
        return $this->allowLackDest;
    }

    /**
     * @param  $destMethod
     * 销毁方式（1、粉碎；2、焚烧；3、填埋；4、丢弃；5、其他）
     * Required: false
     * Example Value: 1
     */
    private $destMethod;

    /**
     * @param  $destMethod
     * 销毁方式（1、粉碎；2、焚烧；3、填埋；4、丢弃；5、其他）
     * Example Value: 1
     */
    public function setDestMethod($destMethod)
    {
        $this->destMethod             = $destMethod;
        $this->apiParas["destMethod"]  = $destMethod;
    }

    public function getDestMethod()
    {
        return $this->destMethod;
    }

    /**
     * @param  $destReason
     * 报废原因(1、途损；2、库损；3、过期；4、其他) 默认值为4
     * Required: false
     * Example Value: 4
     */
    private $destReason;

    /**
     * @param  $destReason
     * 报废原因(1、途损；2、库损；3、过期；4、其他) 默认值为4
     * Example Value: 4
     */
    public function setDestReason($destReason)
    {
        $this->destReason             = $destReason;
        $this->apiParas["destReason"]  = $destReason;
    }

    public function getDestReason()
    {
        return $this->destReason;
    }

    /**
     * @param String $destCompNo
     * 销毁公司(开放平台注册的销毁公司编号）
     * Required: false
     * Example Value: NO038238293838
     */
    private $destCompNo;

    /**
     * @param String $destCompNo
     * 销毁公司(开放平台注册的销毁公司编号）
     * Example Value: NO038238293838
     */
    public function setDestCompNo($destCompNo)
    {
        $this->destCompNo             = $destCompNo;
        $this->apiParas["destCompNo"]  = $destCompNo;
    }

    public function getDestCompNo()
    {
        return $this->destCompNo;
    }

    /**
     * @param String $receiver
     * 收货人，最大长度30
     * Required: false
     * Example Value: 张三
     */
    private $receiver;

    /**
     * @param String $receiver
     * 收货人，最大长度30
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
     * @param String $receiverPhone
     * 收货人联系方式，最大长度20
     * Required: false
     * Example Value: 13888888888
     */
    private $receiverPhone;

    /**
     * @param String $receiverPhone
     * 收货人联系方式，最大长度20
     * Example Value: 13888888888
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
     * @param String $email
     * 收货人邮件，最大长度50
     * Required: false
     * Example Value: zhangsan@jd.com
     */
    private $email;

    /**
     * @param String $email
     * 收货人邮件，最大长度50
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
     * @param String $province
     * 收货人地址，省，最大长度25
     * Required: false
     * Example Value: 北京
     */
    private $province;

    /**
     * @param String $province
     * 收货人地址，省，最大长度25
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
     * @param String $city
     * 收货人地址，市，最大长度25
     * Required: false
     * Example Value: 北京市
     */
    private $city;

    /**
     * @param String $city
     * 收货人地址，市，最大长度25
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
     * @param String $county
     * 收货人地址，县，最大长度25
     * Required: false
     * Example Value: 大兴区
     */
    private $county;

    /**
     * @param String $county
     * 收货人地址，县，最大长度25
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
     * @param String $town
     * 收货人地址，镇，最大长度25
     * Required: false
     * Example Value: 旧宫镇
     */
    private $town;

    /**
     * @param String $town
     * 收货人地址，镇，最大长度25
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
     * @param String $address
     * 收货人地址，详细地址，最大长度100
     * Required: false
     * Example Value: 朝林广场A座
     */
    private $address;

    /**
     * @param String $address
     * 收货人地址，详细地址，最大长度100
     * Example Value: 朝林广场A座
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
     * @param String $backEmail
     * 报废资料回传邮箱，最大长度50
     * Required: false
     * Example Value: lisi@jd.com
     */
    private $backEmail;

    /**
     * @param String $backEmail
     * 报废资料回传邮箱，最大长度50
     * Example Value: lisi@jd.com
     */
    public function setBackEmail($backEmail)
    {
        $this->backEmail             = $backEmail;
        $this->apiParas["backEmail"]  = $backEmail;
    }

    public function getBackEmail()
    {
        return $this->backEmail;
    }

    /**
     * @param String $createUser
     * 创建人，最大长度20
     * Required: false
     * Example Value: 张三
     */
    private $createUser;

    /**
     * @param String $createUser
     * 创建人，最大长度20
     * Example Value: 张三
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
     * @param String $createTime
     * 创建时间，格式：yyyy-MM-dd hh:mm:ss
     * Required: false
     * Example Value: 2017-02-12 11:23:42
     */
    private $createTime;

    /**
     * @param String $createTime
     * 创建时间，格式：yyyy-MM-dd hh:mm:ss
     * Example Value: 2017-02-12 11:23:42
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
     * @param String $remark
     * 备注，最大长度200
     * Required: false
     * Example Value: 我是备注
     */
    private $remark;

    /**
     * @param String $remark
     * 备注，最大长度200
     * Example Value: 我是备注
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
     * @param String[] $orderLine
     * 行号, 该字段为非必填项，最大长度50
     * Required: false
     * Example Value: 100
     */
    private $orderLine;

    /**
     * @param String[] $orderLine
     * 行号, 该字段为非必填项，最大长度50
     * Example Value: 100
     */
    public function setOrderLine($orderLine)
    {
        $this->orderLine             = $orderLine;
        $this->apiParas["orderLine"]  = $orderLine;
    }

    public function getOrderLine()
    {
        return $this->orderLine;
    }

    /**
     * @param String[] $goodsNo
     * 事业部商品编码, 该字段为必填项，以EMG开头，最大长度50
     * Required: true
     * Example Value: EMG000000270
     */
    private $goodsNo;

    /**
     * @param String[] $goodsNo
     * 事业部商品编码, 该字段为必填项，以EMG开头，最大长度50
     * Example Value: EMG000000270
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
     * @param String[] $goodsName
     * 事业部商品名称，最大长度100
     * Required: false
     * Example Value: 棒约美2014新品中老年春秋装外套开衫小西装职业中年人妈妈女装 烫金西装浅咖啡 XXL
     */
    private $goodsName;

    /**
     * @param String[] $goodsName
     * 事业部商品名称，最大长度100
     * Example Value: 棒约美2014新品中老年春秋装外套开衫小西装职业中年人妈妈女装 烫金西装浅咖啡 XXL
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
     * @param Number[] $planQty
     * 报废数量，该字段为必填项，正整数
     * Required: true
     * Example Value: 10
     */
    private $planQty;

    /**
     * @param Number[] $planQty
     * 报废数量，该字段为必填项，正整数
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
     * @param String[] $goodsLevel
     * 商品等级,默认为良品,商品等级分为100:良品;200:残品;400脏品
     * Required: false
     * Example Value: 100
     */
    private $goodsLevel;

    /**
     * @param String[] $goodsLevel
     * 商品等级,默认为良品,商品等级分为100:良品;200:残品;400脏品
     * Example Value: 100
     */
    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel             = $goodsLevel;
        $this->apiParas["goodsLevel"]  = $goodsLevel;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    /**
     * @param String[] $ulItemBatchRequest
     * 商品批属性信息，枚举 isSupplier(供应商) isManufacturer(制造商) isLot(批号) production_date_lot(生产日期) expiration_date_lot(到期日期) isRcvDate(收货日期) isPo(采购单号) isPackageBatch(包装批号)
     * Required: false
     * Example Value: [{'batchAttrKey':'production_date_lot'_$_'batchAttrVal':'2016-10-10'}_$_{'batchAttrKey':'isSupplier'_$_'batchAttrVal':'京东'}]（说明：需要将单引号改为双引号）
     */
    private $ulItemBatchRequest;

    /**
     * @param String[] $ulItemBatchRequest
     * 商品批属性信息，枚举 isSupplier(供应商) isManufacturer(制造商) isLot(批号) production_date_lot(生产日期) expiration_date_lot(到期日期) isRcvDate(收货日期) isPo(采购单号) isPackageBatch(包装批号)
     * Example Value: [{'batchAttrKey':'production_date_lot'_$_'batchAttrVal':'2016-10-10'}_$_{'batchAttrKey':'isSupplier'_$_'batchAttrVal':'京东'}]（说明：需要将单引号改为双引号）
     */
    public function setUlItemBatchRequest($ulItemBatchRequest)
    {
        $this->ulItemBatchRequest             = $ulItemBatchRequest;
        $this->apiParas["ulItemBatchRequest"]  = $ulItemBatchRequest;
    }

    public function getUlItemBatchRequest()
    {
        return $this->ulItemBatchRequest;
    }

}