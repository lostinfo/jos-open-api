<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询商家商品三级分类
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3472&apiName=jingdong.eclp.master.querySellerCategory
 * Class EclpMasterQuerySellerCategory
 * @package Jd\request
 */
class EclpMasterQuerySellerCategory
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.querySellerCategory";
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
     * @param string $deptNo
     * 事业部编码
     * Required: true
     * Example Value: 
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编码
     * Example Value: 
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"]  = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    /**
     * @param string $categoryNo
     * 商家商品三级分类
     * Required: false
     * Example Value: 
     */
    private $categoryNo;

    /**
     * @param string $categoryNo
     * 商家商品三级分类
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

}