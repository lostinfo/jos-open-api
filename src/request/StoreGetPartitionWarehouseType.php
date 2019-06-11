<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询仓库类型
 * SOP仓储API-SOP仓储API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=127&apiId=751&apiName=jingdong.store.getPartitionWarehouseType
 * Class StoreGetPartitionWarehouseType
 * @package Jd\request
 */
class StoreGetPartitionWarehouseType
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.store.getPartitionWarehouseType";
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
     * @param int $seqNum
     * 库房编号
     * Required: false
     * Example Value: 
     */
    private $seqNum;

    /**
     * @param int $seqNum
     * 库房编号
     * Example Value: 
     */
    public function setSeqNum($seqNum)
    {
        $this->seqNum             = $seqNum;
        $this->apiParas["seq_num"]  = $seqNum;
    }

    public function getSeqNum()
    {
        return $this->seqNum;
    }

}