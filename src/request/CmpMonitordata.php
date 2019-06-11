<?php

namespace JD\request;

/**
 * 新增监控数
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1645&apiName=jingdong.cmp.monitordata
 * Class CmpMonitordata
 * @package Jd\request
 */
class CmpMonitordata
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.cmp.monitordata";
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
     * @param String[] $devCode
     * 设备编号
     * Required: false
     * Example Value: 
     */
    private $devCode;

    /**
     * @param String[] $devCode
     * 设备编号
     * Example Value: 
     */
    public function setDevCode($devCode)
    {
        $this->devCode             = $devCode;
        $this->apiParas["devCode"]  = $devCode;
    }

    public function getDevCode()
    {
        return $this->devCode;
    }

    /**
     * @param Date[] $time
     * 采集时间
     * Required: false
     * Example Value: 
     */
    private $time;

    /**
     * @param Date[] $time
     * 采集时间
     * Example Value: 
     */
    public function setTime($time)
    {
        $this->time             = $time;
        $this->apiParas["time"]  = $time;
    }

    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param String[] $devMac
     * 设备mac地址
     * Required: false
     * Example Value: 
     */
    private $devMac;

    /**
     * @param String[] $devMac
     * 设备mac地址
     * Example Value: 
     */
    public function setDevMac($devMac)
    {
        $this->devMac             = $devMac;
        $this->apiParas["devMac"]  = $devMac;
    }

    public function getDevMac()
    {
        return $this->devMac;
    }

    /**
     * @param Number[] $dataType
     * 数据类型(1:温度 2:湿度)
     * Required: false
     * Example Value: 
     */
    private $dataType;

    /**
     * @param Number[] $dataType
     * 数据类型(1:温度 2:湿度)
     * Example Value: 
     */
    public function setDataType($dataType)
    {
        $this->dataType             = $dataType;
        $this->apiParas["dataType"]  = $dataType;
    }

    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @param Number[] $val
     * 温度湿度值
     * Required: false
     * Example Value: 
     */
    private $val;

    /**
     * @param Number[] $val
     * 温度湿度值
     * Example Value: 
     */
    public function setVal($val)
    {
        $this->val             = $val;
        $this->apiParas["val"]  = $val;
    }

    public function getVal()
    {
        return $this->val;
    }

    /**
     * @param String[] $longitude
     * 经度
     * Required: false
     * Example Value: 
     */
    private $longitude;

    /**
     * @param String[] $longitude
     * 经度
     * Example Value: 
     */
    public function setLongitude($longitude)
    {
        $this->longitude             = $longitude;
        $this->apiParas["longitude"]  = $longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param String[] $latitude
     * 纬度
     * Required: false
     * Example Value: 
     */
    private $latitude;

    /**
     * @param String[] $latitude
     * 纬度
     * Example Value: 
     */
    public function setLatitude($latitude)
    {
        $this->latitude             = $latitude;
        $this->apiParas["latitude"]  = $latitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param Number[] $battery
     * 电量
     * Required: false
     * Example Value: 
     */
    private $battery;

    /**
     * @param Number[] $battery
     * 电量
     * Example Value: 
     */
    public function setBattery($battery)
    {
        $this->battery             = $battery;
        $this->apiParas["battery"]  = $battery;
    }

    public function getBattery()
    {
        return $this->battery;
    }

    /**
     * @param Number[] $status
     * 状态(1:正常 2:异常)
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param Number[] $status
     * 状态(1:正常 2:异常)
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

}