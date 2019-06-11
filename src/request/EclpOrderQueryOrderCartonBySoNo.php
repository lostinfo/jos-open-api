<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询订单箱明细
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2359&apiName=jingdong.eclp.order.queryOrderCartonBySoNo
 * Class EclpOrderQueryOrderCartonBySoNo
 * @package Jd\request
 */
class EclpOrderQueryOrderCartonBySoNo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.queryOrderCartonBySoNo";
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
     * @param string $soNo
     * 订单号
     * Required: true
     * Example Value: ESL8888888888888
     */
    private $soNo;

    /**
     * @param string $soNo
     * 订单号
     * Example Value: ESL8888888888888
     */
    public function setSoNo($soNo)
    {
        $this->soNo             = $soNo;
        $this->apiParas["soNo"]  = $soNo;
    }

    public function getSoNo()
    {
        return $this->soNo;
    }

}