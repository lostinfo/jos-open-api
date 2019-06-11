<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询.聚效.获取指定单元绑定人群信息
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=1637&apiName=jingdong.dsp.adunit.dmp.getBindCrowd
 * Class DspAdunitDmpGetBindCrowd
 * @package Jd\request
 */
class DspAdunitDmpGetBindCrowd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adunit.dmp.getBindCrowd";
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
     * @param int $adGroupId
     * 单元号
     * Required: true
     * Example Value: 
     */
    private $adGroupId;

    /**
     * @param int $adGroupId
     * 单元号
     * Example Value: 
     */
    public function setAdGroupId($adGroupId)
    {
        $this->adGroupId             = $adGroupId;
        $this->apiParas["adGroupId"]  = $adGroupId;
    }

    public function getAdGroupId()
    {
        return $this->adGroupId;
    }

    /**
     * @param int $displayType
     * 单元类型:RECOMMEND(推荐,1); SEARCH(搜索,2); CPM(CPM,3); INFORMATIONFLOW(信息流广告,4);
     * Required: true
     * Example Value: 
     */
    private $displayType;

    /**
     * @param int $displayType
     * 单元类型:RECOMMEND(推荐,1); SEARCH(搜索,2); CPM(CPM,3); INFORMATIONFLOW(信息流广告,4);
     * Example Value: 
     */
    public function setDisplayType($displayType)
    {
        $this->displayType             = $displayType;
        $this->apiParas["displayType"]  = $displayType;
    }

    public function getDisplayType()
    {
        return $this->displayType;
    }

}