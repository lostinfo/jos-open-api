<?php

namespca Lostinfo\JosOpenApi;

/**
 * 批量查询推广位【申请】
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=2371&apiName=jingdong.service.promotion.queryPromotionSite
 * Class ServicePromotionQueryPromotionSite
 * @package Jd\request
 */
class ServicePromotionQueryPromotionSite
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.promotion.queryPromotionSite";
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
     * @param int $unionId
     * 站长Id
     * Required: true
     * Example Value: 
     */
    private $unionId;

    /**
     * @param int $unionId
     * 站长Id
     * Example Value: 
     */
    public function setUnionId($unionId)
    {
        $this->unionId             = $unionId;
        $this->apiParas["unionId"]  = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
    }

    /**
     * @param string $key
     * 联盟领取key,与站长ID对应
     * Required: true
     * Example Value: 
     */
    private $key;

    /**
     * @param string $key
     * 联盟领取key,与站长ID对应
     * Example Value: 
     */
    public function setKey($key)
    {
        $this->key             = $key;
        $this->apiParas["key"]  = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param int $unionType
     * 联盟类型 1:CPS 2:CPC
     * Required: false
     * Example Value: 
     */
    private $unionType;

    /**
     * @param int $unionType
     * 联盟类型 1:CPS 2:CPC
     * Example Value: 
     */
    public function setUnionType($unionType)
    {
        $this->unionType             = $unionType;
        $this->apiParas["unionType"]  = $unionType;
    }

    public function getUnionType()
    {
        return $this->unionType;
    }

    /**
     * @param int $pageNo
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 页码
     * Example Value: 
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param int $pageSize
     * 每页个数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页个数
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}