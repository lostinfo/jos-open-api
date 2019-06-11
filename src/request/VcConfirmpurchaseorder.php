<?php

namespace JD\request;

/**
 * 单个订单回告
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1195&apiName=jingdong.vc.confirmpurchaseorder
 * Class VcConfirmpurchaseorder
 * @package Jd\request
 */
class VcConfirmpurchaseorder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.confirmpurchaseorder";
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
     * 采购单号
     * Required: true
     * Example Value: 1234567
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 采购单号
     * Example Value: 1234567
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["order_id"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param Date $deliveryTime
     * 预计送货时间
     * Required: false
     * Example Value: 2015-11-18 20:44:54
     */
    private $deliveryTime;

    /**
     * @param Date $deliveryTime
     * 预计送货时间
     * Example Value: 2015-11-18 20:44:54
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime             = $deliveryTime;
        $this->apiParas["delivery_time"]  = $deliveryTime;
    }

    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @param Number[] $wareId
     * 商品编号（商品编号、配送中心、采购数量个数、不满足发货原因必须保持一致）
     * Required: true
     * Example Value: 1234,98741
     */
    private $wareId;

    /**
     * @param Number[] $wareId
     * 商品编号（商品编号、配送中心、采购数量个数、不满足发货原因必须保持一致）
     * Example Value: 1234,98741
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["ware_id"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param Number[] $confirmNum
     * 确认数量（不能大于原始采购数量；商品编号、与配送中心、采购数量个数、不满足发货原因必须保持一致）
     * Required: true
     * Example Value: 5,4
     */
    private $confirmNum;

    /**
     * @param Number[] $confirmNum
     * 确认数量（不能大于原始采购数量；商品编号、与配送中心、采购数量个数、不满足发货原因必须保持一致）
     * Example Value: 5,4
     */
    public function setConfirmNum($confirmNum)
    {
        $this->confirmNum             = $confirmNum;
        $this->apiParas["confirm_num"]  = $confirmNum;
    }

    public function getConfirmNum()
    {
        return $this->confirmNum;
    }

    /**
     * @param String[] $backExplanation
     * 不满足发货原因（非图书商品；商品编号、配送中心、采购数量个数、不满足发货原因必须保持一致）
     * Required: false
     * Example Value: 手动输入1,手动输入2
     */
    private $backExplanation;

    /**
     * @param String[] $backExplanation
     * 不满足发货原因（非图书商品；商品编号、配送中心、采购数量个数、不满足发货原因必须保持一致）
     * Example Value: 手动输入1,手动输入2
     */
    public function setBackExplanation($backExplanation)
    {
        $this->backExplanation             = $backExplanation;
        $this->apiParas["back_explanation"]  = $backExplanation;
    }

    public function getBackExplanation()
    {
        return $this->backExplanation;
    }

    /**
     * @param Number[] $backExplanationType
     * 不满足发货原因（图书商品；请调用接口jingdong.vc.getcomponentlist方法获取，选择code传入）
     * Required: false
     * Example Value: 1,2
     */
    private $backExplanationType;

    /**
     * @param Number[] $backExplanationType
     * 不满足发货原因（图书商品；请调用接口jingdong.vc.getcomponentlist方法获取，选择code传入）
     * Example Value: 1,2
     */
    public function setBackExplanationType($backExplanationType)
    {
        $this->backExplanationType             = $backExplanationType;
        $this->apiParas["back_explanation_type"]  = $backExplanationType;
    }

    public function getBackExplanationType()
    {
        return $this->backExplanationType;
    }

    /**
     * @param Number[] $deliverCenterId
     * 配送中心ID（商品编号、配送中心、采购数量个数、不满足发货原因必须保持一致）此字段查询调用jingdong.vc.getdetailbyorderid会带出来
     * Required: true
     * Example Value: 6，6
     */
    private $deliverCenterId;

    /**
     * @param Number[] $deliverCenterId
     * 配送中心ID（商品编号、配送中心、采购数量个数、不满足发货原因必须保持一致）此字段查询调用jingdong.vc.getdetailbyorderid会带出来
     * Example Value: 6，6
     */
    public function setDeliverCenterId($deliverCenterId)
    {
        $this->deliverCenterId             = $deliverCenterId;
        $this->apiParas["deliver_center_id"]  = $deliverCenterId;
    }

    public function getDeliverCenterId()
    {
        return $this->deliverCenterId;
    }

}