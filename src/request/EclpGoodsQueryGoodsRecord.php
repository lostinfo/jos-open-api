<?php

namespace JD\request;

/**
 * 商品备案后信息查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2226&apiName=jingdong.eclp.goods.queryGoodsRecord
 * Class EclpGoodsQueryGoodsRecord
 * @package Jd\request
 */
class EclpGoodsQueryGoodsRecord
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.goods.queryGoodsRecord";
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
     * @param String $deptNo
     * 事业部编号
     * Required: true
     * Example Value: 
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编号
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
     * @param String $isvGoodsNo
     * isv商品编号
     * Required: false
     * Example Value: 
     */
    private $isvGoodsNo;

    /**
     * @param String $isvGoodsNo
     * isv商品编号
     * Example Value: 
     */
    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo             = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"]  = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    /**
     * @param String $goodsNo
     * EMG商品编号
     * Required: false
     * Example Value: 
     */
    private $goodsNo;

    /**
     * @param String $goodsNo
     * EMG商品编号
     * Example Value: 
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goodsNo"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param Number $pageNo
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageNo;

    /**
     * @param Number $pageNo
     * 页码
     * Example Value: 
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
     * @param Number $pageSize
     * 每页记录数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页记录数
     * Example Value: 
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
     * @param Date $startDate
     * 查询开始时间,格式为：yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 
     */
    private $startDate;

    /**
     * @param Date $startDate
     * 查询开始时间,格式为：yyyy-MM-dd HH:mm:ss
     * Example Value: 
     */
    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["startDate"]  = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param Date $endDate
     * 查询结束时间,格式为：yyyy-MM-dd HH:mm:ss
     * Required: false
     * Example Value: 
     */
    private $endDate;

    /**
     * @param Date $endDate
     * 查询结束时间,格式为：yyyy-MM-dd HH:mm:ss
     * Example Value: 
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["endDate"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

}