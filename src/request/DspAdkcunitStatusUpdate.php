<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.快车.修改单元状态（支持批量修改）
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1289&apiName=jingdong.dsp.adkcunit.status.update
 * Class DspAdkcunitStatusUpdate
 * @package Jd\request
 */
class DspAdkcunitStatusUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkcunit.status.update";
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
     * 单元id集合
     * Required: true
     * Example Value: 
     */
    private $ids;

    /**
     * @param int[] $ids
     * 单元id集合
     * Example Value: 
     */
    public function setIds($ids)
    {
        $this->ids             = $ids;
        $this->apiParas["adGroupId"]  = $ids;
    }

    public function getIds()
    {
        return $this->ids;
    }

}