<?php

namespca Lostinfo\JosOpenApi;

/**
 * 计算人群包-交并差(用于用户标签开放)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2947&apiName=jingdong.data.vender.userpack.isv.compute
 * Class DataVenderUserpackIsvCompute
 * @package Jd\request
 */
class DataVenderUserpackIsvCompute
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.compute";
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
     * @param string $resultName
     * 人群包名称
     * Required: true
     * Example Value: 
     */
    private $resultName;

    /**
     * @param string $resultName
     * 人群包名称
     * Example Value: 
     */
    public function setResultName($resultName)
    {
        $this->resultName             = $resultName;
        $this->apiParas["result_name"]  = $resultName;
    }

    public function getResultName()
    {
        return $this->resultName;
    }

    /**
     * @param string $resultDesc
     * 人群包描述
     * Required: true
     * Example Value: 
     */
    private $resultDesc;

    /**
     * @param string $resultDesc
     * 人群包描述
     * Example Value: 
     */
    public function setResultDesc($resultDesc)
    {
        $this->resultDesc             = $resultDesc;
        $this->apiParas["result_desc"]  = $resultDesc;
    }

    public function getResultDesc()
    {
        return $this->resultDesc;
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
     * @param string $callback
     * 异步任务的回调URL(REST请求)
     * Required: false
     * Example Value: 
     */
    private $callback;

    /**
     * @param string $callback
     * 异步任务的回调URL(REST请求)
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