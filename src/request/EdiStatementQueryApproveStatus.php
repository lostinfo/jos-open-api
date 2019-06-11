<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询结算单审核信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2702&apiName=jingdong.edi.statement.queryApproveStatus
 * Class EdiStatementQueryApproveStatus
 * @package Jd\request
 */
class EdiStatementQueryApproveStatus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.statement.queryApproveStatus";
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
     * @param string $billNo
     * 结算单号
     * Required: true
     * Example Value: 
     */
    private $billNo;

    /**
     * @param string $billNo
     * 结算单号
     * Example Value: 
     */
    public function setBillNo($billNo)
    {
        $this->billNo             = $billNo;
        $this->apiParas["billNo"]  = $billNo;
    }

    public function getBillNo()
    {
        return $this->billNo;
    }

}