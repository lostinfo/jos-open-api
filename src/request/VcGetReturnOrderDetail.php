<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据退货单号取得退货单明细
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=487&apiName=jingdong.vc.get.return.order.detail
 * Class VcGetReturnOrderDetail
 * @package Jd\request
 */
class VcGetReturnOrderDetail
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.get.return.order.detail";
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
     * @param int $returnId
     * 退货单号
     * Required: true
     * Example Value: 123456
     */
    private $returnId;

    /**
     * @param int $returnId
     * 退货单号
     * Example Value: 123456
     */
    public function setReturnId($returnId)
    {
        $this->returnId             = $returnId;
        $this->apiParas["returnId"]  = $returnId;
    }

    public function getReturnId()
    {
        return $this->returnId;
    }

}