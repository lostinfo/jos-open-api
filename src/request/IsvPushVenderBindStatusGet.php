<?php

namespace JD\request;

/**
 * 查询数据库绑定商家列表
 * 云鼎API-数据推送
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=221&apiId=1920&apiName=jingdong.isv.push.vender.bind.status.get
 * Class IsvPushVenderBindStatusGet
 * @package Jd\request
 */
class IsvPushVenderBindStatusGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.isv.push.vender.bind.status.get";
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
     * @param String $bindAppCode
     * 应用appKey
     * Required: true
     * Example Value: 
     */
    private $bindAppCode;

    /**
     * @param String $bindAppCode
     * 应用appKey
     * Example Value: 
     */
    public function setBindAppCode($bindAppCode)
    {
        $this->bindAppCode             = $bindAppCode;
        $this->apiParas["bindAppCode"]  = $bindAppCode;
    }

    public function getBindAppCode()
    {
        return $this->bindAppCode;
    }

    /**
     * @param String $dbId
     * 数据库ID
     * Required: true
     * Example Value: 
     */
    private $dbId;

    /**
     * @param String $dbId
     * 数据库ID
     * Example Value: 
     */
    public function setDbId($dbId)
    {
        $this->dbId             = $dbId;
        $this->apiParas["dbId"]  = $dbId;
    }

    public function getDbId()
    {
        return $this->dbId;
    }

    /**
     * @param Number $bindUserId
     * 商家ID，可空，传值时表示单条查询
     * Required: false
     * Example Value: 
     */
    private $bindUserId;

    /**
     * @param Number $bindUserId
     * 商家ID，可空，传值时表示单条查询
     * Example Value: 
     */
    public function setBindUserId($bindUserId)
    {
        $this->bindUserId             = $bindUserId;
        $this->apiParas["bindUserId"]  = $bindUserId;
    }

    public function getBindUserId()
    {
        return $this->bindUserId;
    }

    /**
     * @param Number $pageNo
     * 当前页码，默认1
     * Required: false
     * Example Value: 
     */
    private $pageNo;

    /**
     * @param Number $pageNo
     * 当前页码，默认1
     * Example Value: 
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param Number $pageSize
     * 每页数量,默认200
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页数量,默认200
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}