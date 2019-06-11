<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取供应商信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=938&apiName=jingdong.eclp.master.querySupplier
 * Class EclpMasterQuerySupplier
 * @package Jd\request
 */
class EclpMasterQuerySupplier
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.querySupplier";
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
     * @param string $deptNo
     * 事业部编号(必填，长度:16) 
     * Required: true
     * Example Value: EBU0000000000666
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号(必填，长度:16) 
     * Example Value: EBU0000000000666
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"]  = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    /**
     * @param string $supplierNos
     * 供应商编号(必填，长度：100)
     * Required: false
     * Example Value: 0000001000
     */
    private $supplierNos;

    /**
     * @param string $supplierNos
     * 供应商编号(必填，长度：100)
     * Example Value: 0000001000
     */
    public function setSupplierNos($supplierNos)
    {
        $this->supplierNos             = $supplierNos;
        $this->apiParas["supplierNos"]  = $supplierNos;
    }

    public function getSupplierNos()
    {
        return $this->supplierNos;
    }

}