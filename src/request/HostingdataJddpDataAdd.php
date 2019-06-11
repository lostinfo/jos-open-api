<?php

namespace JD\request;

/**
 * 上传
 * 云海API-云海数据开放平台支持API  data.jd.com
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=70&apiId=311&apiName=jingdong.hostingdata.jddp.data.add
 * Class HostingdataJddpDataAdd
 * @package Jd\request
 */
class HostingdataJddpDataAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.hostingdata.jddp.data.add";
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
     * @param String $tableName
     * 上传的数据的表名
     * Required: true
     * Example Value: pri_upload.uploadtable
     */
    private $tableName;

    /**
     * @param String $tableName
     * 上传的数据的表名
     * Example Value: pri_upload.uploadtable
     */
    public function setTableName($tableName)
    {
        $this->tableName             = $tableName;
        $this->apiParas["tableName"]  = $tableName;
    }

    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * @param String $data
     * 上传的数据，形式为column1=value1,column2=value2,...的字符串，多条记录以;隔开
     * Required: true
     * Example Value: name=joy1,age=11;name=joy2,age=16
     */
    private $data;

    /**
     * @param String $data
     * 上传的数据，形式为column1=value1,column2=value2,...的字符串，多条记录以;隔开
     * Example Value: name=joy1,age=11;name=joy2,age=16
     */
    public function setData($data)
    {
        $this->data             = $data;
        $this->apiParas["dataList"]  = $data;
    }

    public function getData()
    {
        return $this->data;
    }

}