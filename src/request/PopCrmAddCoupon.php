<?php

namespca Lostinfo\JosOpenApi;

/**
 * ISV定向券
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=3686&apiName=jingdong.pop.crm.addCoupon
 * Class PopCrmAddCoupon
 * @package Jd\request
 */
class PopCrmAddCoupon
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.crm.addCoupon";
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
     * @param string $venderName
     * 店铺名字
     * Required: true
     * Example Value: 测试店铺
     */
    private $venderName;

    /**
     * @param string $venderName
     * 店铺名字
     * Example Value: 测试店铺
     */
    public function setVenderName($venderName)
    {
        $this->venderName             = $venderName;
        $this->apiParas["vender_name"]  = $venderName;
    }

    public function getVenderName()
    {
        return $this->venderName;
    }

    /**
     * @param int $validateDays
     * 有效期天数 （大于0 小于30）
     * Required: true
     * Example Value: 1
     */
    private $validateDays;

    /**
     * @param int $validateDays
     * 有效期天数 （大于0 小于30）
     * Example Value: 1
     */
    public function setValidateDays($validateDays)
    {
        $this->validateDays             = $validateDays;
        $this->apiParas["validate_days"]  = $validateDays;
    }

    public function getValidateDays()
    {
        return $this->validateDays;
    }

    /**
     * @param int $quota
     * 最低消费金额 （大于减免金额）
     * Required: true
     * Example Value: 
     */
    private $quota;

    /**
     * @param int $quota
     * 最低消费金额 （大于减免金额）
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
     * @param int $discount
     * 减免金额(小于消费金额）
     * Required: true
     * Example Value: 
     */
    private $discount;

    /**
     * @param int $discount
     * 减免金额(小于消费金额）
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
     * @param string $startTime
     * 活动开始时间（格式为yyy-MM-DD ) 且大于当前时间
     * Required: true
     * Example Value: 
     */
    private $startTime;

    /**
     * @param string $startTime
     * 活动开始时间（格式为yyy-MM-DD ) 且大于当前时间
     * Example Value: 
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["start_time"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param int $shopId
     * 店铺id
     * Required: true
     * Example Value: 18848
     */
    private $shopId;

    /**
     * @param int $shopId
     * 店铺id
     * Example Value: 18848
     */
    public function setShopId($shopId)
    {
        $this->shopId             = $shopId;
        $this->apiParas["shop_id"]  = $shopId;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param string $endTime
     * 活动结束时间（格式为yyy-MM-DD ) 且大于当前时间 大于开始时间
     * Required: true
     * Example Value: 
     */
    private $endTime;

    /**
     * @param string $endTime
     * 活动结束时间（格式为yyy-MM-DD ) 且大于当前时间 大于开始时间
     * Example Value: 
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
     * @param int $batchCount
     * 优惠券数量（大于0 发放的张数）
     * Required: true
     * Example Value: 1
     */
    private $batchCount;

    /**
     * @param int $batchCount
     * 优惠券数量（大于0 发放的张数）
     * Example Value: 1
     */
    public function setBatchCount($batchCount)
    {
        $this->batchCount             = $batchCount;
        $this->apiParas["batch_count"]  = $batchCount;
    }

    public function getBatchCount()
    {
        return $this->batchCount;
    }

    /**
     * @param string $mktActivityId
     * 活动Id
     * Required: true
     * Example Value: 60e9bae288d24c8ca5723417b68fa83b
     */
    private $mktActivityId;

    /**
     * @param string $mktActivityId
     * 活动Id
     * Example Value: 60e9bae288d24c8ca5723417b68fa83b
     */
    public function setMktActivityId($mktActivityId)
    {
        $this->mktActivityId             = $mktActivityId;
        $this->apiParas["mkt_activity_id"]  = $mktActivityId;
    }

    public function getMktActivityId()
    {
        return $this->mktActivityId;
    }

    /**
     * @param string $appKey
     * ISV测应用码
     * Required: true
     * Example Value: 19512264AED616A4FB1A6990C6A42DF2
     */
    private $appKey;

    /**
     * @param string $appKey
     * ISV测应用码
     * Example Value: 19512264AED616A4FB1A6990C6A42DF2
     */
    public function setAppKey($appKey)
    {
        $this->appKey             = $appKey;
        $this->apiParas["app_key"]  = $appKey;
    }

    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * @param string $taskInstId
     * 任务实例Id
     * Required: true
     * Example Value: 4b6a629011124212b4060416e7b4ea9a
     */
    private $taskInstId;

    /**
     * @param string $taskInstId
     * 任务实例Id
     * Example Value: 4b6a629011124212b4060416e7b4ea9a
     */
    public function setTaskInstId($taskInstId)
    {
        $this->taskInstId             = $taskInstId;
        $this->apiParas["task_inst_id"]  = $taskInstId;
    }

    public function getTaskInstId()
    {
        return $this->taskInstId;
    }

    /**
     * @param string $mktActivityInstId
     * 活动实例Id
     * Required: true
     * Example Value: 074d131b9f734d44b4d0ff892981a157
     */
    private $mktActivityInstId;

    /**
     * @param string $mktActivityInstId
     * 活动实例Id
     * Example Value: 074d131b9f734d44b4d0ff892981a157
     */
    public function setMktActivityInstId($mktActivityInstId)
    {
        $this->mktActivityInstId             = $mktActivityInstId;
        $this->apiParas["mkt_activity_inst_id"]  = $mktActivityInstId;
    }

    public function getMktActivityInstId()
    {
        return $this->mktActivityInstId;
    }

    /**
     * @param string $taskId
     * 任务Id
     * Required: true
     * Example Value: 3f771e3ff7e24ef9ad8bf1afd4b18294
     */
    private $taskId;

    /**
     * @param string $taskId
     * 任务Id
     * Example Value: 3f771e3ff7e24ef9ad8bf1afd4b18294
     */
    public function setTaskId($taskId)
    {
        $this->taskId             = $taskId;
        $this->apiParas["task_id"]  = $taskId;
    }

    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * @param string $marketingName
     * 营销活动名称
     * Required: true
     * Example Value: 测试名字
     */
    private $marketingName;

    /**
     * @param string $marketingName
     * 营销活动名称
     * Example Value: 测试名字
     */
    public function setMarketingName($marketingName)
    {
        $this->marketingName             = $marketingName;
        $this->apiParas["marketing_name"]  = $marketingName;
    }

    public function getMarketingName()
    {
        return $this->marketingName;
    }

    /**
     * @param string $strategyInstId
     * 人群实例Id
     * Required: true
     * Example Value: 5951da2870934cb7ba82a7b85e1092ab
     */
    private $strategyInstId;

    /**
     * @param string $strategyInstId
     * 人群实例Id
     * Example Value: 5951da2870934cb7ba82a7b85e1092ab
     */
    public function setStrategyInstId($strategyInstId)
    {
        $this->strategyInstId             = $strategyInstId;
        $this->apiParas["strategy_inst_id"]  = $strategyInstId;
    }

    public function getStrategyInstId()
    {
        return $this->strategyInstId;
    }

    /**
     * @param int $customerCount
     * 会员数量
     * Required: true
     * Example Value: 1
     */
    private $customerCount;

    /**
     * @param int $customerCount
     * 会员数量
     * Example Value: 1
     */
    public function setCustomerCount($customerCount)
    {
        $this->customerCount             = $customerCount;
        $this->apiParas["customer_count"]  = $customerCount;
    }

    public function getCustomerCount()
    {
        return $this->customerCount;
    }

}