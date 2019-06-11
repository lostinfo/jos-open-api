<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询商品广告词
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1153&apiName=jingdong.vc.item.advertise.get
 * Class VcItemAdvertiseGet
 * @package Jd\request
 */
class VcItemAdvertiseGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.advertise.get";
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
     * @param string $wareId
     * 商品编号
     * Required: true
     * Example Value: 2677015
     */
    private $wareId;

    /**
     * @param string $wareId
     * 商品编号
     * Example Value: 2677015
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["ware_id"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

}