<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 创建入库单
 * FBP仓储API-FBP仓储API对应FBP类型商家后台（shop.jd.com）仓储管理模块中的业务。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=126&apiId=749&apiName=jingdong.store.createStockInBill
 * Class StoreCreateStockInBill
 * @package Jd\request
 */
class StoreCreateStockInBill
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.store.createStockInBill";
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
     * @param int $arrivalDay
     * 预计到达天数
     * Required: true
     * Example Value: 
     */
    private $arrivalDay;

    /**
     * @param int $arrivalDay
     * 预计到达天数
     * Example Value: 
     */
    public function setArrivalDay($arrivalDay)
    {
        $this->arrivalDay             = $arrivalDay;
        $this->apiParas["arrivalDay"]  = $arrivalDay;
    }

    public function getArrivalDay()
    {
        return $this->arrivalDay;
    }

    /**
     * @param int $comId
     * 分公司ID
     * Required: true
     * Example Value: 
     */
    private $comId;

    /**
     * @param int $comId
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
     * @param int $orgId
     * 机构ID
     * Required: true
     * Example Value: 
     */
    private $orgId;

    /**
     * @param int $orgId
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
     * @param int $whId
     * 库房ID
     * Required: true
     * Example Value: 
     */
    private $whId;

    /**
     * @param int $whId
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
     * @param int[] $skuCode
     * sku编码
     * Required: true
     * Example Value: 
     */
    private $skuCode;

    /**
     * @param int[] $skuCode
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
     * @param int[] $num
     * sku数量
     * Required: true
     * Example Value: 
     */
    private $num;

    /**
     * @param int[] $num
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
     * @param string[] $remark
     * 备注
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param string[] $remark
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