<?php

namespca Lostinfo\JosOpenApi;

/**
 * 发送通知
 * 咚咚API-京东咚咚系统API，包含：查询信息、客服日评价、客服登陆日志、时长等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=53&apiId=3322&apiName=jingdong.dd.notice.NoticeDispatcher
 * Class DdNoticeNoticeDispatcher
 * @package Jd\request
 */
class DdNoticeNoticeDispatcher
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dd.notice.NoticeDispatcher";
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
     * @param string $token
     * 向咚咚申请的接口使用Token
     * Required: true
     * Example Value: token value
     */
    private $token;

    /**
     * @param string $token
     * 向咚咚申请的接口使用Token
     * Example Value: token value
     */
    public function setToken($token)
    {
        $this->token             = $token;
        $this->apiParas["token"]  = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $appId
     * 咚咚业务ID
     * Required: true
     * Example Value: im.waiter
     */
    private $appId;

    /**
     * @param string $appId
     * 咚咚业务ID
     * Example Value: im.waiter
     */
    public function setAppId($appId)
    {
        $this->appId             = $appId;
        $this->apiParas["appId"]  = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param string $extend
     * 扩展字段JSON格式，需要在此字段中填入通知发送方账号信息，属性名为sender，值为发送者账号
     * Required: true
     * Example Value: sender
     */
    private $extend;

    /**
     * @param string $extend
     * 扩展字段JSON格式，需要在此字段中填入通知发送方账号信息，属性名为sender，值为发送者账号
     * Example Value: sender
     */
    public function setExtend($extend)
    {
        $this->extend             = $extend;
        $this->apiParas["extend"]  = $extend;
    }

    public function getExtend()
    {
        return $this->extend;
    }

    /**
     * @param string[] $receiver
     * 接收者账号
     * Required: true
     * Example Value: 账号
     */
    private $receiver;

    /**
     * @param string[] $receiver
     * 接收者账号
     * Example Value: 账号
     */
    public function setReceiver($receiver)
    {
        $this->receiver             = $receiver;
        $this->apiParas["receiver"]  = $receiver;
    }

    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param string $time
     * 发送时间
     * Required: true
     * Example Value: 
     */
    private $time;

    /**
     * @param string $time
     * 发送时间
     * Example Value: 
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
     * @param string $title
     * 通知标题
     * Required: true
     * Example Value: Title
     */
    private $title;

    /**
     * @param string $title
     * 通知标题
     * Example Value: Title
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
     * 通知内容
     * Required: true
     * Example Value: 通知内容
     */
    private $content;

    /**
     * @param string $content
     * 通知内容
     * Example Value: 通知内容
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
     * 接收者点击通知跳转的Url
     * Required: true
     * Example Value: https://www.jd.com
     */
    private $url;

    /**
     * @param string $url
     * 接收者点击通知跳转的Url
     * Example Value: https://www.jd.com
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
     * @param int $nType
     * 通知类型,外部只允许发送普通通知类型，此值需要传入0
     * Required: true
     * Example Value: 0
     */
    private $nType;

    /**
     * @param int $nType
     * 通知类型,外部只允许发送普通通知类型，此值需要传入0
     * Example Value: 0
     */
    public function setNType($nType)
    {
        $this->nType             = $nType;
        $this->apiParas["nType"]  = $nType;
    }

    public function getNType()
    {
        return $this->nType;
    }

    /**
     * @param string $noticeId
     * 通知ID
     * Required: true
     * Example Value: ID
     */
    private $noticeId;

    /**
     * @param string $noticeId
     * 通知ID
     * Example Value: ID
     */
    public function setNoticeId($noticeId)
    {
        $this->noticeId             = $noticeId;
        $this->apiParas["noticeId"]  = $noticeId;
    }

    public function getNoticeId()
    {
        return $this->noticeId;
    }

}