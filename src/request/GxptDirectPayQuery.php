<?php

namespca Lostinfo\JosOpenApi;

/**
 * B2B赔付接口
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3446&apiName=jingdong.gxpt.directPay.query
 * Class GxptDirectPayQuery
 * @package Jd\request
 */
class GxptDirectPayQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.gxpt.directPay.query";
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
     * @param string $startCreated
     * 代理商申请赔付开始时间
     * Required: false
     * Example Value: 2019-03-01 00:00:00
     */
    private $startCreated;

    /**
     * @param string $startCreated
     * 代理商申请赔付开始时间
     * Example Value: 2019-03-01 00:00:00
     */
    public function setStartCreated($startCreated)
    {
        $this->startCreated             = $startCreated;
        $this->apiParas["startCreated"]  = $startCreated;
    }

    public function getStartCreated()
    {
        return $this->startCreated;
    }

    /**
     * @param string $endCreated
     * 代理商申请赔付结束时间
     * Required: false
     * Example Value: 2019-03-01 00:00:00
     */
    private $endCreated;

    /**
     * @param string $endCreated
     * 代理商申请赔付结束时间
     * Example Value: 2019-03-01 00:00:00
     */
    public function setEndCreated($endCreated)
    {
        $this->endCreated             = $endCreated;
        $this->apiParas["endCreated"]  = $endCreated;
    }

    public function getEndCreated()
    {
        return $this->endCreated;
    }

    /**
     * @param string $startModified
     * 赔付单更新时间起始时间
     * Required: false
     * Example Value: 2019-03-01 00:00:00
     */
    private $startModified;

    /**
     * @param string $startModified
     * 赔付单更新时间起始时间
     * Example Value: 2019-03-01 00:00:00
     */
    public function setStartModified($startModified)
    {
        $this->startModified             = $startModified;
        $this->apiParas["startModified"]  = $startModified;
    }

    public function getStartModified()
    {
        return $this->startModified;
    }

    /**
     * @param string $endModified
     * 赔付单更新时间截止时间
     * Required: false
     * Example Value: 2019-03-01 00:00:00
     */
    private $endModified;

    /**
     * @param string $endModified
     * 赔付单更新时间截止时间
     * Example Value: 2019-03-01 00:00:00
     */
    public function setEndModified($endModified)
    {
        $this->endModified             = $endModified;
        $this->apiParas["endModified"]  = $endModified;
    }

    public function getEndModified()
    {
        return $this->endModified;
    }

    /**
     * @param int $payType
     * 赔付类型：先行赔付；商家直赔；延迟发货
     * Required: false
     * Example Value: 1
     */
    private $payType;

    /**
     * @param int $payType
     * 赔付类型：先行赔付；商家直赔；延迟发货
     * Example Value: 1
     */
    public function setPayType($payType)
    {
        $this->payType             = $payType;
        $this->apiParas["payType"]  = $payType;
    }

    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * @param int $payState
     * 审核状态
     * Required: false
     * Example Value: 1
     */
    private $payState;

    /**
     * @param int $payState
     * 审核状态
     * Example Value: 1
     */
    public function setPayState($payState)
    {
        $this->payState             = $payState;
        $this->apiParas["payState"]  = $payState;
    }

    public function getPayState()
    {
        return $this->payState;
    }

    /**
     * @param int $page
     * 分页页码
     * Required: true
     * Example Value: 1
     */
    private $page;

    /**
     * @param int $page
     * 分页页码
     * Example Value: 1
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $pageSize
     * 分页大小
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 分页大小
     * Example Value: 10
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