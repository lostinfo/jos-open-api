<?php

namespca Lostinfo\JosOpenApi;

/**
 * 操作.聚效.修改计划状态（支持批量，不支持店铺）
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=866&apiName=jingdong.dsp.campain.status.update
 * Class DspCampainStatusUpdate
 * @package Jd\request
 */
class DspCampainStatusUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.campain.status.update";
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
     * @param int $status
     * 状态 1暂停，2有效
     * Required: true
     * Example Value: 
     */
    private $status;

    /**
     * @param int $status
     * 状态 1暂停，2有效
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
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