<?php

namespace JD\request;

/**
 * 根据Id查询退款审核单
 * 退款API-提供退款审核列表、退款审核详情功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=71&apiId=922&apiName=jingdong.pop.afs.soa.refundapply.queryById
 * Class PopAfsSoaRefundapplyQueryById
 * @package Jd\request
 */
class PopAfsSoaRefundapplyQueryById
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.afs.soa.refundapply.queryById";
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

    /**
     * @param Number $id
     * 退款单id
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param Number $id
     * 退款单id
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}