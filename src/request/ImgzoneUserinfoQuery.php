<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询图片空间用户信息
 * 图片空间API-京东图片空间系统API 可实现图片的增删改查等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=61&apiId=253&apiName=jingdong.imgzone.userinfo.query
 * Class ImgzoneUserinfoQuery
 * @package Jd\request
 */
class ImgzoneUserinfoQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.imgzone.userinfo.query";
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