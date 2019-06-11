<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询.聚效.用户代权限媒体列表
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=886&apiName=jingdong.dsp.admedia.permissionmedia.get
 * Class DspAdmediaPermissionmediaGet
 * @package Jd\request
 */
class DspAdmediaPermissionmediaGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.admedia.permissionmedia.get";
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