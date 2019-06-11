<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询会员折扣信息
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3288&apiName=jingdong.pop.crm.getMemeberDiscount
 * Class PopCrmGetMemeberDiscount
 * @package Jd\request
 */
class PopCrmGetMemeberDiscount
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.getMemeberDiscount";
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