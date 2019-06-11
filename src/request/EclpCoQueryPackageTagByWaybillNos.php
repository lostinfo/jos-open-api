<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据运单号查询包裹签信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2392&apiName=jingdong.eclp.co.queryPackageTagByWaybillNos
 * Class EclpCoQueryPackageTagByWaybillNos
 * @package Jd\request
 */
class EclpCoQueryPackageTagByWaybillNos
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.queryPackageTagByWaybillNos";
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
     * @param string[] $lwbNos
     * 大件运单号；最大长度50
     * Required: true
     * Example Value: LD1007884965
     */
    private $lwbNos;

    /**
     * @param string[] $lwbNos
     * 大件运单号；最大长度50
     * Example Value: LD1007884965
     */
    public function setLwbNos($lwbNos)
    {
        $this->lwbNos             = $lwbNos;
        $this->apiParas["lwbNos"]  = $lwbNos;
    }

    public function getLwbNos()
    {
        return $this->lwbNos;
    }

}