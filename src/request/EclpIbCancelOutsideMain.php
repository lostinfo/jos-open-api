<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 取消仓间调拨单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1722&apiName=jingdong.eclp.ib.cancelOutsideMain
 * Class EclpIbCancelOutsideMain
 * @package Jd\request
 */
class EclpIbCancelOutsideMain
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.ib.cancelOutsideMain";
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
     * @param string $outsideMainNo
     * 调拨单号，以ENP开头，最大长度50
     * Required: true
     * Example Value: ENP4418046626846
     */
    private $outsideMainNo;

    /**
     * @param string $outsideMainNo
     * 调拨单号，以ENP开头，最大长度50
     * Example Value: ENP4418046626846
     */
    public function setOutsideMainNo($outsideMainNo)
    {
        $this->outsideMainNo             = $outsideMainNo;
        $this->apiParas["outsideMainNo"]  = $outsideMainNo;
    }

    public function getOutsideMainNo()
    {
        return $this->outsideMainNo;
    }

}