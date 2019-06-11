<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 更新分类
 * 图片空间API-京东图片空间系统API 可实现图片的增删改查等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=61&apiId=218&apiName=jingdong.imgzone.category.update
 * Class ImgzoneCategoryUpdate
 * @package Jd\request
 */
class ImgzoneCategoryUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.imgzone.category.update";
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
     * @param int $cateId
     * 要更新的分类ID
     * Required: true
     * Example Value: 
     */
    private $cateId;

    /**
     * @param int $cateId
     * 要更新的分类ID
     * Example Value: 
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
     * @param string $cateName
     * 新的分类名称，自动过滤特殊字符，与新父分类ID不能同时为空
     * Required: false
     * Example Value: 
     */
    private $cateName;

    /**
     * @param string $cateName
     * 新的分类名称，自动过滤特殊字符，与新父分类ID不能同时为空
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
     * 分类的新父分类ID，只能移动二级分类至默认分类或一级父分类，与新分类名称不能同时为空
     * Required: false
     * Example Value: 
     */
    private $parentCateId;

    /**
     * @param int $parentCateId
     * 分类的新父分类ID，只能移动二级分类至默认分类或一级父分类，与新分类名称不能同时为空
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