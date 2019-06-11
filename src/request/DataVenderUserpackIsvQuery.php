<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 筛选人群包接口(用于用户标签开放)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2949&apiName=jingdong.data.vender.userpack.isv.query
 * Class DataVenderUserpackIsvQuery
 * @package Jd\request
 */
class DataVenderUserpackIsvQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.query";
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
     * @param string $condition
     * 筛选条件
     * Required: true
     * Example Value: 
     */
    private $condition;

    /**
     * @param string $condition
     * 筛选条件
     * Example Value: 
     */
    public function setCondition($condition)
    {
        $this->condition             = $condition;
        $this->apiParas["condition"]  = $condition;
    }

    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param  $dataType
     * 结果包类型, 默认1 (1:PIN, 5:OPEN_ID)
     * Required: false
     * Example Value: 
     */
    private $dataType;

    /**
     * @param  $dataType
     * 结果包类型, 默认1 (1:PIN, 5:OPEN_ID)
     * Example Value: 
     */
    public function setDataType($dataType)
    {
        $this->dataType             = $dataType;
        $this->apiParas["data_type"]  = $dataType;
    }

    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @param string $callback
     * 异步任务的回调URL(REST请求，废弃)
     * Required: false
     * Example Value: 
     */
    private $callback;

    /**
     * @param string $callback
     * 异步任务的回调URL(REST请求，废弃)
     * Example Value: 
     */
    public function setCallback($callback)
    {
        $this->callback             = $callback;
        $this->apiParas["callback"]  = $callback;
    }

    public function getCallback()
    {
        return $this->callback;
    }

}