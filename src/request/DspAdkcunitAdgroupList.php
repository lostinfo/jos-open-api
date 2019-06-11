<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询.快车.指定计划下所有单元及基本信息
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1284&apiName=jingdong.dsp.adkcunit.adgroup.list
 * Class DspAdkcunitAdgroupList
 * @package Jd\request
 */
class DspAdkcunitAdgroupList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkcunit.adgroup.list";
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
     * @param int $pageNum
     * 页数
     * Required: true
     * Example Value: 
     */
    private $pageNum;

    /**
     * @param int $pageNum
     * 页数
     * Example Value: 
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"]  = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param int $pageSize
     * 列数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 列数
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

    /**
     * @param int $campaignId
     * 计划Id
     * Required: true
     * Example Value: 
     */
    private $campaignId;

    /**
     * @param int $campaignId
     * 计划Id
     * Example Value: 
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId             = $campaignId;
        $this->apiParas["campaignId"]  = $campaignId;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }

}