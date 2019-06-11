<?php

namespca Lostinfo\JosOpenApi;

/**
 * 上架商品【多语言接口】
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=1278&apiName=jingdong.warelang.shelve
 * Class WarelangShelve
 * @package Jd\request
 */
class WarelangShelve
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.warelang.shelve";
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
     * @param int $wareId
     * 商品ID
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品ID
     * Example Value: 
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
     * @param int $langId
     * 语言ID【英语为2，俄语为3】
     * Required: true
     * Example Value: 
     */
    private $langId;

    /**
     * @param int $langId
     * 语言ID【英语为2，俄语为3】
     * Example Value: 
     */
    public function setLangId($langId)
    {
        $this->langId             = $langId;
        $this->apiParas["langId"]  = $langId;
    }

    public function getLangId()
    {
        return $this->langId;
    }

}