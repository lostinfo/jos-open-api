<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 网点同步接口
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=1711&apiName=jingdong.ldop.alpha.branch.jos.Convert
 * Class LdopAlphaBranchJosConvert
 * @package Jd\request
 */
class LdopAlphaBranchJosConvert
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.branch.jos.Convert";
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
     * @param string $branchListXml
     * 网点列表XML
     * Required: true
     * Example Value: 
     */
    private $branchListXml;

    /**
     * @param string $branchListXml
     * 网点列表XML
     * Example Value: 
     */
    public function setBranchListXml($branchListXml)
    {
        $this->branchListXml             = $branchListXml;
        $this->apiParas["branchListXml"]  = $branchListXml;
    }

    public function getBranchListXml()
    {
        return $this->branchListXml;
    }

}