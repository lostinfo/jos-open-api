<?php

namespace JD\request;

/**
 * 设置商品定时上下架
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1319&apiName=jingdong.ware.write.updateWareStatusByTimer
 * Class WareWriteUpdateWareStatusByTimer
 * @package Jd\request
 */
class WareWriteUpdateWareStatusByTimer
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.write.updateWareStatusByTimer";
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
     * @param Number $wareId
     * 商品ID必填
     * Required: true
     * Example Value: 11122255555
     */
    private $wareId;

    /**
     * @param Number $wareId
     * 商品ID必填
     * Example Value: 11122255555
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param Number $upTime
     * 定时上架时间（时间转成long）,格式：必须13位timestamp long型
     * Required: false
     * Example Value: 1451464776884
     */
    private $upTime;

    /**
     * @param Number $upTime
     * 定时上架时间（时间转成long）,格式：必须13位timestamp long型
     * Example Value: 1451464776884
     */
    public function setUpTime($upTime)
    {
        $this->upTime             = $upTime;
        $this->apiParas["upTime"]  = $upTime;
    }

    public function getUpTime()
    {
        return $this->upTime;
    }

    /**
     * @param Number $downTime
     * 定时下架时间（时间转成long）,格式：必须13位timestamp long型
     * Required: false
     * Example Value: 1451464776884
     */
    private $downTime;

    /**
     * @param Number $downTime
     * 定时下架时间（时间转成long）,格式：必须13位timestamp long型
     * Example Value: 1451464776884
     */
    public function setDownTime($downTime)
    {
        $this->downTime             = $downTime;
        $this->apiParas["downTime"]  = $downTime;
    }

    public function getDownTime()
    {
        return $this->downTime;
    }

}