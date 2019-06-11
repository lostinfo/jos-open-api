<?php

namespca Lostinfo\JosOpenApi;

/**
 * 大件纯配运单状态查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2243&apiName=jingdong.eclp.co.queryLwbByCondition
 * Class EclpCoQueryLwbByCondition
 * @package Jd\request
 */
class EclpCoQueryLwbByCondition
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.queryLwbByCondition";
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
     * @param string $orderNo
     * 商家订单编号
     * Required: true
     * Example Value: 201901241657
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 商家订单编号
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
     * @param string $deptNo
     * 事业部编号；EBU开头；当前用户需具备该事业部的合法权限；最大长度：50
     * Required: true
     * Example Value: EBU0000000000571
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号；EBU开头；当前用户需具备该事业部的合法权限；最大长度：50
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

}