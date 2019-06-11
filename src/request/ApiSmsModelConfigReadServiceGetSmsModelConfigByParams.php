<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询短信模版列表
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=3786&apiName=jingdong.api.SmsModelConfigReadService.getSmsModelConfigByParams
 * Class ApiSmsModelConfigReadServiceGetSmsModelConfigByParams
 * @package Jd\request
 */
class ApiSmsModelConfigReadServiceGetSmsModelConfigByParams
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.api.SmsModelConfigReadService.getSmsModelConfigByParams";
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
     * @param int $pageNumber
     * 页码
     * Required: true
     * Example Value: 1
     */
    private $pageNumber;

    /**
     * @param int $pageNumber
     * 页码
     * Example Value: 1
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber             = $pageNumber;
        $this->apiParas["pageNumber"]  = $pageNumber;
    }

    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param int $serveType
     * 服务类型:1.营销类、2.提醒类
     * Required: true
     * Example Value: 2
     */
    private $serveType;

    /**
     * @param int $serveType
     * 服务类型:1.营销类、2.提醒类
     * Example Value: 2
     */
    public function setServeType($serveType)
    {
        $this->serveType             = $serveType;
        $this->apiParas["serveType"]  = $serveType;
    }

    public function getServeType()
    {
        return $this->serveType;
    }

    /**
     * @param int $businessType
     * 业务类型:1.会员通、2.商家系统、3.JMA、4.Jzone
     * Required: true
     * Example Value: 3
     */
    private $businessType;

    /**
     * @param int $businessType
     * 业务类型:1.会员通、2.商家系统、3.JMA、4.Jzone
     * Example Value: 3
     */
    public function setBusinessType($businessType)
    {
        $this->businessType             = $businessType;
        $this->apiParas["businessType"]  = $businessType;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

}