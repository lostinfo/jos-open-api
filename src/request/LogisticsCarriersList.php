<?php

namespace JD\request;

/**
 * 获取承运商信息列表
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=142&apiName=jingdong.logistics.carriers.list
 * Class LogisticsCarriersList
 * @package Jd\request
 */
class LogisticsCarriersList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.carriers.list";
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