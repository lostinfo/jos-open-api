<?php

namespca Lostinfo\JosOpenApi;

/**
 *  获取商家授权类目
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=916&apiName=jingdong.ept.vender.category.get
 * Class EptVenderCategoryGet
 * @package Jd\request
 */
class EptVenderCategoryGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.vender.category.get";
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
     * @param int $status
     * 类目状态1.启用;2停用
     * Required: true
     * Example Value: 
     */
    private $status;

    /**
     * @param int $status
     * 类目状态1.启用;2停用
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

}