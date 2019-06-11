<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 新增逻辑因子接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3346&apiName=jingdong.eclp.master.insertLogicalStockConfig
 * Class EclpMasterInsertLogicalStockConfig
 * @package Jd\request
 */
class EclpMasterInsertLogicalStockConfig
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.insertLogicalStockConfig";
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
     * @param string $sellerNo
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $sellerNo;

    /**
     * @param string $sellerNo
     * 商家编码
     * Example Value: 
     */
    public function setSellerNo($sellerNo)
    {
        $this->sellerNo             = $sellerNo;
        $this->apiParas["sellerNo"]  = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
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
     * @param string $sellerName
     * 商家名称
     * Required: false
     * Example Value: 
     */
    private $sellerName;

    /**
     * @param string $sellerName
     * 商家名称
     * Example Value: 
     */
    public function setSellerName($sellerName)
    {
        $this->sellerName             = $sellerName;
        $this->apiParas["sellerName"]  = $sellerName;
    }

    public function getSellerName()
    {
        return $this->sellerName;
    }

    /**
     * @param string $deptName
     * 事业部名称
     * Required: false
     * Example Value: 
     */
    private $deptName;

    /**
     * @param string $deptName
     * 事业部名称
     * Example Value: 
     */
    public function setDeptName($deptName)
    {
        $this->deptName             = $deptName;
        $this->apiParas["deptName"]  = $deptName;
    }

    public function getDeptName()
    {
        return $this->deptName;
    }

    /**
     * @param string $factor1No
     * 因子1编码
     * Required: true
     * Example Value: 
     */
    private $factor1No;

    /**
     * @param string $factor1No
     * 因子1编码
     * Example Value: 
     */
    public function setFactor1No($factor1No)
    {
        $this->factor1No             = $factor1No;
        $this->apiParas["factor1No"]  = $factor1No;
    }

    public function getFactor1No()
    {
        return $this->factor1No;
    }

    /**
     * @param string $factor1Name
     * 因子1名称
     * Required: true
     * Example Value: 
     */
    private $factor1Name;

    /**
     * @param string $factor1Name
     * 因子1名称
     * Example Value: 
     */
    public function setFactor1Name($factor1Name)
    {
        $this->factor1Name             = $factor1Name;
        $this->apiParas["factor1Name"]  = $factor1Name;
    }

    public function getFactor1Name()
    {
        return $this->factor1Name;
    }

    /**
     * @param string $factor2No
     * 因子2编码
     * Required: false
     * Example Value: 
     */
    private $factor2No;

    /**
     * @param string $factor2No
     * 因子2编码
     * Example Value: 
     */
    public function setFactor2No($factor2No)
    {
        $this->factor2No             = $factor2No;
        $this->apiParas["factor2No"]  = $factor2No;
    }

    public function getFactor2No()
    {
        return $this->factor2No;
    }

    /**
     * @param string $factor2Name
     * 因子2名称
     * Required: false
     * Example Value: 
     */
    private $factor2Name;

    /**
     * @param string $factor2Name
     * 因子2名称
     * Example Value: 
     */
    public function setFactor2Name($factor2Name)
    {
        $this->factor2Name             = $factor2Name;
        $this->apiParas["factor2Name"]  = $factor2Name;
    }

    public function getFactor2Name()
    {
        return $this->factor2Name;
    }

    /**
     * @param string $factor3No
     * 因子3编码
     * Required: false
     * Example Value: 
     */
    private $factor3No;

    /**
     * @param string $factor3No
     * 因子3编码
     * Example Value: 
     */
    public function setFactor3No($factor3No)
    {
        $this->factor3No             = $factor3No;
        $this->apiParas["factor3No"]  = $factor3No;
    }

    public function getFactor3No()
    {
        return $this->factor3No;
    }

    /**
     * @param string $factor3Name
     * 因子3名称
     * Required: false
     * Example Value: 
     */
    private $factor3Name;

    /**
     * @param string $factor3Name
     * 因子3名称
     * Example Value: 
     */
    public function setFactor3Name($factor3Name)
    {
        $this->factor3Name             = $factor3Name;
        $this->apiParas["factor3Name"]  = $factor3Name;
    }

    public function getFactor3Name()
    {
        return $this->factor3Name;
    }

    /**
     * @param string $factor4No
     * 因子4编码
     * Required: false
     * Example Value: 
     */
    private $factor4No;

    /**
     * @param string $factor4No
     * 因子4编码
     * Example Value: 
     */
    public function setFactor4No($factor4No)
    {
        $this->factor4No             = $factor4No;
        $this->apiParas["factor4No"]  = $factor4No;
    }

    public function getFactor4No()
    {
        return $this->factor4No;
    }

    /**
     * @param string $factor4Name
     * 因子4名称
     * Required: false
     * Example Value: 
     */
    private $factor4Name;

    /**
     * @param string $factor4Name
     * 因子4名称
     * Example Value: 
     */
    public function setFactor4Name($factor4Name)
    {
        $this->factor4Name             = $factor4Name;
        $this->apiParas["factor4Name"]  = $factor4Name;
    }

    public function getFactor4Name()
    {
        return $this->factor4Name;
    }

}