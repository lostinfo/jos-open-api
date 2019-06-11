<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询业务类型
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1671&apiName=jingdong.vc.item.feature.find
 * Class VcItemFeatureFind
 * @package Jd\request
 */
class VcItemFeatureFind
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.feature.find";
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
     * @param int $cid3
     * 三级分类
     * Required: true
     * Example Value: 655
     */
    private $cid3;

    /**
     * @param int $cid3
     * 三级分类
     * Example Value: 655
     */
    public function setCid3($cid3)
    {
        $this->cid3             = $cid3;
        $this->apiParas["cid3"]  = $cid3;
    }

    public function getCid3()
    {
        return $this->cid3;
    }

    /**
     * @param string $wareId
     * 商品编号[注意：有商品编号必填，无商品编号不填]
     * Required: false
     * Example Value: 
     */
    private $wareId;

    /**
     * @param string $wareId
     * 商品编号[注意：有商品编号必填，无商品编号不填]
     * Example Value: 
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