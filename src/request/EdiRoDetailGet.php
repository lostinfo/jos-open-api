<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据退货单号获取退货单明细信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1971&apiName=jingdong.edi.ro.detail.get
 * Class EdiRoDetailGet
 * @package Jd\request
 */
class EdiRoDetailGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.ro.detail.get";
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
     * @param string $returnOrderCode
     * 退货单号
     * Required: true
     * Example Value: 
     */
    private $returnOrderCode;

    /**
     * @param string $returnOrderCode
     * 退货单号
     * Example Value: 
     */
    public function setReturnOrderCode($returnOrderCode)
    {
        $this->returnOrderCode             = $returnOrderCode;
        $this->apiParas["returnOrderCode"]  = $returnOrderCode;
    }

    public function getReturnOrderCode()
    {
        return $this->returnOrderCode;
    }

}