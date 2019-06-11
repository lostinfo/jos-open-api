<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据采购员简码获取采购员姓名
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1154&apiName=jingdong.vc.item.purchasername.get
 * Class VcItemPurchasernameGet
 * @package Jd\request
 */
class VcItemPurchasernameGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.purchasername.get";
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
     * @param string $purchaserCode
     * 采购员简码
     * Required: true
     * Example Value: zhaoqun
     */
    private $purchaserCode;

    /**
     * @param string $purchaserCode
     * 采购员简码
     * Example Value: zhaoqun
     */
    public function setPurchaserCode($purchaserCode)
    {
        $this->purchaserCode             = $purchaserCode;
        $this->apiParas["purchaser_code"]  = $purchaserCode;
    }

    public function getPurchaserCode()
    {
        return $this->purchaserCode;
    }

}