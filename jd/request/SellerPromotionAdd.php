<?php

namespace JD\request;

/**
 * 新建促销信息
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=138&apiName=jingdong.seller.promotion.add
 * Class SellerPromotionAdd
 * @package Jd\request
 */
class SellerPromotionAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.add";
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
     * @param String $name
     * 促销名称，字符串长度小于等于10
     * Required: true
     * Example Value: 优惠促销
     */
    private $name;

    /**
     * @param String $name
     * 促销名称，字符串长度小于等于10
     * Example Value: 优惠促销
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
     * 促销类型，可选值：单品促销（1），赠品促销（4），套装促销（6），总价促销（10）
     * Required: true
     * Example Value: 1
     */
    private $type;

    /**
     * @param Number $type
     * 促销类型，可选值：单品促销（1），赠品促销（4），套装促销（6），总价促销（10）
     * Example Value: 1
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
     * @param String $beginTime
     * 促销开始时间，格式为yyyy-MM-dd HH:mm:ss，精确到分钟，最长可设置为距当前时间180天之内的时间点
     * Required: true
     * Example Value: 2013-05-21 13:30:59
     */
    private $beginTime;

    /**
     * @param String $beginTime
     * 促销开始时间，格式为yyyy-MM-dd HH:mm:ss，精确到分钟，最长可设置为距当前时间180天之内的时间点
     * Example Value: 2013-05-21 13:30:59
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime             = $beginTime;
        $this->apiParas["begin_time"]  = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
    }

    /**
     * @param String $endTime
     * 促销结束时间，格式为yyyy-MM-dd HH:mm:ss，精确到分钟，必须大于开始时间至少一分钟，且晚于当前时间，建议至少晚10分钟，且和开始时间最大间隔不能超过180天
     * Required: true
     * Example Value: 2013-05-21 13:40:59
     */
    private $endTime;

    /**
     * @param String $endTime
     * 促销结束时间，格式为yyyy-MM-dd HH:mm:ss，精确到分钟，必须大于开始时间至少一分钟，且晚于当前时间，建议至少晚10分钟，且和开始时间最大间隔不能超过180天
     * Example Value: 2013-05-21 13:40:59
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["end_time"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param Number $bound
     * 促销范围，总价促销为必填项，其它促销类型无效，可选值：部分商品参加（1）、全场参加（2）、部分商品不参加（3），注：M元任选N件只支持部分商品参加
     * Required: false
     * Example Value: 1
     */
    private $bound;

    /**
     * @param Number $bound
     * 促销范围，总价促销为必填项，其它促销类型无效，可选值：部分商品参加（1）、全场参加（2）、部分商品不参加（3），注：M元任选N件只支持部分商品参加
     * Example Value: 1
     */
    public function setBound($bound)
    {
        $this->bound             = $bound;
        $this->apiParas["bound"]  = $bound;
    }

    public function getBound()
    {
        return $this->bound;
    }

    /**
     * @param Number $member
     * 会员限制，默认值：注册会员（50），可选值：注册会员（50）、铜牌（56）、银牌（61）、金牌（62）、钻石（105）、VIP（110）
     * Required: false
     * Example Value: 50
     */
    private $member;

    /**
     * @param Number $member
     * 会员限制，默认值：注册会员（50），可选值：注册会员（50）、铜牌（56）、银牌（61）、金牌（62）、钻石（105）、VIP（110）
     * Example Value: 50
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
     * @param String $slogan
     * 广告语，字符串长度小于等于50
     * Required: false
     * Example Value: 广告语
     */
    private $slogan;

    /**
     * @param String $slogan
     * 广告语，字符串长度小于等于50
     * Example Value: 广告语
     */
    public function setSlogan($slogan)
    {
        $this->slogan             = $slogan;
        $this->apiParas["slogan"]  = $slogan;
    }

    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * @param String $comment
     * 活动备注，不超过200字节
     * Required: false
     * Example Value: 活动备注
     */
    private $comment;

    /**
     * @param String $comment
     * 活动备注，不超过200字节
     * Example Value: 活动备注
     */
    public function setComment($comment)
    {
        $this->comment             = $comment;
        $this->apiParas["comment"]  = $comment;
    }

    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param Number $favorMode
     * 总价促销订单规则类型（总价促销时为必填项，orderMdoe需要和此值保持一致），满赠（0），满减（1），每满减（2），满赠加价购（5），满M件减N件（6），M元任选N件（13），M件N折（15），满减送（元）（16）
     * Required: false
     * Example Value: null
     */
    private $favorMode;

    /**
     * @param Number $favorMode
     * 总价促销订单规则类型（总价促销时为必填项，orderMdoe需要和此值保持一致），满赠（0），满减（1），每满减（2），满赠加价购（5），满M件减N件（6），M元任选N件（13），M件N折（15），满减送（元）（16）
     * Example Value: null
     */
    public function setFavorMode($favorMode)
    {
        $this->favorMode             = $favorMode;
        $this->apiParas["favor_mode"]  = $favorMode;
    }

    public function getFavorMode()
    {
        return $this->favorMode;
    }

}