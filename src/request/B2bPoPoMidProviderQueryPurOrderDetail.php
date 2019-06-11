<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询采购单详情
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3130&apiName=jingdong.b2b.po.PoMidProvider.queryPurOrderDetail
 * Class B2bPoPoMidProviderQueryPurOrderDetail
 * @package Jd\request
 */
class B2bPoPoMidProviderQueryPurOrderDetail
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.po.PoMidProvider.queryPurOrderDetail";
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
     * @param string $poId
     * 采购单号
     * Required: true
     * Example Value: 
     */
    private $poId;

    /**
     * @param string $poId
     * 采购单号
     * Example Value: 
     */
    public function setPoId($poId)
    {
        $this->poId             = $poId;
        $this->apiParas["poId"]  = $poId;
    }

    public function getPoId()
    {
        return $this->poId;
    }

    /**
     * @param string[] $tagName
     * 需要获取的数据
     * Required: true
     * Example Value: 
     */
    private $tagName;

    /**
     * @param string[] $tagName
     * 需要获取的数据
     * Example Value: 
     */
    public function setTagName($tagName)
    {
        $this->tagName             = $tagName;
        $this->apiParas["tagName"]  = $tagName;
    }

    public function getTagName()
    {
        return $this->tagName;
    }

}