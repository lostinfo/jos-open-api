<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 消息盒子发送任务（V2）
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3682&apiName=jingdong.data.vender.message.box.notify
 * Class DataVenderMessageBoxNotify
 * @package Jd\request
 */
class DataVenderMessageBoxNotify
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.message.box.notify";
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
     * @param string $monitorEndTime
     * 监控活动结束时间
     * Required: false
     * Example Value: 
     */
    private $monitorEndTime;

    /**
     * @param string $monitorEndTime
     * 监控活动结束时间
     * Example Value: 
     */
    public function setMonitorEndTime($monitorEndTime)
    {
        $this->monitorEndTime             = $monitorEndTime;
        $this->apiParas["monitor_end_time"]  = $monitorEndTime;
    }

    public function getMonitorEndTime()
    {
        return $this->monitorEndTime;
    }

    /**
     * @param string $taskInstId
     * 任务实例ID
     * Required: true
     * Example Value: JAJIAJHHSHSHKJKSAIAH
     */
    private $taskInstId;

    /**
     * @param string $taskInstId
     * 任务实例ID
     * Example Value: JAJIAJHHSHSHKJKSAIAH
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
     * @param string $title
     * 消息盒子标题 15个汉字或30个字母以内（可既有汉字又有字母
     * Required: true
     * Example Value: 标题
     */
    private $title;

    /**
     * @param string $title
     * 消息盒子标题 15个汉字或30个字母以内（可既有汉字又有字母
     * Example Value: 标题
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
     * @param string $content
     * 消息盒子内容，长度1000，与url参数二选一即可
     * Required: false
     * Example Value: 内容
     */
    private $content;

    /**
     * @param string $content
     * 消息盒子内容，长度1000，与url参数二选一即可
     * Example Value: 内容
     */
    public function setContent($content)
    {
        $this->content             = $content;
        $this->apiParas["content"]  = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $url
     * 长链接，落地页m页的链接地址，长度1000，与content参数二选一即可。另外，落地的链接也有一定规则,可以参见“官方短信-ISV接入须知X.X.pdf”，需要严格遵守，具体请联系运营咨询（注：只有京东移动端的链接才能追踪到效果数据）
     * Required: false
     * Example Value: url
     */
    private $url;

    /**
     * @param string $url
     * 长链接，落地页m页的链接地址，长度1000，与content参数二选一即可。另外，落地的链接也有一定规则,可以参见“官方短信-ISV接入须知X.X.pdf”，需要严格遵守，具体请联系运营咨询（注：只有京东移动端的链接才能追踪到效果数据）
     * Example Value: url
     */
    public function setUrl($url)
    {
        $this->url             = $url;
        $this->apiParas["url"]  = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $sendTime
     * 发送时间（定时发送），时间格式必须为：yyyy-MM-dd mm:hh:ss 该值为空或者审批时已经过了发送时间，那么就会在审批后立即发送
     * Required: false
     * Example Value: 
     */
    private $sendTime;

    /**
     * @param string $sendTime
     * 发送时间（定时发送），时间格式必须为：yyyy-MM-dd mm:hh:ss 该值为空或者审批时已经过了发送时间，那么就会在审批后立即发送
     * Example Value: 
     */
    public function setSendTime($sendTime)
    {
        $this->sendTime             = $sendTime;
        $this->apiParas["send_time"]  = $sendTime;
    }

    public function getSendTime()
    {
        return $this->sendTime;
    }

    /**
     * @param string $imgUrl
     * 消息盒子中显示图片地址，图片规格为:670x260 PX（必须）  图片的地址需为京东域内，推荐使用商家后台的图片管理模块上传的图片或m.360buying.com域名
     * Required: true
     * Example Value: 标题url
     */
    private $imgUrl;

    /**
     * @param string $imgUrl
     * 消息盒子中显示图片地址，图片规格为:670x260 PX（必须）  图片的地址需为京东域内，推荐使用商家后台的图片管理模块上传的图片或m.360buying.com域名
     * Example Value: 标题url
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl             = $imgUrl;
        $this->apiParas["img_url"]  = $imgUrl;
    }

    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * @param string $mktActivityId
     * 活动ID
     * Required: true
     * Example Value: JAJIAJHHSHSHKJKSAIAH
     */
    private $mktActivityId;

    /**
     * @param string $mktActivityId
     * 活动ID
     * Example Value: JAJIAJHHSHSHKJKSAIAH
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
     * @param string $monitorStartTime
     * 监控活动起始时间
     * Required: false
     * Example Value: 
     */
    private $monitorStartTime;

    /**
     * @param string $monitorStartTime
     * 监控活动起始时间
     * Example Value: 
     */
    public function setMonitorStartTime($monitorStartTime)
    {
        $this->monitorStartTime             = $monitorStartTime;
        $this->apiParas["monitor_start_time"]  = $monitorStartTime;
    }

    public function getMonitorStartTime()
    {
        return $this->monitorStartTime;
    }

    /**
     * @param string $time
     * 消息盒子的消息下架时间，精确到小时，格式为 yyyy-MM-dd hh:mm:ss
     * Required: true
     * Example Value: yyyy-MM-dd hh:mm:ss
     */
    private $time;

    /**
     * @param string $time
     * 消息盒子的消息下架时间，精确到小时，格式为 yyyy-MM-dd hh:mm:ss
     * Example Value: yyyy-MM-dd hh:mm:ss
     */
    public function setTime($time)
    {
        $this->time             = $time;
        $this->apiParas["time"]  = $time;
    }

    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param string $mktActivityInstId
     * 活动实例ID
     * Required: true
     * Example Value: JAJIAJHHSHSHKJKSAIAH
     */
    private $mktActivityInstId;

    /**
     * @param string $mktActivityInstId
     * 活动实例ID
     * Example Value: JAJIAJHHSHSHKJKSAIAH
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
     * 任务ID
     * Required: true
     * Example Value: JAJIAJHHSHSHKJKSAIAH
     */
    private $taskId;

    /**
     * @param string $taskId
     * 任务ID
     * Example Value: JAJIAJHHSHSHKJKSAIAH
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
     * @param string $strategyInstId
     * 人群包实例ID
     * Required: true
     * Example Value: JAJIAJHHSHSHKJKSAIAH
     */
    private $strategyInstId;

    /**
     * @param string $strategyInstId
     * 人群包实例ID
     * Example Value: JAJIAJHHSHSHKJKSAIAH
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

}