<?php

namespca Lostinfo\JosOpenApi;

/**
 * 备件库服务单取消
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2168&apiName=jingdong.eclp.master.cancelBjkServiceOrder
 * Class EclpMasterCancelBjkServiceOrder
 * @package Jd\request
 */
class EclpMasterCancelBjkServiceOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.cancelBjkServiceOrder";
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
     * 事业部编号
     * Required: true
     * Example Value: 
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号
     * Example Value: 
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
     * @param string $serviceNo
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $serviceNo;

    /**
     * @param string $serviceNo
     * 服务单号
     * Example Value: 
     */
    public function setServiceNo($serviceNo)
    {
        $this->serviceNo             = $serviceNo;
        $this->apiParas["serviceNo"]  = $serviceNo;
    }

    public function getServiceNo()
    {
        return $this->serviceNo;
    }

}