<?php

namespca Lostinfo\JosOpenApi;

/**
 * 操作.通用.删除商家资质
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=1941&apiName=jingdong.dsp.material.deleteCreativeById
 * Class DspMaterialDeleteCreativeById
 * @package Jd\request
 */
class DspMaterialDeleteCreativeById
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.material.deleteCreativeById";
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
     * 资质ID
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 资质ID
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