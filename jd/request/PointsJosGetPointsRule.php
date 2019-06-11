<?php

namespace JD\request;

/**
 * 查询商家积分规则
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3286&apiName=jingdong.points.jos.getPointsRule
 * Class PointsJosGetPointsRule
 * @package Jd\request
 */
class PointsJosGetPointsRule
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.points.jos.getPointsRule";
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