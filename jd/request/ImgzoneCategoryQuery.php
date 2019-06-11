<?php

namespace JD\request;

/**
 * 查询分类
 * 图片空间API-京东图片空间系统API 可实现图片的增删改查等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=61&apiId=238&apiName=jingdong.imgzone.category.query
 * Class ImgzoneCategoryQuery
 * @package Jd\request
 */
class ImgzoneCategoryQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.imgzone.category.query";
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
     * @param Number $cateId
     * 分类ID
     * Required: false
     * Example Value: 1
     */
    private $cateId;

    /**
     * @param Number $cateId
     * 分类ID
     * Example Value: 1
     */
    public function setCateId($cateId)
    {
        $this->cateId             = $cateId;
        $this->apiParas["cate_id"]  = $cateId;
    }

    public function getCateId()
    {
        return $this->cateId;
    }

    /**
     * @param String $cateName
     * 分类名称，不支持模糊查询
     * Required: false
     * Example Value: 分类名abc
     */
    private $cateName;

    /**
     * @param String $cateName
     * 分类名称，不支持模糊查询
     * Example Value: 分类名abc
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
     * @param Number $parentCateId
     * 父分类ID，查询二级分类时为对应父分类id，查询一级分类时为0，查询全部分类的时候为空
     * Required: false
     * Example Value: 1
     */
    private $parentCateId;

    /**
     * @param Number $parentCateId
     * 父分类ID，查询二级分类时为对应父分类id，查询一级分类时为0，查询全部分类的时候为空
     * Example Value: 1
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