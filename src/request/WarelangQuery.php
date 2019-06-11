<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询商品【多语言接口】
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=1277&apiName=jingdong.warelang.query
 * Class WarelangQuery
 * @package Jd\request
 */
class WarelangQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.warelang.query";
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
     * 语言ID【英语是2，俄语是3】
     * Required: true
     * Example Value: 
     */
    private $langId;

    /**
     * @param int $langId
     * 语言ID【英语是2，俄语是3】
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