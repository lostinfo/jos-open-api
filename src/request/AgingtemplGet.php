<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 商家时效模板查询接口
 * 阿尔法API-阿尔法系统
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=191&apiId=1474&apiName=jingdong.agingtempl.get
 * Class AgingtemplGet
 * @package Jd\request
 */
class AgingtemplGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.agingtempl.get";
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
     * @param string $source
     * 请求来源
     * Required: true
     * Example Value: 
     */
    private $source;

    /**
     * @param string $source
     * 请求来源
     * Example Value: 
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

}