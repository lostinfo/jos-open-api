<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 申请下单
 * 移动店铺API-移动店铺新业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=202&apiId=1764&apiName=jingdong.miniwms.oc.order.applyOrderTask
 * Class MiniwmsOcOrderApplyOrderTask
 * @package Jd\request
 */
class MiniwmsOcOrderApplyOrderTask
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.miniwms.oc.order.applyOrderTask";
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
     * @param string $stationId
     * 移动仓ID
     * Required: true
     * Example Value: 
     */
    private $stationId;

    /**
     * @param string $stationId
     * 移动仓ID
     * Example Value: 
     */
    public function setStationId($stationId)
    {
        $this->stationId             = $stationId;
        $this->apiParas["stationId"]  = $stationId;
    }

    public function getStationId()
    {
        return $this->stationId;
    }

    /**
     * @param string $uuid
     * 防重码
     * Required: true
     * Example Value: 
     */
    private $uuid;

    /**
     * @param string $uuid
     * 防重码
     * Example Value: 
     */
    public function setUuid($uuid)
    {
        $this->uuid             = $uuid;
        $this->apiParas["uuid"]  = $uuid;
    }

    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string[] $goodsNo
     * 商品编号
     * Required: true
     * Example Value: 
     */
    private $goodsNo;

    /**
     * @param string[] $goodsNo
     * 商品编号
     * Example Value: 
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goodsNo"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param int[] $num
     * 商品数量
     * Required: true
     * Example Value: 
     */
    private $num;

    /**
     * @param int[] $num
     * 商品数量
     * Example Value: 
     */
    public function setNum($num)
    {
        $this->num             = $num;
        $this->apiParas["num"]  = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

}