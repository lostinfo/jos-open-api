<?php

namespca Lostinfo\JosOpenApi;

/**
 * 消息删除
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3138&apiName=jingdong.b2b.message.delete
 * Class B2bMessageDelete
 * @package Jd\request
 */
class B2bMessageDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.message.delete";
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
     * @param int[] $messageId
     * 消息id
     * Required: true
     * Example Value: 11333333
     */
    private $messageId;

    /**
     * @param int[] $messageId
     * 消息id
     * Example Value: 11333333
     */
    public function setMessageId($messageId)
    {
        $this->messageId             = $messageId;
        $this->apiParas["messageId"]  = $messageId;
    }

    public function getMessageId()
    {
        return $this->messageId;
    }

}