<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询采购单详情
 * 生鲜加工中心API-生鲜接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=257&apiId=2197&apiName=jingdong.com.xstore.multichannel.service.soa.skupincontrast.OutPurchaseService.findPurchaseByID
 * Class ComXstoreMultichannelServiceSoaSkupincontrastOutPurchaseServiceFindPurchaseByID
 * @package Jd\request
 */
class ComXstoreMultichannelServiceSoaSkupincontrastOutPurchaseServiceFindPurchaseByID
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.com.xstore.multichannel.service.soa.skupincontrast.OutPurchaseService.findPurchaseByID";
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
     * @param string $paramStrin
     * 未定义
     * Required: true
     * Example Value: 
     */
    private $paramStrin;

    /**
     * @param string $paramStrin
     * 未定义
     * Example Value: 
     */
    public function setParamStrin($paramStrin)
    {
        $this->paramStrin             = $paramStrin;
        $this->apiParas["paramStrin"]  = $paramStrin;
    }

    public function getParamStrin()
    {
        return $this->paramStrin;
    }

    /**
     * @param string $paramStrin1
     * 未定义
     * Required: true
     * Example Value: 
     */
    private $paramStrin1;

    /**
     * @param string $paramStrin1
     * 未定义
     * Example Value: 
     */
    public function setParamStrin1($paramStrin1)
    {
        $this->paramStrin1             = $paramStrin1;
        $this->apiParas["paramStrin1"]  = $paramStrin1;
    }

    public function getParamStrin1()
    {
        return $this->paramStrin1;
    }

}