<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取危险品列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1660&apiName=jingdong.vc.item.dangergoods.get
 * Class VcItemDangergoodsGet
 * @package Jd\request
 */
class VcItemDangergoodsGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.dangergoods.get";
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

}