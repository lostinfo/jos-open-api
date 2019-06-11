<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询.聚效.获取指定计划基本信息
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=884&apiName=jingdong.dsp.campain.get
 * Class DspCampainGet
 * @package Jd\request
 */
class DspCampainGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.campain.get";
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
     * 计划ID
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 计划ID
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

}