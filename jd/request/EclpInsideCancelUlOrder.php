<?php

namespace JD\request;

/**
 * 报废出库取消
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2772&apiName=jingdong.eclp.inside.cancelUlOrder
 * Class EclpInsideCancelUlOrder
 * @package Jd\request
 */
class EclpInsideCancelUlOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.inside.cancelUlOrder";
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
     * @param String $ulNo
     * ECLP报废单号，以EUL开头，最大长度50
     * Required: false
     * Example Value: EUL4398046512116
     */
    private $ulNo;

    /**
     * @param String $ulNo
     * ECLP报废单号，以EUL开头，最大长度50
     * Example Value: EUL4398046512116
     */
    public function setUlNo($ulNo)
    {
        $this->ulNo             = $ulNo;
        $this->apiParas["ulNo"]  = $ulNo;
    }

    public function getUlNo()
    {
        return $this->ulNo;
    }

    /**
     * @param String $outUlNo
     * 商家报废单号，最大长度50
     * Required: true
     * Example Value: OCN0034554303
     */
    private $outUlNo;

    /**
     * @param String $outUlNo
     * 商家报废单号，最大长度50
     * Example Value: OCN0034554303
     */
    public function setOutUlNo($outUlNo)
    {
        $this->outUlNo             = $outUlNo;
        $this->apiParas["outUlNo"]  = $outUlNo;
    }

    public function getOutUlNo()
    {
        return $this->outUlNo;
    }

    /**
     * @param String $deptNo
     * ECLP事业部编号，以EBU开头，最大长度50
     * Required: true
     * Example Value: EBU4398046515824
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * ECLP事业部编号，以EBU开头，最大长度50
     * Example Value: EBU4398046515824
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
     * @param String $wareHouseNo
     * ECLP仓库编号，最大长度20
     * Required: true
     * Example Value: 110005442
     */
    private $wareHouseNo;

    /**
     * @param String $wareHouseNo
     * ECLP仓库编号，最大长度20
     * Example Value: 110005442
     */
    public function setWareHouseNo($wareHouseNo)
    {
        $this->wareHouseNo             = $wareHouseNo;
        $this->apiParas["wareHouseNo"]  = $wareHouseNo;
    }

    public function getWareHouseNo()
    {
        return $this->wareHouseNo;
    }

}