<?php

namespca Lostinfo\JosOpenApi;

/**
 * 用户鉴权信息
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1849&apiName=jingdong.jcloud.wms.center.user.getLoginInfos
 * Class JcloudWmsCenterUserGetLoginInfos
 * @package Jd\request
 */
class JcloudWmsCenterUserGetLoginInfos
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.center.user.getLoginInfos";
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
     * @param string $mobile
     * 手机
     * Required: true
     * Example Value: 
     */
    private $mobile;

    /**
     * @param string $mobile
     * 手机
     * Example Value: 
     */
    public function setMobile($mobile)
    {
        $this->mobile             = $mobile;
        $this->apiParas["mobile"]  = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

}