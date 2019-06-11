<?php

namespca Lostinfo\JosOpenApi;

/**
 * 创建退货单
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=486&apiName=jingdong.vc.create.return.order
 * Class VcCreateReturnOrder
 * @package Jd\request
 */
class VcCreateReturnOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.create.return.order";
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
     * @param int $fromDeliverCenterId
     * 退货发货地（3,上海 4,成都 5,武汉 6,北京 7,南京 8, 济南 9,沈阳 10,广州 316,西安 322, 福州 545, 杭州 601,天津 603,深圳 605,重庆 606,苏州 607,宁波 608,郑州 609,厦门 610,青岛 614,石家庄 615,太原 616,南宁 617,哈尔滨 618,大连 619,长沙 625,EPT配送中心628,兰州 629,包头 630,乌鲁木齐 631,合肥 632,宿迁 633,昆明 634,贵阳 636,长春 644,佛山 648,烟台）
     * Required: true
     * Example Value: 6
     */
    private $fromDeliverCenterId;

    /**
     * @param int $fromDeliverCenterId
     * 退货发货地（3,上海 4,成都 5,武汉 6,北京 7,南京 8, 济南 9,沈阳 10,广州 316,西安 322, 福州 545, 杭州 601,天津 603,深圳 605,重庆 606,苏州 607,宁波 608,郑州 609,厦门 610,青岛 614,石家庄 615,太原 616,南宁 617,哈尔滨 618,大连 619,长沙 625,EPT配送中心628,兰州 629,包头 630,乌鲁木齐 631,合肥 632,宿迁 633,昆明 634,贵阳 636,长春 644,佛山 648,烟台）
     * Example Value: 6
     */
    public function setFromDeliverCenterId($fromDeliverCenterId)
    {
        $this->fromDeliverCenterId             = $fromDeliverCenterId;
        $this->apiParas["fromDeliverCenterId"]  = $fromDeliverCenterId;
    }

    public function getFromDeliverCenterId()
    {
        return $this->fromDeliverCenterId;
    }

    /**
     * @param int $toDeliverCenterId
     * 退货目的地（3,上海 4,成都 5,武汉 6,北京 7,南京 8, 济南 9,沈阳 10,广州 316,西安 322, 福州 545, 杭州 601,天津 603,深圳 605,重庆 606,苏州 607,宁波 608,郑州 609,厦门 610,青岛 614,石家庄 615,太原 616,南宁 617,哈尔滨 618,大连 619,长沙 625,EPT配送中心628,兰州 629,包头 630,乌鲁木齐 631,合肥 632,宿迁 633,昆明 634,贵阳 636,长春 644,佛山 648,烟台）（备注：与fromDeliverCenterId值相同，因为京东暂不支持异地退货）
     * Required: true
     * Example Value: 6
     */
    private $toDeliverCenterId;

    /**
     * @param int $toDeliverCenterId
     * 退货目的地（3,上海 4,成都 5,武汉 6,北京 7,南京 8, 济南 9,沈阳 10,广州 316,西安 322, 福州 545, 杭州 601,天津 603,深圳 605,重庆 606,苏州 607,宁波 608,郑州 609,厦门 610,青岛 614,石家庄 615,太原 616,南宁 617,哈尔滨 618,大连 619,长沙 625,EPT配送中心628,兰州 629,包头 630,乌鲁木齐 631,合肥 632,宿迁 633,昆明 634,贵阳 636,长春 644,佛山 648,烟台）（备注：与fromDeliverCenterId值相同，因为京东暂不支持异地退货）
     * Example Value: 6
     */
    public function setToDeliverCenterId($toDeliverCenterId)
    {
        $this->toDeliverCenterId             = $toDeliverCenterId;
        $this->apiParas["toDeliverCenterId"]  = $toDeliverCenterId;
    }

    public function getToDeliverCenterId()
    {
        return $this->toDeliverCenterId;
    }

    /**
     * @param string $purchaseErpCode
     * 采销简码（京东人员的ERP帐号）
     * Required: true
     * Example Value: bjjdz
     */
    private $purchaseErpCode;

    /**
     * @param string $purchaseErpCode
     * 采销简码（京东人员的ERP帐号）
     * Example Value: bjjdz
     */
    public function setPurchaseErpCode($purchaseErpCode)
    {
        $this->purchaseErpCode             = $purchaseErpCode;
        $this->apiParas["purchaseErpCode"]  = $purchaseErpCode;
    }

    public function getPurchaseErpCode()
    {
        return $this->purchaseErpCode;
    }

    /**
     * @param int $balanceType
     * 结算类型（运输方式只有两种：1,普通快递，2，自提，不填则默认2）
     * Required: false
     * Example Value: 2
     */
    private $balanceType;

    /**
     * @param int $balanceType
     * 结算类型（运输方式只有两种：1,普通快递，2，自提，不填则默认2）
     * Example Value: 2
     */
    public function setBalanceType($balanceType)
    {
        $this->balanceType             = $balanceType;
        $this->apiParas["balanceType"]  = $balanceType;
    }

    public function getBalanceType()
    {
        return $this->balanceType;
    }

    /**
     * @param int $transportType
     * 运输方式（1，月结订单 2，货到付款 3，无需结算，不填则默认1）
     * Required: false
     * Example Value: 1
     */
    private $transportType;

    /**
     * @param int $transportType
     * 运输方式（1，月结订单 2，货到付款 3，无需结算，不填则默认1）
     * Example Value: 1
     */
    public function setTransportType($transportType)
    {
        $this->transportType             = $transportType;
        $this->apiParas["transportType"]  = $transportType;
    }

    public function getTransportType()
    {
        return $this->transportType;
    }

    /**
     * @param string $receiverName
     * 取货人姓名
     * Required: false
     * Example Value: 张三
     */
    private $receiverName;

    /**
     * @param string $receiverName
     * 取货人姓名
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
     * @param string $receiverCell
     * 取货人电话
     * Required: false
     * Example Value: 18600781245
     */
    private $receiverCell;

    /**
     * @param string $receiverCell
     * 取货人电话
     * Example Value: 18600781245
     */
    public function setReceiverCell($receiverCell)
    {
        $this->receiverCell             = $receiverCell;
        $this->apiParas["receiverCell"]  = $receiverCell;
    }

    public function getReceiverCell()
    {
        return $this->receiverCell;
    }

    /**
     * @param string $pikerID
     * 证件号
     * Required: false
     * Example Value: 657284987121456874
     */
    private $pikerID;

    /**
     * @param string $pikerID
     * 证件号
     * Example Value: 657284987121456874
     */
    public function setPikerID($pikerID)
    {
        $this->pikerID             = $pikerID;
        $this->apiParas["pikerID"]  = $pikerID;
    }

    public function getPikerID()
    {
        return $this->pikerID;
    }

    /**
     * @param string $reservedPickUpDate
     * 预约取货时间
     * Required: false
     * Example Value: 2014-03-26 15:38:30
     */
    private $reservedPickUpDate;

    /**
     * @param string $reservedPickUpDate
     * 预约取货时间
     * Example Value: 2014-03-26 15:38:30
     */
    public function setReservedPickUpDate($reservedPickUpDate)
    {
        $this->reservedPickUpDate             = $reservedPickUpDate;
        $this->apiParas["reservedPickUpDate"]  = $reservedPickUpDate;
    }

    public function getReservedPickUpDate()
    {
        return $this->reservedPickUpDate;
    }

    /**
     * @param string $receiverAddress
     * 收件人地址
     * Required: false
     * Example Value: 北京市朝阳区北辰西路8号北辰世纪中心A座1层
     */
    private $receiverAddress;

    /**
     * @param string $receiverAddress
     * 收件人地址
     * Example Value: 北京市朝阳区北辰西路8号北辰世纪中心A座1层
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
     * @param string $postCode
     * 邮编
     * Required: false
     * Example Value: 100000
     */
    private $postCode;

    /**
     * @param string $postCode
     * 邮编
     * Example Value: 100000
     */
    public function setPostCode($postCode)
    {
        $this->postCode             = $postCode;
        $this->apiParas["postCode"]  = $postCode;
    }

    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param int[] $wareId
     * 商品id（备注：多个以逗号隔开，中间不允许有空格）
     * Required: true
     * Example Value: 123456,123456
     */
    private $wareId;

    /**
     * @param int[] $wareId
     * 商品id（备注：多个以逗号隔开，中间不允许有空格）
     * Example Value: 123456,123456
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param int[] $returnNum
     * 退货数量（备注：多个以逗号隔开，中间不允许有空格，且与wareId个数保持一致）
     * Required: true
     * Example Value: 1,2
     */
    private $returnNum;

    /**
     * @param int[] $returnNum
     * 退货数量（备注：多个以逗号隔开，中间不允许有空格，且与wareId个数保持一致）
     * Example Value: 1,2
     */
    public function setReturnNum($returnNum)
    {
        $this->returnNum             = $returnNum;
        $this->apiParas["returnNum"]  = $returnNum;
    }

    public function getReturnNum()
    {
        return $this->returnNum;
    }

}