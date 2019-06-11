<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 资源上传获取token
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=3573&apiName=jingdong.vc.library.getResouceUploadToken
 * Class VcLibraryGetResouceUploadToken
 * @package Jd\request
 */
class VcLibraryGetResouceUploadToken
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.library.getResouceUploadToken";
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