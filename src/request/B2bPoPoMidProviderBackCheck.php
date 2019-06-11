<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 采购单反查
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3114&apiName=jingdong.b2b.po.PoMidProvider.backCheck
 * Class B2bPoPoMidProviderBackCheck
 * @package Jd\request
 */
class B2bPoPoMidProviderBackCheck
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.po.PoMidProvider.backCheck";
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
     * @param string $thirdPoId
     * 第三方采购单号
     * Required: true
     * Example Value: 
     */
    private $thirdPoId;

    /**
     * @param string $thirdPoId
     * 第三方采购单号
     * Example Value: 
     */
    public function setThirdPoId($thirdPoId)
    {
        $this->thirdPoId             = $thirdPoId;
        $this->apiParas["thirdPoId"]  = $thirdPoId;
    }

    public function getThirdPoId()
    {
        return $this->thirdPoId;
    }

    /**
     * @param string[] $tagName
     * 需要获取的数据
     * Required: true
     * Example Value: 
     */
    private $tagName;

    /**
     * @param string[] $tagName
     * 需要获取的数据
     * Example Value: 
     */
    public function setTagName($tagName)
    {
        $this->tagName             = $tagName;
        $this->apiParas["tagName"]  = $tagName;
    }

    public function getTagName()
    {
        return $this->tagName;
    }

}