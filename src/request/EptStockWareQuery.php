<?php

namespace JD\request;

/**
 * 查询库存信息接口
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=1439&apiName=jingdong.ept.stock.ware.query
 * Class EptStockWareQuery
 * @package Jd\request
 */
class EptStockWareQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.stock.ware.query";
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
     * @param String $skuIds
     * 商品SKU ID列表（最多支持50个，每个SKU ID之间用英文逗号隔开，如43432,332123,76344）
     * Required: true
     * Example Value: 
     */
    private $skuIds;

    /**
     * @param String $skuIds
     * 商品SKU ID列表（最多支持50个，每个SKU ID之间用英文逗号隔开，如43432,332123,76344）
     * Example Value: 
     */
    public function setSkuIds($skuIds)
    {
        $this->skuIds             = $skuIds;
        $this->apiParas["skuIds"]  = $skuIds;
    }

    public function getSkuIds()
    {
        return $this->skuIds;
    }

}