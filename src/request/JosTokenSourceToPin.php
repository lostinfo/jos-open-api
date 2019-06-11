<?php

namespca Lostinfo\JosOpenApi;

/**
 * 通过token换pin,需要传token来源
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2319&apiName=jingdong.jos.token.source.to.pin
 * Class JosTokenSourceToPin
 * @package Jd\request
 */
class JosTokenSourceToPin
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jos.token.source.to.pin";
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
     * token值(<font color='red'>注意：只支持京东APP\微信手Q的token</font>)
     * Required: true
     * Example Value: 
     */
    private $token;

    /**
     * @param string $token
     * token值(<font color='red'>注意：只支持京东APP\微信手Q的token</font>)
     * Example Value: 
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
     * 来源标识01京麦02微信
     * Required: true
     * Example Value: 
     */
    private $source;

    /**
     * @param string $source
     * 来源标识01京麦02微信
     * Example Value: 
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

}