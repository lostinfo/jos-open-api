<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询.聚效.获取指定单元基本信息
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=881&apiName=jingdong.dsp.adunit.adgroup.get
 * Class DspAdunitAdgroupGet
 * @package Jd\request
 */
class DspAdunitAdgroupGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adunit.adgroup.get";
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

}