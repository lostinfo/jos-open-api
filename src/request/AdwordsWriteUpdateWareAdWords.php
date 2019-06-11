<?php

namespca Lostinfo\JosOpenApi;

/**
 * 商品广告词
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1236&apiName=jingdong.adwords.write.updateWareAdWords
 * Class AdwordsWriteUpdateWareAdWords
 * @package Jd\request
 */
class AdwordsWriteUpdateWareAdWords
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.adwords.write.updateWareAdWords";
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
     * 商品编号
     * Required: true
     * Example Value: wareId
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品编号
     * Example Value: wareId
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
     * @param string $url
     * 广告词链接地址
     * Required: false
     * Example Value: url
     */
    private $url;

    /**
     * @param string $url
     * 广告词链接地址
     * Example Value: url
     */
    public function setUrl($url)
    {
        $this->url             = $url;
        $this->apiParas["url"]  = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $urlWords
     * 广告词链接文案
     * Required: false
     * Example Value: urlWords
     */
    private $urlWords;

    /**
     * @param string $urlWords
     * 广告词链接文案
     * Example Value: urlWords
     */
    public function setUrlWords($urlWords)
    {
        $this->urlWords             = $urlWords;
        $this->apiParas["urlWords"]  = $urlWords;
    }

    public function getUrlWords()
    {
        return $this->urlWords;
    }

    /**
     * @param string $words
     * 广告词
     * Required: false
     * Example Value: words
     */
    private $words;

    /**
     * @param string $words
     * 广告词
     * Example Value: words
     */
    public function setWords($words)
    {
        $this->words             = $words;
        $this->apiParas["words"]  = $words;
    }

    public function getWords()
    {
        return $this->words;
    }

}