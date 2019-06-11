<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询.聚效.获取指定单元的可用尺寸列表
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=2630&apiName=jingdong.dsp.featured.querypositionsize
 * Class DspFeaturedQuerypositionsize
 * @package Jd\request
 */
class DspFeaturedQuerypositionsize
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.featured.querypositionsize";
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
     * 单元ID
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 单元ID
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