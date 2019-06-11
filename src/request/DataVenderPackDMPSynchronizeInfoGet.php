<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 人群实例同步Dmp结果查询
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3684&apiName=jingdong.data.vender.pack.DMP.synchronize.info.get
 * Class DataVenderPackDMPSynchronizeInfoGet
 * @package Jd\request
 */
class DataVenderPackDMPSynchronizeInfoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.pack.DMP.synchronize.info.get";
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
     * @param string $recordId
     * 同步Dmp记录Id
     * Required: false
     * Example Value: 6101b5d4949e44e796245d765dd86461
     */
    private $recordId;

    /**
     * @param string $recordId
     * 同步Dmp记录Id
     * Example Value: 6101b5d4949e44e796245d765dd86461
     */
    public function setRecordId($recordId)
    {
        $this->recordId             = $recordId;
        $this->apiParas["record_id"]  = $recordId;
    }

    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * @param int $pageIndex
     * 页索引
     * Required: true
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页索引
     * Example Value: 1
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["page_index"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $pageSize
     * 页大小
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 页大小
     * Example Value: 10
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}