<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.快车.修改计划状态（支持批量修改）
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1293&apiName=jingdong.dsp.kc.campain.status.update
 * Class DspKcCampainStatusUpdate
 * @package Jd\request
 */
class DspKcCampainStatusUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.campain.status.update";
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
     * 计划ID
     * Required: false
     * Example Value: 
     */
    private $id;

    /**
     * @param int[] $id
     * 计划ID
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["compaignId"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}