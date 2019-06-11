<?php

namespace JD\request;

/**
 * 数据服务
 * 咚咚API-京东咚咚系统API，包含：查询信息、客服日评价、客服登陆日志、时长等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=53&apiId=3294&apiName=jingdong.com.jd.dd.open.gw.api.DataService
 * Class ComJdDdOpenGwApiDataService
 * @package Jd\request
 */
class ComJdDdOpenGwApiDataService
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.com.jd.dd.open.gw.api.DataService";
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
     * @param String $accessid
     * 访问ID，可用于请求去重，在3分钟之内同一accessid的请求咚咚视为相同请求，只会处理第一个成功接收到的；3分钟内任意请求使用相同的accessid，均上报accessid重复错误
     * Required: true
     * Example Value: 121212
     */
    private $accessid;

    /**
     * @param String $accessid
     * 访问ID，可用于请求去重，在3分钟之内同一accessid的请求咚咚视为相同请求，只会处理第一个成功接收到的；3分钟内任意请求使用相同的accessid，均上报accessid重复错误
     * Example Value: 121212
     */
    public function setAccessid($accessid)
    {
        $this->accessid             = $accessid;
        $this->apiParas["accessid"]  = $accessid;
    }

    public function getAccessid()
    {
        return $this->accessid;
    }

    /**
     * @param String $aspid
     * 咚咚注册的应用服务提供商ID
     * Required: true
     * Example Value: aspid-test
     */
    private $aspid;

    /**
     * @param String $aspid
     * 咚咚注册的应用服务提供商ID
     * Example Value: aspid-test
     */
    public function setAspid($aspid)
    {
        $this->aspid             = $aspid;
        $this->apiParas["aspid"]  = $aspid;
    }

    public function getAspid()
    {
        return $this->aspid;
    }

    /**
     * @param String $accessToken
     * 咚咚服务器动态分配的访问Token
     * Required: true
     * Example Value: 1212
     */
    private $accessToken;

    /**
     * @param String $accessToken
     * 咚咚服务器动态分配的访问Token
     * Example Value: 1212
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken             = $accessToken;
        $this->apiParas["accessToken"]  = $accessToken;
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param String $version
     * 签名版本号，获取方式见后文接口说明，当前为4.0
     * Required: true
     * Example Value: 4.0
     */
    private $version;

    /**
     * @param String $version
     * 签名版本号，获取方式见后文接口说明，当前为4.0
     * Example Value: 4.0
     */
    public function setVersion($version)
    {
        $this->version             = $version;
        $this->apiParas["version"]  = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param Number $biz_timestamp
     * 接口调用的时间戳毫秒数
     * Required: true
     * Example Value: 1548072235
     */
    private $biz_timestamp;

    /**
     * @param Number $biz_timestamp
     * 接口调用的时间戳毫秒数
     * Example Value: 1548072235
     */
    public function setBiz_timestamp($biz_timestamp)
    {
        $this->biz_timestamp             = $biz_timestamp;
        $this->apiParas["biz_timestamp"]  = $biz_timestamp;
    }

    public function getBiz_timestamp()
    {
        return $this->biz_timestamp;
    }

    /**
     * @param String $appid
     * 当前调用的appid
     * Required: true
     * Example Value: open.12ff4bd0a075a0714550010094.customer
     */
    private $appid;

    /**
     * @param String $appid
     * 当前调用的appid
     * Example Value: open.12ff4bd0a075a0714550010094.customer
     */
    public function setAppid($appid)
    {
        $this->appid             = $appid;
        $this->apiParas["appid"]  = $appid;
    }

    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * @param String $reqType
     * 请求操作类型，如：获取未读消息数，获取未读消息列表，获取历史消息，等等
     * Required: true
     * Example Value: getAllocateInfoBySid
     */
    private $reqType;

    /**
     * @param String $reqType
     * 请求操作类型，如：获取未读消息数，获取未读消息列表，获取历史消息，等等
     * Example Value: getAllocateInfoBySid
     */
    public function setReqType($reqType)
    {
        $this->reqType             = $reqType;
        $this->apiParas["reqType"]  = $reqType;
    }

    public function getReqType()
    {
        return $this->reqType;
    }

    /**
     * @param String $jsonParam
     * 与dataType和action对应的JSON字符串参数
     * Required: true
     * Example Value: {/'sid/':/'123/'}
     */
    private $jsonParam;

    /**
     * @param String $jsonParam
     * 与dataType和action对应的JSON字符串参数
     * Example Value: {/'sid/':/'123/'}
     */
    public function setJsonParam($jsonParam)
    {
        $this->jsonParam             = $jsonParam;
        $this->apiParas["jsonParam"]  = $jsonParam;
    }

    public function getJsonParam()
    {
        return $this->jsonParam;
    }

}