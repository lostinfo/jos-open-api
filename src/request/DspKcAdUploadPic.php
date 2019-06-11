<?php

namespca Lostinfo\JosOpenApi;

/**
 * 上传图片
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1417&apiName=jingdong.dsp.kc.ad.uploadPic
 * Class DspKcAdUploadPic
 * @package Jd\request
 */
class DspKcAdUploadPic
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.ad.uploadPic";
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
     * @param byte[] $picFile
     * 图片
     * Required: true
     * Example Value: 
     */
    private $picFile;

    /**
     * @param byte[] $picFile
     * 图片
     * Example Value: 
     */
    public function setPicFile($picFile)
    {
        $this->picFile             = $picFile;
        $this->apiParas["picFile"]  = $picFile;
    }

    public function getPicFile()
    {
        return $this->picFile;
    }

}