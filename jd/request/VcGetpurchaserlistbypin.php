<?php

namespace JD\request;

/**
 * 获取用户绑定的采购员列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1197&apiName=jingdong.vc.getpurchaserlistbypin
 * Class VcGetpurchaserlistbypin
 * @package Jd\request
 */
class VcGetpurchaserlistbypin
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.getpurchaserlistbypin";
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