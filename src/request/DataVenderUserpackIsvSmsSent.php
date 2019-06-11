<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 单条短信测试发送(用于精准营销短信)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2886&apiName=jingdong.data.vender.userpack.isv.sms.sent
 * Class DataVenderUserpackIsvSmsSent
 * @package Jd\request
 */
class DataVenderUserpackIsvSmsSent
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.sms.sent";
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
     * @param string $fullContent
     * 短信全文内容
     * Required: true
     * Example Value: 短信内容
     */
    private $fullContent;

    /**
     * @param string $fullContent
     * 短信全文内容
     * Example Value: 短信内容
     */
    public function setFullContent($fullContent)
    {
        $this->fullContent             = $fullContent;
        $this->apiParas["full_content"]  = $fullContent;
    }

    public function getFullContent()
    {
        return $this->fullContent;
    }

    /**
     * @param string $receiveMobileNumber
     * 接收人手机号
     * Required: true
     * Example Value: 186XXXXX
     */
    private $receiveMobileNumber;

    /**
     * @param string $receiveMobileNumber
     * 接收人手机号
     * Example Value: 186XXXXX
     */
    public function setReceiveMobileNumber($receiveMobileNumber)
    {
        $this->receiveMobileNumber             = $receiveMobileNumber;
        $this->apiParas["receive_phone"]  = $receiveMobileNumber;
    }

    public function getReceiveMobileNumber()
    {
        return $this->receiveMobileNumber;
    }

}