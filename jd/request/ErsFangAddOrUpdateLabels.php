<?php

namespace JD\request;

/**
 * 查房价-修改或新增标签数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2652&apiName=jingdong.ers.fang.addOrUpdateLabels
 * Class ErsFangAddOrUpdateLabels
 * @package Jd\request
 */
class ErsFangAddOrUpdateLabels
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateLabels";
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
     * @param Number[] $sourceId
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param Number[] $sourceId
     * 来源主键
     * Example Value: 
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId             = $sourceId;
        $this->apiParas["sourceId"]  = $sourceId;
    }

    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * @param Number[] $labelType
     * 标签类型（楼盘特色标签：1，   房源标签：2）
     * Required: true
     * Example Value: 
     */
    private $labelType;

    /**
     * @param Number[] $labelType
     * 标签类型（楼盘特色标签：1，   房源标签：2）
     * Example Value: 
     */
    public function setLabelType($labelType)
    {
        $this->labelType             = $labelType;
        $this->apiParas["labelType"]  = $labelType;
    }

    public function getLabelType()
    {
        return $this->labelType;
    }

    /**
     * @param Number[] $labelCode
     * 标签码
     * Required: false
     * Example Value: 
     */
    private $labelCode;

    /**
     * @param Number[] $labelCode
     * 标签码
     * Example Value: 
     */
    public function setLabelCode($labelCode)
    {
        $this->labelCode             = $labelCode;
        $this->apiParas["labelCode"]  = $labelCode;
    }

    public function getLabelCode()
    {
        return $this->labelCode;
    }

    /**
     * @param String[] $labelName
     * 标签名称
     * Required: true
     * Example Value: 
     */
    private $labelName;

    /**
     * @param String[] $labelName
     * 标签名称
     * Example Value: 
     */
    public function setLabelName($labelName)
    {
        $this->labelName             = $labelName;
        $this->apiParas["labelName"]  = $labelName;
    }

    public function getLabelName()
    {
        return $this->labelName;
    }

}