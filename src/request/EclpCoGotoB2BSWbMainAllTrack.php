<?php

namespca Lostinfo\JosOpenApi;

/**
 * b2b纯配订单全程跟踪
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2228&apiName=jingdong.eclp.co.gotoB2BSWbMainAllTrack
 * Class EclpCoGotoB2BSWbMainAllTrack
 * @package Jd\request
 */
class EclpCoGotoB2BSWbMainAllTrack
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.gotoB2BSWbMainAllTrack";
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
     * Example Value: EBU4418046536619
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号；最大长度50
     * Example Value: EBU4418046536619
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
     * @param int $newWBType
     * 单号类型；查询的单号类型，填0时no字段请填写商家订单号orderNo、填1时no字段请填写ECLP单号wbNo、填2时no字段请填写青龙运单号lwbNo
     * Required: true
     * Example Value: 2
     */
    private $newWBType;

    /**
     * @param int $newWBType
     * 单号类型；查询的单号类型，填0时no字段请填写商家订单号orderNo、填1时no字段请填写ECLP单号wbNo、填2时no字段请填写青龙运单号lwbNo
     * Example Value: 2
     */
    public function setNewWBType($newWBType)
    {
        $this->newWBType             = $newWBType;
        $this->apiParas["newWBType"]  = $newWBType;
    }

    public function getNewWBType()
    {
        return $this->newWBType;
    }

    /**
     * @param string $no
     * 单号；根据newWBType填写所需的单号；最大长度50
     * Required: true
     * Example Value: JDVC00000186621
     */
    private $no;

    /**
     * @param string $no
     * 单号；根据newWBType填写所需的单号；最大长度50
     * Example Value: JDVC00000186621
     */
    public function setNo($no)
    {
        $this->no             = $no;
        $this->apiParas["no"]  = $no;
    }

    public function getNo()
    {
        return $this->no;
    }

}