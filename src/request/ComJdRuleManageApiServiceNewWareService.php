<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 新品提交
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=3438&apiName=jingdong.com.jd.rule.manage.api.service.NewWareService
 * Class ComJdRuleManageApiServiceNewWareService
 * @package Jd\request
 */
class ComJdRuleManageApiServiceNewWareService
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.com.jd.rule.manage.api.service.NewWareService";
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
     * @param int $spuId
     * 商品id
     * Required: true
     * Example Value: 1231231
     */
    private $spuId;

    /**
     * @param int $spuId
     * 商品id
     * Example Value: 1231231
     */
    public function setSpuId($spuId)
    {
        $this->spuId             = $spuId;
        $this->apiParas["spuId"]  = $spuId;
    }

    public function getSpuId()
    {
        return $this->spuId;
    }

    /**
     * @param int[] $categoryId
     * 京东类目id[一级类目Id,二级类目id,三级类目id]
     * Required: true
     * Example Value: [1231,2133,123]
     */
    private $categoryId;

    /**
     * @param int[] $categoryId
     * 京东类目id[一级类目Id,二级类目id,三级类目id]
     * Example Value: [1231,2133,123]
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId             = $categoryId;
        $this->apiParas["categoryId"]  = $categoryId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param int $brandId
     * 品牌id
     * Required: false
     * Example Value: 12312
     */
    private $brandId;

    /**
     * @param int $brandId
     * 品牌id
     * Example Value: 12312
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brandId"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param string $spuName
     * 商品名称
     * Required: false
     * Example Value: 土豆
     */
    private $spuName;

    /**
     * @param string $spuName
     * 商品名称
     * Example Value: 土豆
     */
    public function setSpuName($spuName)
    {
        $this->spuName             = $spuName;
        $this->apiParas["spuName"]  = $spuName;
    }

    public function getSpuName()
    {
        return $this->spuName;
    }

    /**
     * @param string $itemNumber
     * 货号
     * Required: true
     * Example Value: 234Ada
     */
    private $itemNumber;

    /**
     * @param string $itemNumber
     * 货号
     * Example Value: 234Ada
     */
    public function setItemNumber($itemNumber)
    {
        $this->itemNumber             = $itemNumber;
        $this->apiParas["itemNumber"]  = $itemNumber;
    }

    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * @param string $tagUrl
     * 吊牌路径对应京东的文件路
     * Required: true
     * Example Value: jsf/asdasda.jpg
     */
    private $tagUrl;

    /**
     * @param string $tagUrl
     * 吊牌路径对应京东的文件路
     * Example Value: jsf/asdasda.jpg
     */
    public function setTagUrl($tagUrl)
    {
        $this->tagUrl             = $tagUrl;
        $this->apiParas["tagUrl"]  = $tagUrl;
    }

    public function getTagUrl()
    {
        return $this->tagUrl;
    }

}