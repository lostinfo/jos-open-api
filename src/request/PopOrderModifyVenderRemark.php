<?php

namespace JD\request;

/**
 * 修改商家备注
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2406&apiName=jingdong.pop.order.modifyVenderRemark
 * Class PopOrderModifyVenderRemark
 * @package Jd\request
 */
class PopOrderModifyVenderRemark
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.modifyVenderRemark";
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
     * 订单号
     * Required: true
     * Example Value: 73587941894
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 订单号
     * Example Value: 73587941894
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
     * @param Number $flag
     * 旗标。颜色标识，不填默认为0，枚举值：（GRAY(0),RED(1),YELLOW(2),GREEN(3),BLUE(4),PURPLE(5)）
     * Required: true
     * Example Value: 3
     */
    private $flag;

    /**
     * @param Number $flag
     * 旗标。颜色标识，不填默认为0，枚举值：（GRAY(0),RED(1),YELLOW(2),GREEN(3),BLUE(4),PURPLE(5)）
     * Example Value: 3
     */
    public function setFlag($flag)
    {
        $this->flag             = $flag;
        $this->apiParas["flag"]  = $flag;
    }

    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param String $remark
     * 商家备注信息
     * Required: true
     * Example Value: 客户咨询，协助处理
     */
    private $remark;

    /**
     * @param String $remark
     * 商家备注信息
     * Example Value: 客户咨询，协助处理
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
     * @param Number $clientType
     * 客户端来源
     * Required: false
     * Example Value: 
     */
    private $clientType;

    /**
     * @param Number $clientType
     * 客户端来源
     * Example Value: 
     */
    public function setClientType($clientType)
    {
        $this->clientType             = $clientType;
        $this->apiParas["param"]  = $clientType;
    }

    public function getClientType()
    {
        return $this->clientType;
    }

}