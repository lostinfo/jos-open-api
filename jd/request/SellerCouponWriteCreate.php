<?php

namespace JD\request;

/**
 * 新建优惠券
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=1808&apiName=jingdong.seller.coupon.write.create
 * Class SellerCouponWriteCreate
 * @package Jd\request
 */
class SellerCouponWriteCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.coupon.write.create";
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
     * @param String $ip
     * 调用方IP
     * Required: true
     * Example Value: 
     */
    private $ip;

    /**
     * @param String $ip
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
     * @param String $port
     * 调用方端口
     * Required: true
     * Example Value: 
     */
    private $port;

    /**
     * @param String $port
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
     * @param String $name
     * 优惠券名称
     * Required: false
     * Example Value: 
     */
    private $name;

    /**
     * @param String $name
     * 优惠券名称
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
     * @param Number $type
     * 优惠券类型 0京券 1东券
     * Required: true
     * Example Value: 
     */
    private $type;

    /**
     * @param Number $type
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
     * @param Number $bindType
     * 绑定类型 1全店参加 2指定sku参加
     * Required: true
     * Example Value: 
     */
    private $bindType;

    /**
     * @param Number $bindType
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
     * @param Number $grantType
     * 发放类型 1促销绑定 2推送 3免费领取 4京豆换券 5互动平台
     * Required: true
     * Example Value: 
     */
    private $grantType;

    /**
     * @param Number $grantType
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
     * @param Number $num
     * 优惠券数量
     * Required: true
     * Example Value: 
     */
    private $num;

    /**
     * @param Number $num
     * 优惠券数量
     * Example Value: 
     */
    public function setNum($num)
    {
        $this->num             = $num;
        $this->apiParas["num"]  = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param Number $discount
     * 优惠券面额
     * Required: true
     * Example Value: 
     */
    private $discount;

    /**
     * @param Number $discount
     * 优惠券面额
     * Example Value: 
     */
    public function setDiscount($discount)
    {
        $this->discount             = $discount;
        $this->apiParas["discount"]  = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param Number $quota
     * 优惠限额
     * Required: true
     * Example Value: 
     */
    private $quota;

    /**
     * @param Number $quota
     * 优惠限额
     * Example Value: 
     */
    public function setQuota($quota)
    {
        $this->quota             = $quota;
        $this->apiParas["quota"]  = $quota;
    }

    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * @param Number $validityType
     * 有效期类型 1相对时间 5绝对时间
     * Required: true
     * Example Value: 
     */
    private $validityType;

    /**
     * @param Number $validityType
     * 有效期类型 1相对时间 5绝对时间
     * Example Value: 
     */
    public function setValidityType($validityType)
    {
        $this->validityType             = $validityType;
        $this->apiParas["validityType"]  = $validityType;
    }

    public function getValidityType()
    {
        return $this->validityType;
    }

    /**
     * @param Number $days
     * 有效期(validityType为1时必填)
     * Required: false
     * Example Value: 
     */
    private $days;

    /**
     * @param Number $days
     * 有效期(validityType为1时必填)
     * Example Value: 
     */
    public function setDays($days)
    {
        $this->days             = $days;
        $this->apiParas["days"]  = $days;
    }

    public function getDays()
    {
        return $this->days;
    }

    /**
     * @param Number $beginTime
     * 有效期开始时间（validityType为5时必填）
     * Required: false
     * Example Value: 
     */
    private $beginTime;

    /**
     * @param Number $beginTime
     * 有效期开始时间（validityType为5时必填）
     * Example Value: 
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime             = $beginTime;
        $this->apiParas["beginTime"]  = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
    }

    /**
     * @param Number $endTime
     * 有效期结束时间（validityType为5时必填）
     * Required: false
     * Example Value: 
     */
    private $endTime;

    /**
     * @param Number $endTime
     * 有效期结束时间（validityType为5时必填）
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param String $password
     * 发放密码
     * Required: false
     * Example Value: 
     */
    private $password;

    /**
     * @param String $password
     * 发放密码
     * Example Value: 
     */
    public function setPassword($password)
    {
        $this->password             = $password;
        $this->apiParas["password"]  = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param String $batchKey
     * 批次key
     * Required: false
     * Example Value: 
     */
    private $batchKey;

    /**
     * @param String $batchKey
     * 批次key
     * Example Value: 
     */
    public function setBatchKey($batchKey)
    {
        $this->batchKey             = $batchKey;
        $this->apiParas["batchKey"]  = $batchKey;
    }

    public function getBatchKey()
    {
        return $this->batchKey;
    }

    /**
     * @param Number $member
     * 会员等级 50注册会员 56铜牌 61银牌 62金牌 105钻石 110VIP 90企业会员
     * Required: true
     * Example Value: 
     */
    private $member;

    /**
     * @param Number $member
     * 会员等级 50注册会员 56铜牌 61银牌 62金牌 105钻石 110VIP 90企业会员
     * Example Value: 
     */
    public function setMember($member)
    {
        $this->member             = $member;
        $this->apiParas["member"]  = $member;
    }

    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param Number $takeBeginTime
     * 领券开始时间
     * Required: true
     * Example Value: 
     */
    private $takeBeginTime;

    /**
     * @param Number $takeBeginTime
     * 领券开始时间
     * Example Value: 
     */
    public function setTakeBeginTime($takeBeginTime)
    {
        $this->takeBeginTime             = $takeBeginTime;
        $this->apiParas["takeBeginTime"]  = $takeBeginTime;
    }

    public function getTakeBeginTime()
    {
        return $this->takeBeginTime;
    }

    /**
     * @param Number $takeEndTime
     * 领券结束时间
     * Required: true
     * Example Value: 
     */
    private $takeEndTime;

    /**
     * @param Number $takeEndTime
     * 领券结束时间
     * Example Value: 
     */
    public function setTakeEndTime($takeEndTime)
    {
        $this->takeEndTime             = $takeEndTime;
        $this->apiParas["takeEndTime"]  = $takeEndTime;
    }

    public function getTakeEndTime()
    {
        return $this->takeEndTime;
    }

    /**
     * @param Number $takeRule
     * 领券规则 5限领一张 4每天限领一张 3自定义每天限量数量
     * Required: true
     * Example Value: 
     */
    private $takeRule;

    /**
     * @param Number $takeRule
     * 领券规则 5限领一张 4每天限领一张 3自定义每天限量数量
     * Example Value: 
     */
    public function setTakeRule($takeRule)
    {
        $this->takeRule             = $takeRule;
        $this->apiParas["takeRule"]  = $takeRule;
    }

    public function getTakeRule()
    {
        return $this->takeRule;
    }

    /**
     * @param Number $takeNum
     * 限制条件内可以领取张数
     * Required: true
     * Example Value: 
     */
    private $takeNum;

    /**
     * @param Number $takeNum
     * 限制条件内可以领取张数
     * Example Value: 
     */
    public function setTakeNum($takeNum)
    {
        $this->takeNum             = $takeNum;
        $this->apiParas["takeNum"]  = $takeNum;
    }

    public function getTakeNum()
    {
        return $this->takeNum;
    }

    /**
     * @param Number $display
     * 是否公开 1不公开 3公开(grantType如设值5此参数必须为3)
     * Required: true
     * Example Value: 
     */
    private $display;

    /**
     * @param Number $display
     * 是否公开 1不公开 3公开(grantType如设值5此参数必须为3)
     * Example Value: 
     */
    public function setDisplay($display)
    {
        $this->display             = $display;
        $this->apiParas["display"]  = $display;
    }

    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param Number $platformType
     * 使用平台 1全平台 3限平台
     * Required: true
     * Example Value: 
     */
    private $platformType;

    /**
     * @param Number $platformType
     * 使用平台 1全平台 3限平台
     * Example Value: 
     */
    public function setPlatformType($platformType)
    {
        $this->platformType             = $platformType;
        $this->apiParas["platformType"]  = $platformType;
    }

    public function getPlatformType()
    {
        return $this->platformType;
    }

    /**
     * @param String $platform
     * 优惠券使用平台 0主站专享 1手机专享 3M版京东 4手Q专享 5微信专享 7京致衣橱（此参数需根据platformType设值，如限平台必填）
     * Required: false
     * Example Value: 
     */
    private $platform;

    /**
     * @param String $platform
     * 优惠券使用平台 0主站专享 1手机专享 3M版京东 4手Q专享 5微信专享 7京致衣橱（此参数需根据platformType设值，如限平台必填）
     * Example Value: 
     */
    public function setPlatform($platform)
    {
        $this->platform             = $platform;
        $this->apiParas["platform"]  = $platform;
    }

    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param String $imgUrl
     * 京豆换券，图片地址
     * Required: false
     * Example Value: 
     */
    private $imgUrl;

    /**
     * @param String $imgUrl
     * 京豆换券，图片地址
     * Example Value: 
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl             = $imgUrl;
        $this->apiParas["imgUrl"]  = $imgUrl;
    }

    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * @param Number $boundStatus
     * 京豆换券
     * Required: false
     * Example Value: 
     */
    private $boundStatus;

    /**
     * @param Number $boundStatus
     * 京豆换券
     * Example Value: 
     */
    public function setBoundStatus($boundStatus)
    {
        $this->boundStatus             = $boundStatus;
        $this->apiParas["boundStatus"]  = $boundStatus;
    }

    public function getBoundStatus()
    {
        return $this->boundStatus;
    }

    /**
     * @param Number $jdNum
     * 京豆数
     * Required: false
     * Example Value: 
     */
    private $jdNum;

    /**
     * @param Number $jdNum
     * 京豆数
     * Example Value: 
     */
    public function setJdNum($jdNum)
    {
        $this->jdNum             = $jdNum;
        $this->apiParas["jdNum"]  = $jdNum;
    }

    public function getJdNum()
    {
        return $this->jdNum;
    }

    /**
     * @param Number $itemId
     * 京豆换券项目ID
     * Required: false
     * Example Value: 
     */
    private $itemId;

    /**
     * @param Number $itemId
     * 京豆换券项目ID
     * Example Value: 
     */
    public function setItemId($itemId)
    {
        $this->itemId             = $itemId;
        $this->apiParas["itemId"]  = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param Number $shareType
     * 分享类型 1分享 2不分享（如设置京券type=0,此参数必填2不分享）
     * Required: true
     * Example Value: 
     */
    private $shareType;

    /**
     * @param Number $shareType
     * 分享类型 1分享 2不分享（如设置京券type=0,此参数必填2不分享）
     * Example Value: 
     */
    public function setShareType($shareType)
    {
        $this->shareType             = $shareType;
        $this->apiParas["shareType"]  = $shareType;
    }

    public function getShareType()
    {
        return $this->shareType;
    }

    /**
     * @param Number[] $skuId
     * 商品sku编号(如设置bindType为2，此参数必填)
     * Required: false
     * Example Value: 
     */
    private $skuId;

    /**
     * @param Number[] $skuId
     * 商品sku编号(如设置bindType为2，此参数必填)
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

}