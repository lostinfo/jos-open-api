<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 检索单个fbp订单信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2740&apiName=jingdong.pop.order.fbp.get
 * Class PopOrderFbpGet
 * @package Jd\request
 */
class PopOrderFbpGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.fbp.get";
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
     * @param string $orderState
     * 请用逗号拼接英文状态。1）DengDaiDaYin 等待打印 2）DengDaiChuKu 等待出库  3）DengDaiDaBao 等待打包 4）DengDaiFaHuo 等待发货 5）ZiTiTuZhong 自提途中 6）ShangMenTiHuo 上门提货 7）ZiTiTuiHuo 自提退货 8）DengDaiQueRenShouHuo 等待确认收货 9）PeiSongTuiHuo 货到付款退货 10）HuoDaoFuKuanQueRen 货到付款确认（暂无了） 11）WanCheng 完成 12）DengDaiFenQiFuKuan 等待分期付款（暂无了） 13）ServiceFinished 收款确认(服务完成) 14）SuoDing 锁定 15）DengDaiTuiKuan 等待退款。
     * Required: true
     * Example Value: WAIT_SELLER_DELIVERY
     */
    private $orderState;

    /**
     * @param string $orderState
     * 请用逗号拼接英文状态。1）DengDaiDaYin 等待打印 2）DengDaiChuKu 等待出库  3）DengDaiDaBao 等待打包 4）DengDaiFaHuo 等待发货 5）ZiTiTuZhong 自提途中 6）ShangMenTiHuo 上门提货 7）ZiTiTuiHuo 自提退货 8）DengDaiQueRenShouHuo 等待确认收货 9）PeiSongTuiHuo 货到付款退货 10）HuoDaoFuKuanQueRen 货到付款确认（暂无了） 11）WanCheng 完成 12）DengDaiFenQiFuKuan 等待分期付款（暂无了） 13）ServiceFinished 收款确认(服务完成) 14）SuoDing 锁定 15）DengDaiTuiKuan 等待退款。
     * Example Value: WAIT_SELLER_DELIVERY
     */
    public function setOrderState($orderState)
    {
        $this->orderState             = $orderState;
        $this->apiParas["orderState"]  = $orderState;
    }

    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * @param int $colType
     * 商家类型，FBP订单写1
     * Required: true
     * Example Value: 1
     */
    private $colType;

    /**
     * @param int $colType
     * 商家类型，FBP订单写1
     * Example Value: 1
     */
    public function setColType($colType)
    {
        $this->colType             = $colType;
        $this->apiParas["colType"]  = $colType;
    }

    public function getColType()
    {
        return $this->colType;
    }

    /**
     * @param string $optionalFields
     * 需返回的字段列表。可选值：orderInfo结构体中的所有字段；字段之间用,分隔 
     * Required: true
     * Example Value: venderId,orderType,payType
     */
    private $optionalFields;

    /**
     * @param string $optionalFields
     * 需返回的字段列表。可选值：orderInfo结构体中的所有字段；字段之间用,分隔 
     * Example Value: venderId,orderType,payType
     */
    public function setOptionalFields($optionalFields)
    {
        $this->optionalFields             = $optionalFields;
        $this->apiParas["optionalFields"]  = $optionalFields;
    }

    public function getOptionalFields()
    {
        return $this->optionalFields;
    }

    /**
     * @param int $orderId
     * 订单ID
     * Required: false
     * Example Value: 67834311
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单ID
     * Example Value: 67834311
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

}