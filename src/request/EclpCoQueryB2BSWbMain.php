<?php

namespca Lostinfo\JosOpenApi;

/**
 * 运单详情查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2227&apiName=jingdong.eclp.co.queryB2BSWbMain
 * Class EclpCoQueryB2BSWbMain
 * @package Jd\request
 */
class EclpCoQueryB2BSWbMain
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.queryB2BSWbMain";
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
     * 单号类型；只能填写0,1,2这三个正整数，0-no为商家订单号orderNo、1-no为ECLP单号wbNo、2-no为青龙运单号lwbNo
     * Required: true
     * Example Value: 0
     */
    private $newWBType;

    /**
     * @param int $newWBType
     * 单号类型；只能填写0,1,2这三个正整数，0-no为商家订单号orderNo、1-no为ECLP单号wbNo、2-no为青龙运单号lwbNo
     * Example Value: 0
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
     * 单号；根据单号类型填写对应的单号；0订单号最大长度200，1eclp运单号最大长度50,2青龙运单号最大长度50
     * Required: true
     * Example Value: VA00040295430
     */
    private $no;

    /**
     * @param string $no
     * 单号；根据单号类型填写对应的单号；0订单号最大长度200，1eclp运单号最大长度50,2青龙运单号最大长度50
     * Example Value: VA00040295430
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