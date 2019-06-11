<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 主动拆分
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2229&apiName=jingdong.pop.order.orderSplitCommitXmlApi
 * Class PopOrderOrderSplitCommitXmlApi
 * @package Jd\request
 */
class PopOrderOrderSplitCommitXmlApi
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.orderSplitCommitXmlApi";
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
     * @param string $param
     * xml参数，拆单描述。内容示例请联系jos客服。
     * Required: true
     * Example Value: 
     */
    private $param;

    /**
     * @param string $param
     * xml参数，拆单描述。内容示例请联系jos客服。
     * Example Value: 
     */
    public function setParam($param)
    {
        $this->param             = $param;
        $this->apiParas["param"]  = $param;
    }

    public function getParam()
    {
        return $this->param;
    }

}