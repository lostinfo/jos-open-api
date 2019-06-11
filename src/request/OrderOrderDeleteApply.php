<?php

namespca Lostinfo\JosOpenApi;

/**
 * 提交订单删除申请
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=547&apiName=jingdong.order.orderDelete.apply
 * Class OrderOrderDeleteApply
 * @package Jd\request
 */
class OrderOrderDeleteApply
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.order.orderDelete.apply";
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
     * @param int $orderId
     * 订单编号，有效订单
     * Required: true
     * Example Value: 6000261082
     */
    private $orderId;

    /**
     * @param int $orderId
     * 订单编号，有效订单
     * Example Value: 6000261082
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
     * @param int $delApplyType
     * 删单类型，用数字2-3来表示.数字含意如下：2、商家联系客户，客户同意取消订单；3、客户要求取消订单；删单类型只能是2或者3
     * Required: true
     * Example Value: 2
     */
    private $delApplyType;

    /**
     * @param int $delApplyType
     * 删单类型，用数字2-3来表示.数字含意如下：2、商家联系客户，客户同意取消订单；3、客户要求取消订单；删单类型只能是2或者3
     * Example Value: 2
     */
    public function setDelApplyType($delApplyType)
    {
        $this->delApplyType             = $delApplyType;
        $this->apiParas["del_apply_type"]  = $delApplyType;
    }

    public function getDelApplyType()
    {
        return $this->delApplyType;
    }

    /**
     * @param string $delApplyReason
     * 删单原因描述，长度不能超过500。
     * Required: false
     * Example Value: 由于该用户属于恶意刷单，不能发货。 等等
     */
    private $delApplyReason;

    /**
     * @param string $delApplyReason
     * 删单原因描述，长度不能超过500。
     * Example Value: 由于该用户属于恶意刷单，不能发货。 等等
     */
    public function setDelApplyReason($delApplyReason)
    {
        $this->delApplyReason             = $delApplyReason;
        $this->apiParas["del_apply_reason"]  = $delApplyReason;
    }

    public function getDelApplyReason()
    {
        return $this->delApplyReason;
    }

}