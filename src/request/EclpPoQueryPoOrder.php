<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 采购入库单查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=940&apiName=jingdong.eclp.po.queryPoOrder
 * Class EclpPoQueryPoOrder
 * @package Jd\request
 */
class EclpPoQueryPoOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.po.queryPoOrder";
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

}