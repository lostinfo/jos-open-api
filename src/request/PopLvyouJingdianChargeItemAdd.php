<?php

namespace JD\request;

/**
 * JOS接口添加收费项目信息
 * 景点门票API-POP虚拟业务,开放景点门票业务API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=131&apiId=780&apiName=jingdong.pop.lvyou.jingdian.charge.item.add
 * Class PopLvyouJingdianChargeItemAdd
 * @package Jd\request
 */
class PopLvyouJingdianChargeItemAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.lvyou.jingdian.charge.item.add";
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
     * @param Number $jingdianId
     * 景点信息ID
     * Required: true
     * Example Value: 
     */
    private $jingdianId;

    /**
     * @param Number $jingdianId
     * 景点信息ID
     * Example Value: 
     */
    public function setJingdianId($jingdianId)
    {
        $this->jingdianId             = $jingdianId;
        $this->apiParas["jingdianId"]  = $jingdianId;
    }

    public function getJingdianId()
    {
        return $this->jingdianId;
    }

    /**
     * @param String $chargeItemName
     * 收费套装-收费项目名称
     * Required: true
     * Example Value: 
     */
    private $chargeItemName;

    /**
     * @param String $chargeItemName
     * 收费套装-收费项目名称
     * Example Value: 
     */
    public function setChargeItemName($chargeItemName)
    {
        $this->chargeItemName             = $chargeItemName;
        $this->apiParas["chargeItemName"]  = $chargeItemName;
    }

    public function getChargeItemName()
    {
        return $this->chargeItemName;
    }

    /**
     * @param String $ticketKindName
     * 收费套装-门票种类名称
     * Required: true
     * Example Value: 
     */
    private $ticketKindName;

    /**
     * @param String $ticketKindName
     * 收费套装-门票种类名称
     * Example Value: 
     */
    public function setTicketKindName($ticketKindName)
    {
        $this->ticketKindName             = $ticketKindName;
        $this->apiParas["ticketKindName"]  = $ticketKindName;
    }

    public function getTicketKindName()
    {
        return $this->ticketKindName;
    }

    /**
     * @param Number $marketPrice
     * 票面价(市场价)。单位：分
     * Required: true
     * Example Value: 
     */
    private $marketPrice;

    /**
     * @param Number $marketPrice
     * 票面价(市场价)。单位：分
     * Example Value: 
     */
    public function setMarketPrice($marketPrice)
    {
        $this->marketPrice             = $marketPrice;
        $this->apiParas["marketPrice"]  = $marketPrice;
    }

    public function getMarketPrice()
    {
        return $this->marketPrice;
    }

}