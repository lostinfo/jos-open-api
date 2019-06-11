<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * B2B纯配修改包裹数
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3022&apiName=jingdong.eclp.co.updateB2BSWbMainExpressItemQty
 * Class EclpCoUpdateB2BSWbMainExpressItemQty
 * @package Jd\request
 */
class EclpCoUpdateB2BSWbMainExpressItemQty
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.updateB2BSWbMainExpressItemQty";
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
     * Example Value: JDVA00000082251
     */
    private $no;

    /**
     * @param string $no
     * 单号；根据newWBType填写所需的单号；最大长度50
     * Example Value: JDVA00000082251
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

    /**
     * @param int $expressItemQty
     * 包裹数；修改后的包裹数目
     * Required: true
     * Example Value: 3
     */
    private $expressItemQty;

    /**
     * @param int $expressItemQty
     * 包裹数；修改后的包裹数目
     * Example Value: 3
     */
    public function setExpressItemQty($expressItemQty)
    {
        $this->expressItemQty             = $expressItemQty;
        $this->apiParas["expressItemQty"]  = $expressItemQty;
    }

    public function getExpressItemQty()
    {
        return $this->expressItemQty;
    }

}