<?php

namespace JD\request;

/**
 * 修改供应商
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2966&apiName=jingdong.eclp.master.modifyOrAddSellerDict
 * Class EclpMasterModifyOrAddSellerDict
 * @package Jd\request
 */
class EclpMasterModifyOrAddSellerDict
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.modifyOrAddSellerDict";
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
     * @param String $deptId
     * 事业部编码
     * Required: true
     * Example Value: 
     */
    private $deptId;

    /**
     * @param String $deptId
     * 事业部编码
     * Example Value: 
     */
    public function setDeptId($deptId)
    {
        $this->deptId             = $deptId;
        $this->apiParas["deptId"]  = $deptId;
    }

    public function getDeptId()
    {
        return $this->deptId;
    }

    /**
     * @param Number $dictType
     * 字典类型
     * Required: false
     * Example Value: 
     */
    private $dictType;

    /**
     * @param Number $dictType
     * 字典类型
     * Example Value: 
     */
    public function setDictType($dictType)
    {
        $this->dictType             = $dictType;
        $this->apiParas["dictType"]  = $dictType;
    }

    public function getDictType()
    {
        return $this->dictType;
    }

    /**
     * @param String $dictNo
     * 字典编码
     * Required: false
     * Example Value: 
     */
    private $dictNo;

    /**
     * @param String $dictNo
     * 字典编码
     * Example Value: 
     */
    public function setDictNo($dictNo)
    {
        $this->dictNo             = $dictNo;
        $this->apiParas["dictNo"]  = $dictNo;
    }

    public function getDictNo()
    {
        return $this->dictNo;
    }

    /**
     * @param String $dictName
     * 字典名称
     * Required: false
     * Example Value: 
     */
    private $dictName;

    /**
     * @param String $dictName
     * 字典名称
     * Example Value: 
     */
    public function setDictName($dictName)
    {
        $this->dictName             = $dictName;
        $this->apiParas["contacts"]  = $dictName;
    }

    public function getDictName()
    {
        return $this->dictName;
    }

    /**
     * @param String $remark
     * 说明
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param String $remark
     * 说明
     * Example Value: 
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["phone"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

}