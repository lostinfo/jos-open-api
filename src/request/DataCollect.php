<?php

namespace JD\request;

/**
 * 数据采集接口
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2813&apiName=jingdong.data.collect
 * Class DataCollect
 * @package Jd\request
 */
class DataCollect
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.collect";
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
     * @param String $data_class
     * 数据主题
     * Required: true
     * Example Value: store-device-info
     */
    private $data_class;

    /**
     * @param String $data_class
     * 数据主题
     * Example Value: store-device-info
     */
    public function setData_class($data_class)
    {
        $this->data_class             = $data_class;
        $this->apiParas["data_class"]  = $data_class;
    }

    public function getData_class()
    {
        return $this->data_class;
    }

    /**
     * @param String $data
     * 采集的数据
     * Required: true
     * Example Value: [{'storeid':3402529,'bid':73025220,'deviceid':73025292828,'device_type':'wifi','device_supplier':'Wifi','device_num':1222635796844556,'device_mac':'7c:11:cb:46:66:a8','createdTime':1531882315118}]
     */
    private $data;

    /**
     * @param String $data
     * 采集的数据
     * Example Value: [{'storeid':3402529,'bid':73025220,'deviceid':73025292828,'device_type':'wifi','device_supplier':'Wifi','device_num':1222635796844556,'device_mac':'7c:11:cb:46:66:a8','createdTime':1531882315118}]
     */
    public function setData($data)
    {
        $this->data             = $data;
        $this->apiParas["data"]  = $data;
    }

    public function getData()
    {
        return $this->data;
    }

}