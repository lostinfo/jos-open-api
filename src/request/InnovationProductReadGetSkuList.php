<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取SKU商品信息列表
 * 商品通API-商品通API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=361&apiId=3546&apiName=jingdong.innovation.product.read.getSkuList
 * Class InnovationProductReadGetSkuList
 * @package Jd\request
 */
class InnovationProductReadGetSkuList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.innovation.product.read.getSkuList";
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
     * @param string[] $articleNumber
     * 主商品ID
     * Required: false
     * Example Value: 10001
     */
    private $articleNumber;

    /**
     * @param string[] $articleNumber
     * 主商品ID
     * Example Value: 10001
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber             = $articleNumber;
        $this->apiParas["spuId"]  = $articleNumber;
    }

    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * @param string[] $exSkuId
     * SKU商品ID
     * Required: false
     * Example Value: 11001
     */
    private $exSkuId;

    /**
     * @param string[] $exSkuId
     * SKU商品ID
     * Example Value: 11001
     */
    public function setExSkuId($exSkuId)
    {
        $this->exSkuId             = $exSkuId;
        $this->apiParas["skuId"]  = $exSkuId;
    }

    public function getExSkuId()
    {
        return $this->exSkuId;
    }

    /**
     * @param int $pageNo
     * 页号
     * Required: false
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 页号
     * Example Value: 1
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
     * 每页显示记录数
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页显示记录数
     * Example Value: 10
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

    /**
     * @param string $exCategoryId
     * 类目ID
     * Required: false
     * Example Value: 173201
     */
    private $exCategoryId;

    /**
     * @param string $exCategoryId
     * 类目ID
     * Example Value: 173201
     */
    public function setExCategoryId($exCategoryId)
    {
        $this->exCategoryId             = $exCategoryId;
        $this->apiParas["categoryId"]  = $exCategoryId;
    }

    public function getExCategoryId()
    {
        return $this->exCategoryId;
    }

    /**
     * @param string $title
     * 商品名称
     * Required: false
     * Example Value: IPhone
     */
    private $title;

    /**
     * @param string $title
     * 商品名称
     * Example Value: IPhone
     */
    public function setTitle($title)
    {
        $this->title             = $title;
        $this->apiParas["title"]  = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

}