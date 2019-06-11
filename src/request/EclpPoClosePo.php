<?php

namespca Lostinfo\JosOpenApi;

/**
 * 采购关单接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3631&apiName=jingdong.eclp.po.closePo
 * Class EclpPoClosePo
 * @package Jd\request
 */
class EclpPoClosePo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.po.closePo";
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
     * @param string $poOrderNo
     * ECLP采购单号
     * Required: true
     * Example Value: 1111
     */
    private $poOrderNo;

    /**
     * @param string $poOrderNo
     * ECLP采购单号
     * Example Value: 1111
     */
    public function setPoOrderNo($poOrderNo)
    {
        $this->poOrderNo             = $poOrderNo;
        $this->apiParas["poOrderNo"]  = $poOrderNo;
    }

    public function getPoOrderNo()
    {
        return $this->poOrderNo;
    }

}