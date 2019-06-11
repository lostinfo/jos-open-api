<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 精准服务单取消接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2971&apiName=jingdong.eclp.inside.cancelAsOrder
 * Class EclpInsideCancelAsOrder
 * @package Jd\request
 */
class EclpInsideCancelAsOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.inside.cancelAsOrder";
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
     * 事业部编码
     * Required: true
     * Example Value: EBU001
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编码
     * Example Value: EBU001
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
     * @param string $sellerAsNo
     * 商家服务单号
     * Required: true
     * Example Value: sellerOrderNo001
     */
    private $sellerAsNo;

    /**
     * @param string $sellerAsNo
     * 商家服务单号
     * Example Value: sellerOrderNo001
     */
    public function setSellerAsNo($sellerAsNo)
    {
        $this->sellerAsNo             = $sellerAsNo;
        $this->apiParas["sellerAsNo"]  = $sellerAsNo;
    }

    public function getSellerAsNo()
    {
        return $this->sellerAsNo;
    }

}