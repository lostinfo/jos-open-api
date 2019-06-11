<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 签约结果回传接口
 * 快递管家API-第三方快递API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=218&apiId=1526&apiName=jingdong.ldop.alpha.provider.sign.approve
 * Class LdopAlphaProviderSignApprove
 * @package Jd\request
 */
class LdopAlphaProviderSignApprove
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.sign.approve";
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
     * @param string $requestId
     * 签约申请id
     * Required: true
     * Example Value: 
     */
    private $requestId;

    /**
     * @param string $requestId
     * 签约申请id
     * Example Value: 
     */
    public function setRequestId($requestId)
    {
        $this->requestId             = $requestId;
        $this->apiParas["requestId"]  = $requestId;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param bool $approveResult
     * 签约结果:true申请通过， false申请未通过
     * Required: true
     * Example Value: 
     */
    private $approveResult;

    /**
     * @param bool $approveResult
     * 签约结果:true申请通过， false申请未通过
     * Example Value: 
     */
    public function setApproveResult($approveResult)
    {
        $this->approveResult             = $approveResult;
        $this->apiParas["approveResult"]  = $approveResult;
    }

    public function getApproveResult()
    {
        return $this->approveResult;
    }

    /**
     * @param string $approveMessage
     * 签约描述
     * Required: false
     * Example Value: 
     */
    private $approveMessage;

    /**
     * @param string $approveMessage
     * 签约描述
     * Example Value: 
     */
    public function setApproveMessage($approveMessage)
    {
        $this->approveMessage             = $approveMessage;
        $this->apiParas["approveMessage"]  = $approveMessage;
    }

    public function getApproveMessage()
    {
        return $this->approveMessage;
    }

}