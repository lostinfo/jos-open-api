<?php

namespca Lostinfo\JosOpenApi;

/**
 * 委托代征会员信息的查询会员审批状态接口
 * 商事创新API-B端企业与自然人之间的劳务采买涉及发票开具、发票核销以及企业向自然人发佣等服务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=472&apiId=3629&apiName=jingdong.ysdk.MemberApplyJsfService.queryMemberStatus
 * Class YsdkMemberApplyJsfServiceQueryMemberStatus
 * @package Jd\request
 */
class YsdkMemberApplyJsfServiceQueryMemberStatus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ysdk.MemberApplyJsfService.queryMemberStatus";
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
     * 请求ID
     * Required: true
     * Example Value: 150
     */
    private $requestId;

    /**
     * @param string $requestId
     * 请求ID
     * Example Value: 150
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
     * @param string $platformCode
     * 平台编码
     * Required: true
     * Example Value: SHIGE
     */
    private $platformCode;

    /**
     * @param string $platformCode
     * 平台编码
     * Example Value: SHIGE
     */
    public function setPlatformCode($platformCode)
    {
        $this->platformCode             = $platformCode;
        $this->apiParas["platformCode"]  = $platformCode;
    }

    public function getPlatformCode()
    {
        return $this->platformCode;
    }

}