<?php

namespca Lostinfo\JosOpenApi;

/**
 * 委托代征计算费用接口
 * 商事创新API-B端企业与自然人之间的劳务采买涉及发票开具、发票核销以及企业向自然人发佣等服务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=472&apiId=3628&apiName=jingdong.ysdk.CalculateFeeJsfService.calculate
 * Class YsdkCalculateFeeJsfServiceCalculate
 * @package Jd\request
 */
class YsdkCalculateFeeJsfServiceCalculate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ysdk.CalculateFeeJsfService.calculate";
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
     * @param int $amount
     * 开票金额
     * Required: true
     * Example Value: 
     */
    private $amount;

    /**
     * @param int $amount
     * 开票金额
     * Example Value: 
     */
    public function setAmount($amount)
    {
        $this->amount             = $amount;
        $this->apiParas["amount"]  = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amountWay
     * 金额模式
     * Required: true
     * Example Value: 0
     */
    private $amountWay;

    /**
     * @param string $amountWay
     * 金额模式
     * Example Value: 0
     */
    public function setAmountWay($amountWay)
    {
        $this->amountWay             = $amountWay;
        $this->apiParas["amountWay"]  = $amountWay;
    }

    public function getAmountWay()
    {
        return $this->amountWay;
    }

    /**
     * @param string $appCode
     * 应用编码
     * Required: true
     * Example Value: SHIGE
     */
    private $appCode;

    /**
     * @param string $appCode
     * 应用编码
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