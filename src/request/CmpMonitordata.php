<?php

namespca Lostinfo\JosOpenApi;

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
     * @param string[] $devCode
     * 设备编号
     * Required: false
     * Example Value: 
     */
    private $devCode;

    /**
     * @param string[] $devCode
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
     * @param string[] $time
     * 采集时间
     * Required: false
     * Example Value: 
     */
    private $time;

    /**
     * @param string[] $time
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
     * @param string[] $devMac
     * 设备mac地址
     * Required: false
     * Example Value: 
     */
    private $devMac;

    /**
     * @param string[] $devMac
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
     * @param int[] $dataType
     * 数据类型(1:温度 2:湿度)
     * Required: false
     * Example Value: 
     */
    private $dataType;

    /**
     * @param int[] $dataType
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
     * @param int[] $val
     * 温度湿度值
     * Required: false
     * Example Value: 
     */
    private $val;

    /**
     * @param int[] $val
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
     * @param string[] $longitude
     * 经度
     * Required: false
     * Example Value: 
     */
    private $longitude;

    /**
     * @param string[] $longitude
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
     * @param string[] $latitude
     * 纬度
     * Required: false
     * Example Value: 
     */
    private $latitude;

    /**
     * @param string[] $latitude
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
     * @param int[] $battery
     * 电量
     * Required: false
     * Example Value: 
     */
    private $battery;

    /**
     * @param int[] $battery
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
     * @param int[] $status
     * 状态(1:正常 2:异常)
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param int[] $status
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