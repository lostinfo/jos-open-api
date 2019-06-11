<?php

namespca Lostinfo\JosOpenApi;

/**
 * 添加ISV活动
 * 店铺API-京东店铺API，包含提供商家、商家店铺基本信息及店内分类操作查询等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=88&apiId=3080&apiName=jingdong.promo.unit.pre.addIsvActivity
 * Class PromoUnitPreAddIsvActivity
 * @package Jd\request
 */
class PromoUnitPreAddIsvActivity
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.promo.unit.pre.addIsvActivity";
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
     * @param string $note
     * 活动规则说明
     * Required: true
     * Example Value: 千人千面
     */
    private $note;

    /**
     * @param string $note
     * 活动规则说明
     * Example Value: 千人千面
     */
    public function setNote($note)
    {
        $this->note             = $note;
        $this->apiParas["note"]  = $note;
    }

    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param int $shared
     * 是否可以分享 1是0否
     * Required: true
     * Example Value: 0
     */
    private $shared;

    /**
     * @param int $shared
     * 是否可以分享 1是0否
     * Example Value: 0
     */
    public function setShared($shared)
    {
        $this->shared             = $shared;
        $this->apiParas["shared"]  = $shared;
    }

    public function getShared()
    {
        return $this->shared;
    }

    /**
     * @param string $callBackUrl
     * 唤醒isv活动链接
     * Required: true
     * Example Value: http://jmplus.jd.com/plugin/use.action?pluginCode=eca44f500ede4e3d9ef64a4b872754a8
     */
    private $callBackUrl;

    /**
     * @param string $callBackUrl
     * 唤醒isv活动链接
     * Example Value: http://jmplus.jd.com/plugin/use.action?pluginCode=eca44f500ede4e3d9ef64a4b872754a8
     */
    public function setCallBackUrl($callBackUrl)
    {
        $this->callBackUrl             = $callBackUrl;
        $this->apiParas["callBackUrl"]  = $callBackUrl;
    }

    public function getCallBackUrl()
    {
        return $this->callBackUrl;
    }

    /**
     * @param string $channelType
     * 渠道类型（0：app，1：PC，2：WQ）
     * Required: true
     * Example Value: 2,1,0
     */
    private $channelType;

    /**
     * @param string $channelType
     * 渠道类型（0：app，1：PC，2：WQ）
     * Example Value: 2,1,0
     */
    public function setChannelType($channelType)
    {
        $this->channelType             = $channelType;
        $this->apiParas["channelType"]  = $channelType;
    }

    public function getChannelType()
    {
        return $this->channelType;
    }

    /**
     * @param int $source
     * 活动来源(1、pop   2、自营 3、isv，4、千人千面)
     * Required: true
     * Example Value: 4
     */
    private $source;

    /**
     * @param int $source
     * 活动来源(1、pop   2、自营 3、isv，4、千人千面)
     * Example Value: 4
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $pluginName
     * isv 插件名称
     * Required: true
     * Example Value: 千人千面
     */
    private $pluginName;

    /**
     * @param string $pluginName
     * isv 插件名称
     * Example Value: 千人千面
     */
    public function setPluginName($pluginName)
    {
        $this->pluginName             = $pluginName;
        $this->apiParas["pluginName"]  = $pluginName;
    }

    public function getPluginName()
    {
        return $this->pluginName;
    }

    /**
     * @param string $imageUrl
     * 活动背景图url
     * Required: true
     * Example Value: https://img10.360buyimg.com/imgzone/jfs/t1/425/40/15151/24882/5bdd19a0Ed84827fd/d6be3df1d6047da7.gif
     */
    private $imageUrl;

    /**
     * @param string $imageUrl
     * 活动背景图url
     * Example Value: https://img10.360buyimg.com/imgzone/jfs/t1/425/40/15151/24882/5bdd19a0Ed84827fd/d6be3df1d6047da7.gif
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl             = $imageUrl;
        $this->apiParas["imageUrl"]  = $imageUrl;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param int $ruleType
     * 规则类型(0：普通签到，1：连续签到）
     * Required: true
     * Example Value: 1
     */
    private $ruleType;

    /**
     * @param int $ruleType
     * 规则类型(0：普通签到，1：连续签到）
     * Example Value: 1
     */
    public function setRuleType($ruleType)
    {
        $this->ruleType             = $ruleType;
        $this->apiParas["ruleType"]  = $ruleType;
    }

    public function getRuleType()
    {
        return $this->ruleType;
    }

    /**
     * @param string $name
     * 活动名称
     * Required: true
     * Example Value: 千人千面
     */
    private $name;

    /**
     * @param string $name
     * 活动名称
     * Example Value: 千人千面
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
     * @param int $id
     * 签到活动编码
     * Required: true
     * Example Value: 1
     */
    private $id;

    /**
     * @param int $id
     * 签到活动编码
     * Example Value: 1
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $beginTime
     * 活动开始时间
     * Required: true
     * Example Value: 2018-12-09 12:00:00
     */
    private $beginTime;

    /**
     * @param string $beginTime
     * 活动开始时间
     * Example Value: 2018-12-09 12:00:00
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
     * @param string $endTime
     * 活动结束时间
     * Required: true
     * Example Value: 2018-12-19 12:00:00
     */
    private $endTime;

    /**
     * @param string $endTime
     * 活动结束时间
     * Example Value: 2018-12-19 12:00:00
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
     * @param string $isvUrl
     * isv 活动链接
     * Required: true
     * Example Value: https://lzkj-isv.isvjcloud.com/wxShopFollowActivity/activity?activityId=6606e7a1e653492abcf10b5498c5492a
     */
    private $isvUrl;

    /**
     * @param string $isvUrl
     * isv 活动链接
     * Example Value: https://lzkj-isv.isvjcloud.com/wxShopFollowActivity/activity?activityId=6606e7a1e653492abcf10b5498c5492a
     */
    public function setIsvUrl($isvUrl)
    {
        $this->isvUrl             = $isvUrl;
        $this->apiParas["isvUrl"]  = $isvUrl;
    }

    public function getIsvUrl()
    {
        return $this->isvUrl;
    }

    /**
     * @param int $categoryId
     * 主营类目id（对应一级经营分类）
     * Required: true
     * Example Value: 1315
     */
    private $categoryId;

    /**
     * @param int $categoryId
     * 主营类目id（对应一级经营分类）
     * Example Value: 1315
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId             = $categoryId;
        $this->apiParas["categoryId"]  = $categoryId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param int $status
     * 状态。-1：已关闭（删除）1:已设置活动 2：已设置规则 3：已完成 4:已暂停
     * Required: true
     * Example Value: 2
     */
    private $status;

    /**
     * @param int $status
     * 状态。-1：已关闭（删除）1:已设置活动 2：已设置规则 3：已完成 4:已暂停
     * Example Value: 2
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $appropriateCrowd
     * 适当人群信息
     * Required: false
     * Example Value: 人群
     */
    private $appropriateCrowd;

    /**
     * @param string $appropriateCrowd
     * 适当人群信息
     * Example Value: 人群
     */
    public function setAppropriateCrowd($appropriateCrowd)
    {
        $this->appropriateCrowd             = $appropriateCrowd;
        $this->apiParas["appropriateCrowd"]  = $appropriateCrowd;
    }

    public function getAppropriateCrowd()
    {
        return $this->appropriateCrowd;
    }

    /**
     * @param int $priority
     * 优先级
     * Required: false
     * Example Value: 1
     */
    private $priority;

    /**
     * @param int $priority
     * 优先级
     * Example Value: 1
     */
    public function setPriority($priority)
    {
        $this->priority             = $priority;
        $this->apiParas["priority"]  = $priority;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $level
     * 活动级别（0：主活动，1：子活动）
     * Required: false
     * Example Value: 0
     */
    private $level;

    /**
     * @param int $level
     * 活动级别（0：主活动，1：子活动）
     * Example Value: 0
     */
    public function setLevel($level)
    {
        $this->level             = $level;
        $this->apiParas["level"]  = $level;
    }

    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string[] $activityPrizes
     * 活动奖项列表（0：京劵、1：东券、2：专享价、4：京豆、6：积分）
     * Required: false
     * Example Value: 1
     */
    private $activityPrizes;

    /**
     * @param string[] $activityPrizes
     * 活动奖项列表（0：京劵、1：东券、2：专享价、4：京豆、6：积分）
     * Example Value: 1
     */
    public function setActivityPrizes($activityPrizes)
    {
        $this->activityPrizes             = $activityPrizes;
        $this->apiParas["activityPrizes"]  = $activityPrizes;
    }

    public function getActivityPrizes()
    {
        return $this->activityPrizes;
    }

    /**
     * @param int $marketPurpose
     * 营销目的（0：留存、1：拉新、2：转换、3：复购）
     * Required: false
     * Example Value: 1
     */
    private $marketPurpose;

    /**
     * @param int $marketPurpose
     * 营销目的（0：留存、1：拉新、2：转换、3：复购）
     * Example Value: 1
     */
    public function setMarketPurpose($marketPurpose)
    {
        $this->marketPurpose             = $marketPurpose;
        $this->apiParas["marketPurpose"]  = $marketPurpose;
    }

    public function getMarketPurpose()
    {
        return $this->marketPurpose;
    }

    /**
     * @param string $recordId
     * 人群标识（人群检验返回标识）
     * Required: false
     * Example Value: 1
     */
    private $recordId;

    /**
     * @param string $recordId
     * 人群标识（人群检验返回标识）
     * Example Value: 1
     */
    public function setRecordId($recordId)
    {
        $this->recordId             = $recordId;
        $this->apiParas["recordId"]  = $recordId;
    }

    public function getRecordId()
    {
        return $this->recordId;
    }

}