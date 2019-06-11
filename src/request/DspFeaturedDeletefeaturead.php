<?php

namespca Lostinfo\JosOpenApi;

/**
 * 删除.品牌聚效.创意
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=1422&apiName=jingdong.dsp.featured.deletefeaturead
 * Class DspFeaturedDeletefeaturead
 * @package Jd\request
 */
class DspFeaturedDeletefeaturead
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.featured.deletefeaturead";
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
     * @param int[] $id
     * ID
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int[] $id
     * ID
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