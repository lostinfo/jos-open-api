<?php

namespca Lostinfo\JosOpenApi;

/**
 * 大件纯配运单导入
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2244&apiName=jingdong.eclp.co.transportLasWayBill
 * Class EclpCoTransportLasWayBill
 * @package Jd\request
 */
class EclpCoTransportLasWayBill
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.transportLasWayBill";
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
     * @param string $deptNo
     * 事业部编号；EBU开头；如事业部信息报错请查看当前事业部编码是否合法；最大长度：50
     * Required: true
     * Example Value: EBU0000000000571
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号；EBU开头；如事业部信息报错请查看当前事业部编码是否合法；最大长度：50
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
     * @param string $orderNo
     * 商家订单编号；商家自行定义；不允许输入汉字；相同事业部下单号需唯一，如单号重复，需更换商家单号；如果当前订单为京东平台订单，商家订单号不允许包含特殊字符；最大长度：200
     * Required: true
     * Example Value: 201901241657
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 商家订单编号；商家自行定义；不允许输入汉字；相同事业部下单号需唯一，如单号重复，需更换商家单号；如果当前订单为京东平台订单，商家订单号不允许包含特殊字符；最大长度：200
     * Example Value: 201901241657
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
     * @param string $senderName
     * 寄件人姓名；最大长度：50
     * Required: true
     * Example Value: 李四
     */
    private $senderName;

    /**
     * @param string $senderName
     * 寄件人姓名；最大长度：50
     * Example Value: 李四
     */
    public function setSenderName($senderName)
    {
        $this->senderName             = $senderName;
        $this->apiParas["senderName"]  = $senderName;
    }

    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * @param string $senderMobile
     * 寄件人手机；手机和座机必须填一个；需为11位数字
     * Required: false
     * Example Value: 18712898776
     */
    private $senderMobile;

    /**
     * @param string $senderMobile
     * 寄件人手机；手机和座机必须填一个；需为11位数字
     * Example Value: 18712898776
     */
    public function setSenderMobile($senderMobile)
    {
        $this->senderMobile             = $senderMobile;
        $this->apiParas["senderMobile"]  = $senderMobile;
    }

    public function getSenderMobile()
    {
        return $this->senderMobile;
    }

    /**
     * @param string $senderPhone
     * 寄件人座机；不允许填写汉字；手机和座机必须填一个；最大长度：50
     * Required: false
     * Example Value: 010-98785434
     */
    private $senderPhone;

    /**
     * @param string $senderPhone
     * 寄件人座机；不允许填写汉字；手机和座机必须填一个；最大长度：50
     * Example Value: 010-98785434
     */
    public function setSenderPhone($senderPhone)
    {
        $this->senderPhone             = $senderPhone;
        $this->apiParas["senderPhone"]  = $senderPhone;
    }

    public function getSenderPhone()
    {
        return $this->senderPhone;
    }

    /**
     * @param string $senderAddress
     * 寄件人地址；需至少包含寄件地址的省市县三级地址；最大长度：200
     * Required: true
     * Example Value: 北京市大兴区瀛海镇南海家园四里
     */
    private $senderAddress;

    /**
     * @param string $senderAddress
     * 寄件人地址；需至少包含寄件地址的省市县三级地址；最大长度：200
     * Example Value: 北京市大兴区瀛海镇南海家园四里
     */
    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress             = $senderAddress;
        $this->apiParas["senderAddress"]  = $senderAddress;
    }

    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    /**
     * @param string $receiverName
     * 收件人姓名；最大长度：50
     * Required: true
     * Example Value: 张三
     */
    private $receiverName;

    /**
     * @param string $receiverName
     * 收件人姓名；最大长度：50
     * Example Value: 张三
     */
    public function setReceiverName($receiverName)
    {
        $this->receiverName             = $receiverName;
        $this->apiParas["receiverName"]  = $receiverName;
    }

    public function getReceiverName()
    {
        return $this->receiverName;
    }

    /**
     * @param string $receiverMobile
     * 收件人手机；手机和座机必须填一个；需为11位数字
     * Required: false
     * Example Value: 18712987009
     */
    private $receiverMobile;

    /**
     * @param string $receiverMobile
     * 收件人手机；手机和座机必须填一个；需为11位数字
     * Example Value: 18712987009
     */
    public function setReceiverMobile($receiverMobile)
    {
        $this->receiverMobile             = $receiverMobile;
        $this->apiParas["receiverMobile"]  = $receiverMobile;
    }

    public function getReceiverMobile()
    {
        return $this->receiverMobile;
    }

    /**
     * @param string $receiverPhone
     * 收件人座机；不允许填写汉字；手机和座机必须填一个；最大长度：50
     * Required: false
     * Example Value: 010-87984543
     */
    private $receiverPhone;

    /**
     * @param string $receiverPhone
     * 收件人座机；不允许填写汉字；手机和座机必须填一个；最大长度：50
     * Example Value: 010-87984543
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
     * @param string $receiverAddress
     * 收件人地址；需至少包含收件地址的省市县三级地址；最大长度：200
     * Required: true
     * Example Value: 上海市黄浦区陆家浜路918号
     */
    private $receiverAddress;

    /**
     * @param string $receiverAddress
     * 收件人地址；需至少包含收件地址的省市县三级地址；最大长度：200
     * Example Value: 上海市黄浦区陆家浜路918号
     */
    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress             = $receiverAddress;
        $this->apiParas["receiverAddress"]  = $receiverAddress;
    }

    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

    /**
     * @param string $remark
     * 订单备注；最大长度：500
     * Required: false
     * Example Value: 请及时送达
     */
    private $remark;

    /**
     * @param string $remark
     * 订单备注；最大长度：500
     * Example Value: 请及时送达
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
     * @param string $isFragile
     * 是否易碎；只允许填1或2；1：是易碎，2：非易碎
     * Required: false
     * Example Value: 2
     */
    private $isFragile;

    /**
     * @param string $isFragile
     * 是否易碎；只允许填1或2；1：是易碎，2：非易碎
     * Example Value: 2
     */
    public function setIsFragile($isFragile)
    {
        $this->isFragile             = $isFragile;
        $this->apiParas["isFragile"]  = $isFragile;
    }

    public function getIsFragile()
    {
        return $this->isFragile;
    }

    /**
     * @param string $senderTc
     * 始发转运中心名称；该名称需填写与事业部实际关联有效的转运中心名称
     * Required: true
     * Example Value: 北京转运中心
     */
    private $senderTc;

    /**
     * @param string $senderTc
     * 始发转运中心名称；该名称需填写与事业部实际关联有效的转运中心名称
     * Example Value: 北京转运中心
     */
    public function setSenderTc($senderTc)
    {
        $this->senderTc             = $senderTc;
        $this->apiParas["senderTc"]  = $senderTc;
    }

    public function getSenderTc()
    {
        return $this->senderTc;
    }

    /**
     * @param string $predictDate
     * 预计到仓时间；时间格式：yyyy/MM/dd
     * Required: false
     * Example Value: 2019/01/25
     */
    private $predictDate;

    /**
     * @param string $predictDate
     * 预计到仓时间；时间格式：yyyy/MM/dd
     * Example Value: 2019/01/25
     */
    public function setPredictDate($predictDate)
    {
        $this->predictDate             = $predictDate;
        $this->apiParas["predictDate"]  = $predictDate;
    }

    public function getPredictDate()
    {
        return $this->predictDate;
    }

    /**
     * @param string $isJDOrder
     * 销售平台；只允许填写【1,2,3】；1：京东平台、2：其他平台、3：天猫平台
     * Required: true
     * Example Value: 1
     */
    private $isJDOrder;

    /**
     * @param string $isJDOrder
     * 销售平台；只允许填写【1,2,3】；1：京东平台、2：其他平台、3：天猫平台
     * Example Value: 1
     */
    public function setIsJDOrder($isJDOrder)
    {
        $this->isJDOrder             = $isJDOrder;
        $this->apiParas["isJDOrder"]  = $isJDOrder;
    }

    public function getIsJDOrder()
    {
        return $this->isJDOrder;
    }

    /**
     * @param string $isCod
     * 是否货到付款；B2B整车不允许代收货款；只允许填写【0,1】；0：非货到付款、1：是货到付款
     * Required: true
     * Example Value: 1
     */
    private $isCod;

    /**
     * @param string $isCod
     * 是否货到付款；B2B整车不允许代收货款；只允许填写【0,1】；0：非货到付款、1：是货到付款
     * Example Value: 1
     */
    public function setIsCod($isCod)
    {
        $this->isCod             = $isCod;
        $this->apiParas["isCod"]  = $isCod;
    }

    public function getIsCod()
    {
        return $this->isCod;
    }

    /**
     * @param string $receiveable
     * 代收金额；当是货到付款时，代收金额必填；代收金额只允许填写数值且需大于0
     * Required: false
     * Example Value: 299.23
     */
    private $receiveable;

    /**
     * @param string $receiveable
     * 代收金额；当是货到付款时，代收金额必填；代收金额只允许填写数值且需大于0
     * Example Value: 299.23
     */
    public function setReceiveable($receiveable)
    {
        $this->receiveable             = $receiveable;
        $this->apiParas["receiveable"]  = $receiveable;
    }

    public function getReceiveable()
    {
        return $this->receiveable;
    }

    /**
     * @param string $onDoorPickUp
     * 是否上门揽件；商家事业部需开通上门揽件服务方可选择此服务；只允许填【1,2】；1：是上门揽件、2：非上门揽件
     * Required: true
     * Example Value: 1
     */
    private $onDoorPickUp;

    /**
     * @param string $onDoorPickUp
     * 是否上门揽件；商家事业部需开通上门揽件服务方可选择此服务；只允许填【1,2】；1：是上门揽件、2：非上门揽件
     * Example Value: 1
     */
    public function setOnDoorPickUp($onDoorPickUp)
    {
        $this->onDoorPickUp             = $onDoorPickUp;
        $this->apiParas["onDoorPickUp"]  = $onDoorPickUp;
    }

    public function getOnDoorPickUp()
    {
        return $this->onDoorPickUp;
    }

    /**
     * @param string $pickUpDate
     * 上门揽件时间；如果是上门揽件，则上门揽件时间必填；上门揽件时间必须大于当天时间；支持当天上门揽件；时间格式：yyyy/MM/dd
     * Required: false
     * Example Value: 2019/01/25
     */
    private $pickUpDate;

    /**
     * @param string $pickUpDate
     * 上门揽件时间；如果是上门揽件，则上门揽件时间必填；上门揽件时间必须大于当天时间；支持当天上门揽件；时间格式：yyyy/MM/dd
     * Example Value: 2019/01/25
     */
    public function setPickUpDate($pickUpDate)
    {
        $this->pickUpDate             = $pickUpDate;
        $this->apiParas["pickUpDate"]  = $pickUpDate;
    }

    public function getPickUpDate()
    {
        return $this->pickUpDate;
    }

    /**
     * @param string $isGuarantee
     * 是否保价；只允许填写【1,2】；1：需要保价、2：不需保价
     * Required: true
     * Example Value: 1
     */
    private $isGuarantee;

    /**
     * @param string $isGuarantee
     * 是否保价；只允许填写【1,2】；1：需要保价、2：不需保价
     * Example Value: 1
     */
    public function setIsGuarantee($isGuarantee)
    {
        $this->isGuarantee             = $isGuarantee;
        $this->apiParas["isGuarantee"]  = $isGuarantee;
    }

    public function getIsGuarantee()
    {
        return $this->isGuarantee;
    }

    /**
     * @param string $guaranteeValue
     * 保价金额；如果需要保价则保价金额必填；保价金额必须大于0；保价金额不得大于事业部上维护的最大保价金额；如事业部未维护最大保价金额，请先维护再下单；保价金额单位：人民币元
     * Required: false
     * Example Value: 1000.5
     */
    private $guaranteeValue;

    /**
     * @param string $guaranteeValue
     * 保价金额；如果需要保价则保价金额必填；保价金额必须大于0；保价金额不得大于事业部上维护的最大保价金额；如事业部未维护最大保价金额，请先维护再下单；保价金额单位：人民币元
     * Example Value: 1000.5
     */
    public function setGuaranteeValue($guaranteeValue)
    {
        $this->guaranteeValue             = $guaranteeValue;
        $this->apiParas["guaranteeValue"]  = $guaranteeValue;
    }

    public function getGuaranteeValue()
    {
        return $this->guaranteeValue;
    }

    /**
     * @param string $receiptFlag
     * 签单返还；只允许填写【0,1,2,3】；0：无签单、1：纸质签单、2：电子签单、3：纸质签单和电子签单
     * Required: false
     * Example Value: 1
     */
    private $receiptFlag;

    /**
     * @param string $receiptFlag
     * 签单返还；只允许填写【0,1,2,3】；0：无签单、1：纸质签单、2：电子签单、3：纸质签单和电子签单
     * Example Value: 1
     */
    public function setReceiptFlag($receiptFlag)
    {
        $this->receiptFlag             = $receiptFlag;
        $this->apiParas["receiptFlag"]  = $receiptFlag;
    }

    public function getReceiptFlag()
    {
        return $this->receiptFlag;
    }

    /**
     * @param string $paperFrom
     * 纸质单来源；只允许填写【1,2,3】；1：带单、2：取单、3：带单和取单
     * Required: false
     * Example Value: 1
     */
    private $paperFrom;

    /**
     * @param string $paperFrom
     * 纸质单来源；只允许填写【1,2,3】；1：带单、2：取单、3：带单和取单
     * Example Value: 1
     */
    public function setPaperFrom($paperFrom)
    {
        $this->paperFrom             = $paperFrom;
        $this->apiParas["paperFrom"]  = $paperFrom;
    }

    public function getPaperFrom()
    {
        return $this->paperFrom;
    }

    /**
     * @param string $rtnReceiverName
     * 签单返还收件人姓名；如果是无签单或是电子签单，请不要填写此字段；最大长度：50
     * Required: false
     * Example Value: 张三
     */
    private $rtnReceiverName;

    /**
     * @param string $rtnReceiverName
     * 签单返还收件人姓名；如果是无签单或是电子签单，请不要填写此字段；最大长度：50
     * Example Value: 张三
     */
    public function setRtnReceiverName($rtnReceiverName)
    {
        $this->rtnReceiverName             = $rtnReceiverName;
        $this->apiParas["rtnReceiverName"]  = $rtnReceiverName;
    }

    public function getRtnReceiverName()
    {
        return $this->rtnReceiverName;
    }

    /**
     * @param string $rtnReceiverMobile
     * 返单收件人手机号；如果是无签单或是电子签单，请不要填写此字段；中文不允许超过7位；最大长度：50
     * Required: false
     * Example Value: 18712898776
     */
    private $rtnReceiverMobile;

    /**
     * @param string $rtnReceiverMobile
     * 返单收件人手机号；如果是无签单或是电子签单，请不要填写此字段；中文不允许超过7位；最大长度：50
     * Example Value: 18712898776
     */
    public function setRtnReceiverMobile($rtnReceiverMobile)
    {
        $this->rtnReceiverMobile             = $rtnReceiverMobile;
        $this->apiParas["rtnReceiverMobile"]  = $rtnReceiverMobile;
    }

    public function getRtnReceiverMobile()
    {
        return $this->rtnReceiverMobile;
    }

    /**
     * @param string $rtnReceiverAddress
     * 返单收件人地址；如果是无签单或是电子签单，请不要填写此字段；最大长度：200
     * Required: false
     * Example Value: 上海市黄浦区陆家浜路918号
     */
    private $rtnReceiverAddress;

    /**
     * @param string $rtnReceiverAddress
     * 返单收件人地址；如果是无签单或是电子签单，请不要填写此字段；最大长度：200
     * Example Value: 上海市黄浦区陆家浜路918号
     */
    public function setRtnReceiverAddress($rtnReceiverAddress)
    {
        $this->rtnReceiverAddress             = $rtnReceiverAddress;
        $this->apiParas["rtnReceiverAddress"]  = $rtnReceiverAddress;
    }

    public function getRtnReceiverAddress()
    {
        return $this->rtnReceiverAddress;
    }

    /**
     * @param string $rtnReceiverPhone
     * 返单收件人电话；如果是无签单或是电子签单，请不要填写此字段；中文不允许超过7位；最大长度：50
     * Required: false
     * Example Value: 1861290887
     */
    private $rtnReceiverPhone;

    /**
     * @param string $rtnReceiverPhone
     * 返单收件人电话；如果是无签单或是电子签单，请不要填写此字段；中文不允许超过7位；最大长度：50
     * Example Value: 1861290887
     */
    public function setRtnReceiverPhone($rtnReceiverPhone)
    {
        $this->rtnReceiverPhone             = $rtnReceiverPhone;
        $this->apiParas["rtnReceiverPhone"]  = $rtnReceiverPhone;
    }

    public function getRtnReceiverPhone()
    {
        return $this->rtnReceiverPhone;
    }

    /**
     * @param string $productType
     * 产品类型；如填写只允许填【0,1,2】；不填或者0：快递(原有业务)；1：零担；2：整车
     * Required: false
     * Example Value: 1
     */
    private $productType;

    /**
     * @param string $productType
     * 产品类型；如填写只允许填【0,1,2】；不填或者0：快递(原有业务)；1：零担；2：整车
     * Example Value: 1
     */
    public function setProductType($productType)
    {
        $this->productType             = $productType;
        $this->apiParas["productType"]  = $productType;
    }

    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param string $pickUpForNew
     * 是否取件换新；如果是取件换新，系统会自动创建换新单和取件单，请务必填写取件换新相关内容，如：取件换新联系人，地址，电话及取件换新包裹明细等；事业部需开通逆向取件服务方能使用取件换新服务；2：是取件换新、不填或其他：不是取件换新
     * Required: false
     * Example Value: 2
     */
    private $pickUpForNew;

    /**
     * @param string $pickUpForNew
     * 是否取件换新；如果是取件换新，系统会自动创建换新单和取件单，请务必填写取件换新相关内容，如：取件换新联系人，地址，电话及取件换新包裹明细等；事业部需开通逆向取件服务方能使用取件换新服务；2：是取件换新、不填或其他：不是取件换新
     * Example Value: 2
     */
    public function setPickUpForNew($pickUpForNew)
    {
        $this->pickUpForNew             = $pickUpForNew;
        $this->apiParas["pickUpForNew"]  = $pickUpForNew;
    }

    public function getPickUpForNew()
    {
        return $this->pickUpForNew;
    }

    /**
     * @param string $pickUpAbnormalNumber
     * 取件换新-取件异常联系号码：手机或座机均可；最大长度：350
     * Required: false
     * Example Value: 18622987887
     */
    private $pickUpAbnormalNumber;

    /**
     * @param string $pickUpAbnormalNumber
     * 取件换新-取件异常联系号码：手机或座机均可；最大长度：350
     * Example Value: 18622987887
     */
    public function setPickUpAbnormalNumber($pickUpAbnormalNumber)
    {
        $this->pickUpAbnormalNumber             = $pickUpAbnormalNumber;
        $this->apiParas["pickUpAbnormalNumber"]  = $pickUpAbnormalNumber;
    }

    public function getPickUpAbnormalNumber()
    {
        return $this->pickUpAbnormalNumber;
    }

    /**
     * @param string $pickUpReceiverName
     * 取件换新-返回收货人姓名；取件换新时必填；最大长度：50
     * Required: false
     * Example Value: 张三
     */
    private $pickUpReceiverName;

    /**
     * @param string $pickUpReceiverName
     * 取件换新-返回收货人姓名；取件换新时必填；最大长度：50
     * Example Value: 张三
     */
    public function setPickUpReceiverName($pickUpReceiverName)
    {
        $this->pickUpReceiverName             = $pickUpReceiverName;
        $this->apiParas["pickUpReceiverName"]  = $pickUpReceiverName;
    }

    public function getPickUpReceiverName()
    {
        return $this->pickUpReceiverName;
    }

    /**
     * @param string $pickUpReceiverMobile
     * 取件换新-返回收货人手机；取件换新时手机及座机不能全部为空；最大长度：50
     * Required: false
     * Example Value: 18622987887
     */
    private $pickUpReceiverMobile;

    /**
     * @param string $pickUpReceiverMobile
     * 取件换新-返回收货人手机；取件换新时手机及座机不能全部为空；最大长度：50
     * Example Value: 18622987887
     */
    public function setPickUpReceiverMobile($pickUpReceiverMobile)
    {
        $this->pickUpReceiverMobile             = $pickUpReceiverMobile;
        $this->apiParas["pickUpReceiverMobile"]  = $pickUpReceiverMobile;
    }

    public function getPickUpReceiverMobile()
    {
        return $this->pickUpReceiverMobile;
    }

    /**
     * @param string $pickUpReceiverPhone
     * 取件换新-返回收货人座机；取件换新时手机及座机不能全部为空；最大长度：50
     * Required: false
     * Example Value: 010-8209765
     */
    private $pickUpReceiverPhone;

    /**
     * @param string $pickUpReceiverPhone
     * 取件换新-返回收货人座机；取件换新时手机及座机不能全部为空；最大长度：50
     * Example Value: 010-8209765
     */
    public function setPickUpReceiverPhone($pickUpReceiverPhone)
    {
        $this->pickUpReceiverPhone             = $pickUpReceiverPhone;
        $this->apiParas["pickUpReceiverPhone"]  = $pickUpReceiverPhone;
    }

    public function getPickUpReceiverPhone()
    {
        return $this->pickUpReceiverPhone;
    }

    /**
     * @param string $pickUpReceiverCode
     * 取件换新-返回收货人邮编
     * Required: false
     * Example Value: 100016
     */
    private $pickUpReceiverCode;

    /**
     * @param string $pickUpReceiverCode
     * 取件换新-返回收货人邮编
     * Example Value: 100016
     */
    public function setPickUpReceiverCode($pickUpReceiverCode)
    {
        $this->pickUpReceiverCode             = $pickUpReceiverCode;
        $this->apiParas["pickUpReceiverCode"]  = $pickUpReceiverCode;
    }

    public function getPickUpReceiverCode()
    {
        return $this->pickUpReceiverCode;
    }

    /**
     * @param string $pickUpReceiverAddress
     * 取件换新-返回收货人地址；取件换新时必填；最大长度：200
     * Required: false
     * Example Value: 北京市朝阳区三环以内
     */
    private $pickUpReceiverAddress;

    /**
     * @param string $pickUpReceiverAddress
     * 取件换新-返回收货人地址；取件换新时必填；最大长度：200
     * Example Value: 北京市朝阳区三环以内
     */
    public function setPickUpReceiverAddress($pickUpReceiverAddress)
    {
        $this->pickUpReceiverAddress             = $pickUpReceiverAddress;
        $this->apiParas["pickUpReceiverAddress"]  = $pickUpReceiverAddress;
    }

    public function getPickUpReceiverAddress()
    {
        return $this->pickUpReceiverAddress;
    }

    /**
     * @param  $isSignPrint
     * 签单返还-签单打印标识；0：京东打印-京东模板、1：京东打印-商家模板、2：商家自打印
     * Required: false
     * Example Value: 1
     */
    private $isSignPrint;

    /**
     * @param  $isSignPrint
     * 签单返还-签单打印标识；0：京东打印-京东模板、1：京东打印-商家模板、2：商家自打印
     * Example Value: 1
     */
    public function setIsSignPrint($isSignPrint)
    {
        $this->isSignPrint             = $isSignPrint;
        $this->apiParas["isSignPrint"]  = $isSignPrint;
    }

    public function getIsSignPrint()
    {
        return $this->isSignPrint;
    }

    /**
     * @param string $weight
     * 重量(Kg)；需要为数值；必须大于0
     * Required: true
     * Example Value: 100.5
     */
    private $weight;

    /**
     * @param string $weight
     * 重量(Kg)；需要为数值；必须大于0
     * Example Value: 100.5
     */
    public function setWeight($weight)
    {
        $this->weight             = $weight;
        $this->apiParas["weight"]  = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $length
     * 长度(mm)；需要为数值；必须大于0
     * Required: true
     * Example Value: 20000
     */
    private $length;

    /**
     * @param string $length
     * 长度(mm)；需要为数值；必须大于0
     * Example Value: 20000
     */
    public function setLength($length)
    {
        $this->length             = $length;
        $this->apiParas["length"]  = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param string $width
     * 宽度(mm)；需要为数值；必须大于0
     * Required: true
     * Example Value: 20000
     */
    private $width;

    /**
     * @param string $width
     * 宽度(mm)；需要为数值；必须大于0
     * Example Value: 20000
     */
    public function setWidth($width)
    {
        $this->width             = $width;
        $this->apiParas["width"]  = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param string $height
     * 高度(mm)；需要为数值；必须大于0
     * Required: true
     * Example Value: 20000
     */
    private $height;

    /**
     * @param string $height
     * 高度(mm)；需要为数值；必须大于0
     * Example Value: 20000
     */
    public function setHeight($height)
    {
        $this->height             = $height;
        $this->apiParas["height"]  = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string $installFlag
     * 是否安维；如果需要安维需开通京东安装服务；；1：是、2：否
     * Required: true
     * Example Value: 1
     */
    private $installFlag;

    /**
     * @param string $installFlag
     * 是否安维；如果需要安维需开通京东安装服务；；1：是、2：否
     * Example Value: 1
     */
    public function setInstallFlag($installFlag)
    {
        $this->installFlag             = $installFlag;
        $this->apiParas["installFlag"]  = $installFlag;
    }

    public function getInstallFlag()
    {
        return $this->installFlag;
    }

    /**
     * @param string $thirdCategoryNo
     * 三级分类编码(安维必填)；填写的三级分类需是已存在的三级分类编码；最大长度：20
     * Required: false
     * Example Value: 9200
     */
    private $thirdCategoryNo;

    /**
     * @param string $thirdCategoryNo
     * 三级分类编码(安维必填)；填写的三级分类需是已存在的三级分类编码；最大长度：20
     * Example Value: 9200
     */
    public function setThirdCategoryNo($thirdCategoryNo)
    {
        $this->thirdCategoryNo             = $thirdCategoryNo;
        $this->apiParas["thirdCategoryNo"]  = $thirdCategoryNo;
    }

    public function getThirdCategoryNo()
    {
        return $this->thirdCategoryNo;
    }

    /**
     * @param string $brandNo
     * 品牌ID(安维必填)；品牌ID需是已经存在的品牌编码；最大长度：50
     * Required: false
     * Example Value: 101
     */
    private $brandNo;

    /**
     * @param string $brandNo
     * 品牌ID(安维必填)；品牌ID需是已经存在的品牌编码；最大长度：50
     * Example Value: 101
     */
    public function setBrandNo($brandNo)
    {
        $this->brandNo             = $brandNo;
        $this->apiParas["brandNo"]  = $brandNo;
    }

    public function getBrandNo()
    {
        return $this->brandNo;
    }

    /**
     * @param string $productSku
     * 商品sku；最大长度：50
     * Required: false
     * Example Value: 234123
     */
    private $productSku;

    /**
     * @param string $productSku
     * 商品sku；最大长度：50
     * Example Value: 234123
     */
    public function setProductSku($productSku)
    {
        $this->productSku             = $productSku;
        $this->apiParas["productSku"]  = $productSku;
    }

    public function getProductSku()
    {
        return $this->productSku;
    }

    /**
     * @param string $packageName
     * 物品内容；最大长度：200
     * Required: false
     * Example Value: 洗衣机
     */
    private $packageName;

    /**
     * @param string $packageName
     * 物品内容；最大长度：200
     * Example Value: 洗衣机
     */
    public function setPackageName($packageName)
    {
        $this->packageName             = $packageName;
        $this->apiParas["packageName"]  = $packageName;
    }

    public function getPackageName()
    {
        return $this->packageName;
    }

    /**
     * @param string $reverseLwb
     * 是否是取件换新中逆向取件单明细信息；如果当前是取件换新，包裹明细集合中至少有两个包裹明细对象，其中一个为逆向取件单的包裹明细（当前字段标识为2），一个为换新单的包裹明细（当前字段不填写）；2：是逆向取件明细，其他：不是逆向取件明细
     * Required: false
     * Example Value: 2
     */
    private $reverseLwb;

    /**
     * @param string $reverseLwb
     * 是否是取件换新中逆向取件单明细信息；如果当前是取件换新，包裹明细集合中至少有两个包裹明细对象，其中一个为逆向取件单的包裹明细（当前字段标识为2），一个为换新单的包裹明细（当前字段不填写）；2：是逆向取件明细，其他：不是逆向取件明细
     * Example Value: 2
     */
    public function setReverseLwb($reverseLwb)
    {
        $this->reverseLwb             = $reverseLwb;
        $this->apiParas["reverseLwb"]  = $reverseLwb;
    }

    public function getReverseLwb()
    {
        return $this->reverseLwb;
    }

}