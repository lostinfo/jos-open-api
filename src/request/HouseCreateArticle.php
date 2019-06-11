<?php

namespca Lostinfo\JosOpenApi;

/**
 * 创建房产资讯文章
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=3961&apiName=jingdong.house.createArticle
 * Class HouseCreateArticle
 * @package Jd\request
 */
class HouseCreateArticle
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.house.createArticle";
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
     * @param string $articleInfo
     * 文章内容
     * Required: true
     * Example Value: 
     */
    private $articleInfo;

    /**
     * @param string $articleInfo
     * 文章内容
     * Example Value: 
     */
    public function setArticleInfo($articleInfo)
    {
        $this->articleInfo             = $articleInfo;
        $this->apiParas["articleInfo"]  = $articleInfo;
    }

    public function getArticleInfo()
    {
        return $this->articleInfo;
    }

}