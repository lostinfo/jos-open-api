<?php

namespace JD\request;

/**
 * 咚咚敏感词校验
 * 咚咚API-京东咚咚系统API，包含：查询信息、客服日评价、客服登陆日志、时长等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=53&apiId=3458&apiName=jingdong.risk.sensitiveWordCheck
 * Class RiskSensitiveWordCheck
 * @package Jd\request
 */
class RiskSensitiveWordCheck
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.risk.sensitiveWordCheck";
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
     * @param String $appId
     * 应用标识
     * Required: true
     * Example Value: im.customer
     */
    private $appId;

    /**
     * @param String $appId
     * 应用标识
     * Example Value: im.customer
     */
    public function setAppId($appId)
    {
        $this->appId             = $appId;
        $this->apiParas["appId"]  = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param String $clientType
     * 客户端类型
     * Required: true
     * Example Value: pc
     */
    private $clientType;

    /**
     * @param String $clientType
     * 客户端类型
     * Example Value: pc
     */
    public function setClientType($clientType)
    {
        $this->clientType             = $clientType;
        $this->apiParas["clientType"]  = $clientType;
    }

    public function getClientType()
    {
        return $this->clientType;
    }

    /**
     * @param String $content
     * 待验证文本
     * Required: true
     * Example Value: 诈骗
     */
    private $content;

    /**
     * @param String $content
     * 待验证文本
     * Example Value: 诈骗
     */
    public function setContent($content)
    {
        $this->content             = $content;
        $this->apiParas["content"]  = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param String $scope
     * 作用范围
     * Required: true
     * Example Value: customer
     */
    private $scope;

    /**
     * @param String $scope
     * 作用范围
     * Example Value: customer
     */
    public function setScope($scope)
    {
        $this->scope             = $scope;
        $this->apiParas["scope"]  = $scope;
    }

    public function getScope()
    {
        return $this->scope;
    }

}