<?php

namespace JD\request;

/**
 * 指定消息类型，查询消息接口，每次查询最多100条。
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3134&apiName=jingdong.b2b.message.get
 * Class B2bMessageGet
 * @package Jd\request
 */
class B2bMessageGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.message.get";
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
     * @param Number[] $typeId
     * 类型ID
     * Required: true
     * Example Value: 10
     */
    private $typeId;

    /**
     * @param Number[] $typeId
     * 类型ID
     * Example Value: 10
     */
    public function setTypeId($typeId)
    {
        $this->typeId             = $typeId;
        $this->apiParas["typeId"]  = $typeId;
    }

    public function getTypeId()
    {
        return $this->typeId;
    }

}