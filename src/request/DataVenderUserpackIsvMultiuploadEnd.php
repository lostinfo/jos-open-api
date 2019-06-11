<?php

namespca Lostinfo\JosOpenApi;

/**
 * 完成分片上传任务接口(用于用户标签开放)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3005&apiName=jingdong.data.vender.userpack.isv.multiupload.end
 * Class DataVenderUserpackIsvMultiuploadEnd
 * @package Jd\request
 */
class DataVenderUserpackIsvMultiuploadEnd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.multiupload.end";
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
     * @param string $result_name
     * 人群包名称
     * Required: true
     * Example Value: 
     */
    private $result_name;

    /**
     * @param string $result_name
     * 人群包名称
     * Example Value: 
     */
    public function setResult_name($result_name)
    {
        $this->result_name             = $result_name;
        $this->apiParas["result_name"]  = $result_name;
    }

    public function getResult_name()
    {
        return $this->result_name;
    }

    /**
     * @param string $result_desc
     * 人群包描述
     * Required: true
     * Example Value: 
     */
    private $result_desc;

    /**
     * @param string $result_desc
     * 人群包描述
     * Example Value: 
     */
    public function setResult_desc($result_desc)
    {
        $this->result_desc             = $result_desc;
        $this->apiParas["result_desc"]  = $result_desc;
    }

    public function getResult_desc()
    {
        return $this->result_desc;
    }

    /**
     * @param int $last_part_number
     * 最后一个分片编号
     * Required: true
     * Example Value: 
     */
    private $last_part_number;

    /**
     * @param int $last_part_number
     * 最后一个分片编号
     * Example Value: 
     */
    public function setLast_part_number($last_part_number)
    {
        $this->last_part_number             = $last_part_number;
        $this->apiParas["last_part_number"]  = $last_part_number;
    }

    public function getLast_part_number()
    {
        return $this->last_part_number;
    }

}