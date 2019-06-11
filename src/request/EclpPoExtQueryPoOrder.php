<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询采购入库单指定详情
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2164&apiName=jingdong.eclp.po.ext.queryPoOrder
 * Class EclpPoExtQueryPoOrder
 * @package Jd\request
 */
class EclpPoExtQueryPoOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.po.ext.queryPoOrder";
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
     * @param string $poOrderNo
     * 物流开放平台采购单号;多个采购单号以英文逗号分隔，最多100个;单个采购单号长度最长为50位
     * Required: true
     * Example Value: EPL4398046516113
     */
    private $poOrderNo;

    /**
     * @param string $poOrderNo
     * 物流开放平台采购单号;多个采购单号以英文逗号分隔，最多100个;单个采购单号长度最长为50位
     * Example Value: EPL4398046516113
     */
    public function setPoOrderNo($poOrderNo)
    {
        $this->poOrderNo             = $poOrderNo;
        $this->apiParas["poOrderNo"]  = $poOrderNo;
    }

    public function getPoOrderNo()
    {
        return $this->poOrderNo;
    }

    /**
     * @param bool $queryItemFlag
     * 是否查询采购入库单明细，长度为4，默认为false
     * Required: false
     * Example Value: true
     */
    private $queryItemFlag;

    /**
     * @param bool $queryItemFlag
     * 是否查询采购入库单明细，长度为4，默认为false
     * Example Value: true
     */
    public function setQueryItemFlag($queryItemFlag)
    {
        $this->queryItemFlag             = $queryItemFlag;
        $this->apiParas["queryItemFlag"]  = $queryItemFlag;
    }

    public function getQueryItemFlag()
    {
        return $this->queryItemFlag;
    }

    /**
     * @param bool $queryBoxFlag
     * 是否查询采购入库单箱明细，长度为4，默认为false
     * Required: false
     * Example Value: false
     */
    private $queryBoxFlag;

    /**
     * @param bool $queryBoxFlag
     * 是否查询采购入库单箱明细，长度为4，默认为false
     * Example Value: false
     */
    public function setQueryBoxFlag($queryBoxFlag)
    {
        $this->queryBoxFlag             = $queryBoxFlag;
        $this->apiParas["queryBoxFlag"]  = $queryBoxFlag;
    }

    public function getQueryBoxFlag()
    {
        return $this->queryBoxFlag;
    }

    /**
     * @param bool $queryQcFlag
     * 是否查询采购入库单质检明细，长度为4，默认为false
     * Required: false
     * Example Value: true
     */
    private $queryQcFlag;

    /**
     * @param bool $queryQcFlag
     * 是否查询采购入库单质检明细，长度为4，默认为false
     * Example Value: true
     */
    public function setQueryQcFlag($queryQcFlag)
    {
        $this->queryQcFlag             = $queryQcFlag;
        $this->apiParas["queryQcFlag"]  = $queryQcFlag;
    }

    public function getQueryQcFlag()
    {
        return $this->queryQcFlag;
    }

}