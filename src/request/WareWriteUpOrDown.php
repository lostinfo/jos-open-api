<?php

namespace JD\request;

/**
 * 商品上下架
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1251&apiName=jingdong.ware.write.upOrDown
 * Class WareWriteUpOrDown
 * @package Jd\request
 */
class WareWriteUpOrDown
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.write.upOrDown";
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
     * @param String $note
     * 上下架原因
     * Required: false
     * Example Value: 上下架原因
     */
    private $note;

    /**
     * @param String $note
     * 上下架原因
     * Example Value: 上下架原因
     */
    public function setNote($note)
    {
        $this->note             = $note;
        $this->apiParas["note"]  = $note;
    }

    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param Number $wareId
     * 商品ID必填
     * Required: false
     * Example Value: 12345678976
     */
    private $wareId;

    /**
     * @param Number $wareId
     * 商品ID必填
     * Example Value: 12345678976
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param Number $opType
     * 下架类型：1表示自主上架 2表示自主下架
     * Required: true
     * Example Value: 2
     */
    private $opType;

    /**
     * @param Number $opType
     * 下架类型：1表示自主上架 2表示自主下架
     * Example Value: 2
     */
    public function setOpType($opType)
    {
        $this->opType             = $opType;
        $this->apiParas["opType"]  = $opType;
    }

    public function getOpType()
    {
        return $this->opType;
    }

}