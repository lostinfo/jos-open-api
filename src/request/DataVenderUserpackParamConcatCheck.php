<?php

namespca Lostinfo\JosOpenApi;

/**
 * 检验页面埋点(用于精准营销短信)
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3231&apiName=jingdong.data.vender.userpack.param.concat.check
 * Class DataVenderUserpackParamConcatCheck
 * @package Jd\request
 */
class DataVenderUserpackParamConcatCheck
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.userpack.param.concat.check";
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
     * @param string $webLinks
     * 网页url
     * Required: true
     * Example Value: http:www.xxx.com
     */
    private $webLinks;

    /**
     * @param string $webLinks
     * 网页url
     * Example Value: http:www.xxx.com
     */
    public function setWebLinks($webLinks)
    {
        $this->webLinks             = $webLinks;
        $this->apiParas["web_links"]  = $webLinks;
    }

    public function getWebLinks()
    {
        return $this->webLinks;
    }

}