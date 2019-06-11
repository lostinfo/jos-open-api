<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.快车.新增活动创意
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1285&apiName=jingdong.dsp.kc.ad.addshopad
 * Class DspKcAdAddshopad
 * @package Jd\request
 */
class DspKcAdAddshopad
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.ad.addshopad";
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
     * @param string[] $name
     * 商品名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param string[] $name
     * 商品名称
     * Example Value: 
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int[] $skuId
     * 商品ID
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param int[] $skuId
     * 商品ID
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param string[] $imgUrl
     * 商品图片地址
     * Required: true
     * Example Value: 
     */
    private $imgUrl;

    /**
     * @param string[] $imgUrl
     * 商品图片地址
     * Example Value: 
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl             = $imgUrl;
        $this->apiParas["imgUrl"]  = $imgUrl;
    }

    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * @param int $adGroupId
     * 单元ID
     * Required: true
     * Example Value: 
     */
    private $adGroupId;

    /**
     * @param int $adGroupId
     * 单元ID
     * Example Value: 
     */
    public function setAdGroupId($adGroupId)
    {
        $this->adGroupId             = $adGroupId;
        $this->apiParas["adGroupId"]  = $adGroupId;
    }

    public function getAdGroupId()
    {
        return $this->adGroupId;
    }

    /**
     * @param string $url
     * 活动链接
     * Required: true
     * Example Value: 
     */
    private $url;

    /**
     * @param string $url
     * 活动链接
     * Example Value: 
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
     * @param string $showSalesWord
     * 推广文案
     * Required: true
     * Example Value: 
     */
    private $showSalesWord;

    /**
     * @param string $showSalesWord
     * 推广文案
     * Example Value: 
     */
    public function setShowSalesWord($showSalesWord)
    {
        $this->showSalesWord             = $showSalesWord;
        $this->apiParas["showSalesWord"]  = $showSalesWord;
    }

    public function getShowSalesWord()
    {
        return $this->showSalesWord;
    }

}