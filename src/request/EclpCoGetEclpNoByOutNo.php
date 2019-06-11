<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据外部单号、单据类型查询ECLP单号服务
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2240&apiName=jingdong.eclp.co.getEclpNoByOutNo
 * Class EclpCoGetEclpNoByOutNo
 * @package Jd\request
 */
class EclpCoGetEclpNoByOutNo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.getEclpNoByOutNo";
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
     * 事业部编号
     * Required: true
     * Example Value: 
     */
    private $deptNo;

    /**
     * @param string $deptNo
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
     * @param string $outNo
     * 外部单号
     * Required: true
     * Example Value: 
     */
    private $outNo;

    /**
     * @param string $outNo
     * 外部单号
     * Example Value: 
     */
    public function setOutNo($outNo)
    {
        $this->outNo             = $outNo;
        $this->apiParas["outNo"]  = $outNo;
    }

    public function getOutNo()
    {
        return $this->outNo;
    }

    /**
     * @param string $recepitType
     * 单据类型
     * Required: true
     * Example Value: 
     */
    private $recepitType;

    /**
     * @param string $recepitType
     * 单据类型
     * Example Value: 
     */
    public function setRecepitType($recepitType)
    {
        $this->recepitType             = $recepitType;
        $this->apiParas["recepitType"]  = $recepitType;
    }

    public function getRecepitType()
    {
        return $this->recepitType;
    }

}