<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 包裹明细
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2267&apiName=jingdong.vc.getshippackagedetail
 * Class VcGetshippackagedetail
 * @package Jd\request
 */
class VcGetshippackagedetail
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.getshippackagedetail";
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
     * @param int $packageId
     * 包裹号
     * Required: true
     * Example Value: 
     */
    private $packageId;

    /**
     * @param int $packageId
     * 包裹号
     * Example Value: 
     */
    public function setPackageId($packageId)
    {
        $this->packageId             = $packageId;
        $this->apiParas["package_id"]  = $packageId;
    }

    public function getPackageId()
    {
        return $this->packageId;
    }

}