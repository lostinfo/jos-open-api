<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询商品二级分类
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=930&apiName=jingdong.eclp.category.getSecondLevelCategories
 * Class EclpCategoryGetSecondLevelCategories
 * @package Jd\request
 */
class EclpCategoryGetSecondLevelCategories
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.category.getSecondLevelCategories";
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
     * @param int $firstCategoryNo
     * 商品一级分类编码
     * Required: true
     * Example Value: 
     */
    private $firstCategoryNo;

    /**
     * @param int $firstCategoryNo
     * 商品一级分类编码
     * Example Value: 
     */
    public function setFirstCategoryNo($firstCategoryNo)
    {
        $this->firstCategoryNo             = $firstCategoryNo;
        $this->apiParas["firstCategoryNo"]  = $firstCategoryNo;
    }

    public function getFirstCategoryNo()
    {
        return $this->firstCategoryNo;
    }

    /**
     * @param int $secondCategoryNo
     * 商品二级分类编码
     * Required: false
     * Example Value: 
     */
    private $secondCategoryNo;

    /**
     * @param int $secondCategoryNo
     * 商品二级分类编码
     * Example Value: 
     */
    public function setSecondCategoryNo($secondCategoryNo)
    {
        $this->secondCategoryNo             = $secondCategoryNo;
        $this->apiParas["secondCategoryNo"]  = $secondCategoryNo;
    }

    public function getSecondCategoryNo()
    {
        return $this->secondCategoryNo;
    }

}