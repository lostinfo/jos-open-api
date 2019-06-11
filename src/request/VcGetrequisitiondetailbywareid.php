<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据商品编号获取商品信息包括采购价、建议采购数量、可采购的配送中心列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1199&apiName=jingdong.vc.getrequisitiondetailbywareid
 * Class VcGetrequisitiondetailbywareid
 * @package Jd\request
 */
class VcGetrequisitiondetailbywareid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.getrequisitiondetailbywareid";
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
     * @param int $wareId
     * 商品编号
     * Required: true
     * Example Value: 123456
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品编号
     * Example Value: 123456
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

    /**
     * @param int $deliverCenterId
     * 配送中心编号
     * Required: true
     * Example Value: 6
     */
    private $deliverCenterId;

    /**
     * @param int $deliverCenterId
     * 配送中心编号
     * Example Value: 6
     */
    public function setDeliverCenterId($deliverCenterId)
    {
        $this->deliverCenterId             = $deliverCenterId;
        $this->apiParas["deliver_center_id"]  = $deliverCenterId;
    }

    public function getDeliverCenterId()
    {
        return $this->deliverCenterId;
    }

}