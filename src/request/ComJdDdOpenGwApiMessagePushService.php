<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 方法描述
 * 咚咚API-京东咚咚系统API，包含：查询信息、客服日评价、客服登陆日志、时长等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=53&apiId=3397&apiName=jingdong.com.jd.dd.open.gw.api.MessagePushService
 * Class ComJdDdOpenGwApiMessagePushService
 * @package Jd\request
 */
class ComJdDdOpenGwApiMessagePushService
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.com.jd.dd.open.gw.api.MessagePushService";
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
     * @param string $aspid
     * 咚咚注册的应用服务提供商ID
     * Required: true
     * Example Value: aspid-test
     */
    private $aspid;

    /**
     * @param string $aspid
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
     * @param string $accessid
     * 访问ID，可用于请求去重，在3分钟之内同一accessid的请求咚咚视为相同请求，只会处理第一个成功接收到的
     * Required: true
     * Example Value: 111
     */
    private $accessid;

    /**
     * @param string $accessid
     * 访问ID，可用于请求去重，在3分钟之内同一accessid的请求咚咚视为相同请求，只会处理第一个成功接收到的
     * Example Value: 111
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
     * @param string $accessToken
     * 咚咚服务器动态分配的访问Token
     * Required: true
     * Example Value: 111
     */
    private $accessToken;

    /**
     * @param string $accessToken
     * 咚咚服务器动态分配的访问Token
     * Example Value: 111
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
     * @param string $version
     * 版本
     * Required: true
     * Example Value: 4.3
     */
    private $version;

    /**
     * @param string $version
     * 版本
     * Example Value: 4.3
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
     * @param int $time
     * 时间戳
     * Required: true
     * Example Value: 12
     */
    private $time;

    /**
     * @param int $time
     * 时间戳
     * Example Value: 12
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
     * @param string $jsonMsg
     * 文本消息，系统消息时，整个消息json串
     * Required: true
     * Example Value: 12
     */
    private $jsonMsg;

    /**
     * @param string $jsonMsg
     * 文本消息，系统消息时，整个消息json串
     * Example Value: 12
     */
    public function setJsonMsg($jsonMsg)
    {
        $this->jsonMsg             = $jsonMsg;
        $this->apiParas["jsonMsg"]  = $jsonMsg;
    }

    public function getJsonMsg()
    {
        return $this->jsonMsg;
    }

}