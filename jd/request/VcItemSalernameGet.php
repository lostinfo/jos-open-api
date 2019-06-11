<?php

namespace JD\request;

/**
 * 根据销售员简码获取销售员姓名
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1160&apiName=jingdong.vc.item.salername.get
 * Class VcItemSalernameGet
 * @package Jd\request
 */
class VcItemSalernameGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.salername.get";
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
     * @param String $salerCode
     * 销售员简码
     * Required: true
     * Example Value: zhaoqun
     */
    private $salerCode;

    /**
     * @param String $salerCode
     * 销售员简码
     * Example Value: zhaoqun
     */
    public function setSalerCode($salerCode)
    {
        $this->salerCode             = $salerCode;
        $this->apiParas["saler_code"]  = $salerCode;
    }

    public function getSalerCode()
    {
        return $this->salerCode;
    }

}