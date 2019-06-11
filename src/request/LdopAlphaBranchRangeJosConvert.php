<?php

namespca Lostinfo\JosOpenApi;

/**
 * 网点配送范围同步接口内部转换实现
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=1708&apiName=jingdong.ldop.alpha.branchRange.jos.Convert
 * Class LdopAlphaBranchRangeJosConvert
 * @package Jd\request
 */
class LdopAlphaBranchRangeJosConvert
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.branchRange.jos.Convert";
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
     * @param string $branchRangeListXml
     * 网点配送范围列表XML
     * Required: true
     * Example Value: 
     */
    private $branchRangeListXml;

    /**
     * @param string $branchRangeListXml
     * 网点配送范围列表XML
     * Example Value: 
     */
    public function setBranchRangeListXml($branchRangeListXml)
    {
        $this->branchRangeListXml             = $branchRangeListXml;
        $this->apiParas["branchRangeListXml"]  = $branchRangeListXml;
    }

    public function getBranchRangeListXml()
    {
        return $this->branchRangeListXml;
    }

}