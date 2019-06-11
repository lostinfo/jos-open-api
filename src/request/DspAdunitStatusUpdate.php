<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.聚效.修改单元状态（支持批量）
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=870&apiName=jingdong.dsp.adunit.status.update
 * Class DspAdunitStatusUpdate
 * @package Jd\request
 */
class DspAdunitStatusUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adunit.status.update";
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
     * @param int[] $ids
     * ids
     * Required: true
     * Example Value: 
     */
    private $ids;

    /**
     * @param int[] $ids
     * ids
     * Example Value: 
     */
    public function setIds($ids)
    {
        $this->ids             = $ids;
        $this->apiParas["ids"]  = $ids;
    }

    public function getIds()
    {
        return $this->ids;
    }

}