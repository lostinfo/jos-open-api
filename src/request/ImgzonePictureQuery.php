<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询图片
 * 图片空间API-京东图片空间系统API 可实现图片的增删改查等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=61&apiId=230&apiName=jingdong.imgzone.picture.query
 * Class ImgzonePictureQuery
 * @package Jd\request
 */
class ImgzonePictureQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.imgzone.picture.query";
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
     * @param string $imgId
     * 图片ID
     * Required: false
     * Example Value: 
     */
    private $imgId;

    /**
     * @param string $imgId
     * 图片ID
     * Example Value: 
     */
    public function setImgId($imgId)
    {
        $this->imgId             = $imgId;
        $this->apiParas["picture_id"]  = $imgId;
    }

    public function getImgId()
    {
        return $this->imgId;
    }

    /**
     * @param int $cateId
     * 图片所属分类ID
     * Required: false
     * Example Value: 
     */
    private $cateId;

    /**
     * @param int $cateId
     * 图片所属分类ID
     * Example Value: 
     */
    public function setCateId($cateId)
    {
        $this->cateId             = $cateId;
        $this->apiParas["picture_cate_id"]  = $cateId;
    }

    public function getCateId()
    {
        return $this->cateId;
    }

    /**
     * @param string $imgName
     * 图片名称，支持后模糊查询
     * Required: false
     * Example Value: 
     */
    private $imgName;

    /**
     * @param string $imgName
     * 图片名称，支持后模糊查询
     * Example Value: 
     */
    public function setImgName($imgName)
    {
        $this->imgName             = $imgName;
        $this->apiParas["picture_name"]  = $imgName;
    }

    public function getImgName()
    {
        return $this->imgName;
    }

    /**
     * @param string $startDate
     * 创建开始时间
     * Required: false
     * Example Value: 
     */
    private $startDate;

    /**
     * @param string $startDate
     * 创建开始时间
     * Example Value: 
     */
    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["start_date"]  = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * 结束创建时间
     * Required: false
     * Example Value: 
     */
    private $endDate;

    /**
     * @param string $endDate
     * 结束创建时间
     * Example Value: 
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["end_Date"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param int $pageNum
     * 页码值，对应分页结果页数，为空或非正整数时默认为1，超过最大页数返回空
     * Required: false
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param int $pageNum
     * 页码值，对应分页结果页数，为空或非正整数时默认为1，超过最大页数返回空
     * Example Value: 
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["page_num"]  = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param int $pageSize
     * 每页条数，为空或非正整数时默认为20，最多返回100条
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页条数，为空或非正整数时默认为20，最多返回100条
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}