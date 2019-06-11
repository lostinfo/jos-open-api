<?php

namespca Lostinfo\JosOpenApi;

/**
 * 大头笔同步接口内部转换实现
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=1709&apiName=jingdong.ldop.alpha.bigShot.jos.Convert
 * Class LdopAlphaBigShotJosConvert
 * @package Jd\request
 */
class LdopAlphaBigShotJosConvert
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.bigShot.jos.Convert";
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
     * @param string $bigShotListXml
     * 大头笔列表XML
     * Required: true
     * Example Value: 
     */
    private $bigShotListXml;

    /**
     * @param string $bigShotListXml
     * 大头笔列表XML
     * Example Value: 
     */
    public function setBigShotListXml($bigShotListXml)
    {
        $this->bigShotListXml             = $bigShotListXml;
        $this->apiParas["bigShotListXml"]  = $bigShotListXml;
    }

    public function getBigShotListXml()
    {
        return $this->bigShotListXml;
    }

}