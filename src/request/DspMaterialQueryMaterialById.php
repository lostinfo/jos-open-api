<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询.创意库.指定创意信息
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=1945&apiName=jingdong.dsp.material.queryMaterialById
 * Class DspMaterialQueryMaterialById
 * @package Jd\request
 */
class DspMaterialQueryMaterialById
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.material.queryMaterialById";
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
     * @param int $materialId
     * 素材ID
     * Required: true
     * Example Value: 
     */
    private $materialId;

    /**
     * @param int $materialId
     * 素材ID
     * Example Value: 
     */
    public function setMaterialId($materialId)
    {
        $this->materialId             = $materialId;
        $this->apiParas["materialId"]  = $materialId;
    }

    public function getMaterialId()
    {
        return $this->materialId;
    }

}