<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据指定条件(分页)查询商家创建的优惠券
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=1809&apiName=jingdong.seller.coupon.read.getCouponList
 * Class SellerCouponReadGetCouponList
 * @package Jd\request
 */
class SellerCouponReadGetCouponList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.coupon.read.getCouponList";
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
     * @param string $ip
     * 调用方IP
     * Required: true
     * Example Value: 
     */
    private $ip;

    /**
     * @param string $ip
     * 调用方IP
     * Example Value: 
     */
    public function setIp($ip)
    {
        $this->ip             = $ip;
        $this->apiParas["ip"]  = $ip;
    }

    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $port
     * 调用方端口
     * Required: true
     * Example Value: 
     */
    private $port;

    /**
     * @param string $port
     * 调用方端口
     * Example Value: 
     */
    public function setPort($port)
    {
        $this->port             = $port;
        $this->apiParas["port"]  = $port;
    }

    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param int $couponId
     * 优惠券编号
     * Required: false
     * Example Value: 
     */
    private $couponId;

    /**
     * @param int $couponId
     * 优惠券编号
     * Example Value: 
     */
    public function setCouponId($couponId)
    {
        $this->couponId             = $couponId;
        $this->apiParas["couponId"]  = $couponId;
    }

    public function getCouponId()
    {
        return $this->couponId;
    }

    /**
     * @param int $type
     * 优惠券类型 0京券 1东券
     * Required: false
     * Example Value: 
     */
    private $type;

    /**
     * @param int $type
     * 优惠券类型 0京券 1东券
     * Example Value: 
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $grantType
     * 发放类型 1促销绑定 2推送 3免费领取 4京豆换券 5互动平台
     * Required: false
     * Example Value: 
     */
    private $grantType;

    /**
     * @param int $grantType
     * 发放类型 1促销绑定 2推送 3免费领取 4京豆换券 5互动平台
     * Example Value: 
     */
    public function setGrantType($grantType)
    {
        $this->grantType             = $grantType;
        $this->apiParas["grantType"]  = $grantType;
    }

    public function getGrantType()
    {
        return $this->grantType;
    }

    /**
     * @param int $bindType
     * 绑定类型 1全店参加 2指定sku参加
     * Required: false
     * Example Value: 
     */
    private $bindType;

    /**
     * @param int $bindType
     * 绑定类型 1全店参加 2指定sku参加
     * Example Value: 
     */
    public function setBindType($bindType)
    {
        $this->bindType             = $bindType;
        $this->apiParas["bindType"]  = $bindType;
    }

    public function getBindType()
    {
        return $this->bindType;
    }

    /**
     * @param int $grantWay
     * 推广方式 1卖家发放 2买家领取
     * Required: false
     * Example Value: 
     */
    private $grantWay;

    /**
     * @param int $grantWay
     * 推广方式 1卖家发放 2买家领取
     * Example Value: 
     */
    public function setGrantWay($grantWay)
    {
        $this->grantWay             = $grantWay;
        $this->apiParas["grantWay"]  = $grantWay;
    }

    public function getGrantWay()
    {
        return $this->grantWay;
    }

    /**
     * @param string $name
     * 店铺券名称
     * Required: false
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
     * 店铺券名称
     * Example Value: 
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $createMonth
     * 优惠券创建月份
     * Required: false
     * Example Value: 
     */
    private $createMonth;

    /**
     * @param string $createMonth
     * 优惠券创建月份
     * Example Value: 
     */
    public function setCreateMonth($createMonth)
    {
        $this->createMonth             = $createMonth;
        $this->apiParas["createMonth"]  = $createMonth;
    }

    public function getCreateMonth()
    {
        return $this->createMonth;
    }

    /**
     * @param int $creatorType
     * 优惠券创建者 0优惠券shop端 2促销发券等
     * Required: false
     * Example Value: 
     */
    private $creatorType;

    /**
     * @param int $creatorType
     * 优惠券创建者 0优惠券shop端 2促销发券等
     * Example Value: 
     */
    public function setCreatorType($creatorType)
    {
        $this->creatorType             = $creatorType;
        $this->apiParas["creatorType"]  = $creatorType;
    }

    public function getCreatorType()
    {
        return $this->creatorType;
    }

    /**
     * @param int $closed
     * 店铺券状态 0未关闭 1关闭
     * Required: false
     * Example Value: 
     */
    private $closed;

    /**
     * @param int $closed
     * 店铺券状态 0未关闭 1关闭
     * Example Value: 
     */
    public function setClosed($closed)
    {
        $this->closed             = $closed;
        $this->apiParas["closed"]  = $closed;
    }

    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * @param int $page
     * 页码
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param int $page
     * 页码
     * Example Value: 
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $pageSize
     * 页面大小 取值范围[1,20]
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 页面大小 取值范围[1,20]
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}