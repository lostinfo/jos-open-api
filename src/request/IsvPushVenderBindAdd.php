<?php

namespca Lostinfo\JosOpenApi;

/**
 * ISV绑定商家数据库接口
 * 云鼎API-数据推送
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=221&apiId=1919&apiName=jingdong.isv.push.vender.bind.add
 * Class IsvPushVenderBindAdd
 * @package Jd\request
 */
class IsvPushVenderBindAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.isv.push.vender.bind.add";
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
     * @param string $dbId
     * 数据库ID1
     * Required: true
     * Example Value: 
     */
    private $dbId;

    /**
     * @param string $dbId
     * 数据库ID1
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

}