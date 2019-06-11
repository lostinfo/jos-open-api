<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询用户uid
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=1005&apiName=jingdong.uidbypin.query
 * Class UidbypinQuery
 * @package Jd\request
 */
class UidbypinQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.uidbypin.query";
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
     * @param  $fields
     * 此接口无需输入应用级参数，但需要构建空参数360buy_param_json={}
     * Required: true
     * Example Value: 
     */
    private $fields;

    /**
     * @param  $fields
     * 此接口无需输入应用级参数，但需要构建空参数360buy_param_json={}
     * Example Value: 
     */
    public function setFields($fields)
    {
        $this->fields             = $fields;
        $this->apiParas["fields"]  = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

}