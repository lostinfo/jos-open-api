<?php

namespace JD\request;

/**
 * 大件取消接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2709&apiName=jingdong.eclp.co.cancelLwbMain
 * Class EclpCoCancelLwbMain
 * @package Jd\request
 */
class EclpCoCancelLwbMain
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.cancelLwbMain";
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
     * @param String $deptNo
     * 事业部编号；最大长度50
     * Required: true
     * Example Value: EBU000000016
     */
    private $deptNo;

    /**
     * @param String $deptNo
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
     * @param String $orderNo
     * 商家订单编号;商家单号不能包含中文，商家订单编号和青龙运单号必填1项,不能同时为空；最大长度50
     * Required: false
     * Example Value: 20190124
     */
    private $orderNo;

    /**
     * @param String $orderNo
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
     * @param String $lwbNo
     * 青龙运单号；商家订单编号和青龙运单号必填1项，不能同时为空；最大长度50
     * Required: false
     * Example Value: VA00040295430
     */
    private $lwbNo;

    /**
     * @param String $lwbNo
     * 青龙运单号；商家订单编号和青龙运单号必填1项，不能同时为空；最大长度50
     * Example Value: VA00040295430
     */
    public function setLwbNo($lwbNo)
    {
        $this->lwbNo             = $lwbNo;
        $this->apiParas["lwbNo"]  = $lwbNo;
    }

    public function getLwbNo()
    {
        return $this->lwbNo;
    }

}