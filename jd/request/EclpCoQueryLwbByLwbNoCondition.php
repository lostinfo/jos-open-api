<?php

namespace JD\request;

/**
 * 大件纯配运单状态查询(运单号)
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2393&apiName=jingdong.eclp.co.queryLwbByLwbNoCondition
 * Class EclpCoQueryLwbByLwbNoCondition
 * @package Jd\request
 */
class EclpCoQueryLwbByLwbNoCondition
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.queryLwbByLwbNoCondition";
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
     * @param String $lwbNo
     * 大件运单编号
     * Required: true
     * Example Value: LD10000028465
     */
    private $lwbNo;

    /**
     * @param String $lwbNo
     * 大件运单编号
     * Example Value: LD10000028465
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

    /**
     * @param String $deptNo
     * 事业部编号；EBU开头；当前用户需具备该事业部的合法权限；最大长度：50
     * Required: true
     * Example Value: EBU0000000000571
     */
    private $deptNo;

    /**
     * @param String $deptNo
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

    /**
     * @param String $waybillSign
     * 业务类型；如填写只能填写0或1； 0：B2C 1：B2B
     * Required: false
     * Example Value: 1
     */
    private $waybillSign;

    /**
     * @param String $waybillSign
     * 业务类型；如填写只能填写0或1； 0：B2C 1：B2B
     * Example Value: 1
     */
    public function setWaybillSign($waybillSign)
    {
        $this->waybillSign             = $waybillSign;
        $this->apiParas["waybillSign"]  = $waybillSign;
    }

    public function getWaybillSign()
    {
        return $this->waybillSign;
    }

}