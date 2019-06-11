<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 删除小区下经纪人数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2959&apiName=jingdong.ers.fang.deleteBrokerByPlotId
 * Class ErsFangDeleteBrokerByPlotId
 * @package Jd\request
 */
class ErsFangDeleteBrokerByPlotId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.deleteBrokerByPlotId";
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
     * @param int $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int $cityCode
     * 城市code
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["cityCode"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param int $pSourceId
     * 来源小区主键
     * Required: true
     * Example Value: 
     */
    private $pSourceId;

    /**
     * @param int $pSourceId
     * 来源小区主键
     * Example Value: 
     */
    public function setPSourceId($pSourceId)
    {
        $this->pSourceId             = $pSourceId;
        $this->apiParas["pSourceId"]  = $pSourceId;
    }

    public function getPSourceId()
    {
        return $this->pSourceId;
    }

}