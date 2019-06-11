<?php

namespca Lostinfo\JosOpenApi;

/**
 * 上传单个分片接口(用于用户标签开放)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3026&apiName=jingdong.data.vender.userpack.isv.multiupload.process
 * Class DataVenderUserpackIsvMultiuploadProcess
 * @package Jd\request
 */
class DataVenderUserpackIsvMultiuploadProcess
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.multiupload.process";
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
     * @param string $upload_id
     * 上传ID
     * Required: true
     * Example Value: 
     */
    private $upload_id;

    /**
     * @param string $upload_id
     * 上传ID
     * Example Value: 
     */
    public function setUpload_id($upload_id)
    {
        $this->upload_id             = $upload_id;
        $this->apiParas["upload_id"]  = $upload_id;
    }

    public function getUpload_id()
    {
        return $this->upload_id;
    }

    /**
     * @param byte[] $bytes
     * 上传数据(最多2M)
     * Required: true
     * Example Value: 
     */
    private $bytes;

    /**
     * @param byte[] $bytes
     * 上传数据(最多2M)
     * Example Value: 
     */
    public function setBytes($bytes)
    {
        $this->bytes             = $bytes;
        $this->apiParas["bytes"]  = $bytes;
    }

    public function getBytes()
    {
        return $this->bytes;
    }

    /**
     * @param int $length
     * 上传数据长度(最大1024 X1024 X 2),bytes参数中超过该长度的字节将会被忽略
     * Required: true
     * Example Value: 
     */
    private $length;

    /**
     * @param int $length
     * 上传数据长度(最大1024 X1024 X 2),bytes参数中超过该长度的字节将会被忽略
     * Example Value: 
     */
    public function setLength($length)
    {
        $this->length             = $length;
        $this->apiParas["length"]  = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $part_number
     * 分片编号：从1开始的顺序编号，标识分片在文件中的先后顺序
     * Required: true
     * Example Value: 
     */
    private $part_number;

    /**
     * @param int $part_number
     * 分片编号：从1开始的顺序编号，标识分片在文件中的先后顺序
     * Example Value: 
     */
    public function setPart_number($part_number)
    {
        $this->part_number             = $part_number;
        $this->apiParas["part_number"]  = $part_number;
    }

    public function getPart_number()
    {
        return $this->part_number;
    }

    /**
     * @param string $md5
     * 分片字节所对应的md5值
     * Required: true
     * Example Value: 
     */
    private $md5;

    /**
     * @param string $md5
     * 分片字节所对应的md5值
     * Example Value: 
     */
    public function setMd5($md5)
    {
        $this->md5             = $md5;
        $this->apiParas["md5"]  = $md5;
    }

    public function getMd5()
    {
        return $this->md5;
    }

}