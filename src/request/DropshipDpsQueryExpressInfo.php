<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询运单信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1394&apiName=jingdong.dropship.dps.queryExpressInfo
 * Class DropshipDpsQueryExpressInfo
 * @package Jd\request
 */
class DropshipDpsQueryExpressInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.queryExpressInfo";
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
     * @param int[] $customOrderIds
     * 客单编号
     * Required: true
     * Example Value: 170439197
     */
    private $customOrderIds;

    /**
     * @param int[] $customOrderIds
     * 客单编号
     * Example Value: 170439197
     */
    public function setCustomOrderIds($customOrderIds)
    {
        $this->customOrderIds             = $customOrderIds;
        $this->apiParas["customOrderIds"]  = $customOrderIds;
    }

    public function getCustomOrderIds()
    {
        return $this->customOrderIds;
    }

}