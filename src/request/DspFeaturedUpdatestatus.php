<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.聚效.修改单元状态（支持批量）
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=867&apiName=jingdong.dsp.featured.updatestatus
 * Class DspFeaturedUpdatestatus
 * @package Jd\request
 */
class DspFeaturedUpdatestatus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.featured.updatestatus";
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
     * 状态
     * Required: true
     * Example Value: 
     */
    private $status;

    /**
     * @param int $status
     * 状态
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