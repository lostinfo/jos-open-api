<?php

namespace JD\request;

/**
 * 待处理退款单数查询
 * 退款API-提供退款审核列表、退款审核详情功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=71&apiId=924&apiName=jingdong.pop.afs.soa.refundapply.getWaitRefundNum
 * Class PopAfsSoaRefundapplyGetWaitRefundNum
 * @package Jd\request
 */
class PopAfsSoaRefundapplyGetWaitRefundNum
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.afs.soa.refundapply.getWaitRefundNum";
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