<?php

namespace JD\request;

/**
 * 根据商家ID查询当前的经营主体信息
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=2787&apiName=jingdong.findBusinessByVenderId
 * Class FindBusinessByVenderId
 * @package Jd\request
 */
class FindBusinessByVenderId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.findBusinessByVenderId";
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