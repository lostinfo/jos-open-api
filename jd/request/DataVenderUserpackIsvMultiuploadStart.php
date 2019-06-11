<?php

namespace JD\request;

/**
 * 开始分片上传任务接口(用于用户标签开放)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3017&apiName=jingdong.data.vender.userpack.isv.multiupload.start
 * Class DataVenderUserpackIsvMultiuploadStart
 * @package Jd\request
 */
class DataVenderUserpackIsvMultiuploadStart
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.multiupload.start";
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
     * @param String $file_type
     * 文件类型：目前只允许txt类型  。文本文件内容格式要求：每行一个pin，通过\n\r换行分割，文本内容必须以GBK编码
     * Required: true
     * Example Value: 
     */
    private $file_type;

    /**
     * @param String $file_type
     * 文件类型：目前只允许txt类型  。文本文件内容格式要求：每行一个pin，通过\n\r换行分割，文本内容必须以GBK编码
     * Example Value: 
     */
    public function setFile_type($file_type)
    {
        $this->file_type             = $file_type;
        $this->apiParas["file_type"]  = $file_type;
    }

    public function getFile_type()
    {
        return $this->file_type;
    }

    /**
     * @param Number $file_size
     * 文件大小：文件的字节数
     * Required: true
     * Example Value: 
     */
    private $file_size;

    /**
     * @param Number $file_size
     * 文件大小：文件的字节数
     * Example Value: 
     */
    public function setFile_size($file_size)
    {
        $this->file_size             = $file_size;
        $this->apiParas["file_size"]  = $file_size;
    }

    public function getFile_size()
    {
        return $this->file_size;
    }

    /**
     * @param String $md5
     * 文件整体的md5值：32位16进制串
     * Required: true
     * Example Value: 
     */
    private $md5;

    /**
     * @param String $md5
     * 文件整体的md5值：32位16进制串
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