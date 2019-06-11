<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 图片上传 最多10条
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2648&apiName=jingdong.ers.fang.uploadImg
 * Class ErsFangUploadImg
 * @package Jd\request
 */
class ErsFangUploadImg
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.uploadImg";
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
     * @param string $urls
     * 图片url(多个以逗号隔开)
     * Required: true
     * Example Value: 
     */
    private $urls;

    /**
     * @param string $urls
     * 图片url(多个以逗号隔开)
     * Example Value: 
     */
    public function setUrls($urls)
    {
        $this->urls             = $urls;
        $this->apiParas["urls"]  = $urls;
    }

    public function getUrls()
    {
        return $this->urls;
    }

}