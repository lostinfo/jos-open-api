<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取承运商信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=950&apiName=jingdong.eclp.master.queryShipper
 * Class EclpMasterQueryShipper
 * @package Jd\request
 */
class EclpMasterQueryShipper
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.queryShipper";
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
     * @param string $shipperNos
     * 开放平台承运商编号，多个以英文逗号分隔
     * Required: false
     * Example Value: CYS0000001,CYS0000002
     */
    private $shipperNos;

    /**
     * @param string $shipperNos
     * 开放平台承运商编号，多个以英文逗号分隔
     * Example Value: CYS0000001,CYS0000002
     */
    public function setShipperNos($shipperNos)
    {
        $this->shipperNos             = $shipperNos;
        $this->apiParas["shipperNos"]  = $shipperNos;
    }

    public function getShipperNos()
    {
        return $this->shipperNos;
    }

}