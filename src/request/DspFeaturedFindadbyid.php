<?php

namespace JD\request;

/**
 * 查询.聚效.获取指定创意基本信息
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=2628&apiName=jingdong.dsp.featured.findadbyid
 * Class DspFeaturedFindadbyid
 * @package Jd\request
 */
class DspFeaturedFindadbyid
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.featured.findadbyid";
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
     * @param Number $id
     * 创意id
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number $id
     * 创意id
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