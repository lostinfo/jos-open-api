<?php

namespace JD\request;

/**
 * 查询商品三级分类
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=931&apiName=jingdong.eclp.category.getThirdLevelCategories
 * Class EclpCategoryGetThirdLevelCategories
 * @package Jd\request
 */
class EclpCategoryGetThirdLevelCategories
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.category.getThirdLevelCategories";
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
     * @param Number $secondCategoryNo
     * 商品二级分类编码
     * Required: true
     * Example Value: 
     */
    private $secondCategoryNo;

    /**
     * @param Number $secondCategoryNo
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

    /**
     * @param Number $thirdCategoryNo
     * 商品三级分类编码
     * Required: false
     * Example Value: 
     */
    private $thirdCategoryNo;

    /**
     * @param Number $thirdCategoryNo
     * 商品三级分类编码
     * Example Value: 
     */
    public function setThirdCategoryNo($thirdCategoryNo)
    {
        $this->thirdCategoryNo             = $thirdCategoryNo;
        $this->apiParas["thirdCategoryNo"]  = $thirdCategoryNo;
    }

    public function getThirdCategoryNo()
    {
        return $this->thirdCategoryNo;
    }

}