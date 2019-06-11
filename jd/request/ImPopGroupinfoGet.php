<?php

namespace JD\request;

/**
 * 查询客服组信息
 * 咚咚API-京东咚咚系统API，包含：查询信息、客服日评价、客服登陆日志、时长等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=53&apiId=137&apiName=jingdong.im.pop.groupinfo.get
 * Class ImPopGroupinfoGet
 * @package Jd\request
 */
class ImPopGroupinfoGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.im.pop.groupinfo.get";
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