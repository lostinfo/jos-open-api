<?php

namespace JD\request;

/**
 * 委托代征开票冲红接口
 * 商事创新API-B端企业与自然人之间的劳务采买涉及发票开具、发票核销以及企业向自然人发佣等服务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=472&apiId=3605&apiName=jingdong.ysdk.ProxyInvoiceApplyJsfService.redInvoice
 * Class YsdkProxyInvoiceApplyJsfServiceRedInvoice
 * @package Jd\request
 */
class YsdkProxyInvoiceApplyJsfServiceRedInvoice
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ysdk.ProxyInvoiceApplyJsfService.redInvoice";
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
     * @param String $remark
     * 备注
     * Required: true
     * Example Value: 冲红的原因
     */
    private $remark;

    /**
     * @param String $remark
     * 备注
     * Example Value: 冲红的原因
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param String $appCode
     * 平台编码
     * Required: true
     * Example Value: SHIGE
     */
    private $appCode;

    /**
     * @param String $appCode
     * 平台编码
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