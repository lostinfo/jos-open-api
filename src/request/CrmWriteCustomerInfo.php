<?php

namespace JD\request;

/**
 * 会员isv链接写入（店铺会员专用）
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=2748&apiName=jingdong.crm.writeCustomerInfo
 * Class CrmWriteCustomerInfo
 * @package Jd\request
 */
class CrmWriteCustomerInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.writeCustomerInfo";
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
     * @param String $linkUrl
     * 会员isv链接
     * Required: true
     * Example Value: 
     */
    private $linkUrl;

    /**
     * @param String $linkUrl
     * 会员isv链接
     * Example Value: 
     */
    public function setLinkUrl($linkUrl)
    {
        $this->linkUrl             = $linkUrl;
        $this->apiParas["linkUrl"]  = $linkUrl;
    }

    public function getLinkUrl()
    {
        return $this->linkUrl;
    }

}