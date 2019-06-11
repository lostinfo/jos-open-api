<?php

namespace JD\request;

/**
 * 委托代征确认开票接口
 * 商事创新API-B端企业与自然人之间的劳务采买涉及发票开具、发票核销以及企业向自然人发佣等服务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=472&apiId=3626&apiName=jingdong.ysdk.ProxyInvoiceApplyJsfService.confirmInvoice
 * Class YsdkProxyInvoiceApplyJsfServiceConfirmInvoice
 * @package Jd\request
 */
class YsdkProxyInvoiceApplyJsfServiceConfirmInvoice
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ysdk.ProxyInvoiceApplyJsfService.confirmInvoice";
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
     * @param String $orderNo
     * 订单编号
     * Required: true
     * Example Value: JDYS20190402977094
     */
    private $orderNo;

    /**
     * @param String $orderNo
     * 订单编号
     * Example Value: JDYS20190402977094
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
     * @param Number $flag
     * 开票确认标识
     * Required: true
     * Example Value: 1
     */
    private $flag;

    /**
     * @param Number $flag
     * 开票确认标识
     * Example Value: 1
     */
    public function setFlag($flag)
    {
        $this->flag             = $flag;
        $this->apiParas["flag"]  = $flag;
    }

    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param String $appCode
     * 平台编号
     * Required: true
     * Example Value: SHIGE
     */
    private $appCode;

    /**
     * @param String $appCode
     * 平台编号
     * Example Value: SHIGE
     */
    public function setAppCode($appCode)
    {
        $this->appCode             = $appCode;
        $this->apiParas["appCode"]  = $appCode;
    }

    public function getAppCode()
    {
        return $this->appCode;
    }

}