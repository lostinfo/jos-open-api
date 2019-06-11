<?php

namespca Lostinfo\JosOpenApi;

/**
 * 添加图片分类
 * 图片空间API-京东图片空间系统API 可实现图片的增删改查等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=61&apiId=161&apiName=jingdong.imgzone.category.add
 * Class ImgzoneCategoryAdd
 * @package Jd\request
 */
class ImgzoneCategoryAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.imgzone.category.add";
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
     * @param string $cateName
     * 分类名称，自动过滤特殊字符
     * Required: false
     * Example Value: 
     */
    private $cateName;

    /**
     * @param string $cateName
     * 分类名称，自动过滤特殊字符
     * Example Value: 
     */
    public function setCateName($cateName)
    {
        $this->cateName             = $cateName;
        $this->apiParas["cate_name"]  = $cateName;
    }

    public function getCateName()
    {
        return $this->cateName;
    }

    /**
     * @param int $parentCateId
     * 父分类ID，为空默认添加顶级分类
     * Required: false
     * Example Value: 
     */
    private $parentCateId;

    /**
     * @param int $parentCateId
     * 父分类ID，为空默认添加顶级分类
     * Example Value: 
     */
    public function setParentCateId($parentCateId)
    {
        $this->parentCateId             = $parentCateId;
        $this->apiParas["parent_cate_id"]  = $parentCateId;
    }

    public function getParentCateId()
    {
        return $this->parentCateId;
    }

}