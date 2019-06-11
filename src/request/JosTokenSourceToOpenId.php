<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据token获取openId
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=3386&apiName=jingdong.jos.token.source.to.openId
 * Class JosTokenSourceToOpenId
 * @package Jd\request
 */
class JosTokenSourceToOpenId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jos.token.source.to.openId";
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
     * @param string $token
     * 京麦或者微信手Q的token
     * Required: true
     * Example Value: 06AB188B90244BDF00001B39712926AD0A420062F84CA02DD7873A5380E41088
     */
    private $token;

    /**
     * @param string $token
     * 京麦或者微信手Q的token
     * Example Value: 06AB188B90244BDF00001B39712926AD0A420062F84CA02DD7873A5380E41088
     */
    public function setToken($token)
    {
        $this->token             = $token;
        $this->apiParas["token"]  = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $source
     * 01 表示京麦token   02 表示微信手Qt的token
     * Required: true
     * Example Value: 02
     */
    private $source;

    /**
     * @param string $source
     * 01 表示京麦token   02 表示微信手Qt的token
     * Example Value: 02
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $appKey
     * 应用的appkey
     * Required: true
     * Example Value: 581CE7436680AF6E6C789DC1C7129EA5
     */
    private $appKey;

    /**
     * @param string $appKey
     * 应用的appkey
     * Example Value: 581CE7436680AF6E6C789DC1C7129EA5
     */
    public function setAppKey($appKey)
    {
        $this->appKey             = $appKey;
        $this->apiParas["appKey"]  = $appKey;
    }

    public function getAppKey()
    {
        return $this->appKey;
    }

}