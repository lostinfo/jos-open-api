<?php

namespca Lostinfo\JosOpenApi;

/**
 * ISV、POP后台推送运单接口
 * 无界电子面单-电子面单商家及ISV使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=356&apiId=1940&apiName=jingdong.ldop.alpha.waybill.receive
 * Class LdopAlphaWaybillReceive
 * @package Jd\request
 */
class LdopAlphaWaybillReceive
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.waybill.receive";
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
     * @param string $content
     * 报文内容
     * Required: false
     * Example Value: 
     */
    private $content;

    /**
     * @param string $content
     * 报文内容
     * Example Value: 
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

}