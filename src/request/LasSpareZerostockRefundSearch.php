<?php

namespace JD\request;

/**
 * 大家电备件库查看退货明细
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1901&apiName=jingdong.las.spare.zerostock.refund.search
 * Class LasSpareZerostockRefundSearch
 * @package Jd\request
 */
class LasSpareZerostockRefundSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.spare.zerostock.refund.search";
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
     * @param String $stockOutNo
     * 出库单号
     * Required: true
     * Example Value: 
     */
    private $stockOutNo;

    /**
     * @param String $stockOutNo
     * 出库单号
     * Example Value: 
     */
    public function setStockOutNo($stockOutNo)
    {
        $this->stockOutNo             = $stockOutNo;
        $this->apiParas["out_no"]  = $stockOutNo;
    }

    public function getStockOutNo()
    {
        return $this->stockOutNo;
    }

}