<?php

namespace JD\request;

/**
 * 根据外部门店Id，获取京东门店信息
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=2908&apiName=jingdong.findStoreInfoByExtStoreId
 * Class FindStoreInfoByExtStoreId
 * @package Jd\request
 */
class FindStoreInfoByExtStoreId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.findStoreInfoByExtStoreId";
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
     * @param String $extStoreId
     * 外部门店ID
     * Required: true
     * Example Value: 
     */
    private $extStoreId;

    /**
     * @param String $extStoreId
     * 外部门店ID
     * Example Value: 
     */
    public function setExtStoreId($extStoreId)
    {
        $this->extStoreId             = $extStoreId;
        $this->apiParas["extStoreId"]  = $extStoreId;
    }

    public function getExtStoreId()
    {
        return $this->extStoreId;
    }

}