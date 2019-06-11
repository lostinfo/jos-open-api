<?php

namespace JD\request;

/**
 * 采购入库单取消
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=932&apiName=jingdong.eclp.po.cancalPoOrder
 * Class EclpPoCancalPoOrder
 * @package Jd\request
 */
class EclpPoCancalPoOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.po.cancalPoOrder";
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
     * @param String $poOrderNo
     * 开放平台采购单号，格式：EPL开头，最大长度：50
     * Required: true
     * Example Value: EPL4398046516113
     */
    private $poOrderNo;

    /**
     * @param String $poOrderNo
     * 开放平台采购单号，格式：EPL开头，最大长度：50
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