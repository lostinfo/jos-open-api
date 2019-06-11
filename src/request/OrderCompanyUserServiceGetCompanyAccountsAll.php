<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取企业用户全部账户
 * 拍拍业务-拍拍业务相关接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=382&apiId=3047&apiName=jingdong.orderCompanyUserService.getCompanyAccountsAll
 * Class OrderCompanyUserServiceGetCompanyAccountsAll
 * @package Jd\request
 */
class OrderCompanyUserServiceGetCompanyAccountsAll
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.orderCompanyUserService.getCompanyAccountsAll";
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