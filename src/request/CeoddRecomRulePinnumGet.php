<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据规则记录ID获取人群数量
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3108&apiName=jingdong.ceodd.recom.rule.pinnum.get
 * Class CeoddRecomRulePinnumGet
 * @package Jd\request
 */
class CeoddRecomRulePinnumGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ceodd.recom.rule.pinnum.get";
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
     * @param string $recordId
     * 规则记录ID
     * Required: true
     * Example Value: 620ee2e4415a4f05a015d9be5a31830a
     */
    private $recordId;

    /**
     * @param string $recordId
     * 规则记录ID
     * Example Value: 620ee2e4415a4f05a015d9be5a31830a
     */
    public function setRecordId($recordId)
    {
        $this->recordId             = $recordId;
        $this->apiParas["recordId"]  = $recordId;
    }

    public function getRecordId()
    {
        return $this->recordId;
    }

}