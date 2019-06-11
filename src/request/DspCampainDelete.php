<?php

namespca Lostinfo\JosOpenApi;

/**
 * 操作.聚效.删除计划（支持批量）
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=1412&apiName=jingdong.dsp.campain.delete
 * Class DspCampainDelete
 * @package Jd\request
 */
class DspCampainDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.campain.delete";
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
     * 计划id
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int[] $id
     * 计划id
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