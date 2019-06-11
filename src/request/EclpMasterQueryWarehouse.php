<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取仓库信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=952&apiName=jingdong.eclp.master.queryWarehouse
 * Class EclpMasterQueryWarehouse
 * @package Jd\request
 */
class EclpMasterQueryWarehouse
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.queryWarehouse";
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
     * ECLP事业部编号,必须输入一个事业部编号进行查询
     * Required: true
     * Example Value: EBU0000000000001
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * ECLP事业部编号,必须输入一个事业部编号进行查询
     * Example Value: EBU0000000000001
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
     * @param string $warehouseNos
     * ECLP系统库房号,多个以英文逗号分隔
     * Required: false
     * Example Value: 110000196,110000155
     */
    private $warehouseNos;

    /**
     * @param string $warehouseNos
     * ECLP系统库房号,多个以英文逗号分隔
     * Example Value: 110000196,110000155
     */
    public function setWarehouseNos($warehouseNos)
    {
        $this->warehouseNos             = $warehouseNos;
        $this->apiParas["warehouseNos"]  = $warehouseNos;
    }

    public function getWarehouseNos()
    {
        return $this->warehouseNos;
    }

    /**
     * @param string $status
     * 仓库状态,多个以英文逗号分隔
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param string $status
     * 仓库状态,多个以英文逗号分隔
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

}