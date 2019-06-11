<?php

namespca Lostinfo\JosOpenApi;

/**
 * 修改或新增房源经纪人关系数据
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2757&apiName=jingdong.ers.fang.addOrUpdateHouseResourceBroker
 * Class ErsFangAddOrUpdateHouseResourceBroker
 * @package Jd\request
 */
class ErsFangAddOrUpdateHouseResourceBroker
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateHouseResourceBroker";
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
     * @param int $brokerId
     * 来源经纪人id
     * Required: true
     * Example Value: 
     */
    private $brokerId;

    /**
     * @param int $brokerId
     * 来源经纪人id
     * Example Value: 
     */
    public function setBrokerId($brokerId)
    {
        $this->brokerId             = $brokerId;
        $this->apiParas["brokerId"]  = $brokerId;
    }

    public function getBrokerId()
    {
        return $this->brokerId;
    }

    /**
     * @param int $houseResourceId
     * 来源房源id
     * Required: true
     * Example Value: 
     */
    private $houseResourceId;

    /**
     * @param int $houseResourceId
     * 来源房源id
     * Example Value: 
     */
    public function setHouseResourceId($houseResourceId)
    {
        $this->houseResourceId             = $houseResourceId;
        $this->apiParas["houseResourceId"]  = $houseResourceId;
    }

    public function getHouseResourceId()
    {
        return $this->houseResourceId;
    }

    /**
     * @param int $quotedPrice
     * 经纪人报价
     * Required: true
     * Example Value: 
     */
    private $quotedPrice;

    /**
     * @param int $quotedPrice
     * 经纪人报价
     * Example Value: 
     */
    public function setQuotedPrice($quotedPrice)
    {
        $this->quotedPrice             = $quotedPrice;
        $this->apiParas["quotedPrice"]  = $quotedPrice;
    }

    public function getQuotedPrice()
    {
        return $this->quotedPrice;
    }

    /**
     * @param  $recommend
     * 推荐经纪人（0 否， 1 是）
     * Required: true
     * Example Value: 
     */
    private $recommend;

    /**
     * @param  $recommend
     * 推荐经纪人（0 否， 1 是）
     * Example Value: 
     */
    public function setRecommend($recommend)
    {
        $this->recommend             = $recommend;
        $this->apiParas["recommend"]  = $recommend;
    }

    public function getRecommend()
    {
        return $this->recommend;
    }

    /**
     * @param  $orderNum
     * 顺序（用以经纪人列表展示顺序）
     * Required: false
     * Example Value: 
     */
    private $orderNum;

    /**
     * @param  $orderNum
     * 顺序（用以经纪人列表展示顺序）
     * Example Value: 
     */
    public function setOrderNum($orderNum)
    {
        $this->orderNum             = $orderNum;
        $this->apiParas["orderNum"]  = $orderNum;
    }

    public function getOrderNum()
    {
        return $this->orderNum;
    }

    /**
     * @param int $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int $cityCode
     * 城市code
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["cityCode"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param int $sourceId
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param int $sourceId
     * 来源主键
     * Example Value: 
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId             = $sourceId;
        $this->apiParas["sourceId"]  = $sourceId;
    }

    public function getSourceId()
    {
        return $this->sourceId;
    }

}