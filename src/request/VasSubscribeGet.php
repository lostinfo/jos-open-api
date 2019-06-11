<?php

namespace JD\request;

/**
 * 订购关系查询（根据购买用户名和收费项目代码获取订购关系时长）
 * 服务市场API-服务市场API包括发布服务市场中订购关系查询API、服务操作API、获取服务列表、获取和服务相对应的收费项目列表等API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=66&apiId=402&apiName=jingdong.vas.subscribe.get
 * Class VasSubscribeGet
 * @package Jd\request
 */
class VasSubscribeGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vas.subscribe.get";
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
     * @param String $userName
     * 用户名,获取user_name 见服务授权说明：http://jos.jd.com/doc/channel.htm?id=246</br>用户第一次使用软件时，授权会返回code和state字段，state后面的字段时经过base64编码。反编码后，获取字段用户user_name.
     * Required: true
     * Example Value: 
     */
    private $userName;

    /**
     * @param String $userName
     * 用户名,获取user_name 见服务授权说明：http://jos.jd.com/doc/channel.htm?id=246</br>用户第一次使用软件时，授权会返回code和state字段，state后面的字段时经过base64编码。反编码后，获取字段用户user_name.
     * Example Value: 
     */
    public function setUserName($userName)
    {
        $this->userName             = $userName;
        $this->apiParas["user_name"]  = $userName;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param String $itemCode
     * 应用收费代码
     * Required: true
     * Example Value: 
     */
    private $itemCode;

    /**
     * @param String $itemCode
     * 应用收费代码
     * Example Value: 
     */
    public function setItemCode($itemCode)
    {
        $this->itemCode             = $itemCode;
        $this->apiParas["item_code"]  = $itemCode;
    }

    public function getItemCode()
    {
        return $this->itemCode;
    }

}