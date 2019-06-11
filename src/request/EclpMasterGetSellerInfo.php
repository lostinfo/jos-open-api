<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 商家店铺库房信息查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3552&apiName=jingdong.eclp.master.getSellerInfo
 * Class EclpMasterGetSellerInfo
 * @package Jd\request
 */
class EclpMasterGetSellerInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.getSellerInfo";
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