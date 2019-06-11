<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.聚效.修改区域定向
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=879&apiName=jingdong.dsp.adunit.area.update
 * Class DspAdunitAreaUpdate
 * @package Jd\request
 */
class DspAdunitAreaUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adunit.area.update";
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
     * @param int $id
     * 单元id
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 单元id
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $areaId
     * 区域id
     * Required: true
     * Example Value: 
     */
    private $areaId;

    /**
     * @param string $areaId
     * 区域id
     * Example Value: 
     */
    public function setAreaId($areaId)
    {
        $this->areaId             = $areaId;
        $this->apiParas["areaId"]  = $areaId;
    }

    public function getAreaId()
    {
        return $this->areaId;
    }

}