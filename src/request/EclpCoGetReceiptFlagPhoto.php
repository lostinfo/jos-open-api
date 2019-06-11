<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * b2b纯配查看电子签单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2461&apiName=jingdong.eclp.co.getReceiptFlagPhoto
 * Class EclpCoGetReceiptFlagPhoto
 * @package Jd\request
 */
class EclpCoGetReceiptFlagPhoto
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.getReceiptFlagPhoto";
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
     * @param string $lwbNo
     * 青龙运单号；最大长度50
     * Required: true
     * Example Value: JDVC00000186621
     */
    private $lwbNo;

    /**
     * @param string $lwbNo
     * 青龙运单号；最大长度50
     * Example Value: JDVC00000186621
     */
    public function setLwbNo($lwbNo)
    {
        $this->lwbNo             = $lwbNo;
        $this->apiParas["lwbNo"]  = $lwbNo;
    }

    public function getLwbNo()
    {
        return $this->lwbNo;
    }

}