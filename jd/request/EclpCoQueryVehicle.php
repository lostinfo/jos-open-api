<?php

namespace JD\request;

/**
 * B2B纯配车型查询接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2327&apiName=jingdong.eclp.co.queryVehicle
 * Class EclpCoQueryVehicle
 * @package Jd\request
 */
class EclpCoQueryVehicle
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.queryVehicle";
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

}