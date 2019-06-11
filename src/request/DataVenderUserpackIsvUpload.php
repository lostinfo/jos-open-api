<?php

namespca Lostinfo\JosOpenApi;

/**
 * 上传人群包接口(用于用户标签开放)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2948&apiName=jingdong.data.vender.userpack.isv.upload
 * Class DataVenderUserpackIsvUpload
 * @package Jd\request
 */
class DataVenderUserpackIsvUpload
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.upload";
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
     * @param string $text
     * 以逗号分隔的BASE64编码人群包
     * Required: true
     * Example Value: 
     */
    private $text;

    /**
     * @param string $text
     * 以逗号分隔的BASE64编码人群包
     * Example Value: 
     */
    public function setText($text)
    {
        $this->text             = $text;
        $this->apiParas["text"]  = $text;
    }

    public function getText()
    {
        return $this->text;
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