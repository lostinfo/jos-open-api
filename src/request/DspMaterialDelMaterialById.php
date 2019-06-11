<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.创意库.删除创意
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=1944&apiName=jingdong.dsp.material.delMaterialById
 * Class DspMaterialDelMaterialById
 * @package Jd\request
 */
class DspMaterialDelMaterialById
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.material.delMaterialById";
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