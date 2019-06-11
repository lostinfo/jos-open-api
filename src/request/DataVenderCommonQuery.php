<?php

namespca Lostinfo\JosOpenApi;

/**
 * 数据查询组件接口
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3556&apiName=jingdong.data.vender.common.query
 * Class DataVenderCommonQuery
 * @package Jd\request
 */
class DataVenderCommonQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.common.query";
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
     * @param string $method
     * 方法名称
     * Required: true
     * Example Value: getShopUserData
     */
    private $method;

    /**
     * @param string $method
     * 方法名称
     * Example Value: getShopUserData
     */
    public function setMethod($method)
    {
        $this->method             = $method;
        $this->apiParas["method"]  = $method;
    }

    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $inputPara
     * 入参
     * Required: false
     * Example Value: {'op_time':'2019-05-06'}
     */
    private $inputPara;

    /**
     * @param string $inputPara
     * 入参
     * Example Value: {'op_time':'2019-05-06'}
     */
    public function setInputPara($inputPara)
    {
        $this->inputPara             = $inputPara;
        $this->apiParas["input_para"]  = $inputPara;
    }

    public function getInputPara()
    {
        return $this->inputPara;
    }

}