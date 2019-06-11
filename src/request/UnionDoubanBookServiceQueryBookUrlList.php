<?php

namespca Lostinfo\JosOpenApi;

/**
 * 图书包url地址查询
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1324&apiName=jingdong.UnionDoubanBookService.queryBookUrlList
 * Class UnionDoubanBookServiceQueryBookUrlList
 * @package Jd\request
 */
class UnionDoubanBookServiceQueryBookUrlList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.UnionDoubanBookService.queryBookUrlList";
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

}