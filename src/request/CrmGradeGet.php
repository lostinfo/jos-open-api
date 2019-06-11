<?php

namespca Lostinfo\JosOpenApi;

/**
 * 会员等级信息获取
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=304&apiName=jingdong.crm.grade.get
 * Class CrmGradeGet
 * @package Jd\request
 */
class CrmGradeGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.grade.get";
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