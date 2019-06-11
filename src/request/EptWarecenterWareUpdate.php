<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 修改商品
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=907&apiName=jingdong.ept.warecenter.ware.update
 * Class EptWarecenterWareUpdate
 * @package Jd\request
 */
class EptWarecenterWareUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.warecenter.ware.update";
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
     * @param int $wareId
     * 需要修改的商品id
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param int $wareId
     * 需要修改的商品id
     * Example Value: 
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param string $title
     * 商品标题,长度小于128字符
     * Required: false
     * Example Value: 
     */
    private $title;

    /**
     * @param string $title
     * 商品标题,长度小于128字符
     * Example Value: 
     */
    public function setTitle($title)
    {
        $this->title             = $title;
        $this->apiParas["title"]  = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $itemNum
     * 商家商品货号,长度小于30字符
     * Required: false
     * Example Value: 
     */
    private $itemNum;

    /**
     * @param string $itemNum
     * 商家商品货号,长度小于30字符
     * Example Value: 
     */
    public function setItemNum($itemNum)
    {
        $this->itemNum             = $itemNum;
        $this->apiParas["itemNum"]  = $itemNum;
    }

    public function getItemNum()
    {
        return $this->itemNum;
    }

    /**
     * @param int $transportId
     * 商品的运费模板id
     * Required: false
     * Example Value: 
     */
    private $transportId;

    /**
     * @param int $transportId
     * 商品的运费模板id
     * Example Value: 
     */
    public function setTransportId($transportId)
    {
        $this->transportId             = $transportId;
        $this->apiParas["transportId"]  = $transportId;
    }

    public function getTransportId()
    {
        return $this->transportId;
    }

    /**
     * @param string $attributes
     * 商品属性和属性值id
     * Required: false
     * Example Value: 
     */
    private $attributes;

    /**
     * @param string $attributes
     * 商品属性和属性值id
     * Example Value: 
     */
    public function setAttributes($attributes)
    {
        $this->attributes             = $attributes;
        $this->apiParas["attributes"]  = $attributes;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param byte[] $imgByte
     * 商品主图
     * Required: false
     * Example Value: 
     */
    private $imgByte;

    /**
     * @param byte[] $imgByte
     * 商品主图
     * Example Value: 
     */
    public function setImgByte($imgByte)
    {
        $this->imgByte             = $imgByte;
        $this->apiParas["imgByte"]  = $imgByte;
    }

    public function getImgByte()
    {
        return $this->imgByte;
    }

    /**
     * @param int $recommendTpid
     * 商品的关联推荐模板id
     * Required: false
     * Example Value: 
     */
    private $recommendTpid;

    /**
     * @param int $recommendTpid
     * 商品的关联推荐模板id
     * Example Value: 
     */
    public function setRecommendTpid($recommendTpid)
    {
        $this->recommendTpid             = $recommendTpid;
        $this->apiParas["recommendTpid"]  = $recommendTpid;
    }

    public function getRecommendTpid()
    {
        return $this->recommendTpid;
    }

    /**
     * @param int $customTpid
     * 商品的自定义属性模板id
     * Required: false
     * Example Value: 
     */
    private $customTpid;

    /**
     * @param int $customTpid
     * 商品的自定义属性模板id
     * Example Value: 
     */
    public function setCustomTpid($customTpid)
    {
        $this->customTpid             = $customTpid;
        $this->apiParas["customTpid"]  = $customTpid;
    }

    public function getCustomTpid()
    {
        return $this->customTpid;
    }

    /**
     * @param int $brandId
     * 商品品牌id，必须是EPT已授权给商家的品牌
     * Required: false
     * Example Value: 
     */
    private $brandId;

    /**
     * @param int $brandId
     * 商品品牌id，必须是EPT已授权给商家的品牌
     * Example Value: 
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brandId"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param int $deliveryDays
     * 发货期，1~30天的范围
     * Required: false
     * Example Value: 
     */
    private $deliveryDays;

    /**
     * @param int $deliveryDays
     * 发货期，1~30天的范围
     * Example Value: 
     */
    public function setDeliveryDays($deliveryDays)
    {
        $this->deliveryDays             = $deliveryDays;
        $this->apiParas["deliveryDays"]  = $deliveryDays;
    }

    public function getDeliveryDays()
    {
        return $this->deliveryDays;
    }

    /**
     * @param string $keywords
     * 商品关键词，由逗号分隔，最多3个
     * Required: false
     * Example Value: 
     */
    private $keywords;

    /**
     * @param string $keywords
     * 商品关键词，由逗号分隔，最多3个
     * Example Value: 
     */
    public function setKeywords($keywords)
    {
        $this->keywords             = $keywords;
        $this->apiParas["keywords"]  = $keywords;
    }

    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param string $description
     * 商品描述，长度小于100000字符
     * Required: false
     * Example Value: 
     */
    private $description;

    /**
     * @param string $description
     * 商品描述，长度小于100000字符
     * Example Value: 
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
     * @param string $packInfo
     * 包装清单信息，长度小于300字符
     * Required: false
     * Example Value: 
     */
    private $packInfo;

    /**
     * @param string $packInfo
     * 包装清单信息，长度小于300字符
     * Example Value: 
     */
    public function setPackInfo($packInfo)
    {
        $this->packInfo             = $packInfo;
        $this->apiParas["packInfo"]  = $packInfo;
    }

    public function getPackInfo()
    {
        return $this->packInfo;
    }

    /**
     * @param int $netWeight
     * 商品净重，单位:kg
     * Required: false
     * Example Value: 
     */
    private $netWeight;

    /**
     * @param int $netWeight
     * 商品净重，单位:kg
     * Example Value: 
     */
    public function setNetWeight($netWeight)
    {
        $this->netWeight             = $netWeight;
        $this->apiParas["netWeight"]  = $netWeight;
    }

    public function getNetWeight()
    {
        return $this->netWeight;
    }

    /**
     * @param int $weight
     * 商品毛重，单位:kg
     * Required: false
     * Example Value: 
     */
    private $weight;

    /**
     * @param int $weight
     * 商品毛重，单位:kg
     * Example Value: 
     */
    public function setWeight($weight)
    {
        $this->weight             = $weight;
        $this->apiParas["weight"]  = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $packLong
     * 商品包装长度，单位:cm
     * Required: false
     * Example Value: 
     */
    private $packLong;

    /**
     * @param int $packLong
     * 商品包装长度，单位:cm
     * Example Value: 
     */
    public function setPackLong($packLong)
    {
        $this->packLong             = $packLong;
        $this->apiParas["packLong"]  = $packLong;
    }

    public function getPackLong()
    {
        return $this->packLong;
    }

    /**
     * @param int $packWide
     * 商品包装宽度，单位:cm
     * Required: false
     * Example Value: 
     */
    private $packWide;

    /**
     * @param int $packWide
     * 商品包装宽度，单位:cm
     * Example Value: 
     */
    public function setPackWide($packWide)
    {
        $this->packWide             = $packWide;
        $this->apiParas["packWide"]  = $packWide;
    }

    public function getPackWide()
    {
        return $this->packWide;
    }

    /**
     * @param int $packHeight
     * 商品包装高度，单位:cm
     * Required: false
     * Example Value: 
     */
    private $packHeight;

    /**
     * @param int $packHeight
     * 商品包装高度，单位:cm
     * Example Value: 
     */
    public function setPackHeight($packHeight)
    {
        $this->packHeight             = $packHeight;
        $this->apiParas["packHeight"]  = $packHeight;
    }

    public function getPackHeight()
    {
        return $this->packHeight;
    }

    /**
     * @param string $upc
     * 商品sku的upc编码,长度小于50字符
     * Required: false
     * Example Value: 
     */
    private $upc;

    /**
     * @param string $upc
     * 商品sku的upc编码,长度小于50字符
     * Example Value: 
     */
    public function setUpc($upc)
    {
        $this->upc             = $upc;
        $this->apiParas["upc"]  = $upc;
    }

    public function getUpc()
    {
        return $this->upc;
    }

}