<?php

namespca Lostinfo\JosOpenApi;

/**
 * 取消小件纯配订单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2119&apiName=jingdong.eclp.co.cancelB2bLwbMain
 * Class EclpCoCancelB2bLwbMain
 * @package Jd\request
 */
class EclpCoCancelB2bLwbMain
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.cancelB2bLwbMain";
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
     * 事业部编号；最大长度50
     * Required: true
     * Example Value: EBU000000016
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号；最大长度50
     * Example Value: EBU000000016
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
     * 商家订单编号;商家单号不能包含中文，商家订单编号和青龙运单号必填1项,不能同时为空；最大长度50
     * Required: false
     * Example Value: 20190124
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 商家订单编号;商家单号不能包含中文，商家订单编号和青龙运单号必填1项,不能同时为空；最大长度50
     * Example Value: 20190124
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
     * @param string $wbNo
     * 京东单号(ECO单号)；商家订单编号和京东单号必填1项，不能同时为空；最大长度50
     * Required: false
     * Example Value: ECO52796582106668
     */
    private $wbNo;

    /**
     * @param string $wbNo
     * 京东单号(ECO单号)；商家订单编号和京东单号必填1项，不能同时为空；最大长度50
     * Example Value: ECO52796582106668
     */
    public function setWbNo($wbNo)
    {
        $this->wbNo             = $wbNo;
        $this->apiParas["wbNo"]  = $wbNo;
    }

    public function getWbNo()
    {
        return $this->wbNo;
    }

}