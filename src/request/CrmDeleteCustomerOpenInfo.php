<?php

namespca Lostinfo\JosOpenApi;

/**
 * 会员isv链接删除（店铺会员专用）
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=2756&apiName=jingdong.crm.deleteCustomerOpenInfo
 * Class CrmDeleteCustomerOpenInfo
 * @package Jd\request
 */
class CrmDeleteCustomerOpenInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.deleteCustomerOpenInfo";
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