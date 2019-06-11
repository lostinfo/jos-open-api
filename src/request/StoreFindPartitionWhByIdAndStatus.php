<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询仓库信息
 * SOP仓储API-SOP仓储API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=127&apiId=750&apiName=jingdong.store.findPartitionWhByIdAndStatus
 * Class StoreFindPartitionWhByIdAndStatus
 * @package Jd\request
 */
class StoreFindPartitionWhByIdAndStatus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.store.findPartitionWhByIdAndStatus";
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
     * 库房状态 0表示暂停，1表示使用,2表示查询全部
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param int $status
     * 库房状态 0表示暂停，1表示使用,2表示查询全部
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

}