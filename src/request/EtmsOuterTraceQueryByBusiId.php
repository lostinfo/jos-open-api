<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 通过商家编码查询外单全程跟踪
 * 京东快递API-提供获取青龙运单号、向京东物流系统提交运单信息、跟踪查询物流信息等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=64&apiId=1446&apiName=jingdong.etms.outerTrace.queryByBusiId
 * Class EtmsOuterTraceQueryByBusiId
 * @package Jd\request
 */
class EtmsOuterTraceQueryByBusiId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.etms.outerTrace.queryByBusiId";
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
     * @param string $outerCode
     * 外单号
     * Required: true
     * Example Value: 
     */
    private $outerCode;

    /**
     * @param string $outerCode
     * 外单号
     * Example Value: 
     */
    public function setOuterCode($outerCode)
    {
        $this->outerCode             = $outerCode;
        $this->apiParas["outerCode"]  = $outerCode;
    }

    public function getOuterCode()
    {
        return $this->outerCode;
    }

    /**
     * @param int $busiId
     * 商家编码
     * Required: true
     * Example Value: 
     */
    private $busiId;

    /**
     * @param int $busiId
     * 商家编码
     * Example Value: 
     */
    public function setBusiId($busiId)
    {
        $this->busiId             = $busiId;
        $this->apiParas["busiId"]  = $busiId;
    }

    public function getBusiId()
    {
        return $this->busiId;
    }

}