<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 获取履约决策信息
 * 全渠道开放平台API-全渠道开放平台API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=244&apiId=2309&apiName=jingdong.omnichannel.order.locateinfo.search
 * Class OmnichannelOrderLocateinfoSearch
 * @package Jd\request
 */
class OmnichannelOrderLocateinfoSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.omnichannel.order.locateinfo.search";
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
     * @param int[] $orderIdListJsonStr
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderIdListJsonStr;

    /**
     * @param int[] $orderIdListJsonStr
     * 订单号
     * Example Value: 
     */
    public function setOrderIdListJsonStr($orderIdListJsonStr)
    {
        $this->orderIdListJsonStr             = $orderIdListJsonStr;
        $this->apiParas["orderIdListJsonStr"]  = $orderIdListJsonStr;
    }

    public function getOrderIdListJsonStr()
    {
        return $this->orderIdListJsonStr;
    }

}