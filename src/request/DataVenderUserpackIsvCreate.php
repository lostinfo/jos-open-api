<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 保存人群包接口(用于用户标签开放)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=2946&apiName=jingdong.data.vender.userpack.isv.create
 * Class DataVenderUserpackIsvCreate
 * @package Jd\request
 */
class DataVenderUserpackIsvCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.isv.create";
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
     * @param string $searchId
     * 人群包筛选结果唯一ID
     * Required: true
     * Example Value: 
     */
    private $searchId;

    /**
     * @param string $searchId
     * 人群包筛选结果唯一ID
     * Example Value: 
     */
    public function setSearchId($searchId)
    {
        $this->searchId             = $searchId;
        $this->apiParas["search_id"]  = $searchId;
    }

    public function getSearchId()
    {
        return $this->searchId;
    }

    /**
     * @param string $resultName
     * 人群包名称
     * Required: true
     * Example Value: 
     */
    private $resultName;

    /**
     * @param string $resultName
     * 人群包名称
     * Example Value: 
     */
    public function setResultName($resultName)
    {
        $this->resultName             = $resultName;
        $this->apiParas["result_name"]  = $resultName;
    }

    public function getResultName()
    {
        return $this->resultName;
    }

    /**
     * @param string $resultDesc
     * 人群包描述
     * Required: true
     * Example Value: 
     */
    private $resultDesc;

    /**
     * @param string $resultDesc
     * 人群包描述
     * Example Value: 
     */
    public function setResultDesc($resultDesc)
    {
        $this->resultDesc             = $resultDesc;
        $this->apiParas["result_desc"]  = $resultDesc;
    }

    public function getResultDesc()
    {
        return $this->resultDesc;
    }

}