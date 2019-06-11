<?php

namespca Lostinfo\JosOpenApi;

/**
 * 用户信息保存
 * 拍拍业务-拍拍业务相关接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=382&apiId=3056&apiName=jingdong.orderCompanyUserService.insertCompanyInfo
 * Class OrderCompanyUserServiceInsertCompanyInfo
 * @package Jd\request
 */
class OrderCompanyUserServiceInsertCompanyInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.orderCompanyUserService.insertCompanyInfo";
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

}