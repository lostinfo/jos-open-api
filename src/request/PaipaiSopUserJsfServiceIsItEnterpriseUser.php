<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据jdpin 判断用户是否为金融企业用户
 * 拍拍业务-拍拍业务相关接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=382&apiId=3278&apiName=jingdong.paipai.sopUserJsfService.isItEnterpriseUser
 * Class PaipaiSopUserJsfServiceIsItEnterpriseUser
 * @package Jd\request
 */
class PaipaiSopUserJsfServiceIsItEnterpriseUser
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.paipai.sopUserJsfService.isItEnterpriseUser";
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
     * @param string $josOpenId
     * 京东用户openId
     * Required: true
     * Example Value: lingrui1206
     */
    private $josOpenId;

    /**
     * @param string $josOpenId
     * 京东用户openId
     * Example Value: lingrui1206
     */
    public function setJosOpenId($josOpenId)
    {
        $this->josOpenId             = $josOpenId;
        $this->apiParas["josOpenId"]  = $josOpenId;
    }

    public function getJosOpenId()
    {
        return $this->josOpenId;
    }

}