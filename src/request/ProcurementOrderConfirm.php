<?php

namespace JD\request;

/**
 * 采购单回告
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=483&apiName=jingdong.procurement.order.confirm
 * Class ProcurementOrderConfirm
 * @package Jd\request
 */
class ProcurementOrderConfirm
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.procurement.order.confirm";
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
     * @param Number $orderId
     * 订单id
     * Required: true
     * Example Value: 123456
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 订单id
     * Example Value: 123456
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param Date $deliveryTime
     * 预计送货日期
     * Required: false
     * Example Value: 2014-03-25 12:06:24
     */
    private $deliveryTime;

    /**
     * @param Date $deliveryTime
     * 预计送货日期
     * Example Value: 2014-03-25 12:06:24
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime             = $deliveryTime;
        $this->apiParas["deliveryTime"]  = $deliveryTime;
    }

    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @param Number[] $wareId
     * 商品编号（备注：多个以逗号隔开，且中间不允许有空格）
     * Required: true
     * Example Value: 123,456
     */
    private $wareId;

    /**
     * @param Number[] $wareId
     * 商品编号（备注：多个以逗号隔开，且中间不允许有空格）
     * Example Value: 123,456
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
     * @param Number[] $deliverCenterId
     * 分配机构，京东配送中心（3,上海 4,成都 5,武汉 6,北京 7,南京 8, 济南 9,沈阳 10,广州 316,西安 322, 福州 545, 杭州 601,天津 603,深圳 605,重庆 606,苏州 607,宁波 608,郑州 609,厦门 610,青岛 614,石家庄 615,太原 616,南宁 617,哈尔滨 618,大连 619,长沙 625,EPT配送中心628,兰州 629,包头 630,乌鲁木齐 631,合肥 632,宿迁 633,昆明 634,贵阳 636,长春 644,佛山 648,烟台）（备注：多个以逗号隔开，且中间不允许有空格，与wareId个数保持一致）
     * Required: true
     * Example Value: 6,6
     */
    private $deliverCenterId;

    /**
     * @param Number[] $deliverCenterId
     * 分配机构，京东配送中心（3,上海 4,成都 5,武汉 6,北京 7,南京 8, 济南 9,沈阳 10,广州 316,西安 322, 福州 545, 杭州 601,天津 603,深圳 605,重庆 606,苏州 607,宁波 608,郑州 609,厦门 610,青岛 614,石家庄 615,太原 616,南宁 617,哈尔滨 618,大连 619,长沙 625,EPT配送中心628,兰州 629,包头 630,乌鲁木齐 631,合肥 632,宿迁 633,昆明 634,贵阳 636,长春 644,佛山 648,烟台）（备注：多个以逗号隔开，且中间不允许有空格，与wareId个数保持一致）
     * Example Value: 6,6
     */
    public function setDeliverCenterId($deliverCenterId)
    {
        $this->deliverCenterId             = $deliverCenterId;
        $this->apiParas["deliverCenterId"]  = $deliverCenterId;
    }

    public function getDeliverCenterId()
    {
        return $this->deliverCenterId;
    }

    /**
     * @param Number[] $backExplanationType
     * 不发货原因类型（1：停产不加印 2:暂时缺货 3:新品未出印厂 4:非本社图书）（备注：多个以逗号隔开，且中间不允许有空格，与wareId个数保持一致
     * Required: false
     * Example Value: 1,2
     */
    private $backExplanationType;

    /**
     * @param Number[] $backExplanationType
     * 不发货原因类型（1：停产不加印 2:暂时缺货 3:新品未出印厂 4:非本社图书）（备注：多个以逗号隔开，且中间不允许有空格，与wareId个数保持一致
     * Example Value: 1,2
     */
    public function setBackExplanationType($backExplanationType)
    {
        $this->backExplanationType             = $backExplanationType;
        $this->apiParas["backExplanationType"]  = $backExplanationType;
    }

    public function getBackExplanationType()
    {
        return $this->backExplanationType;
    }

    /**
     * @param Number[] $confirmNum
     * 确认数量（备注：多个以逗号隔开，且中间不允许有空格，与wareId个数保持一致
     * Required: true
     * Example Value: 11,12
     */
    private $confirmNum;

    /**
     * @param Number[] $confirmNum
     * 确认数量（备注：多个以逗号隔开，且中间不允许有空格，与wareId个数保持一致
     * Example Value: 11,12
     */
    public function setConfirmNum($confirmNum)
    {
        $this->confirmNum             = $confirmNum;
        $this->apiParas["confirmNum"]  = $confirmNum;
    }

    public function getConfirmNum()
    {
        return $this->confirmNum;
    }

}