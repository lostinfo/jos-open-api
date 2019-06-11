<?php

namespace JD\request;

/**
 * 删除质检报告
 * 品控质检API-品控质检API为您提供新增质检报告、获得质检报告、获取订购关系、查询质检报告列表、删除质检报告、更新质检报告六个品控质检API.
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=65&apiId=251&apiName=jingdong.market.service.qt.report.delete
 * Class MarketServiceQtReportDelete
 * @package Jd\request
 */
class MarketServiceQtReportDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.market.service.qt.report.delete";
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
     * @param String $qtCode
     * 质检编号
     * Required: true
     * Example Value: 1000001
     */
    private $qtCode;

    /**
     * @param String $qtCode
     * 质检编号
     * Example Value: 1000001
     */
    public function setQtCode($qtCode)
    {
        $this->qtCode             = $qtCode;
        $this->apiParas["qtCode"]  = $qtCode;
    }

    public function getQtCode()
    {
        return $this->qtCode;
    }

}