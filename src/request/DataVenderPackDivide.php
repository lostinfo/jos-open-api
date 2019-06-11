<?php

namespca Lostinfo\JosOpenApi;

/**
 * 包拆分(用于精准营销短信)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3632&apiName=jingdong.data.vender.pack.divide
 * Class DataVenderPackDivide
 * @package Jd\request
 */
class DataVenderPackDivide
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.pack.divide";
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
     * @param int[] $subPackRation
     * 子包占母包百分比，精度为小数点两位（浮点数），和subPackCnt二选一
     * Required: false
     * Example Value: 0.00
     */
    private $subPackRation;

    /**
     * @param int[] $subPackRation
     * 子包占母包百分比，精度为小数点两位（浮点数），和subPackCnt二选一
     * Example Value: 0.00
     */
    public function setSubPackRation($subPackRation)
    {
        $this->subPackRation             = $subPackRation;
        $this->apiParas["sub_pack_ration"]  = $subPackRation;
    }

    public function getSubPackRation()
    {
        return $this->subPackRation;
    }

    /**
     * @param string $searchId
     * 母包Id
     * Required: true
     * Example Value: aaaa
     */
    private $searchId;

    /**
     * @param string $searchId
     * 母包Id
     * Example Value: aaaa
     */
    public function setSearchId($searchId)
    {
        $this->searchId             = $searchId;
        $this->apiParas["parent_search_id"]  = $searchId;
    }

    public function getSearchId()
    {
        return $this->searchId;
    }

    /**
     * @param int[] $subPackCnt
     * 子包大小，和subPackRation二选一
     * Required: false
     * Example Value: 0
     */
    private $subPackCnt;

    /**
     * @param int[] $subPackCnt
     * 子包大小，和subPackRation二选一
     * Example Value: 0
     */
    public function setSubPackCnt($subPackCnt)
    {
        $this->subPackCnt             = $subPackCnt;
        $this->apiParas["sub_pack_cnt"]  = $subPackCnt;
    }

    public function getSubPackCnt()
    {
        return $this->subPackCnt;
    }

}