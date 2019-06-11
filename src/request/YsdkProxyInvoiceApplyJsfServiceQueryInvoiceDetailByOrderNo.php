<?php

namespace Lostinfo\JosOpenApi;

/**
 * 委托代征发票管理查询蓝票(包括电票与纸票）结果
 * 商事创新API-B端企业与自然人之间的劳务采买涉及发票开具、发票核销以及企业向自然人发佣等服务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=472&apiId=3603&apiName=jingdong.ysdk.ProxyInvoiceApplyJsfService.queryInvoiceDetailByOrderNo
 * Class YsdkProxyInvoiceApplyJsfServiceQueryInvoiceDetailByOrderNo
 * @package Jd\request
 */
class YsdkProxyInvoiceApplyJsfServiceQueryInvoiceDetailByOrderNo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ysdk.ProxyInvoiceApplyJsfService.queryInvoiceDetailByOrderNo";
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
     * @param string $orderNo
     * 订单编号
     * Required: true
     * Example Value: JDYS20190402492290
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 订单编号
     * Example Value: JDYS20190402492290
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["orderNo"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
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