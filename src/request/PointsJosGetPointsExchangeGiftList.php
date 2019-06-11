<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询正在进行中的积分兑换商品活动列表
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3284&apiName=jingdong.points.jos.getPointsExchangeGiftList
 * Class PointsJosGetPointsExchangeGiftList
 * @package Jd\request
 */
class PointsJosGetPointsExchangeGiftList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.points.jos.getPointsExchangeGiftList";
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

}