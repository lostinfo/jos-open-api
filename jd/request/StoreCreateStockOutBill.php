<?php

namespace JD\request;

/**
 * 创建退库单
 * FBP仓储API-FBP仓储API对应FBP类型商家后台（shop.jd.com）仓储管理模块中的业务。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=126&apiId=740&apiName=jingdong.store.createStockOutBill
 * Class StoreCreateStockOutBill
 * @package Jd\request
 */
class StoreCreateStockOutBill
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.store.createStockOutBill";
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
     * @param Number $comId
     * 分公司ID
     * Required: true
     * Example Value: 
     */
    private $comId;

    /**
     * @param Number $comId
     * 分公司ID
     * Example Value: 
     */
    public function setComId($comId)
    {
        $this->comId             = $comId;
        $this->apiParas["com_id"]  = $comId;
    }

    public function getComId()
    {
        return $this->comId;
    }

    /**
     * @param Number $orgId
     * 机构ID
     * Required: true
     * Example Value: 
     */
    private $orgId;

    /**
     * @param Number $orgId
     * 机构ID
     * Example Value: 
     */
    public function setOrgId($orgId)
    {
        $this->orgId             = $orgId;
        $this->apiParas["org_id"]  = $orgId;
    }

    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * @param Number $whId
     * 库房ID
     * Required: true
     * Example Value: 
     */
    private $whId;

    /**
     * @param Number $whId
     * 库房ID
     * Example Value: 
     */
    public function setWhId($whId)
    {
        $this->whId             = $whId;
        $this->apiParas["wh_id"]  = $whId;
    }

    public function getWhId()
    {
        return $this->whId;
    }

    /**
     * @param Number[] $skuCode
     * sku编码
     * Required: true
     * Example Value: 
     */
    private $skuCode;

    /**
     * @param Number[] $skuCode
     * sku编码
     * Example Value: 
     */
    public function setSkuCode($skuCode)
    {
        $this->skuCode             = $skuCode;
        $this->apiParas["sku_code"]  = $skuCode;
    }

    public function getSkuCode()
    {
        return $this->skuCode;
    }

    /**
     * @param Number[] $num
     * sku数量
     * Required: true
     * Example Value: 
     */
    private $num;

    /**
     * @param Number[] $num
     * sku数量
     * Example Value: 
     */
    public function setNum($num)
    {
        $this->num             = $num;
        $this->apiParas["num"]  = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param String[] $remark
     * 备注
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param String[] $remark
     * 备注
     * Example Value: 
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

}