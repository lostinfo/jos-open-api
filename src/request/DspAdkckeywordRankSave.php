<?php

namespace JD\request;

/**
 * 保存关键词抢排名设置
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=3560&apiName=jingdong.dsp.adkckeyword.rank.save
 * Class DspAdkckeywordRankSave
 * @package Jd\request
 */
class DspAdkckeywordRankSave
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkckeyword.rank.save";
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
     * @param Number $searchPromoteRankEnable
     * 抢位助手是否开启，0：不开启，1：开启
     * Required: true
     * Example Value: 1
     */
    private $searchPromoteRankEnable;

    /**
     * @param Number $searchPromoteRankEnable
     * 抢位助手是否开启，0：不开启，1：开启
     * Example Value: 1
     */
    public function setSearchPromoteRankEnable($searchPromoteRankEnable)
    {
        $this->searchPromoteRankEnable             = $searchPromoteRankEnable;
        $this->apiParas["searchPromoteRankEnable"]  = $searchPromoteRankEnable;
    }

    public function getSearchPromoteRankEnable()
    {
        return $this->searchPromoteRankEnable;
    }

    /**
     * @param Number $searchPromoteRankType
     * 抢位位置，1：top1，4：top3，16：top5，512：top10
     * Required: true
     * Example Value: 1
     */
    private $searchPromoteRankType;

    /**
     * @param Number $searchPromoteRankType
     * 抢位位置，1：top1，4：top3，16：top5，512：top10
     * Example Value: 1
     */
    public function setSearchPromoteRankType($searchPromoteRankType)
    {
        $this->searchPromoteRankType             = $searchPromoteRankType;
        $this->apiParas["searchPromoteRankType"]  = $searchPromoteRankType;
    }

    public function getSearchPromoteRankType()
    {
        return $this->searchPromoteRankType;
    }

    /**
     * @param Number $searchPromoteRankCoef
     * 溢价，1\\\\\\\\x7e200之间
     * Required: true
     * Example Value: 10
     */
    private $searchPromoteRankCoef;

    /**
     * @param Number $searchPromoteRankCoef
     * 溢价，1\\\\\\\\x7e200之间
     * Example Value: 10
     */
    public function setSearchPromoteRankCoef($searchPromoteRankCoef)
    {
        $this->searchPromoteRankCoef             = $searchPromoteRankCoef;
        $this->apiParas["searchPromoteRankCoef"]  = $searchPromoteRankCoef;
    }

    public function getSearchPromoteRankCoef()
    {
        return $this->searchPromoteRankCoef;
    }

    /**
     * @param Number[] $ids
     * 关键词ID列表
     * Required: true
     * Example Value: 1
     */
    private $ids;

    /**
     * @param Number[] $ids
     * 关键词ID列表
     * Example Value: 1
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