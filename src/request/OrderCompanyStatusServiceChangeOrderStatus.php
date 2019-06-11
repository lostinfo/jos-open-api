<?php

namespca Lostinfo\JosOpenApi;

/**
 * 企业回收改变订单状态
 * 拍拍业务-拍拍业务相关接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=382&apiId=3057&apiName=jingdong.orderCompanyStatusService.changeOrderStatus
 * Class OrderCompanyStatusServiceChangeOrderStatus
 * @package Jd\request
 */
class OrderCompanyStatusServiceChangeOrderStatus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.orderCompanyStatusService.changeOrderStatus";
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
     * @param int $txPrice
     * 最终成交价格,订单完成时候必传
     * Required: false
     * Example Value: 2322
     */
    private $txPrice;

    /**
     * @param int $txPrice
     * 最终成交价格,订单完成时候必传
     * Example Value: 2322
     */
    public function setTxPrice($txPrice)
    {
        $this->txPrice             = $txPrice;
        $this->apiParas["txPrice"]  = $txPrice;
    }

    public function getTxPrice()
    {
        return $this->txPrice;
    }

    /**
     * @param string $appOrderId
     * 商家订单id
     * Required: true
     * Example Value: 2323
     */
    private $appOrderId;

    /**
     * @param string $appOrderId
     * 商家订单id
     * Example Value: 2323
     */
    public function setAppOrderId($appOrderId)
    {
        $this->appOrderId             = $appOrderId;
        $this->apiParas["appOrderId"]  = $appOrderId;
    }

    public function getAppOrderId()
    {
        return $this->appOrderId;
    }

    /**
     * @param int $currentStatus
     * 同步订单状态
     * Required: true
     * Example Value: 2
     */
    private $currentStatus;

    /**
     * @param int $currentStatus
     * 同步订单状态
     * Example Value: 2
     */
    public function setCurrentStatus($currentStatus)
    {
        $this->currentStatus             = $currentStatus;
        $this->apiParas["currentStatus"]  = $currentStatus;
    }

    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * @param string $productInfos
     * 产品信息json
     * Required: false
     * Example Value: {}
     */
    private $productInfos;

    /**
     * @param string $productInfos
     * 产品信息json
     * Example Value: {}
     */
    public function setProductInfos($productInfos)
    {
        $this->productInfos             = $productInfos;
        $this->apiParas["productInfos"]  = $productInfos;
    }

    public function getProductInfos()
    {
        return $this->productInfos;
    }

    /**
     * @param string $description
     * 描述
     * Required: false
     * Example Value: 修改状态
     */
    private $description;

    /**
     * @param string $description
     * 描述
     * Example Value: 修改状态
     */
    public function setDescription($description)
    {
        $this->description             = $description;
        $this->apiParas["description"]  = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param int $secondPrice
     * 报价价格,报价确认必传
     * Required: false
     * Example Value: 234
     */
    private $secondPrice;

    /**
     * @param int $secondPrice
     * 报价价格,报价确认必传
     * Example Value: 234
     */
    public function setSecondPrice($secondPrice)
    {
        $this->secondPrice             = $secondPrice;
        $this->apiParas["secondPrice"]  = $secondPrice;
    }

    public function getSecondPrice()
    {
        return $this->secondPrice;
    }

    /**
     * @param int $firstPrice
     * 第一次询价价格
     * Required: false
     * Example Value: 345
     */
    private $firstPrice;

    /**
     * @param int $firstPrice
     * 第一次询价价格
     * Example Value: 345
     */
    public function setFirstPrice($firstPrice)
    {
        $this->firstPrice             = $firstPrice;
        $this->apiParas["firstPrice"]  = $firstPrice;
    }

    public function getFirstPrice()
    {
        return $this->firstPrice;
    }

}