<?php

namespace JD\request;

/**
 * 商品分类新增下传
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2034&apiName=jingdong.eclp.master.insertCategory
 * Class EclpMasterInsertCategory
 * @package Jd\request
 */
class EclpMasterInsertCategory
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.insertCategory";
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
     * @param String $categoryNo
     * 类目编号
     * Required: true
     * Example Value: 
     */
    private $categoryNo;

    /**
     * @param String $categoryNo
     * 类目编号
     * Example Value: 
     */
    public function setCategoryNo($categoryNo)
    {
        $this->categoryNo             = $categoryNo;
        $this->apiParas["categoryNo"]  = $categoryNo;
    }

    public function getCategoryNo()
    {
        return $this->categoryNo;
    }

    /**
     * @param String $categoryName
     * 类目名称
     * Required: true
     * Example Value: 
     */
    private $categoryName;

    /**
     * @param String $categoryName
     * 类目名称
     * Example Value: 
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName             = $categoryName;
        $this->apiParas["categoryName"]  = $categoryName;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param String $superior
     * 上级类目编码
     * Required: true
     * Example Value: 
     */
    private $superior;

    /**
     * @param String $superior
     * 上级类目编码
     * Example Value: 
     */
    public function setSuperior($superior)
    {
        $this->superior             = $superior;
        $this->apiParas["superior"]  = $superior;
    }

    public function getSuperior()
    {
        return $this->superior;
    }

    /**
     * @param String $sortNo
     * 同级序号
     * Required: false
     * Example Value: 
     */
    private $sortNo;

    /**
     * @param String $sortNo
     * 同级序号
     * Example Value: 
     */
    public function setSortNo($sortNo)
    {
        $this->sortNo             = $sortNo;
        $this->apiParas["sortNo"]  = $sortNo;
    }

    public function getSortNo()
    {
        return $this->sortNo;
    }

    /**
     * @param String $memo
     * 备注
     * Required: false
     * Example Value: 
     */
    private $memo;

    /**
     * @param String $memo
     * 备注
     * Example Value: 
     */
    public function setMemo($memo)
    {
        $this->memo             = $memo;
        $this->apiParas["memo"]  = $memo;
    }

    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * @param String $operateUser
     * 操作人
     * Required: true
     * Example Value: 
     */
    private $operateUser;

    /**
     * @param String $operateUser
     * 操作人
     * Example Value: 
     */
    public function setOperateUser($operateUser)
    {
        $this->operateUser             = $operateUser;
        $this->apiParas["operateUser"]  = $operateUser;
    }

    public function getOperateUser()
    {
        return $this->operateUser;
    }

    /**
     * @param Date $operateTime
     * 操作时间
     * Required: true
     * Example Value: 
     */
    private $operateTime;

    /**
     * @param Date $operateTime
     * 操作时间
     * Example Value: 
     */
    public function setOperateTime($operateTime)
    {
        $this->operateTime             = $operateTime;
        $this->apiParas["operateTime"]  = $operateTime;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

}