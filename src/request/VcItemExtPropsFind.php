<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据3级分类获取拓展属性
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1676&apiName=jingdong.vc.item.extProps.find
 * Class VcItemExtPropsFind
 * @package Jd\request
 */
class VcItemExtPropsFind
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.extProps.find";
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
     * @param int $leafCid
     * 最细粒度的类目id
     * Required: false
     * Example Value: 672
     */
    private $leafCid;

    /**
     * @param int $leafCid
     * 最细粒度的类目id
     * Example Value: 672
     */
    public function setLeafCid($leafCid)
    {
        $this->leafCid             = $leafCid;
        $this->apiParas["category_leaf_id"]  = $leafCid;
    }

    public function getLeafCid()
    {
        return $this->leafCid;
    }

}