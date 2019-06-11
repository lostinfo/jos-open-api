<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询全量图片
 * 图片空间API-京东图片空间系统API 可实现图片的增删改查等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=61&apiId=1650&apiName=jingdong.imgzone.image.queryAll
 * Class ImgzoneImageQueryAll
 * @package Jd\request
 */
class ImgzoneImageQueryAll
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.imgzone.image.queryAll";
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
     * @param int $categoryId
     * 分类ID
     * Required: false
     * Example Value: 
     */
    private $categoryId;

    /**
     * @param int $categoryId
     * 分类ID
     * Example Value: 
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId             = $categoryId;
        $this->apiParas["category_id"]  = $categoryId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param string $imageName
     * 图片名称
     * Required: false
     * Example Value: 
     */
    private $imageName;

    /**
     * @param string $imageName
     * 图片名称
     * Example Value: 
     */
    public function setImageName($imageName)
    {
        $this->imageName             = $imageName;
        $this->apiParas["image_name"]  = $imageName;
    }

    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * @param string $scrollId
     * 游标ID,有效时间为15秒
     * Required: false
     * Example Value: 
     */
    private $scrollId;

    /**
     * @param string $scrollId
     * 游标ID,有效时间为15秒
     * Example Value: 
     */
    public function setScrollId($scrollId)
    {
        $this->scrollId             = $scrollId;
        $this->apiParas["scroll_id"]  = $scrollId;
    }

    public function getScrollId()
    {
        return $this->scrollId;
    }

}