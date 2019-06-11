<?php

namespace JD\request;

/**
 * 退供应商下发(非备件库)
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=943&apiName=jingdong.eclp.rts.isvRtsTransfer
 * Class EclpRtsIsvRtsTransfer
 * @package Jd\request
 */
class EclpRtsIsvRtsTransfer
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.rts.isvRtsTransfer";
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
     * @param String $rtsNum
     * 开放平台退供应商单号（EBS开头）;格式：EBS4XXXXXXXXXXX;最大长度50字符
     * Required: false
     * Example Value: EBS4398046520233
     */
    private $rtsNum;

    /**
     * @param String $rtsNum
     * 开放平台退供应商单号（EBS开头）;格式：EBS4XXXXXXXXXXX;最大长度50字符
     * Example Value: EBS4398046520233
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
     * @param String $isvRtsNum
     * 商家系统退供应商单号；必填，商家系统单号必须唯一；最大长度50字符
     * Required: true
     * Example Value: 20190101145501
     */
    private $isvRtsNum;

    /**
     * @param String $isvRtsNum
     * 商家系统退供应商单号；必填，商家系统单号必须唯一；最大长度50字符
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
     * @param String $rtsType
     * 退供单据类型；枚举值：1（良品非临期），2（残品非临期），6（待检品）；不必填，填写后有效性校验（取值：1、2、6）；默认取值为1；最大1个字符
     * Required: false
     * Example Value: 1
     */
    private $rtsType;

    /**
     * @param String $rtsType
     * 退供单据类型；枚举值：1（良品非临期），2（残品非临期），6（待检品）；不必填，填写后有效性校验（取值：1、2、6）；默认取值为1；最大1个字符
     * Example Value: 1
     */
    public function setRtsType($rtsType)
    {
        $this->rtsType             = $rtsType;
        $this->apiParas["rtsType"]  = $rtsType;
    }

    public function getRtsType()
    {
        return $this->rtsType;
    }

    /**
     * @param String $deptNo
     * 京东开放平台事业部编号；EBU开头，特殊情况下不必填；最大长度50字符
     * Required: false
     * Example Value: EBU0000000000571
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 京东开放平台事业部编号；EBU开头，特殊情况下不必填；最大长度50字符
     * Example Value: EBU0000000000571
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
     * @param String $deliveryMode
     * 商家提货方式；枚举值：1（商家自提）、2（京东配送)；必填；存在数据有效性校验（取值范围：1、2）；必填；最大1个字符
     * Required: true
     * Example Value: 1
     */
    private $deliveryMode;

    /**
     * @param String $deliveryMode
     * 商家提货方式；枚举值：1（商家自提）、2（京东配送)；必填；存在数据有效性校验（取值范围：1、2）；必填；最大1个字符
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
     * @param String $warehouseNo
     * 退库库房编号(出库库房编号，必须为事业部签署的正生效的物流服务下的库房)；必填，有效性校验；最大50个字符
     * Required: true
     * Example Value: 98
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 退库库房编号(出库库房编号，必须为事业部签署的正生效的物流服务下的库房)；必填，有效性校验；最大50个字符
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
     * @param String $supplierNo
     * 供应商编号(开放平台供应商编号，若为空，默认为事业部本身)；最大长度50字符
     * Required: false
     * Example Value: EMS4398046512427
     */
    private $supplierNo;

    /**
     * @param String $supplierNo
     * 供应商编号(开放平台供应商编号，若为空，默认为事业部本身)；最大长度50字符
     * Example Value: EMS4398046512427
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
     * @param String $receiver
     * 收货人姓名；收货人信息，若为空，取供应商对应的联系人信息；最大50字符
     * Required: false
     * Example Value: 张三
     */
    private $receiver;

    /**
     * @param String $receiver
     * 收货人姓名；收货人信息，若为空，取供应商对应的联系人信息；最大50字符
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
     * 收货人电话；收货人信息，若为空，取供应商对应的联系人信息；最大50字符
     * Required: false
     * Example Value: 13800000000
     */
    private $receiverPhone;

    /**
     * @param String $receiverPhone
     * 收货人电话；收货人信息，若为空，取供应商对应的联系人信息；最大50字符
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
     * @param String $email
     * 收货人电子邮件；最大50字符
     * Required: false
     * Example Value: zhangsan@jd.com
     */
    private $email;

    /**
     * @param String $email
     * 收货人电子邮件；最大50字符
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
     * 收货地址(省)，当商家提货方式为2（京东配送），该字段必填；最大50字符
     * Required: false
     * Example Value: 北京
     */
    private $province;

    /**
     * @param String $province
     * 收货地址(省)，当商家提货方式为2（京东配送），该字段必填；最大50字符
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
     * 收货地址(市)，当商家提货方式为2（京东配送），该字段必填；最大50字符
     * Required: false
     * Example Value: 北京
     */
    private $city;

    /**
     * @param String $city
     * 收货地址(市)，当商家提货方式为2（京东配送），该字段必填；最大50字符
     * Example Value: 北京
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
     * 收货地址(区/县)，当商家提货方式为2（京东配送），该字段必填；最大50字符
     * Required: false
     * Example Value: 大兴区
     */
    private $county;

    /**
     * @param String $county
     * 收货地址(区/县)，当商家提货方式为2（京东配送），该字段必填；最大50字符
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
     * 收货地址(街道/乡镇)，当商家提货方式为2（京东配送），该字段必填；最大50字符
     * Required: false
     * Example Value: 旧宫镇
     */
    private $town;

    /**
     * @param String $town
     * 收货地址(街道/乡镇)，当商家提货方式为2（京东配送），该字段必填；最大50字符
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
     * 详细地址到门牌号；当商家提货方式为2（京东配送），该字段必填；最大200字符
     * Required: false
     * Example Value: 京东总部大厦C座1001
     */
    private $address;

    /**
     * @param String $address
     * 详细地址到门牌号；当商家提货方式为2（京东配送），该字段必填；最大200字符
     * Example Value: 京东总部大厦C座1001
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
     * @param String $createUser
     * 单据创建人；最大50字符
     * Required: false
     * Example Value: 李四
     */
    private $createUser;

    /**
     * @param String $createUser
     * 单据创建人；最大50字符
     * Example Value: 李四
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
     * @param String $packFlag
     * 是否按款/sku装箱 ；枚举值：0 （否），1 （是）；最大1字符
     * Required: false
     * Example Value: 0
     */
    private $packFlag;

    /**
     * @param String $packFlag
     * 是否按款/sku装箱 ；枚举值：0 （否），1 （是）；最大1字符
     * Example Value: 0
     */
    public function setPackFlag($packFlag)
    {
        $this->packFlag             = $packFlag;
        $this->apiParas["packFlag"]  = $packFlag;
    }

    public function getPackFlag()
    {
        return $this->packFlag;
    }

    /**
     * @param String $allowLack
     * 是否允许缺量；枚举值：0（否）、1（是）； 默认取：1（允许缺量）；最大1个字符
     * Required: false
     * Example Value: 1
     */
    private $allowLack;

    /**
     * @param String $allowLack
     * 是否允许缺量；枚举值：0（否）、1（是）； 默认取：1（允许缺量）；最大1个字符
     * Example Value: 1
     */
    public function setAllowLack($allowLack)
    {
        $this->allowLack             = $allowLack;
        $this->apiParas["allowLack"]  = $allowLack;
    }

    public function getAllowLack()
    {
        return $this->allowLack;
    }

    /**
     * @param String $logicParam
     * 逻辑库位(公司,仓别)；最大50个字符
     * Required: false
     * Example Value: 324,WH000852
     */
    private $logicParam;

    /**
     * @param String $logicParam
     * 逻辑库位(公司,仓别)；最大50个字符
     * Example Value: 324,WH000852
     */
    public function setLogicParam($logicParam)
    {
        $this->logicParam             = $logicParam;
        $this->apiParas["logicParam"]  = $logicParam;
    }

    public function getLogicParam()
    {
        return $this->logicParam;
    }

    /**
     * @param String $deptGoodsNo
     * 事业部商品编号；EMG开头；有效性校验；最大50个字符
     * Required: true
     * Example Value: EMG4398059819535
     */
    private $deptGoodsNo;

    /**
     * @param String $deptGoodsNo
     * 事业部商品编号；EMG开头；有效性校验；最大50个字符
     * Example Value: EMG4398059819535
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
     * @param String $goodsName
     * 事业部商品名称；最大50个字符
     * Required: false
     * Example Value: 脉动青柠600ml*1*15
     */
    private $goodsName;

    /**
     * @param String $goodsName
     * 事业部商品名称；最大50个字符
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
     * @param String $quantity
     * 申请退货数量；正整数
     * Required: true
     * Example Value: 10
     */
    private $quantity;

    /**
     * @param String $quantity
     * 申请退货数量；正整数
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
     * @param String $realQuantity
     * 实际退货数量
     * Required: false
     * Example Value: 0
     */
    private $realQuantity;

    /**
     * @param String $realQuantity
     * 实际退货数量
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
     * @param String $goodsStatus
     * 商品状态；枚举值：1(良品）、2（残品)；如果值为空，则根据商品等级；最大10字符
     * Required: false
     * Example Value: 1
     */
    private $goodsStatus;

    /**
     * @param String $goodsStatus
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

    /**
     * @param String $goodsLevel
     * 商品等级，例如100良品，200残品，其他枚举视商家商品等级个性化配置决定；若商品状态为空，该字段必填；最大10字符
     * Required: false
     * Example Value: 100
     */
    private $goodsLevel;

    /**
     * @param String $goodsLevel
     * 商品等级，例如100良品，200残品，其他枚举视商家商品等级个性化配置决定；若商品状态为空，该字段必填；最大10字符
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
     * @param String $lotProductionBatchNo
     * 生产批号，指定批属性退供；该字段已过期，不建议使用，统一在batAttrListJson字段以JSON格式传入；最大50字符
     * Required: false
     * Example Value: 2019-01-01
     */
    private $lotProductionBatchNo;

    /**
     * @param String $lotProductionBatchNo
     * 生产批号，指定批属性退供；该字段已过期，不建议使用，统一在batAttrListJson字段以JSON格式传入；最大50字符
     * Example Value: 2019-01-01
     */
    public function setLotProductionBatchNo($lotProductionBatchNo)
    {
        $this->lotProductionBatchNo             = $lotProductionBatchNo;
        $this->apiParas["lotProductionBatchNo"]  = $lotProductionBatchNo;
    }

    public function getLotProductionBatchNo()
    {
        return $this->lotProductionBatchNo;
    }

    /**
     * @param String $lotProductionDate
     * 生产日期，指定批属性退供；该字段已过期，不建议使用，统一在batAttrListJson字段以JSON格式传入；最大50字符
     * Required: false
     * Example Value: 2019-01-31
     */
    private $lotProductionDate;

    /**
     * @param String $lotProductionDate
     * 生产日期，指定批属性退供；该字段已过期，不建议使用，统一在batAttrListJson字段以JSON格式传入；最大50字符
     * Example Value: 2019-01-31
     */
    public function setLotProductionDate($lotProductionDate)
    {
        $this->lotProductionDate             = $lotProductionDate;
        $this->apiParas["lotProductionDate"]  = $lotProductionDate;
    }

    public function getLotProductionDate()
    {
        return $this->lotProductionDate;
    }

    /**
     * @param String $lotSupplier
     * 供应商，指定批属性退供；该字段已过期，不建议使用，统一在batAttrListJson字段以JSON格式传入；最大50字符
     * Required: false
     * Example Value: 京东
     */
    private $lotSupplier;

    /**
     * @param String $lotSupplier
     * 供应商，指定批属性退供；该字段已过期，不建议使用，统一在batAttrListJson字段以JSON格式传入；最大50字符
     * Example Value: 京东
     */
    public function setLotSupplier($lotSupplier)
    {
        $this->lotSupplier             = $lotSupplier;
        $this->apiParas["lotSupplier"]  = $lotSupplier;
    }

    public function getLotSupplier()
    {
        return $this->lotSupplier;
    }

    /**
     * @param String $batAttrListJson
     * 批属性字符串；标准的JSON字符串，其中逗号用_$_替换（示例的单引号替换为双引号）；批属性KEY的值为枚举：isPo（采购单号）, production_date_lot（生产日期）, expiration_date_lot（过期日期), isSupplier(供应商),isRcvDate(收货日期),isPLU(plu管理),isLogisticCompany(物流公司),isOrigin(原产地),isLot(批号/生产批号),isManufacturer（制造商）,isPackageBatch（包装批号）,isBoxNo（箱号）,isNoSale（不可售）,gysgL（供应商管理）,isStore(门店);最大500字符
     * Required: false
     * Example Value: [{'batchKey':'isPackageBatch'_$_'batchValue':'2018090411410824'}_$_{'batchKey':'isLot'_$_'batchValue':'2019090411410824'}_$_{'batchKey':'production_date_lot'_$_'batchValue':'2018-09-04'}_$_{'batchKey':'isPo'_$_'batchValue':'20190904121345'}]
     */
    private $batAttrListJson;

    /**
     * @param String $batAttrListJson
     * 批属性字符串；标准的JSON字符串，其中逗号用_$_替换（示例的单引号替换为双引号）；批属性KEY的值为枚举：isPo（采购单号）, production_date_lot（生产日期）, expiration_date_lot（过期日期), isSupplier(供应商),isRcvDate(收货日期),isPLU(plu管理),isLogisticCompany(物流公司),isOrigin(原产地),isLot(批号/生产批号),isManufacturer（制造商）,isPackageBatch（包装批号）,isBoxNo（箱号）,isNoSale（不可售）,gysgL（供应商管理）,isStore(门店);最大500字符
     * Example Value: [{'batchKey':'isPackageBatch'_$_'batchValue':'2018090411410824'}_$_{'batchKey':'isLot'_$_'batchValue':'2019090411410824'}_$_{'batchKey':'production_date_lot'_$_'batchValue':'2018-09-04'}_$_{'batchKey':'isPo'_$_'batchValue':'20190904121345'}]
     */
    public function setBatAttrListJson($batAttrListJson)
    {
        $this->batAttrListJson             = $batAttrListJson;
        $this->apiParas["batAttrListJson"]  = $batAttrListJson;
    }

    public function getBatAttrListJson()
    {
        return $this->batAttrListJson;
    }

}