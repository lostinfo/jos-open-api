<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 停止isv活动
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2515&apiName=jingdong.promo.unit.closeIsvActivity
 * Class PromoUnitCloseIsvActivity
 * @package Jd\request
 */
class PromoUnitCloseIsvActivity
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.promo.unit.closeIsvActivity";
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
     * @param int $isvActivityId
     * 活动ID
     * Required: true
     * Example Value: 
     */
    private $isvActivityId;

    /**
     * @param int $isvActivityId
     * 活动ID
     * Example Value: 
     */
    public function setIsvActivityId($isvActivityId)
    {
        $this->isvActivityId             = $isvActivityId;
        $this->apiParas["isvActivityId"]  = $isvActivityId;
    }

    public function getIsvActivityId()
    {
        return $this->isvActivityId;
    }

}